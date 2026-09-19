@extends('layouts.app')

@section('title', 'Education, Skills & Future Readiness | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

<section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Education, Skills & Future Readiness</h1>
            <h4 class="sub-title">
                <a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span>
                <a class="inner-page" href=""> Social Impact Programmes</a><span class="icon">/</span>
                <a class="inner-page" href="#"> Education, Skills & Future Readiness</a>
            </h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->

<!-- ============================================= -->
<!-- SECTION 1: INTRO -->
<!-- Plain editorial split, no boxed cards — a lede on the left, two -->
<!-- statements on the right separated by a hairline rule. -->
<!-- ============================================= -->
<section class="pt-80 pb-50">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-5">
                <h2 style="color: var(--ed-color-heading-primary); font-size: 34px; line-height: 1.3; margin: 0;">
                    Where SAMBHAVAM's work begins: with the learner.
                </h2>
            </div>
            <div class="col-lg-7">
                <div style="border-left: 2px solid #E0E5EB; padding-left: 32px;">
                    <div style="padding-bottom: 28px; margin-bottom: 28px; border-bottom: 1px dashed #E0E5EB;">
                        <span style="display:block; color: var(--ed-color-theme-primary); font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: .5px; margin-bottom: 8px;">Platform 01</span>
                        <h3 style="font-size: 20px; color: var(--ed-color-heading-primary); margin-bottom: 10px;">Helping Learners Succeed — Academically, Professionally, Personally</h3>
                        <p style="margin: 0; color: var(--ed-color-text-body);">This is where SAMBHAVAM's work begins: with the learner. Through SAMBHAVAM Academy and our scholarship programmes, we take students from school foundations through competitive examinations to future-ready skills.</p>
                    </div>
                    <div>
                        <span style="display:block; color: var(--sambhavam-teal); font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: .5px; margin-bottom: 8px;">Our Approach</span>
                        <h3 style="font-size: 20px; color: var(--ed-color-heading-primary); margin-bottom: 10px;">Not Just Exam-Passers — Confident, Capable Individuals</h3>
                        <p style="margin: 0; color: var(--ed-color-text-body);">Every programme under this platform is built around one idea: education should open doors, not just fill in answer sheets. That means mentorship, progress tracking and leadership development alongside academics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ intro -->

<div class="schp-page">

<!-- ============================================= -->
<!-- SECTION 2: FOCUS AREAS -->
<!-- (REUSES .schp-verticals / .schp-vert-list index-row pattern already defined
     in main.css — same treatment as the Academic Verticals block, so we get
     an editorial list instead of another repeated card grid) -->
<!-- ============================================= -->
<section class="schp-verticals">
    <div class="schp-wrap">
        <div class="schp-section-head" data-reveal>
            <span class="schp-eyebrow">Focus Areas</span>
            <h2>What This Platform Covers</h2>
        </div>

        <div class="schp-vert-list">

            <a href="{{ url('/#programmes') }}" class="schp-vert-row" data-reveal>
                <span class="schp-vert-num">01</span>
                <span class="schp-vert-icon"><i class="fa fa-landmark"></i></span>
                <span class="schp-vert-text">
                    <h4>Competitive Exam Preparation</h4>
                    <p>Mentor-led coaching for UPSC, JEE and NEET-UG — structured GS foundations, full-length test series with analytics, and one-on-one doubt clearing across all Sambhavam Academy centres.</p>
                </span>
                <i class="fa fa-arrow-right schp-vert-arrow"></i>
            </a>

            <a href="{{ url('/#programmes') }}" class="schp-vert-row" data-reveal>
                <span class="schp-vert-num">02</span>
                <span class="schp-vert-icon"><i class="fa fa-graduation-cap"></i></span>
                <span class="schp-vert-text">
                    <h4>Classes VI–X Foundation</h4>
                    <p>Core-concept building across CBSE, ICSE and State Board — board, NMMS and scholarship exam prep, Olympiad training, and study skills for long-term academic success.</p>
                </span>
                <i class="fa fa-arrow-right schp-vert-arrow"></i>
            </a>

            <a href="{{ url('/#programmes') }}" class="schp-vert-row" data-reveal>
                <span class="schp-vert-num">03</span>
                <span class="schp-vert-icon"><i class="fa fa-lightbulb"></i></span>
                <span class="schp-vert-text">
                    <h4>Future Skills & Leadership</h4>
                    <p>AI, data literacy and coding alongside public speaking and confidence-building — practical, forward-looking programmes backed by scholarships for deserving learners.</p>
                </span>
                <i class="fa fa-arrow-right schp-vert-arrow"></i>
            </a>

        </div>
    </div>
</section>
<!-- ./ focus-areas -->

<!-- ============================================= -->
<!-- SECTION 3: THE JOURNEY -->
<!-- (REUSES .schp-how / .schp-ladder numbered-rung pattern from Scholarships page) -->
<!-- ============================================= -->
<section class="schp-how">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div class="schp-wrap">
                <div class="schp-section-head" data-reveal>
                    <span class="schp-eyebrow">The Journey</span>
                    <h2>From First Concepts to Confident Futures</h2>
                </div>
                <div class="schp-ladder">
                    <div class="schp-rung" data-reveal>
                        <div class="schp-rung-num">01</div>
                        <div><h3>School Foundation</h3><p>Building strong core concepts across Classes VI–X.</p></div>
                    </div>
                    <div class="schp-rung" data-reveal>
                        <div class="schp-rung-num">02</div>
                        <div><h3>Competitive Readiness</h3><p>Structured preparation for UPSC, JEE, NEET-UG and more.</p></div>
                    </div>
                    <div class="schp-rung" data-reveal>
                        <div class="schp-rung-num">03</div>
                        <div><h3>Future Skills</h3><p>AI, coding and leadership training alongside academics.</p></div>
                    </div>
                    <div class="schp-rung" data-reveal>
                        <div class="schp-rung-num">04</div>
                        <div><h3>Career & Leadership</h3><p>Confident, capable individuals ready for what comes next.</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-auto">
                <img src="{{ asset('images/about/journey.jpeg') }}" alt="">
            </div>
    </div>
    </div>
</section>
<!-- ./ journey -->

</div>
<!-- ./ .schp-page -->

<!-- ============================================= -->
<!-- SECTION 4: CLOSING CTA -->
<!-- (REUSES .brand-promise-section plain centered pattern from Home page — lighter than a card/overlay CTA) -->
<!-- ============================================= -->
<section class="brand-promise-section pt-50 pb-80">
    <div class="container text-center">
        <div class="section-heading mb-0" style="max-width: 700px; margin: 0 auto;">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Ready to Begin?</h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="300ms">Explore Programmes at SAMBHAVAM Academy</h2>
            <p class="brand-line wow fade-in-bottom" data-wow-delay="400ms">From Learning to Leadership. From Opportunity to Impact.</p>
            <div class="about-btn mt-30 wow fade-in-bottom" data-wow-delay="500ms">
                <a href="{{ url('/courses') }}" class="ed-primary-btn">Discover Our Programmes</a>
                <a href="{{ url('scholarships') }}" class="ed-primary-btn buy-btn">Apply for a Scholarship</a>
            </div>
        </div>
    </div>
</section>
<!-- ./ closing-cta -->

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