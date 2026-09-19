@extends('layouts.app')

@section('title', 'Modules | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

<section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Modules</h1>
            <h4 class="sub-title">
                <a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span>
                <a class="inner-page" href="#"> Modules</a>
            </h4>
        </div>
    </div>
</section>

<section class="pt-100 pb-100">
    <div class="container">
        <div class="section-heading text-center mb-50">
            <h4 class="sub-heading wow fade-in-bottom" data-wow-delay="200ms">
                <span class="heading-icon"><i class="fa fa-bolt"></i></span>Official Resources
            </h4>
            <h2 class="section-title wow fade-in-bottom" data-wow-delay="300ms">Government &amp; Official Module Links</h2>
            <p class="wow fade-in-bottom" data-wow-delay="400ms" style="max-width:700px;margin:0 auto;">
                Quick access to official government websites and portals relevant to your exam preparation and modules.
            </p>
        </div>

        <div class="row gy-4">
            @forelse ($modules as $module)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ $module->url }}" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                        <div class="why-card why-card-blue h-100">
                            <div class="why-icon"><i class="fa fa-link"></i></div>
                            <h4 class="title">{{ $module->title }}</h4>
                            @if($module->description)
                                <p>{{ $module->description }}</p>
                            @endif
                            <span class="small text-muted">
                                {{ parse_url($module->url, PHP_URL_HOST) }} <i class="fa fa-external-link"></i>
                            </span>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p>No module links have been added yet.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

@endsection