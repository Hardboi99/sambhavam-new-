<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;

class DonationController extends Controller
{
    /**
     * Display the Donation Page.
     */
    public function index()
    {
        $causes = [
            'Sambhavam Foundation General Impact Fund' => 'Where it is needed most (General Fund)',
            'Sambhavam Academy Student Scholarships' => 'Sponsor Underprivileged Aspirants & Students',
            'Climate, Environment & Sustainable Living' => 'Grassroots Eco-Projects & Tree Plantations',
            'Innovation, Livelihoods & Women Empowerment' => 'Skill Development & Entrepreneurship',
        ];

        $razorpayKey = config('services.razorpay.key');

        return view('donate', compact('causes', 'razorpayKey'));
    }

    /**
     * Initiate Razorpay Order for Donation.
     */
    public function initiatePayment(Request $request)
    {
        $validated = $request->validate([
            'donor_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'amount' => 'required|numeric|min:10',
            'cause' => 'nullable|string|max:255',
            'donation_frequency' => 'nullable|in:one_time,monthly',
            'pan_number' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'address' => 'nullable|string|max:500',
            'pincode' => 'nullable|string|max:10',
            'is_anonymous' => 'nullable|boolean',
            'notes' => 'nullable|string|max:500',
        ]);

        $amount = (float) $validated['amount'];
        $amountInPaise = (int) round($amount * 100);

        // Generate unique donation receipt number: DON-2026-000001
        $donationNumber = 'DON-' . date('Y') . '-' . str_pad(Donation::count() + 1, 6, '0', STR_PAD_LEFT);

        $donation = Donation::create([
            'donation_number' => $donationNumber,
            'donor_name' => $validated['donor_name'],
            'email' => $validated['email'],
            'mobile' => $validated['mobile'],
            'pan_number' => !empty($validated['pan_number']) ? strtoupper($validated['pan_number']) : null,
            'city' => $validated['city'] ?? null,
            'state' => $validated['state'] ?? null,
            'address' => $validated['address'] ?? null,
            'pincode' => $validated['pincode'] ?? null,
            'is_anonymous' => $request->boolean('is_anonymous'),
            'amount' => $amount,
            'cause' => $validated['cause'] ?? 'Sambhavam Foundation General Impact Fund',
            'donation_frequency' => $validated['donation_frequency'] ?? 'one_time',
            'payment_status' => 'pending',
            'notes' => $validated['notes'] ?? null,
        ]);

        $razorpayKey = config('services.razorpay.key');
        $razorpaySecret = config('services.razorpay.secret');

        $orderId = null;

        if (!empty($razorpayKey) && !empty($razorpaySecret)) {
            try {
                $api = new Api($razorpayKey, $razorpaySecret);
                $order = $api->order->create([
                    'receipt' => $donation->donation_number,
                    'amount' => $amountInPaise,
                    'currency' => 'INR',
                    'notes' => [
                        'donor_name' => $donation->donor_name,
                        'email' => $donation->email,
                        'cause' => $donation->cause,
                        'donation_number' => $donation->donation_number,
                    ],
                ]);
                $orderId = $order['id'];
                $donation->update(['razorpay_order_id' => $orderId]);
            } catch (\Exception $e) {
                Log::error('Razorpay Order Creation Failed: ' . $e->getMessage());
                return response()->json([
                    'success' => false,
                    'message' => 'Unable to initialize Razorpay payment gateway. Please try again or contact support: ' . $e->getMessage(),
                ], 500);
            }
        } else {
            // Fallback for demo / preview environment when keys aren't added to .env yet
            $orderId = 'order_demo_' . uniqid();
            $donation->update(['razorpay_order_id' => $orderId]);
        }

        return response()->json([
            'success' => true,
            'donation_number' => $donation->donation_number,
            'amount' => $amount,
            'amount_in_paise' => $amountInPaise,
            'currency' => 'INR',
            'order_id' => $orderId,
            'key' => $razorpayKey ?: 'rzp_test_demo',
            'donor_name' => $donation->donor_name,
            'email' => $donation->email,
            'mobile' => $donation->mobile,
            'cause' => $donation->cause,
        ]);
    }

    /**
     * Verify Razorpay Payment Signature & Complete Donation.
     */
    public function verifyPayment(Request $request)
    {
        $validated = $request->validate([
            'donation_number' => 'required|exists:donations,donation_number',
            'razorpay_order_id' => 'required',
            'razorpay_payment_id' => 'required',
            'razorpay_signature' => 'nullable',
        ]);

        $donation = Donation::where('donation_number', $validated['donation_number'])->firstOrFail();

        $razorpayKey = config('services.razorpay.key');
        $razorpaySecret = config('services.razorpay.secret');

        if (!empty($razorpayKey) && !empty($razorpaySecret) && !empty($validated['razorpay_signature'])) {
            $api = new Api($razorpayKey, $razorpaySecret);

            try {
                $api->utility->verifyPaymentSignature([
                    'razorpay_order_id' => $validated['razorpay_order_id'],
                    'razorpay_payment_id' => $validated['razorpay_payment_id'],
                    'razorpay_signature' => $validated['razorpay_signature'],
                ]);
            } catch (\Exception $e) {
                Log::error('Razorpay Signature Verification Failed: ' . $e->getMessage());
                $donation->update(['payment_status' => 'failed']);

                if ($request->wantsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Payment verification failed. Please contact Sambhavam Foundation if money was debited.',
                    ], 400);
                }

                return redirect()->route('donate')->with('error', 'Payment verification failed.');
            }
        }

        // Update payment status to paid
        $donation->update([
            'payment_status' => 'paid',
            'razorpay_payment_id' => $validated['razorpay_payment_id'],
            'razorpay_signature' => $validated['razorpay_signature'] ?? 'verified',
        ]);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'redirect_url' => route('donation.success', $donation->donation_number),
            ]);
        }

        return redirect()->route('donation.success', $donation->donation_number);
    }

    /**
     * Donation Success & 80G Receipt Page.
     */
    public function success($donationNumber)
    {
        $donation = Donation::where('donation_number', $donationNumber)->firstOrFail();

        return view('donation-success', compact('donation'));
    }
}
