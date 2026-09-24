@extends('layouts.app')

@section('title', 'Climate, Environment & Sustainable Development | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@push('styles')
<style>
/* ==========================================================================
   Climate, Environment & Sustainable Development — Merged Page Styles
   NOTE: .schp-wrap, .schp-eyebrow, .schp-section-head, .schp-verticals,
   .schp-vert-list, .purpose-section styles are assumed already present in
   main.css (as in the original 204-line version) and are NOT redefined here.
   Only the classes needed for the upgraded Hero + the sections ported over
   from the longer file (Stats / Community / Timeline / Closing) are added.
   ========================================================================== */

/* --------------------------------------------------------------------------
   Hero (upgraded — gradient overlay + badge, replaces plain .page-header)
   -------------------------------------------------------------------------- */
.climate-hero {
  position: relative;
  min-height: 420px;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center;
  padding: 110px 0 80px;
  overflow: hidden;
}

.climate-hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(0, 0, 0, 0.55) 0%, rgba(0, 0, 0, 0.40) 100%);
  z-index: 1;
}

.climate-hero-content {
  position: relative;
  z-index: 2;
  max-width: 820px;
  margin: 0 auto;
  text-align: center;
}

.climate-hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.25);
  color: #FFFFFF;
  padding: 6px 18px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.8px;
  text-transform: uppercase;
  margin-bottom: 18px;
}

.climate-hero-badge i { color: var(--sambhavam-gold); }

.climate-hero-title {
  color: #FFFFFF;
  font-size: 42px;
  font-weight: 700;
  line-height: 1.22;
  margin-bottom: 16px;
}

.climate-breadcrumb {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: rgba(0, 0, 0, 0.2);
  padding: 8px 22px;
  border-radius: 50px;
  font-size: 14px;
  margin-top: 6px;
}

.climate-breadcrumb a {
  color: rgba(255, 255, 255, 0.85);
  text-decoration: none;
  transition: all 0.3s ease;
}

.climate-breadcrumb a:hover { color: #FFFFFF; }
.climate-breadcrumb .sep { color: rgba(255, 255, 255, 0.4); }
.climate-breadcrumb .current { color: var(--sambhavam-gold); font-weight: 600; }

/* --------------------------------------------------------------------------
   Shared section-head utility for the ported sections below
   -------------------------------------------------------------------------- */
.climate-section-head {
  text-align: center;
  max-width: 760px;
  margin: 0 auto 45px;
}

.climate-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: var(--sambhavam-teal);
  font-size: 13px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  margin-bottom: 12px;
  background: rgba(1, 109, 119, 0.08);
  padding: 5px 16px;
  border-radius: 30px;
  border: 1px solid rgba(1, 109, 119, 0.15);
}

.climate-title {
  color: var(--ed-color-heading-primary);
  font-size: 32px;
  font-weight: 700;
  line-height: 1.25;
  margin-bottom: 14px;
}

.climate-subtitle {
  color: var(--ed-color-text-body);
  font-size: 15.5px;
  line-height: 1.65;
  margin: 0;
}

/* --------------------------------------------------------------------------
   Intro Section — editorial card (image fully visible + styled copy)
   -------------------------------------------------------------------------- */
.climate-intro-card {
  background: #FFFFFF;
  border-radius: 20px;
  border: 1px solid var(--ed-color-border-1);
  padding: 36px;
  box-shadow: 0 10px 30px rgba(3, 72, 97, 0.06);
}

.climate-intro-media {
  position: relative;
  border-radius: 16px;
  overflow: hidden;
  height: 100%;
  min-height: 340px;
  box-shadow: 0 10px 25px rgba(1, 109, 119, 0.12);
  background: linear-gradient(135deg, rgba(1, 109, 119, 0.08), rgba(3, 72, 97, 0.08));
  display: flex;
  align-items: center;
  justify-content: center;
}

.climate-intro-media img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  transition: transform 0.6s ease;
}

.climate-intro-media:hover img { transform: scale(1.03); }

.climate-intro-badge {
  position: absolute;
  bottom: 18px;
  left: 18px;
  background: rgba(3, 72, 97, 0.92);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  color: #FFFFFF;
  padding: 11px 16px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  gap: 12px;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.climate-intro-badge i { font-size: 20px; color: var(--sambhavam-gold); }
.climate-intro-badge h5 { font-size: 13.5px; font-weight: 700; margin: 0; color: #FFFFFF; }
.climate-intro-badge span { font-size: 11.5px; opacity: 0.85; }

.climate-intro-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
  padding-left: 10px;
}

.climate-intro-lead {
  position: relative;
  font-size: 16.5px;
  color: var(--ed-color-heading-primary);
  font-weight: 600;
  line-height: 1.65;
  margin-bottom: 18px;
  padding-left: 20px;
  border-left: 3px solid var(--sambhavam-teal);
}

.climate-intro-text {
  font-size: 15px;
  color: var(--ed-color-text-body);
  line-height: 1.7;
  margin: 0 0 0 20px;
}

/* --------------------------------------------------------------------------
   Impact Statistics
   -------------------------------------------------------------------------- */
.climate-stats-section {
  background: #FFFFFF;
  border-top: 1px solid var(--ed-color-border-1);
  border-bottom: 1px solid var(--ed-color-border-1);
  padding: 60px 0;
}

.climate-stat-card {
  background: var(--ed-color-grey-1);
  border: 1px solid var(--ed-color-border-1);
  border-radius: 16px;
  padding: 30px 20px;
  text-align: center;
  transition: all 0.35s ease;
  position: relative;
  overflow: hidden;
  height: 100%;
}

.climate-stat-card::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--sambhavam-blue), var(--sambhavam-teal));
  opacity: 0;
  transition: all 0.3s ease;
}

.climate-stat-card:hover {
  background: #FFFFFF;
  transform: translateY(-6px);
  box-shadow: 0 12px 30px rgba(3, 72, 97, 0.1);
  border-color: var(--sambhavam-teal);
}

.climate-stat-card:hover::before { opacity: 1; }

.climate-stat-icon {
  width: 54px; height: 54px;
  background: #FFFFFF;
  color: var(--sambhavam-teal);
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  margin-bottom: 14px;
  border: 1px solid var(--ed-color-border-1);
  transition: all 0.3s ease;
}

.climate-stat-card:hover .climate-stat-icon {
  background: var(--sambhavam-teal);
  color: #FFFFFF;
  transform: scale(1.1);
}

.climate-stat-number {
  font-size: 34px;
  font-weight: 800;
  color: var(--sambhavam-blue);
  line-height: 1.1;
  margin-bottom: 6px;
}

.climate-stat-title {
  font-size: 15px;
  font-weight: 700;
  color: var(--ed-color-heading-primary);
  margin-bottom: 4px;
}

.climate-stat-desc { font-size: 13px; color: var(--ed-color-text-body); margin: 0; }

/* --------------------------------------------------------------------------
   Who It Serves — Community Cards
   -------------------------------------------------------------------------- */
.climate-community-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 22px;
}

.climate-community-card {
  background: #FFFFFF;
  border: 1px solid var(--ed-color-border-1);
  border-radius: 16px;
  padding: 30px 20px;
  text-align: center;
  box-shadow: 0 6px 20px rgba(3, 72, 97, 0.04);
  transition: all 0.35s ease;
  position: relative;
  overflow: hidden;
  height: 100%;
}

.climate-community-card::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: var(--sambhavam-teal);
  transition: all 0.3s ease;
}

.climate-community-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 14px 32px rgba(3, 72, 97, 0.1);
  border-color: var(--sambhavam-teal);
}

.climate-community-card:hover::before { background: var(--sambhavam-gold); }

.climate-community-icon {
  width: 58px; height: 58px;
  border-radius: 50%;
  background: rgba(1, 109, 119, 0.08);
  color: var(--sambhavam-teal);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  margin-bottom: 16px;
  border: 1px solid rgba(1, 109, 119, 0.15);
  transition: all 0.3s ease;
}

.climate-community-card:hover .climate-community-icon {
  background: var(--sambhavam-teal);
  color: #FFFFFF;
  transform: scale(1.1);
  box-shadow: 0 6px 18px rgba(1, 109, 119, 0.2);
}

.climate-community-title {
  font-size: 17px;
  font-weight: 700;
  color: var(--ed-color-heading-primary);
  margin-bottom: 8px;
}

.climate-community-desc {
  font-size: 13.5px;
  color: var(--ed-color-text-body);
  line-height: 1.6;
  margin: 0;
}

/* --------------------------------------------------------------------------
   The Journey — Interactive Timeline
   -------------------------------------------------------------------------- */
.climate-timeline-section {
  background: #FFFFFF;
  border-top: 1px solid var(--ed-color-border-1);
  border-bottom: 1px solid var(--ed-color-border-1);
}

.climate-timeline-wrapper { position: relative; padding: 30px 0 10px; }

.climate-timeline-line {
  position: absolute;
  top: 60px; left: 6%; right: 6%;
  height: 3px;
  background: linear-gradient(90deg, var(--sambhavam-blue) 0%, var(--sambhavam-teal) 50%, var(--sambhavam-gold) 100%);
  z-index: 1;
  border-radius: 3px;
}

.climate-timeline-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 22px;
  position: relative;
  z-index: 2;
}

.climate-timeline-item { text-align: center; position: relative; }

.climate-timeline-node {
  width: 52px; height: 52px;
  border-radius: 50%;
  background: #FFFFFF;
  border: 3px solid var(--sambhavam-teal);
  color: var(--sambhavam-teal);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  font-weight: 700;
  margin-bottom: 20px;
  box-shadow: 0 0 0 6px #FFFFFF, 0 6px 16px rgba(1, 109, 119, 0.15);
  transition: all 0.3s ease;
}

.climate-timeline-item:hover .climate-timeline-node {
  background: var(--sambhavam-teal);
  color: #FFFFFF;
  transform: scale(1.12);
  box-shadow: 0 0 0 6px rgba(1, 109, 119, 0.15), 0 10px 22px rgba(1, 109, 119, 0.25);
}

.climate-timeline-content {
  background: var(--ed-color-grey-1);
  border: 1px solid var(--ed-color-border-1);
  border-radius: 14px;
  padding: 22px 16px;
  transition: all 0.3s ease;
  height: calc(100% - 72px);
}

.climate-timeline-item:hover .climate-timeline-content {
  background: #FFFFFF;
  transform: translateY(-5px);
  box-shadow: 0 8px 24px rgba(3, 72, 97, 0.08);
  border-color: var(--sambhavam-teal);
}

.climate-timeline-step {
  font-size: 11px;
  font-weight: 800;
  text-transform: uppercase;
  color: var(--sambhavam-gold);
  letter-spacing: 1px;
  margin-bottom: 6px;
}

.climate-timeline-title {
  font-size: 16.5px;
  font-weight: 700;
  color: var(--ed-color-heading-primary);
  margin-bottom: 6px;
}

.climate-timeline-desc { font-size: 13px; color: var(--ed-color-text-body); line-height: 1.5; margin: 0; }

/* --------------------------------------------------------------------------
   Closing CTA (upgraded — background image + overlay)
   -------------------------------------------------------------------------- */
.climate-closing-section {
  position: relative;
  background-size: cover;
  background-position: center;
  border-radius: 20px;
  overflow: hidden;
  padding: 60px 30px;
  box-shadow: 0 16px 40px rgba(3, 72, 97, 0.15);
}

.climate-closing-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(3, 72, 97, 0.94) 0%, rgba(1, 109, 119, 0.88) 100%);
  z-index: 1;
}

.climate-closing-content { position: relative; z-index: 2; max-width: 720px; margin: 0 auto; }

.climate-closing-eyebrow {
  color: var(--sambhavam-gold);
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  margin-bottom: 12px;
}

.climate-closing-tagline {
  color: #FFFFFF;
  font-size: 34px;
  font-weight: 700;
  line-height: 1.25;
  margin-bottom: 16px;
}

.climate-closing-desc {
  color: rgba(255, 255, 255, 0.9);
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 30px;
}

/* Buttons inside the closing CTA need their own contrast — the site-wide
   .ed-primary-btn colors are too close to the dark teal overlay here. */
.climate-closing-content .ed-primary-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 13px 30px;
  border-radius: 50px;
  font-size: 15px;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.3s ease;
  background: var(--sambhavam-gold);
  color: #043148;
  border: 1px solid var(--sambhavam-gold);
}

.climate-closing-content .ed-primary-btn:hover {
  background: #FFFFFF;
  border-color: #FFFFFF;
  color: #043148;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.climate-closing-content .ed-primary-btn.buy-btn {
  background: transparent;
  color: #FFFFFF;
  border: 1px solid rgba(255, 255, 255, 0.6);
}

.climate-closing-content .ed-primary-btn.buy-btn:hover {
  background: rgba(255, 255, 255, 0.15);
  border-color: #FFFFFF;
  color: #FFFFFF;
}

/* --------------------------------------------------------------------------
   Scroll reveal (shared by all [data-climate-reveal] elements below)
   -------------------------------------------------------------------------- */
[data-climate-reveal] {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.65s cubic-bezier(0.2, 0.8, 0.2, 1), transform 0.65s cubic-bezier(0.2, 0.8, 0.2, 1);
  will-change: opacity, transform;
}
[data-climate-reveal].is-visible { opacity: 1; transform: translateY(0); }

/* --------------------------------------------------------------------------
   Responsive
   -------------------------------------------------------------------------- */
@media (max-width: 991px) {
  .climate-community-grid { grid-template-columns: repeat(2, 1fr); gap: 18px; }
  .climate-timeline-line { display: none; }
  .climate-timeline-grid { grid-template-columns: repeat(2, 1fr); gap: 20px; }
  .climate-timeline-content { height: auto; }
}

@media (max-width: 767px) {
  .climate-hero { min-height: 360px; padding: 90px 0 65px; }
  .climate-hero-title { font-size: 28px; }
  .climate-title { font-size: 24px; }
  .climate-closing-tagline { font-size: 24px; }
  .climate-community-grid { grid-template-columns: 1fr; }
  .climate-timeline-grid { grid-template-columns: 1fr; }
}
</style>
@endpush

@section('content')

<!-- ======================================================================
     HERO (upgraded — gradient overlay, badge, breadcrumb pill)
     ====================================================================== -->
<section class="climate-hero" style="background-image: url('{{ asset('images/banners/upsc1.avif') }}');">
    <div class="climate-hero-overlay"></div>
    <div class="container">
        <div class="climate-hero-content" data-climate-reveal>
            <!-- <div class="climate-hero-badge">
                <i class="fa fa-leaf"></i>
                <span>Social Impact Programmes</span>
            </div> -->
            <h1 class="climate-hero-title">Climate, Environment &amp; Sustainable Development</h1>
            <!-- <div class="climate-breadcrumb">
                <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                <span class="sep">/</span>
                <a href="">Social Impact Programmes</a>
                <span class="sep">/</span>
                <span class="current">Climate, Environment &amp; Sustainable Development</span>
            </div> -->
        </div>
    </div>
</section>
<!-- ./ hero -->

<!-- ============================================= -->
<!-- SECTION 1: INTRO -->
<!-- ============================================= -->
<section class="pb-60" style="padding-top: 60px;">
    <div class="container">
        <div class="text-center wow fade-in-bottom" data-wow-delay="200ms" style="max-width: 760px; margin: 0 auto 40px;">
            <div class="climate-eyebrow"><i class="fa fa-leaf"></i> Our Vision &amp; Commitment</div>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="350ms">Advancing Solutions for a Healthier, More Resilient Planet</h2>
        </div>
    </div>

    {{-- Full-width image, no container --}}
    <div class="wow fade-in-bottom" data-wow-delay="400ms" style="position: relative; width: 100%; overflow: hidden; margin-bottom: 48px;">
        <img src="{{ asset('images/about/climate.webp') }}"
             alt="Climate, Environment & Sustainable Development"
             style="width: 100%; height: 420px; object-fit: cover; display: block;">
        <div class="climate-intro-badge">
            <i class="fa fa-globe"></i>
            <div>
                <h5>Earth First Initiative</h5>
                <span>Grounded in Evidence &amp; Action</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="climate-intro-card wow fade-in-bottom" data-wow-delay="550ms" style="max-width: 980px; margin: 0 auto;">
            <p class="climate-intro-lead">The learners we prepare today will inherit the environment we leave behind. This platform brings environmental experts, researchers and communities together to build science-based, community-driven responses to climate and sustainability challenges.</p>
            <p class="climate-intro-text">From youth climate literacy to on-ground conservation partnerships, our work here is designed to be practical, local and lasting.</p>
        </div>
    </div>
</section>
<!-- ./ intro -->

<!-- ============================================= -->
<!-- SECTION 2: FOCUS AREAS -->
<!-- (REUSES .schp-verticals / .schp-vert-list index-row pattern — already
     in main.css) -->
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

</div>
<!-- ./ .schp-page -->

<!-- ======================================================================
     SECTION 3: IMPACT STATISTICS (ported from styled version)
     ====================================================================== -->
@php
    $stats = [
        ['icon' => 'fa-bullhorn', 'count' => '50+',     'title' => 'Climate Programs',    'desc' => 'Conducted across institutions & communities'],
        ['icon' => 'fa-users',    'count' => '25,000+', 'title' => 'Youth & Citizens',     'desc' => 'Engaged in active environmental action'],
        ['icon' => 'fa-flask',    'count' => '15+',     'title' => 'Research Partners',    'desc' => 'Institutions & environmental think-tanks'],
        ['icon' => 'fa-tree',     'count' => '100+',    'title' => 'Grassroots Projects',  'desc' => 'Driving localized ecological preservation'],
    ];
@endphp

<section class="climate-stats-section">
    <div class="container">
        <div class="row g-4">
            @foreach ($stats as $index => $stat)
                <div class="col-lg-3 col-sm-6" data-climate-reveal style="transition-delay: {{ $index * 100 }}ms;">
                    <div class="climate-stat-card">
                        <div class="climate-stat-icon"><i class="fa {{ $stat['icon'] }}"></i></div>
                        <div class="climate-stat-number">{{ $stat['count'] }}</div>
                        <div class="climate-stat-title">{{ $stat['title'] }}</div>
                        <p class="climate-stat-desc">{{ $stat['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ./ impact stats -->

<!-- ======================================================================
     SECTION 4: WHO IT SERVES (community cards, ported from styled version)
     ====================================================================== -->
@php
    $audiences = [
        ['icon' => 'fa-graduation-cap', 'title' => 'Students & Youth',            'desc' => 'Fostering deep climate literacy, environmental leadership skills, and hands-on scientific curiosity from early education.'],
        ['icon' => 'fa-users',          'title' => 'Grassroots Communities',      'desc' => 'Partnering directly with rural and semi-urban communities to solve water, agriculture, and waste challenges.'],
        ['icon' => 'fa-flask',          'title' => 'Researchers & Experts',       'desc' => 'Providing real-world testbeds and fieldwork opportunities for ecological data collection and policy prototyping.'],
        ['icon' => 'fa-heart',          'title' => 'Volunteers & Donors',         'desc' => 'Uniting impassioned individuals and institutions to channel resources directly into impactful ecological change.'],
    ];
@endphp

<section class="pt-80 pb-80">
    <div class="container">
        <div class="climate-section-head" data-climate-reveal>
            <div class="climate-eyebrow"><i class="fa fa-handshake-o"></i> Ecosystem</div>
            <h2 class="climate-title">Communities, Students &amp; Changemakers</h2>
            <p class="climate-subtitle">Transforming shared concern for our planet into organized, impactful, and lasting collective stewardship.</p>
        </div>

        <div class="climate-community-grid">
            @foreach ($audiences as $idx => $audience)
                <div class="climate-community-card" data-climate-reveal style="transition-delay: {{ $idx * 100 }}ms;">
                    <div class="climate-community-icon"><i class="fa {{ $audience['icon'] }}"></i></div>
                    <h4 class="climate-community-title">{{ $audience['title'] }}</h4>
                    <p class="climate-community-desc">{{ $audience['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ./ who it serves -->

<!-- ======================================================================
     SECTION 5: THE JOURNEY (interactive timeline, ported from styled version)
     ====================================================================== -->
@php
    $journeySteps = [
        ['num' => '01', 'title' => 'Awareness',            'subtitle' => 'Phase I',   'desc' => 'Cultivating deep scientific literacy and awareness on ecological vulnerability and climate realities.'],
        ['num' => '02', 'title' => 'Action',                'subtitle' => 'Phase II',  'desc' => 'Mobilizing students, volunteers, and local citizens into organized on-ground environmental campaigns.'],
        ['num' => '03', 'title' => 'Innovation',            'subtitle' => 'Phase III', 'desc' => 'Incubating sustainable technologies, conservation models, and circular economic solutions.'],
        ['num' => '04', 'title' => 'Sustainable Impact',    'subtitle' => 'Phase IV',  'desc' => 'Institutionalizing policy reforms, lasting ecological gains, and resilient self-sustaining communities.'],
    ];
@endphp

<section class="climate-timeline-section pt-80 pb-80">
    <div class="container">
        <div class="climate-section-head" data-climate-reveal>
            <div class="climate-eyebrow"><i class="fa fa-road"></i> Strategic Pathway</div>
            <h2 class="climate-title">The Impact Journey</h2>
            <p class="climate-subtitle">A coherent, milestone-driven framework turning initial awareness into enduring environmental and social impact.</p>
        </div>

        <div class="climate-timeline-wrapper">
            <div class="climate-timeline-line"></div>
            <div class="climate-timeline-grid">
                @foreach ($journeySteps as $k => $step)
                    <div class="climate-timeline-item" data-climate-reveal style="transition-delay: {{ $k * 120 }}ms;">
                        <div class="climate-timeline-node">{{ $step['num'] }}</div>
                        <div class="climate-timeline-content">
                            <div class="climate-timeline-step">{{ $step['subtitle'] }}</div>
                            <h4 class="climate-timeline-title">{{ $step['title'] }}</h4>
                            <p class="climate-timeline-desc">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ./ journey timeline -->

<!-- ======================================================================
     SECTION 6: CLOSING CTA (background image + overlay, ported from styled version)
     ====================================================================== -->
<section class="container my-5">
    <div class="climate-closing-section" style="background-image: url('{{ asset('images/about/climate.webp') }}');" data-climate-reveal>
        <div class="climate-closing-overlay"></div>
        <div class="climate-closing-content text-center">
            <div class="climate-closing-eyebrow"><i class="fa fa-globe"></i> Join The Movement</div>
            <h2 class="climate-closing-tagline">Help Us Build a Resilient &amp; Sustainable Future</h2>
            <p class="climate-closing-desc">Whether you are an institution seeking partnerships, an expert eager to mentor, or a citizen ready to act — your participation accelerates the transition toward a greener tomorrow.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ url('contact') }}" class="ed-primary-btn"><i class="fa fa-handshake-o me-2"></i> Partner With Us</a>
                <a href="{{ url('donate') }}" class="ed-primary-btn buy-btn"><i class="fa fa-heart me-2"></i> Support This Work</a>
            </div>
        </div>
    </div>
</section>
<!-- ./ closing cta -->

@endsection

@push('scripts')
<script>
(function () {
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Handles [data-reveal] (existing main.css sections) and
    // [data-climate-reveal] (sections added/ported in this page) together.
    var selectors = '[data-reveal], [data-climate-reveal]';
    var els = document.querySelectorAll(selectors);

    function show(el) {
        el.classList.add('is-in');
        el.classList.add('is-visible');
    }

    if (reduceMotion || !('IntersectionObserver' in window)) {
        els.forEach(show);
        return;
    }

    var io = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                show(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    els.forEach(function (el) { io.observe(el); });
})();
</script>
@endpush