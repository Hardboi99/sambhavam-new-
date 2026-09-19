@extends('layouts.app')

@section('title', 'Our Impact Ecosystem | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

<section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Our Impact Ecosystem</h1>
            <h4 class="sub-title"><a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span><a class="inner-page" href="{{ url('impact-ecosystem') }}"> Our Impact Ecosystem</a></h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->
{{-- NOTE: reusing images/banners/upsc1.avif (already used on the Scholarships page).
     Swap in a dedicated banner image once one is available. --}}

<!-- ============================================= -->
<!-- SECTION 1: INTRO -->
<!-- (REUSES existing .about-section styles - no new CSS) -->
<!-- ============================================= -->
<section class="about-section pt-80 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-12 text-center">
                <div class="section-heading mb-0">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                        <span class="heading-icon"><i class="fa fa-bolt"></i></span>Our Impact Ecosystem
                    </h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="300ms">Three Platforms. One Journey.</h2>
                    <p class="mt-20 wow fade-in-bottom" data-wow-delay="400ms">
                        SAMBHAVAM works across three connected platforms — education, environment and livelihoods —
                        because real transformation rarely happens in isolation. A student who learns well needs a
                        planet worth inheriting. A community that protects its environment needs the skills and
                        income to sustain that effort. And innovation only becomes impact when it reaches the people
                        who need it most. Each platform strengthens the other two.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ intro -->

<!-- ============================================= -->
<!-- SECTION 2: THE THREE PLATFORMS (DETAILED) -->
<!-- (REUSES existing .ecosystem-section / .ecosystem-card styles - no new CSS) -->
<!-- ============================================= -->
<section class="ecosystem-section pt-60 pb-60" id="ecosystem">
    <div class="container">

        <div class="row gy-4 align-items-stretch mb-40">
            <div class="col-lg-4">
                <div class="ecosystem-card wow fade-in-bottom" data-wow-delay="200ms">
                    <span class="ecosystem-num">01</span>
                    <div class="ecosystem-icon"><i class="fa fa-graduation-cap"></i></div>
                    <h3 class="title">Education, Skills and Future Readiness</h3>
                    <p>Helping learners succeed academically, professionally and personally — from school
                        foundations through competitive examinations to future-ready skills.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ecosystem-card wow fade-in-bottom" data-wow-delay="300ms">
                    <span class="ecosystem-num">02</span>
                    <div class="ecosystem-icon"><i class="fa fa-leaf"></i></div>
                    <h3 class="title">Climate, Environment and Sustainable Development</h3>
                    <p>Advancing science-based and community-driven solutions for a healthier, more
                        resilient planet.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ecosystem-card wow fade-in-bottom" data-wow-delay="400ms">
                    <span class="ecosystem-num">03</span>
                    <div class="ecosystem-icon"><i class="fa fa-briefcase"></i></div>
                    <h3 class="title">Innovation, Livelihoods and Inclusive Empowerment</h3>
                    <p>Creating pathways to entrepreneurship, employment, dignity and economic
                        opportunity for individuals and communities.</p>
                </div>
            </div>
        </div>

        <div class="ecosystem-flow wow fade-in-bottom" data-wow-delay="500ms">
            <span>Learn</span><i class="fa fa-angle-right"></i>
            <span>Build</span><i class="fa fa-angle-right"></i>
            <span>Lead</span><i class="fa fa-angle-right"></i>
            <span>Transform</span>
        </div>
    </div>
</section>
<!-- ./ ecosystem-section -->

<!-- ============================================= -->
<!-- SECTION 3: WHAT EACH PLATFORM INCLUDES -->
<!-- (REUSES existing .about-feature / .about-feature-card styles - no new CSS) -->
<!-- ============================================= -->
@php
    $platforms = [
        [
            'icon'  => 'fa-graduation-cap',
            'title' => 'Education, Skills & Future Readiness',
            'items' => [
                'Civil services, engineering and medical entrance preparation',
                'School foundation programmes for Classes VI–X',
                'Future skills — AI, coding, robotics and design thinking',
                'Leadership, communication and life-skills development',
                'Scholarships for deserving and underserved learners',
            ],
        ],
        [
            'icon'  => 'fa-leaf',
            'title' => 'Climate, Environment & Sustainable Development',
            'items' => [
                'Environmental awareness and climate literacy programmes',
                'Community-driven conservation and sustainability initiatives',
                'Partnerships with environmental experts and researchers',
                'Youth engagement in climate action projects',
            ],
        ],
        [
            'icon'  => 'fa-briefcase',
            'title' => 'Innovation, Livelihoods & Inclusive Empowerment',
            'items' => [
                'Entrepreneurship and financial literacy training',
                'Skill-building for employability and self-reliance',
                'Support for first-generation learners and underserved communities',
                'Innovation and prototyping challenges for real-world problems',
            ],
        ],
    ];
@endphp

<section class="about-feature pt-60 pb-120">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Inside Each Platform</h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">What We Actually Do</h2>
        </div>
        <div class="row gy-lg-4 gy-4">
            @foreach ($platforms as $i => $platform)
                <div class="col-lg-4 col-md-6">
                    <div class="about-feature-card h-100 wow fade-in-bottom" data-wow-delay="{{ 200 + ($i * 100) }}ms">
                        <div class="icon"><i class="fa {{ $platform['icon'] }}"></i></div>
                        <div class="content">
                            <h3 class="title">{{ $platform['title'] }}</h3>
                            <ul class="curri-list mt-15">
                                @foreach ($platform['items'] as $item)
                                    <li><span><i class="fa fa-circle-check"></i> {{ $item }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ./ platform-details -->

<!-- ============================================= -->
<!-- SECTION 4: WHY AN ECOSYSTEM MODEL -->
<!-- (REUSES existing .why-academy-section / .why-card styles - no new CSS) -->
<!-- ============================================= -->
<section class="why-academy-section pt-60 pb-120">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Why an Ecosystem Model</h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Because Impact Doesn't Work in Silos</h2>
        </div>
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="why-card why-card-blue wow fade-in-bottom" data-wow-delay="150ms">
                    <span class="why-card-num">01</span>
                    <div class="why-icon"><i class="fa fa-link"></i></div>
                    <h4 class="title">Integrated</h4>
                    <p>Education, environment and livelihoods are designed together, not as separate programmes.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-card why-card-teal wow fade-in-bottom" data-wow-delay="250ms">
                    <span class="why-card-num">02</span>
                    <div class="why-icon"><i class="fa fa-flask"></i></div>
                    <h4 class="title">Evidence-Based</h4>
                    <p>Every intervention is grounded in research, data and continuous learning.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-card why-card-green wow fade-in-bottom" data-wow-delay="350ms">
                    <span class="why-card-num">03</span>
                    <div class="why-icon"><i class="fa fa-users"></i></div>
                    <h4 class="title">People-Centred</h4>
                    <p>Learners, mentors and communities shape every programme we build.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-card why-card-orange wow fade-in-bottom" data-wow-delay="450ms">
                    <span class="why-card-num">04</span>
                    <div class="why-icon"><i class="fa fa-chart-line"></i></div>
                    <h4 class="title">Built to Scale</h4>
                    <p>Programmes are designed to grow from one centre to many communities.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ why-academy-section -->

<!-- ============================================= -->
<!-- SECTION 5: CLOSING CTA -->
<!-- (REUSES existing .closing-section styles - no new CSS) -->
<!-- ============================================= -->
<section class="closing-section container my-5">
    <div class="closing-overlay"></div>
    <div class="container position-relative">
        <div class="closing-content text-center">
            <h4 class="closing-eyebrow wow fade-in-bottom" data-wow-delay="200ms">One Ecosystem, Many Journeys</h4>
            <h2 class="closing-tagline wow fade-in-bottom" data-wow-delay="350ms">Learn. Innovate. Lead. Create Impact.</h2>
            <div class="about-btn wow fade-in-bottom" data-wow-delay="450ms">
                <a href="{{ url('/#programmes') }}" class="ed-primary-btn">Discover Our Programmes</a>
                <a href="{{ url('contact') }}" class="ed-primary-btn buy-btn">Partner With Us</a>
            </div>
        </div>
    </div>
</section>
<!-- ./ closing-section -->

@endsection