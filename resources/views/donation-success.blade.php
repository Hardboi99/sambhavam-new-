@extends('layouts.app')

@section('title', 'Thank You for Your Donation | Sambhavam Foundation')
@section('meta_description', 'Thank you for supporting Sambhavam Foundation. Your official 80G donation receipt is generated.')

@section('content')
<section class="donation-success-section pt-90 pb-100">
    <div class="container" style="max-width: 780px;">

        <!-- Thank You Alert Card -->
        <div class="thankyou-card text-center p-4 p-md-5 mb-4 shadow-sm bg-white rounded-4 border">
            <div class="success-icon-pod mb-3">
                <i class="fa fa-heart"></i>
            </div>
            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill fw-bold mb-2">
                <i class="fa fa-check-circle me-1"></i> Payment Successfully Completed
            </span>
            <h2 class="thankyou-title mb-2">Thank You for Your Generosity!</h2>
            <p class="thankyou-subtitle text-muted mb-4">
                Your contribution directly empowers deserving youth with educational scholarships, digital tools, and life-changing mentorship.
            </p>

            <!-- Printable 80G Receipt Box -->
            <div class="receipt-box text-start p-4 rounded-3 border mb-4" id="printableReceipt">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 flex-wrap gap-2">
                    <div>
                        <h4 class="mb-0 text-dark fw-bold">SAMBHAVAM FOUNDATION</h4>
                        <span class="text-muted small">Registered Non-Profit NGO &bull; 80G &amp; 12A Certified</span>
                    </div>
                    <div class="text-md-end">
                        <span class="badge bg-light text-dark border px-2 py-1">Receipt No: <strong>{{ $donation->donation_number }}</strong></span>
                        <div class="text-muted small mt-1">Date: {{ $donation->created_at->format('d M Y, h:i A') }}</div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-sm-6">
                        <div class="text-muted small">Donor Name</div>
                        <div class="fw-bold fs-6">{{ $donation->is_anonymous ? 'Anonymous Supporter' : $donation->donor_name }}</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-muted small">Email Address</div>
                        <div class="fw-bold">{{ $donation->email }}</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-muted small">Mobile Number</div>
                        <div class="fw-bold">{{ $donation->mobile }}</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-muted small">PAN Number (for 80G)</div>
                        <div class="fw-bold">{{ $donation->pan_number ?? 'Not Provided' }}</div>
                    </div>
                    <div class="col-12">
                        <div class="text-muted small">Supported Cause</div>
                        <div class="fw-bold text-primary">{{ $donation->cause }}</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-muted small">Payment Gateway ID</div>
                        <div class="small text-monospace text-muted">{{ $donation->razorpay_payment_id ?? 'Verified' }}</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-muted small">Donation Type</div>
                        <div class="fw-bold">{{ ucfirst(str_replace('_', ' ', $donation->donation_frequency)) }} Contribution</div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded-2 border mt-3">
                    <span class="fs-5 fw-bold text-dark">Total Amount Paid:</span>
                    <span class="fs-3 fw-bold text-success">₹{{ number_format($donation->amount, 2) }}</span>
                </div>

                <div class="text-muted small mt-3 border-top pt-2">
                    <i class="fa fa-info-circle me-1"></i> Donations are eligible for 50% tax deduction under Section 80G of the Income Tax Act 1961. A copy of this receipt has been emailed to <strong>{{ $donation->email }}</strong>.
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <button type="button" class="btn btn-outline-dark px-4 py-2 rounded-pill fw-bold" onclick="window.print()">
                    <i class="fa fa-print me-2"></i> Print / Save Receipt
                </button>
                <a href="{{ url('/') }}" class="ed-primary-btn px-4 py-2">
                    Return to Home
                </a>
            </div>

            <!-- Share Gratitude Strip -->
            <div class="share-gratitude-box mt-4 pt-3 border-top text-center">
                <p class="text-muted small mb-2">Inspire others to support education &amp; social impact:</p>
                <a href="https://api.whatsapp.com/send?text={{ urlencode('I just supported Sambhavam Foundation in empowering deserving students and future leaders! Join me in making a difference: ' . url('/donate')) }}" target="_blank" class="btn btn-success btn-sm rounded-pill px-3">
                    <i class="fa fa-whatsapp me-1"></i> Share on WhatsApp
                </a>
            </div>

        </div>

    </div>
</section>

<style>
.donation-success-section {
    background: #f8fafc;
    min-height: 80vh;
}
.thankyou-card {
    border-radius: 24px;
    border-color: #e2e8f0;
}
.success-icon-pod {
    width: 72px;
    height: 72px;
    border-radius: 50%;
    background: linear-gradient(135deg, #e11d48 0%, #dc2626 100%);
    color: #ffffff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    box-shadow: 0 10px 25px rgba(220, 38, 38, 0.3);
    animation: heartBeat 2s infinite ease-in-out;
}
.thankyou-title {
    font-size: 28px;
    font-weight: 800;
    color: #034861;
}
.receipt-box {
    background: #ffffff;
    border-color: #e2e8f0 !important;
}

@media print {
    body * {
        visibility: hidden;
    }
    #printableReceipt, #printableReceipt * {
        visibility: visible;
    }
    #printableReceipt {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        border: none !important;
    }
}
</style>
@endsection
