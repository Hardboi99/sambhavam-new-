@extends('layouts.app')

@section('title', 'Innovation, Livelihoods & Inclusive Empowerment | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/innovation-livelihoods.css') }}">
@endpush

@section('content')
@php
    $focusAreas = [
        ['icon' => 'fa-rocket',      'title' => 'Entrepreneurship & Incubation',    'desc' => 'Practical venture validation, business modeling, and mentorship to launch viable enterprises.',              'image' => 'images/inov/1.png'],
        ['icon' => 'fa-line-chart',  'title' => 'Financial Literacy & Credit',       'desc' => 'Essential money management, digital banking, and credit access for long-term independence.',                'image' => 'images/inov/2.png'],
        ['icon' => 'fa-briefcase',   'title' => 'Market-Aligned Skill Building',     'desc' => 'Vocational and tech-enabled workplace-readiness training mapped to active industry hiring.',               'image' => 'images/inov/3.png'],
        ['icon' => 'fa-users',       'title' => 'Inclusive Empowerment',             'desc' => 'Dedicated empowerment tracks for women, persons with disabilities, and underserved groups.',               'image' => 'images/inov/4.png'],
        ['icon' => 'fa-lightbulb-o', 'title' => 'Applied Innovation & Prototyping', 'desc' => 'Hands-on problem-solving labs that turn grassroots ideas into scalable, real-world solutions.',            'image' => 'images/inov/5.png'],
        ['icon' => 'fa-handshake-o', 'title' => 'Grassroots Partnerships',          'desc' => 'Working alongside local organizations and industry partners to expand livelihood reach.',                   'image' => 'images/inov/6.png'],
    ];
    $stats = [
        ['icon' => 'fa-graduation-cap', 'count' => '5,000+', 'title' => 'Candidates Skilled', 'desc' => 'Trained in high-demand vocational & digital skills'],
        ['icon' => 'fa-rocket', 'count' => '350+', 'title' => 'Micro-Ventures', 'desc' => 'Incubated and supported toward self-reliance'],
        ['icon' => 'fa-check-circle', 'count' => '85%', 'title' => 'Livelihood Placement', 'desc' => 'Placed in sustainable employment or self-employed'],
        ['icon' => 'fa-handshake-o', 'count' => '40+', 'title' => 'Partner Institutions', 'desc' => 'Industry collaborators, NGOs & local SHGs'],
    ];
    $audiences = [
        ['icon' => 'fa-rocket', 'title' => 'Aspiring Entrepreneurs', 'desc' => 'Driven individuals and innovators ready to build, launch, and scale sustainable community ventures.'],
        ['icon' => 'fa-briefcase', 'title' => 'Unemployed & Underemployed Youth', 'desc' => 'Youth seeking high-impact, practical skill certification for immediate workplace employability.'],
        ['icon' => 'fa-female', 'title' => 'Women & Underserved Groups', 'desc' => 'Targeted incubation and capability development so ability and grit define lifelong outcomes.'],
        ['icon' => 'fa-map-marker', 'title' => 'Rural & Grassroots Communities', 'desc' => 'Decentralized livelihood hubs bringing enterprise support directly to local districts.'],
    ];
    $journeySteps = [
        ['num' => '01', 'title' => 'Talent Discovery', 'subtitle' => 'Phase I', 'desc' => 'Identifying individual aspirations, market opportunities, and aptitude pathways.'],
        ['num' => '02', 'title' => 'Skill Incubation', 'subtitle' => 'Phase II', 'desc' => 'Intensive hands-on training, financial literacy, and digital tool mastery.'],
        ['num' => '03', 'title' => 'Market & Capital Link', 'subtitle' => 'Phase III', 'desc' => 'Connecting builders to mentorship, credit access, and active industry hiring channels.'],
        ['num' => '04', 'title' => 'Self-Reliance', 'subtitle' => 'Phase IV', 'desc' => 'Achieving stable, dignified livelihood generation and scaling community enterprises.'],
    ];
@endphp

<main class="innovative-page">
    <section class="innovative-hero" aria-labelledby="innovative-hero-title">
        <img class="innovative-hero__image" src="{{ asset('images/inov/main.png') }}" alt="Learners developing skills and ideas for a resilient future">
        <div class="innovative-hero__overlay" aria-hidden="true"></div>
        <div class="container innovative-hero__container">
            <div class="innovative-hero__content" data-innovative-reveal>
                <!-- <span class="innovative-hero__eyebrow"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Skills · Enterprise · Inclusion</span> -->
                <h1 id="innovative-hero-title">Innovation, Livelihoods <span>&amp; Inclusive Empowerment</span></h1>
                <!-- <p>Turning talent, ideas and local potential into dignified, sustainable livelihoods.</p> -->
                <nav class="innovative-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ url('/') }}">Home</a><span aria-hidden="true">/</span><span aria-current="page">Innovation &amp; Livelihoods</span>
                </nav>
            </div>
        </div>
        <span class="innovative-hero__ornament innovative-hero__ornament--one" aria-hidden="true"></span>
        <span class="innovative-hero__ornament innovative-hero__ornament--two" aria-hidden="true"></span>
    </section>

    <section class="innovative-section innovative-intro" aria-labelledby="innovative-intro-title">
        <div class="container">
            <header class="innovative-section-head" data-innovative-reveal>
                <span class="innovative-eyebrow"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Our Vision &amp; Commitment</span>
                <h2 id="innovative-intro-title">Creating Pathways to Opportunity, Dignity and Self-Reliance</h2>
            </header>
            <div class="innovative-intro__layout">
                <figure class="innovative-intro__media" data-innovative-reveal>
                    <img src="{{ asset('images/about/about-img-2.png') }}" alt="Sambhavam learners building practical skills and enterprise ideas" loading="lazy">
                    <figcaption class="innovative-intro__badge"><span class="innovative-intro__badge-icon"><i class="fa fa-rocket" aria-hidden="true"></i></span><span><strong>Enterprise &amp; Growth Initiative</strong><small>Grounded in skills &amp; sustainable independence</small></span></figcaption>
                </figure>
                <div class="innovative-intro__copy" data-innovative-reveal data-innovative-delay="120">
                    <p class="innovative-intro__lead">Education and environmental awareness matter most when they translate into real, sustained opportunity. This platform bridges the divide between classroom learning and economic self-sufficiency — equipping youth, women, and underserved communities with market-aligned skills, venture incubation, and mentorship.</p>
                    <p>We work directly with individuals and grassroots collectives who are ready to build something of their own, providing practical tools, continuous mentorship, and enterprise support to make economic independence a lasting reality.</p>
                    <div class="innovative-intro__note"><i class="fa fa-line-chart" aria-hidden="true"></i><span>Skills and support that grow into lasting opportunity.</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="innovative-section innovative-focus" aria-labelledby="innovative-focus-title" id="innovative-focus-section">
        <div class="container">
            <header class="innovative-section-head" data-innovative-reveal>
                <span class="innovative-eyebrow">Our Work</span>
                <h2 id="innovative-focus-title">What This Platform Covers</h2>
                <p>Practical pathways that connect skills, enterprise, financial confidence and inclusion to sustainable livelihoods.</p>
            </header>

            {{-- ═══════════════════════════════════════════════
                 DESKTOP: Interactive Focus Spotlight (≥992px)
            ═══════════════════════════════════════════════ --}}
            <div class="focus-spotlight" data-innovative-reveal>

                {{-- LEFT: Tab list --}}
                <div class="focus-spotlight__list"
                     role="tablist"
                     aria-label="Focus areas"
                     aria-orientation="vertical">
                    @foreach ($focusAreas as $i => $area)
                        @php $tid = 'fs-tab-' . $i; $pid = 'fs-panel-' . $i; @endphp
                        <button class="focus-spotlight__tab {{ $i === 0 ? 'is-active' : '' }}"
                                id="{{ $tid }}"
                                role="tab"
                                aria-selected="{{ $i === 0 ? 'true' : 'false' }}"
                                aria-controls="{{ $pid }}"
                                tabindex="{{ $i === 0 ? '0' : '-1' }}"
                                data-fs-index="{{ $i }}">
                            <span class="focus-spotlight__tab-num" aria-hidden="true">{{ sprintf('%02d', $i + 1) }}</span>
                            <span class="focus-spotlight__tab-icon" aria-hidden="true"><i class="fa {{ $area['icon'] }}"></i></span>
                            <span class="focus-spotlight__tab-title">{{ $area['title'] }}</span>
                            <span class="focus-spotlight__tab-bar" aria-hidden="true"></span>
                        </button>
                    @endforeach

                    {{-- Bottom Callout under Tab 6 --}}
                    <div class="focus-spotlight__footer">
                        <div class="focus-spotlight__footer-inner">
                            <span class="focus-spotlight__footer-icon" aria-hidden="true"><i class="fa fa-lightbulb-o"></i></span>
                            <div class="focus-spotlight__footer-text">
                                <h4 class="focus-spotlight__footer-title">Need a Custom Initiative?</h4>
                                <p class="focus-spotlight__footer-desc">Partner with Sambhavam to co-create scalable livelihood and skill programs.</p>
                            </div>
                        </div>
                        <a href="{{ url('contact') }}" class="focus-spotlight__footer-btn">
                            <span>Get in Touch</span>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                {{-- RIGHT: Single image + text pane --}}
                <div class="focus-spotlight__pane" id="fs-panel-0" role="tabpanel" aria-labelledby="fs-tab-0">
                    <figure class="focus-spotlight__figure">
                        <img class="focus-spotlight__img"
                             src="{{ asset($focusAreas[0]['image']) }}"
                             alt="{{ $focusAreas[0]['title'] }}: Sambhavam focus area"
                             id="fs-pane-img">
                        <div class="focus-spotlight__overlay" aria-hidden="true"></div>
                        <figcaption class="focus-spotlight__caption" id="fs-pane-caption">
                            <span class="focus-spotlight__caption-num" id="fs-pane-num">01</span>
                            <h3 class="focus-spotlight__caption-title" id="fs-pane-title">{{ $focusAreas[0]['title'] }}</h3>
                            <p class="focus-spotlight__caption-desc" id="fs-pane-desc">{{ $focusAreas[0]['desc'] }}</p>
                        </figcaption>
                    </figure>
                </div>

                {{-- Hidden data store for JS --}}
                <script type="application/json" id="fs-data">
                    [
                    @foreach ($focusAreas as $i => $area)
                        {
                            "index": {{ $i }},
                            "num": "{{ sprintf('%02d', $i + 1) }}",
                            "title": "{{ addslashes($area['title']) }}",
                            "desc": "{{ addslashes($area['desc']) }}",
                            "image": "{{ asset($area['image']) }}",
                            "alt": "{{ addslashes($area['title']) }}: Sambhavam focus area",
                            "panelId": "fs-panel-{{ $i }}",
                            "tabId": "fs-tab-{{ $i }}"
                        }{{ $i < count($focusAreas) - 1 ? ',' : '' }}
                    @endforeach
                    ]
                </script>
            </div>{{-- /.focus-spotlight --}}

            {{-- ═══════════════════════════════════════════════
                 MOBILE: Stacked blocks (all 6 items visible)
            ═══════════════════════════════════════════════ --}}
            <div class="focus-mobile-stack">
                @foreach ($focusAreas as $i => $area)
                    <div class="focus-mobile-block" data-innovative-reveal data-innovative-delay="{{ $i * 70 }}">
                        <figure class="focus-mobile-block__figure">
                            <img src="{{ asset($area['image']) }}"
                                 alt="{{ $area['title'] }}: Sambhavam focus area"
                                 loading="{{ $i === 0 ? 'eager' : 'lazy' }}">
                            <div class="focus-mobile-block__overlay" aria-hidden="true"></div>
                            <span class="focus-mobile-block__num" aria-hidden="true">{{ sprintf('%02d', $i + 1) }}</span>
                        </figure>
                        <div class="focus-mobile-block__body">
                            <span class="focus-mobile-block__icon" aria-hidden="true"><i class="fa {{ $area['icon'] }}"></i></span>
                            <h3 class="focus-mobile-block__title">{{ $area['title'] }}</h3>
                            <p class="focus-mobile-block__desc">{{ $area['desc'] }}</p>
                        </div>
                    </div>
                @endforeach

                {{-- Mobile Callout Card --}}
                <div class="focus-mobile-footer" data-innovative-reveal>
                    <div class="focus-mobile-footer__inner">
                        <span class="focus-mobile-footer__icon" aria-hidden="true"><i class="fa fa-lightbulb-o"></i></span>
                        <div class="focus-mobile-footer__text">
                            <h4 class="focus-mobile-footer__title">Need a Custom Initiative?</h4>
                            <p class="focus-mobile-footer__desc">Partner with Sambhavam to co-create scalable livelihood and skill programs.</p>
                        </div>
                    </div>
                    <a href="{{ url('contact') }}" class="focus-mobile-footer__btn">
                        <span>Get in Touch</span>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>{{-- /.focus-mobile-stack --}}

        </div>
    </section>

    <section class="innovative-stats" aria-label="Our impact in numbers">
        <div class="container">
            <div class="innovative-stats__grid">
                @foreach ($stats as $index => $stat)
                    @php
                        $raw = $stat['count'];
                        $target = preg_replace('/[^0-9]/', '', $raw);
                        $suffix = preg_replace('/[0-9,]/', '', $raw);
                    @endphp
                    <article class="innovative-stat-card" data-innovative-reveal data-innovative-delay="{{ $index * 100 }}">
                        <span class="innovative-stat-card__icon"><i class="fa {{ $stat['icon'] }}" aria-hidden="true"></i></span>
                        <strong class="innovative-stat-card__number" data-counter data-target="{{ $target }}" data-suffix="{{ $suffix }}">{{ $stat['count'] }}</strong>
                        <h3>{{ $stat['title'] }}</h3>
                        <p>{{ $stat['desc'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="innovative-section innovative-audiences" aria-labelledby="innovative-audiences-title">
        <div class="container">
            <header class="innovative-section-head" data-innovative-reveal>
                <span class="innovative-eyebrow"><i class="fa fa-handshake-o" aria-hidden="true"></i> Ecosystem</span>
                <h2 id="innovative-audiences-title">Builders, Earners &amp; Changemakers</h2>
                <p>Empowering individuals and communities with the capabilities, connections, and confidence to build enduring prosperity.</p>
            </header>
            <div class="innovative-audience-panels" role="tablist" aria-label="Target audiences and ecosystem" data-innovative-reveal>
                @foreach ($audiences as $idx => $audience)
                    <button type="button"
                            class="innovative-audience-panel {{ $idx === 0 ? 'is-active' : '' }}"
                            role="tab"
                            id="audience-tab-{{ $idx }}"
                            aria-selected="{{ $idx === 0 ? 'true' : 'false' }}"
                            aria-expanded="{{ $idx === 0 ? 'true' : 'false' }}"
                            aria-controls="audience-panel-{{ $idx }}"
                            tabindex="{{ $idx === 0 ? '0' : '-1' }}"
                            data-index="{{ $idx }}">
                        
                        <div class="innovative-audience-panel__header">
                            <span class="innovative-audience-panel__num">{{ sprintf('%02d', $idx + 1) }}</span>
                            <span class="innovative-audience-panel__icon">
                                <i class="fa {{ $audience['icon'] }}" aria-hidden="true"></i>
                            </span>
                            <h3 class="innovative-audience-panel__mobile-title">{{ $audience['title'] }}</h3>
                            <span class="innovative-audience-panel__chevron" aria-hidden="true"><i class="fa fa-chevron-down"></i></span>
                        </div>

                        <div class="innovative-audience-panel__body" id="audience-panel-{{ $idx }}" role="tabpanel" aria-labelledby="audience-tab-{{ $idx }}">
                            <h3 class="innovative-audience-panel__title">{{ $audience['title'] }}</h3>
                            <div class="innovative-audience-panel__progress" aria-hidden="true">
                                <span class="innovative-audience-panel__progress-bar"></span>
                            </div>
                            <div class="innovative-audience-panel__desc-wrap">
                                <p class="innovative-audience-panel__desc">{{ $audience['desc'] }}</p>
                            </div>
                        </div>

                        <div class="innovative-audience-panel__watermark" aria-hidden="true">
                            <i class="fa {{ $audience['icon'] }}"></i>
                        </div>
                    </button>
                @endforeach
            </div>
        </div>
    </section>

    <section class="innovative-section innovative-journey" aria-labelledby="innovative-journey-title">
        <div class="container">
            <header class="innovative-section-head" data-innovative-reveal>
                <span class="innovative-eyebrow"><i class="fa fa-road" aria-hidden="true"></i> Strategic Pathway</span>
                <h2 id="innovative-journey-title">From Talent to Self-Reliance</h2>
                <p>A structured, milestone-driven journey turning latent talent and ideas into thriving livelihoods.</p>
            </header>
            <div class="innovative-timeline">
                <div class="innovative-timeline__track" aria-hidden="true"><span></span></div>
                <ol class="innovative-timeline__grid">
                    @foreach ($journeySteps as $k => $step)
                        <li class="innovative-timeline__item" data-innovative-reveal data-innovative-delay="{{ $k * 100 }}">
                            <span class="innovative-timeline__node">{{ $step['num'] }}</span>
                            <article class="innovative-timeline__card"><span class="innovative-timeline__phase">{{ $step['subtitle'] }}</span><h3>{{ $step['title'] }}</h3><p>{{ $step['desc'] }}</p></article>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    <section class="innovative-cta-wrap">
        <div class="container">
            <div class="innovative-cta" data-innovative-reveal>
                <img src="{{ asset('images/about/climate.webp') }}" alt="" aria-hidden="true" loading="lazy">
                <div class="innovative-cta__overlay" aria-hidden="true"></div>
                <div class="innovative-cta__content">
                    <span class="innovative-cta__eyebrow"><i class="fa fa-rocket" aria-hidden="true"></i> Ready to Build Something?</span>
                    <h2>Turn Your Skills &amp; Vision Into a Thriving Livelihood</h2>
                    <p>Whether you are an aspiring entrepreneur, an employer looking to recruit skilled candidates, or a partner seeking to foster grassroots prosperity — join hands with us today.</p>
                    <div class="innovative-cta__actions">
                        <a class="innovative-button innovative-button--primary" href="{{ url('contact') }}"><i class="fa fa-handshake-o" aria-hidden="true"></i> Partner With Us</a>
                        <a class="innovative-button innovative-button--outline" href="{{ url('donate') }}"><i class="fa fa-heart" aria-hidden="true"></i> Support This Work</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
    <script src="{{ asset('js/pages/innovation-livelihoods.js') }}" defer></script>
@endpush
