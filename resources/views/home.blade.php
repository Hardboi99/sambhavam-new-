@extends('layouts.app')

@section('title', 'Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')
    <!-- ============================================= -->
    <!-- SECTION 1: HERO BANNER SLIDER -->
    <!-- ============================================= -->
    <section class="hero-banner-slider mt-5 mb-5  container position-relative">
    <div class="swiper hero-banner-swiper">
        <div class="swiper-wrapper ">

            <div class="swiper-slide">
                <img src="{{ asset('images/banners/desktop/b1.jpeg') }}"
                     class="d-md-block d-none bannerwidth"
                     alt="Sambhavam Banner 1">
                <img src="{{ asset('images/banners/mobile/mobile1.jpeg') }}"
                     class="d-md-none d-block"
                     alt="Sambhavam Banner mobile 1">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/banners/desktop/b2.png') }}"
                     class="d-md-block d-none bannerwidth"
                     alt="Sambhavam Banner 2">
                <img src="{{ asset('images/banners/mobile/mobile2.jpeg') }}"
                     class="d-md-none d-block"
                     alt="Sambhavam Banner mobile 2">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/banners/desktop/b3.png') }}"
                     class="d-md-block d-none bannerwidth"
                     alt="Sambhavam Banner 3">
                <img src="{{ asset('images/banners/mobile/mobile3.jpeg') }}"
                     class="d-md-none d-block"
                     alt="Sambhavam Banner mobile 3">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/banners/desktop/b4.png') }}"
                     class="d-md-block d-none bannerwidth"
                     alt="Sambhavam Banner 4">
                <img src="{{ asset('images/banners/mobile/mobile4.jpeg') }}"
                     class="d-md-none d-block"
                     alt="Sambhavam Banner mobile 4">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/home/main.jpeg') }}"
                     class="d-md-block d-none bannerwidth"
                     alt="Sambhavam Banner 5">
                <img src="{{ asset('images/home/main.jpeg') }}"
                     class="d-md-none d-block bannerwidth"
                     alt="Sambhavam Banner mobile 5">
            </div>
        </div>
    </div>

    <div class="swiper-pagination"></div>

    <!-- Arrows OUTSIDE banner -->
    <button type="button"
                class="hero-swiper-prev"
                aria-label="Previous Slide">
            <i class="fa fa-arrow-left"></i>
        </button>

        <button type="button"
                class="hero-swiper-next"
                aria-label="Next Slide">
            <i class="fa fa-arrow-right"></i>
        </button>
    </section>  
    <!-- ./ hero-banner-slider -->

    <!-- ============================================= -->
    <!-- SECTION: MEET OUR FOUNDER -->
    <!-- ============================================= -->
    <section class="founder-section pt-50 pb-100">
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- LEFT: Founder Image & Smooth Floating Elements -->
                <div class="col-lg-5">
                    <div class="founder-media wow fade-in-left" data-wow-delay="200ms">
                        <!-- Fluid Organic Aura -->
                        <div class="founder-fluid-shape"></div>
                        <div class="founder-orbit-ring"></div>

                        <!-- Main Circular Frame -->
                        <div class="founder-photo-frame">
                            <img src="{{ asset('images/about/_MG_1167 copy_.jpg') }}" alt="Dr. Madhukar Sanap - Founder & Managing Director">
                        </div>

                        <!-- Floating Accent Badge 1: Top-Right -->
                        <div class="founder-float-pill founder-float-pill-top">
                            <div class="pill-icon-box"><i class="fa fa-graduation-cap"></i></div>
                            <div class="pill-info">
                                <span class="pill-title">25+ Years</span>
                                <span class="pill-sub">Impact Leadership</span>
                            </div>
                        </div>

                        <!-- Floating Accent Badge 2: Bottom-Left -->
                        <div class="founder-float-pill founder-float-pill-bottom">
                            <div class="pill-icon-box"><i class="fa fa-shield"></i></div>
                            <div class="pill-info">
                                <span class="pill-title">Visionary</span>
                                <span class="pill-sub">Institution Builder</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Founder Content -->
                <div class="col-lg-7">
                    <div class="founder-content">
                        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                            <span class="heading-icon"><i class="fa fa-bolt"></i></span>Meet Our Founder
                        </h4>

                        <h2 class="founder-title wow fade-in-bottom" data-wow-delay="300ms">
                            When Knowledge Meets Opportunity,<br>
                            <span class="text-gradient">Transformation Becomes Possible</span>
                        </h2>

                        <p class="founder-dec wow fade-in-bottom" data-wow-delay="400ms">
                            SAMBHAVAM was founded under the vision of <strong>Dr. Madhukar Sanap</strong> and a multidisciplinary team of educators, social-development professionals, engineers, environmental experts and technology innovators who shared one belief — that every learner deserves the tools, mentorship and opportunity to turn potential into progress.
                        </p>

                        <div class="founder-quote wow fade-in-bottom" data-wow-delay="500ms">
                            <i class="fa fa-quote-left founder-quote-icon"></i>
                            <p>Our goal was never just to build an institute. It was to build a movement where every learner, regardless of background, gets a genuine shot at their potential.</p>
                            <span class="founder-quote-name"><strong>Dr. Madhukar Sanap</strong> <span class="founder-quote-role">&bull; Founder &amp; Managing Director</span></span>
                        </div>

                        <div class="founder-item-wrap wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="founder-item">
                                <div class="founder-item-icon"><i class="fa fa-check"></i></div>
                                <h4>Vision-Led</h4>
                            </div>
                            <div class="founder-item">
                                <div class="founder-item-icon"><i class="fa fa-check"></i></div>
                                <h4>People-Centred</h4>
                            </div>
                            <div class="founder-item founder-item-last">
                                <div class="founder-item-icon"><i class="fa fa-check"></i></div>
                                <h4>Impact-Driven</h4>
                            </div>
                        </div>

                        <div class="founder-btn-wrap wow fade-in-bottom" data-wow-delay="700ms">
                            <a href="{{ url('madhukar-sanap') }}" class="ed-primary-btn me-3">About Dr. Sanap</a>
                            <a href="{{ url('about-us') }}" class="ed-sec-btn">Learn Our Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="founder-curve-bottom">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 C300,110 900,110 1200,0 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- SECTION 2: BRAND PROMISE & FOUR PILLARS -->
    <!-- ============================================= -->
    <section class="brand-promise-section pt-60 pb-70">
        <div class="container text-center">
            <div class="section-heading mb-40" style="max-width: 820px; margin: 0 auto;">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Our Brand Promise</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="300ms">Learning That Moves You Forward</h2>
                <p class="brand-intro wow fade-in-bottom" data-wow-delay="400ms">At SAMBHAVAM, education goes beyond classrooms, examinations and certificates. We create transformative learning experiences that help individuals build strong academic foundations, prepare for competitive careers, develop future-ready skills, explore innovation and entrepreneurship, grow as confident leaders, and contribute meaningfully to society.</p>
                <div class="brand-motto-wrapper wow fade-in-bottom" data-wow-delay="450ms">
                    <span class="brand-motto-badge">
                        <i class="fa fa-arrow-circle-o-right"></i> From Learning to Leadership &bull; From Opportunity to Impact
                    </span>
                </div>
            </div>

            <div class="row gy-4 mt-2 justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-6 d-flex">
                    <div class="impact-card impact-card-learn w-100 wow fade-in-bottom" data-wow-delay="200ms">
                        <div class="impact-icon-box">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h3>Learn</h3>
                        <p>Academic excellence and competitive examination preparation.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 d-flex">
                    <div class="impact-card impact-card-innovate w-100 wow fade-in-bottom" data-wow-delay="300ms">
                        <div class="impact-icon-box">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <h3>Innovate</h3>
                        <p>Technology, future-ready skills and modern problem-solving.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 d-flex">
                    <div class="impact-card impact-card-lead w-100 wow fade-in-bottom" data-wow-delay="400ms">
                        <div class="impact-icon-box">
                            <i class="fa fa-compass"></i>
                        </div>
                        <h3>Lead</h3>
                        <p>Confidence, effective communication and public leadership.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 d-flex">
                    <div class="impact-card impact-card-impact w-100 wow fade-in-bottom" data-wow-delay="500ms">
                        <div class="impact-icon-box">
                            <i class="fa fa-globe"></i>
                        </div>
                        <h3>Impact</h3>
                        <p>Climate action, sustainable livelihoods and inclusive development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================= -->
    <!-- SECTION 5: PROGRAMME EXPLORER -->
    <!-- ============================================= -->
    <section class="feature-course feature-course-4 pt-80 pb-80 programme-bg-section" id="programmes">
        <div class="programme-bg-overlay"></div>
        <div class="container position-relative scc-wrap">
            <div class="section-heading text-center white-content mb-50">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>OUR ACADEMIC PATHWAYS</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="300ms">Explore Your Learning Path</h2>
                <p class="wow fade-in-bottom" data-wow-delay="400ms" style="max-width:720px;margin:0 auto;">From competitive examinations and school foundations to future skills and leadership, discover the pathway that fits your goals.</p>
            </div>

            @php
                $verticalDefaults = [
                    'civil' => [
                        'eyebrow' => 'CIVIL SERVICES',
                        'title' => 'UPSC & MPSC',
                        'desc' => 'Structured preparation for Civil Services with strong foundations, current affairs, Prelims, Mains and answer writing.',
                        'highlights' => ['UPSC & MPSC Foundation', 'Prelims + Mains Preparation', 'CSAT, Essay & Answer Writing'],
                        'banner' => 'scc-banner-blue',
                        'icon' => 'fa fa-university',
                    ],
                    'eng' => [
                        'eyebrow' => 'ENGINEERING ENTRANCE',
                        'title' => 'JEE Main & Advanced',
                        'desc' => 'Concept-driven preparation in Physics, Chemistry and Mathematics for engineering entrance examinations.',
                        'highlights' => ['JEE Main + Advanced', 'STEM Foundation', 'Engineering Olympiad Preparation'],
                        'banner' => 'scc-banner-teal',
                        'icon' => 'fa fa-microchip',
                    ],
                    'med' => [
                        'eyebrow' => 'MEDICAL ENTRANCE',
                        'title' => 'NEET & Medical Foundation',
                        'desc' => 'Focused preparation in Physics, Chemistry and Biology with a strong foundation for medical entrance pathways.',
                        'highlights' => ['NEET Preparation', 'Medical Foundation Classes', 'Health-Science Olympiads'],
                        'banner' => 'scc-banner-navy',
                        'icon' => 'fa fa-stethoscope',
                    ],
                    'school' => [
                        'eyebrow' => 'SCHOOL FOUNDATION',
                        'title' => 'Foundation & Tuition Support',
                        'desc' => 'Build strong concepts and academic confidence through school-focused foundation, board preparation and competitive support.',
                        'highlights' => ['Classes VI–X', 'SSC & CBSE Support', 'NMMS, Scholarships & Olympiads'],
                        'banner' => 'scc-banner-teal',
                        'icon' => 'fa fa-graduation-cap',
                    ],
                    'scholar' => [
                        'eyebrow' => 'SCHOLARSHIP & OLYMPIADS',
                        'title' => 'Scholarship & Talent Excellence',
                        'desc' => 'Build academic excellence through scholarship preparation, Olympiads and talent-development programmes.',
                        'highlights' => ['Scholarship Preparation', 'Olympiad Programmes', 'Talent Excellence — VI–X'],
                        'banner' => 'scc-banner-blue',
                        'icon' => 'fa fa-trophy',
                    ],
                    'leader' => [
                        'eyebrow' => 'LIFE SKILLS & LEADERSHIP',
                        'title' => 'Leadership & Resilience',
                        'desc' => 'Develop confidence, communication, critical thinking and resilience for academic, personal and future success.',
                        'highlights' => ['Communication & Public Speaking', 'Critical Thinking & Emotional Intelligence', 'Leadership & Digital Citizenship'],
                        'banner' => 'scc-banner-navy',
                        'icon' => 'fa fa-user-circle',
                    ],
                ];

                $fallbackKeys = ['civil', 'eng', 'med', 'school', 'scholar', 'leader'];
            @endphp

            <div class="row gy-4 justify-content-center">
                @foreach ($categories as $i => $category)
                    @php
                        $catSlugLower = strtolower($category->slug ?? '');
                        $catNameLower = strtolower($category->name ?? '');

                        if (str_contains($catSlugLower, 'civil') || str_contains($catNameLower, 'civil') || str_contains($catSlugLower, 'upsc') || str_contains($catNameLower, 'upsc')) {
                            $matchedKey = 'civil';
                        } elseif (str_contains($catSlugLower, 'eng') || str_contains($catNameLower, 'eng') || str_contains($catSlugLower, 'jee') || str_contains($catNameLower, 'jee')) {
                            $matchedKey = 'eng';
                        } elseif (str_contains($catSlugLower, 'med') || str_contains($catNameLower, 'med') || str_contains($catSlugLower, 'neet') || str_contains($catNameLower, 'neet')) {
                            $matchedKey = 'med';
                        } elseif (str_contains($catSlugLower, 'school') || str_contains($catNameLower, 'school') || str_contains($catSlugLower, 'tuition') || str_contains($catNameLower, 'tuition') || str_contains($catSlugLower, 'foundat') || str_contains($catNameLower, 'foundat')) {
                            $matchedKey = 'school';
                        } elseif (str_contains($catSlugLower, 'scholar') || str_contains($catNameLower, 'scholar') || str_contains($catSlugLower, 'olympiad') || str_contains($catNameLower, 'olympiad')) {
                            $matchedKey = 'scholar';
                        } elseif (str_contains($catSlugLower, 'lead') || str_contains($catNameLower, 'lead') || str_contains($catSlugLower, 'skill') || str_contains($catNameLower, 'skill') || str_contains($catSlugLower, 'future') || str_contains($catNameLower, 'future')) {
                            $matchedKey = 'leader';
                        } else {
                            $matchedKey = $fallbackKeys[$i % count($fallbackKeys)];
                        }

                        $vData = $verticalDefaults[$matchedKey];
                    @endphp

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 d-flex">
                        <div class="sambhavam-course-card w-100 wow fade-in-bottom" data-wow-delay="{{ 150 + ($i % 3) * 100 }}ms">
                            <!-- Card Header with Icon Badge & Eyebrow -->
                            <div class="scc-header {{ $vData['banner'] }}">
                                <div class="scc-icon-circle">
                                    <i class="{{ $vData['icon'] }}"></i>
                                </div>
                                <span class="scc-eyebrow">{{ $vData['eyebrow'] }}</span>
                                <h3 class="scc-header-title">{{ $vData['title'] }}</h3>
                                <div class="scc-header-line"></div>
                            </div>

                            <!-- Card Body with Meta Tags & Scrollable Checklist -->
                            <div class="scc-body">
                                <div class="scc-meta-bar">
                                    <span class="scc-meta-pill"><i class="fa fa-star text-gold"></i> Flagship Path</span>
                                    <span class="scc-meta-pill"><i class="fa fa-users"></i> Mentor-Led</span>
                                </div>

                                <div class="scc-scroll-container">
                                    <ul class="scc-checklist">
                                        @foreach ($vData['highlights'] as $highlight)
                                            <li>
                                                <i class="fa fa-check-circle scc-check-icon"></i>
                                                <span>{{ $highlight }}</span>
                                            </li>
                                        @endforeach

                                        @if($category->courses->count())
                                            @foreach ($category->courses as $course)
                                                <li>
                                                    <i class="fa fa-check-circle scc-check-icon"></i>
                                                    <span>{{ $course->title }}</span>
                                                </li>
                                            @endforeach
                                        @endif

                                        <li>
                                            <i class="fa fa-check-circle scc-check-icon"></i>
                                            <span>Subject notes &amp; comprehensive study material</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle scc-check-icon"></i>
                                            <span>Live interactive sessions &amp; recorded lectures</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle scc-check-icon"></i>
                                            <span>Regular mock tests &amp; doubt clearing</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Card Footer: Centered Pill Button with Arrow Icon -->
                                <div class="scc-footer text-center">
                                    <a href="{{ url('courses') }}?course={{ $category->courses->first()?->slug ?? $category->slug }}" class="scc-pill-btn">
                                        <span>Know More</span>
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ./ programme-explorer -->  

    <style>
    /* ======================================================== */
    /* ENHANCED PROGRAMME EXPLORER CARDS                        */
    /* ======================================================== */
    .programme-bg-overlay {
        position: absolute;
        inset: 0;
        z-index: 0;
    }
    .scc-wrap {
        position: relative;
        z-index: 1;
    }
    .sambhavam-course-card {
        background: #ffffff;
        border-radius: 18px;
        border: 1px solid rgba(226, 232, 240, 0.9);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 10px 30px rgba(3, 72, 97, 0.08);
        transition: all 0.35s cubic-bezier(0.2, 0.8, 0.2, 1);
        max-width: 375px;
        margin: 0 auto;
        position: relative;
    }
    .sambhavam-course-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 45px rgba(3, 72, 97, 0.18);
        border-color: rgba(222, 182, 94, 0.6);
    }
    .scc-header {
        padding: 24px 18px 18px;
        text-align: center;
        color: #ffffff;
        position: relative;
        overflow: hidden;
    }
    .scc-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.12) 0%, transparent 65%);
        pointer-events: none;
    }
    .scc-banner-blue {
        background: linear-gradient(135deg, #034861 0%, #0a5874 100%);
    }
    .scc-banner-teal {
        background: linear-gradient(135deg, #016d77 0%, #158b98 100%);
    }
    .scc-banner-navy {
        background: linear-gradient(135deg, #16243a 0%, #283e5e 100%);
    }
    .scc-icon-circle {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.16);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        border: 1.5px solid rgba(255, 255, 255, 0.35);
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: #deb65e;
        margin-bottom: 10px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease;
    }
    .sambhavam-course-card:hover .scc-icon-circle {
        transform: scale(1.1) rotate(6deg);
        background: rgba(255, 255, 255, 0.25);
    }
    .scc-eyebrow {
        display: block;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        color: #deb65e;
        margin-bottom: 4px;
    }
    .scc-header-title {
        font-size: 18px;
        font-weight: 700;
        color: #ffffff;
        margin: 0 0 10px;
        line-height: 1.25;
        letter-spacing: -0.2px;
    }
    .scc-header-line {
        width: 45px;
        height: 3px;
        background: linear-gradient(90deg, #deb65e, #f59e0b);
        border-radius: 3px;
        margin: 0 auto;
    }
    .scc-body {
        padding: 18px 16px 16px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex: 1;
        background: #f8fafc url('data:image/svg+xml;utf8,<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><g fill="%23016d77" fill-opacity="0.02" fill-rule="evenodd"><path d="M0 40L40 0H20L0 20M40 40V20L20 40"/></g></svg>');
    }
    .scc-meta-bar {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-bottom: 12px;
    }
    .scc-meta-pill {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 20px;
        padding: 3px 10px;
        font-size: 11px;
        font-weight: 600;
        color: #475569;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.03);
    }
    .scc-meta-pill i.text-gold {
        color: #d97706;
    }
    .scc-scroll-container {
        max-height: 160px;
        overflow-y: auto;
        padding-right: 6px;
        margin-bottom: 16px;
        scrollbar-width: thin;
        scrollbar-color: #deb65e #e2e8f0;
    }
    .scc-scroll-container::-webkit-scrollbar {
        width: 5px;
    }
    .scc-scroll-container::-webkit-scrollbar-track {
        background: #e2e8f0;
        border-radius: 6px;
    }
    .scc-scroll-container::-webkit-scrollbar-thumb {
        background: #deb65e;
        border-radius: 6px;
    }
    .scc-scroll-container::-webkit-scrollbar-thumb:hover {
        background: #c99a3e;
    }
    .scc-checklist {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .scc-checklist li {
        display: flex;
        align-items: flex-start;
        gap: 9px;
        font-size: 13px;
        font-weight: 600;
        color: #1e293b;
        line-height: 1.45;
        margin-bottom: 9px;
        padding: 4px 6px;
        border-radius: 6px;
        transition: background-color 0.2s ease;
    }
    .scc-checklist li:hover {
        background-color: rgba(1, 109, 119, 0.05);
    }
    .scc-checklist li:last-child {
        margin-bottom: 0;
    }
    .scc-check-icon {
        color: #016d77;
        font-size: 14px;
        margin-top: 2px;
        flex-shrink: 0;
    }
    .scc-footer {
        padding-top: 6px;
        margin-top: auto;
    }
    .scc-pill-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 9px 24px;
        background: linear-gradient(135deg, #034861 0%, #016d77 100%);
        color: #ffffff !important;
        border-radius: 50px;
        font-size: 13.5px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 4px 14px rgba(1, 109, 119, 0.25);
        transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
        border: 1px solid rgba(255, 255, 255, 0.15);
    }
    .scc-pill-btn i {
        font-size: 12px;
        transition: transform 0.25s ease;
    }
    .scc-pill-btn:hover {
        background: linear-gradient(135deg, #deb65e 0%, #c99a3e 100%);
        color: #043148 !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(222, 182, 94, 0.45);
        border-color: #deb65e;
    }
    .scc-pill-btn:hover i {
        transform: translateX(4px);
    }
    @media (max-width: 767px) {
        .scc-header { padding: 18px 14px 14px; }
        .scc-body { padding: 14px 12px 14px; }
        .scc-scroll-container { max-height: 145px; }
        .scc-header-title { font-size: 16.5px; }
    }
    </style>
    <!-- ============================================= -->
    <!-- STREAM SELECTOR -->
    <!-- ============================================= -->
    <!-- <section class="stream-selector-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-md-6 my-auto mx-auto">
                    <div class="stream-selector-card">
                    <h4 class="stream-selector-label">Select stream to view courses</h4>

                    <div class="stream-pill-wrap">
                        @foreach ($categories as $i => $category)
                            @if($category->courses->count())
                                <button type="button"
                                        class="stream-pill {{ $i === 0 ? 'active' : '' }}"
                                        data-slug="{{ $category->slug }}">
                                    {{ $category->name }}
                                </button>
                            @endif
                        @endforeach
                    </div>

                    <div class="stream-selector-divider"></div>

                    <a href="{{ url('courses') }}?category={{ $categories->first()?->slug }}"
                    class="stream-explore-btn"
                    id="streamExploreBtn">
                        Explore Courses <i class="fa fa-arrow-right"></i>
                    </a>

                    </div>
                </div>

                <div class="col-12 col-md-6 mx-auto">
                    <img class="crs mx-auto" src="{{ asset('images/courses/course.jpg') }}" alt="">
                </div>
            </div>
        </div>
       
</section> -->
    <!-- ./ stream-selector-section -->

    <!-- <section class="course-carousel-area course-carousel-area-2 pt-100 pb-120 overflow-hidden ">
    <div class="container">
        <div class="course-carousel-top heading-space">
            <div class="section-heading mb-0">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-solid fa-bolt"></i></span>Top Class Programmes</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Courses Recommended for You</h2>
            </div>
            <div class="course-swiper-arrows">
                <button type="button" class="course-swiper-prev" aria-label="Previous">
                    <i class="fa fa-arrow-left"></i>
                </button>

                <button type="button" class="course-swiper-next" aria-label="Next">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
        <div class="course-carousel-3 swiper">
            <div class="swiper-wrapper">

                @foreach ($categories as $category)
                    @foreach ($category->courses as $course)
                        <div class="swiper-slide">
                            <div class="course-item">
                                <div class="course-thumb-wrap">
                                    <div class="course-thumb">
                                        <img src="{{ $course->image ? asset('storage/' . $course->image) : asset('images/courses/course.jpg') }}" alt="{{ $course->title }}">
                                    </div>
                                </div>
                                <div class="course-content">
                                    <span class="offer">{{ $category->name }}</span>
                                    <h3 class="title"><a href="{{ url('course-details') }}?course={{ $course->slug }}">{{ $course->title }}</a></h3>
                                    <ul class="course-list">
                                        <li><i class="fa fa-map-marker"></i>All Centres</li>
                                        <li><i class="fa fa-user"></i>Mentor-Led</li>
                                    </ul>
                                </div>
                                <div class="bottom-content">
                                    <a href="{{ url('course-details') }}?course={{ $course->slug }}" class="course-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>
</section> -->
<!-- ./ course-carousel-area-2 -->

    <!-- ============================================= -->
    <!-- SECTION: STUDENT SUCCESS STORIES -->
    <!-- ============================================= -->
    <section class="success-stories-section pt-100 pb-100" id="success-stories">
        <div class="container">
            <div class="section-heading text-center mb-50">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Success Stories</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="300ms">Real Students. Real Results.</h2>
                <p class="wow fade-in-bottom" data-wow-delay="400ms" style="max-width:700px;margin:0 auto;">
                    Every rank, every offer letter and every milestone here began with a SAMBHAVAM
                    student who decided to try. These are their stories, in their own words.
                </p>
            </div>

            <div class="success-story-carousel-wrap position-relative">
                <div class="success-story-carousel swiper">
                    <div class="swiper-wrapper">

                        @php
                            $stories = [
                                [
                                    'img' => '1.avif',
                                    'name' => 'Aditya Deshmukh',
                                    'achievement' => 'AIR 142 &middot; UPSC CSE 2024',
                                    'course' => 'Civil Services',
                                    'quote' => 'Daily answer-writing practice and personalized mentorship gave me the strategy and consistency required to clear UPSC in my second attempt.',
                                ],
                                [
                                    'img' => '22.jpg',
                                    'name' => 'Ananya Sharma',
                                    'achievement' => 'AIR 864 &middot; JEE Advanced',
                                    'course' => 'Engineering',
                                    'quote' => 'The concept-first approach and high-yield problem discussions helped me master Physics and Mathematics without exam-day panic.',
                                ],
                                [
                                    'img' => '33.jpg',
                                    'name' => 'Rohan Kulkarni',
                                    'achievement' => '685/720 &middot; NEET-UG (GMC Mumbai)',
                                    'course' => 'Medical',
                                    'quote' => 'Regular chapter diagnostics and error analysis helped me eliminate silly mistakes and build speed across all three NEET subjects.',
                                ],
                                [
                                    'img' => '44.jpg',
                                    'name' => 'Tanvi Patil',
                                    'achievement' => 'State Rank 12 &middot; NMMS Scholar',
                                    'course' => 'School Foundation',
                                    'quote' => 'Sambhavam’s foundation classes built my conceptual understanding early, giving me an effortless transition from Class 8 to competitive exams.',
                                ],
                                [
                                    'img' => '3.jpg',
                                    'name' => 'Siddharth Nair',
                                    'achievement' => 'Built &amp; Deployed Agro-AI Tool',
                                    'course' => 'Future Skills & AI',
                                    'quote' => 'Mentors walked me through Python, computer vision, and deployment step-by-step. Building a real tool gave me immense practical confidence.',
                                ],
                                [
                                    'img' => '2.jpg',
                                    'name' => 'Pooja Gaikwad',
                                    'achievement' => 'Youth Parliament Finalist',
                                    'course' => 'Leadership & Life Skills',
                                    'quote' => 'The communications and leadership lab transformed how I present ideas. I learned to articulate public policy arguments with poise and clarity.',
                                ],
                            ];
                        @endphp

                        @foreach ($stories as $story)
                            <div class="swiper-slide">
                                <div class="success-story-card wow fade-in-bottom" data-wow-delay="200ms">
                                    <div class="success-story-photo">
                                        <img src="{{ asset('images/success-stories/' . $story['img']) }}" alt="{{ $story['name'] }} - {{ $story['course'] }}">
                                        <span class="success-story-badge">{{ $story['course'] }}</span>
                                    </div>
                                    <div class="success-story-body">
                                        <div class="success-story-quote-box">
                                            <i class="fa fa-quote-left success-story-quote-icon"></i>
                                            <p class="success-story-quote">{{ $story['quote'] }}</p>
                                        </div>
                                        <div class="success-story-footer">
                                            <h4 class="success-story-name">{{ $story['name'] }}</h4>
                                            <span class="success-story-achievement"><i class="fa fa-check-circle me-1"></i> {!! $story['achievement'] !!}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="success-story-pagination"></div>

                <button type="button" class="success-story-prev" aria-label="Previous Story">
                    <i class="fa fa-arrow-left"></i>
                </button>
                <button type="button" class="success-story-next" aria-label="Next Story">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>

            <div class="text-center mt-40">
                <a href="{{ url('courses') }}" class="ed-primary-btn">Explore All Programmes</a>
            </div>
        </div>
    </section>
    <!-- ./ success-stories-section -->

    <!-- ============================================= -->
    <!-- SECTION 4: SAMBHAVAM ACADEMY -->
    <!-- ============================================= -->
    <section class="about-section-10 pt-60 pb-120" id="academy">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="about-img-wrap-10 mx-auto">
                       <video class="mx-auto vsize" autoplay muted loop playsinline>
                            <source src="{{ asset('videos/sambhavam-WEBSITE.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="about-content-8 about-content-10">
                        <div class="section-heading mb-30">
                            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Sambhavam Academy</h4>
                            <h2 class="section-title wow fade-in-bottom " data-wow-delay="400ms">Learn Smarter. Think Bigger. Achieve More.</h2>
                        </div>
                        <p>SAMBHAVAM Academy is the education, skills and future-readiness platform of SAMBHAVAM Foundation. It brings together academic excellence, competitive examination preparation, technology-enabled learning, future skills, mentoring, innovation and leadership development within one integrated ecosystem.</p>
                        <p>Our goal is not simply to help students pass examinations. We prepare them to think independently, compete confidently and lead responsibly.</p>
                        <div class="about-btn mt-30">
                            <a href="{{ url('courses') }}" class="ed-primary-btn">Discover Our Programmes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ academy-section -->



    <!-- ============================================= -->
    <!-- SECTION: WHY SAMBHAVAM ACADEMY -->
    <!-- ============================================= -->
    <section class="why-academy-section pt-90 pb-110" id="why-sambhavam">
        <!-- Ambient decorative background glow -->
        <div class="why-ambient-glow why-glow-1"></div>
        <div class="why-ambient-glow why-glow-2"></div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="section-heading text-center mb-55">
                <div class="d-inline-flex align-items-center gap-2 why-section-badge mb-3 wow fade-in-bottom" data-wow-delay="150ms">
                    <span class="why-badge-pulse"><i class="fa fa-bolt"></i></span>
                    <span class="why-badge-text">The Sambhavam Advantage</span>
                </div>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="250ms">
                    Empowering Minds. <span class="why-title-gradient">Shaping Leaders.</span>
                </h2>
                <p class="wow fade-in-bottom" data-wow-delay="350ms" style="max-width: 740px; margin: 0 auto; color: #526071; font-size: 16px; line-height: 1.7;">
                    Our multidisciplinary approach combines conceptual excellence, personalized mentorship, future technologies and leadership building to nurture well-rounded achievers.
                </p>
            </div>

            @php
                $whyCards = [
                    [
                        'num' => '01',
                        'icon' => 'fa fa-user-circle-o',
                        'tag' => 'Adaptive Pacing',
                        'theme' => 'card-theme-teal',
                        'title' => 'Personalized Learning',
                        'desc' => 'Tailored learning pathways mapped directly to individual strengths, target milestones, and personal pace.',
                    ],
                    [
                        'num' => '02',
                        'icon' => 'fa fa-graduation-cap',
                        'tag' => '1-on-1 Guidance',
                        'theme' => 'card-theme-navy',
                        'title' => 'Expert Mentorship',
                        'desc' => 'Direct guidance and strategic counsel from experienced educators, civil servants, and domain leaders.',
                    ],
                    [
                        'num' => '03',
                        'icon' => 'fa fa-laptop',
                        'tag' => 'Smart Classrooms',
                        'theme' => 'card-theme-cyan',
                        'title' => 'Technology-Enabled',
                        'desc' => 'State-of-the-art digital infrastructure, interactive virtual studios, and seamless hybrid classroom access.',
                    ],
                    [
                        'num' => '04',
                        'icon' => 'fa fa-magic',
                        'tag' => 'Predictive Analytics',
                        'theme' => 'card-theme-gold',
                        'title' => 'AI-Enabled Insights',
                        'desc' => 'Adaptive assessment intelligence, weakness diagnostics, and personalized predictive performance insights.',
                    ],
                    [
                        'num' => '05',
                        'icon' => 'fa fa-lightbulb-o',
                        'tag' => 'First-Principles Core',
                        'theme' => 'card-theme-amber',
                        'title' => 'Conceptual Excellence',
                        'desc' => 'Deep first-principles mastery, structured critical reasoning, and practical analytical problem-solving.',
                    ],
                    [
                        'num' => '06',
                        'icon' => 'fa fa-briefcase',
                        'tag' => 'Competitive Edge',
                        'theme' => 'card-theme-blue',
                        'title' => 'Career Preparation',
                        'desc' => 'Rigorous curriculum alignment for competitive examinations, top-tier admissions, and high-impact careers.',
                    ],
                    [
                        'num' => '07',
                        'icon' => 'fa fa-shield',
                        'tag' => 'Character & Impact',
                        'theme' => 'card-theme-emerald',
                        'title' => 'Leadership & Ethics',
                        'desc' => 'Confidence building, executive public speaking, critical reasoning, and responsible ethical decision-making.',
                    ],
                    [
                        'num' => '08',
                        'icon' => 'fa fa-line-chart',
                        'tag' => 'Milestone Tracking',
                        'theme' => 'card-theme-indigo',
                        'title' => 'Continuous Tracking',
                        'desc' => 'Real-time performance dashboards, regular milestone evaluations, and proactive parent engagement loops.',
                    ],
                ];
            @endphp

            <div class="row g-4 justify-content-center">
                @foreach ($whyCards as $idx => $card)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 d-flex">
                        <div class="why-unique-card {{ $card['theme'] }} w-100 wow fade-in-bottom" data-wow-delay="{{ 100 + ($idx % 4) * 80 }}ms">
                            <!-- Watermark Icon in background -->
                            <div class="why-card-watermark">
                                <i class="{{ $card['icon'] }}"></i>
                            </div>

                            <!-- Card Top Bar: Icon pod + Step indicator -->
                            <div class="why-card-topbar">
                                <div class="why-icon-pod">
                                    <div class="why-icon-halo"></div>
                                    <i class="{{ $card['icon'] }}"></i>
                                </div>
                                <div class="why-pill-step">
                                    <span class="why-step-dot"></span>
                                    <span>Pillar {{ $card['num'] }}</span>
                                </div>
                            </div>

                            <!-- Card Middle Content -->
                            <div class="why-card-content">
                                <h4 class="why-card-heading">{{ $card['title'] }}</h4>
                                <p class="why-card-text">{{ $card['desc'] }}</p>
                            </div>

                            <!-- Card Footer: Tag & Accent bar -->
                            <div class="why-card-bottom">
                                <div class="why-card-tag-pill">
                                    <i class="fa fa-check-circle me-1"></i> {{ $card['tag'] }}
                                </div>
                                <div class="why-accent-line"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
    /* ======================================================== */
    /* BESPOKE THEMED DESIGN FOR WHY SAMBHAVAM ACADEMY SECTION */
    /* ======================================================== */
    .why-academy-section {
        background: linear-gradient(180deg, #f8fafc 0%, #edf4f8 50%, #f8fafc 100%);
        position: relative;
        overflow: hidden;
    }

    /* Ambient background lighting */
    .why-ambient-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(100px);
        pointer-events: none;
        z-index: 1;
        opacity: 0.6;
    }
    .why-glow-1 {
        top: 5%;
        left: -10%;
        width: 480px;
        height: 480px;
        background: radial-gradient(circle, rgba(1, 109, 119, 0.12) 0%, transparent 70%);
    }
    .why-glow-2 {
        bottom: 10%;
        right: -8%;
        width: 520px;
        height: 520px;
        background: radial-gradient(circle, rgba(222, 182, 94, 0.15) 0%, transparent 70%);
    }

    /* Section Header Custom Elements */
    .why-section-badge {
        background: #ffffff;
        border: 1px solid rgba(1, 109, 119, 0.18);
        border-radius: 30px;
        padding: 6px 18px 6px 8px;
        box-shadow: 0 4px 14px rgba(3, 72, 97, 0.06);
    }
    .why-badge-pulse {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background: linear-gradient(135deg, #016d77 0%, #deb65e 100%);
        color: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        box-shadow: 0 2px 8px rgba(1, 109, 119, 0.35);
    }
    .why-badge-text {
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.4px;
        color: #016d77;
        text-transform: uppercase;
    }
    .why-title-gradient {
        background: linear-gradient(135deg, #016d77 0%, #034861 60%, #deb65e 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Unique Pillar Cards */
    .why-unique-card {
        background: #ffffff;
        border: 1px solid #e3ebf2;
        border-radius: 20px;
        padding: 28px 24px 22px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 26px rgba(3, 72, 97, 0.04), 0 1px 3px rgba(0, 0, 0, 0.02);
        transition: all 0.38s cubic-bezier(0.22, 1, 0.36, 1);
        z-index: 2;
    }
    .why-unique-card:hover {
        transform: translateY(-8px);
        background: #ffffff;
        border-color: rgba(1, 109, 119, 0.35);
        box-shadow: 0 20px 42px -10px rgba(3, 72, 97, 0.14), 0 0 0 1px rgba(1, 109, 119, 0.1);
    }

    /* Ambient Watermark in card */
    .why-card-watermark {
        position: absolute;
        right: -10px;
        bottom: -15px;
        font-size: 88px;
        color: #034861;
        opacity: 0.035;
        transition: all 0.4s ease;
        pointer-events: none;
        z-index: 0;
    }
    .why-unique-card:hover .why-card-watermark {
        opacity: 0.08;
        transform: scale(1.15) rotate(-6deg);
        color: #016d77;
    }

    /* Card Top Bar */
    .why-card-topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 22px;
        position: relative;
        z-index: 2;
    }

    /* 3D Icon Pod */
    .why-icon-pod {
        width: 52px;
        height: 52px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
        position: relative;
        transition: all 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
        box-shadow: 0 8px 18px rgba(3, 72, 97, 0.12);
    }
    .why-icon-halo {
        position: absolute;
        inset: -3px;
        border-radius: 18px;
        opacity: 0;
        transition: opacity 0.35s ease;
        z-index: -1;
    }
    .why-unique-card:hover .why-icon-pod {
        transform: scale(1.1) translateY(-2px);
    }
    .why-unique-card:hover .why-icon-halo {
        opacity: 0.6;
    }

    /* Step Badge */
    .why-pill-step {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #f1f5f9;
        border: 1px solid #e2e8f0;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 11.5px;
        font-weight: 700;
        color: #64748b;
        letter-spacing: 0.3px;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }
    .why-step-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #94a3b8;
        transition: all 0.3s ease;
    }
    .why-unique-card:hover .why-pill-step {
        background: rgba(1, 109, 119, 0.08);
        border-color: rgba(1, 109, 119, 0.25);
        color: #016d77;
    }
    .why-unique-card:hover .why-step-dot {
        background: #deb65e;
        box-shadow: 0 0 8px #deb65e;
    }

    /* Card Content */
    .why-card-content {
        position: relative;
        z-index: 2;
        flex: 1;
    }
    .why-card-heading {
        font-size: 18px;
        font-weight: 700;
        color: #16243A;
        margin-bottom: 10px;
        line-height: 1.35;
        transition: color 0.3s ease;
    }
    .why-unique-card:hover .why-card-heading {
        color: #016d77;
    }
    .why-card-text {
        font-size: 13.5px;
        color: #596778;
        line-height: 1.65;
        margin-bottom: 20px;
    }

    /* Card Bottom */
    .why-card-bottom {
        position: relative;
        z-index: 2;
        padding-top: 14px;
        border-top: 1px solid #edf2f7;
    }
    .why-card-tag-pill {
        display: inline-flex;
        align-items: center;
        font-size: 11.5px;
        font-weight: 600;
        padding: 5px 12px;
        border-radius: 20px;
        letter-spacing: 0.2px;
        transition: all 0.3s ease;
    }
    .why-accent-line {
        position: absolute;
        bottom: -22px;
        left: -24px;
        right: -24px;
        height: 3.5px;
        opacity: 0;
        transform: scaleX(0.2);
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .why-unique-card:hover .why-accent-line {
        opacity: 1;
        transform: scaleX(1);
    }

    /* ======================================================== */
    /* THEME VARIATIONS FOR INDIVIDUAL PILLARS (Brand Palette) */
    /* ======================================================== */
    /* Teal Theme */
    .card-theme-teal .why-icon-pod {
        background: linear-gradient(135deg, #016d77 0%, #034861 100%);
        color: #ffffff;
    }
    .card-theme-teal .why-icon-halo {
        background: radial-gradient(circle, rgba(1, 109, 119, 0.4) 0%, transparent 70%);
    }
    .card-theme-teal .why-card-tag-pill {
        background: rgba(1, 109, 119, 0.08);
        color: #016d77;
        border: 1px solid rgba(1, 109, 119, 0.15);
    }
    .card-theme-teal:hover .why-card-tag-pill {
        background: #016d77;
        color: #ffffff;
        border-color: #016d77;
    }
    .card-theme-teal .why-accent-line {
        background: linear-gradient(90deg, #016d77 0%, #83c5be 100%);
    }

    /* Navy Theme */
    .card-theme-navy .why-icon-pod {
        background: linear-gradient(135deg, #034861 0%, #16243a 100%);
        color: #deb65e;
    }
    .card-theme-navy .why-icon-halo {
        background: radial-gradient(circle, rgba(3, 72, 97, 0.4) 0%, transparent 70%);
    }
    .card-theme-navy .why-card-tag-pill {
        background: rgba(3, 72, 97, 0.08);
        color: #034861;
        border: 1px solid rgba(3, 72, 97, 0.15);
    }
    .card-theme-navy:hover .why-card-tag-pill {
        background: #034861;
        color: #ffffff;
        border-color: #034861;
    }
    .card-theme-navy .why-accent-line {
        background: linear-gradient(90deg, #034861 0%, #deb65e 100%);
    }

    /* Cyan Theme */
    .card-theme-cyan .why-icon-pod {
        background: linear-gradient(135deg, #028090 0%, #00a896 100%);
        color: #ffffff;
    }
    .card-theme-cyan .why-icon-halo {
        background: radial-gradient(circle, rgba(2, 128, 144, 0.4) 0%, transparent 70%);
    }
    .card-theme-cyan .why-card-tag-pill {
        background: rgba(2, 128, 144, 0.08);
        color: #028090;
        border: 1px solid rgba(2, 128, 144, 0.15);
    }
    .card-theme-cyan:hover .why-card-tag-pill {
        background: #028090;
        color: #ffffff;
        border-color: #028090;
    }
    .card-theme-cyan .why-accent-line {
        background: linear-gradient(90deg, #028090 0%, #02c39a 100%);
    }

    /* Gold Theme */
    .card-theme-gold .why-icon-pod {
        background: linear-gradient(135deg, #c99b38 0%, #deb65e 100%);
        color: #ffffff;
    }
    .card-theme-gold .why-icon-halo {
        background: radial-gradient(circle, rgba(222, 182, 94, 0.5) 0%, transparent 70%);
    }
    .card-theme-gold .why-card-tag-pill {
        background: rgba(222, 182, 94, 0.14);
        color: #996e11;
        border: 1px solid rgba(222, 182, 94, 0.3);
    }
    .card-theme-gold:hover .why-card-tag-pill {
        background: #c99b38;
        color: #ffffff;
        border-color: #c99b38;
    }
    .card-theme-gold .why-accent-line {
        background: linear-gradient(90deg, #c99b38 0%, #f4d06f 100%);
    }

    /* Amber Theme */
    .card-theme-amber .why-icon-pod {
        background: linear-gradient(135deg, #d97706 0%, #f59e0b 100%);
        color: #ffffff;
    }
    .card-theme-amber .why-icon-halo {
        background: radial-gradient(circle, rgba(217, 119, 6, 0.4) 0%, transparent 70%);
    }
    .card-theme-amber .why-card-tag-pill {
        background: rgba(217, 119, 6, 0.09);
        color: #b45309;
        border: 1px solid rgba(217, 119, 6, 0.2);
    }
    .card-theme-amber:hover .why-card-tag-pill {
        background: #d97706;
        color: #ffffff;
        border-color: #d97706;
    }
    .card-theme-amber .why-accent-line {
        background: linear-gradient(90deg, #d97706 0%, #fbbf24 100%);
    }

    /* Blue Theme */
    .card-theme-blue .why-icon-pod {
        background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
        color: #ffffff;
    }
    .card-theme-blue .why-icon-halo {
        background: radial-gradient(circle, rgba(29, 78, 216, 0.4) 0%, transparent 70%);
    }
    .card-theme-blue .why-card-tag-pill {
        background: rgba(29, 78, 216, 0.08);
        color: #1d4ed8;
        border: 1px solid rgba(29, 78, 216, 0.15);
    }
    .card-theme-blue:hover .why-card-tag-pill {
        background: #1d4ed8;
        color: #ffffff;
        border-color: #1d4ed8;
    }
    .card-theme-blue .why-accent-line {
        background: linear-gradient(90deg, #1d4ed8 0%, #60a5fa 100%);
    }

    /* Emerald Theme */
    .card-theme-emerald .why-icon-pod {
        background: linear-gradient(135deg, #0f766e 0%, #14b8a6 100%);
        color: #ffffff;
    }
    .card-theme-emerald .why-icon-halo {
        background: radial-gradient(circle, rgba(15, 118, 110, 0.4) 0%, transparent 70%);
    }
    .card-theme-emerald .why-card-tag-pill {
        background: rgba(15, 118, 110, 0.08);
        color: #0f766e;
        border: 1px solid rgba(15, 118, 110, 0.15);
    }
    .card-theme-emerald:hover .why-card-tag-pill {
        background: #0f766e;
        color: #ffffff;
        border-color: #0f766e;
    }
    .card-theme-emerald .why-accent-line {
        background: linear-gradient(90deg, #0f766e 0%, #2dd4bf 100%);
    }

    /* Indigo Theme */
    .card-theme-indigo .why-icon-pod {
        background: linear-gradient(135deg, #4338ca 0%, #6366f1 100%);
        color: #ffffff;
    }
    .card-theme-indigo .why-icon-halo {
        background: radial-gradient(circle, rgba(67, 56, 202, 0.4) 0%, transparent 70%);
    }
    .card-theme-indigo .why-card-tag-pill {
        background: rgba(67, 56, 202, 0.08);
        color: #4338ca;
        border: 1px solid rgba(67, 56, 202, 0.15);
    }
    .card-theme-indigo:hover .why-card-tag-pill {
        background: #4338ca;
        color: #ffffff;
        border-color: #4338ca;
    }
    .card-theme-indigo .why-accent-line {
        background: linear-gradient(90deg, #4338ca 0%, #818cf8 100%);
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .why-unique-card {
            padding: 24px 20px 18px;
        }
        .why-card-heading {
            font-size: 17px;
        }
        .why-card-text {
            font-size: 13px;
        }
    }
    @media (max-width: 575px) {
        .why-unique-card {
            padding: 22px 18px 16px;
        }
    }
    </style>

    




    <!-- ============================================= -->
    <!-- COUNSELLING POPUP -->
    <!-- ============================================= -->

    <div class="schp-counselling-overlay" id="counsellingModal">
        <div class="schp-counselling-modal">

            <button type="button"
                    class="schp-counselling-close"
                    id="closeCounsellingModal"
                    aria-label="Close">
                &times;
            </button>

            <div class="schp-counselling-content">

                <div class="schp-counselling-icon">
                    <i class="fa fa-graduation-cap"></i>
                </div>

                <span class="schp-counselling-label">
                    SAMBHAVAM ACADEMY
                </span>

                <h3>Not Sure Which Path Is Right for You?</h3>

                <p>
                    Speak with our academic counsellors and get guidance
                    based on your goals, interests and career aspirations.
                </p>

                <form class="schp-counselling-form" id="counsellingForm">

                    <div class="schp-form-group">
                        <input type="text"
                            id="counsellingName"
                            name="name"
                            placeholder="Your Name"
                            required>
                    </div>

                    <div class="schp-form-group">
                        <input type="tel"
                            id="counsellingPhone"
                            name="phone"
                            placeholder="Mobile Number"
                            required>
                    </div>

                    <div class="schp-form-group">
                        <select id="counsellingInterest"
                                name="interest"
                                required>
                            <option value="">Select Your Interest</option>
                            <option value="UPSC / MPSC">UPSC / MPSC</option>
                            <option value="JEE / Engineering">JEE / Engineering</option>
                            <option value="NEET / Medical">NEET / Medical</option>
                            <option value="School Foundation">School Foundation</option>
                            <option value="Future Skills & AI">Future Skills & AI</option>
                            <option value="Leadership & Life Skills">Leadership & Life Skills</option>
                        </select>
                    </div>

                    <button type="submit" class="schp-counselling-btn">
                        Book Free Counselling
                        <i class="fa fa-arrow-right"></i>
                    </button>

                </form>

                <span class="schp-counselling-note">
                    Our academic team will get in touch with you.
                </span>

            </div>
        </div>
    </div>

    @include('partials.impact-stats')
    @include('partials.testimonial-wall')

    @include('partials.certifications')

@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.hero-banner-swiper', {
            loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false },
            speed: 800,
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: {
                nextEl: '.hero-swiper-next',
                prevEl: '.hero-swiper-prev'
            },
        });

        new Swiper('.course-carousel-3', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 24,

            navigation: {
                nextEl: '.course-swiper-next',
                prevEl: '.course-swiper-prev'
            },

            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3
                }
            }
        });

        // Student Success Stories carousel
        new Swiper('.success-story-carousel', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 24,
            autoplay: { delay: 4500, disableOnInteraction: false },

            pagination: {
                el: '.success-story-pagination',
                clickable: true
            },

            navigation: {
                nextEl: '.success-story-next',
                prevEl: '.success-story-prev'
            },

            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 4
                }
            }
        });
    });

        document.addEventListener('DOMContentLoaded', function () {
            const pills = document.querySelectorAll('.stream-pill');
            const exploreBtn = document.getElementById('streamExploreBtn');

            // mark button ready since a default pill is pre-selected
            exploreBtn.classList.add('is-ready');

            pills.forEach(pill => {
                pill.addEventListener('click', function () {
                    pills.forEach(p => p.classList.remove('active'));
                    this.classList.add('active');

                    const slug = this.getAttribute('data-slug');
                    exploreBtn.href = "{{ url('courses') }}?category=" + slug;
                    exploreBtn.classList.add('is-ready');
                });
            });
        });
</script>
@endpush