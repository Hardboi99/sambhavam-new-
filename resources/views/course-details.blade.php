@extends('layouts.app')

@push('styles')
<style>
    .course-details p {
        color: #000000 !important;
    }

    .course-tabs-sticky {
        position: sticky !important;
        background: #fff !important;
        z-index: 10 !important;
        transition: none;
    }

    .course-tabs-sticky.is-pinned {
        position: fixed !important;
        left: 0;
        right: 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    .course-tabs-placeholder {
        display: none;
    }
    .course-tabs-placeholder.active {
        display: block;
    }

    .course-tabs-sticky .nav-link {
        cursor: pointer;
        border-bottom: 3px solid transparent !important;
        transition: all 0.3s ease;
    }

    .course-tabs-sticky .nav-link.active {
        background-color: #016d770d !important;
        color: #d59228 !important;
        border-bottom: 3px solid #016d77 !important;
    }

    .scroll-section {
        padding-top: 20px;
    }

    .tab-overview ul {
        display: block;
        padding: 0;
        padding-left: 45px !important;
        margin-bottom: 20px;
    }

    .nav-link.active {
        background-color: #016d770d;  /* this is ~5% opacity teal — barely visible */
        color: #d59228;                /* orange text */
    }
</style>

@endpush

@section('title', ($course->title ?? 'Course Details') . ' | Sambhavam - Learn. Innovate. Lead. Create Impact.')

@section('content')

@if (!$course)


    <section class="page-header" data-background="{{ asset('images/banners/upsc1.avif') }}">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Course Details</h1>
                <h4 class="sub-title"><a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span><a class="inner-page" href="{{ url('/') }}#programmes"> Courses</a></h4>
            </div>
        </div>
    </section>

    <section class="course-details pt-120 pb-120">
        <div class="container text-center">
            <h2 class="title mb-20">Course details coming soon</h2>
            <p class="mb-30">We're still adding full details for this programme. In the meantime, explore our other programmes.</p>
            <a href="{{ url('/') }}#programmes" class="ed-primary-btn buy-btn">Browse All Courses</a>
        </div>
    </section>

@else

    <section class="page-header" data-background="{{ asset('images/banners/upsc2.jpg') }}">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">{{ $course->title }}</h1>
                <h4 class="sub-title">
                    <a class="home" href="{{ url('/') }}">Home </a><span class="icon">/</span>
                    <a class="inner-page" href="{{ url('/') }}#programmes"> Courses</a><span class="icon">/</span>
                    <a class="inner-page" href="#"> {{ $course->title }}</a>
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
                                <li>{{ $course->category->name }}</li>
                            </ul>
                            <h2 class="title">{{ $course->title }}</h2>
                            <ul class="course-details-list">
                                <li><i class="fa fa-user"></i><span>Mode:</span> {{ ucfirst($course->mode) }}</li>
                                <li><i class="fa fa-tags"></i>{{ $course->category->name }}</li>
                                @if($course->duration)
                                    <li><i class="fa fa-clock"></i>Duration: {{ $course->duration }}</li>
                                @endif
                            </ul>
                        </div>

                        <div class="course-details-tab">
                     
                            <ul class="nav nav-tabs course-tabs-sticky" id="courseNav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#overview">
                                        <i class="fa-sharp fa fa-bookmark"></i>Overview
                                    </a>
                                </li>
                                @if($course->curriculum)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#curriculum">
                                            <i class="fa fa-book"></i>Curriculum
                                        </a>
                                    </li>
                                @endif
                                @if($course->key_features)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#features">
                                            <i class="fa fa-star"></i>Key Features
                                        </a>
                                    </li>
                                @endif
                                @if($course->eligibility_fees)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#eligibility">
                                            <i class="fa fa-file"></i>Eligibility &amp; Fees
                                        </a>
                                    </li>
                                @endif

                                
                            </ul>

                            
                            <div class="course-tabs-placeholder" id="tabsPlaceholder"></div>
                            <div id="courseContentSpy" class="tab-content">

                                    <div id="overview" class="tab-overview scroll-section">
                                        <h3 class="title">Overview</h3>
                                        @if($course->description)
                                            <div class="mb-30">{!! $course->description !!}</div>
                                        @else
                                            <p class="mb-30">Full description coming soon.</p>
                                        @endif
                                    </div>

                                    @if($course->curriculum)
                                        <div id="curriculum" class="tab-overview scroll-section">
                                            <h3 class="title">Curriculum</h3>
                                            <div class="mb-30">{!! $course->curriculum !!}</div>
                                        </div>
                                    @endif

                                    @if($course->key_features)
                                        <div id="features" class="tab-overview scroll-section">
                                            <h3 class="title">Key Features</h3>
                                            <div class="mb-30">{!! $course->key_features !!}</div>
                                        </div>
                                    @endif

                                    @if($course->eligibility_fees)
                                        <div id="eligibility" class="tab-overview scroll-section">
                                            <h3 class="title">Eligibility &amp; Fees</h3>
                                            <div class="mb-30">{!! $course->eligibility_fees !!}</div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-12">
                    <div class="course-sidebar sticky-widget bg-white">
                        <div class="course-sidebar price-box">
                            <div class="course-details-img pb-2">
                                <img src="{{ $course->image ? asset('storage/' . $course->image) : asset('images/courses/course.jpg') }}" alt="{{ $course->title }}">
                            </div>
                            <a href="{{ url('enroll-form') }}?course={{ $course->slug }}">
                                <button type="button" class="ed-primary-btn buy-btn w-100 mb-2">
                                    Enroll Now
                                </button>
                            </a>
                            <button type="button" class="ed-primary-btn w-100" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                Talk to a Counsellor
                            </button>
                            @if(session('success'))
                                <div class="alert alert-success text-center mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        <h4 class="sidebar-title">Course Information</h4>
                        <ul class="course-sidebar-list">
                            <li><i class="fa fa-house"></i>Mode: <span>{{ ucfirst($course->mode) }}</span></li>
                            @if($course->duration)
                                <li><i class="fa fa-clock"></i>Duration: <span>{{ $course->duration }}</span></li>
                            @endif
                            <li><i class="fa fa-tag"></i>Category: <span>{{ $course->category->name }}</span></li>
                        </ul>
                        <div class="share-btn">
                            <button type="button" class="ed-primary-btn" id="shareCourseBtn">
                                <i class="fa fa-share-nodes"></i>Share This Course
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Enquiry Modal -->
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Talk to a Counsellor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('enquiry.store') }}">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="course_slug" value="{{ $course->slug }}">

                        <div class="mb-3">
                            <label class="form-label">Course</label>
                            <input type="text" class="form-control" value="{{ $course->title }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mobile Number</label>
                            <input type="tel" name="phone" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email (optional)</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message (optional)</label>
                            <textarea name="message" rows="3" class="form-control" placeholder="Any specific questions?"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="ed-primary-btn w-100">Submit Enquiry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
    @endsection

@push('styles')
<style>
    .tab-overview ul {
        display: block;
        padding: 0;
        padding-left: 45px !important;
        margin-bottom: 20px;
    }
</style>
@endpush

@push('scripts')
<script>
    document.getElementById('shareCourseBtn')?.addEventListener('click', async function () {
        const shareData = {
            title: @json($course->title),
            text: 'Check out this course at Sambhavam Academy: ' + @json($course->title),
            url: window.location.href
        };

        if (navigator.share) {
            try {
                await navigator.share(shareData);
            } catch (err) {}
        } else {
            try {
                await navigator.clipboard.writeText(window.location.href);
                alert('Course link copied to clipboard!');
            } catch (err) {
                alert('Could not copy link. Please copy the URL manually.');
            }
        }
    });

    function getStickyOffset() {
        const header = document.querySelector('header.header');
        const tabsBar = document.querySelector('.course-tabs-sticky');
        const headerHeight = header ? header.offsetHeight : 0;
        const tabsHeight = tabsBar ? tabsBar.offsetHeight : 0;
        return headerHeight + tabsHeight;
    }

    let tabsOriginalOffsetTop = null;

    function getTabsOriginalOffset() {
        const tabs = document.querySelector('.course-tabs-sticky');
        if (tabs && tabsOriginalOffsetTop === null) {
            // Only capture this once, before the bar is ever pinned/fixed
            const rect = tabs.getBoundingClientRect();
            tabsOriginalOffsetTop = rect.top + window.scrollY;
        }
        return tabsOriginalOffsetTop;
    }

    function updateStickyTabPin() {
        const header = document.querySelector('header.header');
        const tabs = document.querySelector('.course-tabs-sticky');
        const placeholder = document.getElementById('tabsPlaceholder');
        const contentColumn = document.querySelector('.course-details-content');
        if (!header || !tabs || !placeholder || !contentColumn) return;

        const headerHeight = header.offsetHeight;
        const originalOffset = getTabsOriginalOffset();
        const shouldPin = window.scrollY + headerHeight >= originalOffset;

        if (shouldPin) {
            const rect = contentColumn.getBoundingClientRect();

            tabs.style.top = headerHeight + 'px';
            tabs.style.left = rect.left + 'px';
            tabs.style.width = rect.width + 'px';
            tabs.style.right = 'auto';
            tabs.classList.add('is-pinned');

            placeholder.style.height = tabs.offsetHeight + 'px';
            placeholder.classList.add('active');
        } else {
            tabs.classList.remove('is-pinned');
            tabs.style.top = '';
            tabs.style.left = '';
            tabs.style.width = '';
            placeholder.classList.remove('active');
        }
    }

    window.addEventListener('scroll', function () {
        updateStickyTabPin();
        updateActiveTabOnScroll();
    });

    window.addEventListener('load', function () {
        updateStickyTabPin();
        updateActiveTabOnScroll();
    });

    window.addEventListener('resize', function () {
        tabsOriginalOffsetTop = null; // recalculate on resize since layout may shift
        updateStickyTabPin();
        updateActiveTabOnScroll();
    });

    // Smooth scroll to section on nav click, accounting for sticky header + tab bar height
    document.querySelectorAll('#courseNav a.nav-link').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);
            if (target) {
                const offset = getStickyOffset() + 15;
                const targetPosition = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top: targetPosition, behavior: 'smooth' });
            }
        });
    });

</script>


<script>
    function updateActiveTabOnScroll() {
        const sections = document.querySelectorAll('#courseContentSpy .scroll-section');
        const navLinks = document.querySelectorAll('#courseNav a.nav-link');
        const offset = getStickyOffset() + 30;

        let currentSectionId = null;

        sections.forEach(function (section) {
            const rect = section.getBoundingClientRect();
            if (rect.top <= offset) {
                currentSectionId = section.getAttribute('id');
            }
        });

        // Fallback: if nothing matched yet (page just loaded at top), use the first section
        if (!currentSectionId && sections.length) {
            currentSectionId = sections[0].getAttribute('id');
        }

        navLinks.forEach(function (link) {
            const targetId = link.getAttribute('href').substring(1);
            if (targetId === currentSectionId) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    window.addEventListener('scroll', updateActiveTabOnScroll);
    window.addEventListener('load', updateActiveTabOnScroll);
    window.addEventListener('resize', updateActiveTabOnScroll);
</script>
@endpush