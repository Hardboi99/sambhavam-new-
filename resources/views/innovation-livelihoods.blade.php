@extends('layouts.app')

@section('title', 'Innovation, Livelihoods & Inclusive Empowerment | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@push('styles')
<style>
/* ==========================================================================
   Innovation, Livelihoods & Inclusive Empowerment — Upgraded Page Styles
   Matching the high-fidelity design system of Climate & Sustainable Development.
   ========================================================================== */

/* --------------------------------------------------------------------------
   Hero (Gradient Overlay + Modern Layout)
   -------------------------------------------------------------------------- */
.innovative-hero {
  position: relative;
  min-height: 420px;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center;
  padding: 110px 0 80px;
  overflow: hidden;
}

.innovative-hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(3, 72, 97, 0.94) 0%, rgba(1, 109, 119, 0.88) 100%);
  z-index: 1;
}

.innovative-hero-content {
  position: relative;
  z-index: 2;
  max-width: 820px;
  margin: 0 auto;
  text-align: center;
}

.innovative-hero-badge {
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

.innovative-hero-badge i { color: var(--sambhavam-gold); }

.innovative-hero-title {
  color: #FFFFFF;
  font-size: 42px;
  font-weight: 700;
  line-height: 1.22;
  margin-bottom: 16px;
}

.innovative-breadcrumb {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: rgba(0, 0, 0, 0.2);
  padding: 8px 22px;
  border-radius: 50px;
  font-size: 14px;
  margin-top: 6px;
}

.innovative-breadcrumb a {
  color: rgba(255, 255, 255, 0.85);
  text-decoration: none;
  transition: all 0.3s ease;
}

.innovative-breadcrumb a:hover { color: #FFFFFF; }
.innovative-breadcrumb .sep { color: rgba(255, 255, 255, 0.4); }
.innovative-breadcrumb .current { color: var(--sambhavam-gold); font-weight: 600; }

/* --------------------------------------------------------------------------
   Shared Section Head Utility
   -------------------------------------------------------------------------- */
.innovative-section-head {
  text-align: center;
  max-width: 760px;
  margin: 0 auto 45px;
}

.innovative-eyebrow {
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

.innovative-title {
  color: var(--ed-color-heading-primary);
  font-size: 32px;
  font-weight: 700;
  line-height: 1.25;
  margin-bottom: 14px;
}

.innovative-subtitle {
  color: var(--ed-color-text-body);
  font-size: 15.5px;
  line-height: 1.65;
  margin: 0;
}

/* --------------------------------------------------------------------------
   Intro Section — Editorial Card & Media
   -------------------------------------------------------------------------- */
.innovative-intro-card {
  background: #FFFFFF;
  border-radius: 20px;
  border: 1px solid var(--ed-color-border-1);
  padding: 36px;
  box-shadow: 0 10px 30px rgba(3, 72, 97, 0.06);
}

.innovative-intro-media {
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

.innovative-intro-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.innovative-intro-media:hover img { transform: scale(1.03); }

.innovative-intro-badge {
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

.innovative-intro-badge i { font-size: 20px; color: var(--sambhavam-gold); }
.innovative-intro-badge h5 { font-size: 13.5px; font-weight: 700; margin: 0; color: #FFFFFF; }
.innovative-intro-badge span { font-size: 11.5px; opacity: 0.85; }

.innovative-intro-lead {
  position: relative;
  font-size: 16.5px;
  color: var(--ed-color-heading-primary);
  font-weight: 600;
  line-height: 1.65;
  margin-bottom: 18px;
  padding-left: 20px;
  border-left: 3px solid var(--sambhavam-teal);
}

.innovative-intro-text {
  font-size: 15px;
  color: var(--ed-color-text-body);
  line-height: 1.7;
  margin: 0 0 0 20px;
}

/* --------------------------------------------------------------------------
   Impact Statistics
   -------------------------------------------------------------------------- */
.innovative-stats-section {
  background: #FFFFFF;
  border-top: 1px solid var(--ed-color-border-1);
  border-bottom: 1px solid var(--ed-color-border-1);
  padding: 60px 0;
}

.innovative-stat-card {
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

.innovative-stat-card::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--sambhavam-blue), var(--sambhavam-teal));
  opacity: 0;
  transition: all 0.3s ease;
}

.innovative-stat-card:hover {
  background: #FFFFFF;
  transform: translateY(-6px);
  box-shadow: 0 12px 30px rgba(3, 72, 97, 0.1);
  border-color: var(--sambhavam-teal);
}

.innovative-stat-card:hover::before { opacity: 1; }

.innovative-stat-icon {
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

.innovative-stat-card:hover .innovative-stat-icon {
  background: var(--sambhavam-teal);
  color: #FFFFFF;
  transform: scale(1.1);
}

.innovative-stat-number {
  font-size: 34px;
  font-weight: 800;
  color: var(--sambhavam-blue);
  line-height: 1.1;
  margin-bottom: 6px;
}

.innovative-stat-title {
  font-size: 15px;
  font-weight: 700;
  color: var(--ed-color-heading-primary);
  margin-bottom: 4px;
}

.innovative-stat-desc { font-size: 13px; color: var(--ed-color-text-body); margin: 0; }

/* --------------------------------------------------------------------------
   Who It Serves — Community & Changemaker Cards
   -------------------------------------------------------------------------- */
.innovative-community-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 22px;
}

.innovative-community-card {
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

.innovative-community-card::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: var(--sambhavam-teal);
  transition: all 0.3s ease;
}

.innovative-community-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 14px 32px rgba(3, 72, 97, 0.1);
  border-color: var(--sambhavam-teal);
}

.innovative-community-card:hover::before { background: var(--sambhavam-gold); }

.innovative-community-icon {
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

.innovative-community-card:hover .innovative-community-icon {
  background: var(--sambhavam-teal);
  color: #FFFFFF;
  transform: scale(1.1);
  box-shadow: 0 6px 18px rgba(1, 109, 119, 0.2);
}

.innovative-community-title {
  font-size: 17px;
  font-weight: 700;
  color: var(--ed-color-heading-primary);
  margin-bottom: 8px;
}

.innovative-community-desc {
  font-size: 13.5px;
  color: var(--ed-color-text-body);
  line-height: 1.6;
  margin: 0;
}

/* --------------------------------------------------------------------------
   The Journey — Interactive Timeline
   -------------------------------------------------------------------------- */
.innovative-timeline-section {
  background: #FFFFFF;
  border-top: 1px solid var(--ed-color-border-1);
  border-bottom: 1px solid var(--ed-color-border-1);
}

.innovative-timeline-wrapper { position: relative; padding: 30px 0 10px; }

.innovative-timeline-line {
  position: absolute;
  top: 60px; left: 6%; right: 6%;
  height: 3px;
  background: linear-gradient(90deg, var(--sambhavam-blue) 0%, var(--sambhavam-teal) 50%, var(--sambhavam-gold) 100%);
  z-index: 1;
  border-radius: 3px;
}

.innovative-timeline-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 22px;
  position: relative;
  z-index: 2;
}

.innovative-timeline-item { text-align: center; position: relative; }

.innovative-timeline-node {
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

.innovative-timeline-item:hover .innovative-timeline-node {
  background: var(--sambhavam-teal);
  color: #FFFFFF;
  transform: scale(1.12);
  box-shadow: 0 0 0 6px rgba(1, 109, 119, 0.15), 0 10px 22px rgba(1, 109, 119, 0.25);
}

.innovative-timeline-content {
  background: var(--ed-color-grey-1);
  border: 1px solid var(--ed-color-border-1);
  border-radius: 14px;
  padding: 22px 16px;
  transition: all 0.3s ease;
  height: calc(100% - 72px);
}

.innovative-timeline-item:hover .innovative-timeline-content {
  background: #FFFFFF;
  transform: translateY(-5px);
  box-shadow: 0 8px 24px rgba(3, 72, 97, 0.08);
  border-color: var(--sambhavam-teal);
}

.innovative-timeline-step {
  font-size: 11px;
  font-weight: 800;
  text-transform: uppercase;
  color: var(--sambhavam-gold);
  letter-spacing: 1px;
  margin-bottom: 6px;
}

.innovative-timeline-title {
  font-size: 16.5px;
  font-weight: 700;
  color: var(--ed-color-heading-primary);
  margin-bottom: 6px;
}

.innovative-timeline-desc { font-size: 13px; color: var(--ed-color-text-body); line-height: 1.5; margin: 0; }

/* --------------------------------------------------------------------------
   Closing CTA (Premium Background + High-Contrast Buttons)
   -------------------------------------------------------------------------- */
.innovative-closing-section {
  position: relative;
  background-size: cover;
  background-position: center;
  border-radius: 20px;
  overflow: hidden;
  padding: 60px 30px;
  box-shadow: 0 16px 40px rgba(3, 72, 97, 0.15);
}

.innovative-closing-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(3, 72, 97, 0.94) 0%, rgba(1, 109, 119, 0.88) 100%);
  z-index: 1;
}

.innovative-closing-content { position: relative; z-index: 2; max-width: 720px; margin: 0 auto; }

.innovative-closing-eyebrow {
  color: var(--sambhavam-gold);
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  margin-bottom: 12px;
}

.innovative-closing-tagline {
  color: #FFFFFF;
  font-size: 34px;
  font-weight: 700;
  line-height: 1.25;
  margin-bottom: 16px;
}

.innovative-closing-desc {
  color: rgba(255, 255, 255, 0.9);
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 30px;
}

/* Dual High-Contrast Buttons */
.innovative-closing-content .ed-primary-btn {
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
  color: #043148 !important;
  border: 1px solid var(--sambhavam-gold);
}

.innovative-closing-content .ed-primary-btn:hover {
  background: #FFFFFF;
  border-color: #FFFFFF;
  color: #043148 !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.innovative-closing-content .ed-primary-btn.buy-btn {
  background: transparent;
  color: #FFFFFF !important;
  border: 1px solid rgba(255, 255, 255, 0.6);
}

.innovative-closing-content .ed-primary-btn.buy-btn:hover {
  background: rgba(255, 255, 255, 0.15);
  border-color: #FFFFFF;
  color: #FFFFFF !important;
}

/* --------------------------------------------------------------------------
   Scroll Reveal Animations
   -------------------------------------------------------------------------- */
[data-innovative-reveal] {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.65s cubic-bezier(0.2, 0.8, 0.2, 1), transform 0.65s cubic-bezier(0.2, 0.8, 0.2, 1);
  will-change: opacity, transform;
}
[data-innovative-reveal].is-visible { opacity: 1; transform: translateY(0); }

/* --------------------------------------------------------------------------
   Responsive Layout
   -------------------------------------------------------------------------- */
@media (max-width: 991px) {
  .innovative-community-grid { grid-template-columns: repeat(2, 1fr); gap: 18px; }
  .innovative-timeline-line { display: none; }
  .innovative-timeline-grid { grid-template-columns: repeat(2, 1fr); gap: 20px; }
  .innovative-timeline-content { height: auto; }
}

@media (max-width: 767px) {
  .innovative-hero { min-height: 360px; padding: 90px 0 65px; }
  .innovative-hero-title { font-size: 28px; }
  .innovative-title { font-size: 24px; }
  .innovative-closing-tagline { font-size: 24px; }
  .innovative-community-grid { grid-template-columns: 1fr; }
  .innovative-timeline-grid { grid-template-columns: 1fr; }
}
</style>
@endpush

@section('content')

<!-- ======================================================================
     HERO (upgraded — gradient overlay, typography & container)
     ====================================================================== -->
<section class="innovative-hero" style="background-image: url('{{ asset('images/banners/upsc1.avif') }}');">
    <div class="innovative-hero-overlay"></div>
    <div class="container">
        <div class="innovative-hero-content" data-innovative-reveal>
            <h1 class="innovative-hero-title">Innovation, Livelihoods &amp; Inclusive Empowerment</h1>
        </div>
    </div>
</section>
<!-- ./ hero -->

<!-- ============================================= -->
<!-- SECTION 1: VISION & INTRO -->
<!-- ============================================= -->
<section class="pt-80 pb-60">
    <div class="container">
        <div class="text-center" style="max-width: 760px; margin: 0 auto 40px;">
            <div class="innovative-eyebrow"><i class="fa fa-lightbulb-o"></i> Our Vision &amp; Commitment</div>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="350ms">Creating Pathways to Opportunity, Dignity and Self-Reliance</h2>
        </div>

        <div class="innovative-intro-media wow fade-in-bottom" data-wow-delay="450ms" style="height: 380px; margin-bottom: 36px;">
            <img src="{{ asset('images/about/about-img-1.jpg') }}" alt="Innovation, Livelihoods & Inclusive Empowerment">
            <div class="innovative-intro-badge">
                <i class="fa fa-rocket"></i>
                <div>
                    <h5>Enterprise &amp; Growth Initiative</h5>
                    <span>Grounded in Skills &amp; Sustainable Independence</span>
                </div>
            </div>
        </div>

        <div class="innovative-intro-card wow fade-in-bottom" data-wow-delay="550ms" style="max-width: 980px; margin: 0 auto;">
            <p class="innovative-intro-lead">Education and environmental awareness matter most when they translate into real, sustained opportunity. This platform bridges the divide between classroom learning and economic self-sufficiency — equipping youth, women, and underserved communities with market-aligned skills, venture incubation, and mentorship.</p>
            <p class="innovative-intro-text">We work directly with individuals and grassroots collectives who are ready to build something of their own, providing practical tools, continuous mentorship, and enterprise support to make economic independence a lasting reality.</p>
        </div>
    </div>
</section>
<!-- ./ intro -->

<!-- ============================================= -->
<!-- SECTION 2: FOCUS AREAS -->
<!-- ============================================= -->
@php
    $focusAreas = [
        ['icon' => 'fa-rocket',      'title' => 'Entrepreneurship & Incubation',       'desc' => 'Practical venture validation, business modeling, and mentorship to launch viable enterprises.'],
        ['icon' => 'fa-line-chart',  'title' => 'Financial Literacy & Credit',         'desc' => 'Essential money management, digital banking, and credit access for long-term independence.'],
        ['icon' => 'fa-briefcase',   'title' => 'Market-Aligned Skill Building',       'desc' => 'Vocational and tech-enabled workplace-readiness training mapped to active industry hiring.'],
        ['icon' => 'fa-users',       'title' => 'Inclusive Empowerment',               'desc' => 'Dedicated empowerment tracks for women, persons with disabilities, and underserved groups.'],
        ['icon' => 'fa-lightbulb-o', 'title' => 'Applied Innovation & Prototyping',    'desc' => 'Hands-on problem-solving labs that turn grassroots ideas into scalable, real-world solutions.'],
        ['icon' => 'fa-handshake-o', 'title' => 'Grassroots Partnerships',             'desc' => 'Working alongside local organizations and industry partners to expand livelihood reach.'],
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
</div>
<!-- ./ focus-areas -->

<!-- ======================================================================
     SECTION 3: IMPACT STATISTICS
     ====================================================================== -->
@php
    $stats = [
        ['icon' => 'fa-graduation-cap', 'count' => '5,000+', 'title' => 'Candidates Skilled',    'desc' => 'Trained in high-demand vocational & digital skills'],
        ['icon' => 'fa-rocket',         'count' => '350+',   'title' => 'Micro-Ventures',        'desc' => 'Incubated and supported toward self-reliance'],
        ['icon' => 'fa-check-circle',   'count' => '85%',    'title' => 'Livelihood Placement',  'desc' => 'Placed in sustainable employment or self-employed'],
        ['icon' => 'fa-handshake-o',   'count' => '40+',    'title' => 'Partner Institutions',  'desc' => 'Industry collaborators, NGOs & local SHGs'],
    ];
@endphp

<section class="innovative-stats-section">
    <div class="container">
        <div class="row g-4">
            @foreach ($stats as $index => $stat)
                <div class="col-lg-3 col-sm-6" data-innovative-reveal style="transition-delay: {{ $index * 100 }}ms;">
                    <div class="innovative-stat-card">
                        <div class="innovative-stat-icon"><i class="fa {{ $stat['icon'] }}"></i></div>
                        <div class="innovative-stat-number">{{ $stat['count'] }}</div>
                        <div class="innovative-stat-title">{{ $stat['title'] }}</div>
                        <p class="innovative-stat-desc">{{ $stat['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ./ impact stats -->

<!-- ======================================================================
     SECTION 4: WHO IT SERVES (Community & Changemaker Cards)
     ====================================================================== -->
@php
    $audiences = [
        ['icon' => 'fa-rocket',      'title' => 'Aspiring Entrepreneurs',            'desc' => 'Driven individuals and innovators ready to build, launch, and scale sustainable community ventures.'],
        ['icon' => 'fa-briefcase',   'title' => 'Unemployed & Underemployed Youth',   'desc' => 'Youth seeking high-impact, practical skill certification for immediate workplace employability.'],
        ['icon' => 'fa-female',      'title' => 'Women & Underserved Groups',        'desc' => 'Targeted incubation and capability development so ability and grit define lifelong outcomes.'],
        ['icon' => 'fa-map-marker',  'title' => 'Rural & Grassroots Communities',    'desc' => 'Decentralized livelihood hubs bringing enterprise support directly to local districts.'],
    ];
@endphp

<section class="pt-80 pb-80">
    <div class="container">
        <div class="innovative-section-head" data-innovative-reveal>
            <div class="innovative-eyebrow"><i class="fa fa-handshake-o"></i> Ecosystem</div>
            <h2 class="innovative-title">Builders, Earners &amp; Changemakers</h2>
            <p class="innovative-subtitle">Empowering individuals and communities with the capabilities, connections, and confidence to build enduring prosperity.</p>
        </div>

        <div class="innovative-community-grid">
            @foreach ($audiences as $idx => $audience)
                <div class="innovative-community-card" data-innovative-reveal style="transition-delay: {{ $idx * 100 }}ms;">
                    <div class="innovative-community-icon"><i class="fa {{ $audience['icon'] }}"></i></div>
                    <h4 class="innovative-community-title">{{ $audience['title'] }}</h4>
                    <p class="innovative-community-desc">{{ $audience['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ./ who it serves -->

<!-- ======================================================================
     SECTION 5: THE IMPACT JOURNEY (Interactive Timeline)
     ====================================================================== -->
@php
    $journeySteps = [
        ['num' => '01', 'title' => 'Talent Discovery',       'subtitle' => 'Phase I',   'desc' => 'Identifying individual aspirations, market opportunities, and aptitude pathways.'],
        ['num' => '02', 'title' => 'Skill Incubation',       'subtitle' => 'Phase II',  'desc' => 'Intensive hands-on training, financial literacy, and digital tool mastery.'],
        ['num' => '03', 'title' => 'Market & Capital Link',  'subtitle' => 'Phase III', 'desc' => 'Connecting builders to mentorship, credit access, and active industry hiring channels.'],
        ['num' => '04', 'title' => 'Self-Reliance',          'subtitle' => 'Phase IV',  'desc' => 'Achieving stable, dignified livelihood generation and scaling community enterprises.'],
    ];
@endphp

<section class="innovative-timeline-section pt-80 pb-80">
    <div class="container">
        <div class="innovative-section-head" data-innovative-reveal>
            <div class="innovative-eyebrow"><i class="fa fa-road"></i> Strategic Pathway</div>
            <h2 class="innovative-title">From Talent to Self-Reliance</h2>
            <p class="innovative-subtitle">A structured, milestone-driven journey turning latent talent and ideas into thriving livelihoods.</p>
        </div>

        <div class="innovative-timeline-wrapper">
            <div class="innovative-timeline-line"></div>
            <div class="innovative-timeline-grid">
                @foreach ($journeySteps as $k => $step)
                    <div class="innovative-timeline-item" data-innovative-reveal style="transition-delay: {{ $k * 120 }}ms;">
                        <div class="innovative-timeline-node">{{ $step['num'] }}</div>
                        <div class="innovative-timeline-content">
                            <div class="innovative-timeline-step">{{ $step['subtitle'] }}</div>
                            <h4 class="innovative-timeline-title">{{ $step['title'] }}</h4>
                            <p class="innovative-timeline-desc">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ./ journey timeline -->

<!-- ======================================================================
     SECTION 6: CLOSING CTA (High-Contrast, Receptive Design)
     ====================================================================== -->
<section class="container my-5">
    <div class="innovative-closing-section" style="background-image: url('{{ asset('images/about/about-img-1.jpg') }}');" data-innovative-reveal>
        <div class="innovative-closing-overlay"></div>
        <div class="innovative-closing-content text-center">
            <div class="innovative-closing-eyebrow"><i class="fa fa-rocket"></i> Ready to Build Something?</div>
            <h2 class="innovative-closing-tagline">Turn Your Skills &amp; Vision Into a Thriving Livelihood</h2>
            <p class="innovative-closing-desc">Whether you are an aspiring entrepreneur, an employer looking to recruit skilled candidates, or a partner seeking to foster grassroots prosperity — join hands with us today.</p>
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
    // [data-innovative-reveal] together.
    var selectors = '[data-reveal], [data-innovative-reveal]';
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