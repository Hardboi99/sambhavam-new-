@extends('layouts.app')

@section('title', 'Climate, Environment & Sustainable Development | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

<section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Climate, Environment & Sustainable Development</h1>
            <h4 class="sub-title">
                <a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span>
                <a class="inner-page" href=""> Social Impact Programmes</a><span class="icon">/</span>
                <a class="inner-page" href="#"> Climate, Environment & Sustainable Development</a>
            </h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->
{{-- NOTE: reusing images/banners/upsc1.avif. Swap in a dedicated banner image once available. --}}

<!-- ============================================= -->
<!-- SECTION 1: INTRO -->
<!-- Editorial feature-open: eyebrow + statement first, a full-width banner
     image second, supporting copy in two columns underneath. Deliberately
     NOT the About page's boxed-image-beside-text layout. -->
<!-- ============================================= -->
<section class="pt-80 pb-60">
    <div class="container">
        <div class="text-center" style="max-width: 760px; margin: 0 auto 40px;">
           
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="350ms">Advancing Solutions for a Healthier, More Resilient Planet</h2>
        </div>

        <div class="wow fade-in-bottom" data-wow-delay="450ms" style="border-radius: 15px; overflow: hidden; height: 380px; margin-bottom: 40px;">
            <img src="{{ asset('images/about/climate.webp') }}" alt="Climate, Environment & Sustainable Development" style="width:100%; height:100%; object-fit:cover;">
        </div>

        <div class="row gy-4" style="max-width: 980px; margin: 0 auto;">
            <div class="col-md-6">
                <p style="color: var(--ed-color-text-body); margin:0;">The learners we prepare today will inherit the environment we leave behind. This platform brings environmental experts, researchers and communities together to build science-based, community-driven responses to climate and sustainability challenges.</p>
            </div>
            <div class="col-md-6">
                <p style="color: var(--ed-color-text-body); margin:0;">From youth climate literacy to on-ground conservation partnerships, our work here is designed to be practical, local and lasting.</p>
            </div>
        </div>
    </div>
</section>
<!-- ./ intro -->

<!-- ============================================= -->
<!-- SECTION 2: FOCUS AREAS -->
<!-- (REUSES .schp-verticals / .schp-vert-list index-row pattern — already in
     main.css — instead of the six-card .about-feature-card grid) -->
<!-- ============================================= -->
@php
    $focusAreas = [
        ['icon' => 'fa-leaf',      'title' => 'Climate Literacy Programmes',        'desc' => 'Helping students and communities understand climate science and its local impact.'],
        ['icon' => 'fa-tree',      'title' => 'Community Conservation Initiatives',  'desc' => 'On-ground, community-driven projects for water, soil and biodiversity conservation.'],
        ['icon' => 'fa-flask',     'title' => 'Research & Expert Partnerships',      'desc' => 'Collaborations with environmental experts and researchers to ground action in evidence.'],
        ['icon' => 'fa-users',     'title' => 'Youth Climate Action',                'desc' => 'Engaging young people directly in climate projects, not just classroom discussion.'],
        ['icon' => 'fa-recycle',   'title' => 'Sustainable Livelihoods',             'desc' => 'Connecting environmental stewardship with income and livelihood opportunities.'],
        ['icon' => 'fa-globe',     'title' => 'Awareness & Advocacy',                'desc' => 'Building public understanding and support for sustainable, community-first solutions.'],
    ];
@endphp

<div class="schp-page">

<section class="schp-verticals">
    <div class="schp-wrap">
        <div class="schp-section-head" data-reveal>
            <span class="schp-eyebrow">Focus Areas</span>
            <h2>What This Platform Covers</h2>
        </div>

        <div class="schp-vert-list">
            @foreach ($focusAreas as $i => $area)
                <div class="schp-vert-row" data-reveal>
                    <span class="schp-vert-num">{{ sprintf('%02d', $i + 1) }}</span>
                    <span class="schp-vert-icon"><i class="fa {{ $area['icon'] }}"></i></span>
                    <span class="schp-vert-text">
                        <h4>{{ $area['title'] }}</h4>
                        <p>{{ $area['desc'] }}</p>
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ./ focus-areas -->

<!-- ============================================= -->
<!-- SECTION 3: WHO IT SERVES -->
<!-- Editorial stat-row: four entries divided by hairlines, no card boxes -->
<!-- or colored borders. -->
<!-- ============================================= -->
@php
    $audiences = [
        ['icon' => 'fa-leaf',                 'title' => 'Students & Youth',                  'desc' => 'Building climate literacy and leadership from an early age.'],
        ['icon' => 'fa-users',                'title' => 'Rural & Semi-Urban Communities',    'desc' => 'Community-led conservation projects grounded in local needs.'],
        ['icon' => 'fa-flask',                'title' => 'Researchers & Experts',             'desc' => 'Partners who bring evidence-based design to on-ground action.'],
        ['icon' => 'fa-hand-holding-heart',   'title' => 'Volunteers & Donors',               'desc' => 'Individuals and organisations supporting sustainable, lasting change.'],
    ];
@endphp

<section class="pt-40 pb-120">
    <div class="schp-wrap">
        <div class="schp-section-head" data-reveal>
            <span class="schp-eyebrow">Who It Serves</span>
            <h2>Communities, Students & Changemakers</h2>
        </div>

        <div class="row gx-0">
            @foreach ($audiences as $i => $a)
                <div class="col-lg-3 col-md-6" data-reveal>
                    <div style="padding: 0 28px; {{ $i > 0 ? 'border-left: 1px solid #E0E5EB;' : '' }} height:100%;">
                        <div style="color: var(--sambhavam-teal); font-size: 22px; margin-bottom: 16px;"><i class="fa {{ $a['icon'] }}"></i></div>
                        <h4 style="font-size: 17px; color: var(--ed-color-heading-primary); margin-bottom: 8px;">{{ $a['title'] }}</h4>
                        <p style="font-size: 14.5px; color: var(--ed-color-text-body); margin:0;">{{ $a['desc'] }}</p>
                    </div>
                </div>
            @endforeach
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
        ['Awareness', 'Action'],
        ['Communities', 'Sustainable Development'],
        ['Ideas', 'Innovation'],
    ];
@endphp

<section class="purpose-section pt-20 pb-120">
    <div class="schp-wrap">
        <div class="schp-section-head text-center" data-reveal style="max-width:760px;margin:0 auto;">
            <span class="schp-eyebrow">The Journey</span>
            <h2>From Awareness to Real Impact on the Ground</h2>
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

</div>
<!-- ./ .schp-page -->

<!-- ============================================= -->
<!-- SECTION 5: CLOSING CTA -->
<!-- (REUSES existing .closing-section styles - no new CSS) -->
<!-- ============================================= -->
<section class="closing-section container my-5">
    <div class="closing-overlay"></div>
    <div class="container position-relative">
        <div class="closing-content text-center">
            <h4 class="closing-eyebrow wow fade-in-bottom" data-wow-delay="200ms">Join the Effort</h4>
            <h2 class="closing-tagline wow fade-in-bottom" data-wow-delay="350ms">Help Us Build a More Sustainable Future</h2>
            <div class="about-btn wow fade-in-bottom" data-wow-delay="450ms">
                <a href="{{ url('contact') }}" class="ed-primary-btn">Partner With Us</a>
                <a href="{{ url('donate') }}" class="ed-primary-btn buy-btn">Support This Work</a>
            </div>
        </div>
    </div>
</section>
<!-- ./ closing-section -->

@endsection

@push('scripts')
<script>
(function(){
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var els = document.querySelectorAll('.schp-page [data-reveal]');
  if(reduceMotion || !('IntersectionObserver' in window)){
    els.forEach(function(el){ el.classList.add('is-in'); });
    return;
  }
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
      if(entry.isIntersecting){
        entry.target.classList.add('is-in');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
  els.forEach(function(el){ io.observe(el); });
})();
</script>
@endpush