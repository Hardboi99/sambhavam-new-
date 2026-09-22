{{-- ================================================================
     HEADER PARTIAL — included on every page via @include('partials.header')
     Contains: nav header, search popup, mobile side menu, ticker bar.
     Edit this ONE file and every page updates automatically.
================================================================ --}}


<!-- header-area-start -->
<header class="header header-1 header-3 sticky-active">

    <div class="primary-header">
        <div class="container">
            <div class="primary-header-inner">

                <div class="header-left-inner">

                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
                    </a>

                    <div class="header-menu-wrap">
                        <div class="mobile-menu-items">
                            <ul class="sub-menu">
                                <li class="{{ request()->is('/') ? 'active' : '' }}">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ url('about-us') }}">About <i class="fa fa-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="{{ url('about-us') }}">About Us</a></li>
                                        <li><a href="{{ url('certificates') }}">Certificates &amp; Accreditations</a></li>
                                        <li><a href="{{ url('impact-ecosystem') }}">Our Impact Ecosystem</a></li>
                                        <li><a href="{{ url('leadership-team') }}">Leadership Team</a></li>
                                        <li><a href="{{ url('faculty') }}">Faculty</a></li>
                                        <li><a href="{{ url('careers') }}">Careers</a></li>
                                    </ul>
                                </li>
                                
                                <li class="menu-item-has-children">
                                <a href="{{ url('/') }}#academy">
                                    Sambhavam Academy <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul>
                                    @foreach ($headerCategories as $category)
                                    @if($category->courses->count() === 1)
                                        {{-- Single-course category: link straight to that course, no dropdown --}}
                                        <li>
                                            <a href="{{ url('course-details') }}?course={{ $category->courses->first()->slug }}">
                                                {{ $category->name }}
                                            </a>
                                        </li>
                                    @else
                                        {{-- Multi-course category: normal dropdown behaviour --}}
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('courses') }}?course={{ $category->slug }}">
                                                {{ $category->name }} <i class="fa fa-chevron-right"></i>
                                            </a>
                                            @if($category->courses->count())
                                                <ul>
                                                    @foreach ($category->courses as $course)
                                                        <li>
                                                            <a href="{{ url('course-details') }}?course={{ $course->slug }}">
                                                                {{ $course->title }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                                <li>
                                    <a href="{{ url('modules') }}">Modules</a>
                                </li>
                                </ul>
                            </li>

                                <li class="menu-item-has-children">
                                    <a href="{{ url('impact-ecosystem') }}">Social Impact Programmes <i class="fa fa-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="{{ url('climate-environment-sustainable-development') }}">Climate, Environment and Sustainable Development</a></li>
                                        <li><a href="{{ url('innovation-livelihoods-inclusive-empowerment') }}">Innovation, Livelihoods and Inclusive Empowerment</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('scholarships') }}">Scholarships</a>
                                </li>
                                <li><a href="{{ url('blogs') }}">Blogs</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="mid-header-right d-flex justify-content-end align-items-center"></div>
                    </div>
                    <!-- /.header-menu-wrap -->

                </div>
                <div class="header-right-wrap">
                    <div class="header-right">
                        @guest
                            <a href="{{ route('login') }}" class="ed-primary-btn header-btn d-none d-md-block">Login/Register</a>
                        @else
                            <div class="header-btn d-none d-md-block dropdown">
                                <a href="#" class="ed-primary-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ Auth::user()->role === 'admin' ? route('admin.logout') : route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endguest
                        <div class="header-right-item d-lg-none d-md-block">
                            <a href="javascript:void(0)" class="mobile-side-menu-toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <div class="header-contant-btn">
                            <ul>
                                <li><a href="tel:+91 22 4978 9869"><i class="fa fa-phone"></i> 2249789869</a>, <a href="tel:+917718892626">7718892626</a></li>
                                <li><a href="mailto:enquiry@sambhavam.org"><i class="fa fa-envelope-o"></i> enquiry@sambhavam.org</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.header-right -->
                </div>
            </div>
            <!-- /.primary-header-inner -->
        </div>
    </div>
    
    <div class="academic-courses-bar">
        <div class="academic-courses-inner">
            @foreach ($headerCategories as $category)
                @if($category->courses->count() === 1)
                    <div class="academic-course-item">
                        <a href="{{ url('course-details') }}?course={{ $category->courses->first()->slug }}">
                            {{ $category->name }}
                        </a>
                    </div>
                @else
                    <div class="academic-course-item">
                        <a href="{{ url('courses') }}?course={{ $category->slug }}">
                            {{ $category->name }}
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        @if($category->courses->count())
                            <div class="academic-dropdown">
                                @foreach ($category->courses as $course)
                                    <a href="{{ url('course-details') }}?course={{ $course->slug }}" class="{{ request('course') === $course->slug ? 'active' : '' }}">
                                        {{ $course->title }}
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- ============================================= -->
    <!-- ANNOUNCEMENT TICKER (now INSIDE the header, directly below the courses bar) -->
    <!-- ============================================= -->
    <div class="sambhavam-ticker-bar">
        <div class="ticker-wrap">
            <div class="ticker-move">
                <span class="ticker-item"><span class="ticker-icon ticker-icon-orange"><i class="fa fa-map-marker"></i></span> Centres in Navi Mumbai, Barshi (Solapur), Dharashiv &amp; Chhatrapati Sambhajinagar</span>
                <span class="ticker-divider">&bull;</span>
                <span class="ticker-item"><span class="ticker-icon ticker-icon-teal"><i class="fa fa-graduation-cap"></i></span> Civil Services &bull; Engineering &bull; Medical &bull; School Foundation &bull; Leadership</span>
                <span class="ticker-divider">&bull;</span>
                <span class="ticker-item"><span class="ticker-icon ticker-icon-green"><i class="fa fa-bullhorn"></i></span> Learn Today. Lead Tomorrow.</span>
                <span class="ticker-divider">&bull;</span>
                <span class="ticker-item"><span class="ticker-icon ticker-icon-orange"><i class="fa fa-phone"></i></span> Book a Free Counselling Session &mdash; Call +91 22 4978 9869</span>
                <span class="ticker-divider">&bull;</span>
                <span class="ticker-item"><span class="ticker-icon ticker-icon-teal"><i class="fa fa-heart"></i></span> Scholarships Available for Deserving Students</span>
                <span class="ticker-divider">&bull;</span>
                <!-- duplicate the items once so the loop has no visible seam -->
                <span class="ticker-item"><span class="ticker-icon ticker-icon-orange"><i class="fa fa-map-marker"></i></span> Centres in Navi Mumbai, Barshi (Solapur), Dharashiv &amp; Chhatrapati Sambhajinagar</span>
                <span class="ticker-divider">&bull;</span>
                <span class="ticker-item"><span class="ticker-icon ticker-icon-teal"><i class="fa fa-graduation-cap"></i></span> Civil Services &bull; Engineering &bull; Medical &bull; School Foundation &bull; Leadership</span>
                <span class="ticker-divider">&bull;</span>
                <span class="ticker-item"><span class="ticker-icon ticker-icon-green"><i class="fa fa-bullhorn"></i></span> Learn Today. Lead Tomorrow.</span>
                <span class="ticker-divider">&bull;</span>
                <span class="ticker-item"><span class="ticker-icon ticker-icon-orange"><i class="fa fa-phone"></i></span> Book a Free Counselling Session &mdash; Call +91 22 4978 9869</span>
                <span class="ticker-divider">&bull;</span>
                <span class="ticker-item"><span class="ticker-icon ticker-icon-teal"><i class="fa fa-heart"></i></span> Scholarships Available for Deserving Students</span>
            </div>
        </div>
    </div>
    <!-- ./ ticker-bar -->

</header>
<!-- /.Main Header -->

<!-- ============================================= -->
<!-- COUNSELLING POPUP (site-wide) -->
<!-- ============================================= -->
<div class="schp-counselling-overlay" id="counsellingModal">
    <div class="schp-counselling-modal">

        <button type="button"
                class="schp-counselling-close"
                id="closeCounsellingModal"
                aria-label="Close">
            &times;
        </button>

        <div class="schp-counselling-content">

            <div class="schp-counselling-icon">
                <i class="fa fa-graduation-cap"></i>
            </div>

            <span class="schp-counselling-label">
                SAMBHAVAM ACADEMY
            </span>

           <h3>Enquire Now</h3>

            <form method="POST" action="{{ route('enquiry.store') }}" class="schp-counselling-form" id="counsellingForm">
            @csrf
            <input type="hidden" name="message" value="General enquiry via popup">

            <div class="schp-form-group">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>

            <div class="schp-form-group">
                <input type="tel" name="phone" placeholder="Mobile Number" required>
            </div>

            <div class="schp-form-group">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>

            <div class="schp-form-group">
                <input type="text" name="city" placeholder="Your City" required>
            </div>

            <div class="schp-form-group">
                <select name="interest" required>
                    <option value="">Select Your Interest</option>
                    @foreach($headerCategories as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="schp-form-group">
                <select name="course_id" required>
                    <option value="">Select Course</option>
                    @foreach($headerCategories as $category)
                        @foreach($category->courses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                        @endforeach
                    @endforeach
                </select>
            </div>

            <button type="submit" class="schp-counselling-btn">
                Submit
                <i class="fa fa-arrow-right"></i>
            </button>
        </form>

            <span class="schp-counselling-note">
                Our academic team will get in touch with you.
            </span>

        </div>
    </div>
</div>

<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        </form>
        <div class="search-close"><i class="fa fa fa-xmark"></i></div>
    </div>
</div>
<!-- /#popup-search-box -->

<div class="mobile-side-menu">
    <div class="side-menu-content">
        <div class="side-menu-head">
            <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
            <button class="mobile-side-menu-close"><i class="fa fa-xmark"></i></button>
        </div>
        <div class="side-menu-wrap"></div>
        <ul class="side-menu-list">
            <li><i class="fa fa-map-marker"></i>Address : <br><span>CBD Belapur, Navi Mumbai</span></li>
            <li><i class="fa fa-phone"></i>Phone : <br><a href="tel:+912249789869">+91 22 4978 9869</a></li>
            <li><i class="fa fa-envelope"></i>Email : <br><a href="mailto:sambhavamfoundation@gmail.com">sambhavamfoundation@gmail.com</a></li>
        </ul>
    </div>
</div>
<!-- /.mobile-side-menu -->
<div class="mobile-side-menu-overlay"></div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<script>
    window.addEventListener('load', function () {
        document.querySelectorAll('.schp-counselling-form select').forEach(function (el) {
            // Undo nice-select's wrapper on these fields specifically
            if (window.jQuery && jQuery.fn.niceSelect) {
                jQuery(el).niceSelect('destroy');
            }
            el.style.display = '';

            new Choices(el, {
                searchEnabled: false,
                itemSelectText: '',
            });
        });
    });
</script>
<style>
    .schp-counselling-modal,
    .schp-counselling-content,
    .schp-counselling-form {
        overflow: visible !important;
    }

    .schp-counselling-form select {
        position: relative;
        z-index: 10;
    }

    .tab-overview ul {
        display: block;
        padding: 0;
        padding-left: 45px !important;
        margin-bottom: 20px;
    }

    /* Ensure the enquiry modal always renders above the sticky header (z-index: 99999) */
    #enquiryModal.modal {
        z-index: 100050;
    }
    .modal-backdrop.show {
        z-index: 100040;
    }

   
</style>