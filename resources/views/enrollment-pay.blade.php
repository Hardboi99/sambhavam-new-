{{-- resources/views/enrollment-pay.blade.php --}}
@extends('layouts.app')

@section('title', 'Complete Payment | Sambhavam Academy')

@section('content')
<section class="pt-80 pb-80">
    <div class="container" style="max-width: 640px;">
        <div class="bg-white rounded shadow-sm p-4 p-md-5">

            <div class="text-center mb-4">
                <h2 class="mb-1">Review &amp; Pay</h2>
                <p class="text-muted mb-0">Reservation No. <strong>{{ $enrollment->reservation_number }}</strong></p>
            </div>

            <div class="enroll-section-header">Enrollment Summary</div>
            <div class="row mb-2">
                <div class="col-6 mb-3">
                    <div class="text-muted small">Student Name</div>
                    <div class="fw-bold">{{ $enrollment->student_name }}</div>
                </div>
                <div class="col-6 mb-3">
                    <div class="text-muted small">Course</div>
                    <div class="fw-bold">{{ $enrollment->course->title }}</div>
                </div>
                <div class="col-6 mb-3">
                    <div class="text-muted small">Category</div>
                    <div class="fw-bold">{{ $enrollment->course->category->name }}</div>
                </div>
                <div class="col-6 mb-3">
                    <div class="text-muted small">Mobile No</div>
                    <div class="fw-bold">{{ $enrollment->mobile_no }}</div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center border-top pt-3 mt-2">
                <span class="fs-5">Amount Payable</span>
                <span class="fs-4 fw-bold text-success">₹{{ number_format($enrollment->course_fee) }}</span>
            </div>

            <button id="payNowBtn" class="ed-primary-btn w-100 mt-4 py-2">Pay ₹{{ number_format($enrollment->course_fee) }} Now</button>

            <p class="text-center text-muted small mt-3 mb-0">
                Payments are processed securely via Razorpay.
            </p>
        </div>
    </div>
</section>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    document.getElementById('payNowBtn').addEventListener('click', function () {
        const options = {
            key: @json($razorpayKey),
            amount: {{ $enrollment->course_fee * 100 }},
            currency: 'INR',
            name: 'Sambhavam Academy',
            description: @json($enrollment->course->title),
            order_id: @json($razorpayOrderId),
            handler: function (response) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = @json(route('enrollment.verify'));

                const fields = {
                    _token: @json(csrf_token()),
                    reservation_number: @json($enrollment->reservation_number),
                    razorpay_order_id: response.razorpay_order_id,
                    razorpay_payment_id: response.razorpay_payment_id,
                    razorpay_signature: response.razorpay_signature,
                };

                for (const key in fields) {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = key;
                    input.value = fields[key];
                    form.appendChild(input);
                }

                document.body.appendChild(form);
                form.submit();
            },
            prefill: {
                name: @json($enrollment->student_name),
                email: @json($enrollment->email),
                contact: @json($enrollment->mobile_no),
            },
            theme: { color: '#016d77' },
        };

        const rzp = new Razorpay(options);
        rzp.open();
    });
</script>
@endsection