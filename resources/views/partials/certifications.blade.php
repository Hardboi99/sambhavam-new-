@push('styles')
<style>
.cert-seal-card {
    background: #fff;
    border-radius: 16px;
    padding: 35px 20px 25px;
    height: 100%;
    text-align: center;
    position: relative;
    border-top: 4px solid var(--cert-color, #1a56db);
    box-shadow: 0 4px 20px rgba(0,0,0,.04);
    transition: all .35s ease;
}
.cert-seal-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0,0,0,.09);
}
.cert-seal-icon {
    width: 64px;
    height: 64px;
    margin: -55px auto 18px;
    border-radius: 50%;
    background: var(--cert-color, #1a56db);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: #fff;
    box-shadow: 0 8px 20px rgba(0,0,0,.15);
    border: 4px solid #fff;
}
.cert-seal-label {
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 6px;
    color: #111827;
}
.cert-seal-reg {
    font-size: 11.5px;
    color: #9ca3af;
    letter-spacing: .4px;
    display: block;
    text-transform: uppercase;
}
.cert-seal-badge-tick {
    position: absolute;
    top: 12px;
    right: 12px;
    color: #10b981;
    font-size: 14px;
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
                    ['label' => '12A Registered',        'reg' => 'REG. NO: XXXXXXXXXX', 'icon' => 'fa-certificate', 'color' => '#1a56db'],
                    ['label' => '80G Registered',         'reg' => 'REG. NO: XXXXXXXXXX', 'icon' => 'fa-certificate', 'color' => '#0d9488'],
                    ['label' => 'Trust Registered',       'reg' => 'REG. NO: XXXXXXXXXX', 'icon' => 'fa-file-text',   'color' => '#059669'],
                    ['label' => 'CSR-1 Registered',       'reg' => 'CSR REG: XXXXXXXXXX', 'icon' => 'fa-briefcase',   'color' => '#ea580c'],
                    ['label' => 'NGO Darpan Registered',  'reg' => 'ID: MH/XXXX/XXXXXXX', 'icon' => 'fa-id-card',     'color' => '#1a56db'],
                    ['label' => 'E-Anudaan Certified',    'reg' => 'REG. NO: XXXXXXXXXX', 'icon' => 'fa-handshake-o', 'color' => '#0d9488'],
                    ['label' => 'ISO 9001:2015 (QMS)',    'reg' => 'CERT NO: XXXXXXXXXX', 'icon' => 'fa-check-circle','color' => '#ea580c'],
                ];
            @endphp

            @foreach ($certifications as $cert)
                <div class="col-6 col-md-2 col-lg-2">
                    <div class="cert-seal-card wow fade-in-bottom" data-wow-delay="{{ 150 + $loop->index * 50 }}ms" style="--cert-color: {{ $cert['color'] }};">
                        <i class="fa fa-check cert-seal-badge-tick"></i>
                        <div class="cert-seal-icon">
                            <i class="fa {{ $cert['icon'] }}"></i>
                        </div>
                        <h4 class="cert-seal-label">{{ $cert['label'] }}</h4>
                        <span class="cert-seal-reg">{{ $cert['reg'] }}</span>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="text-center mt-5">
            <a href="{{ url('contact') }}" class="ed-primary-btn">Request Compliance Documents</a>
        </div>
    </div>
</section>