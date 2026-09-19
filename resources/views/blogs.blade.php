@extends('layouts.app')

@section('title', 'Blogs | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

<section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Blogs</h1>
            <h4 class="sub-title">
                <a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span>
                <a class="inner-page" href="#"> Blogs</a>
            </h4>
        </div>
    </div>
</section>

<section class="blog-grid-area pt-120 pb-120">
    <div class="container">
        <div class="row gy-4">
            @forelse ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="post-card-2 post-card-3 inner-post-2 wow fade-in-bottom" data-wow-delay="300ms">
                        <div class="post-thumb">
                            <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('images/courses/course.jpg') }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="post-content-wrap">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li><i class=" fa fa-clock"></i>{{ \Carbon\Carbon::parse($blog->published_date)->format('F j, Y') }}</li>
                                    @if($blog->category)
                                        <li><i class=" fa fa-folder"></i>{{ $blog->category }}</li>
                                    @endif
                                </ul>
                                <h3 class="title">
                                    <a href="{{ url('blog-details/' . $blog->slug) }}">{{ $blog->title }}</a>
                                </h3>
                               
                                <a href="{{ url('blog-details/' . $blog->slug) }}" class="ed-primary-btn">
                                    Read More <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p>No blog posts yet. Check back soon.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-40">
            {{ $blogs->links('pagination::bootstrap-5') }}
        </div>
    </div>
</section>

@endsection