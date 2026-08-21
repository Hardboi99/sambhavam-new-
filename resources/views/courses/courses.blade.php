@extends('layouts.app')
@section('title', 'Courses | Sambhavam - Learn. Innovate. Lead. Create Impact.')
@section('content')

<div>
    <section class="page-header" data-background="{{ asset('images/banners/crs.jpeg') }}">
         <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Our Courses</h1>
                <h4 class="sub-title"><a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span><a class="inner-page" href="{{ url('courses') }}"> Courses</a></h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="feature-course bg-white pt-80 pb-120">
        <div class="container">
           

            <!-- Category Filters -->
            <div class="course-filter-bar wow fade-in-bottom" data-wow-delay="200ms">
                <button class="course-filter-btn active" data-filter="all">All Courses</button>
                <button class="course-filter-btn" data-filter="Civil Services">Civil Services</button>
                <button class="course-filter-btn" data-filter="Engineering">Engineering</button>
                <button class="course-filter-btn" data-filter="Medical">Medical</button>
                <button class="course-filter-btn" data-filter="School Foundation">School Foundation</button>
                <button class="course-filter-btn" data-filter="Leadership">Leadership</button>
                <button class="course-filter-btn" data-filter="Future Skills">Future Skills</button>
            </div>

            @php
                $courses = [
                    // Civil Services
                    ['img' => 'upsc-civil-services.jfif',            'offer' => 'Civil Services',    'title' => 'UPSC Civil Services Examination',     'slug' => 'upsc-civil-services',            'batch' => '2027', 'price' => 24999, 'mrp' => 39999, 'rating' => 4.8, 'seats' => 32],
                    ['img' => 'mpsc-state-services.png',             'offer' => 'Civil Services',    'title' => 'MPSC State & Combined Examinations',  'slug' => 'mpsc-state-services',             'batch' => '2027', 'price' => 18999, 'mrp' => 29999, 'rating' => 4.7, 'seats' => 45],
                    ['img' => 'ssc-banking-railway.webp',            'offer' => 'Civil Services',    'title' => 'SSC, Banking & Railway Examinations', 'slug' => 'ssc-banking-railway',             'batch' => '2026', 'price' => 12999, 'mrp' => 19999, 'rating' => 4.6, 'seats' => 60],

                    // Engineering
                    ['img' => 'jee-main-advanced.jpg',               'offer' => 'Engineering',       'title' => 'JEE Main & JEE Advanced',             'slug' => 'jee-main-advanced',               'batch' => '2027', 'price' => 34999, 'mrp' => 54999, 'rating' => 4.9, 'seats' => 20],
                    ['img' => 'mht-cet.jpeg',                        'offer' => 'Engineering',       'title' => 'MHT-CET Preparation',                 'slug' => 'mht-cet',                         'batch' => '2027', 'price' => 21999, 'mrp' => 32999, 'rating' => 4.7, 'seats' => 38],
                    ['img' => 'stem-olympiads.png',                  'offer' => 'Engineering',       'title' => 'STEM Foundation & Olympiads',         'slug' => 'stem-olympiads',                  'batch' => '2026', 'price' => 15999, 'mrp' => 23999, 'rating' => 4.6, 'seats' => 50],

                    // Medical
                    ['img' => 'neet-ug.jfif',                        'offer' => 'Medical',           'title' => 'NEET-UG Preparation',                 'slug' => 'neet-ug',                         'batch' => '2027', 'price' => 32999, 'mrp' => 49999, 'rating' => 4.9, 'seats' => 25],
                    ['img' => 'biology-excellence.jpg',              'offer' => 'Medical',           'title' => 'Biology Excellence & Health-Science', 'slug' => 'biology-excellence',              'batch' => '2026', 'price' => 17999, 'mrp' => 26999, 'rating' => 4.7, 'seats' => 40],

                    // School Foundation
                    ['img' => 'foundation-vi-viii.webp',              'offer' => 'School Foundation', 'title' => 'Foundation Course — Classes VI–VIII', 'slug' => 'foundation-vi-viii',              'batch' => '2026', 'price' => 9999,  'mrp' => 15999, 'rating' => 4.6, 'seats' => 55],
                    ['img' => 'cbse-icse-ix-x.avif',                  'offer' => 'School Foundation', 'title' => 'CBSE / ICSE — Classes IX–X',          'slug' => 'cbse-icse-ix-x',                  'batch' => '2026', 'price' => 11999, 'mrp' => 17999, 'rating' => 4.7, 'seats' => 48],
                    ['img' => 'nmms-scholarship.jpg',                'offer' => 'School Foundation', 'title' => 'NMMS & Scholarship Exam Prep',        'slug' => 'nmms-scholarship',                'batch' => '2026', 'price' => 6999,  'mrp' => 10999, 'rating' => 4.5, 'seats' => 62],

                    // Leadership
                    ['img' => 'public-speaking-communication.jfif',   'offer' => 'Leadership',        'title' => 'Public Speaking & Communication',     'slug' => 'public-speaking-communication',   'batch' => '2026', 'price' => 8999,  'mrp' => 13999, 'rating' => 4.8, 'seats' => 34],
                    ['img' => 'critical-thinking-eq.jpg',            'offer' => 'Leadership',        'title' => 'Critical Thinking & Emotional Intelligence', 'slug' => 'critical-thinking-eq',       'batch' => '2026', 'price' => 8499,  'mrp' => 12999, 'rating' => 4.6, 'seats' => 41],

                    // Future Skills
                    ['img' => 'ai-data-literacy.jfif',                'offer' => 'Future Skills',     'title' => 'AI & Data Literacy',                  'slug' => 'ai-data-literacy',                'batch' => '2026', 'price' => 13999, 'mrp' => 21999, 'rating' => 4.8, 'seats' => 30],
                    ['img' => 'coding-robotics.jfif',                 'offer' => 'Future Skills',     'title' => 'Coding, Robotics & Prototyping',      'slug' => 'coding-robotics',                 'batch' => '2026', 'price' => 14999, 'mrp' => 22999, 'rating' => 4.7, 'seats' => 28],
                    ['img' => 'entrepreneurship-financial-literacy.jfif', 'offer' => 'Future Skills',  'title' => 'Entrepreneurship & Financial Literacy', 'slug' => 'entrepreneurship-financial-literacy', 'batch' => '2026', 'price' => 9999, 'mrp' => 15999, 'rating' => 4.6, 'seats' => 44],
                ];
            @endphp

            <div class="row gy-4 justify-content-center course-grid">
                @foreach ($courses as $i => $course)
                    @php
                        $discount = round((($course['mrp'] - $course['price']) / $course['mrp']) * 100);
                        $fullStars = floor($course['rating']);
                    @endphp
                    <div class="col-xl-4 col-lg-4 col-md-6 course-grid-item" data-category="{{ $course['offer'] }}">
                        <div class="course-item course-item-pw wow fade-in-bottom" data-wow-delay="{{ 150 + ($i % 4) * 100 }}ms">
                            <div class="course-thumb-wrap">
                                <span class="course-discount-badge">{{ $discount }}% OFF</span>
                                <span class="course-batch-badge">Batch {{ $course['batch'] }}</span>
                                <div class="course-thumb">
                                    <img src="{{ asset('images/courses/' . $course['img']) }}" alt="{{ $course['title'] }}">
                                </div>
                            </div>
                            <div class="course-content">
                                <span class="offer">{{ $course['offer'] }}</span>
                                <h3 class="title"><a href="{{ url('course-details') }}?course={{ $course['slug'] }}">{{ $course['title'] }}</a></h3>
                                <ul class="course-list">
                                    <li><i class="fa fa-map-marker"></i>All Centres</li>
                                    <li><i class="fa fa-user"></i>Mentor-Led</li>
                                </ul>
                                <div class="course-rating-row">
                                    <span class="course-stars">
                                        @for ($s = 0; $s < 5; $s++)
                                            <i class="fa fa-star {{ $s < $fullStars ? 'star-filled' : 'star-empty' }}"></i>
                                        @endfor
                                    </span>
                                    <span class="course-rating-num">{{ number_format($course['rating'], 1) }}</span>
                                    <span class="course-seats-left"><i class="fa fa-bolt"></i>{{ $course['seats'] }} left</span>
                                </div>
                                <div class="course-price-row">
                                    <span class="course-price">&#8377;{{ number_format($course['price']) }}</span>
                                    <span class="course-mrp">&#8377;{{ number_format($course['mrp']) }}</span>
                                </div>
                            </div>
                            <div class="bottom-content course-cta-group">
                                <a href="{{ url('course-details') }}?course={{ $course['slug'] }}&intent=buy" class="course-buy-btn">Buy Now</a>
                                <a href="{{ url('course-details') }}?course={{ $course['slug'] }}" class="course-explore-btn">Explore Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="course-empty-state" style="display:none;">
                <p>No courses in this category yet. Try a different filter.</p>
            </div>
        </div>
    </section>
    <!-- ./ course-section -->
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var filterBtns = document.querySelectorAll('.course-filter-btn');
        var courseItems = document.querySelectorAll('.course-grid-item');
        var emptyState = document.querySelector('.course-empty-state');

        filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                filterBtns.forEach(function (b) { b.classList.remove('active'); });
                btn.classList.add('active');

                var filter = btn.getAttribute('data-filter');
                var visibleCount = 0;

                courseItems.forEach(function (item) {
                    var category = item.getAttribute('data-category');
                    var show = (filter === 'all' || category === filter);
                    item.style.display = show ? '' : 'none';
                    if (show) visibleCount++;
                });

                emptyState.style.display = visibleCount === 0 ? 'block' : 'none';
            });
        });
    });
</script>
@endpush