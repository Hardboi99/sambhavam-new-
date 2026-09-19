<?php

namespace App\Mail;

use App\Models\Enquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CourseEnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public Enquiry $enquiry;

    public function __construct(Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('enquiry@sambhavam.org', $this->enquiry->name . ' via Sambhavam Website'),
            replyTo: $this->enquiry->email
                ? [new Address($this->enquiry->email, $this->enquiry->name)]
                : [],
            subject: 'New Course Enquiry: ' . $this->enquiry->course_title,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.course-enquiry',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}