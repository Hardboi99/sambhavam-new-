<?php

namespace App\Http\Controllers;

use App\Mail\CourseEnquiryMail;
use App\Models\Course;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    // app/Http/Controllers/EnquiryController.php
public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'city' => 'required|string|max:100',
        'interest' => 'required|string|max:255',
        'course_id' => 'required|exists:courses,id',
        'message' => 'nullable|string|max:500',
    ]);

    $enquiry = Enquiry::create($data);

    try {
        Mail::to('enquiry@sambhavam.org')->send(new EnquiryReceivedMail($enquiry));
    } catch (\Exception $e) {
        \Log::error('Enquiry email failed: ' . $e->getMessage());
    }

    return back()->with('success', 'Thank you! Our team will contact you shortly.');
}
}