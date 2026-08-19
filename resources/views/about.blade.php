@extends('layouts.app')

@section('title', 'About Us - Sambhavam')

@section('content')

    <section class="pt-120 pb-120">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="sub-heading">About Sambhavam</h4>
                <h2 class="section-title">Possibility Becomes Progress</h2>
            </div>
            <p class="text-center" style="max-width:760px;margin:0 auto;">
                SAMBHAVAM Foundation is a Section 8 not-for-profit organisation headquartered in Navi Mumbai, India,
                building a next-generation platform at the intersection of education, technology, innovation,
                leadership, climate action and inclusive development.
            </p>
        </div>
    </section>

    {{-- Reuse the same sections anywhere you want them --}}
    @include('partials.impact-stats')
    @include('partials.testimonial-wall')

@endsection
