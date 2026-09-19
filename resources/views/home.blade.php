@extends('layouts.app')

@section('title', 'Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')
    <!-- ============================================= -->
    <!-- SECTION 1: HERO BANNER SLIDER -->
    <!-- ============================================= -->
    <section class="hero-banner-slider mt-5 mb-5  container position-relative">
    <div class="swiper hero-banner-swiper">
        <div class="swiper-wrapper ">

            <div class="swiper-slide">
                <img src="{{ asset('images/banners/desktop/b1.jpeg') }}"
                     class="d-md-block d-none bannerwidth"
                     alt="Sambhavam Banner 1">
                <img src="{{ asset('images/banners/mobile/mobile1.jpeg') }}"
                     class="d-md-none d-block"
                     alt="Sambhavam Banner mobile 1">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/banners/desktop/b2.png') }}"
                     class="d-md-block d-none bannerwidth"
                     alt="Sambhavam Banner 2">
                <img src="{{ asset('images/banners/mobile/mobile2.jpeg') }}"
                     class="d-md-none d-block"
                     alt="Sambhavam Banner mobile 2">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/banners/desktop/b3.png') }}"
                     class="d-md-block d-none bannerwidth"
                     alt="Sambhavam Banner 3">
                <img src="{{ asset('images/banners/mobile/mobile3.jpeg') }}"
                     class="d-md-none d-block"
                     alt="Sambhavam Banner mobile 3">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/banners/desktop/b4.png') }}"
                     class="d-md-block d-none bannerwidth"
                     alt="Sambhavam Banner 4">
                <img src="{{ asset('images/banners/mobile/mobile4.jpeg') }}"
                     class="d-md-none d-block"
                     alt="Sambhavam Banner mobile 4">
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('images/banners/desktop/b5.png') }}"
                     class="d-md-block d-none bannerwidth"
                     alt="Sambhavam Banner 5">
                <img src="{{ asset('images/banners/mobile/mobile5.jpeg') }}"
                     class="d-md-none d-block"
                     alt="Sambhavam Banner mobile 5">
            </div>

        </div>
    </div>

    <div class="swiper-pagination"></div>

    <!-- Arrows OUTSIDE banner -->
    <button type="button"
                class="hero-swiper-prev"
                aria-label="Previous Slide">
            <i class="fa fa-arrow-left"></i>
        </button>

        <button type="button"
                class="hero-swiper-next"
                aria-label="Next Slide">
            <i class="fa fa-arrow-right"></i>
        </button>
    </section>
    <!-- ./ hero-banner-slider -->

    <!-- ============================================= -->
    <!-- SECTION: MEET OUR FOUNDER -->
    <!-- ============================================= -->
    <section class="founder-section pt-50 pb-100 ">
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- LEFT: Founder Image -->
                <div class="col-lg-5">
                    <div class="founder-media wow fade-in-left" data-wow-delay="200ms">
                        <div class="founder-blob"></div>
                        <div class="founder-ring"></div>

                        <div class="founder-photo-frame">
                            <img src="{{ asset('images/about/write.png') }}" alt="Founder of Sambhavam">
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Founder Content -->
                <div class="col-lg-7">
                    <div class="founder-content">
                        <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                            <span class="heading-icon"><i class="fa fa-solid fa-bolt"></i></span>Meet Our Founder
                        </h4>

                        <h2 class="founder-title wow fade-in-bottom" data-wow-delay="300ms">
                            When Knowledge Meets Opportunity,<br>
                            <span class="text-gradient">Transformation Becomes Possible</span>
                        </h2>

                        <p class="founder-dec wow fade-in-bottom" data-wow-delay="400ms">
                            SAMBHAVAM was founded by a multidisciplinary team of educators, social-development
                            professionals, engineers, environmental experts and technology innovators who shared
                            one belief — that every learner deserves the tools, mentorship and opportunity to turn
                            potential into progress. That belief became the foundation of SAMBHAVAM.
                        </p>

                        <div class="founder-quote wow fade-in-bottom" data-wow-delay="500ms">
                            <i class="fa fa-quote-left founder-quote-icon"></i>
                            <p>Our goal was never just to build an institute. It was to build a movement where
                                every learner, regardless of background, gets a genuine shot at their potential.</p>
                            <span class="founder-quote-name">[Founder Name], [Founder Title]</span>
                        </div>

                        <div class="founder-item-wrap wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="founder-item">
                                <div class="founder-item-icon"><i class="fa fa-check"></i></div>
                                <h4>Vision-Led</h4>
                            </div>
                            <div class="founder-item">
                                <div class="founder-item-icon"><i class="fa fa-check"></i></div>
                                <h4>People-Centred</h4>
                            </div>
                            <div class="founder-item founder-item-last">
                                <div class="founder-item-icon"><i class="fa fa-check"></i></div>
                                <h4>Impact-Driven</h4>
                            </div>
                        </div>

                        <div class="founder-btn-wrap wow fade-in-bottom" data-wow-delay="700ms">
                            <a href="{{ url('about-us') }}" class="ed-primary-btn">Learn Our Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="founder-curve-bottom">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 C300,110 900,110 1200,0 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
    </section>

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
    <!-- STREAM SELECTOR -->
    <!-- ============================================= -->
    <section class="stream-selector-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-md-6 my-auto mx-auto">
                    <div class="stream-selector-card">
                    <h4 class="stream-selector-label">Select stream to view courses</h4>

                    <div class="stream-pill-wrap">
                        @foreach ($categories as $i => $category)
                            @if($category->courses->count())
                                <button type="button"
                                        class="stream-pill {{ $i === 0 ? 'active' : '' }}"
                                        data-slug="{{ $category->slug }}">
                                    {{ $category->name }}
                                </button>
                            @endif
                        @endforeach
                    </div>

                    <div class="stream-selector-divider"></div>

                    <a href="{{ url('courses') }}?category={{ $categories->first()?->slug }}"
                    class="stream-explore-btn"
                    id="streamExploreBtn">
                        Explore Courses <i class="fa fa-arrow-right"></i>
                    </a>

                    </div>
                </div>

                <div class="col-12 col-md-6 mx-auto">
                    <img class="crs mx-auto" src="{{ asset('images/courses/course.jpg') }}" alt="">
                </div>
            </div>
        </div>
       
</section>
    <!-- ./ stream-selector-section -->

    <section class="course-carousel-area course-carousel-area-2 pt-100 pb-120 overflow-hidden ">
    <div class="container">
        <div class="course-carousel-top heading-space">
            <div class="section-heading mb-0">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-solid fa-bolt"></i></span>Top Class Programmes</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="400ms">Courses Recommended for You</h2>
            </div>
            <div class="course-swiper-arrows">
                <button type="button" class="course-swiper-prev" aria-label="Previous">
                    <i class="fa fa-arrow-left"></i>
                </button>

                <button type="button" class="course-swiper-next" aria-label="Next">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
        <div class="course-carousel-3 swiper">
            <div class="swiper-wrapper">

                @foreach ($categories as $category)
                    @foreach ($category->courses as $course)
                        <div class="swiper-slide">
                            <div class="course-item">
                                <div class="course-thumb-wrap">
                                    <div class="course-thumb">
                                        <img src="{{ $course->image ? asset('storage/' . $course->image) : asset('images/courses/course.jpg') }}" alt="{{ $course->title }}">
                                    </div>
                                </div>
                                <div class="course-content">
                                    <span class="offer">{{ $category->name }}</span>
                                    <h3 class="title"><a href="{{ url('course-details') }}?course={{ $course->slug }}">{{ $course->title }}</a></h3>
                                    <ul class="course-list">
                                        <li><i class="fa fa-map-marker"></i>All Centres</li>
                                        <li><i class="fa fa-user"></i>Mentor-Led</li>
                                    </ul>
                                </div>
                                <div class="bottom-content">
                                    <a href="{{ url('course-details') }}?course={{ $course->slug }}" class="course-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- ./ course-carousel-area-2 -->

    <!-- ============================================= -->
    <!-- SECTION: STUDENT SUCCESS STORIES -->
    <!-- ============================================= -->
    <section class="success-stories-section pt-100 pb-100" id="success-stories">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms"><span class="heading-icon"><i class="fa fa-solid fa-bolt"></i></span>Success Stories</h4>
                <h2 class="section-title wow fade-in-bottom" data-wow-delay="300ms">Real Students. Real Results.</h2>
                <p class="wow fade-in-bottom" data-wow-delay="400ms" style="max-width:700px;margin:0 auto;">
                    Every rank, every offer letter and every milestone here began with a SAMBHAVAM
                    student who decided to try. These are their stories, in their own words.
                </p>
            </div>

            <div class="success-story-carousel-wrap position-relative">
                <div class="success-story-carousel swiper">
                    <div class="swiper-wrapper">

                        @php
                            $stories = [
                                [
                                    'img' => '1.avif',
                                    'name' => 'Student Name',
                                    'achievement' => 'AIR 000 &middot; UPSC CSE 2025',
                                    'course' => 'Civil Services',
                                    'quote' => 'With structured mentorship and daily answer-writing practice, I finally believed a rank like this was possible for me.',
                                ],
                                [
                                    'img' => '22.jpg',
                                    'name' => 'Student Name',
                                    'achievement' => '99.2 Percentile &middot; JEE Advanced 2025',
                                    'course' => 'Engineering',
                                    'quote' => 'The concept-first teaching style changed how I looked at problem-solving, not just how I memorised formulas.',
                                ],
                                [
                                    'img' => '33.jpg',
                                    'name' => 'Student Name',
                                    'achievement' => 'AIR 000 &middot; NEET-UG 2025',
                                    'course' => 'Medical',
                                    'quote' => 'Regular tests and performance analytics helped me identify weak topics early and fix them well before the exam.',
                                ],
                                [
                                    'img' => '44.jpg',
                                    'name' => 'Student Name',
                                    'achievement' => 'State Rank 00 &middot; NMMS Scholarship',
                                    'course' => 'School Foundation',
                                    'quote' => 'My foundation years at Sambhavam gave me the confidence and habits I still rely on today.',
                                ],
                                [
                                    'img' => '1.avif',
                                    'name' => 'Student Name',
                                    'achievement' => 'Built &amp; Shipped First AI App',
                                    'course' => 'Future Skills & AI',
                                    'quote' => 'From no coding background to building my own project — the mentors made it feel achievable, one step at a time.',
                                ],
                                [
                                    'img' => '22.jpg',
                                    'name' => 'Student Name',
                                    'achievement' => 'National Youth Debate Finalist',
                                    'course' => 'Leadership & Life Skills',
                                    'quote' => 'Sambhavam taught me to speak with clarity and confidence, on stage and in every interview since.',
                                ],
                            ];
                        @endphp

                        @foreach ($stories as $story)
                            <div class="swiper-slide">
                                <div class="success-story-card wow fade-in-bottom" data-wow-delay="200ms">
                                    <div class="success-story-photo">
                                        <img src="{{ asset('images/success-stories/' . $story['img']) }}" alt="{{ $story['name'] }} - {{ $story['course'] }}">
                                        <span class="success-story-badge">{{ $story['course'] }}</span>
                                    </div>
                                    <div class="success-story-body">
                                        <i class="fa fa-quote-left success-story-quote-icon"></i>
                                        <p class="success-story-quote">{{ $story['quote'] }}</p>
                                        <h4 class="success-story-name">{{ $story['name'] }}</h4>
                                        <span class="success-story-achievement">{!! $story['achievement'] !!}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="success-story-pagination"></div>

                <button type="button" class="success-story-prev" aria-label="Previous Story">
                    <i class="fa fa-arrow-left"></i>
                </button>
                <button type="button" class="success-story-next" aria-label="Next Story">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>

            <div class="text-center mt-40">
                <a href="{{ url('success-stories') }}" class="ed-primary-btn">View All Success Stories</a>
            </div>
        </div>
    </section>
    <!-- ./ success-stories-section -->

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
                            <a href="{{ url('courses') }}" class="ed-primary-btn">Discover Our Programmes</a>
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

                @php
                    $sccBanners = ['scc-banner-blue', 'scc-banner-teal', 'scc-banner-green', 'scc-banner-orange', 'scc-banner-navy', 'scc-banner-red'];
                    $sccIcons = ['fas fa-landmark', 'fa fa-microchip', 'fa fa-stethoscope', 'fa fa-graduation-cap', 'fa fa-user', 'fa fa-lightbulb'];
                @endphp

                @foreach ($categories as $i => $category)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="sambhavam-course-card wow fade-in-bottom" data-wow-delay="{{ 200 + ($i % 3) * 100 }}ms">
                            <div class="scc-banner {{ $sccBanners[$i % count($sccBanners)] }}">
                                <div class="scc-icon"><i class="{{ $sccIcons[$i % count($sccIcons)] }}"></i></div>
                                @if($category->courses->count())
                                    <div class="scc-tags">
                                        @foreach ($category->courses->take(3) as $course)
                                            <span class="scc-tag">{{ Str::limit($course->title, 18) }}</span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="scc-body">
                                <span class="scc-category">{{ $category->name }}</span>
                                <h3 class="scc-title">{{ $category->name }}</h3>
                                <p class="scc-desc">
                                    @if($category->tagline)
                                        <em>{{ $category->tagline }}</em>
                                    @endif
                                    {{ $category->short_description }}
                                </p>
                                @if($category->courses->count())
                                    <ul class="scc-highlights">
                                        @foreach ($category->courses->take(3) as $course)
                                            <li><i class="fa fa-check-circle"></i>{{ $course->title }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <div class="scc-footer">
                                <div class="scc-meta"><i class="fa fa-map-marker"></i>Available at all Sambhavam Academy centres</div>
                                <a href="{{ url('courses') }}?course={{ $category->courses->first()?->slug ?? $category->slug }}" class="scc-details-btn">View Details <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ./ programme-explorer -->


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

    @include('partials.certifications')

@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.hero-banner-swiper', {
            loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false },
            speed: 800,
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: {
                nextEl: '.hero-swiper-next',
                prevEl: '.hero-swiper-prev'
            },
        });

        new Swiper('.course-carousel-3', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 24,

            navigation: {
                nextEl: '.course-swiper-next',
                prevEl: '.course-swiper-prev'
            },

            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3
                }
            }
        });

        // Student Success Stories carousel
        new Swiper('.success-story-carousel', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 24,
            autoplay: { delay: 4500, disableOnInteraction: false },

            pagination: {
                el: '.success-story-pagination',
                clickable: true
            },

            navigation: {
                nextEl: '.success-story-next',
                prevEl: '.success-story-prev'
            },

            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 4
                }
            }
        });
    });

        document.addEventListener('DOMContentLoaded', function () {
            const pills = document.querySelectorAll('.stream-pill');
            const exploreBtn = document.getElementById('streamExploreBtn');

            // mark button ready since a default pill is pre-selected
            exploreBtn.classList.add('is-ready');

            pills.forEach(pill => {
                pill.addEventListener('click', function () {
                    pills.forEach(p => p.classList.remove('active'));
                    this.classList.add('active');

                    const slug = this.getAttribute('data-slug');
                    exploreBtn.href = "{{ url('courses') }}?category=" + slug;
                    exploreBtn.classList.add('is-ready');
                });
            });
        });
</script>
@endpush