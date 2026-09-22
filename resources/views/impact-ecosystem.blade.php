@extends('layouts.app')

@section('title', 'Our Impact Ecosystem | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

<style>
/* =============================================================
   IMPACT ECOSYSTEM PAGE — SCOPED STYLES
   Only loaded on this page. Class names match the existing
   theme (ecosystem-card, about-feature-card, why-card,
   closing-section) so nothing elsewhere is affected.
   ============================================================= */

/* ---------- Section rhythm ---------- */
.ecosystem-section{ background:#ffffff; }
.about-feature{ background:#f6f8fc; }
.why-academy-section{ background:#ffffff; }
.journey-section{ background:#f6f8fc; }

/* ---------- 1. Ecosystem cards ---------- */
.ecosystem-card{
    position: relative;
    height: 100%;
    padding: 40px 32px;
    border-radius: 16px;
    background: #fff;
    border: 1px solid rgba(0,0,0,0.06);
    box-shadow: 0 10px 26px rgba(16, 38, 73, 0.06);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.ecosystem-card::before{
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(30,99,201,0.05), transparent 60%);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
}

.ecosystem-card:hover{
    transform: translateY(-6px);
    box-shadow: 0 18px 38px rgba(16, 38, 73, 0.13);
}

.ecosystem-card:hover::before{ opacity: 1; }

.ecosystem-num{
    display: block;
    font-weight: 700;
    font-size: 15px;
    letter-spacing: 0.5px;
    color: rgba(30, 99, 201, 0.2);
    margin-bottom: 6px;
    transition: color 0.3s ease;
}

.ecosystem-card:hover .ecosystem-num{
    color: rgba(30, 99, 201, 0.4);
}

.ecosystem-icon{
    width: 56px;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    background: rgba(30, 99, 201, 0.08);
    color: var(--primary-color, #1e63c9);
    font-size: 22px;
    margin-bottom: 18px;
    transition: background 0.3s ease, color 0.3s ease;
}

.ecosystem-card:hover .ecosystem-icon{
    background: var(--primary-color, #1e63c9);
    color: #fff;
}

.ecosystem-card .title{
    margin-bottom: 10px;
    transition: color 0.3s ease;
}

.ecosystem-card:hover .title{
    color: var(--primary-color, #1e63c9);
}

.ecosystem-card p{
    opacity: 0.8;
    margin-bottom: 0;
}

/* ---------- 2. Journey section ---------- */
.journey-section{
    position: relative;
}

.journey-stepper{
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 16px;
    margin-top: 20px;
    position: relative;
}

.journey-step{
    flex: 1 1 0;
    position: relative;
    text-align: center;
    padding: 0 12px;
}

.journey-stepper::before{
    content: "";
    position: absolute;
    top: 34px;
    left: 12.5%;
    right: 12.5%;
    height: 2px;
    background: repeating-linear-gradient(
        to right,
        rgba(30,99,201,0.25) 0 8px,
        transparent 8px 16px
    );
    z-index: 0;
}

.journey-step-num{
    position: relative;
    z-index: 1;
    width: 68px;
    height: 68px;
    margin: 0 auto 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #fff;
    border: 2px solid rgba(30,99,201,0.18);
    color: var(--primary-color, #1e63c9);
    font-size: 24px;
    transition: border-color 0.3s ease, background 0.3s ease,
                color 0.3s ease, transform 0.3s ease;
}

.journey-step:hover .journey-step-num{
    background: var(--primary-color, #1e63c9);
    border-color: var(--primary-color, #1e63c9);
    color: #fff;
    transform: scale(1.06);
}

.journey-step-title{
    font-weight: 700;
    font-size: 18px;
    margin-bottom: 8px;
    color: #10264a;
}

.journey-step p{
    font-size: 14.5px;
    opacity: 0.75;
    margin-bottom: 0;
    line-height: 1.55;
}

@media (max-width: 767px){
    .journey-stepper{
        flex-direction: column;
        gap: 36px;
    }

    .journey-stepper::before{
        display: none;
    }

    .journey-step{
        padding: 0 20px;
    }
}

/* ---------- 3. Platform feature cards ---------- */
.about-feature-card{
    position: relative;
    padding: 38px 30px;
    border-radius: 18px;
    background: #fff;
    border: 1px solid rgba(16, 38, 73, 0.08);
    box-shadow: 0 8px 24px rgba(16, 38, 73, 0.05);
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.about-feature-card:hover{
    transform: translateY(-6px);
    box-shadow: 0 18px 38px rgba(16, 38, 73, 0.12);
    border-color: rgba(30, 99, 201, 0.22);
}

.about-feature-card .icon{
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(30, 99, 201, 0.08);
    color: var(--primary-color, #1e63c9);
    font-size: 22px;
    margin: 0 auto 20px;
    transition: background 0.3s ease, color 0.3s ease, transform 0.3s ease;
}

.about-feature-card:hover .icon{
    background: var(--primary-color, #1e63c9);
    color: #fff;
    transform: scale(1.08);
}

.about-feature-card .content{
    width: 100%;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.about-feature-card .title{
    font-size: 20px;
    font-weight: 700;
    line-height: 1.35;
    color: #10264a;
    text-align: center;
    margin-bottom: 22px;
    min-height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.about-feature-card .curri-list{
    list-style: none;
    padding: 0;
    margin: 0;
    width: 100%;
}

.about-feature-card .curri-list li{
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 13px;
    color: #2b3d56;
    font-size: 14.5px;
    line-height: 1.55;
    text-align: left;
}

.about-feature-card .curri-list li:last-child{
    margin-bottom: 0;
}

.about-feature-card .curri-list li i{
    color: var(--primary-color, #1e63c9);
    font-size: 16px;
    margin-top: 3px;
    flex-shrink: 0;
}

.about-feature-card .curri-list li .item-text{
    flex: 1;
    text-align: left;
}

/* ---------- 4. Why ecosystem cards ---------- */
.why-card{
    position: relative;
    height: 100%;
    padding: 34px 26px;
    border-radius: 16px;
    background: #fff;
    border: 1px solid rgba(0,0,0,0.06);
    box-shadow: 0 8px 20px rgba(16, 38, 73, 0.05);
    text-align: center;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.why-card:hover{
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(16, 38, 73, 0.12);
}

.why-card-num{
    position: absolute;
    top: 14px;
    right: 18px;
    font-weight: 700;
    font-size: 24px;
    color: rgba(0,0,0,0.05);
}

.why-icon{
    width: 58px;
    height: 58px;
    margin: 0 auto 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    font-size: 22px;
    transition: background 0.3s ease, color 0.3s ease;
}

.why-card .title{
    margin-bottom: 10px;
}

.why-card p{
    opacity: 0.78;
    margin-bottom: 0;
    font-size: 14.5px;
}

.why-card-blue .why-icon{
    background: rgba(30, 99, 201, 0.08);
    color: #1e63c9;
}

.why-card-blue:hover .why-icon{
    background: #1e63c9;
    color: #fff;
}

.why-card-teal .why-icon{
    background: rgba(13, 148, 136, 0.08);
    color: #0d9488;
}

.why-card-teal:hover .why-icon{
    background: #0d9488;
    color: #fff;
}

.why-card-green .why-icon{
    background: rgba(34, 139, 84, 0.08);
    color: #228b54;
}

.why-card-green:hover .why-icon{
    background: #228b54;
    color: #fff;
}

.why-card-orange .why-icon{
    background: rgba(224, 122, 20, 0.08);
    color: #e07a14;
}

.why-card-orange:hover .why-icon{
    background: #e07a14;
    color: #fff;
}

/* ---------- 5. Closing CTA ---------- */
.closing-section{
    position: relative;
    padding: 80px 48px;
    border-radius: 24px;
    background: linear-gradient(135deg, #091930 0%, #0e2a52 40%, #1e63c9 100%);
    box-shadow: 0 20px 50px rgba(16, 38, 73, 0.22);
    border: 1px solid rgba(255, 255, 255, 0.12);
    overflow: hidden;
}

.closing-overlay{
    position: absolute;
    inset: 0;
    background:
        radial-gradient(circle at 10% 20%, rgba(30, 99, 201, 0.4) 0%, transparent 50%),
        radial-gradient(circle at 90% 80%, rgba(253, 190, 51, 0.15) 0%, transparent 45%),
        radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.04) 0%, transparent 60%);
    pointer-events: none;
}

.closing-badge{
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 20px;
    border-radius: 50px;
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #ffffff;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.closing-badge i{
    color: #fdbe33;
    font-size: 14px;
}

.closing-tagline{
    font-size: 38px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.25;
    margin-bottom: 16px;
    letter-spacing: -0.5px;
}

.closing-desc{
    font-size: 16.5px;
    color: rgba(255, 255, 255, 0.88);
    max-width: 680px;
    margin: 0 auto 34px;
    line-height: 1.6;
}

.closing-btn-group{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    flex-wrap: wrap;
}

.cta-btn-white{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: #ffffff !important;
    color: #10264a !important;
    font-weight: 700;
    font-size: 15px;
    padding: 14px 32px;
    border-radius: 100px;
    border: 2px solid #ffffff;
    transition: all 0.3s ease;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
    text-decoration: none;
}

.cta-btn-white:hover{
    background: #fdbe33 !important;
    border-color: #fdbe33 !important;
    color: #10264a !important;
    transform: translateY(-3px);
    box-shadow: 0 12px 28px rgba(253, 190, 51, 0.38);
}

.cta-btn-outline{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.08) !important;
    color: #ffffff !important;
    font-weight: 700;
    font-size: 15px;
    padding: 14px 32px;
    border-radius: 100px;
    border: 2px solid rgba(255, 255, 255, 0.6);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    transition: all 0.3s ease;
    text-decoration: none;
}

.cta-btn-outline:hover{
    background: rgba(255, 255, 255, 0.22) !important;
    border-color: #ffffff !important;
    color: #ffffff !important;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.closing-content .buy-btn:hover{
    background: rgba(255,255,255,0.12);
    border-color: #fff;
}

/* ---------- 6. Responsive ---------- */
@media (max-width: 991px){
    .ecosystem-card,
    .about-feature-card{
        padding: 30px 24px;
    }

    .why-card{
        padding: 28px 20px;
    }

    .closing-section{
        padding: 50px 24px;
    }
}

/* ---------- 7. Reduced motion ---------- */
@media (prefers-reduced-motion: reduce){
    .ecosystem-card,
    .about-feature-card,
    .why-card,
    .ecosystem-icon,
    .why-icon,
    .about-feature-card .icon,
    .journey-step-num,
    .closing-content .ed-primary-btn{
        transition: none !important;
    }
}
</style>


<!-- ========================================================= -->
<!-- PAGE HEADER -->
<!-- ========================================================= -->

<section class="page-header"
    data-background="{{ asset('images/home/our.png') }}"
    style="
    background-image: url('{{ asset('images/home/our.png') }}');">

    <div class="overlay"></div>

    <div class="container">
        <div class="page-header-content">

            <h1 class="title">
                Our Impact Ecosystem
            </h1>

            <h4 class="sub-title">
                <a class="home" href="{{ url('/') }}">Home</a>
                <span class="icon">/</span>
                <a class="inner-page" href="{{ url('impact-ecosystem') }}">
                    Our Impact Ecosystem
                </a>
            </h4>

        </div>
    </div>
</section>


<!-- ========================================================= -->
<!-- SECTION 1: INTRODUCTION -->
<!-- ========================================================= -->

<!-- <section class="about-section pt-80 pb-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-9 col-lg-12 text-center">

                <div class="section-heading mb-0">

                    <h4 class="sub-heading wow fade-in-bottom"
                        data-wow-delay="200ms">

                        <span class="heading-icon">
                            <i class="fa fa-bolt"></i>
                        </span>

                        Our Impact Ecosystem

                    </h4>

                    <h2 class="section-title wow fade-in-bottom"
                        data-wow-delay="300ms">

                        Three Pillars. One Shared Purpose.

                    </h2>

                    <p class="mt-20 wow fade-in-bottom"
                       data-wow-delay="400ms">

                        SAMBHAVAM brings education, environmental responsibility
                        and livelihood opportunities into one connected ecosystem.
                        We believe meaningful progress happens when people are
                        equipped not only to learn, but also to apply their knowledge,
                        build capabilities, create opportunities and contribute to
                        stronger communities. Each platform supports the others —
                        turning learning into action and action into meaningful impact.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section> -->


<!-- ========================================================= -->
<!-- SECTION 2: THREE PLATFORMS -->
<!-- ========================================================= -->

<section class="ecosystem-section pt-60 pb-60" id="ecosystem">

    <div class="container">

        <div class="section-heading text-center mb-40">

            <h4 class="sub-heading wow fade-in-bottom"
                data-wow-delay="200ms">

                <span class="heading-icon">
                    <i class="fa fa-bolt"></i>
                </span>

                The SAMBHAVAM Ecosystem

            </h4>

            <h2 class="section-title wow fade-in-bottom"
                data-wow-delay="300ms">

                Three Platforms. One Shared Purpose.

            </h2>

            <p class="mt-20 wow fade-in-bottom"
               data-wow-delay="400ms">

                Each platform addresses a different part of growth —
                together creating a broader pathway from learning and skills
                to opportunity, responsibility and community impact.

            </p>

        </div>


        <div class="row gy-4 align-items-stretch">


            <!-- PLATFORM 01 -->
            <div class="col-lg-4">

                <div class="ecosystem-card wow fade-in-bottom"
                     data-wow-delay="200ms">

                    <span class="ecosystem-num">01</span>

                    <div class="ecosystem-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <h3 class="title">
                        Education, Skills & Future Readiness
                    </h3>

                    <p>
                        Building strong foundations for academic growth,
                        career preparation and lifelong capability — from
                        school education and competitive examinations to
                        future-ready skills and leadership.
                    </p>

                </div>

            </div>


            <!-- PLATFORM 02 -->
            <div class="col-lg-4">

                <div class="ecosystem-card wow fade-in-bottom"
                     data-wow-delay="300ms">

                    <span class="ecosystem-num">02</span>

                    <div class="ecosystem-icon">
                        <i class="fa fa-leaf"></i>
                    </div>

                    <h3 class="title">
                        Climate, Environment & Sustainability
                    </h3>

                    <p>
                        Encouraging environmental awareness, climate literacy
                        and community participation through initiatives that
                        promote responsible action and a more sustainable future.
                    </p>

                </div>

            </div>


            <!-- PLATFORM 03 -->
            <div class="col-lg-4">

                <div class="ecosystem-card wow fade-in-bottom"
                     data-wow-delay="400ms">

                    <span class="ecosystem-num">03</span>

                    <div class="ecosystem-icon">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <h3 class="title">
                        Innovation, Livelihoods & Empowerment
                    </h3>

                    <p>
                        Creating pathways from skills to opportunity through
                        entrepreneurship, employability, financial awareness
                        and innovation for individuals and communities.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- SECTION 3: THE JOURNEY -->
<!-- ========================================================= -->

@php

    $journey = [

        [
            'icon'  => 'fa-book',
            'title' => 'Learn',
            'text'  => 'Build knowledge, confidence and strong foundations through education, mentorship and skill development.'
        ],

        [
            'icon'  => 'fa-cogs',
            'title' => 'Build',
            'text'  => 'Turn learning into practical skills through projects, innovation and real-world experiences.'
        ],

        [
            'icon'  => 'fa-flag',
            'title' => 'Lead',
            'text'  => 'Take initiative, develop leadership and contribute ideas that create value for others.'
        ],

        [
            'icon'  => 'fa-globe',
            'title' => 'Transform',
            'text'  => 'Use knowledge, skills and opportunity to create meaningful change in communities and beyond.'
        ],

    ];

@endphp


<section class="journey-section pt-60 pb-60">

    <div class="container">

        <div class="section-heading text-center">

            <h4 class="sub-heading wow fade-in-bottom"
                data-wow-delay="200ms">

                <span class="heading-icon">
                    <i class="fa fa-bolt"></i>
                </span>

                The Journey

            </h4>

            <h2 class="section-title wow fade-in-bottom"
                data-wow-delay="300ms">

                From Learning to Meaningful Impact

            </h2>

            <p class="mt-20 wow fade-in-bottom"
               data-wow-delay="400ms">

                Our ecosystem is designed as a journey — helping individuals
                move from gaining knowledge to applying it, taking ownership
                and creating positive change.

            </p>

        </div>


        <div class="journey-stepper">

            @foreach ($journey as $i => $step)

                <div class="journey-step wow fade-in-bottom"
                     data-wow-delay="{{ 200 + ($i * 120) }}ms">

                    <div class="journey-step-num">
                        <i class="fa {{ $step['icon'] }}"></i>
                    </div>

                    <div class="journey-step-title">
                        {{ $step['title'] }}
                    </div>

                    <p>
                        {{ $step['text'] }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- SECTION 4: WHY IT MATTERS -->
<!-- ========================================================= -->

<section class="about-section pt-60 pb-60">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-9 col-lg-12 text-center">

                <div class="section-heading mb-0">

                    <h4 class="sub-heading wow fade-in-bottom"
                        data-wow-delay="200ms">

                        <span class="heading-icon">
                            <i class="fa fa-bolt"></i>
                        </span>

                        Why It Matters

                    </h4>

                    <h2 class="section-title wow fade-in-bottom"
                        data-wow-delay="300ms">

                        Because Potential Needs a Pathway

                    </h2>

                    <p class="mt-20 wow fade-in-bottom"
                       data-wow-delay="400ms">

                        Education can open a door. Skills can create an
                        opportunity. Innovation can solve a problem.
                        Lasting progress becomes possible when these
                        possibilities connect. SAMBHAVAM brings them together
                        to create pathways where learners can grow, communities
                        can participate and ideas can become meaningful action.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- SECTION 5: WHAT WE DO -->
<!-- ========================================================= -->

@php

    $platforms = [

        [
            'icon'  => 'fa-graduation-cap',
            'title' => 'Education, Skills & Future Readiness',

            'items' => [

                'Civil Services, Engineering and Medical Entrance Preparation',

                'School Foundation Programmes for Classes VI–X',

                'AI, Coding, Robotics and Design Thinking',

                'Leadership, Communication and Life Skills',

                'Scholarships for Deserving and Underserved Learners',

            ],
        ],


        [
            'icon'  => 'fa-leaf',
            'title' => 'Climate, Environment & Sustainability',

            'items' => [

                'Environmental Awareness and Climate Literacy',

                'Community-led Conservation Initiatives',

                'Sustainability and Responsible Living Programmes',

                'Collaboration with Environmental Experts and Researchers',

                'Youth Participation in Climate Action Projects',

            ],
        ],


        [
            'icon'  => 'fa-briefcase',
            'title' => 'Innovation, Livelihoods & Empowerment',

            'items' => [

                'Entrepreneurship and Financial Literacy',

                'Employability and Skill Development',

                'Pathways to Self-Reliance and Economic Opportunity',

                'Support for First-Generation Learners and Underserved Communities',

                'Innovation and Prototyping for Real-World Challenges',

            ],
        ],

    ];

@endphp


<section class="about-feature pt-60 pb-120">

    <div class="container">

        <div class="section-heading text-center">

            <h4 class="sub-heading wow fade-in-bottom"
                data-wow-delay="200ms">

                <span class="heading-icon">
                    <i class="fa fa-bolt"></i>
                </span>

                Our Programmes & Initiatives

            </h4>

            <h2 class="section-title wow fade-in-bottom"
                data-wow-delay="400ms">

                Turning Ideas Into Action

            </h2>

            <p class="mt-20 wow fade-in-bottom"
               data-wow-delay="450ms">

                Across our three platforms, we create opportunities for learning,
                skill development, environmental participation, innovation and
                economic empowerment.

            </p>

        </div>


        <div class="row gy-lg-4 gy-4 mt-10">

            @foreach ($platforms as $i => $platform)

                <div class="col-lg-4 col-md-6">

                    <div class="about-feature-card h-100 wow fade-in-bottom"
                         data-wow-delay="{{ 200 + ($i * 100) }}ms">

                        <div class="icon">
                            <i class="fa {{ $platform['icon'] }}"></i>
                        </div>

                        <div class="content">

                            <h3 class="title">
                                {{ $platform['title'] }}
                            </h3>

                            <ul class="curri-list mt-15">

                                @foreach ($platform['items'] as $item)

                                    <li>
                                        <i class="fa fa-check-circle"></i>
                                        <span class="item-text">{{ $item }}</span>
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- SECTION 6: WHY AN ECOSYSTEM APPROACH -->
<!-- ========================================================= -->

<section class="why-academy-section pt-60 pb-120">

    <div class="container">

        <div class="section-heading text-center">

            <h4 class="sub-heading wow fade-in-bottom"
                data-wow-delay="200ms">

                <span class="heading-icon">
                    <i class="fa fa-bolt"></i>
                </span>

                Why an Ecosystem Approach

            </h4>

            <h2 class="section-title wow fade-in-bottom"
                data-wow-delay="400ms">

                Progress Is Stronger When It Connects

            </h2>

            <p class="mt-20 wow fade-in-bottom"
               data-wow-delay="450ms">

                When education, skills, environmental awareness and opportunity
                work together, people are better placed to turn learning into
                meaningful action.

            </p>

        </div>


        <div class="row gy-4">


            <!-- CARD 01 -->
            <div class="col-lg-3 col-md-6">

                <div class="why-card why-card-blue wow fade-in-bottom"
                     data-wow-delay="150ms">

                    <span class="why-card-num">01</span>

                    <div class="why-icon">
                        <i class="fa fa-link"></i>
                    </div>

                    <h4 class="title">
                        Connected
                    </h4>

                    <p>
                        Learning, sustainability and livelihoods come together
                        to create a broader pathway for growth and opportunity.
                    </p>

                </div>

            </div>


            <!-- CARD 02 -->
            <div class="col-lg-3 col-md-6">

                <div class="why-card why-card-teal wow fade-in-bottom"
                     data-wow-delay="250ms">

                    <span class="why-card-num">02</span>

                    <div class="why-icon">
                        <i class="fa fa-lightbulb-o"></i>
                    </div>

                    <h4 class="title">
                        Practical
                    </h4>

                    <p>
                        We connect learning with projects, skills and experiences
                        that encourage people to apply what they know.
                    </p>

                </div>

            </div>


            <!-- CARD 03 -->
            <div class="col-lg-3 col-md-6">

                <div class="why-card why-card-green wow fade-in-bottom"
                     data-wow-delay="350ms">

                    <span class="why-card-num">03</span>

                    <div class="why-icon">
                        <i class="fa fa-users"></i>
                    </div>

                    <h4 class="title">
                        Inclusive
                    </h4>

                    <p>
                        Learners, mentors and communities have a place to
                        participate, contribute and grow together.
                    </p>

                </div>

            </div>


            <!-- CARD 04 -->
            <div class="col-lg-3 col-md-6">

                <div class="why-card why-card-orange wow fade-in-bottom"
                     data-wow-delay="450ms">

                    <span class="why-card-num">04</span>

                    <div class="why-icon">
                        <i class="fa fa-line-chart"></i>
                    </div>

                    <h4 class="title">
                        Future-Ready
                    </h4>

                    <p>
                        We encourage the skills, curiosity and initiative needed
                        to navigate changing opportunities and real-world needs.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ========================================================= -->
<!-- SECTION 7: CLOSING CTA -->
<!-- ========================================================= -->

<section class="closing-section container my-5">

    <div class="closing-overlay"></div>

    <div class="container position-relative">

        <div class="closing-content text-center">

            <div class="closing-badge wow fade-in-bottom" data-wow-delay="200ms">
                <i class="fa fa-bolt"></i>
                <span>One Ecosystem. Many Possibilities.</span>
            </div>

            <h2 class="closing-tagline wow fade-in-bottom" data-wow-delay="300ms">
                Learn. Innovate. Lead. Create Impact.
            </h2>

            <p class="closing-desc wow fade-in-bottom" data-wow-delay="380ms">
                Discover opportunities to learn, build skills, explore ideas
                and contribute to a better future.
            </p>

            <div class="closing-btn-group wow fade-in-bottom" data-wow-delay="450ms">

                <a href="{{ url('/#programmes') }}" class="cta-btn-white">
                    <span>Explore Our Programmes</span>
                    <i class="fa fa-arrow-right"></i>
                </a>

                <a href="{{ url('contact') }}" class="cta-btn-outline">
                    <span>Partner With Us</span>
                    <i class="fa fa-handshake-o"></i>
                </a>

            </div>

        </div>

    </div>

</section>


@endsection