@extends('layouts.app')

@section('title', 'Scholarship | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')


<section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
       <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Scholarship</h1>
                <h4 class="sub-title"><a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span><a class="inner-page" href="{{ url('scholarships') }}"> Scholarship</a></h4>
            </div>
        </div>
</section>

<div class="schp-page">


{{-- ================= COMMITMENT ================= --}}
<section class="schp-commit">
  <div class="schp-wrap schp-commit-grid">
    <div data-reveal>
      <h2 class="schp-h2">Every learner deserves a fair shot at their future.</h2>
      <p>Cost, geography and circumstance should never decide who gets to learn, prepare and lead. Our scholarship programmes exist to close that gap — connecting deserving students to academic support, mentorship and the SAMBHAVAM Academy ecosystem.</p>
      <p>Support is made possible through partnerships with institutions, corporate CSR programmes and individual donors who believe potential should never go unrealised.</p>
    </div>
    <div class="schp-commit-values" data-reveal>
      <div class="schp-value-pill">
        <span class="dot"></span>
        <div><b>Possibility</b><span>We believe every individual has the potential to grow, contribute and succeed.</span></div>
      </div>
      <div class="schp-value-pill">
        <span class="dot"></span>
        <div><b>Inclusion</b><span>We create equitable opportunities for learners across social, economic and geographic backgrounds.</span></div>
      </div>
      <div class="schp-value-pill">
        <span class="dot"></span>
        <div><b>Impact</b><span>We focus on meaningful, measurable and lasting transformation.</span></div>
      </div>
    </div>
  </div>
</section>

{{-- ================= WHO WE SUPPORT ================= --}}
<section class="schp-who">
  <div class="schp-wrap">
    <div class="schp-section-head" data-reveal>
      <span class="schp-eyebrow">Who Our Scholarships Support</span>
      <h2>Eight pathways. One shared belief in potential.</h2>
    </div>

    <div class="schp-who-grid">
      <div class="schp-who-card" data-reveal>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 8l10-5 10 5-10 5-10-5z"/><path d="M6 10.5V16c0 1.5 3 3 6 3s6-1.5 6-3v-5.5"/></svg>
        <h3>Academic Excellence</h3>
        <p>Students demonstrating strong academic performance and a drive to go further.</p>
      </div>
      <div class="schp-who-card" data-reveal>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/></svg>
        <h3>Competitive Exam Preparation</h3>
        <p>Aspirants preparing for civil services, engineering, medical and other competitive examinations.</p>
      </div>
      <div class="schp-who-card" data-reveal>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19V6a2 2 0 012-2h9l5 5v10a2 2 0 01-2 2H6a2 2 0 01-2-2z"/><path d="M8 11h8M8 15h5"/></svg>
        <h3>Girls' Education</h3>
        <p>Widening access and encouraging girls to pursue their academic and leadership ambitions.</p>
      </div>
      <div class="schp-who-card" data-reveal>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v3M12 21v-3M4.2 6.2l2.1 2.1M17.7 15.7l2.1 2.1M4.2 17.8l2.1-2.1M17.7 8.3l2.1-2.1M3 12h3M18 12h3"/><circle cx="12" cy="12" r="3"/></svg>
        <h3>Rural Students</h3>
        <p>Reaching learners in rural and semi-urban regions with limited access to quality preparation.</p>
      </div>
      <div class="schp-who-card" data-reveal>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="2"/><path d="M12 8v6M6 21l3-7 3 3 3-3 3 7M9 12H6l-1 3M15 12h3l1 3"/></svg>
        <h3>Persons with Disabilities</h3>
        <p>Building accessible, supportive pathways so ability, not circumstance, defines outcomes.</p>
      </div>
      <div class="schp-who-card" data-reveal>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 21V9l8-6 8 6v12"/><path d="M14 21v-6h-4v6"/></svg>
        <h3>First-Generation Learners</h3>
        <p>Students who are the first in their families to pursue higher education, opening a new door.</p>
      </div>
      <div class="schp-who-card" data-reveal>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-7-4.35-9.5-9C1 8 3 4.5 6.5 4.5 9 4.5 12 7 12 7s3-2.5 5.5-2.5C21 4.5 23 8 21.5 12c-2.5 4.65-9.5 9-9.5 9z"/></svg>
        <h3>Orphaned &amp; Vulnerable Children</h3>
        <p>Extending stability, mentorship and academic support to children who need it most.</p>
      </div>
      <div class="schp-who-card" data-reveal>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.9 6.3 6.9.7-5.2 4.6 1.6 6.8L12 16.9l-6.2 3.5 1.6-6.8L2.2 9l6.9-.7z"/></svg>
        <h3>Exceptional Talent &amp; Leadership</h3>
        <p>Learners demonstrating outstanding talent or leadership potential, whatever their background.</p>
      </div>
    </div>
  </div>
</section>

{{-- ================= TWO PATHWAYS ================= --}}
<section class="schp-paths">
  <div class="schp-path schp-path-student" data-reveal>
    <div class="schp-path-inner">
      <span class="schp-eyebrow">For Students</span>
      <h2 class="text-white">Apply for a Scholarship</h2>
      <p>If you're preparing for an examination, pursuing your schooling, or working toward a future you can see but can't yet afford — we want to hear from you. Tell us about your goals and circumstances, and our team will guide you through the next steps.</p>
      <a href="mailto:sambhavamfoundation@gmail.com?subject=Scholarship%20Application" class="schp-btn schp-btn-ink">Start Your Application</a>
    </div>
  </div>
  <div class="schp-path schp-path-donor" data-reveal>
    <div class="schp-path-inner">
      <span class="schp-eyebrow">For Donors &amp; Partners</span>
      <h2>Support a Learner</h2>
      <p>Sponsor a student's education, fund an examination-preparation seat, or partner with us at scale through CSR. Every contribution moves a learner one step further along their journey.</p>
      <a href="mailto:sambhavamfoundation@gmail.com?subject=Support%20a%20Learner" class="schp-btn schp-btn-gold">Become a Supporter</a>
    </div>
  </div>
</section>

{{-- ================= HOW IT WORKS ================= --}}
<section class="schp-how">
  <div class="schp-wrap">
    <div class="schp-section-head" data-reveal>
      <span class="schp-eyebrow">How It Works</span>
      <h2>From application to opportunity.</h2>
    </div>

    <div class="schp-ladder">
      <div class="schp-rung" data-reveal>
        <div class="schp-rung-num">01</div>
        <div>
          <h3>Share your story</h3>
          <p>Tell us about your academic goals, examination plans and the circumstances that make support meaningful for you.</p>
        </div>
      </div>
      <div class="schp-rung" data-reveal>
        <div class="schp-rung-num">02</div>
        <div>
          <h3>Eligibility &amp; review</h3>
          <p>Our academic team reviews your application against our scholarship priorities — merit, need, inclusion and potential.</p>
        </div>
      </div>
      <div class="schp-rung" data-reveal>
        <div class="schp-rung-num">03</div>
        <div>
          <h3>Mentor conversation</h3>
          <p>Shortlisted students connect with a mentor to discuss goals, the right academic vertical, and the support available.</p>
        </div>
      </div>
      <div class="schp-rung" data-reveal>
        <div class="schp-rung-num">04</div>
        <div>
          <h3>Onboarding &amp; ongoing support</h3>
          <p>Selected learners are onboarded into SAMBHAVAM Academy with progress tracking, mentoring reviews and parent engagement along the way.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ================= WHERE IT TAKES YOU ================= --}}
<section class="schp-verticals">
  <div class="schp-wrap">
    <div class="schp-section-head" data-reveal>
      <span class="schp-eyebrow">Where a Scholarship Can Take You</span>
      <h2>Access to every academic vertical at SAMBHAVAM Academy.</h2>
    </div>
    <div class="schp-vert-row">
      <div class="schp-vert-card" data-reveal>
        <span class="tag">Vertical 01</span>
        <h4>Civil Services &amp; Public Leadership</h4>
        <p>UPSC, MPSC and public-service examination preparation.</p>
      </div>
      <div class="schp-vert-card" data-reveal>
        <span class="tag">Vertical 02</span>
        <h4>Engineering &amp; Technology</h4>
        <p>MHT-CET, JEE Main &amp; Advanced, STEM foundations.</p>
      </div>
      <div class="schp-vert-card" data-reveal>
        <span class="tag">Vertical 03</span>
        <h4>Medical &amp; Health Sciences</h4>
        <p>NEET-UG and foundation programmes for medical aspirants.</p>
      </div>
      <div class="schp-vert-card" data-reveal>
        <span class="tag">Vertical 04</span>
        <h4>School Excellence &amp; Foundation</h4>
        <p>Classes VI–X, board exams, Olympiads and scholarship exams.</p>
      </div>
      <div class="schp-vert-card" data-reveal>
        <span class="tag">Vertical 05</span>
        <h4>Global Leadership &amp; Life Skills</h4>
        <p>Communication, leadership and future-ready life skills.</p>
      </div>
    </div>
  </div>
</section>

{{-- ================= IMPACT ================= --}}
<section class="schp-impact">
  <div class="schp-wrap schp-impact-inner" data-reveal>
    <span class="schp-eyebrow" style="color:var(--schp-teal)">Impact</span>
    <h2 class="schp-h2">From Participation to Transformation</h2>
    <p>We aim to measure not only how many students we reach, but how their lives and opportunities improve — through learning gains, examination readiness, scholarships mobilised and leaders developed. Verified programme data will be shared here as it becomes available.</p>
    <div class="schp-impact-tags">
      <span>Learning Improvement</span>
      <span>Examination Readiness</span>
      <span>Scholarships Mobilised</span>
      <span>Student Progression</span>
      <span>Leaders Developed</span>
    </div>
  </div>
</section>

{{-- ================= FINAL CTA ================= --}}
<section class="schp-cta m-5">
  <div class="schp-wrap schp-cta-inner" data-reveal>
    <span class="schp-eyebrow" style="color:var(--schp-gold-2)">Help Turn Potential Into Opportunity</span>
    <h2 class="schp-h2">Your Journey Can Begin Today.</h2>
    <p>Whether you're applying for support or offering it, every step here creates a new possibility.</p>
    <div class="schp-cta-btns">
      <a href="mailto:sambhavamfoundation@gmail.com?subject=Scholarship%20Application" class="schp-btn schp-btn-gold">Apply for a Scholarship</a>
      <a href="mailto:sambhavamfoundation@gmail.com?subject=Support%20a%20Learner" class="schp-btn schp-btn-outline">Support a Learner</a>
    </div>
    <div class="schp-cta-contact">
      <a href="mailto:sambhavamfoundation@gmail.com">sambhavamfoundation@gmail.com</a>
      <a href="tel:+912249789869">+91 22 4978 9869</a>
      <a href="tel:+918850332700">+91 88503 32700</a>
    </div>
  </div>
</section>

</div>

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

@endsection