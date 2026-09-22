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
                <img src="{{ asset('images/home/sambhavam.jpeg') }}"
                     class="d-md-block d-none bannerwidth"
                     alt="Sambhavam Banner 5">
                <img src="{{ asset('images/home/sambhavam.jpeg') }}"
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
                            <img src="{{ asset('images/about/write.png') }}" alt="Dr. Madhukar Sanap - Founder & Managing Director">
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
                            <!-- Card Header (Solid Theme Block) -->
                            <div class="scc-header {{ $vData['banner'] }}">
                                <h3 class="scc-header-title">{{ $vData['title'] }}</h3>
                            </div>

                            <!-- Card Body with Scrollable Checklist -->
                            <div class="scc-body">
                                <div class="scc-scroll-container">
                                    <ul class="scc-checklist">
                                        @foreach ($vData['highlights'] as $highlight)
                                            <li>
                                                <i class="fa fa-check-square scc-check-icon"></i>
                                                <span>{{ $highlight }}</span>
                                            </li>
                                        @endforeach

                                        @if($category->courses->count())
                                            @foreach ($category->courses as $course)
                                                <li>
                                                    <i class="fa fa-check-square scc-check-icon"></i>
                                                    <span>{{ $course->title }}</span>
                                                </li>
                                            @endforeach
                                        @endif

                                        <li>
                                            <i class="fa fa-check-square scc-check-icon"></i>
                                            <span>Subject notes &amp; comprehensive study material</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check-square scc-check-icon"></i>
                                            <span>Live interactive sessions &amp; recorded lectures</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-check-square scc-check-icon"></i>
                                            <span>Regular mock tests &amp; doubt clearing</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Card Footer: Centered Pill Button -->
                                <div class="scc-footer text-center">
                                    <a href="{{ url('courses') }}?course={{ $category->courses->first()?->slug ?? $category->slug }}" class="scc-pill-btn">
                                        Know More
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
    /* Scoped Refinements for Programme Explorer - Compact Scrollable Cards */
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
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 6px 20px rgba(2, 20, 40, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        max-width: 360px;
        margin: 0 auto;
    }
    .sambhavam-course-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 14px 30px rgba(2, 20, 40, 0.16);
        border-color: rgba(1, 109, 119, 0.35);
    }
    .scc-header {
        padding: 38px 14px;
        text-align: center;
        background: #3f7282;
        color: #ffffff;
    }
    .scc-banner-blue {
        background: #365b6d;
    }
    .scc-banner-teal {
        background: #3f7282;
    }
    .scc-banner-navy {
        background: #2b4c5c;
    }
    .scc-header-title {
        font-size: 16.5px;
        font-weight: 700;
        color: #ffffff;
        margin: 0;
        line-height: 1.3;
        letter-spacing: 0.2px;
    }
    .scc-body {
        padding: 18px 14px 16px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        flex: 1;
        background: #f4f8fa url('data:image/svg+xml;utf8,<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><g fill="%23016d77" fill-opacity="0.03" fill-rule="evenodd"><path d="M0 40L40 0H20L0 20M40 40V20L20 40"/></g></svg>');
    }
    .scc-scroll-container {
        max-height: 155px;
        overflow-y: auto;
        padding-right: 8px;
        margin-bottom: 16px;
        scrollbar-width: thin;
        scrollbar-color: #deb65e #e2e8f0;
    }
    .scc-scroll-container::-webkit-scrollbar {
        width: 6px;
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
        gap: 10px;
        font-size: 13px;
        font-weight: 600;
        color: #1e293b;
        line-height: 1.45;
        margin-bottom: 10px;
    }
    .scc-checklist li:last-child {
        margin-bottom: 0;
    }
    .scc-check-icon {
        color: #475569;
        font-size: 15px;
        margin-top: 2px;
        flex-shrink: 0;
    }
    .scc-footer {
        padding-top: 4px;
        margin-top: auto;
    }
    .scc-pill-btn {
        display: inline-block;
        padding: 8px 28px;
        background: #3f7282;
        color: #ffffff !important;
        border-radius: 50px;
        font-size: 13.5px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(63, 114, 130, 0.2);
        transition: all 0.25s ease;
    }
    .scc-pill-btn:hover {
        background: #deb65e;
        color: #ffffff !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(222, 182, 94, 0.35);
    }
    @media (max-width: 767px) {
        .scc-header { padding: 14px; }
        .scc-body { padding: 16px 12px 14px; }
        .scc-scroll-container { max-height: 140px; }
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
    <section class="why-academy-section pt-80 pb-110" id="why-sambhavam">
        <div class="container">
            <div class="section-heading text-center mb-50">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Why Sambhavam Academy?</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="300ms">Empowering Minds. Shaping Leaders.</h2>
                <p class="wow fade-in-bottom" data-wow-delay="400ms" style="max-width:720px;margin:0 auto;">Our multidisciplinary approach combines conceptual excellence, personalized mentorship, future technologies and leadership building to nurture well-rounded achievers.</p>
            </div>

            @php
                $whyCards = [
                    [
                        'num' => '01',
                        'theme' => 'why-card-blue',
                        'icon' => 'fa fa-user-circle-o',
                        'title' => 'Personalized Learning',
                        'desc' => 'Pathways designed around each student’s goals, strengths and individual pace.',
                    ],
                    [
                        'num' => '02',
                        'theme' => 'why-card-teal',
                        'icon' => 'fa fa-graduation-cap',
                        'title' => 'Expert Mentorship',
                        'desc' => 'Guidance from experienced educators, civil servants, and domain leaders.',
                    ],
                    [
                        'num' => '03',
                        'theme' => 'why-card-green',
                        'icon' => 'fa fa-laptop',
                        'title' => 'Technology-Enabled',
                        'desc' => 'Smart classrooms, interactive digital content, and seamless hybrid access.',
                    ],
                    [
                        'num' => '04',
                        'theme' => 'why-card-orange',
                        'icon' => 'fa fa-magic',
                        'title' => 'AI-Enabled Insights',
                        'desc' => 'Adaptive assessments, personalized recommendations and predictive insights.',
                    ],
                    [
                        'num' => '05',
                        'theme' => 'why-card-blue',
                        'icon' => 'fa fa-lightbulb-o',
                        'title' => 'Conceptual Excellence',
                        'desc' => 'Deep understanding, practical problem-solving and analytical thinking.',
                    ],
                    [
                        'num' => '06',
                        'theme' => 'why-card-teal',
                        'icon' => 'fa fa-briefcase',
                        'title' => 'Career Preparation',
                        'desc' => 'Rigorous alignment with competitive exams, higher education and career paths.',
                    ],
                    [
                        'num' => '07',
                        'theme' => 'why-card-green',
                        'icon' => 'fa fa-compass',
                        'title' => 'Leadership & Ethics',
                        'desc' => 'Confidence, public speaking, critical thinking, and responsible decision-making.',
                    ],
                    [
                        'num' => '08',
                        'theme' => 'why-card-orange',
                        'icon' => 'fa fa-line-chart',
                        'title' => 'Continuous Tracking',
                        'desc' => 'Real-time performance analytics, milestone reviews and parent engagement.',
                    ],
                ];
            @endphp

            <div class="row gy-4 justify-content-center">
                @foreach ($whyCards as $idx => $card)
                    <div class="col-xl-3 col-lg-3 col-md-6 d-flex">
                        <div class="why-card {{ $card['theme'] }} w-100 wow fade-in-bottom" data-wow-delay="{{ 120 + ($idx % 4) * 80 }}ms">
                            <span class="why-card-num">{{ $card['num'] }}</span>
                            <div class="why-icon-wrap">
                                <div class="why-icon"><i class="{{ $card['icon'] }}"></i></div>
                            </div>
                            <h4 class="title">{{ $card['title'] }}</h4>
                            <p>{{ $card['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    




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