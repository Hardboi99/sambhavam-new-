<h2>New Course Enquiry</h2>

<p><strong>Name:</strong> {{ $enquiry->name }}</p>
<p><strong>Phone:</strong> {{ $enquiry->phone }}</p>
@if($enquiry->email)
    <p><strong>Email:</strong> {{ $enquiry->email }}</p>
@endif
<p><strong>Course:</strong> {{ $enquiry->course_title ?? 'Not specified' }}</p>
@if($enquiry->message)
    <p><strong>Message:</strong><br>{{ $enquiry->message }}</p>
@endif

<hr>
<p><small>Submitted on {{ $enquiry->created_at->format('d M Y, h:i A') }}</small></p>