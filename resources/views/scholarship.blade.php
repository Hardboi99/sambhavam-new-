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
      <span class="schp-eyebrow">Our Commitment</span>
      <h2 class="schp-h2">Every learner deserves a fair shot at their future.</h2>
      <p>Cost, geography and circumstance should never decide who gets to learn, prepare and lead. Our scholarship programmes exist to close that gap — connecting deserving students to academic support, mentorship and the SAMBHAVAM Academy ecosystem.</p>
      <p>Support is made possible through partnerships with institutions, corporate CSR programmes and individual donors who believe potential should never go unrealised.</p>
    </div>

    <div class="schp-commit-panel" data-reveal>
      <i class="fa fa-quote-left schp-commit-quote-icon"></i>
      <p class="schp-commit-quote">Potential shouldn't wait for circumstance to catch up. Our job is to close that gap — one learner at a time.</p>
      <div class="schp-commit-values">
        <div class="schp-value-pill">
          <span class="dot"></span>
          <div><b>Possibility</b><span>Every individual has the potential to grow, contribute and succeed.</span></div>
        </div>
        <div class="schp-value-pill">
          <span class="dot"></span>
          <div><b>Inclusion</b><span>Equitable opportunities across social, economic and geographic backgrounds.</span></div>
        </div>
        <div class="schp-value-pill">
          <span class="dot"></span>
          <div><b>Impact</b><span>Meaningful, measurable and lasting transformation.</span></div>
        </div>
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
  @php
    $whoCards = [
      ['n' => '01', 'icon' => '<path d="M2 8l10-5 10 5-10 5-10-5z"/><path d="M6 10.5V16c0 1.5 3 3 6 3s6-1.5 6-3v-5.5"/>', 'title' => 'Academic Excellence', 'desc' => 'Students demonstrating strong academic performance and a drive to go further.'],
      ['n' => '02', 'icon' => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/>', 'title' => 'Competitive Exam Preparation', 'desc' => 'Aspirants preparing for civil services, engineering, medical and other examinations.'],
      ['n' => '03', 'icon' => '<path d="M4 19V6a2 2 0 012-2h9l5 5v10a2 2 0 01-2 2H6a2 2 0 01-2-2z"/><path d="M8 11h8M8 15h5"/>', 'title' => "Girls' Education", 'desc' => 'Widening access and encouraging girls to pursue academic and leadership ambitions.'],
      ['n' => '04', 'icon' => '<path d="M12 3v3M12 21v-3M4.2 6.2l2.1 2.1M17.7 15.7l2.1 2.1M4.2 17.8l2.1-2.1M17.7 8.3l2.1-2.1M3 12h3M18 12h3"/><circle cx="12" cy="12" r="3"/>', 'title' => 'Rural Students', 'desc' => 'Reaching learners in rural and semi-urban regions with limited access to quality prep.'],
      ['n' => '05', 'icon' => '<circle cx="12" cy="5" r="2"/><path d="M12 8v6M6 21l3-7 3 3 3-3 3 7M9 12H6l-1 3M15 12h3l1 3"/>', 'title' => 'Persons with Disabilities', 'desc' => 'Accessible, supportive pathways so ability, not circumstance, defines outcomes.'],
      ['n' => '06', 'icon' => '<path d="M4 21V9l8-6 8 6v12"/><path d="M14 21v-6h-4v6"/>', 'title' => 'First-Generation Learners', 'desc' => 'Students who are the first in their families to pursue higher education.'],
      ['n' => '07', 'icon' => '<path d="M12 21s-7-4.35-9.5-9C1 8 3 4.5 6.5 4.5 9 4.5 12 7 12 7s3-2.5 5.5-2.5C21 4.5 23 8 21.5 12c-2.5 4.65-9.5 9-9.5 9z"/>', 'title' => 'Orphaned & Vulnerable Children', 'desc' => 'Extending stability, mentorship and academic support to children who need it most.'],
      ['n' => '08', 'icon' => '<path d="M12 2l2.9 6.3 6.9.7-5.2 4.6 1.6 6.8L12 16.9l-6.2 3.5 1.6-6.8L2.2 9l6.9-.7z"/>', 'title' => 'Exceptional Talent & Leadership', 'desc' => 'Learners demonstrating outstanding talent or leadership potential, whatever their background.'],
    ];
  @endphp

  @foreach ($whoCards as $i => $card)
    <div class="schp-who-card {{ $i % 2 === 0 ? 'accent-teal' : 'accent-gold' }}" data-reveal>
      <span class="schp-who-num">{{ $card['n'] }}</span>
      <div class="schp-who-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">{!! $card['icon'] !!}</svg>
      </div>
      <h3>{{ $card['title'] }}</h3>
      <p>{{ $card['desc'] }}</p>
    </div>
  @endforeach
</div>
  </div>
</section>

{{-- ================= APPLY / SUPPORT ================= --}}
<section class="schp-action">
  <div class="schp-wrap">
    <div class="schp-action-grid">

      {{-- ===== PRIMARY: APPLY FOR SCHOLARSHIP ===== --}}
      <div class="schp-action-card schp-action-primary" data-reveal>

        <span class="schp-action-badge">Start Here</span>

        <div class="schp-action-head">
          <span class="schp-eyebrow">For Students</span>
          <h2>Apply for a Scholarship</h2>
          <p>Tell us about your goals and circumstances — our academic team will personally guide you through eligibility and next steps.</p>
        </div>

        <form class="schp-action-form" id="scholarshipApplyForm">
          <div class="schp-form-row">
            <div class="schp-form-group">
              <input type="text" id="applyName" name="name" placeholder="Full name" required>
            </div>
            <div class="schp-form-group">
              <input type="tel" id="applyPhone" name="phone" placeholder="Mobile number" required>
            </div>
          </div>

          <div class="schp-form-group">
            <select id="applyVertical" name="vertical" required>
              <option value="">I'm applying for...</option>
              <option value="Civil Services (UPSC/MPSC)">Civil Services (UPSC/MPSC)</option>
              <option value="Engineering (JEE/MHT-CET)">Engineering (JEE/MHT-CET)</option>
              <option value="Medical (NEET-UG)">Medical (NEET-UG)</option>
              <option value="School Foundation (VI-X)">School Foundation (VI–X)</option>
              <option value="Leadership & Life Skills">Leadership &amp; Life Skills</option>
            </select>
          </div>

          <div class="schp-form-group">
            <textarea id="applyMessage" name="message" rows="3" placeholder="Briefly tell us your goals and circumstances" required></textarea>
          </div>

          <button type="submit" class="schp-btn schp-btn-gold schp-action-submit">
            Submit Application <i class="fa fa-arrow-right"></i>
          </button>

          <span class="schp-action-note">We typically respond within 2–3 working days.</span>
        </form>
      </div>

      {{-- ===== SECONDARY: SUPPORT A LEARNER ===== --}}
      <div class="schp-action-card schp-action-secondary" data-reveal>
        <div class="schp-action-head">
          <span class="schp-eyebrow schp-eyebrow-light">For Donors &amp; Partners</span>
          <h2>Support a Learner</h2>
          <p>Sponsor a student's education, fund an examination-preparation seat, or partner with us at scale through CSR.</p>
        </div>

        <a href="mailto:sambhavamfoundation@gmail.com?subject=Support%20a%20Learner" class="schp-btn schp-btn-outline schp-action-support-btn">
          Become a Supporter <i class="fa fa-arrow-right"></i>
        </a>

        <div class="schp-action-contact">
          <a href="mailto:sambhavamfoundation@gmail.com"><i class="fa fa-envelope"></i> sambhavamfoundation@gmail.com</a>
          <a href="tel:+912249789869"><i class="fa fa-phone"></i> +91 22 4978 9869</a>
        </div>
      </div>

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

    <div class="schp-process">
  <div class="schp-process-step" data-reveal>
    <div class="schp-process-num">01</div>
    <h3>Share your story</h3>
    <p>Tell us about your academic goals, examination plans and the circumstances that make support meaningful.</p>
  </div>
  <div class="schp-process-arrow"><i class="fa fa-arrow-right"></i></div>
  <div class="schp-process-step" data-reveal>
    <div class="schp-process-num">02</div>
    <h3>Eligibility &amp; review</h3>
    <p>Our team reviews your application against our priorities — merit, need, inclusion and potential.</p>
  </div>
  <div class="schp-process-arrow"><i class="fa fa-arrow-right"></i></div>
  <div class="schp-process-step" data-reveal>
    <div class="schp-process-num">03</div>
    <h3>Mentor conversation</h3>
    <p>Shortlisted students connect with a mentor to discuss goals and the right academic vertical.</p>
  </div>
  <div class="schp-process-arrow"><i class="fa fa-arrow-right"></i></div>
  <div class="schp-process-step" data-reveal>
    <div class="schp-process-num">04</div>
    <h3>Onboarding &amp; support</h3>
    <p>Selected learners are onboarded into SAMBHAVAM Academy with ongoing progress tracking.</p>
  </div>
</div>
  </div>
</section>

{{-- ================= WHERE IT TAKES YOU ================= --}}
<section class="schp-verticals  ">
  <div class="schp-wrap ">
    <div class="schp-section-head text-center mx-auto" data-reveal>
      <span class="schp-eyebrow">Where a Scholarship Can Take You</span>
      <h2>Access to every academic vertical at SAMBHAVAM Academy.</h2>
    </div>

    <div class="schp-vert-list">

      <div class="schp-vert-row" data-reveal>
        <span class="schp-vert-num">01</span>
        <div class="schp-vert-icon"><i class="fas fa-landmark"></i></div>
        <div class="schp-vert-text">
          <h4>Civil Services &amp; Public Leadership</h4>
          <p>UPSC, MPSC and public-service examination preparation.</p>
        </div>
        <i class="fa fa-arrow-right schp-vert-arrow"></i>
      </div>

      <div class="schp-vert-row" data-reveal>
        <span class="schp-vert-num">02</span>
        <div class="schp-vert-icon"><i class="fa fa-microchip"></i></div>
        <div class="schp-vert-text">
          <h4>Engineering &amp; Technology</h4>
          <p>MHT-CET, JEE Main &amp; Advanced, STEM foundations.</p>
        </div>
        <i class="fa fa-arrow-right schp-vert-arrow"></i>
      </div>

      <div class="schp-vert-row" data-reveal>
        <span class="schp-vert-num">03</span>
        <div class="schp-vert-icon"><i class="fa fa-stethoscope"></i></div>
        <div class="schp-vert-text">
          <h4>Medical &amp; Health Sciences</h4>
          <p>NEET-UG and foundation programmes for medical aspirants.</p>
        </div>
        <i class="fa fa-arrow-right schp-vert-arrow"></i>
      </div>

      <div class="schp-vert-row" data-reveal>
        <span class="schp-vert-num">04</span>
        <div class="schp-vert-icon"><i class="fa fa-graduation-cap"></i></div>
        <div class="schp-vert-text">
          <h4>School Excellence &amp; Foundation</h4>
          <p>Classes VI–X, board exams, Olympiads and scholarship exams.</p>
        </div>
        <i class="fa fa-arrow-right schp-vert-arrow"></i>
      </div>

      <div class="schp-vert-row" data-reveal>
        <span class="schp-vert-num">05</span>
        <div class="schp-vert-icon"><i class="fa fa-user"></i></div>
        <div class="schp-vert-text">
          <h4>Global Leadership &amp; Life Skills</h4>
          <p>Communication, leadership and future-ready life skills.</p>
        </div>
        <i class="fa fa-arrow-right schp-vert-arrow"></i>
      </div>

    </div>
  </div>
</section>

{{-- ================= IMPACT ================= --}}
<section class="schp-impact">
  <div class="schp-wrap" data-reveal>
    <div class="schp-section-head" style="margin: 0 auto 45px; text-align: center;">
      <span class="schp-eyebrow" style="color:var(--schp-teal)">Impact</span>
      <h2 class="schp-h2">From Participation to Transformation</h2>
      <p style="color:#647789; max-width: 700px; margin: 16px auto 0;">We aim to measure not only how many students we reach, but how their lives and opportunities improve. Verified programme data will be shared here as it becomes available.</p>
    </div>

    <div class="schp-impact-grid">
      <div class="schp-impact-card"><i class="fa fa-chart-line"></i><h4>Learning Improvement</h4></div>
      <div class="schp-impact-card"><i class="fa fa-check-circle"></i><h4>Examination Readiness</h4></div>
      <div class="schp-impact-card"><i class="fa fa-graduation-cap"></i><h4>Scholarships Mobilised</h4></div>
      <div class="schp-impact-card"><i class="fa fa-arrow-up"></i><h4>Student Progression</h4></div>
      <div class="schp-impact-card"><i class="fa fa-users"></i><h4>Leaders Developed</h4></div>
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


<script>
(function(){
  var applyForm = document.getElementById('scholarshipApplyForm');
  if (!applyForm) return;

  applyForm.addEventListener('submit', function(e){
    e.preventDefault();

    var name = document.getElementById('applyName').value.trim();
    var phone = document.getElementById('applyPhone').value.trim();
    var vertical = document.getElementById('applyVertical').value;
    var message = document.getElementById('applyMessage').value.trim();

    var body =
      "Hello Sambhavam,%0A%0A" +
      "I would like to apply for a scholarship.%0A%0A" +
      "Name: " + encodeURIComponent(name) + "%0A" +
      "Mobile: " + encodeURIComponent(phone) + "%0A" +
      "Applying For: " + encodeURIComponent(vertical) + "%0A" +
      "Goals/Circumstances: " + encodeURIComponent(message);

    window.open("https://wa.me/919967100926?text=" + body, '_blank');
  });
})();
</script>


@endsection