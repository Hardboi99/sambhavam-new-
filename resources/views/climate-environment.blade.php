@extends('layouts.app')

@section('title', 'Climate, Environment & Sustainable Development | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/climate-environment.css') }}">
@endpush

@section('content')
@php
    $focusAreas = [
        [
            'num' => '01',
            'title' => 'Climate Literacy Programmes',
            'desc' => 'Helping students and communities understand climate science and its local impact.',
            'pillar' => 'Pillar 01',
            'image' => asset('images/env/2098b322-0418-471d-80d8-3b320c7b11dc.png'),
        ],
        [
            'num' => '02',
            'title' => 'Community Conservation Initiatives',
            'desc' => 'On-ground, community-driven projects for water, soil and biodiversity conservation.',
            'pillar' => 'Pillar 02',
            'image' => asset('images/env/27154401-7722-47bb-afb1-8410e784260a.png'),
        ],
        [
            'num' => '03',
            'title' => 'Research & Expert Partnerships',
            'desc' => 'Collaborations with environmental experts and researchers to ground action in evidence.',
            'pillar' => 'Pillar 03',
            'image' => asset('images/env/2ccd564b-9183-4bed-92ec-76afad5289d0.png'),
        ],
        [
            'num' => '04',
            'title' => 'Youth Climate Action',
            'desc' => 'Engaging young people directly in climate projects, not just classroom discussion.',
            'pillar' => 'Pillar 04',
            'image' => asset('images/env/416115ea-a762-4c37-b3d8-60879ff131e6.png'),
        ],
        [
            'num' => '05',
            'title' => 'Sustainable Livelihoods',
            'desc' => 'Connecting environmental stewardship with income and livelihood opportunities.',
            'pillar' => 'Pillar 05',
            'image' => asset('images/env/44a7c466-40be-4733-a4ce-71769417d963.png'),
        ],
        [
            'num' => '06',
            'title' => 'Awareness & Advocacy',
            'desc' => 'Building public understanding and support for sustainable, community-first solutions.',
            'pillar' => 'Pillar 06',
            'image' => asset('images/env/f10cd3a7-b476-45ad-a4d5-cb94493bd023.png'),
        ],
    ];
    $stats = [
        ['icon' => 'fa-bullhorn', 'count' => '50+', 'title' => 'Climate Programs', 'desc' => 'Conducted across institutions & communities'],
        ['icon' => 'fa-users', 'count' => '25,000+', 'title' => 'Youth & Citizens', 'desc' => 'Engaged in active environmental action'],
        ['icon' => 'fa-flask', 'count' => '15+', 'title' => 'Research Partners', 'desc' => 'Institutions & environmental think-tanks'],
        ['icon' => 'fa-tree', 'count' => '100+', 'title' => 'Grassroots Projects', 'desc' => 'Driving localized ecological preservation'],
    ];
    $audiences = [
        ['icon' => 'fa-graduation-cap', 'title' => 'Students & Youth', 'desc' => 'Fostering deep climate literacy, environmental leadership skills, and hands-on scientific curiosity from early education.'],
        ['icon' => 'fa-users', 'title' => 'Grassroots Communities', 'desc' => 'Partnering directly with rural and semi-urban communities to solve water, agriculture, and waste challenges.'],
        ['icon' => 'fa-flask', 'title' => 'Researchers & Experts', 'desc' => 'Providing real-world testbeds and fieldwork opportunities for ecological data collection and policy prototyping.'],
        ['icon' => 'fa-heart', 'title' => 'Volunteers & Donors', 'desc' => 'Uniting impassioned individuals and institutions to channel resources directly into impactful ecological change.'],
    ];
    $journeySteps = [
        ['num' => '01', 'title' => 'Awareness', 'subtitle' => 'Phase I', 'desc' => 'Cultivating deep scientific literacy and awareness on ecological vulnerability and climate realities.'],
        ['num' => '02', 'title' => 'Action', 'subtitle' => 'Phase II', 'desc' => 'Mobilizing students, volunteers, and local citizens into organized on-ground environmental campaigns.'],
        ['num' => '03', 'title' => 'Innovation', 'subtitle' => 'Phase III', 'desc' => 'Incubating sustainable technologies, conservation models, and circular economic solutions.'],
        ['num' => '04', 'title' => 'Sustainable Impact', 'subtitle' => 'Phase IV', 'desc' => 'Institutionalizing policy reforms, lasting ecological gains, and resilient self-sustaining communities.'],
    ];
@endphp

<main class="climate-page">
    <section class="climate-hero" aria-labelledby="climate-hero-title">
        <img class="climate-hero__image" src="{{ asset('images/banners/upsc1.avif') }}" alt="Green landscape representing environmental stewardship">
        <div class="climate-hero__overlay" aria-hidden="true"></div>
        <div class="container climate-hero__container">
            <div class="climate-hero__content" data-climate-reveal>
                <!-- <span class="climate-hero__eyebrow"><i class="fa fa-leaf" aria-hidden="true"></i> Education · Environment · Community</span> -->
                <h1 id="climate-hero-title">Climate, Environment <span>&amp; Sustainable Development</span></h1>
                <!-- <p>Building knowledge, partnerships and practical action for a more resilient planet.</p> -->
                <nav class="climate-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ url('/') }}">Home</a><span aria-hidden="true">/</span><span aria-current="page">Climate &amp; Sustainability</span>
                </nav>
            </div>
        </div>
        <span class="climate-hero__ornament climate-hero__ornament--one" aria-hidden="true"></span>
        <span class="climate-hero__ornament climate-hero__ornament--two" aria-hidden="true"></span>
    </section>

    <section class="climate-section climate-intro" aria-labelledby="climate-intro-title">
        <div class="container">
            <header class="climate-section-head" data-climate-reveal>
                <span class="climate-eyebrow"><i class="fa fa-leaf" aria-hidden="true"></i> Our Vision &amp; Commitment</span>
                <h2 id="climate-intro-title">Advancing Solutions for a Healthier, More Resilient Planet</h2>
            </header>
            <div class="climate-intro__layout">
                <figure class="climate-intro__media" data-climate-reveal>
                    <img src="{{ asset('images/about/climate.webp') }}" alt="Community and environmental work supporting climate resilience" loading="lazy">
                    <figcaption class="climate-intro__badge"><span class="climate-intro__badge-icon"><i class="fa fa-globe" aria-hidden="true"></i></span><span><strong>Earth First Initiative</strong><small>Grounded in evidence &amp; action</small></span></figcaption>
                </figure>
                <div class="climate-intro__copy" data-climate-reveal data-climate-delay="120">
                    <p class="climate-intro__lead">The learners we prepare today will inherit the environment we leave behind. This platform brings environmental experts, researchers and communities together to build science-based, community-driven responses to climate and sustainability challenges.</p>
                    <p>From youth climate literacy to on-ground conservation partnerships, our work here is designed to be practical, local and lasting.</p>
                    <div class="climate-intro__note"><i class="fa fa-leaf" aria-hidden="true"></i><span>Knowledge that grows into meaningful local action.</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="climate-focus-awards-section" aria-labelledby="climate-focus-title">
        <div class="container">
            <div class="focus-awards-intro" data-climate-reveal>
                <div class="focus-awards-heading">
                    <p class="focus-awards-kicker"><span class="focus-awards-kicker-icon" aria-hidden="true"><i class="fa fa-leaf"></i></span> Our Work</p>
                    <h2 id="climate-focus-title">What This Platform Covers</h2>
                </div>
                <p class="focus-awards-summary">Connecting learning, research and community leadership to the environmental challenges that shape our shared future.</p>
            </div>

            <div class="focus-awards-table-wrap" data-climate-reveal>
                <table class="focus-awards-table">
                    <caption class="visually-hidden">Focus areas and environmental initiatives</caption>
                    <thead>
                        <tr>
                            <th scope="col">Focus Area</th>
                            <th scope="col">Scope &amp; Impact</th>
                            <th scope="col" class="pillar-column">Pillar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($focusAreas as $index => $area)
                            <tr class="focus-award-row {{ $index === 0 ? 'is-active' : '' }}"
                                tabindex="0"
                                data-image="{{ $area['image'] }}"
                                data-alt="{{ $area['title'] }}">
                                <th scope="row">
                                    <span class="focus-row-title">{{ $area['title'] }}</span>
                                </th>
                                <td>
                                    <span class="focus-row-desc">{{ $area['desc'] }}</span>
                                </td>
                                <td class="pillar-column">
                                    <span class="focus-pillar-badge">{{ $area['pillar'] }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <figure class="focus-award-preview" aria-live="polite">
                    <img src="{{ $focusAreas[0]['image'] }}" alt="{{ $focusAreas[0]['title'] }}" data-award-preview>
                </figure>
            </div>
        </div>
    </section>

    <section class="climate-stats" aria-label="Our impact in numbers">
        <div class="container">
            <div class="climate-stats__grid">
                @foreach ($stats as $index => $stat)
                    <article class="climate-stat-card" data-climate-reveal data-climate-delay="{{ $index * 80 }}">
                        <span class="climate-stat-card__icon"><i class="fa {{ $stat['icon'] }}" aria-hidden="true"></i></span>
                        <strong class="climate-stat-card__number">{{ $stat['count'] }}</strong>
                        <h3>{{ $stat['title'] }}</h3><p>{{ $stat['desc'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="climate-section climate-audiences" aria-labelledby="climate-audiences-title">
        <div class="container">
            <header class="climate-section-head" data-climate-reveal>
                <span class="climate-eyebrow"><i class="fa fa-handshake-o" aria-hidden="true"></i> Ecosystem</span>
                <h2 id="climate-audiences-title">Communities, Students &amp; Changemakers</h2>
                <p>Transforming shared concern for our planet into organized, impactful, and lasting collective stewardship.</p>
            </header>
            <div class="climate-audience-grid">
                @foreach ($audiences as $idx => $audience)
                    <article class="climate-audience-card" data-climate-reveal data-climate-delay="{{ $idx * 80 }}">
                        <span class="climate-audience-card__icon"><i class="fa {{ $audience['icon'] }}" aria-hidden="true"></i></span>
                        <h3>{{ $audience['title'] }}</h3><p>{{ $audience['desc'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="climate-section climate-journey" aria-labelledby="climate-journey-title">
        <div class="container">
            <header class="climate-section-head" data-climate-reveal>
                <span class="climate-eyebrow"><i class="fa fa-road" aria-hidden="true"></i> Strategic Pathway</span>
                <h2 id="climate-journey-title">The Impact Journey</h2>
                <p>A coherent, milestone-driven framework turning initial awareness into enduring environmental and social impact.</p>
            </header>
            <div class="climate-timeline">
                <div class="climate-timeline__track" aria-hidden="true"><span></span></div>
                <ol class="climate-timeline__grid">
                    @foreach ($journeySteps as $k => $step)
                        <li class="climate-timeline__item" data-climate-reveal data-climate-delay="{{ $k * 100 }}">
                            <span class="climate-timeline__node">{{ $step['num'] }}</span>
                            <article class="climate-timeline__card">
                                <span class="climate-timeline__phase">{{ $step['subtitle'] }}</span>
                                <h3>{{ $step['title'] }}</h3><p>{{ $step['desc'] }}</p>
                            </article>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    <section class="climate-cta-wrap">
        <div class="container">
            <div class="climate-cta" data-climate-reveal>
                <img src="{{ asset('images/about/climate.webp') }}" alt="" aria-hidden="true" loading="lazy">
                <div class="climate-cta__overlay" aria-hidden="true"></div>
                <div class="climate-cta__content">
                    <span class="climate-cta__eyebrow"><i class="fa fa-globe" aria-hidden="true"></i> Join the Movement</span>
                    <h2>Help Us Build a Resilient &amp; Sustainable Future</h2>
                    <p>Whether you are an institution seeking partnerships, an expert eager to mentor, or a citizen ready to act — your participation accelerates the transition toward a greener tomorrow.</p>
                    <div class="climate-cta__actions">
                        <a class="climate-button climate-button--primary" href="{{ url('contact') }}"><i class="fa fa-handshake-o" aria-hidden="true"></i> Partner With Us</a>
                        <a class="climate-button climate-button--outline" href="{{ url('donate') }}"><i class="fa fa-heart" aria-hidden="true"></i> Support This Work</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
    <script src="{{ asset('js/climate-environment.js') }}" defer></script>
@endpush
