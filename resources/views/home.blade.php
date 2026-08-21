@extends('layouts.app')

@section('title', 'Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

    <!-- ============================================= -->
    <!-- SECTION 1: HERO BANNER SLIDER -->
    <!-- ============================================= -->
    <section class="hero-banner-slider overflow-hidden mx-3 my-3">
        <div class="swiper hero-banner-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('images/banners/desktop/banner1.jpeg') }}" class="d-md-block d-none bannerwidth" alt="Sambhavam Banner 1">
                    <img src="{{ asset('images/banners/mobile/mobile1.jpeg') }}"  class="d-md-none d-block" alt="Sambhavam Banner mobile 1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/banners/desktop/banner2.png') }}" class="d-md-block d-none bannerwidth" alt="Sambhavam Banner 2">
                    <img src="{{ asset('images/banners/mobile/mobile2.jpeg') }}"  class="d-md-none d-block" alt="Sambhavam Banner mobile 2">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/banners/desktop/banner3.png') }}" class="d-md-block d-none bannerwidth" alt="Sambhavam Banner 3">
                    <img src="{{ asset('images/banners/mobile/mobile3.jpeg') }}"  class="d-md-none d-block" alt="Sambhavam Banner mobile 3">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/banners/desktop/banner4.png') }}" class="d-md-block d-none bannerwidth" alt="Sambhavam Banner 4">
                    <img src="{{ asset('images/banners/mobile/mobile4.jpeg') }}"  class="d-md-none d-block" alt="Sambhavam Banner mobile 4">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/banners/desktop/banner5.png') }}" class="d-md-block d-none bannerwidth" alt="Sambhavam Banner 5">
                    <img src="{{ asset('images/banners/mobile/mobile5.jpeg') }}"  class="d-md-none d-block" alt="Sambhavam Banner mobile 5">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- ./ hero-banner-slider -->

    <!-- ============================================= -->
    <!-- SECTION 2: BRAND PROMISE -->
    <!-- ============================================= -->
    <section class="brand-promise-section pt-50 pb-50">
        <div class="container text-center">
            <div class="section-heading mb-0" style="max-width: 760px; margin: 0 auto;">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Our Brand Promise</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="300ms">Learning That Moves You Forward</h2>
                <p class="wow fade-in-bottom" data-wow-delay="400ms">At SAMBHAVAM, education goes beyond classrooms, examinations and certificates. We create transformative learning experiences that help individuals build strong academic foundations, prepare for competitive careers, develop future-ready skills, explore innovation and entrepreneurship, grow as confident leaders, and contribute meaningfully to society.</p>
                <p class="brand-line wow fade-in-bottom" data-wow-delay="500ms">From Learning to Leadership. From Opportunity to Impact.</p>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- SECTION 3: FOUR IMPACT CARDS -->
    <!-- ============================================= -->
    <section class="impact-cards-section pb-80">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="impact-card wow fade-in-bottom" data-wow-delay="200ms">
                        <h3>Learn</h3>
                        <p>Academic excellence and competitive preparation.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impact-card wow fade-in-bottom" data-wow-delay="300ms">
                        <h3>Innovate</h3>
                        <p>Technology, future skills and problem-solving.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impact-card wow fade-in-bottom" data-wow-delay="400ms">
                        <h3>Lead</h3>
                        <p>Confidence, communication and public leadership.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="impact-card wow fade-in-bottom" data-wow-delay="500ms">
                        <h3>Impact</h3>
                        <p>Climate action, livelihoods and inclusive development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================= -->
    <!-- SECTION 4: SAMBHAVAM ACADEMY -->
    <!-- ============================================= -->
    <section class="about-section-10 pt-60 pb-120" id="academy">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="about-img-wrap-10 mx-auto">
                       <video class="mx-auto vsize" autoplay muted loop playsinline>
                            <source src="{{ asset('videos/academy.mp4') }}" type="video/mp4">
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
                            <a href="#programmes" class="ed-primary-btn">Discover Our Programmes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ academy-section -->

    <!-- Why Sambhavam Academy -->
    <section class="why-academy-section pt-60 pb-120">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Why Sambhavam Academy?</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Empowering Minds. Shaping Leaders.</h2>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-blue wow fade-in-bottom" data-wow-delay="150ms">
                        <span class="why-card-num">01</span>
                        <div class="why-icon"><i class="fa fa-user"></i></div>
                        <h4 class="title">Personalized Learning</h4>
                        <p>Pathways designed around each student's goals, strengths and progress.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-teal wow fade-in-bottom" data-wow-delay="250ms">
                        <span class="why-card-num">02</span>
                        <div class="why-icon"><i class="fa fa-graduation-cap"></i></div>
                        <h4 class="title">Expert Mentorship</h4>
                        <p>Guidance from experienced teachers, professionals and mentors.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-green wow fade-in-bottom" data-wow-delay="350ms">
                        <span class="why-card-num">03</span>
                        <div class="why-icon"><i class="fa fa-laptop"></i></div>
                        <h4 class="title">Technology-Enabled Education</h4>
                        <p>Digital classrooms, interactive content, online assessments.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-orange wow fade-in-bottom" data-wow-delay="450ms">
                        <span class="why-card-num">04</span>
                        <div class="why-icon"><i class="fa fa-magic"></i></div>
                        <h4 class="title">AI-Enabled Learning</h4>
                        <p>Adaptive assessments, personalized recommendations, performance insights.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-blue wow fade-in-bottom" data-wow-delay="150ms">
                        <span class="why-card-num">05</span>
                        <div class="why-icon"><i class="fa fa-lightbulb-o"></i></div>
                        <h4 class="title">Conceptual Excellence</h4>
                        <p>Strong emphasis on understanding, application and analytical thinking.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-teal wow fade-in-bottom" data-wow-delay="250ms">
                        <span class="why-card-num">06</span>
                        <div class="why-icon"><i class="fa fa-briefcase"></i></div>
                        <h4 class="title">Career-Focused Preparation</h4>
                        <p>Aligned with examinations, higher education and emerging careers.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-green wow fade-in-bottom" data-wow-delay="350ms">
                        <span class="why-card-num">07</span>
                        <div class="why-icon"><i class="fa fa-user"></i></div>
                        <h4 class="title">Leadership Development</h4>
                        <p>Communication, confidence, ethics, teamwork and decision-making.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-card why-card-orange wow fade-in-bottom" data-wow-delay="450ms">
                        <span class="why-card-num">08</span>
                        <div class="why-icon"><i class="fa fa-line-chart"></i></div>
                        <h4 class="title">Continuous Progress Tracking</h4>
                        <p>Assessments, student dashboards, mentoring reviews, parent engagement.</p>
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
            <div class="section-heading text-center white-content">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-bolt"></i></span>Programme Explorer</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Academic Verticals</h2>
                <p class="wow fade-in-bottom" data-wow-delay="500ms" style="max-width:700px;margin:0 auto;">Choose a vertical to see what's covered, then explore the full programme details or connect with our academic team.</p>
            </div>

            <div class="row gy-4 justify-content-center">

                <!-- 1. Civil Services -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="sambhavam-course-card wow fade-in-bottom" data-wow-delay="200ms">
                        <div class="scc-banner scc-banner-blue">
                            <div class="scc-icon"><i class="fas fa-landmark"></i></div>
                            <div class="scc-tags">
                                <span class="scc-tag">UPSC</span>
                                <span class="scc-tag">MPSC</span>
                                <span class="scc-tag">SSC</span>
                            </div>
                        </div>
                        <div class="scc-body">
                            <span class="scc-category">Civil Services</span>
                            <h3 class="scc-title">Civil Services &amp; Public Leadership</h3>
                            <p class="scc-desc"><em>Prepare to Serve. Learn to Lead.</em> Structured preparation for careers in public administration and governance.</p>
                            <ul class="scc-highlights">
                                <li><i class="fa fa-check-circle"></i>UPSC Civil Services &amp; MPSC State/Combined Exams</li>
                                <li><i class="fa fa-check-circle"></i>SSC, Banking, Railway &amp; Judiciary Examinations</li>
                                <li><i class="fa fa-check-circle"></i>Governance, Ethics, Current Affairs &amp; Interview Prep</li>
                            </ul>
                        </div>
                        <div class="scc-footer">
                            <div class="scc-meta"><i class="fa fa-map-marker"></i>Available at all Sambhavam Academy centres</div>
                            <a href="#contact" class="scc-details-btn">View Details <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 2. Engineering -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="sambhavam-course-card wow fade-in-bottom" data-wow-delay="300ms">
                        <div class="scc-banner scc-banner-teal">
                            <div class="scc-icon"><i class="fa fa-microchip"></i></div>
                            <div class="scc-tags">
                                <span class="scc-tag">JEE Main</span>
                                <span class="scc-tag">JEE Advanced</span>
                                <span class="scc-tag">MHT-CET</span>
                            </div>
                        </div>
                        <div class="scc-body">
                            <span class="scc-category">Engineering</span>
                            <h3 class="scc-title">Engineering &amp; Technology</h3>
                            <p class="scc-desc"><em>Build the Future.</em> Concept-driven preparation for engineering entrance examinations and innovation challenges.</p>
                            <ul class="scc-highlights">
                                <li><i class="fa fa-check-circle"></i>MHT-CET, JEE Main &amp; JEE Advanced</li>
                                <li><i class="fa fa-check-circle"></i>STEM Foundation &amp; Olympiad Preparation</li>
                                <li><i class="fa fa-check-circle"></i>Coding, Robotics &amp; Innovation Challenges</li>
                            </ul>
                        </div>
                        <div class="scc-footer">
                            <div class="scc-meta"><i class="fa fa-map-marker"></i>Available at all Sambhavam Academy centres</div>
                            <a href="#contact" class="scc-details-btn">View Details <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 3. Medical -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="sambhavam-course-card wow fade-in-bottom" data-wow-delay="400ms">
                        <div class="scc-banner scc-banner-green">
                            <div class="scc-icon"><i class="fa fa-stethoscope"></i></div>
                            <div class="scc-tags">
                                <span class="scc-tag">NEET-UG</span>
                                <span class="scc-tag">Biology</span>
                            </div>
                        </div>
                        <div class="scc-body">
                            <span class="scc-category">Medical</span>
                            <h3 class="scc-title">Medical &amp; Health Sciences</h3>
                            <p class="scc-desc"><em>Learn with Purpose. Prepare to Heal.</em> Concept-based science learning for medicine and life-science aspirants.</p>
                            <ul class="scc-highlights">
                                <li><i class="fa fa-check-circle"></i>NEET-UG Preparation &amp; Foundation Programmes</li>
                                <li><i class="fa fa-check-circle"></i>Biology Excellence &amp; Health-Science Olympiads</li>
                                <li><i class="fa fa-check-circle"></i>Regular Tests &amp; Performance Analytics</li>
                            </ul>
                        </div>
                        <div class="scc-footer">
                            <div class="scc-meta"><i class="fa fa-map-marker"></i>Available at all Sambhavam Academy centres</div>
                            <a href="#contact" class="scc-details-btn">View Details <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 4. School Foundation -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="sambhavam-course-card wow fade-in-bottom" data-wow-delay="200ms">
                        <div class="scc-banner scc-banner-orange">
                            <div class="scc-icon"><i class="fa fa-graduation-cap"></i></div>
                            <div class="scc-tags">
                                <span class="scc-tag">Classes VI–X</span>
                                <span class="scc-tag">CBSE / ICSE</span>
                            </div>
                        </div>
                        <div class="scc-body">
                            <span class="scc-category">School Foundation</span>
                            <h3 class="scc-title">School Excellence &amp; Foundation</h3>
                            <p class="scc-desc"><em>Strong Foundations. Limitless Futures.</em> Core-concept building for long-term academic and competitive success.</p>
                            <ul class="scc-highlights">
                                <li><i class="fa fa-check-circle"></i>Foundation Courses for Classes VI–X</li>
                                <li><i class="fa fa-check-circle"></i>State Board, CBSE &amp; ICSE Preparation</li>
                                <li><i class="fa fa-check-circle"></i>NMMS, Scholarship Exams &amp; Olympiads</li>
                            </ul>
                        </div>
                        <div class="scc-footer">
                            <div class="scc-meta"><i class="fa fa-map-marker"></i>Available at all Sambhavam Academy centres</div>
                            <a href="#contact" class="scc-details-btn">View Details <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 5. Leadership -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="sambhavam-course-card wow fade-in-bottom" data-wow-delay="300ms">
                        <div class="scc-banner scc-banner-navy">
                            <div class="scc-icon"><i class="fa fa-user"></i></div>
                            <div class="scc-tags">
                                <span class="scc-tag">Communication</span>
                                <span class="scc-tag">Leadership</span>
                            </div>
                        </div>
                        <div class="scc-body">
                            <span class="scc-category">Leadership</span>
                            <h3 class="scc-title">Global Leadership &amp; Life Skills</h3>
                            <p class="scc-desc"><em>Knowledge Builds Careers. Leadership Builds Futures.</em> Human capabilities for education, careers and life.</p>
                            <ul class="scc-highlights">
                                <li><i class="fa fa-check-circle"></i>Public Speaking, Confidence &amp; Communication</li>
                                <li><i class="fa fa-check-circle"></i>Critical Thinking &amp; Emotional Intelligence</li>
                                <li><i class="fa fa-check-circle"></i>Entrepreneurship &amp; Digital Citizenship</li>
                            </ul>
                        </div>
                        <div class="scc-footer">
                            <div class="scc-meta"><i class="fa fa-map-marker"></i>Available at all Sambhavam Academy centres</div>
                            <a href="#contact" class="scc-details-btn">View Details <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 6. Future Skills -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="sambhavam-course-card wow fade-in-bottom" data-wow-delay="400ms" id="future-skills">
                        <div class="scc-banner scc-banner-red">
                            <div class="scc-icon"><i class="fa fa-lightbulb"></i></div>
                            <div class="scc-tags">
                                <span class="scc-tag">AI</span>
                                <span class="scc-tag">Coding</span>
                                <span class="scc-tag">Design Thinking</span>
                            </div>
                        </div>
                        <div class="scc-body">
                            <span class="scc-category">Future Skills</span>
                            <h3 class="scc-title">Future Skills &amp; Innovation</h3>
                            <p class="scc-desc"><em>Skills for a World That Is Still Being Created.</em> Practical, future-oriented programmes for a changing world of work.</p>
                            <ul class="scc-highlights">
                                <li><i class="fa fa-check-circle"></i>Artificial Intelligence &amp; Data Literacy</li>
                                <li><i class="fa fa-check-circle"></i>Coding, Robotics &amp; Innovation/Prototyping</li>
                                <li><i class="fa fa-check-circle"></i>Entrepreneurship &amp; Financial Literacy</li>
                            </ul>
                        </div>
                        <div class="scc-footer">
                            <div class="scc-meta"><i class="fa fa-map-marker"></i>Available at all Sambhavam Academy centres</div>
                            <a href="#contact" class="scc-details-btn">View Details <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ./ programme-explorer -->

    <section class="course-carousel-area course-carousel-area-2 pt-100 pb-120 overflow-hidden">
        <div class="container">
            <div class="course-carousel-top heading-space">
                <div class="section-heading mb-0">
                    <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-solid fa-bolt"></i></span>Top Class Programmes</h4>
                    <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Courses Recommended for You</h2>
                </div>
                <div class="swiper-arrow">
                    <div class="swiper-nav swiper-next"><i class="fa fa-arrow-left"></i></div>
                    <div class="swiper-nav swiper-prev"><i class="fa fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="course-carousel-3 swiper">
                <div class="swiper-wrapper">

                    @php
                        $courses = [
                            ['img' => 'upsc-civil-services.jfif', 'offer' => 'Civil Services', 'title' => 'UPSC Civil Services Examination', 'slug' => 'upsc-civil-services'],
                            ['img' => 'mpsc-state-services.png', 'offer' => 'Civil Services', 'title' => 'MPSC State & Combined Examinations', 'slug' => 'mpsc-state-services'],
                            ['img' => 'ssc-banking-railway.webp', 'offer' => 'Civil Services', 'title' => 'SSC, Banking & Railway Examinations', 'slug' => 'ssc-banking-railway'],
                            ['img' => 'jee-main-advanced.jpg', 'offer' => 'Engineering', 'title' => 'JEE Main & JEE Advanced', 'slug' => 'jee-main-advanced'],
                            ['img' => 'mht-cet.jpeg', 'offer' => 'Engineering', 'title' => 'MHT-CET Preparation', 'slug' => 'mht-cet'],
                            ['img' => 'stem-olympiads.png', 'offer' => 'Engineering', 'title' => 'STEM Foundation & Olympiads', 'slug' => 'stem-olympiads'],
                            ['img' => 'neet-ug.jfif', 'offer' => 'Medical', 'title' => 'NEET-UG Preparation', 'slug' => 'neet-ug'],
                            ['img' => 'biology-excellence.jpg', 'offer' => 'Medical', 'title' => 'Biology Excellence & Health-Science', 'slug' => 'biology-excellence'],
                        ];
                    @endphp

                    @foreach ($courses as $course)
                        <div class="swiper-slide">
                            <div class="course-item">
                                <div class="course-thumb-wrap">
                                    <div class="course-thumb">
                                        <img src="{{ asset('images/courses/' . $course['img']) }}" alt="{{ $course['title'] }}">
                                    </div>
                                </div>
                                <div class="course-content">
                                    <span class="offer">{{ $course['offer'] }}</span>
                                    <h3 class="title"><a href="{{ url('course-details') }}?course={{ $course['slug'] }}">{{ $course['title'] }}</a></h3>
                                    <ul class="course-list">
                                        <li><i class="fa fa-map-marker"></i>All Centres</li>
                                        <li><i class="fa fa-user"></i>Mentor-Led</li>
                                    </ul>
                                </div>
                                <div class="bottom-content">
                                    <a href="{{ url('course-details') }}?course={{ $course['slug'] }}" class="course-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- ./ course-carousel-area-2 -->

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

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.hero-banner-swiper', {
            loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false },
            speed: 800,
            pagination: { el: '.swiper-pagination', clickable: true },
        });

        new Swiper('.course-carousel-3', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 24,
            navigation: { nextEl: '.swiper-next', prevEl: '.swiper-prev' },
            breakpoints: { 768: { slidesPerView: 2 }, 1200: { slidesPerView: 3 } }
        });

        // Counselling popup -> show automatically after 5 seconds
        const counsellingModal = document.getElementById('counsellingModal');
        const closeCounsellingModal = document.getElementById('closeCounsellingModal');

        if (counsellingModal) {

            // Don't re-show it again in the same browser tab/session once
            // it has already been shown once (closed or submitted)
            if (!sessionStorage.getItem('counsellingPopupShown')) {
                setTimeout(function () {
                    counsellingModal.classList.add('active');
                    sessionStorage.setItem('counsellingPopupShown', '1');
                }, 5000);
            }

            // Close on the × button
            if (closeCounsellingModal) {
                closeCounsellingModal.addEventListener('click', function () {
                    counsellingModal.classList.remove('active');
                });
            }

            // Close when clicking the dark backdrop (outside the modal box)
            counsellingModal.addEventListener('click', function (e) {
                if (e.target === counsellingModal) {
                    counsellingModal.classList.remove('active');
                }
            });

            // Close on Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    counsellingModal.classList.remove('active');
                }
            });
        }
    });

        // Counselling form -> WhatsApp
        const counsellingForm = document.getElementById('counsellingForm');

        if (counsellingForm) {

            counsellingForm.addEventListener('submit', function (e) {
                e.preventDefault();

                const name = document.getElementById('counsellingName').value.trim();
                const phone = document.getElementById('counsellingPhone').value.trim();
                const interest = document.getElementById('counsellingInterest').value;

                const message =
                    "Hello Sambhavam Academy,%0A%0A" +
                    "I would like to book a free counselling session.%0A%0A" +
                    "Name: " + encodeURIComponent(name) + "%0A" +
                    "Mobile: " + encodeURIComponent(phone) + "%0A" +
                    "Interested In: " + encodeURIComponent(interest);

                const whatsappUrl =
                    "https://wa.me/919967100926?text=" + message;

                window.open(whatsappUrl, '_blank');
            });

            // Close popup + go to WhatsApp once the user has submitted
            counsellingForm.addEventListener('submit', function () {
                if (counsellingModal) {
                    counsellingModal.classList.remove('active');
                }
            });
        }
</script>
@endpush