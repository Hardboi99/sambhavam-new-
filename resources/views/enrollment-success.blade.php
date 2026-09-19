{{-- resources/views/enrollment-success.blade.php --}}
@extends('layouts.app')

@section('title', 'Enrollment Received')

@section('content')
<section class="pt-120 pb-120">
    <div class="container text-center">

        @if(session('payment_success'))
            <div class="alert alert-success">Payment successful! Your admission is confirmed.</div>
        @elseif(session('payment_failed'))
            <div class="alert alert-danger">Payment verification failed. Please contact us or try again.</div>
        @endif

        <h2>Thank you, {{ $enrollment->student_name }}!</h2>
        <p>Your reservation number is <strong>{{ $enrollment->reservation_number }}</strong>.</p>

        @if($enrollment->payment_mode === 'installment')
            <p>Please visit your nearest Sambhavam Academy centre to complete your admission.</p>
        @endif

        <p>A confirmation email has been sent to {{ $enrollment->email }}.</p>
        <a href="{{ url('/') }}" class="ed-primary-btn">Back to Home</a>
    </div>
</section>
@endsection