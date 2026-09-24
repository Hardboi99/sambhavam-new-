@extends('layouts.app')

@section('title', 'About Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

<section class="page-header" data-background="{{ asset('images/banners/abt1.jpg') }}">
       <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">About Us</h1>
                <h4 class="sub-title"><a class="home" href="{{ url('/') }}">About Us </a><span class="icon">/</span><a class="inner-page" href="{{ url('about-us') }}"> About Us</a></h4>
            </div>
        </div>
</section>


    <!-- ============================================= -->
    <!-- SECTION 2: ABOUT SAMBHAVAM -->
    <!-- (REUSES existing .about-section styles from the template - no new CSS) -->
    <!-- ============================================= -->
    <section class="about-section pt-80 pb-5">
        <div class="container">
            <div class="row boxx">
                <div class="col-xl-6 col-lg-12">
                    <div class="about-img-wrap wow fade-in-left h-100" data-wow-delay="400ms">
                            <img class="my-2 rounded-2" src="{{ asset('images/about/about-img-1.jpg') }}" alt="Sambhavam Foundation">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 my-auto">
                    <div class="about-content my-auto">
                        <div class="section-heading mb-40">
                            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="icons fa fa-bolt"></i></span>Who We Are</h4>
                            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Where Knowledge Meets Opportunity</h2>
                            <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">We are building a next-generation platform at the intersection of education, technology, innovation, leadership, climate action and inclusive development. Founded by a multidisciplinary team of educators, social-development professionals, engineers, environmental experts and technology innovators, SAMBHAVAM was created around a powerful belief: when knowledge meets opportunity, transformation becomes possible.</p>
                            <p class="wow fade-in-bottom" data-wow-delay="550ms">We design evidence-based, technology-enabled and people-centred solutions that help learners realise their potential, strengthen communities and create a more inclusive, resilient and sustainable future. From classrooms to careers, and from local ideas to scalable impact, SAMBHAVAM equips people to learn, build, lead and thrive.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->

    <!-- ============================================= -->
    <!-- SECTION 3: VISION & MISSION -->
    <!-- (NEW SECTION - uses .vision-mission-section, styles below) -->
    <!-- ============================================= -->
    <section class="vision-mission-section pt-5 pb-50 mt-20">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="vm-card vm-card-blue wow fade-in-bottom" data-wow-delay="200ms">
                        <div class="vm-icon"><i class="icons fa fa-eye"></i></div>
                        <span class="vm-label">Our Vision</span>
                        <h3 class="vm-title">A Future Where Everyone Can Learn, Lead and Succeed</h3>
                        <p>To build an equitable, resilient and sustainable world where every individual has the opportunity to discover their potential, access quality learning, develop future-ready capabilities and create meaningful impact.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="vm-card vm-card-teal wow fade-in-bottom" data-wow-delay="350ms">
                        <div class="vm-icon"><i class="icons fa fa-rocket"></i></div>
                        <span class="vm-label">Our Mission</span>
                        <h3 class="vm-title">Transforming Lives Through Learning and Leadership</h3>
                        <p>To transform lives through innovative education, technology, leadership development, environmental stewardship and strategic partnerships. We aim to expand access to opportunity, nurture talent, strengthen communities and create measurable social, economic and environmental impact at scale.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ vision-mission-section -->

    <!-- ============================================= -->
    <!-- SECTION 4: OUR PURPOSE -->
    <!-- (NEW SECTION - uses .purpose-section, styles below) -->
    <!-- ============================================= -->
    <section class="purpose-section pt-60 pb-120">
        <div class="container boxx">
            <div class="section-heading text-center" style="max-width:760px;margin:0 auto;">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="icons fa fa-bolt"></i></span>Our Purpose</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Turning Potential into Possibility</h2>
                <p class="wow fade-in-bottom" data-wow-delay="500ms">SAMBHAVAM exists to bridge the gap between talent and opportunity, so people can not only prepare for the future, but help shape it.</p>
            </div>

            @php
                $bridges = [
                    ['Talent', 'Opportunity'],
                    ['Learning', 'Employment'],
                    ['Ideas', 'Innovation'],
                    ['Ambition', 'Achievement'],
                    ['Communities', 'Sustainable Development'],
                ];
            @endphp

            <div class="purpose-bridge-list">
                @foreach ($bridges as $i => $bridge)
                    <div class="purpose-bridge-item wow fade-in-bottom" data-wow-delay="{{ 200 + ($i * 100) }}ms">
                        <span class="purpose-side">{{ $bridge[0] }}</span>
                        <span class="purpose-arrow"><i class="icons fa fa-long-arrow-right"></i></span>
                        <span class="purpose-side">{{ $bridge[1] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ./ purpose-section -->

    <!-- ============================================= -->
    <!-- SECTION 5: WHAT WE BUILD -->
    <!-- (REUSES existing .about-feature / .about-feature-card styles - no new CSS) -->
    <!-- ============================================= -->
    <section class="about-feature pt-60 pb-120">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="icons fa fa-bolt"></i></span>What We Build</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">People, Prepared for What Comes Next</h2>
            </div>
            <div class="row gy-lg-4 gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="about-feature-card wow fade-in-bottom" data-wow-delay="200ms">
                        <div class="icon"><i class="icons fa fa-graduation-cap"></i></div>
                        <div class="content">
                            <h3 class="title">Future Learners</h3>
                            <p>Young people equipped with strong academic foundations, curiosity and confidence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-feature-card wow fade-in-bottom" data-wow-delay="300ms">
                        <div class="icon"><i class="icons fa fa-briefcase"></i></div>
                        <div class="content">
                            <h3 class="title">Future Professionals</h3>
                            <p>Students and youth prepared for competitive examinations, higher education and emerging careers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-feature-card wow fade-in-bottom" data-wow-delay="400ms">
                        <div class="icon"><i class="icons fa fa-lightbulb-o"></i></div>
                        <div class="content">
                            <h3 class="title">Future Innovators</h3>
                            <p>Problem-solvers capable of applying technology, research and creativity to real-world challenges.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-feature-card wow fade-in-bottom" data-wow-delay="200ms">
                        <div class="icon"><i class="icons fa fa-star"></i></div>
                        <div class="content">
                            <h3 class="title">Future Leaders</h3>
                            <p>Ethical, confident and socially responsible individuals who lead with purpose.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="about-feature-card wow fade-in-bottom" data-wow-delay="300ms">
                        <div class="icon"><i class="icons fa fa-globe"></i></div>
                        <div class="content">
                            <h3 class="title">Future-Ready Communities</h3>
                            <p>Inclusive and resilient communities supported through livelihoods, climate action, skills and innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-feature -->

    <!-- ============================================= -->
    <!-- SECTION 6: OUR CORE VALUES -->
    <!-- (REUSES existing .why-academy-section / .why-card styles - no new CSS) -->
    <!-- ============================================= -->
    <section class="why-academy-section pt-60 pb-120">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="icons fa fa-bolt"></i></span>Our Core Values</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">What Guides Everything We Do</h2>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-blue wow fade-in-bottom" data-wow-delay="150ms">
                        <span class="why-card-num">01</span>
                        <div class="why-icon"><i class="icons fa fa-lightbulb-o"></i></div>
                        <h4 class="title">Possibility</h4>
                        <p>We believe every individual has the potential to grow, contribute and succeed.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-teal wow fade-in-bottom" data-wow-delay="250ms">
                        <span class="why-card-num">02</span>
                        <div class="why-icon"><i class="icons fa fa-trophy"></i></div>
                        <h4 class="title">Excellence</h4>
                        <p>We pursue quality, discipline, innovation and measurable outcomes in everything we do.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-green wow fade-in-bottom" data-wow-delay="350ms">
                        <span class="why-card-num">03</span>
                        <div class="why-icon"><i class="icons fa fa-users"></i></div>
                        <h4 class="title">Inclusion</h4>
                        <p>We create equitable opportunities for learners and communities across every background.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-orange wow fade-in-bottom" data-wow-delay="450ms">
                        <span class="why-card-num">04</span>
                        <div class="why-icon"><i class="icons fa fa-cogs"></i></div>
                        <h4 class="title">Innovation</h4>
                        <p>We use technology, creativity, research and design thinking to solve emerging challenges.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-blue wow fade-in-bottom" data-wow-delay="150ms">
                        <span class="why-card-num">05</span>
                        <div class="why-icon"><i class="icons fa fa-flag"></i></div>
                        <h4 class="title">Leadership</h4>
                        <p>We nurture responsible, confident and purpose-driven leaders.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-teal wow fade-in-bottom" data-wow-delay="250ms">
                        <span class="why-card-num">06</span>
                        <div class="why-icon"><i class="icons fa fa-shield"></i></div>
                        <h4 class="title">Integrity</h4>
                        <p>We act with transparency, accountability and respect.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-green wow fade-in-bottom" data-wow-delay="350ms">
                        <span class="why-card-num">07</span>
                        <div class="why-icon"><i class="icons fa fa-heart"></i></div>
                        <h4 class="title">Impact</h4>
                        <p>We focus on meaningful, measurable and lasting transformation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ why-academy-section (core values) -->

    <!-- ============================================= -->
    <!-- SECTION 7: OUR IMPACT ECOSYSTEM -->
    <!-- (NEW SECTION - uses .ecosystem-section, styles below) -->
    <!-- ============================================= -->
    <section class="ecosystem-section pt-60 pb-120" id="ecosystem">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="icons fa fa-bolt"></i></span>Our Impact Ecosystem</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Three Platforms. One Journey.</h2>
            </div>
            <div class="row gy-4 align-items-stretch">
                <div class="col-lg-4">
                    <div class="ecosystem-card wow fade-in-bottom" data-wow-delay="200ms">
                        <span class="ecosystem-num">01</span>
                        <div class="ecosystem-icon"><i class="icons fa fa-graduation-cap"></i></div>
                        <h3 class="title">Education, Skills and Future Readiness</h3>
                        <p>Helping learners succeed academically, professionally and personally.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ecosystem-card wow fade-in-bottom" data-wow-delay="300ms">
                        <span class="ecosystem-num">02</span>
                        <div class="ecosystem-icon"><i class="icons fa fa-leaf"></i></div>
                        <h3 class="title">Climate, Environment and Sustainable Development</h3>
                        <p>Advancing science-based and community-driven solutions for a healthier planet.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ecosystem-card wow fade-in-bottom" data-wow-delay="400ms">
                        <span class="ecosystem-num">03</span>
                        <div class="ecosystem-icon"><i class="icons fa fa-briefcase"></i></div>
                        <h3 class="title">Innovation, Livelihoods and Inclusive Empowerment</h3>
                        <p>Creating pathways to entrepreneurship, employment, dignity and economic opportunity.</p>
                    </div>
                </div>
            </div>
            <div class="ecosystem-flow wow fade-in-bottom" data-wow-delay="500ms">
                <span>Learn</span><i class="icons fa fa-angle-right"></i>
                <span>Build</span><i class="icons fa fa-angle-right"></i>
                <span>Lead</span><i class="icons fa fa-angle-right"></i>
                <span>Transform</span>
            </div>
        </div>
    </section>
    <!-- ./ ecosystem-section -->

    <!-- ============================================= -->
    <!-- SECTION 8: CLOSING STATEMENT -->
    <!-- ============================================= -->
    <section class="about-closing-section container my-5" style="background-image: url('{{ asset('images/banners/ab-bg.png') }}');">
        <div class="about-closing-overlay"></div>
        <div class="about-closing-pattern"></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="about-closing-content text-center">
                <div class="about-closing-eyebrow wow fade-in-bottom" data-wow-delay="200ms">
                    <i class="fa fa-bolt"></i>
                    <span>This Is SAMBHAVAM</span>
                </div>

                <div class="about-closing-lines-grid wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="about-closing-item">
                        <i class="fa fa-compass"></i>
                        <span>A place where <strong>curiosity is encouraged</strong>.</span>
                    </div>
                    <div class="about-closing-item">
                        <i class="fa fa-line-chart"></i>
                        <span>Where <strong>ambition receives direction</strong>.</span>
                    </div>
                    <div class="about-closing-item">
                        <i class="fa fa-laptop"></i>
                        <span>Where <strong>technology strengthens learning</strong>.</span>
                    </div>
                    <div class="about-closing-item">
                        <i class="fa fa-users"></i>
                        <span>Where students become <strong>leaders</strong> &amp; communities discover <strong>new possibilities</strong>.</span>
                    </div>
                </div>

                <h2 class="about-closing-tagline wow fade-in-bottom" data-wow-delay="450ms">
                    Learn. Innovate. Lead. Create Impact.
                </h2>
                <div class="about-closing-divider wow fade-in-bottom" data-wow-delay="500ms"></div>

                <div class="about-closing-actions wow fade-in-bottom" data-wow-delay="550ms">
                    <a href="{{ url('/#academy') }}" class="ed-primary-btn closing-gold-btn">
                        <i class="fa fa-graduation-cap me-2"></i> Discover Our Programmes
                    </a>
                    <a href="{{ url('contact') }}" class="ed-primary-btn closing-glass-btn">
                        <i class="fa fa-handshake-o me-2"></i> Join Our Mission
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ closing-section -->

@push('styles')
<style>
/* ======================================================== */
/* ABOUT US CLOSING STATEMENT SECTION (ENHANCED)           */
/* ======================================================== */
.about-closing-section {
    position: relative;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 24px;
    padding: 75px 30px;
    overflow: hidden;
    box-shadow: 0 20px 50px rgba(3, 72, 97, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.15);
}

.about-closing-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(3, 72, 97, 0.95) 0%, rgba(1, 109, 119, 0.90) 50%, rgba(16, 36, 58, 0.96) 100%);
    z-index: 1;
}

.about-closing-pattern {
    position: absolute;
    inset: 0;
    background: 
        radial-gradient(circle at 12% 18%, rgba(222, 182, 94, 0.15) 0%, transparent 40%),
        radial-gradient(circle at 88% 82%, rgba(1, 109, 119, 0.25) 0%, transparent 45%),
        url('data:image/svg+xml;utf8,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="%23ffffff" fill-opacity="0.03" fill-rule="evenodd"><path d="M0 60L60 0H30L0 30M60 60V30L30 60"/></g></svg>');
    z-index: 1;
    pointer-events: none;
}

.about-closing-content {
    max-width: 860px;
    margin: 0 auto;
    position: relative;
}

.about-closing-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(222, 182, 94, 0.4);
    color: #deb65e;
    padding: 6px 20px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 28px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.12);
}

.about-closing-lines-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
    margin-bottom: 32px;
}

.about-closing-item {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.14);
    border-radius: 14px;
    padding: 16px 20px;
    display: flex;
    align-items: center;
    gap: 14px;
    text-align: left;
    color: rgba(255, 255, 255, 0.95);
    font-size: 14.5px;
    line-height: 1.5;
    transition: all 0.3s ease;
}

.about-closing-item:hover {
    background: rgba(255, 255, 255, 0.14);
    transform: translateY(-3px);
    border-color: rgba(222, 182, 94, 0.5);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.about-closing-item i {
    font-size: 18px;
    color: #deb65e;
    flex-shrink: 0;
    width: 24px;
    text-align: center;
}

.about-closing-item strong {
    color: #ffffff;
    font-weight: 700;
}

.about-closing-tagline {
    color: #ffffff;
    font-size: 34px;
    font-weight: 800;
    letter-spacing: -0.5px;
    line-height: 1.25;
    margin-bottom: 14px;
}

.about-closing-divider {
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #deb65e, #f59e0b);
    border-radius: 3px;
    margin: 0 auto 30px;
}

.about-closing-actions {
    display: flex;
    justify-content: center;
    gap: 16px;
    flex-wrap: wrap;
}

.about-closing-actions .closing-gold-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 13px 30px;
    background: linear-gradient(135deg, #deb65e 0%, #c99a3e 100%);
    color: #043148 !important;
    border-radius: 50px;
    font-size: 14.5px;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 6px 20px rgba(222, 182, 94, 0.35);
    border: 1px solid #deb65e;
    transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
}

.about-closing-actions .closing-gold-btn:hover {
    background: #ffffff;
    border-color: #ffffff;
    color: #043148 !important;
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
}

.about-closing-actions .closing-glass-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 13px 30px;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    color: #ffffff !important;
    border-radius: 50px;
    font-size: 14.5px;
    font-weight: 600;
    text-decoration: none;
    border: 1.5px solid rgba(255, 255, 255, 0.6);
    transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
}

.about-closing-actions .closing-glass-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: #ffffff;
    color: #ffffff !important;
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

@media (max-width: 767px) {
    .about-closing-section { padding: 50px 20px; }
    .about-closing-lines-grid { grid-template-columns: 1fr; gap: 12px; }
    .about-closing-tagline { font-size: 26px; }
    .about-closing-item { padding: 14px 16px; font-size: 13.5px; }
}
</style>
@endpush

@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // No new JS behaviour required for this page beyond the site-wide
        // WOW.js scroll animations already initialised in layouts.app
    });
</script>
@endpush