@extends('layouts.app')

@section('title', ($activeCategory->name ?? 'All Courses') . ' | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

<section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">{{ $activeCategory->name ?? 'All Courses' }}</h1>
            <h4 class="sub-title"><a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span><a class="inner-page" href="#"> Courses</a></h4>
        </div>
    </div>
</section>

<section class="feature-course pt-50 pb-100">
    <div class="container">

        <!-- Category filter pills -->
        <div class="d-flex flex-wrap gap-2 justify-content-center mb-20">
            <a href="{{ url('courses') }}" class="stream-pill {{ !$activeCategory ? 'active' : '' }}">
                All Courses
            </a>
            @foreach ($categories as $category)
                <a href="{{ url('courses') }}?category={{ $category->slug }}"
                   class="stream-pill {{ $activeCategory && $activeCategory->id === $category->id ? 'active' : '' }}">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        <div class="row gy-4">
            @forelse ($courses as $course)
                <div class="col-lg-4 col-md-6">
                    <div class="course-item">
                        <div class="course-thumb-wrap">
                            <div class="course-thumb">
                                <img src="{{ $course->image ? asset('storage/' . $course->image) : asset('images/courses/course.jpg') }}" alt="{{ $course->title }}">
                            </div>
                        </div>
                        <div class="course-content">
                            <span class="offer">{{ $course->category->name }}</span>
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
            @empty
                <div class="col-12 text-center py-5">
                    <p>No courses found in this category yet.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-40">
            {{ $courses->links('pagination::bootstrap-5') }}
        </div>

    </div>
</section>

@endsection