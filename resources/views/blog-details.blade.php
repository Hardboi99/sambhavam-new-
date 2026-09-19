@extends('layouts.app')

@section('title', ($blog->meta_title ?? $blog->title) . ' | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@push('meta')
    @if($blog->meta_description)
        <meta name="description" content="{{ $blog->meta_description }}">
    @endif
    @if($blog->meta_keywords)
        <meta name="keywords" content="{{ $blog->meta_keywords }}">
    @endif
@endpush

@section('content')

<section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">{{ $blog->title }}</h1>
            <h4 class="sub-title">
                <a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span>
                <a class="inner-page" href="{{ url('blogs') }}"> Blogs</a><span class="icon">/</span>
                <a class="inner-page" href="#"> {{ $blog->title }}</a>
            </h4>
        </div>
    </div>
</section>

<section class="blog-details-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">

                    @if($blog->image)
                        <div class="blog-details-thumb mb-30">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-100" style="border-radius: 10px;">
                        </div>
                    @endif

                    <ul class="post-meta mb-20">
                        <li><i class="fa fa-clock"></i>{{ \Carbon\Carbon::parse($blog->published_date)->format('F j, Y') }}</li>
                        @if($blog->category)
                            <li><i class="fa fa-folder"></i>{{ $blog->category }}</li>
                        @endif
                    </ul>

                    <div class="blog-details-body">
                        {!! $blog->content !!}
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <h4 class="sidebar-title mb-20">Recent Posts</h4>
                    @forelse ($recentBlogs as $recent)
                        <div class="d-flex gap-3 mb-20">
                            <img src="{{ $recent->image ? asset('storage/' . $recent->image) : asset('images/courses/course.jpg') }}"
                                 alt="{{ $recent->title }}" style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                            <div>
                                <a href="{{ url('blog-details/' . $recent->slug) }}" class="fw-semibold text-decoration-none">
                                    {{ Str::limit($recent->title, 50) }}
                                </a>
                                <div class="small text-muted">{{ \Carbon\Carbon::parse($recent->published_date)->format('d M Y') }}</div>
                            </div>
                        </div>
                    @empty
                        <p class="text-muted">No other posts yet.</p>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</section>

@endsection