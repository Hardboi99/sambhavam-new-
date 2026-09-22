@extends('layouts.app')

@section('title', 'Faculty | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@php
    // TEMPORARY hardcoded data — replace with a DB fetch (e.g. Faculty::with('vertical')->get())
    // once the backend/API is ready. Grouped by the same verticals used in the Programme
    // Explorer on the home page, so this page and the course pages stay in sync.
    $facultyGroups = [
        [
            'vertical' => 'Civil Services & Public Leadership',
            'icon'     => 'fa-landmark',
            'members'  => [
                ['name' => 'Anil Deshmukh',  'role' => 'Polity & Governance'],
                ['name' => 'Sanjana Rao',    'role' => 'History & Culture'],
                ['name' => 'Rohit Kulkarni', 'role' => 'Economy'],
            ],
        ],
        [
            'vertical' => 'Engineering & Technology',
            'icon'     => 'fa-microchip',
            'members'  => [
                ['name' => 'Neha Patil',    'role' => 'Physics & JEE Mathematics'],
                ['name' => 'Arjun Mehta',   'role' => 'Chemistry & MHT-CET'],
            ],
        ],
        [
            'vertical' => 'Medical & Health Sciences',
            'icon'     => 'fa-stethoscope',
            'members'  => [
                ['name' => 'Dr. Kavita Joshi', 'role' => 'Biology & NEET-UG'],
                ['name' => 'Suresh Iyer',      'role' => 'Physics & Chemistry'],
            ],
        ],
        [
            'vertical' => 'School Excellence & Foundation',
            'icon'     => 'fa-graduation-cap',
            'members'  => [
                ['name' => 'Meera Kulkarni', 'role' => 'Mathematics, Classes VI–X'],
                ['name' => 'Vikram Naik',    'role' => 'Science, Classes VI–X'],
            ],
        ],
        [
            'vertical' => 'Global Leadership & Life Skills',
            'icon'     => 'fa-user',
            'members'  => [
                ['name' => 'Priyanka Shah', 'role' => 'Communication & Public Speaking'],
                ['name' => 'Rajesh Bhosale','role' => 'Leadership & Emotional Intelligence'],
            ],
        ],
        [
            'vertical' => 'Future Skills & Innovation',
            'icon'     => 'fa-lightbulb',
            'members'  => [
                ['name' => 'Ananya Sen',   'role' => 'AI & Data Literacy'],
                ['name' => 'Karan Malhotra','role' => 'Coding & Robotics'],
            ],
        ],
    ];
@endphp

@section('content')

<section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Leadership Team</h1>
            <h4 class="sub-title"><a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span><a class="inner-page" href="{{ url('leadership-team') }}"> Leadership Team</a></h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->
{{-- NOTE: reusing images/banners/upsc1.avif. Swap in a dedicated banner image once available. --}}

<style>
    .page-header{
        padding: 40px 0px
    }

    .leader-grid{
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }
    @media (max-width: 991px){
        .leader-grid{ grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 575px){
        .leader-grid{ grid-template-columns: 1fr; }
    }

    .leader-card{
        background: #fff;
        border: 1px solid #eef0f4;
        border-radius: 14px;
        box-shadow: 0 8px 24px rgba(20, 30, 60, 0.06);
        padding: 10px 15px 28px;
        text-align: center;
        transition: transform .2s ease, box-shadow .2s ease;
    }
    .leader-card:hover{
        transform: translateY(-4px);
        box-shadow: 0 14px 32px rgba(20, 30, 60, 0.10);
    }

    .leader-photo-wrap{
        width: 250px;
        height: 250px;
        margin: 0 auto 6px;
        border-radius: 50%;
        padding: 4px;
        background: #f1f2f6;
    }
    .leader-photo{
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        display: block;
        object-position: top
    }

    .leader-name{
        font-size: 19px;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 2px;
    }
    .leader-role{
        font-size: 13.5px;
        color: #8a8f98;
        margin-bottom: 12px;
    }
    .leader-bio{
        font-size: 14.5px;
        color: #5b616e;
        line-height: 1.6;
        margin-bottom: 14px;

        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .leader-readmore{
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 14px;
        font-weight: 600;
        color: #fc5c0f;
        border-bottom: 1px solid rgb(158 72 46 / 40%);
        padding-bottom: 2px;
        text-decoration: none;
    }
    .leader-readmore:hover{
        color: #0e59e4;
        border-color: #072ccf;
    }
    .leader-readmore svg{
        width: 14px;
        height: 14px;
        transition: transform .2s ease;
    }
    .leader-readmore:hover svg{
        transform: translateX(3px);
    }
</style>

<section class="pt-20 pb-100">
    <div class="container mt-5">

        

        <div class="leader-grid">

            <!-- ================= Dr. Madhukar Sanap ================= -->
            <div class="leader-card">
                <div class="leader-photo-wrap">
                    <img class="leader-photo" src="{{ asset('images/faculty/madhukar-sanap.png') }}" alt="Dr. Madhukar Sanap">
                </div>
                <div class="leader-name">Dr. Madhukar Sanap</div>
                <div class="leader-role">Managing Director | Sambhavam Foundation</div>
                <p class="leader-bio">Global education &amp; development leader with 25+ years across education, youth empowerment, sustainable development and climate resilience, with advisory roles at UN agencies and the World Bank.</p>
                <a href="{{url ('madhukar-sanap') }}" class="leader-readmore">
                    Read More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>


            <!-- ================= Mr. Santosh Kumar ================= -->
            <div class="leader-card">
                <div class="leader-photo-wrap">
                    <img class="leader-photo" src="{{ asset('images/faculty/santosh_kumar.png') }}" alt="Mr. Santosh Kumar">
                </div>
                <div class="leader-name">Mr. Santosh Kumar</div>
                <div class="leader-role">Director | Sambhavam Foundation</div>
                <p class="leader-bio">Development leader with 12+ years across education, environmental sustainability, disaster resilience and climate adaptation, leading major World Bank-supported initiatives.</p>
                <a href="{{url ('santosh-kumar') }}" class="leader-readmore">
                    Read More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>

            <!-- ================= Ms. Deepti Gumber Bhatnagar ================= -->
            <div class="leader-card">
                <div class="leader-photo-wrap">
                    <img class="leader-photo" src="{{ asset('images/faculty/deepti-bhatnagar.webp') }}" alt="Ms. Deepti Gumber Bhatnagar">
                </div>
                <div class="leader-name">Ms. Deepti Gumber Bhatnagar</div>
                <div class="leader-role">Director | Sambhavam Foundation</div>
                <p class="leader-bio">Education &amp; sustainability leader with 20+ years in knowledge and capacity building, biodiversity conservation and climate adaptation across Africa, Asia and the Americas.</p>
                <a href="{{url ('deepti-bhatnagar') }}" class="leader-readmore">
                    Read More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
                        <!-- ================= Dr. Madhukar Gumble ================= -->
            <div class="leader-card">
                <div class="leader-photo-wrap">
                    <img class="leader-photo" src="{{ asset('images/faculty/madhukar_gumble.png') }}" alt="Dr. Madhukar Gumble">
                </div>
                <div class="leader-name">Dr. Madhukar Gumble</div>
                <div class="leader-role">Director | Sambhavam Foundation</div>
                <p class="leader-bio">Educationist &amp; social development leader with over four decades of experience in grassroots development. Founder of Apeksha Homoeo Society (AHS).</p>
                <!-- TODO: point href at the real profile page once it exists -->
                <a href="{{url ('madhukar-gumble') }}" class="leader-readmore">
                    Read More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>


        </div>
    </div>
</section>
<!-- ./ leadership-team -->

@endsection