<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
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

        // TODO: send mail / store in DB using $validated

        return redirect()->route('contact')->with('success', 'Thanks! We\'ll get back to you shortly.');
    }
}
