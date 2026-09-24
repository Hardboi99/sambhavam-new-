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

/* Category Filter Tabs */
.cert-filter-nav {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 45px;
}
.cert-filter-btn {
    border: 1px solid #e2e8f0;
    background: #ffffff;
    color: #4b5563;
    padding: 10px 24px;
    border-radius: 30px;
    font-size: 14px;
    font-weight: 600;
    transition: all .25s ease;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}
.cert-filter-btn:hover,
.cert-filter-btn.active {
    background: var(--sambhavam-blue, #034861);
    color: #ffffff;
    border-color: var(--sambhavam-blue, #034861);
    box-shadow: 0 6px 16px rgba(3, 72, 97, 0.22);
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
    transition: transform .35s ease, box-shadow .35s ease;
    cursor: pointer;
}
.cert-paper-wrapper:hover {
    transform: scale(1.03);
    box-shadow: 0 14px 30px rgba(3, 72, 97, 0.22);
}
.cert-paper-img {
    display: block;
    width: 100%;
    max-height: 270px;
    object-fit: cover;
    object-position: top;
    border-radius: 4px;
    border: 1px solid #e5e7eb;
    transition: opacity .3s ease;
}
.cert-paper-overlay-hint {
    position: absolute;
    inset: 6px;
    background: rgba(3, 72, 97, 0.82);
    backdrop-filter: blur(2px);
    color: #ffffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 4px;
    opacity: 0;
    transition: opacity .25s ease;
    gap: 8px;
}
.cert-paper-wrapper:hover .cert-paper-overlay-hint {
    opacity: 1;
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
    margin-bottom: 14px;
}

/* Registration Meta Box */
.cert-meta-box {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 12px 14px;
    margin-bottom: 18px;
    margin-top: auto;
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
/* Card Actions */
.cert-card-actions {
    display: block;
    padding-top: 14px;
    border-top: 1px solid #f1f5f9;
}
.btn-cert-preview {
    width: 100%;
    background: linear-gradient(135deg, #034861 0%, #016d77 100%);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #ffffff;
    font-weight: 700;
    font-size: 14px;
    padding: 12px 18px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all .25s ease;
    cursor: pointer;
    box-shadow: 0 4px 14px rgba(1, 109, 119, 0.22);
    text-decoration: none;
}
.btn-cert-preview:hover {
    background: linear-gradient(135deg, #deb65e 0%, #c99a3e 100%);
    color: #032b3a;
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(222, 182, 94, 0.4);
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

/* ========================================================
   HIGH-END DOCUMENT LIGHTBOX VIEWER MODAL
   ======================================================== */
.modal.modal-cert-viewer {
    z-index: 10600 !important;
}
.modal-backdrop.show {
    z-index: 10550 !important;
    background-color: rgba(12, 35, 64, 0.82);
    backdrop-filter: blur(8px);
}
.modal-cert-viewer .modal-dialog {
    max-width: 950px;
    margin: 1.5rem auto;
    transition: transform .3s ease-out, max-width .3s ease;
}
.modal-cert-viewer .modal-dialog.modal-fullscreen {
    max-width: 100% !important;
    width: 100% !important;
    margin: 0 !important;
    height: 100vh !important;
}
.modal-cert-viewer .modal-content {
    border-radius: 18px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    overflow: hidden;
    box-shadow: 0 30px 90px rgba(0, 0, 0, 0.45);
    background: #0f172a;
}
.modal-cert-viewer.modal-fullscreen .modal-content {
    border-radius: 0;
    height: 100vh;
}

/* Modal Header */
.modal-cert-viewer .modal-header {
    background: linear-gradient(135deg, #0c2340 0%, #034861 100%);
    color: #ffffff;
    padding: 14px 22px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.12);
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.cert-modal-submeta {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 2px;
}
.cert-modal-header-actions {
    display: flex;
    align-items: center;
    gap: 10px;
}
.cert-modal-tool-btn {
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #ffffff;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    cursor: pointer;
    transition: all .2s ease;
    text-decoration: none;
}
.cert-modal-tool-btn:hover {
    background: rgba(255, 255, 255, 0.25);
    color: #ffffff;
}
.modal-cert-viewer .btn-close-cert {
    background: rgba(255, 255, 255, 0.15);
    border: none;
    color: #ffffff;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    cursor: pointer;
    transition: all .2s ease;
}
.modal-cert-viewer .btn-close-cert:hover {
    background: #ef4444;
    color: #ffffff;
    transform: rotate(90deg);
}

/* Canvas Viewport */
.cert-viewport {
    width: 100%;
    min-height: 75vh;
    max-height: 80vh;
    overflow: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 30px 20px;
    position: relative;
    background: radial-gradient(circle at center, #1e293b 0%, #0b1329 100%);
    user-select: none;
}
.modal-fullscreen .cert-viewport {
    max-height: calc(100vh - 120px);
    min-height: calc(100vh - 120px);
}
.cert-viewport::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}
.cert-viewport::-webkit-scrollbar-track {
    background: rgba(15, 23, 42, 0.6);
}
.cert-viewport::-webkit-scrollbar-thumb {
    background: rgba(222, 182, 94, 0.4);
    border-radius: 4px;
}
.cert-viewport::-webkit-scrollbar-thumb:hover {
    background: rgba(222, 182, 94, 0.7);
}
.cert-paper-canvas {
    transition: transform 0.18s ease-out;
    transform-origin: center center;
    display: inline-block;
    max-width: 100%;
    position: relative;
    cursor: zoom-in;
}
.cert-modal-full-img {
    display: block;
    max-width: 100%;
    max-height: 74vh;
    width: auto;
    height: auto;
    border-radius: 6px;
    background: #ffffff;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.7), 0 0 0 1px rgba(255, 255, 255, 0.15);
}
.modal-fullscreen .cert-modal-full-img {
    max-height: 84vh;
}
.cert-zoom-group {
    display: inline-flex;
    align-items: center;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    padding: 2px 4px;
    border: 1px solid rgba(255, 255, 255, 0.15);
}
.cert-zoom-btn {
    background: transparent;
    border: none;
    color: #f1f5f9;
    padding: 4px 10px;
    font-size: 13px;
    font-weight: 700;
    border-radius: 6px;
    cursor: pointer;
    transition: background .2s;
}
.cert-zoom-btn:hover {
    background: rgba(255, 255, 255, 0.2);
}
.cert-zoom-val {
    color: var(--sambhavam-gold, #deb65e);
    font-size: 12px;
    font-weight: 700;
    padding: 0 8px;
    min-width: 48px;
    text-align: center;
    font-family: monospace;
}

/* Loading State */
.cert-stage-loader {
    position: absolute;
    inset: 0;
    background: #0f172a;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 12px;
    color: #94a3b8;
    z-index: 5;
    opacity: 0;
    pointer-events: none;
    transition: opacity .2s ease;
}
.cert-stage-loader.loading {
    opacity: 1;
    pointer-events: auto;
}
.cert-spinner {
    width: 42px;
    height: 42px;
    border: 3.5px solid rgba(222, 182, 94, 0.2);
    border-top-color: var(--sambhavam-gold, #deb65e);
    border-radius: 50%;
    animation: certSpin 0.8s linear infinite;
}
@keyframes certSpin {
    to { transform: rotate(360deg); }
}

.cert-live-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #ecfdf5;
    color: #059669;
    border: 1px solid #a7f3d0;
    font-size: 11.5px;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 20px;
}
.cert-live-badge .pulse-dot {
    width: 8px;
    height: 8px;
    background: #10b981;
    border-radius: 50%;
    box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
    animation: certPulse 1.8s infinite;
}
@keyframes certPulse {
    0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
    70% { box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
    100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
}

.btn-cert-copy {
    background: #ffffff;
    border: 1px solid #cbd5e1;
    color: #034861;
    padding: 6px 14px;
    border-radius: 8px;
    font-size: 12.5px;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    cursor: pointer;
    transition: all .2s;
    white-space: nowrap;
}
.btn-cert-copy:hover {
    background: #034861;
    color: #ffffff;
    border-color: #034861;
}
.btn-cert-copy.copied {
    background: #10b981 !important;
    border-color: #10b981 !important;
    color: #ffffff !important;
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
                <div class="cert-pill-badge mb-0 wow fade-in-right" data-wow-delay="350ms" style="background: rgba(255,255,255,0.15); color:#fff; border-color: rgba(255,255,255,0.25); backdrop-filter: blur(8px); display: inline-flex; align-items: center; gap: 10px; padding: 10px 24px; border-radius: 50px; border: 1.5px solid rgba(255,255,255,0.25); font-size: 15px; font-weight: 700; color: #fff;">
                    <i class="fa fa-shield" style="color: var(--sambhavam-gold, #deb65e);"></i> 100% Statutory Compliant
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================= -->
<!-- SECTION: MAIN CERTIFICATES & ACCREDITATIONS   -->
<!-- ============================================= -->
<section class="cert-main-section pt-60 pb-80" style="background: #f8fafc;">
    <div class="container">

        <!-- Filter Buttons -->
        <div class="cert-filter-nav wow fade-in-bottom" data-wow-delay="200ms">
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

                            <div class="cert-paper-wrapper" data-cert-slug="{{ $cert['slug'] }}" role="button" tabindex="0" title="Click to preview {{ $cert['title'] }}">
                                <img src="{{ $cert['preview_url'] }}" alt="{{ $cert['title'] }}" class="cert-paper-img" loading="lazy">
                                <div class="cert-paper-overlay-hint">
                                    <i class="fa fa-search-plus fa-2x"></i>
                                    <span style="font-size:13px; font-weight:700;">Click to Inspect</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card Body Details -->
                        <div class="cert-card-body">
                            <div class="cert-card-authority">
                                <i class="fa fa-university"></i> {{ $cert['authority'] }}
                            </div>
                            <h3 class="cert-card-title">{{ $cert['title'] }}</h3>

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

                            <!-- Single Action Button: Preview Document -->
                            <div class="cert-card-actions">
                                <button type="button" class="btn-cert-preview" data-cert-slug="{{ $cert['slug'] }}">
                                    <i class="fa fa-eye"></i> Preview Document
                                </button>
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
<!-- MODAL: CLEAN HIGH-RESOLUTION IMAGE LIGHTBOX   -->
<!-- ============================================= -->
<div class="modal fade modal-cert-viewer" id="certViewerModal" tabindex="-1" aria-labelledby="certModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" id="certModalDialog">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <div>
                        <h5 class="modal-title fw-bold text-white mb-0" id="certModalTitle">
                            Document Preview
                        </h5>
                        <div class="cert-modal-submeta">
                            <span id="certModalAuthority" class="text-white-50" style="font-size: 12.5px;">-</span>
                            <span class="text-white-50">&bull;</span>
                            <span id="certModalRegValue" style="color: var(--sambhavam-gold, #deb65e); font-family: monospace; font-size: 12.5px; font-weight: 700;">-</span>
                        </div>
                    </div>
                    <span class="cert-live-badge d-none d-md-inline-flex">
                        <span class="pulse-dot"></span>
                        <span>Verified Document</span>
                    </span>
                </div>
                
                <div class="cert-modal-header-actions">
                    <!-- Zoom Controls -->
                    <div class="cert-zoom-group">
                        <button type="button" class="cert-zoom-btn" id="btnZoomOut" title="Zoom Out (-)">
                            <i class="fa fa-minus"></i>
                        </button>
                        <span class="cert-zoom-val" id="zoomLevelDisplay">100%</span>
                        <button type="button" class="cert-zoom-btn" id="btnZoomIn" title="Zoom In (+)">
                            <i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="cert-zoom-btn" id="btnZoomReset" title="Reset Zoom">
                            <i class="fa fa-refresh"></i>
                        </button>
                    </div>

                    <button type="button" class="cert-modal-tool-btn" id="btnToggleFullscreen" title="Toggle Fullscreen">
                        <i class="fa fa-arrows-alt" id="fullscreenIcon"></i> <span class="d-none d-sm-inline">Maximize</span>
                    </button>
                    <button type="button" class="btn-close-cert" data-bs-dismiss="modal" aria-label="Close" title="Close Preview">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Body: High Resolution Full Image Stage -->
            <div class="modal-body p-0">
                <div class="cert-viewport" id="certViewport">
                    <!-- Loader -->
                    <div class="cert-stage-loader" id="certStageLoader">
                        <div class="cert-spinner"></div>
                        <span>Loading Document Preview...</span>
                    </div>

                    <!-- Image Container -->
                    <div class="cert-paper-canvas" id="certPaperCanvas" title="Double click to Zoom">
                        <img src="" alt="Certificate" id="certModalImage" class="cert-modal-full-img">
                    </div>
                </div>
            </div>

            <!-- Modal Footer: Clean & Simple (No Download Options) -->
            <div class="modal-footer bg-light py-2 px-4 justify-content-between align-items-center">
                <small class="text-muted">
                    <i class="fa fa-shield text-success me-1"></i> Digitally Certified Statutory Document &bull; Sambhavam Foundation
                </small>
                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn-cert-copy" id="btnCopyRegNum" title="Copy Registration / URN Number">
                        <i class="fa fa-copy"></i> <span>Copy URN</span>
                    </button>
                    <button type="button" class="btn btn-sm btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')
<script>
// JSON payload for modal interactions
const certData = @json($certificates);
let certModalInstance = null;
let currentZoom = 1;
let currentCert = null;
let isFullscreen = false;

function updateZoom(newZoom) {
    currentZoom = Math.min(Math.max(newZoom, 0.5), 2.5);
    const canvas = document.getElementById('certPaperCanvas');
    const zoomVal = document.getElementById('zoomLevelDisplay');
    if (canvas) {
        canvas.style.transform = `scale(${currentZoom})`;
    }
    if (zoomVal) {
        zoomVal.textContent = `${Math.round(currentZoom * 100)}%`;
    }
}

function copyText(text, btnEl) {
    if (!text) return;
    navigator.clipboard.writeText(text).then(() => {
        if (!btnEl) return;
        const originalHtml = btnEl.innerHTML;
        btnEl.classList.add('copied');
        btnEl.innerHTML = '<i class="fa fa-check"></i> <span>Copied!</span>';
        setTimeout(() => {
            btnEl.classList.remove('copied');
            btnEl.innerHTML = originalHtml;
        }, 2000);
    }).catch(err => {
        console.error('Failed to copy: ', err);
    });
}

function openCertModal(slug) {
    const cert = certData.find(c => c.slug === slug);
    if (!cert) return;
    currentCert = cert;

    const titleEl = document.getElementById('certModalTitle');
    const imgEl = document.getElementById('certModalImage');
    const authEl = document.getElementById('certModalAuthority');
    const regValueEl = document.getElementById('certModalRegValue');
    const loader = document.getElementById('certStageLoader');

    if (titleEl) titleEl.textContent = cert.title;
    if (authEl) authEl.textContent = cert.authority || cert.short_title || '';
    if (regValueEl) regValueEl.textContent = cert.reg_number ? (cert.reg_label + ': ' + cert.reg_number) : '';

    // Reset zoom
    updateZoom(1);

    // Show image with loader
    if (imgEl) {
        if (loader) loader.classList.add('loading');
        imgEl.onload = function() {
            if (loader) loader.classList.remove('loading');
        };
        imgEl.onerror = function() {
            if (loader) loader.classList.remove('loading');
        };
        imgEl.src = cert.preview_url;
        imgEl.alt = cert.title;
    }

    // Open Modal safely
    const modalEl = document.getElementById('certViewerModal');
    if (modalEl) {
        if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            if (!certModalInstance) {
                certModalInstance = bootstrap.Modal.getOrCreateInstance(modalEl);
            }
            certModalInstance.show();
        } else if (window.jQuery && typeof jQuery.fn.modal === 'function') {
            jQuery(modalEl).modal('show');
        } else {
            modalEl.classList.add('show');
            modalEl.style.display = 'block';
            document.body.classList.add('modal-open');
        }
    }
}

// Make openCertModal globally accessible
window.openCertModal = openCertModal;

document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Event Delegation for all preview triggers
    document.addEventListener('click', function(e) {
        const trigger = e.target.closest('[data-cert-slug], .btn-cert-preview, .cert-paper-wrapper');
        if (trigger) {
            const slug = trigger.getAttribute('data-cert-slug');
            if (slug) {
                e.preventDefault();
                openCertModal(slug);
            }
        }
    });

    // 2. Zoom Controls
    const btnZoomIn = document.getElementById('btnZoomIn');
    const btnZoomOut = document.getElementById('btnZoomOut');
    const btnZoomReset = document.getElementById('btnZoomReset');

    if (btnZoomIn) {
        btnZoomIn.addEventListener('click', () => updateZoom(currentZoom + 0.25));
    }
    if (btnZoomOut) {
        btnZoomOut.addEventListener('click', () => updateZoom(currentZoom - 0.25));
    }
    if (btnZoomReset) {
        btnZoomReset.addEventListener('click', () => updateZoom(1));
    }

    // Double click to zoom in/reset
    const paperCanvas = document.getElementById('certPaperCanvas');
    if (paperCanvas) {
        paperCanvas.addEventListener('dblclick', function() {
            if (currentZoom === 1) {
                updateZoom(1.5);
            } else {
                updateZoom(1);
            }
        });
    }

    // 3. Fullscreen Modal Toggle
    const btnToggleFullscreen = document.getElementById('btnToggleFullscreen');
    const modalDialog = document.getElementById('certModalDialog');
    const fullscreenIcon = document.getElementById('fullscreenIcon');

    if (btnToggleFullscreen && modalDialog) {
        btnToggleFullscreen.addEventListener('click', function() {
            isFullscreen = !isFullscreen;
            if (isFullscreen) {
                modalDialog.classList.add('modal-fullscreen');
                if (fullscreenIcon) {
                    fullscreenIcon.classList.remove('fa-arrows-alt');
                    fullscreenIcon.classList.add('fa-compress');
                }
            } else {
                modalDialog.classList.remove('modal-fullscreen');
                if (fullscreenIcon) {
                    fullscreenIcon.classList.remove('fa-compress');
                    fullscreenIcon.classList.add('fa-arrows-alt');
                }
            }
        });
    }

    // 4. Copy Registration Number
    const btnCopyRegNum = document.getElementById('btnCopyRegNum');
    if (btnCopyRegNum) {
        btnCopyRegNum.addEventListener('click', function() {
            if (currentCert && currentCert.reg_number) {
                copyText(currentCert.reg_number, btnCopyRegNum);
            }
        });
    }

    // 5. Filter Tabs
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

    // 6. Check hash in URL (e.g. #12a)
    if (window.location.hash) {
        const hash = window.location.hash.replace('#', '');
        const targetCard = document.getElementById(hash);
        if (targetCard) {
            targetCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
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
