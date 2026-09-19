{{-- resources/views/emails/enrollment-confirmation.blade.php --}}
<h2>Thank you for enrolling, {{ $enrollment->student_name }}!</h2>

<p><strong>Reservation Number:</strong> {{ $enrollment->reservation_number }}</p>
<p><strong>Course:</strong> {{ $enrollment->course->title }}</p>
<p><strong>Course Fee:</strong> ₹{{ number_format($enrollment->course_fee) }}</p>
<p><strong>Payment Mode:</strong> {{ ucfirst($enrollment->payment_mode) }}</p>

@if($enrollment->payment_mode === 'installment')
    <p>Since you've chosen the installment plan, please visit your nearest Sambhavam Academy centre to complete your admission and first installment payment.</p>
@else
    <p>Please complete your online payment to confirm your seat.</p>
@endif

<p>Our academic team will contact you shortly at {{ $enrollment->mobile_no }}.</p>

<hr>
<p><small>Sambhavam Academy — Learn. Innovate. Lead. Create Impact.</small></p>