@push('styles')
<style>
.cert-seal-card {
    background: #fff;
    border-radius: 16px;
    padding: 35px 14px 22px;
    height: 100%;
    text-align: center;
    position: relative;
    border-top: 4px solid var(--cert-color, #1a56db);
    box-shadow: 0 4px 20px rgba(0,0,0,.04);
    transition: all .35s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.cert-seal-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0,0,0,.1);
}
.cert-seal-icon {
    width: 62px;
    height: 62px;
    margin: -55px auto 16px;
    border-radius: 50%;
    background: var(--cert-color, #1a56db);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #fff;
    box-shadow: 0 8px 20px rgba(0,0,0,.15);
    border: 4px solid #fff;
    flex-shrink: 0;
}
.cert-seal-label {
    font-size: 14.5px;
    font-weight: 700;
    margin-bottom: 8px;
    color: #111827;
    line-height: 1.35;
}
.cert-seal-reg {
    font-size: 11px;
    font-weight: 600;
    color: #64748b;
    letter-spacing: .3px;
    display: block;
    word-break: break-all;
    background: #f8fafc;
    padding: 4px 6px;
    border-radius: 6px;
    border: 1px dashed #e2e8f0;
}
.cert-seal-badge-tick {
    position: absolute;
    top: 12px;
    right: 12px;
    color: #10b981;
    font-size: 13px;
    background: #ecfdf5;
    border-radius: 50%;
    width: 22px;
    height: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
}

@media (min-width: 992px) {
    .col-lg-2 {
        flex: 0 0 auto;
        width: 13.666667%;
    }
}
</style>
@endpush

<!-- ============================================= -->
<!-- SECTION: LEGAL & COMPLIANCE / CERTIFICATIONS -->
<!-- ============================================= -->
<section class="certifications-section pt-80 pb-80" style="background:#f7f9fc;">
    <div class="container">
        <div class="section-heading text-center mb-40">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                <span class="heading-icon"><i class="fa fa-bolt"></i></span>Legal &amp; Compliance
            </h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="300ms">Recognized. Registered. Trusted.</h2>
            <p class="wow fade-in-bottom" data-wow-delay="400ms" style="max-width:700px;margin:0 auto;">
                SAMBHAVAM Foundation operates under full statutory compliance, registered with the relevant
                government and regulatory authorities.
            </p>
        </div>

        <div class="row gy-5 justify-content-center pt-3">

            @php
                $certifications = [
                    [
                        'label' => '12A Registered',
                        'reg' => 'URN: ABSCS7736HE20251',
                        'icon' => 'fa-certificate',
                        'color' => '#1a56db',
                        'slug'  => '12a'
                    ],
                    [
                        'label' => '80G Registered',
                        'reg' => 'URN: ABSCS7736HF20261',
                        'icon' => 'fa-certificate',
                        'color' => '#0d9488',
                        'slug'  => '80g'
                    ],
                    [
                        'label' => 'Section 8 Incorporated',
                        'reg' => 'CIN: U88900MH2026NPL468368',
                        'icon' => 'fa-building',
                        'color' => '#059669',
                        'slug'  => 'mca-incorporation'
                    ],
                    [
                        'label' => 'CSR-1 Registered',
                        'reg' => 'REG: CSR00109460',
                        'icon' => 'fa-briefcase',
                        'color' => '#ea580c',
                        'slug'  => 'csr-1'
                    ],
                    [
                        'label' => 'NGO Darpan Registered',
                        'reg' => 'ID: MH/2026/0997299',
                        'icon' => 'fa-id-card',
                        'color' => '#1a56db',
                        'slug'  => 'darpan'
                    ],
                    [
                        'label' => 'E-Anudaan Certified',
                        'reg' => 'ID: MH/00053156',
                        'icon' => 'fa-handshake-o',
                        'color' => '#0d9488',
                        'slug'  => 'e-anudaan'
                    ],
                    [
                        'label' => 'ISO 9001:2015 (QMS)',
                        'reg' => 'CERT: E20260243312',
                        'icon' => 'fa-check-circle',
                        'color' => '#ea580c',
                        'slug'  => 'iso-9001'
                    ],
                ];
            @endphp

            @foreach ($certifications as $cert)
                <div class="col-6 col-md-3 col-lg-2">
                    <a href="{{ route('certificates') }}#{{ $cert['slug'] }}" class="text-decoration-none d-block h-100">
                        <div class="cert-seal-card wow fade-in-bottom" data-wow-delay="{{ 150 + $loop->index * 50 }}ms" style="--cert-color: {{ $cert['color'] }};">
                            <span class="cert-seal-badge-tick"><i class="fa fa-check"></i></span>
                            <div class="cert-seal-icon">
                                <i class="fa {{ $cert['icon'] }}"></i>
                            </div>
                            <div>
                                <h4 class="cert-seal-label">{{ $cert['label'] }}</h4>
                                <span class="cert-seal-reg">{{ $cert['reg'] }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('certificates') }}" class="ed-primary-btn">
                <i class="fa fa-shield" style="margin-right:8px;"></i> Preview &amp; Verify Compliance Documents
            </a>
        </div>
    </div>
</section>
    </div>
</section>