<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // honeypot check
        if ($request->filled('website')) {
            return redirect()->back(); // silently drop bot submissions
        }

        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        try {
            Mail::to('enquiry@sambhavam.org')->send(new ContactMail($validated));
        } catch (\Exception $e) {
            Log::error('Contact form email failed: ' . $e->getMessage());
        }

        return redirect()->route('contact')->with('success', 'Thanks! We\'ll get back to you shortly.');
    }
}