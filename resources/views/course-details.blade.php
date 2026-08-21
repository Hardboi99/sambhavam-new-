@extends('layouts.app')
 
@php
    // TEMPORARY hardcoded data — replace with a DB fetch keyed on $slug once the
    // backend/API is ready, e.g. $course = Course::where('slug', $slug)->firstOrFail();
    $slug = request()->query('course', '');
 
    $courseData = [
        'upsc-civil-services' => [
            'category'    => 'Civil Services',
            'title'       => 'UPSC Civil Services Examination',
            'tagline'     => 'GS Foundation + Optional Subject | Target 2027',
            'mode'        => 'Offline',
            'language'    => 'English',
            'duration'    => '12 Months',
            'level'       => 'Foundation to Advanced',
            'rating'      => 4.8,
            'reviews'     => 1240,
            'students'    => 3800,
            'batch'       => '2027',
            'start_date'  => '15 Sep 2026',
            'seats'       => 32,
            'price'       => 24999,
            'mrp'         => 39999,
            'img'         => 'upsc-civil-services.jfif',
            'about_1'     => 'A complete UPSC Civil Services preparation programme covering GS Foundation, your chosen Optional Subject, current affairs, answer writing and test series — designed to take you from first principles to interview-ready in one structured track.',
            'about_2'     => 'Classes are conducted by mentor faculty with daily doubt-clearing sessions, weekly answer writing practice, and full-length Prelims and Mains test series bundled into the same course.',
            'learn_points' => [
                'Complete GS Foundation across Polity, History, Geography, Economy, Science & Environment',
                'Structured coaching for your chosen Optional Subject',
                'Daily current affairs with editorial analysis',
                'Weekly answer writing with personalised feedback',
                'Prelims and Mains full-length test series with rank analytics',
                'Interview and personality test guidance',
            ],
            'curriculum'  => [
                [
                    'title' => 'General Studies Foundation',
                    'topics' => ['Indian Polity & Governance', 'Modern & Ancient Indian History', 'Geography (Indian & World)', 'Indian Economy', 'Science & Technology', 'Environment & Ecology'],
                ],
                [
                    'title' => 'Optional Subject Coaching',
                    'topics' => ['Choice of one optional from the UPSC list', 'Concept-building sessions', 'Previous Year Question discussion', 'Optional-specific answer writing'],
                ],
                [
                    'title' => 'Current Affairs & Editorial Analysis',
                    'topics' => ['Daily newspaper analysis', 'Monthly current affairs compilation', 'Government schemes & reports', 'Prelims + Mains linked current affairs'],
                ],
                [
                    'title' => 'Prelims & Mains Test Series',
                    'topics' => ['20+ full-length objective tests', '20+ descriptive Mains tests', 'One-on-one answer evaluation', 'All-India ranking & analytics'],
                ],
                [
                    'title' => 'Interview & Personality Test Guidance',
                    'topics' => ['Mock interview panels', 'DAF-based personalised preparation', 'Current affairs for interview', 'Body language & communication coaching'],
                ],
            ],
            'faculty'     => [
                ['name' => 'Anil Deshmukh',   'role' => 'Polity & Governance'],
                ['name' => 'Sanjana Rao',     'role' => 'History & Culture'],
                ['name' => 'Rohit Kulkarni',  'role' => 'Economy'],
            ],
            // Placeholder reviews pending real student review data
            'sample_reviews' => [
                ['name' => 'Priya Sharma', 'date' => '12 July, 2026', 'text' => 'The GS Foundation classes are very structured and the test series really helped me track my progress week on week.'],
                ['name' => 'Rahul Verma',  'date' => '02 June, 2026', 'text' => 'Faculty support and answer-writing feedback made the biggest difference for my Mains preparation.'],
            ],
            'fee_rows' => [
                ['label' => 'Course Fee (MRP)', 'value' => null], // filled dynamically below
            ],
            'fee_inclusions' => [
                'Classroom Sessions (GS + Optional)',
                'Printed & Digital Study Material',
                'Prelims + Mains Test Series',
                'Answer Writing Evaluation',
                'Daily Current Affairs',
                'Interview Guidance',
            ],
            'emi'  => 4166,
            'emi_months' => 6,
        ],
    ];
 
    $course = $courseData[$slug] ?? null;
@endphp
 
@section('title', ($course['title'] ?? 'Course Details') . ' | Sambhavam - Learn. Innovate. Lead. Create Impact.')
 
@section('content')
 
@if (!$course)
 
    <section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
       <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Course Details</h1>
                <h4 class="sub-title"><a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span><a class="inner-page" href="{{ url('courses') }}"> Courses</a></h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->
 
    <section class="course-details pt-120 pb-120">
        <div class="container text-center">
            <h2 class="title mb-20">Course details coming soon</h2>
            <p class="mb-30">We're still adding full details for this programme. In the meantime, explore our UPSC Civil Services course or browse all programmes.</p>
            <a href="{{ url('course-details') }}?course=upsc-civil-services" class="ed-primary-btn">View UPSC Course</a>
            <a href="{{ url('courses') }}" class="ed-primary-btn buy-btn">Browse All Courses</a>
        </div>
    </section>
 
@else
 
    @php
        $discount = round((($course['mrp'] - $course['price']) / $course['mrp']) * 100);
        $fullStars = floor($course['rating']);
    @endphp
 
    <section class="page-header" data-background="{{ asset('images/banners/upsc2.jpg') }}">
       
            <div class="overlay"></div>
        
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">{{ $course['title'] }}</h1>
                <h4 class="sub-title">
                    <a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span>
                    <a class="inner-page" href="{{ url('courses') }}"> Courses</a><span class="icon">/</span>
                    <a class="inner-page" href="#"> {{ $course['title'] }}</a>
                </h4>
            </div>
        </div>
    </section>
 
    <section class="course-details hero-overlap pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-12 mt-3">
                    <div class="course-details-content">
 
                        <div class="details-inner">
                            <ul class="details-meta">
                                <li>{{ $course['category'] }}</li>
                                <li>Batch {{ $course['batch'] }}</li>
                            </ul>
                            <h2 class="title">{{ $course['title'] }} <br> {{ $course['tagline'] }}</h2>
                            <ul class="course-details-list">
                                <li><i class="fa fa-user"></i><span>Mode:</span> {{ $course['mode'] }}</li>
                                <li><i class="fa fa-tags"></i>{{ $course['category'] }}</li>
                                <li><i class="fa fa-calendar"></i>Starts {{ $course['start_date'] }}</li>
                                <li class="review-wrap">
                                    <ul>
                                        @for ($s = 0; $s < 5; $s++)
                                            <li><i class="fa-sharp {{ $s < $fullStars ? 'fa' : 'fa' }} fa-star"></i></li>
                                        @endfor
                                    </ul>
                                    ({{ number_format($course['rating'], 2) }})
                                </li>
                            </ul>
                        </div>
                        <div class="course-details-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="fa-sharp fa fa-bookmark"></i>Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-book"></i>Curriculam</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-user"></i>Instructor</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="fee-tab" data-bs-toggle="tab" data-bs-target="#fee" type="button" role="tab" aria-controls="fee" aria-selected="false"><i class="fa fa-file"></i>Fee Structure</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab-2" data-bs-toggle="tab" data-bs-target="#contact-2" type="button" role="tab" aria-controls="contact-2" aria-selected="false"><i class="fa fa-star"></i>Reviews</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
 
                                <!-- Overview -->
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="tab-overview">
                                        <h3 class="title">Description</h3>
                                        <p class="mb-30">{{ $course['about_1'] }}</p>
                                        <p class="mb-40">{{ $course['about_2'] }}</p>
                                        <h3 class="title">What Will You Learn?</h3>
                                        <ul class="curri-list">
                                            @foreach ($course['learn_points'] as $point)
                                                <li><span><i class="fa fa-circle-check"></i> {{ $point }}</span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
 
                                <!-- Curriculam -->
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="curriculam-area">
                                        <div class="accordion" id="accordionExample">
                                            @foreach ($course['curriculum'] as $i => $module)
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading{{ $i }}">
                                                        <button class="accordion-button {{ $i === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $i }}" aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $i }}">
                                                            {{ $module['title'] }}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <ul class="curri-list">
                                                                @foreach ($module['topics'] as $topic)
                                                                    <li><span><i class="fa fa-video"></i> {{ $topic }}</span> <span><i class="fa fa-unlock"></i></span></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
 
                                <!-- Instructor -->
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="row team-wrap-2 gy-lg-0 gy-4 justify-content-center">
                                        @foreach ($course['faculty'] as $f)
                                            <div class="col-lg-4 col-md-6">
                                                <div class="team-item-3 team-item-5">
                                                    <div class="team-thumb">
                                                        <div class="shape"><img src="{{ asset('assets/img/shapes/team-shape-3.png') }}" alt="team"></div>
                                                        <div class="team-men">
                                                            <img src="{{ asset('assets/img/team/team-men-1.png') }}" alt="{{ $f['name'] }}">
                                                        </div>
                                                    </div>
                                                    <div class="team-content">
                                                        <h3 class="title"><a href="#">{{ $f['name'] }}</a></h3>
                                                        <span>{{ $f['role'] }}</span>
                                                        <ul class="social-list">
                                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
 
                                <!-- Fee Structure -->
                                <div class="tab-pane fade" id="fee" role="tabpanel" aria-labelledby="fee-tab">
                                    <div class="tab-overview">
                                        <h3 class="title">Fee Structure</h3>
                                        <ul class="curri-list mb-30">
                                            <li><span><i class="fa fa-tag"></i> Course Fee (MRP)</span> <span>&#8377;{{ number_format($course['mrp']) }}</span></li>
                                            <li><span><i class="fa fa-percent"></i> Discount</span> <span>{{ $discount }}% OFF</span></li>
                                            <li><span><i class="fa fa-indian-rupee-sign"></i> Payable Amount</span> <span>&#8377;{{ number_format($course['price']) }}</span></li>
                                            <li><span><i class="fa fa-calendar-days"></i> EMI Option</span> <span>&#8377;{{ number_format($course['emi']) }} x {{ $course['emi_months'] }} months</span></li>
                                        </ul>
                                        <h3 class="title">This Fee Includes</h3>
                                        <ul class="curri-list">
                                            @foreach ($course['fee_inclusions'] as $item)
                                                <li><span><i class="fa fa-circle-check"></i> {{ $item }}</span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
 
                                <!-- Reviews -->
                                <div class="tab-pane fade" id="contact-2" role="tabpanel" aria-labelledby="contact-tab-2">
                                    <div class="reviewr-wrap">
                                        <div class="review-list">
                                            @foreach ($course['sample_reviews'] as $review)
                                                <div class="review-item">
                                                    <div class="review-thumb">
                                                        <img src="{{ asset('assets/img/shop/review-list-1.png') }}" alt="{{ $review['name'] }}">
                                                    </div>
                                                    <div class="content">
                                                        <div class="content-top">
                                                            <h4 class="name">{{ $review['name'] }} <span>{{ $review['date'] }}</span></h4>
                                                            <ul class="review">
                                                                <li><i class="fa-sharp fa fa-star"></i></li>
                                                                <li><i class="fa-sharp fa fa-star"></i></li>
                                                                <li><i class="fa-sharp fa fa-star"></i></li>
                                                                <li><i class="fa-sharp fa fa-star"></i></li>
                                                                <li><i class="fa-sharp fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p>{{ $review['text'] }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
 
                            </div>
                        </div>
                    </div>
                </div>
 
                <div class="col-xl-3 col-lg-12">
                    
                   
                    <div class="course-sidebar sticky-widget bg-white">
                         <div class="course-sidebar price-box ">
                        <div class="course-details-img">
                        <img src="{{ asset('images/courses/' . $course['img']) }}" alt="{{ $course['title'] }}">
                        </div>
                        <h4 class="price pt-2">&#8377;{{ number_format($course['price']) }} <span>{{ $discount }}% off</span></h4>
                        <a href="#contact" class="ed-primary-btn">Talk to a Counsellor</a>
                        <a href="{{ url('course-details') }}?course={{ $slug }}&intent=buy" class="ed-primary-btn buy-btn">Buy Now</a>
                    </div>
                        <h4 class="sidebar-title">Course Information</h4>
                        <ul class="course-sidebar-list">
                            <li><i class="fa fa-calendar"></i>Starts: <span>{{ $course['start_date'] }}</span></li>
                            <li><i class="fa fa-house"></i>Mode: <span>{{ $course['mode'] }}</span></li>
                            <li><i class="fa fa-clock"></i>Duration: <span>{{ $course['duration'] }}</span></li>
                            <li><i class="fa fa-tag"></i>Level: <span>{{ $course['level'] }}</span></li>
                            <li><i class="fa fa-globe"></i>Language: <span>{{ $course['language'] }}</span></li>
                            <li><i class="fa fa-users"></i>Seats Left: <span>{{ $course['seats'] }}</span></li>
                        </ul>
                        <div class="share-btn">
                            <button class="ed-primary-btn"><i class="fa fa-share-nodes"></i>Share This Course</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
@endif
 
@endsection