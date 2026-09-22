@extends('layouts.app')

@section('title', 'Climate, Environment & Sustainable Development | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@push('styles')
<style>
/* ==========================================================================
   Climate, Environment & Sustainable Development Styles
   Uses existing theme variables from main.css:
   --sambhavam-teal, --sambhavam-blue, --sambhavam-gold,
   --ed-color-heading-primary, --ed-color-text-body, --ed-color-grey-1, --ed-color-border-1
   ========================================================================== */

.climate-page {
  background-color: var(--ed-color-grey-1);
  color: var(--ed-color-text-body);
  font-family: var(--ed-ff-body, 'Outfit', sans-serif);
}

/* --------------------------------------------------------------------------
   Section Common Utilities
   -------------------------------------------------------------------------- */
.climate-section {
  padding: 80px 0;
  position: relative;
}

.climate-section-sm {
  padding: 50px 0;
}

.climate-section-head {
  text-align: center;
  max-width: 760px;
  margin: 0 auto 50px;
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
  font-size: 36px;
  font-weight: 700;
  line-height: 1.25;
  margin-bottom: 16px;
  letter-spacing: -0.3px;
}

.climate-subtitle {
  color: var(--ed-color-text-body);
  font-size: 16px;
  line-height: 1.65;
  margin: 0;
}

/* --------------------------------------------------------------------------
   Hero Section Enhancements
   -------------------------------------------------------------------------- */
.climate-hero {
  position: relative;
  min-height: 440px;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center;
  padding: 110px 0 90px;
  overflow: hidden;
}

.climate-hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, rgba(3, 72, 97, 0.94) 0%, rgba(1, 109, 119, 0.88) 100%);
  z-index: 1;
}

.climate-hero-content {
  position: relative;
  z-index: 2;
  max-width: 840px;
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

.climate-hero-badge i {
  color: var(--sambhavam-gold);
}

.climate-hero-title {
  color: #FFFFFF;
  font-size: 44px;
  font-weight: 700;
  line-height: 1.22;
  margin-bottom: 18px;
}

.climate-hero-desc {
  color: rgba(255, 255, 255, 0.9);
  font-size: 17.5px;
  line-height: 1.65;
  max-width: 720px;
  margin: 0 auto 26px;
}

.climate-breadcrumb {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: rgba(0, 0, 0, 0.2);
  padding: 8px 22px;
  border-radius: 50px;
  font-size: 14px;
}

.climate-breadcrumb a {
  color: rgba(255, 255, 255, 0.85);
  text-decoration: none;
  transition: all 0.3s ease;
}

.climate-breadcrumb a:hover {
  color: #FFFFFF;
}

.climate-breadcrumb .sep {
  color: rgba(255, 255, 255, 0.4);
}

.climate-breadcrumb .current {
  color: var(--sambhavam-gold);
  font-weight: 600;
}

/* --------------------------------------------------------------------------
   Introduction Section (Editorial Layout)
   -------------------------------------------------------------------------- */
.climate-intro-card {
  background: #FFFFFF;
  border-radius: 20px;
  border: 1px solid var(--ed-color-border-1);
  padding: 40px;
  box-shadow: 0 10px 30px rgba(3, 72, 97, 0.06);
}

.climate-intro-media {
  position: relative;
  border-radius: 16px;
  overflow: hidden;
  height: 100%;
  min-height: 360px;
  box-shadow: 0 10px 25px rgba(1, 109, 119, 0.12);
}

.climate-intro-media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.climate-intro-media:hover img {
  transform: scale(1.04);
}

.climate-intro-badge {
  position: absolute;
  bottom: 20px;
  left: 20px;
  background: rgba(3, 72, 97, 0.92);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  color: #FFFFFF;
  padding: 12px 18px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  gap: 12px;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.climate-intro-badge i {
  font-size: 22px;
  color: var(--sambhavam-gold);
}

.climate-intro-badge h5 {
  font-size: 14.5px;
  font-weight: 700;
  margin: 0;
  color: #FFFFFF;
}

.climate-intro-badge span {
  font-size: 12px;
  opacity: 0.85;
}

.climate-intro-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
  padding-left: 15px;
}

.climate-intro-lead {
  font-size: 17px;
  color: var(--sambhavam-teal);
  font-weight: 600;
  line-height: 1.6;
  margin-bottom: 16px;
}

.climate-intro-text {
  font-size: 15px;
  color: var(--ed-color-text-body);
  line-height: 1.7;
  margin-bottom: 24px;
}

.climate-points {
  display: grid;
  grid-template-columns: 1fr;
  gap: 14px;
}

.climate-point {
  display: flex;
  align-items: flex-start;
  gap: 14px;
  padding: 14px 16px;
  background: var(--ed-color-grey-1);
  border-radius: 12px;
  border: 1px solid var(--ed-color-border-1);
  transition: all 0.3s ease;
}

.climate-point:hover {
  background: #FFFFFF;
  border-color: var(--sambhavam-teal);
  transform: translateX(4px);
  box-shadow: 0 4px 15px rgba(1, 109, 119, 0.08);
}

.climate-point-icon {
  width: 34px;
  height: 34px;
  border-radius: 50%;
  background: var(--sambhavam-teal);
  color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  flex-shrink: 0;
}

.climate-point h5 {
  font-size: 15px;
  font-weight: 700;
  color: var(--ed-color-heading-primary);
  margin: 0 0 3px 0;
}

.climate-point p {
  font-size: 13px;
  color: var(--ed-color-text-body);
  margin: 0;
  line-height: 1.5;
}

/* --------------------------------------------------------------------------
   Impact Statistics Section
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
  top: 0;
  left: 0;
  right: 0;
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

.climate-stat-card:hover::before {
  opacity: 1;
}

.climate-stat-icon {
  width: 54px;
  height: 54px;
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
  font-size: 36px;
  font-weight: 800;
  color: var(--sambhavam-blue);
  line-height: 1.1;
  margin-bottom: 6px;
}

.climate-stat-title {
  font-size: 15.5px;
  font-weight: 700;
  color: var(--ed-color-heading-primary);
  margin-bottom: 4px;
}

.climate-stat-desc {
  font-size: 13px;
  color: var(--ed-color-text-body);
  margin: 0;
}

/* --------------------------------------------------------------------------
   Focus Areas Grid Section
   -------------------------------------------------------------------------- */
.climate-focus-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 26px;
}

.climate-card {
  background: #FFFFFF;
  border: 1px solid var(--ed-color-border-1);
  border-radius: 16px;
  padding: 34px 28px;
  box-shadow: 0 8px 24px rgba(3, 72, 97, 0.05);
  transition: all 0.35s ease;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
}

.climate-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 16px 36px rgba(3, 72, 97, 0.12);
  border-color: rgba(1, 109, 119, 0.35);
}

.climate-card-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 22px;
}

.climate-card-icon {
  width: 56px;
  height: 56px;
  border-radius: 14px;
  background: rgba(1, 109, 119, 0.08);
  color: var(--sambhavam-teal);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  border: 1px solid rgba(1, 109, 119, 0.15);
  transition: all 0.3s ease;
}

.climate-card:hover .climate-card-icon {
  background: linear-gradient(135deg, var(--sambhavam-blue) 0%, var(--sambhavam-teal) 100%);
  color: #FFFFFF;
  transform: scale(1.06) rotate(-3deg);
  box-shadow: 0 8px 20px rgba(1, 109, 119, 0.25);
}

.climate-card-number {
  font-size: 22px;
  font-weight: 800;
  color: rgba(3, 72, 97, 0.18);
  transition: all 0.3s ease;
}

.climate-card:hover .climate-card-number {
  color: var(--sambhavam-gold);
}

.climate-card-title {
  font-size: 19px;
  font-weight: 700;
  color: var(--ed-color-heading-primary);
  margin-bottom: 10px;
  line-height: 1.35;
  transition: all 0.3s ease;
}

.climate-card:hover .climate-card-title {
  color: var(--sambhavam-teal);
}

.climate-card-desc {
  font-size: 14px;
  color: var(--ed-color-text-body);
  line-height: 1.65;
  margin-bottom: 20px;
}

.climate-card-footer {
  padding-top: 14px;
  border-top: 1px solid var(--ed-color-border-1);
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.climate-card-badge {
  font-size: 11.5px;
  font-weight: 600;
  color: var(--sambhavam-teal);
  background: rgba(1, 109, 119, 0.08);
  padding: 3px 10px;
  border-radius: 20px;
}

.climate-card-link {
  font-size: 13px;
  font-weight: 600;
  color: var(--sambhavam-blue);
  display: inline-flex;
  align-items: center;
  gap: 5px;
  text-decoration: none;
  transition: all 0.3s ease;
}

.climate-card-link:hover {
  color: var(--sambhavam-teal);
}

.climate-card-link i {
  transition: transform 0.3s ease;
}

.climate-card:hover .climate-card-link i {
  transform: translateX(4px);
}

/* --------------------------------------------------------------------------
   Who It Serves (Community Section)
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
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: var(--sambhavam-teal);
  transition: all 0.3s ease;
}

.climate-community-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 14px 32px rgba(3, 72, 97, 0.1);
  border-color: var(--sambhavam-teal);
}

.climate-community-card:hover::before {
  background: var(--sambhavam-gold);
}

.climate-community-icon {
  width: 58px;
  height: 58px;
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
   The Journey Section (Interactive Timeline)
   -------------------------------------------------------------------------- */
.climate-timeline-section {
  background: #FFFFFF;
  border-top: 1px solid var(--ed-color-border-1);
  border-bottom: 1px solid var(--ed-color-border-1);
}

.climate-timeline-wrapper {
  position: relative;
  padding: 30px 0 10px;
}

.climate-timeline-line {
  position: absolute;
  top: 60px;
  left: 6%;
  right: 6%;
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

.climate-timeline-item {
  text-align: center;
  position: relative;
}

.climate-timeline-node {
  width: 52px;
  height: 52px;
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

.climate-timeline-desc {
  font-size: 13px;
  color: var(--ed-color-text-body);
  line-height: 1.5;
  margin: 0;
}

/* --------------------------------------------------------------------------
   Closing Section Overrides
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
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, rgba(3, 72, 97, 0.94) 0%, rgba(1, 109, 119, 0.88) 100%);
  z-index: 1;
}

.climate-closing-content {
  position: relative;
  z-index: 2;
  max-width: 720px;
  margin: 0 auto;
}

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
  font-size: 36px;
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

/* --------------------------------------------------------------------------
   Scroll Animations
   -------------------------------------------------------------------------- */
[data-climate-reveal] {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.65s cubic-bezier(0.2, 0.8, 0.2, 1), transform 0.65s cubic-bezier(0.2, 0.8, 0.2, 1);
  will-change: opacity, transform;
}

[data-climate-reveal].is-visible {
  opacity: 1;
  transform: translateY(0);
}

/* --------------------------------------------------------------------------
   Responsive Breakpoints
   -------------------------------------------------------------------------- */
@media (max-width: 991px) {
  .climate-section {
    padding: 60px 0;
  }
  .climate-focus-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }
  .climate-community-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 18px;
  }
  .climate-intro-card {
    padding: 28px;
  }
  .climate-intro-content {
    padding-left: 0;
    margin-top: 28px;
  }
  .climate-timeline-line {
    display: none;
  }
  .climate-timeline-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }
  .climate-timeline-content {
    height: auto;
  }
}

@media (max-width: 767px) {
  .climate-hero {
    min-height: 380px;
    padding: 90px 0 70px;
  }
  .climate-hero-title {
    font-size: 30px;
  }
  .climate-title {
    font-size: 26px;
  }
  .climate-closing-tagline {
    font-size: 26px;
  }
  .climate-focus-grid {
    grid-template-columns: 1fr;
  }
  .climate-community-grid {
    grid-template-columns: 1fr;
  }
  .climate-timeline-grid {
    grid-template-columns: 1fr;
  }
  .climate-intro-card {
    padding: 20px 16px;
  }
}
</style>
@endpush

@section('content')

<div class="climate-page">

    <!-- ======================================================================
         SECTION 1: HERO SECTION
         ====================================================================== -->
    <section class="climate-hero" style="background-image: url('{{ asset('images/banners/upsc1.avif') }}');">
        <div class="climate-hero-overlay"></div>
        <div class="container">
            <div class="climate-hero-content" data-climate-reveal>
                <div class="climate-hero-badge">
                    <i class="fa fa-leaf"></i>
                    <span>Social Impact Programmes</span>
                </div>
                <h1 class="climate-hero-title">Climate, Environment &amp; Sustainable Development</h1>
                <p class="climate-hero-desc">
                    Empowering the next generation of changemakers through scientific literacy, grassroots conservation, and community-driven climate resilience.
                </p>
                <div class="climate-breadcrumb">
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                    <span class="sep">/</span>
                    <a href="{{ url('/') }}">Social Impact Programmes</a>
                    <span class="sep">/</span>
                    <span class="current">Climate &amp; Environment</span>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ hero -->

    <!-- ======================================================================
         SECTION 2: EDITORIAL INTRODUCTION SECTION
         ====================================================================== -->
    <section class="climate-section">
        <div class="container">
            <div class="climate-intro-card" data-climate-reveal>
                <div class="row align-items-center g-4">
                    <div class="col-lg-6">
                        <div class="climate-intro-media">
                            <img src="{{ asset('images/about/climate.webp') }}" alt="Climate, Environment & Sustainable Development" loading="lazy">
                            <div class="climate-intro-badge">
                                <i class="fa fa-globe"></i>
                                <div>
                                    <h5>Earth First Initiative</h5>
                                    <span>Grounded in Evidence &amp; Action</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="climate-intro-content">
                            <div class="climate-eyebrow">
                                <i class="fa fa-leaf"></i> Our Vision &amp; Commitment
                            </div>
                            <h2 class="climate-title">Advancing Solutions for a Healthier, More Resilient Planet</h2>
                            <p class="climate-intro-lead">
                                The learners we prepare today will inherit the environment we leave behind.
                            </p>
                            <p class="climate-intro-text">
                                This platform brings environmental experts, researchers, and local communities together to build science-based, scalable responses to climate and sustainability challenges across India.
                            </p>
                            
                            <div class="climate-points">
                                <div class="climate-point">
                                    <div class="climate-point-icon"><i class="fa fa-check"></i></div>
                                    <div>
                                        <h5>Practical, Local &amp; Lasting</h5>
                                        <p>Designing targeted environmental conservation models tailored to regional realities.</p>
                                    </div>
                                </div>
                                <div class="climate-point">
                                    <div class="climate-point-icon"><i class="fa fa-users"></i></div>
                                    <div>
                                        <h5>Youth-Led Stewardship</h5>
                                        <p>Moving beyond classroom lectures to hands-on climate problem-solving and field action.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ intro -->

    <!-- ======================================================================
         SECTION 3: IMPACT STATISTICS SECTION
         ====================================================================== -->
    @php
        $stats = [
            ['icon' => 'fa-bullhorn', 'count' => '50+',     'title' => 'Climate Programs',      'desc' => 'Conducted across institutions & communities'],
            ['icon' => 'fa-users',    'count' => '25,000+', 'title' => 'Youth & Citizens',      'desc' => 'Engaged in active environmental action'],
            ['icon' => 'fa-flask',    'count' => '15+',     'title' => 'Research Partners',     'desc' => 'Institutions & environmental think-tanks'],
            ['icon' => 'fa-tree',     'count' => '100+',    'title' => 'Grassroots Projects',   'desc' => 'Driving localized ecological preservation'],
        ];
    @endphp

    <section class="climate-stats-section">
        <div class="container">
            <div class="row g-4">
                @foreach ($stats as $index => $stat)
                    <div class="col-lg-3 col-sm-6" data-climate-reveal style="transition-delay: {{ $index * 100 }}ms;">
                        <div class="climate-stat-card">
                            <div class="climate-stat-icon">
                                <i class="fa {{ $stat['icon'] }}"></i>
                            </div>
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
         SECTION 4: FOCUS AREAS (PREMIUM CARDS)
         ====================================================================== -->
    @php
        $focusAreas = [
            [
                'icon' => 'fa-leaf',
                'badge' => 'Education',
                'title' => 'Climate Literacy Programmes',
                'desc' => 'Equipping students, educators, and communities with scientific knowledge on climate science, carbon reduction, and localized environmental impacts.'
            ],
            [
                'icon' => 'fa-tree',
                'badge' => 'Conservation',
                'title' => 'Community Conservation',
                'desc' => 'Executing ground-level, citizen-led interventions focused on watershed management, soil rejuvenation, urban forestry, and native biodiversity preservation.'
            ],
            [
                'icon' => 'fa-flask',
                'badge' => 'Research',
                'title' => 'Research & Expert Partnerships',
                'desc' => 'Fostering active collaborations between leading scientists, environmental think tanks, and policy experts to ground our initiatives in rigorous evidence.'
            ],
            [
                'icon' => 'fa-users',
                'badge' => 'Youth Action',
                'title' => 'Youth Climate Leadership',
                'desc' => 'Empowering young innovators with mentoring, seed support, and platforms to translate their sustainability ideas into high-impact community solutions.'
            ],
            [
                'icon' => 'fa-recycle',
                'badge' => 'Economy',
                'title' => 'Sustainable Livelihoods',
                'desc' => 'Interlinking ecological stewardship with economic empowerment, promoting green jobs, circular waste practices, and sustainable rural enterprises.'
            ],
            [
                'icon' => 'fa-globe',
                'badge' => 'Advocacy',
                'title' => 'Awareness & Civic Advocacy',
                'desc' => 'Mobilizing public discourse and advocacy campaigns to shape informed civic action and progressive environmental policy dialogues.'
            ],
        ];
    @endphp

    <section class="climate-section">
        <div class="container">
            <div class="climate-section-head" data-climate-reveal>
                <div class="climate-eyebrow">
                    <i class="fa fa-th-large"></i> Strategic Pillars
                </div>
                <h2 class="climate-title">Core Focus Areas</h2>
                <p class="climate-subtitle">
                    Our multi-dimensional approach addresses urgent ecological challenges through education, community action, and scalable green innovations.
                </p>
            </div>

            <div class="climate-focus-grid">
                @foreach ($focusAreas as $i => $area)
                    <div class="climate-card" data-climate-reveal style="transition-delay: {{ ($i % 3) * 100 }}ms;">
                        <div>
                            <div class="climate-card-header">
                                <div class="climate-card-icon">
                                    <i class="fa {{ $area['icon'] }}"></i>
                                </div>
                                <span class="climate-card-number">{{ sprintf('%02d', $i + 1) }}</span>
                            </div>
                            <div>
                                <h3 class="climate-card-title">{{ $area['title'] }}</h3>
                                <p class="climate-card-desc">{{ $area['desc'] }}</p>
                            </div>
                        </div>
                        <div class="climate-card-footer">
                            <span class="climate-card-badge">{{ $area['badge'] }}</span>
                            <a href="{{ url('contact') }}" class="climate-card-link">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ./ focus areas -->

    <!-- ======================================================================
         SECTION 5: WHO IT SERVES (COMMUNITY SECTION)
         ====================================================================== -->
    @php
        $audiences = [
            [
                'icon' => 'fa-graduation-cap',
                'title' => 'Students & Youth',
                'desc' => 'Fostering deep climate literacy, environmental leadership skills, and hands-on scientific curiosity from early education.'
            ],
            [
                'icon' => 'fa-users',
                'title' => 'Grassroots Communities',
                'desc' => 'Partnering directly with rural and semi-urban communities to solve water, agriculture, and waste challenges.'
            ],
            [
                'icon' => 'fa-flask',
                'title' => 'Researchers & Experts',
                'desc' => 'Providing real-world testbeds and fieldwork opportunities for ecological data collection and policy prototyping.'
            ],
            [
                'icon' => 'fa-heart',
                'title' => 'Volunteers & Donors',
                'desc' => 'Uniting impassioned individuals and institutions to channel resources directly into impactful ecological change.'
            ],
        ];
    @endphp

    <section class="climate-section-sm" style="padding-bottom: 80px;">
        <div class="container">
            <div class="climate-section-head" data-climate-reveal>
                <div class="climate-eyebrow">
                    <i class="fa fa-handshake-o"></i> Ecosystem
                </div>
                <h2 class="climate-title">Communities, Students &amp; Changemakers</h2>
                <p class="climate-subtitle">
                    Transforming shared concern for our planet into organized, impactful, and lasting collective stewardship.
                </p>
            </div>

            <div class="climate-community-grid">
                @foreach ($audiences as $idx => $audience)
                    <div class="climate-community-card" data-climate-reveal style="transition-delay: {{ $idx * 100 }}ms;">
                        <div class="climate-community-icon">
                            <i class="fa {{ $audience['icon'] }}"></i>
                        </div>
                        <h4 class="climate-community-title">{{ $audience['title'] }}</h4>
                        <p class="climate-community-desc">{{ $audience['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ./ community section -->

    <!-- ======================================================================
         SECTION 6: THE JOURNEY (INTERACTIVE TIMELINE)
         ====================================================================== -->
    @php
        $journeySteps = [
            [
                'num' => '01',
                'title' => 'Awareness',
                'subtitle' => 'Phase I',
                'desc' => 'Cultivating deep scientific literacy and awareness on ecological vulnerability and climate realities.'
            ],
            [
                'num' => '02',
                'title' => 'Action',
                'subtitle' => 'Phase II',
                'desc' => 'Mobilizing students, volunteers, and local citizens into organized on-ground environmental campaigns.'
            ],
            [
                'num' => '03',
                'title' => 'Innovation',
                'subtitle' => 'Phase III',
                'desc' => 'Incubating sustainable technologies, conservation models, and circular economic solutions.'
            ],
            [
                'num' => '04',
                'title' => 'Sustainable Impact',
                'subtitle' => 'Phase IV',
                'desc' => 'Institutionalizing policy reforms, lasting ecological gains, and resilient self-sustaining communities.'
            ],
        ];
    @endphp

    <section class="climate-section climate-timeline-section">
        <div class="container">
            <div class="climate-section-head" data-climate-reveal>
                <div class="climate-eyebrow">
                    <i class="fa fa-road"></i> Strategic Pathway
                </div>
                <h2 class="climate-title">The Impact Journey</h2>
                <p class="climate-subtitle">
                    A coherent, milestone-driven framework turning initial awareness into enduring environmental and social impact.
                </p>
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
         SECTION 7: CLOSING CALL TO ACTION
         ====================================================================== -->
    <section class="container my-5">
        <div class="climate-closing-section" style="background-image: url('{{ asset('images/about/climate.webp') }}');" data-climate-reveal>
            <div class="climate-closing-overlay"></div>
            <div class="climate-closing-content text-center">
                <div class="climate-closing-eyebrow">
                    <i class="fa fa-globe"></i> Join The Movement
                </div>
                <h2 class="climate-closing-tagline">Help Us Build a Resilient &amp; Sustainable Future</h2>
                <p class="climate-closing-desc">
                    Whether you are an institution seeking partnerships, an expert eager to mentor, or a citizen ready to act — your participation accelerates the transition toward a greener tomorrow.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ url('contact') }}" class="ed-primary-btn">
                        <i class="fa fa-handshake-o me-2"></i> Partner With Us
                    </a>
                    <a href="{{ url('donate') }}" class="ed-primary-btn buy-btn">
                        <i class="fa fa-heart me-2"></i> Support This Work
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ closing cta -->

</div>
<!-- ./ climate-page -->

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Scroll reveal animation using IntersectionObserver
    const revealElements = document.querySelectorAll('[data-climate-reveal]');
    
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(el => revealObserver.observe(el));
    } else {
        revealElements.forEach(el => el.classList.add('is-visible'));
    }
});
</script>
@endpush