<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Mail\EnrollmentConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Razorpay\Api\Api;

class EnrollmentController extends Controller
{
    public function create(Request $request)
    {
        $course = Course::where('slug', $request->query('course'))->firstOrFail();

        return view('enroll-form', compact('course'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'student_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female,Other',
            'aadhar_number' => 'nullable|string|max:20',
            'date_of_birth' => 'nullable|date',
            'previous_board' => 'nullable|string|max:255',
            'previous_school' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:100',
            'district' => 'nullable|string|max:100',
            'address' => 'required|string|max:500',
            'mobile_no' => 'required|string|max:15',
            'whatsapp_number' => 'nullable|string|max:15',
            'email' => 'required|email|max:255',
            'pincode' => 'nullable|string|max:10',
            'payment_mode' => 'required|in:full,installment',
        ]);

        $course = Course::findOrFail($data['course_id']);

        // Reservation number: e.g. SBH-2026-000123
        $reservationNumber = 'SBH-' . date('Y') . '-' . str_pad(Enrollment::count() + 1, 6, '0', STR_PAD_LEFT);

        // Installment students can only pay offline (visit centre); full-payment students choose online
        $paymentMethod = $data['payment_mode'] === 'installment' ? 'offline' : 'online';

        $enrollment = Enrollment::create([
            'reservation_number' => $reservationNumber,
            'course_id' => $course->id,
            'student_name' => $data['student_name'],
            'father_name' => $data['father_name'],
            'mother_name' => $data['mother_name'],
            'gender' => $data['gender'],
            'aadhar_number' => $data['aadhar_number'] ?? null,
            'date_of_birth' => $data['date_of_birth'] ?? null,
            'previous_board' => $data['previous_board'] ?? null,
            'previous_school' => $data['previous_school'] ?? null,
            'state' => $data['state'] ?? null,
            'district' => $data['district'] ?? null,
            'address' => $data['address'],
            'mobile_no' => $data['mobile_no'],
            'whatsapp_number' => $data['whatsapp_number'] ?? null,
            'email' => $data['email'],
            'pincode' => $data['pincode'] ?? null,
            'course_fee' => $course->price ?? 0,
            'payment_mode' => $data['payment_mode'],
            'payment_method' => $paymentMethod,
        ]);

        // Send confirmation email regardless of payment path
        try {
            Mail::to($enrollment->email)->send(new EnrollmentConfirmationMail($enrollment));
        } catch (\Exception $e) {
            \Log::error('Enrollment confirmation email failed: ' . $e->getMessage());
        }

        if ($paymentMethod === 'offline') {
            // Installment plan — no online payment, just confirm and ask them to visit centre
            return redirect()->route('enrollment.success', $enrollment->reservation_number);
        }

        // Full payment — go create a Razorpay order next
        return redirect()->route('enrollment.pay', $enrollment->reservation_number);
    }

    public function success($reservationNumber)
    {
        $enrollment = Enrollment::where('reservation_number', $reservationNumber)->firstOrFail();

        return view('enrollment-success', compact('enrollment'));
    }

    public function pay($reservationNumber)
    {
        $enrollment = Enrollment::where('reservation_number', $reservationNumber)->firstOrFail();

        if ($enrollment->payment_method !== 'online') {
            return redirect()->route('enrollment.success', $enrollment->reservation_number);
        }

        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

        $razorpayOrder = $api->order->create([
            'receipt' => $enrollment->reservation_number,
            'amount' => (int) ($enrollment->course_fee * 100), // Razorpay expects paise, not rupees
            'currency' => 'INR',
        ]);

        $enrollment->update(['razorpay_order_id' => $razorpayOrder['id']]);

        return view('enrollment-pay', [
            'enrollment' => $enrollment,
            'razorpayOrderId' => $razorpayOrder['id'],
            'razorpayKey' => config('services.razorpay.key'),
        ]);
    }

    public function verifyPayment(Request $request)
{
    $enrollment = Enrollment::where('reservation_number', $request->reservation_number)->firstOrFail();

    $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

    try {
        $api->utility->verifyPaymentSignature([
            'razorpay_order_id' => $request->razorpay_order_id,
            'razorpay_payment_id' => $request->razorpay_payment_id,
            'razorpay_signature' => $request->razorpay_signature,
        ]);

        $enrollment->update([
            'razorpay_payment_id' => $request->razorpay_payment_id,
            'payment_status' => 'paid',
            'amount_paid' => $enrollment->course_fee,
            'admission_status' => 'confirmed',
        ]);

        // 👇 add this block
        try {
            Mail::to($enrollment->email)->send(new \App\Mail\PaymentSuccessMail($enrollment));
        } catch (\Exception $e) {
            \Log::error('Payment success email failed: ' . $e->getMessage());
        }

        return redirect()->route('enrollment.success', $enrollment->reservation_number)
            ->with('payment_success', true);

    } catch (\Exception $e) {
        \Log::error('Razorpay signature verification failed: ' . $e->getMessage());

        return redirect()->route('enrollment.success', $enrollment->reservation_number)
            ->with('payment_failed', true);
    }

    }

    public function razorpayWebhook(Request $request)
    {
        $webhookSecret = config('services.razorpay.webhook_secret');
        $signature = $request->header('X-Razorpay-Signature');

        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

        try {
            $api->utility->verifyWebhookSignature(
                $request->getContent(),
                $signature,
                $webhookSecret
            );
        } catch (\Exception $e) {
            \Log::warning('Razorpay webhook signature mismatch: ' . $e->getMessage());
            return response()->json(['status' => 'invalid'], 400);
        }

        $payload = $request->input('payload.payment.entity');
        $orderId = $payload['order_id'] ?? null;

        if ($orderId) {
            $enrollment = Enrollment::where('razorpay_order_id', $orderId)->first();

            if ($enrollment && $enrollment->payment_status !== 'paid') {
                $enrollment->update([
                    'razorpay_payment_id' => $payload['id'],
                    'payment_status' => 'paid',
                    'amount_paid' => $enrollment->course_fee,
                    'admission_status' => 'confirmed',
                ]);
            }
        }

        return response()->json(['status' => 'ok']);
    }
}