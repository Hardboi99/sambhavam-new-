@extends('layouts.app')

@section('title', 'Dr. Madhukar Sanap | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

<style>
    .ld-page{
        font-family: inherit;
        color: var(--ed-color-theme-secondary);
    }

    /* ---------------- Profile header ---------------- */
    .ld-wrap{
        max-width: 1140px;
        margin: 0 auto;
        padding: 60px 24px 0;
    }
    .ld-profile{
        display: flex;
        align-items: center;
        gap: 40px;
        margin-bottom: 50px;
        flex-wrap: wrap;
    }
    .ld-photo-frame{
        position: relative;
        width: 210px;
        height: 210px;
        flex-shrink: 0;
        opacity: 0;
        transition: opacity .7s ease;
    }
    .ld-page.is-ready .ld-photo-frame{ opacity: 1; }
    .ld-photo-frame::before{
        content:"";
        position: absolute;
        inset: -10px;
        border: 1.5px dashed #206a83;
        border-radius: 50%;
        opacity: .45;
    }
    .ld-photo{
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #206a83;
        box-shadow: 0 10px 26px rgba(0,0,0,0.12);
        display: block;
    }
    .ld-name-block{
        opacity: 0;
        transition: opacity .7s ease .15s;
    }
    .ld-page.is-ready .ld-name-block{ opacity: 1; }
    .ld-name{
        font-size: 30px;
        font-weight: 700;
        color: #206a83;
        margin: 0 0 6px;
    }
    .ld-role{
        font-size: 16px;
        color: var(--ed-color-text-body);
        margin: 0 0 4px;
    }
    .ld-tagline{
        font-size: 14.5px;
        color: var(--ed-color-text-body);
        font-style: italic;
    }

    /* ---------------- Bio / quote card ---------------- */
    .ld-bio-card{
        position: relative;
        background: #fff;
        border: 1px solid var(--line);
        border-radius: 4px;
        box-shadow: 0 8px 24px rgba(20,30,60,0.06);
        padding: 46px 50px;
        margin-bottom: 20px;
        opacity: 0;
        transition: opacity .7s ease .3s;
    }
    .ld-page.is-ready .ld-bio-card{ opacity: 1; }

    .ld-bio-card::before,
    .ld-bio-card::after{
        content:"";
        position: absolute;
        width: 22px;
        height: 22px;
        border-color: #206a83;
    }
    .ld-bio-card::before{
        top: 12px;
        right: 12px;
        border-top: 3px solid #206a83;
        border-right: 3px solid #206a83;
    }
    .ld-bio-card::after{
        bottom: 12px;
        left: 12px;
        border-bottom: 3px solid #206a83;
        border-left: 3px solid #206a83;
    }
    .ld-quote-mark{
        font-family: Georgia, serif;
        font-size: 46px;
        line-height: 1;
        color: var(--ed-color-theme-secondary);
        display: block;
        margin-bottom: -14px;
    }
    .ld-quote-mark.end{
        text-align: right;
        margin-top: -6px;
        margin-bottom: 0;
    }
    .ld-bio-text{
        font-size: 15.5px;
        line-height: 1.85;
        color: #374151;
        text-align: justify;
        margin: 0 0 18px;
    }
    .ld-bio-text:last-of-type{
        margin-bottom: 0;
    }

    /* ---------------- Back link ---------------- */
    .ld-back{
        padding: 10px 0 70px;
    }
    .ld-back a{
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 14.5px;
        font-weight: 600;
        color: #206a83;
        text-decoration: none;
        border-bottom: 1px solid rgba(46,158,91,0.4);
        padding-bottom: 2px;
    }
    .ld-back a:hover{ color: var( --ed-color-brand-yellow); border-color: var( --ed-color-brand-yellow); }
    .ld-back svg{ width: 14px; height: 14px; transform: rotate(180deg); }

    @media (max-width: 700px){
        .ld-profile{ flex-direction: column; text-align: center; }
        .ld-bio-card{ padding: 40px 26px; }
        .ld-bio-text{ text-align: left; }
    }

    @media (prefers-reduced-motion: reduce){
        .ld-page *{ transition-duration: .001ms !important; }
    }
</style>

<div class="ld-page" id="ldPage">

    <div class="ld-wrap">

        <div class="ld-profile">
            <div class="ld-photo-frame">
                <img class="ld-photo" src="{{ asset('images/faculty/madhukar-sanap.png') }}" alt="Dr. Madhukar Sanap">
            </div>
            <div class="ld-name-block">
                <h2 class="ld-name">Dr. Madhukar Sanap</h2>
                <p class="ld-role">Managing Director | Sambhavam Foundation</p>
                <p class="ld-tagline">Global Education &amp; Development Leader &bull; Institution Builder &bull; Social Impact &amp; Sustainability Strategist</p>
            </div>
        </div>

        <div class="ld-bio-card">
            <span class="ld-quote-mark">&ldquo;</span>

            <p class="ld-bio-text">
                Dr. Madhukar Sanap is a distinguished global education and development leader, institution builder, and social impact professional with over 25 years of experience spanning education, youth empowerment, sustainable development, climate resilience, and community transformation. With an MSW, MBA, and Ph.D., he brings a powerful convergence of social sciences, management, research, and development leadership.
            </p>
            <p class="ld-bio-text">
                His professional journey includes diverse leadership, strategic, and advisory engagements with UN agencies, the World Bank, government institutions, and leading national and international development platforms. At the international level, he has led and contributed to development programmes across Asia, Africa, and Small Island Developing States (SIDS), bringing global perspectives to locally relevant and scalable solutions.
            </p>
            <p class="ld-bio-text">
                As Managing Director of Sambhavam Foundation, Dr. Sanap is advancing a bold vision for inclusive, future-ready, and globally relevant education empowering young people with the knowledge, skills, leadership, innovation, and global exposure to thrive, lead, and create meaningful impact in a rapidly changing world.
            </p>

            <span class="ld-quote-mark end">&rdquo;</span>
        </div>

    </div>

    <div class="ld-wrap ld-back">
        <a href="{{ url('leadership-team') }}">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
            Back to Leadership Team
        </a>
    </div>

</div>

<script>
    requestAnimationFrame(function(){
        document.getElementById('ldPage').classList.add('is-ready');
    });
</script>

@endsection