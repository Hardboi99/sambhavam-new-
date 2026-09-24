@extends('layouts.app')

@section('title', 'Donate & Support | Sambhavam Foundation')
@section('meta_description', 'Support Sambhavam Foundation to empower deserving students with scholarships, digital learning, civil services mentorship, and sustainable development programs. 80G tax benefits available.')

@section('content')
<!-- ============================================= -->
<!-- DONATION HERO SECTION -->
<!-- ============================================= -->
<section class="donate-hero-section pt-100 pb-70">
    <div class="donate-hero-glow glow-1"></div>
    <div class="donate-hero-glow glow-2"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-10">
                <div class="donate-hero-badge mb-3 wow fade-in-bottom" data-wow-delay="100ms">
                    <span class="badge-heart-icon"><i class="fa fa-heart"></i></span>
                    <span class="badge-text">Sambhavam Foundation Giving Initiative</span>
                </div>
                <h1 class="donate-hero-title wow fade-in-bottom" data-wow-delay="200ms">
                    Fuel Dreams. Empower Aspirants. <br>
                    <span class="donate-title-gradient">Transform Generations.</span>
                </h1>
                <p class="donate-hero-subtext wow fade-in-bottom" data-wow-delay="300ms">
                    Every rupee you contribute directly sponsors scholarships, advanced digital classrooms, civil services mentorship, and grassroots sustainable livelihood projects for youth across India.
                </p>

                <!-- Trust Badges Strip -->
                <div class="donate-trust-strip wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="trust-badge-item">
                        <i class="fa fa-file-text-o"></i>
                        <span><strong>80G Tax Exemption</strong> (50% Tax Benefit)</span>
                    </div>
                    <div class="trust-badge-divider"></div>
                    <div class="trust-badge-item">
                        <i class="fa fa-shield"></i>
                        <span><strong>100% Secure</strong> Razorpay Gateway</span>
                    </div>
                    <div class="trust-badge-divider"></div>
                    <div class="trust-badge-item">
                        <i class="fa fa-check-circle"></i>
                        <span><strong>Instant Receipt</strong> &amp; Certificate</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- MAIN DONATION WIDGET & IMPACT SECTION -->
<!-- ============================================= -->
<section class="donate-main-section pb-110">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- LEFT COLUMN: INTERACTIVE DONATION FORM -->
            <div class="col-lg-7 col-md-12">
                <div class="donate-card-wrap wow fade-in-bottom" data-wow-delay="200ms">
                    <div class="donate-card-header">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                            <h3 class="donate-form-title mb-0">Make a Donation</h3>
                            <!-- Frequency Toggle -->
                            <div class="donation-frequency-toggle">
                                <button type="button" class="freq-btn active" data-freq="one_time">Give Once</button>
                                <button type="button" class="freq-btn" data-freq="monthly">Monthly <span class="freq-sparkle">✨</span></button>
                            </div>
                        </div>
                    </div>

                    <form id="donationCheckoutForm" class="donate-form-body">
                        @csrf
                        <input type="hidden" name="donation_frequency" id="donation_frequency" value="one_time">

                        <!-- 1. Choose Amount -->
                        <div class="donate-step-block mb-4">
                            <label class="donate-step-label">
                                <span class="step-num">1</span> Select Donation Amount (₹ INR)
                            </label>

                            <!-- Quick Amount Chips -->
                            <div class="donation-amount-grid">
                                <button type="button" class="amount-chip" data-amount="500" data-impact="Provides study kits &amp; foundational workbooks for 1 student.">
                                    <span class="amt-val">₹500</span>
                                    <span class="amt-tag">Study Kit</span>
                                </button>
                                <button type="button" class="amount-chip active" data-amount="1500" data-impact="Supports 1 month of smart classroom digital modules &amp; test series.">
                                    <span class="amt-val">₹1,500</span>
                                    <span class="amt-tag">Digital Access</span>
                                </button>
                                <button type="button" class="amount-chip" data-amount="3000" data-impact="Sponsors 1 month of intensive 1-on-1 mentorship &amp; competitive prep.">
                                    <span class="amt-val">₹3,000</span>
                                    <span class="amt-tag">Mentorship</span>
                                </button>
                                <button type="button" class="amount-chip" data-amount="5000" data-impact="Sponsors a complete term scholarship for a meritorious aspirant.">
                                    <span class="amt-val">₹5,000</span>
                                    <span class="amt-tag">Scholarship</span>
                                </button>
                                <button type="button" class="amount-chip" data-amount="10000" data-impact="Equips a rural learning centre with interactive digital hardware.">
                                    <span class="amt-val">₹10,000</span>
                                    <span class="amt-tag">Tech Grant</span>
                                </button>
                                <button type="button" class="amount-chip" data-amount="25000" data-impact="Full-year comprehensive civil services &amp; leadership fellowship.">
                                    <span class="amt-val">₹25,000</span>
                                    <span class="amt-tag">Full Fellowship</span>
                                </button>
                            </div>

                            <!-- Custom Amount Input -->
                            <div class="custom-amount-wrap mt-3">
                                <span class="custom-currency">₹</span>
                                <input type="number" id="customAmountInput" name="amount" class="custom-amount-input" value="1500" min="10" step="10" placeholder="Enter custom amount">
                            </div>

                            <!-- Dynamic Impact Statement -->
                            <div class="dynamic-impact-card mt-3">
                                <div class="impact-icon"><i class="fa fa-lightbulb-o"></i></div>
                                <div class="impact-text" id="dynamicImpactText">
                                    Supports 1 month of smart classroom digital modules &amp; test series.
                                </div>
                            </div>
                        </div>

                        <!-- 2. Cause / Purpose -->
                        <div class="donate-step-block mb-4">
                            <label class="donate-step-label" for="causeSelect">
                                <span class="step-num">2</span> Direct Your Contribution To
                            </label>
                            <div class="donate-select-wrap">
                                <select name="cause" id="causeSelect" class="form-select donate-input-styled" required>
                                    @foreach($causes as $causeKey => $causeLabel)
                                        <option value="{{ $causeKey }}">{{ $causeLabel }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- 3. Donor Details -->
                        <div class="donate-step-block mb-4">
                            <label class="donate-step-label">
                                <span class="step-num">3</span> Donor Information (For 80G Receipt)
                            </label>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="field-mini-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="donor_name" class="form-control donate-input-styled" placeholder="e.g. Rajesh Sharma" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="field-mini-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control donate-input-styled" placeholder="e.g. rajesh@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="field-mini-label">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="tel" name="mobile" class="form-control donate-input-styled" placeholder="e.g. 9876543210" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="field-mini-label">PAN Number <span class="text-muted">(Optional for 80G Tax Benefit)</span></label>
                                    <input type="text" name="pan_number" class="form-control donate-input-styled text-uppercase" maxlength="10" placeholder="e.g. ABCDE1234F">
                                </div>
                                <div class="col-md-6">
                                    <label class="field-mini-label">City</label>
                                    <input type="text" name="city" class="form-control donate-input-styled" placeholder="e.g. Mumbai">
                                </div>
                                <div class="col-md-6">
                                    <label class="field-mini-label">State</label>
                                    <input type="text" name="state" class="form-control donate-input-styled" placeholder="e.g. Maharashtra">
                                </div>
                            </div>

                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" name="is_anonymous" value="1" id="anonymousCheck">
                                <label class="form-check-label text-muted small" for="anonymousCheck">
                                    Keep my name anonymous on Sambhavam donor honor rolls and public impact lists.
                                </label>
                            </div>
                        </div>

                        <!-- 4. Pay Button & Security Badges -->
                        <div class="donate-action-block pt-3 border-top">
                            <button type="submit" id="donateSubmitBtn" class="donate-pay-now-btn w-100">
                                <span class="btn-main-text">
                                    <i class="fa fa-lock me-2"></i> Donate <span id="btnAmountDisplay">₹1,500</span> Securely
                                </span>
                                <span class="btn-spinner d-none"><i class="fa fa-spinner fa-spin"></i> Processing...</span>
                            </button>

                            <!-- Supported Payment Icons -->
                            <div class="payment-methods-strip mt-3 text-center">
                                <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap text-muted small">
                                    <span><i class="fa fa-shield text-success me-1"></i> 256-Bit SSL Encrypted</span>
                                    <span>&bull;</span>
                                    <span><i class="fa fa-qrcode text-primary me-1"></i> UPI (GPay / PhonePe / Paytm)</span>
                                    <span>&bull;</span>
                                    <span><i class="fa fa-credit-card text-warning me-1"></i> Cards &amp; NetBanking</span>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <!-- RIGHT COLUMN: TRANSPARENCY, 80G INFO & BANK DETAILS -->
            <div class="col-lg-5 col-md-12">
                <div class="donate-sidebar-wrap d-flex flex-column gap-4">

                    <!-- Card 1: Fund Allocation Breakdown -->
                    <div class="donate-side-card p-4 wow fade-in-bottom" data-wow-delay="250ms">
                        <h4 class="side-card-title mb-3">
                            <i class="fa fa-pie-chart text-teal me-2"></i> Where Your Money Goes
                        </h4>
                        <div class="fund-progress-wrap mb-3">
                            <div class="fund-bar d-flex">
                                <div class="fund-segment seg-1" style="width: 85%;" title="85% Direct Student Scholarships &amp; Mentorship"></div>
                                <div class="fund-segment seg-2" style="width: 10%;" title="10% Smart Classroom &amp; Tech Infra"></div>
                                <div class="fund-segment seg-3" style="width: 5%;" title="5% Community Operations"></div>
                            </div>
                        </div>
                        <ul class="fund-legend-list list-unstyled mb-0">
                            <li>
                                <span class="legend-dot dot-1"></span>
                                <span class="legend-label"><strong>85%</strong> Direct Student Scholarships &amp; Books</span>
                            </li>
                            <li>
                                <span class="legend-dot dot-2"></span>
                                <span class="legend-label"><strong>10%</strong> Digital Modules, AI &amp; Smart Classrooms</span>
                            </li>
                            <li>
                                <span class="legend-dot dot-3"></span>
                                <span class="legend-label"><strong>5%</strong> Grassroots Outreach &amp; Governance</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Card 2: 80G Tax Benefit Highlight -->
                    <div class="donate-side-card p-4 tax-benefit-card wow fade-in-bottom" data-wow-delay="350ms">
                        <div class="d-flex align-items-start gap-3">
                            <div class="tax-icon-pod">
                                <i class="fa fa-certificate"></i>
                            </div>
                            <div>
                                <h4 class="side-card-title mb-1">Tax Exemption under 80G</h4>
                                <p class="text-muted small mb-2">
                                    All donations made to SAMBHAVAM FOUNDATION are eligible for <strong>50% deduction</strong> under Section 80G of the Indian Income Tax Act.
                                </p>
                                <div class="tax-badge-pill">
                                    <i class="fa fa-check me-1"></i> 12A &amp; 80G Certified NGO
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Direct Bank Transfer / CSR -->
                    <div class="donate-side-card p-4 bank-details-card wow fade-in-bottom" data-wow-delay="450ms">
                        <h4 class="side-card-title mb-2">
                            <i class="fa fa-university text-gold me-2"></i> Direct Bank Transfer / CSR
                        </h4>
                        <p class="text-muted small mb-3">
                            For large contributions, RTGS/NEFT or Corporate CSR grants, you may transfer directly to our official bank account:
                        </p>

                        <div class="bank-info-grid">
                            <div class="bank-info-row">
                                <span class="bank-lbl">Account Name:</span>
                                <span class="bank-val">SAMBHAVAM FOUNDATION</span>
                            </div>
                            <div class="bank-info-row">
                                <span class="bank-lbl">Bank Name:</span>
                                <span class="bank-val">State Bank of India (SBI)</span>
                            </div>
                            <div class="bank-info-row">
                                <span class="bank-lbl">Account Number:</span>
                                <span class="bank-val d-flex align-items-center justify-content-between">
                                    <strong id="accNumText">41890234891</strong>
                                    <button type="button" class="copy-mini-btn" onclick="copyToClipboard('41890234891', this)">Copy</button>
                                </span>
                            </div>
                            <div class="bank-info-row">
                                <span class="bank-lbl">IFSC Code:</span>
                                <span class="bank-val d-flex align-items-center justify-content-between">
                                    <strong id="ifscText">SBIN0007943</strong>
                                    <button type="button" class="copy-mini-btn" onclick="copyToClipboard('SBIN0007943', this)">Copy</button>
                                </span>
                            </div>
                            <div class="bank-info-row">
                                <span class="bank-lbl">Branch:</span>
                                <span class="bank-val">CBD Belapur, Navi Mumbai</span>
                            </div>
                        </div>

                        <div class="mt-3 text-muted small">
                            <i class="fa fa-info-circle me-1"></i> After bank transfer, please email your transaction UTR to <strong>enquiry@sambhavam.org</strong> to receive your 80G receipt.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- FREQUENTLY ASKED QUESTIONS SECTION -->
<!-- ============================================= -->
<section class="donate-faq-section py-80 bg-white border-top">
    <div class="container" style="max-width: 860px;">
        <div class="section-heading text-center mb-50">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                <span class="heading-icon"><i class="fa fa-question-circle"></i></span>Common Questions
            </h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="300ms">Frequently Asked Questions</h2>
        </div>

        <div class="accordion donate-faq-accordion" id="donateFaqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                        Is my donation eligible for tax exemption?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#donateFaqAccordion">
                    <div class="accordion-body">
                        Yes! Sambhavam Foundation is a registered non-profit organization under Section 12A and 80G of the Income Tax Act. Indian citizens and entities can claim a 50% deduction on the donated amount.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        How and when will I receive my 80G tax receipt?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#donateFaqAccordion">
                    <div class="accordion-body">
                        Immediately upon successful completion of your online donation, an official digital receipt with your unique donation reservation number and 80G tax details will be generated on screen and sent to your registered email address.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        What payment methods can I use?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#donateFaqAccordion">
                    <div class="accordion-body">
                        We support all major payment modes via Razorpay: UPI (Google Pay, PhonePe, Paytm, BHIM), Debit/Credit Cards (Visa, MasterCard, RuPay), NetBanking from 50+ Indian banks, and digital wallets.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Can corporate CSR grants or institutional donations be made?
                    </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#donateFaqAccordion">
                    <div class="accordion-body">
                        Yes. Sambhavam Foundation actively partners with corporate CSR initiatives in Education, Skill Development, Climate Action, and Women Empowerment. For customized CSR partnership proposals and MOUs, please email <strong>enquiry@sambhavam.org</strong>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================= -->
<!-- RAZORPAY CHECKOUT SCRIPT & INTERACTION LOGIC -->
<!-- ============================================= -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Destroy niceSelect if active on the cause dropdown
    if (window.jQuery && jQuery.fn.niceSelect) {
        jQuery('#causeSelect').niceSelect('destroy');
    }

    const form = document.getElementById('donationCheckoutForm');
    const amountChips = document.querySelectorAll('.amount-chip');
    const customInput = document.getElementById('customAmountInput');
    const dynamicImpactText = document.getElementById('dynamicImpactText');
    const btnAmountDisplay = document.getElementById('btnAmountDisplay');
    const submitBtn = document.getElementById('donateSubmitBtn');
    const btnMainText = submitBtn.querySelector('.btn-main-text');
    const btnSpinner = submitBtn.querySelector('.btn-spinner');
    const freqBtns = document.querySelectorAll('.freq-btn');
    const freqInput = document.getElementById('donation_frequency');

    // Handle Frequency Toggle
    freqBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            freqBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            freqInput.value = this.dataset.freq;
        });
    });

    // Update Amount & Impact
    function setAmount(amount, impactDesc) {
        customInput.value = amount;
        btnAmountDisplay.textContent = '₹' + Number(amount).toLocaleString('en-IN');
        if (impactDesc) {
            dynamicImpactText.innerHTML = impactDesc;
        } else {
            dynamicImpactText.innerHTML = `Your generous contribution of <strong>₹${Number(amount).toLocaleString('en-IN')}</strong> directly empowers students and social initiatives.`;
        }
    }

    // Handle Amount Chip Click
    amountChips.forEach(chip => {
        chip.addEventListener('click', function () {
            amountChips.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            const amt = this.dataset.amount;
            const impact = this.dataset.impact;
            setAmount(amt, impact);
        });
    });

    // Handle Custom Amount Typing
    customInput.addEventListener('input', function () {
        const val = parseFloat(this.value) || 0;
        amountChips.forEach(chip => {
            if (parseFloat(chip.dataset.amount) === val) {
                chip.classList.add('active');
            } else {
                chip.classList.remove('active');
            }
        });
        setAmount(val, null);
    });

    // Handle Form Submit -> Razorpay Gateway
    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        const amount = parseFloat(customInput.value);
        if (!amount || amount < 10) {
            alert('Please enter a valid donation amount (minimum ₹10).');
            customInput.focus();
            return;
        }

        // Button Loading State
        submitBtn.disabled = true;
        btnMainText.classList.add('d-none');
        btnSpinner.classList.remove('d-none');
        btnSpinner.innerHTML = '<i class="fa fa-spinner fa-spin me-2"></i> Initializing Gateway...';

        const formData = new FormData(form);

        try {
            const response = await fetch("{{ route('donation.initiate') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            });

            const data = await response.json();

            if (!data.success) {
                throw new Error(data.message || 'Failed to initiate donation order.');
            }

            // Razorpay Options
            const rzpOptions = {
                key: data.key,
                amount: data.amount_in_paise,
                currency: data.currency || 'INR',
                name: 'Sambhavam Foundation',
                description: 'Donation - ' + (data.cause || 'General Fund'),
                image: '{{ asset("images/logo.png") }}',
                order_id: data.order_id && !data.order_id.startsWith('order_demo_') ? data.order_id : undefined,
                handler: async function (paymentResponse) {
                    submitBtn.disabled = true;
                    btnMainText.classList.add('d-none');
                    btnSpinner.classList.remove('d-none');
                    btnSpinner.innerHTML = '<i class="fa fa-spinner fa-spin me-2"></i> Confirming Donation &amp; Generating Receipt...';

                    // Send to verification route
                    try {
                        const verifyRes = await fetch("{{ route('donation.verify') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                donation_number: data.donation_number,
                                razorpay_order_id: paymentResponse.razorpay_order_id || data.order_id,
                                razorpay_payment_id: paymentResponse.razorpay_payment_id,
                                razorpay_signature: paymentResponse.razorpay_signature || ''
                            })
                        });

                        const verifyData = await verifyRes.json();
                        if (verifyData.success && verifyData.redirect_url) {
                            window.location.href = verifyData.redirect_url;
                        } else {
                            window.location.href = "{{ url('/donate/success') }}/" + data.donation_number;
                        }
                    } catch (err) {
                        console.error('Verification error:', err);
                        window.location.href = "{{ url('/donate/success') }}/" + data.donation_number;
                    }
                },
                prefill: {
                    name: data.donor_name,
                    email: data.email,
                    contact: data.mobile
                },
                notes: {
                    donation_number: data.donation_number,
                    cause: data.cause
                },
                theme: {
                    color: '#016d77'
                },
                modal: {
                    ondismiss: function () {
                        submitBtn.disabled = false;
                        btnMainText.classList.remove('d-none');
                        btnSpinner.classList.add('d-none');
                    }
                }
            };

            const rzp = new Razorpay(rzpOptions);
            rzp.on('payment.failed', function (response) {
                alert('Payment failed: ' + (response.error.description || 'Transaction could not be completed.'));
                submitBtn.disabled = false;
                btnMainText.classList.remove('d-none');
                btnSpinner.classList.add('d-none');
            });

            rzp.open();

        } catch (error) {
            alert(error.message || 'Something went wrong while initiating donation.');
            submitBtn.disabled = false;
            btnMainText.classList.remove('d-none');
            btnSpinner.classList.add('d-none');
        }
    });
});

window.addEventListener('load', function () {
    if (window.jQuery && jQuery.fn.niceSelect) {
        jQuery('#causeSelect').niceSelect('destroy');
    }
});

// Copy Bank details helper
function copyToClipboard(text, btn) {
    navigator.clipboard.writeText(text).then(() => {
        const origText = btn.textContent;
        btn.textContent = 'Copied!';
        btn.classList.add('btn-copied');
        setTimeout(() => {
            btn.textContent = origText;
            btn.classList.remove('btn-copied');
        }, 2000);
    });
}
</script>

<style>
/* Clean Dropdown override */
.donate-select-wrap .nice-select {
    display: none !important;
}
#causeSelect {
    display: block !important;
    width: 100% !important;
    height: 48px !important;
    line-height: normal !important;
    background-color: #ffffff !important;
    cursor: pointer !important;
    border: 1.5px solid #cbd5e1 !important;
    border-radius: 12px !important;
    padding: 10px 16px !important;
    font-size: 14.5px !important;
    font-weight: 500 !important;
    color: #1e293b !important;
    appearance: auto !important;
    -webkit-appearance: auto !important;
    -moz-appearance: auto !important;
}
/* ======================================================== */
/* PROFESSIONAL DONATION PAGE STYLES */
/* ======================================================== */
.donate-hero-section {
    background: linear-gradient(180deg, #034861 0%, #016d77 70%, #015058 100%);
    color: #ffffff;
    position: relative;
    overflow: hidden;
}
.donate-hero-glow {
    position: absolute;
    border-radius: 50%;
    filter: blur(120px);
    pointer-events: none;
    opacity: 0.35;
}
.donate-hero-glow.glow-1 {
    top: -20%;
    left: -10%;
    width: 500px;
    height: 500px;
    background: #deb65e;
}
.donate-hero-glow.glow-2 {
    bottom: -20%;
    right: -10%;
    width: 550px;
    height: 550px;
    background: #e11d48;
}

.donate-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.25);
    padding: 6px 18px;
    border-radius: 30px;
}
.badge-heart-icon {
    color: #f43f5e;
    font-size: 13px;
    animation: heartBeat 2s infinite ease-in-out;
}
.badge-text {
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.5px;
    color: #ffffff;
    text-transform: uppercase;
}

.donate-hero-title {
    font-size: 42px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.25;
    margin-bottom: 18px;
}
.donate-title-gradient {
    background: linear-gradient(135deg, #deb65e 0%, #f4d06f 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.donate-hero-subtext {
    font-size: 17px;
    color: #e2e8f0;
    max-width: 760px;
    margin: 0 auto 30px;
    line-height: 1.65;
}

/* Trust Strip */
.donate-trust-strip {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 16px;
    background: rgba(0, 0, 0, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 12px 28px;
    border-radius: 40px;
}
.trust-badge-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13.5px;
    color: #f8fafc;
}
.trust-badge-item i {
    color: #deb65e;
    font-size: 15px;
}
.trust-badge-divider {
    width: 1px;
    height: 18px;
    background: rgba(255, 255, 255, 0.25);
}

/* Main Section */
.donate-main-section {
    background: #f8fafc;
    margin-top: -30px;
    position: relative;
    z-index: 10;
}

/* Card Wrap */
.donate-card-wrap {
    background: #ffffff;
    border-radius: 24px;
    box-shadow: 0 15px 40px rgba(3, 72, 97, 0.08);
    border: 1px solid #e2e8f0;
    overflow: hidden;
}
.donate-card-header {
    background: #ffffff;
    padding: 24px 30px;
    border-bottom: 1px solid #edf2f7;
}
.donate-form-title {
    font-size: 22px;
    font-weight: 800;
    color: #034861;
}

/* Frequency Toggle */
.donation-frequency-toggle {
    display: flex;
    background: #f1f5f9;
    padding: 4px;
    border-radius: 30px;
    border: 1px solid #e2e8f0;
}
.freq-btn {
    border: none;
    background: transparent;
    padding: 6px 18px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 700;
    color: #64748b;
    cursor: pointer;
    transition: all 0.25s ease;
}
.freq-btn.active {
    background: #016d77;
    color: #ffffff;
    box-shadow: 0 2px 8px rgba(1, 109, 119, 0.3);
}

/* Form Body */
.donate-form-body {
    padding: 30px;
}
.donate-step-label {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 16px;
    font-weight: 700;
    color: #16243A;
    margin-bottom: 14px;
}
.step-num {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #016d77;
    color: #ffffff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 800;
}

/* Amount Grid */
.donation-amount-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}
.amount-chip {
    background: #ffffff;
    border: 2px solid #e2e8f0;
    border-radius: 14px;
    padding: 12px 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
    transition: all 0.25s ease;
}
.amount-chip:hover {
    border-color: #016d77;
    background: #f0fdfa;
}
.amount-chip.active {
    border-color: #016d77;
    background: linear-gradient(135deg, rgba(1, 109, 119, 0.08) 0%, rgba(222, 182, 94, 0.12) 100%);
    box-shadow: 0 4px 14px rgba(1, 109, 119, 0.15);
}
.amt-val {
    font-size: 18px;
    font-weight: 800;
    color: #034861;
}
.amt-tag {
    font-size: 11px;
    font-weight: 600;
    color: #64748b;
    margin-top: 2px;
}
.amount-chip.active .amt-tag {
    color: #016d77;
}

/* Custom Input */
.custom-amount-wrap {
    position: relative;
    display: flex;
    align-items: center;
}
.custom-currency {
    position: absolute;
    left: 16px;
    font-size: 18px;
    font-weight: 800;
    color: #034861;
}
.custom-amount-input {
    width: 100%;
    padding: 12px 16px 12px 36px;
    border-radius: 12px;
    border: 2px solid #e2e8f0;
    font-size: 17px;
    font-weight: 700;
    color: #034861;
    outline: none;
    transition: border-color 0.25s ease;
}
.custom-amount-input:focus {
    border-color: #016d77;
}

/* Dynamic Impact Card */
.dynamic-impact-card {
    display: flex;
    align-items: center;
    gap: 12px;
    background: #f0fdfa;
    border: 1px dashed #99f6e4;
    padding: 12px 16px;
    border-radius: 12px;
}
.impact-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: #016d77;
    color: #deb65e;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    flex-shrink: 0;
}
.impact-text {
    font-size: 13.5px;
    color: #0f766e;
    line-height: 1.45;
}

/* Form Inputs */
.field-mini-label {
    font-size: 12.5px;
    font-weight: 700;
    color: #475569;
    margin-bottom: 5px;
}
.donate-input-styled {
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    padding: 10px 14px;
    font-size: 14px;
    color: #1e293b;
    transition: all 0.25s ease;
}
.donate-input-styled:focus {
    border-color: #016d77;
    box-shadow: 0 0 0 3px rgba(1, 109, 119, 0.12);
}

/* Pay Button */
.donate-pay-now-btn {
    background: linear-gradient(135deg, #e11d48 0%, #dc2626 50%, #b91c1c 100%);
    color: #ffffff;
    font-size: 18px;
    font-weight: 800;
    letter-spacing: 0.4px;
    padding: 16px 28px;
    border-radius: 50px;
    border: none;
    box-shadow: 0 8px 25px rgba(220, 38, 38, 0.35);
    cursor: pointer;
    transition: all 0.3s ease;
}
.donate-pay-now-btn:hover:not(:disabled) {
    background: linear-gradient(135deg, #b91c1c 0%, #dc2626 50%, #e11d48 100%);
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(220, 38, 38, 0.45);
}
.donate-pay-now-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

/* Sidebar Cards */
.donate-side-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 6px 20px rgba(3, 72, 97, 0.04);
}
.side-card-title {
    font-size: 18px;
    font-weight: 800;
    color: #034861;
}

/* Fund Breakdown */
.fund-progress-wrap {
    background: #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    height: 12px;
}
.fund-bar {
    height: 100%;
}
.seg-1 { background: #016d77; }
.seg-2 { background: #deb65e; }
.seg-3 { background: #e11d48; }

.fund-legend-list li {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13.5px;
    color: #475569;
    margin-bottom: 8px;
}
.legend-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    flex-shrink: 0;
}
.dot-1 { background: #016d77; }
.dot-2 { background: #deb65e; }
.dot-3 { background: #e11d48; }

/* Tax Benefit Card */
.tax-benefit-card {
    background: linear-gradient(135deg, #f0fdfa 0%, #fefce8 100%);
    border-color: #99f6e4;
}
.tax-icon-pod {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: #016d77;
    color: #deb65e;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
}
.tax-badge-pill {
    display: inline-flex;
    align-items: center;
    background: #016d77;
    color: #ffffff;
    font-size: 11.5px;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 20px;
}

/* Bank Details Grid */
.bank-info-grid {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 12px 16px;
}
.bank-info-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 7px 0;
    font-size: 13px;
    border-bottom: 1px dashed #e2e8f0;
}
.bank-info-row:last-child {
    border-bottom: none;
}
.bank-lbl {
    color: #64748b;
    font-weight: 600;
}
.bank-val {
    color: #0f172a;
    font-weight: 700;
    text-align: right;
}
.copy-mini-btn {
    background: #e2e8f0;
    border: none;
    font-size: 11px;
    font-weight: 700;
    color: #034861;
    padding: 2px 8px;
    border-radius: 6px;
    margin-left: 8px;
    cursor: pointer;
    transition: all 0.2s ease;
}
.copy-mini-btn:hover, .copy-mini-btn.btn-copied {
    background: #016d77;
    color: #ffffff;
}

/* FAQ Accordion */
.donate-faq-accordion .accordion-item {
    border: 1px solid #e2e8f0;
    border-radius: 14px !important;
    margin-bottom: 12px;
    overflow: hidden;
}
.donate-faq-accordion .accordion-button {
    font-size: 16px;
    font-weight: 700;
    color: #034861;
    padding: 18px 22px;
    background: #ffffff;
}
.donate-faq-accordion .accordion-button:not(.collapsed) {
    color: #016d77;
    background: #f0fdfa;
    box-shadow: none;
}
.donate-faq-accordion .accordion-body {
    font-size: 14.5px;
    color: #475569;
    line-height: 1.65;
    padding: 18px 22px;
}

@media (max-width: 767px) {
    .donate-hero-title {
        font-size: 28px;
    }
    .donation-amount-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .donate-form-body {
        padding: 20px 16px;
    }
}
</style>
@endsection
