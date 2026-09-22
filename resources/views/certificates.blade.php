@extends('layouts.app')

@section('title', 'Official Certificates & Accreditations - Sambhavam Foundation')
@section('meta_description', 'View and verify official statutory compliance documents of Sambhavam Foundation including Section 8 Incorporation, 12A, 80G Tax Exemption, CSR-1, NGO Darpan, E-Anudaan, and ISO 9001:2015.')

@push('styles')
<style>
/* ========================================================
   CERTIFICATES & ACCREDITATIONS - THEME STYLES
   ======================================================== */
.cert-page-hero {
    position: relative;
    padding: 130px 0 90px;
    background-size: cover;
    background-position: center;
    color: #ffffff;
    overflow: hidden;
}
.cert-page-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(3, 72, 97, 0.95) 0%, rgba(14, 70, 89, 0.88) 60%, rgba(1, 109, 119, 0.82) 100%);
    z-index: 1;
}
.cert-page-hero .container {
    position: relative;
    z-index: 2;
}
.cert-hero-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--sambhavam-gold, #deb65e);
    margin-bottom: 12px;
}
.cert-hero-eyebrow::before {
    content: '';
    display: inline-block;
    width: 32px;
    height: 2.5px;
    background: var(--sambhavam-gold, #deb65e);
    border-radius: 2px;
}
.cert-hero-title {
    font-size: 48px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.15;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}
.cert-hero-breadcrumb {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.75);
    margin: 0;
}
.cert-hero-breadcrumb a {
    color: #ffffff;
    text-decoration: none;
    transition: color .25s;
}
.cert-hero-breadcrumb a:hover {
    color: var(--sambhavam-gold, #deb65e);
}
.cert-hero-breadcrumb .sep {
    margin: 0 8px;
    color: rgba(255, 255, 255, 0.5);
}

/* Section Header Styles */
.cert-section-eyebrow {
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: #d93829;
    display: block;
    margin-bottom: 10px;
}
.cert-section-eyebrow::after {
    content: '';
    display: block;
    width: 44px;
    height: 3px;
    background: #d93829;
    margin: 8px auto 0;
    border-radius: 2px;
}
.cert-section-title {
    font-size: 38px;
    font-weight: 800;
    color: #0c2340;
    margin-bottom: 14px;
    letter-spacing: -0.5px;
}
.cert-section-lead {
    font-size: 16px;
    color: #5F6670;
    max-width: 720px;
    margin: 0 auto 30px;
    line-height: 1.65;
}

/* Centered Pill Badge */
.cert-pill-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #ffffff;
    padding: 10px 24px;
    border-radius: 50px;
    border: 1.5px solid #e2e8f0;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.04);
    font-size: 15px;
    font-weight: 700;
    color: #0c2340;
    margin-bottom: 40px;
}
.cert-pill-badge i {
    color: #d93829;
    font-size: 18px;
}

/* Category Filter Tabs */
.cert-filter-nav {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 45px;
}
.cert-filter-btn {
    border: 1px solid #e2e8f0;
    background: #ffffff;
    color: #4b5563;
    padding: 9px 20px;
    border-radius: 30px;
    font-size: 13.5px;
    font-weight: 600;
    transition: all .25s ease;
    cursor: pointer;
}
.cert-filter-btn:hover,
.cert-filter-btn.active {
    background: var(--sambhavam-blue, #034861);
    color: #ffffff;
    border-color: var(--sambhavam-blue, #034861);
    box-shadow: 0 6px 16px rgba(3, 72, 97, 0.2);
}

/* Certificate Cards */
.cert-grid-card {
    background: #ffffff;
    border-radius: 18px;
    border: 1px solid #e9edf3;
    box-shadow: 0 8px 30px rgba(12, 35, 64, 0.05);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 100%;
    transition: all .35s cubic-bezier(0.165, 0.84, 0.44, 1);
    position: relative;
}
.cert-grid-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 45px rgba(12, 35, 64, 0.12);
    border-color: rgba(3, 72, 97, 0.25);
}

/* Document Thumbnail Stage */
.cert-thumb-stage {
    background: linear-gradient(180deg, #f1f5f9 0%, #e2e8f0 100%);
    padding: 24px 20px 18px;
    position: relative;
    text-align: center;
    overflow: hidden;
    border-bottom: 1px solid #e5e7eb;
}
.cert-paper-wrapper {
    position: relative;
    display: inline-block;
    max-width: 100%;
    border-radius: 8px;
    background: #ffffff;
    padding: 6px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12), 0 2px 6px rgba(0,0,0,0.06);
    transition: transform .35s ease;
    cursor: pointer;
}
.cert-grid-card:hover .cert-paper-wrapper {
    transform: scale(1.02);
}
.cert-paper-img {
    display: block;
    width: 100%;
    max-height: 270px;
    object-fit: cover;
    object-position: top;
    border-radius: 4px;
    border: 1px solid #e5e7eb;
}

/* Floating Badges on Thumbnail */
.cert-verified-stamp {
    position: absolute;
    top: 14px;
    right: 14px;
    background: rgba(16, 185, 129, 0.95);
    backdrop-filter: blur(4px);
    color: #ffffff;
    font-size: 11px;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 20px;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    box-shadow: 0 4px 10px rgba(16, 185, 129, 0.35);
    z-index: 2;
}
.cert-type-pill {
    position: absolute;
    top: 14px;
    left: 14px;
    background: rgba(3, 72, 97, 0.92);
    backdrop-filter: blur(4px);
    color: #ffffff;
    font-size: 11px;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 20px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    z-index: 2;
}

/* Card Body */
.cert-card-body {
    padding: 22px 22px 18px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.cert-card-authority {
    font-size: 12px;
    font-weight: 700;
    color: #0d9488;
    text-transform: uppercase;
    letter-spacing: .5px;
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.cert-card-title {
    font-size: 19px;
    font-weight: 700;
    color: #0c2340;
    line-height: 1.35;
    margin-bottom: 12px;
}
.cert-card-desc {
    font-size: 13.5px;
    color: #64748b;
    line-height: 1.55;
    margin-bottom: 16px;
    flex-grow: 1;
}

/* Registration Meta Box */
.cert-meta-box {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 12px 14px;
    margin-bottom: 18px;
}
.cert-meta-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 6px;
    font-size: 12.5px;
}
.cert-meta-row:last-child {
    margin-bottom: 0;
}
.cert-meta-label {
    color: #64748b;
    font-weight: 500;
}
.cert-meta-value {
    color: #0c2340;
    font-weight: 700;
    font-family: monospace;
    font-size: 13px;
}
.cert-meta-badge {
    background: #e0f2fe;
    color: #0369a1;
    font-size: 11px;
    font-weight: 700;
    padding: 2px 8px;
    border-radius: 4px;
}

/* Card Actions */
.cert-card-actions {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    padding-top: 14px;
    border-top: 1px solid #f1f5f9;
}
.btn-cert-preview {
    background: #ffffff;
    border: 1.5px solid var(--sambhavam-blue, #034861);
    color: var(--sambhavam-blue, #034861);
    font-weight: 700;
    font-size: 13px;
    padding: 9px 12px;
    border-radius: 8px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    transition: all .25s ease;
    cursor: pointer;
}
.btn-cert-preview:hover {
    background: var(--sambhavam-blue, #034861);
    color: #ffffff;
}
.btn-cert-download {
    background: #034861;
    border: 1.5px solid #034861;
    color: #ffffff;
    font-weight: 700;
    font-size: 13px;
    padding: 9px 12px;
    border-radius: 8px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    text-decoration: none;
    transition: all .25s ease;
}
.btn-cert-download:hover {
    background: #016d77;
    border-color: #016d77;
    color: #ffffff;
}

/* Trust Pillar Strip */
.cert-trust-banner {
    background: linear-gradient(135deg, #034861 0%, #016d77 100%);
    border-radius: 20px;
    padding: 45px 35px;
    color: #ffffff;
    margin-top: 70px;
    box-shadow: 0 16px 40px rgba(3, 72, 97, 0.18);
}
.cert-trust-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
}
.cert-trust-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.12);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: var(--sambhavam-gold, #deb65e);
    flex-shrink: 0;
}
.cert-trust-title {
    font-size: 17px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 4px;
}
.cert-trust-text {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.8);
    line-height: 1.45;
    margin: 0;
}

/* Institutional Help Desk CTA */
.cert-helpdesk-card {
    background: #ffffff;
    border: 1.5px dashed #cbd5e1;
    border-radius: 18px;
    padding: 35px 30px;
    text-align: center;
    margin-top: 50px;
}

/* Document Lightbox Modal */
.modal-cert-viewer .modal-dialog {
    max-width: 950px;
}
.modal-cert-viewer .modal-content {
    border-radius: 20px;
    border: none;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
}
.modal-cert-viewer .modal-header {
    background: #0c2340;
    color: #ffffff;
    padding: 18px 24px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.modal-cert-viewer .btn-close {
    filter: brightness(0) invert(1);
    opacity: 0.8;
}
.modal-cert-viewer .modal-body {
    padding: 0;
}
.cert-modal-body-layout {
    display: flex;
    flex-direction: column;
}
@media (min-width: 992px) {
    .cert-modal-body-layout {
        flex-direction: row;
    }
    .cert-modal-img-col {
        flex: 1.2;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 24px;
        overflow-y: auto;
        max-height: 75vh;
    }
    .cert-modal-info-col {
        flex: 1;
        padding: 30px;
        overflow-y: auto;
        max-height: 75vh;
    }
}
.cert-modal-full-img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    border: 1px solid #e2e8f0;
}
.cert-spec-list {
    list-style: none;
    padding: 0;
    margin: 18px 0;
}
.cert-spec-item {
    display: flex;
    justify-content: space-between;
    padding: 8px 0;
    border-bottom: 1px solid #f1f5f9;
    font-size: 13px;
}
.cert-spec-k {
    color: #64748b;
    font-weight: 500;
}
.cert-spec-v {
    color: #0c2340;
    font-weight: 700;
    text-align: right;
    max-width: 60%;
    word-break: break-word;
}
.cert-bullets-list {
    margin: 14px 0 20px;
    padding-left: 18px;
    font-size: 13.5px;
    color: #475569;
}
.cert-bullets-list li {
    margin-bottom: 8px;
}
</style>
@endpush

@section('content')

<!-- ============================================= -->
<!-- SECTION: HERO PAGE HEADER                     -->
<!-- ============================================= -->
<section class="cert-page-hero" data-background="{{ asset('images/banners/abt1.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="cert-hero-eyebrow wow fade-in-bottom" data-wow-delay="100ms">
                    Official Recognition &amp; Compliance
                </span>
                <h1 class="cert-hero-title wow fade-in-bottom" data-wow-delay="200ms">
                    Our Certificates
                </h1>
                <p class="cert-hero-breadcrumb wow fade-in-bottom" data-wow-delay="300ms">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                    <span class="sep">/</span>
                    <a href="{{ url('/about-us') }}">About Sambhavam</a>
                    <span class="sep">/</span>
                    <span class="text-white">Legal &amp; Compliance Certificates</span>
                </p>
            </div>
            <div class="col-lg-4 text-lg-end d-none d-lg-block">
                <div class="cert-pill-badge mb-0 wow fade-in-right" data-wow-delay="350ms" style="background: rgba(255,255,255,0.15); color:#fff; border-color: rgba(255,255,255,0.25); backdrop-filter: blur(8px);">
                    <i class="fa fa-shield" style="color: var(--sambhavam-gold, #deb65e);"></i> 100% Statutory Compliant
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================= -->
<!-- SECTION: MAIN CERTIFICATES & ACCREDITATIONS   -->
<!-- ============================================= -->
<section class="cert-main-section pt-80 pb-80" style="background: #f8fafc;">
    <div class="container">

        <!-- Section Header (Matching Screenshot 2) -->
        <div class="text-center mb-45">
            <span class="cert-section-eyebrow wow fade-in-bottom" data-wow-delay="100ms">
                Legal &amp; Recognitions
            </span>
            <h2 class="cert-section-title wow fade-in-bottom" data-wow-delay="200ms">
                Our Certificates &amp; Accreditations
            </h2>
            <p class="cert-section-lead wow fade-in-bottom" data-wow-delay="300ms">
                Committed to transparency, compliance, and excellence. Explore our official registrations,
                memberships, legal approvals, and recognitions.
            </p>

            <div class="wow fade-in-bottom" data-wow-delay="350ms">
                <div class="cert-pill-badge">
                    <i class="fa fa-balance-scale"></i>
                    <span>Legal Documents &amp; Registrations</span>
                </div>
            </div>
        </div>

        <!-- Filter Buttons -->
        <div class="cert-filter-nav wow fade-in-bottom" data-wow-delay="400ms">
            <button class="cert-filter-btn active" data-filter="all">All Certificates (7)</button>
            <button class="cert-filter-btn" data-filter="tax">Tax Exemption (12A &amp; 80G)</button>
            <button class="cert-filter-btn" data-filter="corporate">Incorporation &amp; CSR</button>
            <button class="cert-filter-btn" data-filter="govt">Govt. Empanelment (NITI Aayog)</button>
            <button class="cert-filter-btn" data-filter="quality">Quality Standards (ISO)</button>
        </div>

        <!-- Certificates Grid -->
        <div class="row g-4 justify-content-center" id="certGrid">

            @foreach ($certificates as $cert)
                @php
                    $filterCat = 'corporate';
                    if (in_array($cert['slug'], ['12a', '80g'])) {
                        $filterCat = 'tax';
                    } elseif (in_array($cert['slug'], ['darpan', 'e-anudaan'])) {
                        $filterCat = 'govt';
                    } elseif ($cert['slug'] === 'iso-9001') {
                        $filterCat = 'quality';
                    }
                @endphp

                <div class="col-12 col-md-6 col-lg-4 cert-item-col" data-category="{{ $filterCat }}" id="{{ $cert['slug'] }}">
                    <div class="cert-grid-card wow fade-in-bottom" data-wow-delay="{{ 150 + $loop->index * 75 }}ms">
                        
                        <!-- Thumbnail Preview Area -->
                        <div class="cert-thumb-stage">
                            <span class="cert-type-pill">
                                <i class="fa {{ $cert['icon'] }}"></i> {{ $cert['short_title'] }}
                            </span>
                            <span class="cert-verified-stamp">
                                <i class="fa fa-check-circle"></i> Verified
                            </span>

                            <div class="cert-paper-wrapper" onclick="openCertModal('{{ $cert['slug'] }}')" title="Click to view full certificate">
                                <img src="{{ asset($cert['preview_image']) }}" alt="{{ $cert['title'] }}" class="cert-paper-img">
                            </div>
                        </div>

                        <!-- Card Body Details -->
                        <div class="cert-card-body">
                            <div class="cert-card-authority">
                                <i class="fa fa-university"></i> {{ $cert['authority'] }}
                            </div>
                            <h3 class="cert-card-title">{{ $cert['title'] }}</h3>
                            <p class="cert-card-desc">{{ $cert['description'] }}</p>

                            <!-- Meta Details Box -->
                            <div class="cert-meta-box">
                                <div class="cert-meta-row">
                                    <span class="cert-meta-label">{{ $cert['reg_label'] }}</span>
                                    <span class="cert-meta-value">{{ $cert['reg_number'] }}</span>
                                </div>
                                <div class="cert-meta-row">
                                    <span class="cert-meta-label">Validity / Term</span>
                                    <span class="cert-meta-badge">{{ $cert['validity'] }}</span>
                                </div>
                                @if(!empty($cert['pan']))
                                    <div class="cert-meta-row">
                                        <span class="cert-meta-label">PAN Reference</span>
                                        <span class="cert-meta-value">{{ $cert['pan'] }}</span>
                                    </div>
                                @endif
                            </div>

                            <!-- Card Action Buttons -->
                            <div class="cert-card-actions">
                                <button type="button" class="btn-cert-preview" onclick="openCertModal('{{ $cert['slug'] }}')">
                                    <i class="fa fa-eye"></i> Preview Doc
                                </button>
                                <a href="{{ asset($cert['pdf_file']) }}" class="btn-cert-download" target="_blank" download>
                                    <i class="fa fa-download"></i> Official PDF
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- ============================================= -->
        <!-- SECTION: STATUTORY & CSR ADVANTAGE STRIP      -->
        <!-- ============================================= -->
        <div class="cert-trust-banner wow fade-in-bottom" data-wow-delay="200ms">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="cert-trust-item">
                        <div class="cert-trust-icon">
                            <i class="fa fa-percent"></i>
                        </div>
                        <div>
                            <h4 class="cert-trust-title">80G Tax Exemption</h4>
                            <p class="cert-trust-text">50% income tax deduction for donors under Section 80G(5) of the Income Tax Act.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="cert-trust-item">
                        <div class="cert-trust-icon">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <div>
                            <h4 class="cert-trust-title">CSR-1 Certified</h4>
                            <p class="cert-trust-text">Approved by MCA (ROC Mumbai) to implement corporate CSR funds under Schedule VII.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="cert-trust-item">
                        <div class="cert-trust-icon">
                            <i class="fa fa-balance-scale"></i>
                        </div>
                        <div>
                            <h4 class="cert-trust-title">Section 8 Regulated</h4>
                            <p class="cert-trust-text">Operates as a registered Non-Profit Company with transparent annual statutory audits.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="cert-trust-item">
                        <div class="cert-trust-icon">
                            <i class="fa fa-check-square-o"></i>
                        </div>
                        <div>
                            <h4 class="cert-trust-title">ISO 9001:2015 QMS</h4>
                            <p class="cert-trust-text">IAF-accredited Quality Management System ensuring excellence across all programs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================= -->
        <!-- SECTION: INSTITUTIONAL CSR / AUDIT HELP DESK  -->
        <!-- ============================================= -->
        <div class="cert-helpdesk-card wow fade-in-bottom" data-wow-delay="300ms">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8 text-lg-start text-center mb-3 mb-lg-0">
                    <h3 style="font-size: 22px; font-weight: 800; color: #0c2340; margin-bottom: 6px;">
                        Need Certified Compliance Dossiers for CSR or Institutional Audits?
                    </h3>
                    <p style="font-size: 14.5px; color: #64748b; margin: 0;">
                        Our legal &amp; compliance desk provides verified MOUs, audited balance sheets, utilization certificates, and MCA filings upon request.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <a href="{{ url('contact') }}" class="ed-primary-btn" style="padding: 12px 28px;">
                        <i class="fa fa-envelope-o me-2"></i> Contact Compliance Desk
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ============================================= -->
<!-- MODAL: HIGH-RESOLUTION DOCUMENT VIEWER        -->
<!-- ============================================= -->
<div class="modal fade modal-cert-viewer" id="certViewerModal" tabindex="-1" aria-labelledby="certViewerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title fw-bold text-white mb-1" id="certModalTitle">
                        Document Preview
                    </h5>
                    <span class="badge bg-success" id="certModalBadge">
                        <i class="fa fa-check-circle"></i> Verified Statutory Document
                    </span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-0">
                <div class="cert-modal-body-layout">
                    <!-- Left: Document Image Viewer -->
                    <div class="cert-modal-img-col">
                        <img src="" alt="Certificate" id="certModalImage" class="cert-modal-full-img">
                    </div>

                    <!-- Right: Metadata & Verification -->
                    <div class="cert-modal-info-col">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge" style="background:#034861; color:#fff; font-size:12px;" id="certModalAuthorityPill">Authority</span>
                            <span class="text-muted" style="font-size:12.5px;" id="certModalFormType"></span>
                        </div>

                        <h4 class="fw-bold text-dark mb-2" id="certModalDocName"></h4>
                        <p class="text-muted" style="font-size:13.5px; line-height:1.6;" id="certModalDesc"></p>

                        <hr class="my-3">

                        <h6 class="fw-bold text-dark" style="font-size:14px; text-transform:uppercase; letter-spacing:.5px;">
                            Statutory Specifications
                        </h6>
                        <ul class="cert-spec-list">
                            <li class="cert-spec-item">
                                <span class="cert-spec-k" id="certModalRegLabel">Registration No:</span>
                                <span class="cert-spec-v" id="certModalRegValue"></span>
                            </li>
                            <li class="cert-spec-item">
                                <span class="cert-spec-k">Issuing Authority:</span>
                                <span class="cert-spec-v" id="certModalAuthority"></span>
                            </li>
                            <li class="cert-spec-item">
                                <span class="cert-spec-k">Issue Date:</span>
                                <span class="cert-spec-v" id="certModalIssueDate"></span>
                            </li>
                            <li class="cert-spec-item">
                                <span class="cert-spec-k">Validity Period:</span>
                                <span class="cert-spec-v" id="certModalValidity"></span>
                            </li>
                            <li class="cert-spec-item">
                                <span class="cert-spec-k">Entity PAN:</span>
                                <span class="cert-spec-v" id="certModalPan"></span>
                            </li>
                            <li class="cert-spec-item" id="certModalDinRow">
                                <span class="cert-spec-k" id="certModalDinLabel">Reference / DIN:</span>
                                <span class="cert-spec-v" id="certModalDinValue"></span>
                            </li>
                        </ul>

                        <h6 class="fw-bold text-dark mt-3" style="font-size:14px;">Key Statutory Highlights</h6>
                        <ul class="cert-bullets-list" id="certModalHighlights"></ul>

                        <div class="d-grid gap-2 mt-4">
                            <a href="#" id="certModalDownloadBtn" class="ed-primary-btn text-center" target="_blank" download>
                                <i class="fa fa-download me-2"></i> Download Official Certificate (PDF)
                            </a>
                            <a href="#" id="certModalGovVerifyBtn" class="btn btn-outline-secondary btn-sm text-center" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-external-link me-1"></i> Verify on Official Government Portal
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer bg-light py-2 px-4 justify-content-between">
                <small class="text-muted">
                    <i class="fa fa-lock text-success me-1"></i> Digitally certified official statutory document of Sambhavam Foundation.
                </small>
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
// JSON payload for modal interactions
const certData = @json($certificates);

function openCertModal(slug) {
    const cert = certData.find(c => c.slug === slug);
    if (!cert) return;

    document.getElementById('certModalTitle').innerText = cert.title;
    document.getElementById('certModalImage').src = '{{ asset('') }}' + cert.preview_image;
    document.getElementById('certModalImage').alt = cert.title;
    document.getElementById('certModalAuthorityPill').innerText = cert.short_title;
    document.getElementById('certModalFormType').innerText = cert.form || '';
    document.getElementById('certModalDocName').innerText = cert.title;
    document.getElementById('certModalDesc').innerText = cert.description;

    document.getElementById('certModalRegLabel').innerText = cert.reg_label + ':';
    document.getElementById('certModalRegValue').innerText = cert.reg_number;
    document.getElementById('certModalAuthority').innerText = cert.authority;
    document.getElementById('certModalIssueDate').innerText = cert.issue_date || 'Approved';
    document.getElementById('certModalValidity').innerText = cert.validity || 'Valid';
    document.getElementById('certModalPan').innerText = cert.pan || 'ABSCS7736H';

    if (cert.din) {
        document.getElementById('certModalDinRow').style.display = 'flex';
        document.getElementById('certModalDinValue').innerText = cert.din;
    } else {
        document.getElementById('certModalDinRow').style.display = 'none';
    }

    // Highlights list
    const hlUl = document.getElementById('certModalHighlights');
    hlUl.innerHTML = '';
    if (cert.highlights && cert.highlights.length) {
        cert.highlights.forEach(h => {
            const li = document.createElement('li');
            li.innerText = h;
            hlUl.appendChild(li);
        });
    }

    // Download button
    const dlBtn = document.getElementById('certModalDownloadBtn');
    dlBtn.href = '{{ asset('') }}' + cert.pdf_file;

    // Gov verify button
    const govBtn = document.getElementById('certModalGovVerifyBtn');
    if (cert.verify_url) {
        govBtn.href = cert.verify_url;
        govBtn.style.display = 'inline-block';
    } else {
        govBtn.style.display = 'none';
    }

    // Show modal
    const modalEl = document.getElementById('certViewerModal');
    const modalObj = bootstrap.Modal.getOrCreateInstance(modalEl);
    modalObj.show();
}

// Category filter tabs logic
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.cert-filter-btn');
    const certCols = document.querySelectorAll('.cert-item-col');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');
            certCols.forEach(col => {
                if (filter === 'all' || col.getAttribute('data-category') === filter) {
                    col.style.display = 'block';
                } else {
                    col.style.display = 'none';
                }
            });
        });
    });

    // Check hash in URL (e.g. #12a)
    if (window.location.hash) {
        const hash = window.location.hash.replace('#', '');
        const targetCard = document.getElementById(hash);
        if (targetCard) {
            targetCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
            // Highlight briefly
            targetCard.querySelector('.cert-grid-card').style.outline = '3px solid var(--sambhavam-teal, #016d77)';
            setTimeout(() => {
                targetCard.querySelector('.cert-grid-card').style.outline = '';
            }, 3000);
        }
    }
});
</script>
@endpush

@endsection
