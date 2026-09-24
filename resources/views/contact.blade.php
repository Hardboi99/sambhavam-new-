@extends('layouts.app')

@section('title', 'Contact Us | Sambhavam Foundation - Learn. Innovate. Lead. Create Impact.')
@section('meta_description', 'Connect with Sambhavam Foundation for academic admissions, scholarships, CSR partnerships, student counseling, and impact initiatives. Reach out to our centres in Navi Mumbai, Solapur, Dharashiv, and Chhatrapati Sambhajinagar.')

@push('styles')
<style>
/* ========================================================
   CONTACT PAGE - THEME & LUXURY AESTHETICS
   ======================================================== */
.contact-page-hero {
    position: relative;
    padding: 100px 0 70px;
    background: linear-gradient(135deg, rgba(3, 72, 97, 0.95) 0%, rgba(14, 70, 89, 0.9) 60%, rgba(1, 109, 119, 0.85) 100%), url('{{ asset("images/banners/upsc2.jpg") }}') center/cover no-repeat;
    color: #ffffff;
    overflow: hidden;
}
.contact-page-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at top right, rgba(222, 182, 94, 0.15) 0%, transparent 60%);
    pointer-events: none;
}
.contact-hero-title {
    font-size: 42px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.2;
    margin-bottom: 12px;
    letter-spacing: -0.5px;
}
.contact-hero-breadcrumb {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.75);
    margin: 0;
}
.contact-hero-breadcrumb a {
    color: #ffffff;
    text-decoration: none;
    transition: color .25s ease;
}
.contact-hero-breadcrumb a:hover {
    color: var(--sambhavam-gold, #deb65e);
}
.contact-hero-breadcrumb .sep {
    margin: 0 8px;
    color: rgba(255, 255, 255, 0.45);
}

/* Main Section */
.contact-main-section {
    background: #f8fafc;
    position: relative;
}

/* Cards */
.contact-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 30px rgba(3, 72, 97, 0.06);
    transition: all 0.3s ease;
}
.contact-card:hover {
    box-shadow: 0 16px 40px rgba(3, 72, 97, 0.1);
}

.contact-card-header-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #016d77;
    background: rgba(1, 109, 119, 0.08);
    padding: 5px 12px;
    border-radius: 50px;
    margin-bottom: 12px;
}

.contact-card-title {
    font-size: 28px;
    font-weight: 800;
    color: #034861;
    margin-bottom: 8px;
    letter-spacing: -0.3px;
}

/* Form Controls */
.contact-form .form-label {
    font-size: 13.5px;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 6px;
}
.contact-input-group {
    position: relative;
    border: 1.5px solid #e2e8f0;
    border-radius: 12px;
    background: #ffffff;
    transition: all 0.25s ease;
    display: flex;
    align-items: center;
    height: 50px;
    overflow: hidden;
}
.contact-input-group:focus-within {
    border-color: #016d77;
    box-shadow: 0 0 0 4px rgba(1, 109, 119, 0.12);
}
.contact-input-group .form-control {
    border: none;
    background: transparent;
    padding: 0 16px;
    height: 100%;
    font-size: 14.5px;
    color: #1e293b;
    box-shadow: none;
    width: 100%;
}
.contact-input-group .form-control:focus {
    outline: none;
    box-shadow: none;
}
.contact-input-icon {
    padding: 0 16px;
    color: #94a3b8;
    font-size: 15px;
    display: flex;
    align-items: center;
    transition: color 0.2s ease;
    flex-shrink: 0;
}
.contact-input-group:focus-within .contact-input-icon {
    color: #016d77;
}

/* Custom Styled Select Dropdown */
.contact-select-wrap {
    position: relative;
    width: 100%;
}
.contact-select-wrap select.contact-select,
.contact-select {
    display: block !important;
    width: 100%;
    height: 50px;
    padding: 0 42px 0 16px;
    font-size: 14.5px;
    font-weight: 500;
    color: #1e293b;
    background-color: #ffffff;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23016d77' stroke-width='2.2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
    background-size: 16px 16px;
    border: 1.5px solid #e2e8f0;
    border-radius: 12px;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    cursor: pointer;
    transition: all 0.25s ease;
    box-shadow: none;
}
.contact-select-wrap select.contact-select:focus,
.contact-select:focus {
    outline: none;
    border-color: #016d77;
    box-shadow: 0 0 0 4px rgba(1, 109, 119, 0.12);
}
.contact-select option {
    padding: 10px;
    color: #1e293b;
    background: #ffffff;
    font-size: 14.5px;
}
/* Prevent interference from nice-select jQuery plugin in contact form */
.contact-form .nice-select {
    display: none !important;
}

.contact-textarea-wrap {
    border: 1.5px solid #e2e8f0;
    border-radius: 12px;
    background: #ffffff;
    padding: 6px;
    transition: all 0.25s ease;
}
.contact-textarea-wrap:focus-within {
    border-color: #016d77;
    box-shadow: 0 0 0 4px rgba(1, 109, 119, 0.12);
}
.contact-textarea-wrap textarea {
    border: none;
    width: 100%;
    padding: 8px 10px;
    font-size: 14.5px;
    color: #1e293b;
    resize: vertical;
    min-height: 120px;
    outline: none;
}

/* Submit Button */
.contact-submit-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    padding: 14px 28px;
    background: linear-gradient(135deg, #034861 0%, #016d77 100%);
    color: #ffffff;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 0.5px;
    border-radius: 50px;
    border: none;
    box-shadow: 0 6px 20px rgba(1, 109, 119, 0.25);
    transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
    cursor: pointer;
}
.contact-submit-btn:hover {
    background: linear-gradient(135deg, #016d77 0%, #034861 100%);
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 10px 28px rgba(1, 109, 119, 0.35);
}
.contact-submit-btn i {
    transition: transform 0.25s ease;
}
.contact-submit-btn:hover i {
    transform: translateX(4px);
}

/* Right Sidebar Details */
.office-info-item {
    display: flex;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid #f1f5f9;
}
.office-info-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}
.office-icon-box {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: #f0fdfa;
    border: 1px solid rgba(1, 109, 119, 0.15);
    color: #016d77;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
    transition: all 0.3s ease;
}
.office-info-item:hover .office-icon-box {
    background: #016d77;
    color: #ffffff;
    transform: scale(1.05);
}
.office-info-title {
    font-size: 16px;
    font-weight: 700;
    color: #034861;
    margin-bottom: 4px;
}
.office-info-desc {
    font-size: 13.5px;
    color: #475569;
    line-height: 1.55;
    margin: 0;
}

/* Bottom 4 Feature Cards */
.contact-feature-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 24px 20px;
    height: 100%;
    box-shadow: 0 4px 15px rgba(3, 72, 97, 0.04);
    transition: all 0.3s ease;
}
.contact-feature-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(3, 72, 97, 0.08);
    border-color: #cbd5e1;
}
.feature-icon-pod {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: linear-gradient(135deg, rgba(3, 72, 97, 0.1) 0%, rgba(1, 109, 119, 0.15) 100%);
    color: #016d77;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 14px;
    transition: all 0.3s ease;
}
.contact-feature-card:hover .feature-icon-pod {
    background: linear-gradient(135deg, #034861 0%, #016d77 100%);
    color: #ffffff;
}
.feature-card-title {
    font-size: 16px;
    font-weight: 700;
    color: #034861;
    margin-bottom: 8px;
}
.feature-card-desc {
    font-size: 13px;
    color: #64748b;
    line-height: 1.6;
    margin: 0;
}

/* Brand Theme Social Media Buttons */
.contact-social-btn {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
    color: #ffffff !important;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
    margin-right: 8px;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.12);
}
.contact-social-btn:hover {
    transform: translateY(-3px) scale(1.08);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
}

/* Official Brand Colors for Social Media */
.social-btn-linkedin {
    background: #0077b5;
}
.social-btn-facebook {
    background: #1877f2;
}
.social-btn-instagram {
    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
}
.social-btn-youtube {
    background: #ff0000;
}
.social-btn-telegram {
    background: #24A1DE;
}
.social-btn-twitter {
    background: #000000;
}

/* Phone & Email Interactive Hover Links */
.contact-link-item {
    display: flex;
    align-items: center;
    color: #1e293b !important;
    font-weight: 600;
    font-size: 13.5px;
    text-decoration: none !important;
    padding: 3px 0;
    border-radius: 6px;
    transition: all 0.25s cubic-bezier(0.2, 0.8, 0.2, 1);
}
.contact-link-item i {
    width: 20px;
    color: #016d77;
    font-size: 13px;
    transition: all 0.25s ease;
    display: inline-flex;
    align-items: center;
    justify-content: flex-start;
    margin-right: 6px;
    flex-shrink: 0;
}
.contact-link-item span {
    transition: all 0.25s ease;
}
.contact-link-item:hover {
    color: #016d77 !important;
    transform: translateX(4px);
    text-decoration: none !important;
}
.contact-link-item:hover i {
    color: #034861;
    transform: scale(1.2);
}
.contact-link-item:hover span {
    color: #016d77;
}
</style>
@endpush

@section('content')
<main id="sm-main">

    <!-- ============================================= -->
    <!-- 1. HERO BANNER -->
    <!-- ============================================= -->
    <section class="contact-page-hero text-center">
        <div class="container position-relative" style="z-index: 2;">
            <h1 class="contact-hero-title">Get in Touch With Us</h1>
            <p class="contact-hero-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span class="sep">/</span>
                <span class="text-white">Contact Us</span>
            </p>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- 2. MAIN FORM & GET IN TOUCH SECTION -->
    <!-- ============================================= -->
    <section class="contact-main-section py-5" id="contact-form">
        <div class="container py-lg-4">
            <div class="row g-4 align-items-stretch">

                <!-- LEFT COLUMN: MESSAGE FORM -->
                <div class="col-lg-7">
                    <div class="contact-card p-4 p-md-5 h-100">
                        <span class="contact-card-header-tag">
                            <i class="fa fa-envelope-open-o"></i> Direct Inquiry
                        </span>
                        <h2 class="contact-card-title">Send Us a Message</h2>
                        <p class="text-muted small mb-4">Fill out the form below and our academic or administrative team will get back to you promptly.</p>

                        @if(session('success'))
                            <div class="alert alert-success d-flex align-items-center mb-4 rounded-3" role="alert">
                                <i class="fa fa-check-circle-o fs-4 me-3 text-success"></i>
                                <div>
                                    <strong>Thank You!</strong> {{ session('success') }}
                                </div>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger mb-4 rounded-3" role="alert">
                                <strong>Please review the required fields:</strong>
                                <ul class="mb-0 mt-1 ps-3 small">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" id="contactForm" class="contact-form" novalidate>
                            @csrf

                            {{-- Honeypot field --}}
                            <div class="visually-hidden" aria-hidden="true">
                                <label for="website">Leave blank</label>
                                <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6" data-field>
                                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <div class="contact-input-group">
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="Your Full Name" value="{{ old('name') }}"
                                               required autocomplete="name">
                                        <span class="contact-input-icon"><i class="fa fa-user-o"></i></span>
                                    </div>
                                    @error('name') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-6" data-field>
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <div class="contact-input-group">
                                        <input type="email" id="email" name="email" class="form-control"
                                               placeholder="your.email@domain.com" value="{{ old('email') }}"
                                               required autocomplete="email">
                                        <span class="contact-input-icon"><i class="fa fa-envelope-o"></i></span>
                                    </div>
                                    @error('email') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6" data-field>
                                    <label for="phone" class="form-label">Phone Number (Optional)</label>
                                    <div class="contact-input-group">
                                        <input type="tel" id="phone" name="phone" class="form-control"
                                               placeholder="+91 98765 43210" value="{{ old('phone') }}"
                                               autocomplete="tel">
                                        <span class="contact-input-icon"><i class="fa fa-phone"></i></span>
                                    </div>
                                    @error('phone') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-6" data-field>
                                    <label for="subject" class="form-label">Subject / Interest <span class="text-danger">*</span></label>
                                    <div class="contact-select-wrap">
                                        <select name="subject" id="subject" class="contact-select" required>
                                            <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Select Subject</option>
                                            <option value="Sambhavam Academy" {{ old('subject') === 'Sambhavam Academy' ? 'selected' : '' }}>Sambhavam Academy &amp; Courses</option>
                                            <option value="Scholarships" {{ old('subject') === 'Scholarships' ? 'selected' : '' }}>Scholarships &amp; Financial Aid</option>
                                            <option value="Partnership" {{ old('subject') === 'Partnership' ? 'selected' : '' }}>Institutional / CSR Partnership</option>
                                            <option value="Mentorship" {{ old('subject') === 'Mentorship' ? 'selected' : '' }}>Become a Mentor / Faculty</option>
                                            <option value="Programs & Impact" {{ old('subject') === 'Programs & Impact' ? 'selected' : '' }}>Social Impact &amp; Climate Programs</option>
                                            <option value="General Enquiry" {{ old('subject') === 'General Enquiry' ? 'selected' : '' }}>General Enquiry</option>
                                        </select>
                                    </div>
                                    @error('subject') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="mb-4" data-field>
                                <label for="message" class="form-label">Your Message <span class="text-danger">*</span></label>
                                <div class="contact-textarea-wrap">
                                    <textarea id="message" name="message" rows="4"
                                              placeholder="Write your query or message here..." maxlength="2000" required>{{ old('message') }}</textarea>
                                </div>
                                <div class="d-flex justify-content-between mt-1">
                                    <small class="text-muted">Max 2000 characters</small>
                                    <small class="text-muted" id="message-count">0 / 2000</small>
                                </div>
                                @error('message') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                            </div>

                            <button id="submit" class="contact-submit-btn" type="submit">
                                <span>Submit Message</span> <i class="fa fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- RIGHT COLUMN: GET IN TOUCH & HEADQUARTERS -->
                <div class="col-lg-5">
                    <div class="contact-card p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <span class="contact-card-header-tag">
                                <i class="fa fa-map-marker"></i> Office Locations
                            </span>
                            <h3 class="contact-card-title">Get in Touch</h3>
                            <p class="text-muted small mb-4">Sambhavam Foundation is dedicated to building future-ready leaders and empowered communities.</p>

                            <!-- Corporate Office -->
                            <div class="office-info-item">
                                <div class="office-icon-box">
                                    <i class="fa fa-building-o"></i>
                                </div>
                                <div>
                                    <h4 class="office-info-title">Corporate Office</h4>
                                    <p class="office-info-desc">
                                        313 C, Bhumi Mall Premises, Plot No. 9, Sector 15,<br>
                                        CBD Belapur, Navi Mumbai, District Thane,<br>
                                        Maharashtra &ndash; 400614
                                    </p>
                                </div>
                            </div>

                            <!-- Academy Centre -->
                            <div class="office-info-item">
                                <div class="office-icon-box">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div>
                                    <h4 class="office-info-title">Sambhavam Academy</h4>
                                    <p class="office-info-desc">
                                        Office No. 13, Ground Floor, F-3, F-Type Building,<br>
                                        Sector 3, CBD Belapur, Navi Mumbai,<br>
                                        District Thane, Maharashtra &ndash; 400614
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Counselling Note Box -->
                        <div class="p-3 rounded-3 mt-4" style="background: rgba(1, 109, 119, 0.06); border-left: 3px solid #016d77;">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <i class="fa fa-comments text-teal" style="color: #016d77;"></i>
                                <span class="fw-bold text-dark small">Free Academic Counselling</span>
                            </div>
                            <p class="text-muted small mb-0">Walk in to our Navi Mumbai center or book a telephonic session with senior faculty mentors.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ============================================= -->
            <!-- 3. FOUR INFO FEATURE CARDS -->
            <!-- ============================================= -->
            <div class="row g-4 mt-2">
                <div class="col-sm-6 col-lg-3">
                    <div class="contact-feature-card">
                        <div class="feature-icon-pod">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h4 class="feature-card-title">Our Centres</h4>
                        <p class="feature-card-desc">
                            Navi Mumbai (CBD Belapur) &bull; Barshi (Solapur) &bull; Dharashiv &bull; Chhatrapati Sambhajinagar
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="contact-feature-card">
                        <div class="feature-icon-pod">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h4 class="feature-card-title">Phone &amp; Email</h4>
                        <div class="feature-card-desc">
                            <a href="tel:+912249789869" class="contact-link-item mb-1">
                                <i class="fa fa-phone"></i> <span>+91 22 4978 9869</span>
                            </a>
                            <a href="tel:+918850332700" class="contact-link-item mb-2">
                                <i class="fa fa-phone"></i> <span>+91 88503 32700</span>
                            </a>
                            <a href="mailto:enquiry@sambhavam.org" class="contact-link-item" style="word-break: break-all;">
                                <i class="fa fa-envelope-o"></i> <span>enquiry@sambhavam.org</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="contact-feature-card">
                        <div class="feature-icon-pod">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <h4 class="feature-card-title">Working Hours</h4>
                        <div class="feature-card-desc">
                            <div class="mb-2 pb-2" style="border-bottom: 1px dashed #e2e8f0;">
                                <span class="d-block fw-bold text-dark mb-1" style="color: #034861; font-size: 13px;">
                                    <i class="fa fa-briefcase me-1" style="color: #016d77; font-size: 12px;"></i> Office Hours
                                </span>
                                <span class="d-block text-muted" style="font-size: 12.5px; padding-left: 17px;">
                                    Mon &ndash; Sat: 09:30 &ndash; 18:30
                                </span>
                            </div>
                            <div>
                                <span class="d-block fw-bold text-dark mb-1" style="color: #034861; font-size: 13px;">
                                    <i class="fa fa-graduation-cap me-1" style="color: #016d77; font-size: 12px;"></i> Academy Classes
                                </span>
                                <span class="d-block text-muted" style="font-size: 12.5px; padding-left: 17px;">
                                    As per batch schedule
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="contact-feature-card">
                        <div class="feature-icon-pod">
                            <i class="fa fa-share-alt"></i>
                        </div>
                        <h4 class="feature-card-title">Connect With Us</h4>
                        <p class="feature-card-desc mb-3">Follow our official channels for updates:</p>
                        <div class="d-flex align-items-center flex-wrap gap-1">
                            <a href="https://www.linkedin.com/in/sambhavam-academy-429282429/" target="_blank" rel="noopener" class="contact-social-btn social-btn-linkedin" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=61593294384122" target="_blank" rel="noopener" class="contact-social-btn social-btn-facebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/sambhavamacademy" target="_blank" rel="noopener" class="contact-social-btn social-btn-instagram" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@SambhavamAcademyPrep" target="_blank" rel="noopener" class="contact-social-btn social-btn-youtube" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://t.me/sambhavamacademy" target="_blank" rel="noopener" class="contact-social-btn social-btn-telegram" title="Telegram"><i class="fa fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

@push('scripts')
<script>
(function() {
    // Destroy niceSelect on contact form if initialized
    function cleanSelect() {
        if (window.jQuery && jQuery.fn && jQuery.fn.niceSelect) {
            jQuery('.contact-form select').niceSelect('destroy');
        }
    }
    document.addEventListener('DOMContentLoaded', cleanSelect);
    window.addEventListener('load', cleanSelect);
    setTimeout(cleanSelect, 100);
    setTimeout(cleanSelect, 500);

    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contactForm');
        if (!form) return;

        const submitBtn = document.getElementById('submit');
        const messageInput = document.getElementById('message');
        const messageCount = document.getElementById('message-count');

        const updateCount = () => {
            if (!messageInput || !messageCount) return;
            const max = messageInput.maxLength > 0 ? messageInput.maxLength : 2000;
            const len = messageInput.value.length;
            messageCount.textContent = `${len} / ${max}`;
            messageCount.classList.toggle('text-danger', len >= max * 0.9);
        };
        messageInput?.addEventListener('input', updateCount);
        updateCount();

        form.addEventListener('submit', function (e) {
            let isValid = true;
            const requiredInputs = form.querySelectorAll('input[required], select[required], textarea[required]');
            
            requiredInputs.forEach(input => {
                const targetWrap = input.classList.contains('contact-select') 
                    ? input 
                    : (input.closest('.contact-input-group') || input.closest('.contact-textarea-wrap'));
                
                if (!input.value.trim()) {
                    isValid = false;
                    if (targetWrap) {
                        targetWrap.style.borderColor = '#dc2626';
                    }
                } else {
                    if (targetWrap) {
                        targetWrap.style.borderColor = '';
                    }
                }
            });

            if (!isValid) {
                e.preventDefault();
                const firstEmpty = Array.from(requiredInputs).find(input => !input.value.trim());
                if (firstEmpty) firstEmpty.focus();
                return;
            }

            if (submitBtn) {
                submitBtn.setAttribute('disabled', 'disabled');
                submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin me-2"></i> Sending Message...';
            }
        });
    });
})();
</script>
@endpush
@endsection