@extends('layouts.app')

@section('title', 'Innovation, Livelihoods & Inclusive Empowerment | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

@push('styles')
<style>
    .about-feature-card .icon .fa{
        font-size: 28px !important;
    }

</style>
@endpush

<section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Innovation, Livelihoods & Inclusive Empowerment</h1>
            <h4 class="sub-title">
                <a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span>
                <a class="inner-page" href="{{ url('impact-ecosystem') }}"> Social Impact Programmes</a><span class="icon">/</span>
                <a class="inner-page" href="#"> Innovation, Livelihoods & Inclusive Empowerment</a>
            </h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->
{{-- NOTE: reusing images/banners/upsc1.avif. Swap in a dedicated banner image once available. --}}

<!-- ============================================= -->
<!-- SECTION 1: INTRO -->
<!-- (REUSES existing .about-section styles - no new CSS) -->
<!-- ============================================= -->
<section class="about-section pt-80 pb-5">
    <div class="container">
        <div class="row boxx text-center ">
            <div class="col-xl-12  col-lg-12 my-5">
                <div class="about-content my-auto">
                    <div class="section-heading mb-40">
                        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                            <span class="heading-icon"><i class="fa fa-bolt"></i></span>Platform 03
                        </h4>
                        <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Creating Pathways to Opportunity, Dignity and Self-Reliance</h2>
                        <p class="mt-20 wow fade-in-bottom" data-wow-delay="500ms">
                            Education and environmental awareness matter most when they translate into real,
                            sustained opportunity. This platform focuses on entrepreneurship, employability and
                            inclusive empowerment — turning ideas and skills into livelihoods.
                        </p>
                        <p class="wow fade-in-bottom" data-wow-delay="550ms">
                            We work with individuals and communities who are ready to build something of their
                            own, and give them the tools, training and support to do it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ intro -->

<!-- ============================================= -->
<!-- SECTION 2: FOCUS AREAS -->
<!-- (REUSES existing .about-feature / .about-feature-card styles - no new CSS) -->
<!-- ============================================= -->
@php
    $focusAreas = [
        ['icon' => 'fa-rocket',      'title' => 'Entrepreneurship Training',      'desc' => 'Practical guidance for turning ideas into viable, sustainable ventures.'],
        ['icon' => 'fa-money',       'title' => 'Financial Literacy',              'desc' => 'Money management, savings and credit skills for long-term financial independence.'],
        ['icon' => 'fa-briefcase',   'title' => 'Employability Skill-Building',    'desc' => 'Vocational and workplace-readiness training aligned with real market demand.'],
        ['icon' => 'fa-users',       'title' => 'Inclusive Empowerment',           'desc' => 'Focused support for women, persons with disabilities and underserved communities.'],
        ['icon' => 'fa-lightbulb',   'title' => 'Innovation & Prototyping',        'desc' => 'Hands-on challenges that turn practical ideas into real-world solutions.'],
        ['icon' => 'fa-handshake-o', 'title' => 'Community Partnerships',          'desc' => 'Working alongside local organisations to make opportunity reach further.'],
    ];
@endphp

<section class="about-feature pt-60 pb-120">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Focus Areas</h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">What This Platform Covers</h2>
        </div>
        <div class="row gy-lg-4 gy-4">
            @foreach ($focusAreas as $i => $area)
                <div class="col-lg-4 col-md-6">
                    <div class="about-feature-card wow fade-in-bottom" data-wow-delay="{{ 200 + ($i % 3) * 100 }}ms">
                        <div class="icon"><i class="fa {{ $area['icon'] }}"></i></div>
                        <div class="content">
                            <h3 class="title">{{ $area['title'] }}</h3>
                            <p>{{ $area['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ./ focus-areas -->

<!-- ============================================= -->
<!-- SECTION 3: WHO IT SERVES -->
<!-- (REUSES existing .why-academy-section / .why-card styles - no new CSS) -->
<!-- ============================================= -->
<section class="why-academy-section pt-60 pb-60">
    <div class="container">
        <div class="section-heading text-center">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Who It Serves</h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Builders, Earners & Changemakers</h2>
        </div>
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="why-card why-card-blue wow fade-in-bottom" data-wow-delay="150ms">
                    <span class="why-card-num">01</span>
                    <div class="why-icon"><i class="fa fa-rocket"></i></div>
                    <h4 class="title">Aspiring Entrepreneurs</h4>
                    <p>Individuals with an idea, ready to build a sustainable venture around it.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-card why-card-teal wow fade-in-bottom" data-wow-delay="250ms">
                    <span class="why-card-num">02</span>
                    <div class="why-icon"><i class="fa fa-briefcase"></i></div>
                    <h4 class="title">Unemployed & Underemployed Youth</h4>
                    <p>Skill-building for real, immediate employability.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-card why-card-green wow fade-in-bottom" data-wow-delay="350ms">
                    <span class="why-card-num">03</span>
                    <div class="why-icon"><i class="fa fa-female"></i></div>
                    <h4 class="title">Women & Persons with Disabilities</h4>
                    <p>Targeted support so ability, not circumstance, defines outcomes.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-card why-card-orange wow fade-in-bottom" data-wow-delay="450ms">
                    <span class="why-card-num">04</span>
                    <div class="why-icon"><i class="fa fa-map-marker"></i></div>
                    <h4 class="title">Rural & Underserved Communities</h4>
                    <p>Bringing livelihood opportunities closer to where people already are.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ who-it-serves -->

<!-- ============================================= -->
<!-- SECTION 4: THE JOURNEY -->
<!-- (REUSES existing .purpose-section / .purpose-bridge-list styles - no new CSS) -->
<!-- ============================================= -->
@php
    $bridges = [
        ['Talent', 'Opportunity'],
        ['Ideas', 'Innovation'],
        ['Skills', 'Livelihoods'],
    ];
@endphp

<section class="purpose-section pt-20 pb-60">
    <div class="container boxx">
        <div class="section-heading text-center" style="max-width:760px;margin:0 auto;">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>The Journey</h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">From an Idea to a Livelihood</h2>
        </div>
        <div class="purpose-bridge-list">
            @foreach ($bridges as $i => $bridge)
                <div class="purpose-bridge-item wow fade-in-bottom" data-wow-delay="{{ 200 + ($i * 100) }}ms">
                    <span class="purpose-side">{{ $bridge[0] }}</span>
                    <span class="purpose-arrow"><i class="fa fa-long-arrow-right"></i></span>
                    <span class="purpose-side">{{ $bridge[1] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ./ journey -->

<!-- ============================================= -->
<!-- SECTION 5: CLOSING CTA -->
<!-- (REUSES existing .closing-section styles - no new CSS) -->
<!-- ============================================= -->
<section class="closing-section container my-5">
    <div class="closing-overlay"></div>
    <div class="container position-relative">
        <div class="closing-content text-center">
            <h4 class="closing-eyebrow wow fade-in-bottom" data-wow-delay="200ms">Ready to Build Something?</h4>
            <h2 class="closing-tagline wow fade-in-bottom" data-wow-delay="350ms">Turn Your Skills Into a Livelihood</h2>
            <div class="about-btn wow fade-in-bottom" data-wow-delay="450ms">
                <a href="{{ url('contact') }}" class="ed-primary-btn">Get Involved</a>
            </div>
        </div>
    </div>
</section>
<!-- ./ closing-section -->

@endsection