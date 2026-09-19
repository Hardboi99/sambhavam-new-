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
            <h1 class="title">Faculty</h1>
            <h4 class="sub-title"><a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span><a class="inner-page" href="{{ url('faculty') }}"> Faculty</a></h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->
{{-- NOTE: reusing images/banners/upsc1.avif. Swap in a dedicated banner image once available. --}}

<style>
    .leader-card{
        background: #fff;
        border: 1px solid #eef0f4;
        border-radius: 16px;
        box-shadow: 0 12px 30px rgba(20, 30, 60, 0.06);
        padding: 30px;
    }
    .leader-photo {
        width: 388px;
        max-width: 550px;
        height: 420px;
        aspect-ratio: 1 / 1;
        object-fit: cover;
        border-radius: 12px;
        display: block;
        margin: 0 auto;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.10);
    }
    .leader-row{
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        gap: 30px;
    }
    .leader-row.leader-reverse{
        flex-direction: row-reverse;
    }
    .leader-photo-col{
        flex: 0 0 430px;
        text-align: center;
    }
    .leader-text-col{
        flex: 1 1 400px;
        text-align: left;
    }
    .leader-role-badge{
        display: inline-block;
        background: rgba(0, 86, 179, 0.08);
        color: #0056b3;
        font-size: 13px;
        font-weight: 600;
        padding: 4px 12px;
        border-radius: 30px;
        margin-top: 6px;
    }
    .leader-tagline{
        font-style: italic;
        color: #6b7280;
        margin-top: 10px;
        font-size: 14px;
    }
    .leader-section-label{
        font-weight: 700;
        font-size: 16px;
        margin-top: 16px;
        margin-bottom: 6px;
        color: #1a1a1a;
    }
    .leader-bullets{
        margin: 0;
        padding-left: 18px;
    }
    .leader-bullets li{
        margin-bottom: 4px;
        font-size: 15.5px;
        color: #4b5563;
        line-height: 1.5;
    }
</style>

@php
    $leadershipTeam = [
        [
            'name'    => 'Dr. Madhukar Gumble',
            'role'    => 'Director | Sambhavam Foundation',
            'tagline' => 'Educationist • Social Development Leader',
            'photo'   => 'images/faculty/madhukar-gumble.webp',
            'sections' => [
                'Professional Background' => [
                    'Educationist, social development professional & institution developer',
                    'Over four decades of experience in grassroots development',
                ],
                'Leadership & Contribution' => [
                    'Founder of Apeksha Homoeo Society (AHS)',
                    'Led initiatives across education, health, livelihoods, sustainable agriculture, water & community development in Maharashtra',
                ],
                'Focus at Sambhavam' => [
                    'Institution building',
                    'Community empowerment',
                    'Nurturing future leaders for meaningful social impact',
                ],
            ],
        ],
        [
            'name'    => 'Dr. Madhukar Sanap',
            'role'    => 'Managing Director | Sambhavam Foundation',
            'tagline' => 'Global Education & Development Leader • Institution Builder • Social Impact & Sustainability Strategist',
            'photo'   => 'images/faculty/madhukar-sanap.webp',
            'sections' => [
                'Academic Background' => [
                    'MSW, MBA, Ph.D.',
                ],
                'Professional Experience' => [
                    'Over 25 years across education, youth empowerment, sustainable development, climate resilience & community transformation',
                    'Leadership & advisory engagements with UN agencies, the World Bank & government institutions',
                    'Led development programmes across Asia, Africa & Small Island Developing States (SIDS)',
                ],
                'Vision at Sambhavam' => [
                    'Advancing inclusive, future-ready, globally relevant education',
                ],
            ],
        ],
        [
            'name'    => 'Mr. Santosh Kumar',
            'role'    => 'Director | Sambhavam Foundation',
            'tagline' => 'Development Leader • Education & Capacity-Building Professional • Sustainability & Resilience Expert',
            'photo'   => 'images/faculty/santosh-kumar.webp',
            'sections' => [
                'Academic Background' => [
                    'M.Tech. in Environmental Engineering',
                    'M.Sc. in Disaster Management',
                ],
                'Professional Experience' => [
                    'Over 12 years across education, environmental sustainability, disaster resilience, climate adaptation & community development',
                    'Led major national, World Bank-supported & corporate-funded development initiatives',
                ],
                'Focus at Sambhavam' => [
                    'Future-ready education & experiential learning',
                    'Youth leadership & professional capacity building',
                ],
            ],
        ],
        [
            'name'    => 'Ms. Deepti Gumber Bhatnagar',
            'role'    => 'Director | Sambhavam Foundation',
            'tagline' => 'Education & Sustainability Leader • Climate & Nature Expert • Knowledge & Capacity-Building Professional',
            'photo'   => 'images/faculty/deepti-bhatnagar.webp',
            'sections' => [
                'Academic Background' => [
                    'M.Sc. in Environmental Management',
                ],
                'Professional Experience' => [
                    'Over 20 years in knowledge & capacity building, biodiversity conservation, climate adaptation & nature-based solutions',
                    'Led multidisciplinary programmes for governments, multilateral development banks & UN agencies across Africa, Asia & the Americas',
                ],
                'Focus at Sambhavam' => [
                    'Experiential education & sustainability learning',
                    'Future-ready skills & youth leadership',
                ],
            ],
        ],
    ];
@endphp

<section class="pt-20 pb-100">
    <div class="container">
        

        @foreach ($leadershipTeam as $l)
            <div class="leader-card {{ $loop->first ? '' : 'mt-40' }}">
                <div class="leader-row {{ $loop->iteration % 2 === 0 ? 'leader-reverse' : '' }}">
                    <div class="leader-photo-col">
                        <img class="leader-photo" src="{{ asset($l['photo']) }}" alt="{{ $l['name'] }}">
                    </div>
                    <div class="leader-text-col">
                        <h3 class="title mb-0">{{ $l['name'] }}</h3>
                        <span class="leader-role-badge">{{ $l['role'] }}</span>
                        <p class="leader-tagline">{{ $l['tagline'] }}</p>

                        @foreach ($l['sections'] as $label => $points)
                            <div class="leader-section-label">{{ $label }}</div>
                            <ul class="leader-bullets">
                                @foreach ($points as $point)
                                    <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- ./ leadership-team -->

@endsection