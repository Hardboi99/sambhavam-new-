{{-- ================================================================
     HEADER PARTIAL — included on every page via @include('partials.header')
     Contains: nav header, search popup, mobile side menu, ticker bar.
     Edit this ONE file and every page updates automatically.
================================================================ --}}


<!-- header-area-start -->
<header class="header header-1 header-3 sticky-active">

    <div class="primary-header">
        <div class="container-fluid header-container px-3 px-xl-4 px-xxl-5">
            <div class="primary-header-inner">

                <!-- 1. Left Logo & ISO 9001:2015 Seal -->
                <div class="header-logo-wrap d-flex align-items-center">
                    <a href="{{ url('/') }}" class="header-logo">
                        <img src="{{ asset('images/logo.png') }}" class="logo" alt="Sambhavam Logo">
                    </a>
                    <a href="{{ url('certificates') }}#iso-9001" class="header-iso-badge" title="ISO 9001:2015 Quality Management System Certified">
                        <img src="{{ asset('images/home/download.png') }}" class="iso-badge-img" alt="ISO 9001:2015 Certified">
                    </a>
                </div>

                <!-- 2. Center Menu -->
                <div class="header-menu-wrap d-none d-xl-flex">
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
                                            <li>
                                                <a href="{{ url('course-details') }}?course={{ $category->courses->first()->slug }}">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @else
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
                </div>

                <!-- 3. Right Action Buttons -->
                <div class="header-right-wrap">
                    <div class="header-right d-flex align-items-center gap-2">
                        <!-- Donate Now Pill Button -->
                        <a href="{{ route('donate') }}" class="sambhavam-donate-btn">
                            <i class="fa fa-heart"></i> <span>Donate Now</span>
                        </a>

                        <!-- User / Login / Admin -->
                        @guest
                            <a href="{{ route('login') }}" class="header-user-btn d-none d-sm-inline-flex">
                                <i class="fa fa-user-circle-o"></i> <span>Login / Register</span>
                            </a>
                        @else
                            <div class="dropdown d-none d-sm-inline-block">
                                <a href="#" class="header-user-btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-user-circle-o"></i> <span>{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
                                    <li>
                                        <a class="dropdown-item" href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}">
                                            <i class="fa fa-tachometer me-2"></i> Dashboard
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form method="POST" action="{{ Auth::user()->role === 'admin' ? route('admin.logout') : route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger">
                                                <i class="fa fa-sign-out me-2"></i> Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endguest

                        <!-- Mobile Hamburger Toggle -->
                        <div class="header-right-item d-xl-none">
                            <a href="javascript:void(0)" class="mobile-side-menu-toggle" aria-label="Open Menu">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.primary-header-inner -->
        </div>
    </div>
    
    <!-- Academic Courses Bar with Contact Info at the side -->
    <div class="academic-courses-bar">
        <div class="container-fluid header-container px-3 px-xl-4 px-xxl-5">
            <div class="academic-courses-flex-wrap d-flex align-items-center justify-content-between">
                
                <!-- Left: Courses Items -->
                <div class="academic-courses-inner d-flex align-items-center">
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

                <!-- Right: Contact & Email Info at the side of Sambhavam Academy Bar (Only on large screens where space allows) -->
                <div class="academic-bar-contact d-none d-xxl-flex align-items-center gap-3">
                    <div class="academic-contact-phone-block">
                        <a href="tel:+912249789869" class="academic-contact-link">
                            <i class="fa fa-phone"></i> +91 22 4978 9869
                        </a>
                        <a href="tel:+918850332700" class="academic-contact-link">
                            <i class="fa fa-phone"></i> +91 88503 32700
                        </a>
                    </div>
                    <div class="academic-contact-email-block">
                        <a href="mailto:enquiry@sambhavam.org" class="academic-contact-link">
                            <i class="fa fa-envelope-o"></i> enquiry@sambhavam.org
                        </a>
                    </div>
                </div>

            </div>
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
        <div class="side-menu-head d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt="logo" style="max-height: 42px; width: auto;"></a>
                <a href="{{ url('certificates') }}#iso-9001" class="header-iso-badge" title="ISO 9001:2015 Certified">
                    <img src="{{ asset('images/home/download.png') }}" class="iso-badge-img" style="width: 50px;" alt="ISO 9001:2015">
                </a>
            </div>
            <button class="mobile-side-menu-close"><i class="fa fa-xmark"></i></button>
        </div>
        <div class="p-3 text-center border-bottom">
            <a href="{{ route('donate') }}" class="sambhavam-donate-btn w-100 justify-content-center">
                <i class="fa fa-heart me-1"></i> Donate Now
            </a>
        </div>
        <div class="side-menu-wrap"></div>
        <ul class="side-menu-list">
            <li><i class="fa fa-map-marker"></i>Address : <br><span>CBD Belapur, Navi Mumbai</span></li>
            <li><i class="fa fa-phone"></i>Phone : <br><a href="tel:+912249789869">+91 22 4978 9869</a>, <a href="tel:+918850332700">+91 88503 32700</a></li>
            <li><i class="fa fa-envelope"></i>Email : <br><a href="mailto:enquiry@sambhavam.org">enquiry@sambhavam.org</a></li>
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
    /* ======================================================== */
    /* ======================================================== */
    /* ACADEMIC COURSES BAR WITH SIDE CONTACT INFO (RESPONSIVE) */
    /* ======================================================== */
    .academic-courses-bar {
        width: 100% !important;
        background: #016d77 !important;
        border-top: 1px solid rgba(255, 255, 255, 0.18) !important;
        border-bottom: 2.5px solid #c89809 !important;
        position: relative !important;
        z-index: 9990 !important;
    }
    .sambhavam-ticker-bar {
        position: relative !important;
        z-index: 990 !important;
    }
    .academic-courses-flex-wrap {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        flex-wrap: nowrap !important;
        gap: 16px !important;
        width: 100% !important;
    }
    .academic-courses-inner {
        margin: 0 !important;
        padding: 0 !important;
        display: flex !important;
        align-items: center !important;
        flex: 1 1 auto !important;
        min-width: 0 !important;
        flex-wrap: nowrap !important;
    }
    .academic-course-item {
        position: relative !important;
        flex-shrink: 0 !important;
        border-right: 1px solid rgba(255, 255, 255, 0.25) !important;
    }
    .academic-course-item:last-child {
        border-right: none !important;
    }
    .academic-course-item > a {
        display: inline-flex !important;
        align-items: center !important;
        gap: 6px !important;
        padding: 12px 15px !important;
        color: #ffffff !important;
        font-size: 13.5px !important;
        font-weight: 600 !important;
        white-space: nowrap !important;
        text-decoration: none !important;
        letter-spacing: -0.1px !important;
        transition: background-color 0.2s ease, color 0.2s ease !important;
    }
    .academic-course-item > a:hover {
        background-color: rgba(255, 255, 255, 0.15) !important;
        color: #ffffff !important;
    }
    .academic-course-item > a i {
        font-size: 11px !important;
        transition: transform 0.2s ease !important;
    }
    .academic-course-item:hover > a i {
        transform: rotate(180deg) !important;
    }

    /* Academic Bar Dropdown Menu */
    .academic-dropdown {
        display: none !important;
        position: absolute !important;
        top: 100% !important;
        left: 0 !important;
        min-width: 290px !important;
        background: #ffffff !important;
        border-radius: 10px !important;
        border: 1px solid #e2e8f0 !important;
        box-shadow: 0 16px 36px rgba(3, 72, 97, 0.2), 0 4px 12px rgba(0, 0, 0, 0.08) !important;
        padding: 8px 0 !important;
        z-index: 99999 !important;
        pointer-events: auto !important;
    }
    .academic-course-item:hover .academic-dropdown {
        display: block !important;
    }
    .academic-dropdown a {
        display: block !important;
        padding: 9px 18px !important;
        color: #1e293b !important;
        font-size: 13px !important;
        font-weight: 500 !important;
        text-decoration: none !important;
        white-space: normal !important;
        line-height: 1.4 !important;
        transition: all 0.2s ease !important;
    }
    .academic-dropdown a:hover,
    .academic-dropdown a.active {
        background-color: #f0fdfa !important;
        color: #016d77 !important;
        font-weight: 600 !important;
        padding-left: 22px !important;
    }

    /* Right Contact Box in Academic Bar */
    .academic-bar-contact {
        display: flex !important;
        align-items: center !important;
        gap: 16px !important;
        flex-shrink: 0 !important;
        padding-left: 16px !important;
        border-left: 1px solid rgba(255, 255, 255, 0.35) !important;
    }
    .academic-contact-phone-block {
        display: flex !important;
        flex-direction: column !important;
        gap: 2px !important;
        line-height: 1.25 !important;
    }
    .academic-contact-link {
        color: #ffffff !important;
        font-size: 12.5px !important;
        font-weight: 700 !important;
        letter-spacing: 0.2px !important;
        text-decoration: none !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 6px !important;
        white-space: nowrap !important;
        transition: color 0.2s ease !important;
    }
    .academic-contact-link i {
        font-size: 11.5px !important;
        color: #deb65e !important;
    }
    .academic-contact-link:hover {
        color: #deb65e !important;
    }
    .academic-contact-email-block {
        display: flex !important;
        align-items: center !important;
    }

    /* Large Desktop (>= 1400px): Visible Overflow & Hover Dropdowns */
    @media (min-width: 1400px) {
        .academic-courses-bar,
        .academic-courses-flex-wrap,
        .academic-courses-inner {
            overflow: visible !important;
        }
    }

    /* Tablets, Laptops & Small Desktops (< 1400px): Smooth Touch Scroll without overlapping */
    @media (max-width: 1399.98px) {
        .academic-bar-contact {
            display: none !important;
        }
        .academic-courses-bar {
            overflow: hidden !important;
        }
        .academic-courses-flex-wrap {
            width: 100% !important;
            overflow: visible !important;
        }
        .academic-courses-inner {
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch !important;
            scrollbar-width: none !important;
            width: 100% !important;
            padding: 0 4px !important;
        }
        .academic-courses-inner::-webkit-scrollbar {
            display: none !important;
        }
        .academic-course-item > a {
            padding: 11px 13px !important;
            font-size: 13px !important;
        }
    }

    /* Mobile screens (< 768px) */
    @media (max-width: 767.98px) {
        .academic-courses-inner {
            padding: 0 !important;
        }
        .academic-course-item > a {
            padding: 9px 12px !important;
            font-size: 12px !important;
        }
    }

    /* ======================================================== */
    /* SINGLE-LINE HEADER NAVIGATION BAR (TOP-MOST STACKING) */
    /* ======================================================== */
    .primary-header {
        position: relative !important;
        z-index: 10005 !important;
        background: #ffffff !important;
    }
    .primary-header-inner {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        flex-wrap: nowrap !important;
        gap: 16px !important;
        padding: 8px 0 !important;
        width: 100% !important;
    }
    .header-logo-wrap {
        flex-shrink: 0 !important;
    }
    .header .primary-header-inner .header-logo img,
    .header-logo img {
        max-height: 46px !important;
        width: auto !important;
        display: block !important;
    }
    .header-menu-wrap {
        display: flex !important;
        align-items: center !important;
        flex: 1 1 auto !important;
        justify-content: center !important;
    }

    /* ONLY Top-Level Menu Items */
    .header .primary-header-inner .header-menu-wrap .sub-menu {
        display: flex !important;
        align-items: center !important;
        margin: 0 !important;
        padding: 0 !important;
        list-style: none !important;
        gap: 2px !important;
    }
    .header .primary-header-inner .header-menu-wrap .sub-menu > li {
        display: inline-block !important;
        margin: 0 !important;
        position: relative !important;
    }
    .header .primary-header-inner .header-menu-wrap .sub-menu > li > a {
        padding: 16px 10px !important;
        font-size: 13.5px !important;
        font-weight: 600 !important;
        color: #16243A !important;
        white-space: nowrap !important;
        letter-spacing: -0.1px !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 4px !important;
        transition: color 0.25s ease !important;
    }
    .header .primary-header-inner .header-menu-wrap .sub-menu > li:hover > a,
    .header .primary-header-inner .header-menu-wrap .sub-menu > li.active > a {
        color: #016d77 !important;
    }

    /* ======================================================== */
    /* CLEAN & BEAUTIFUL DROPDOWNS & FLYOUT SUBMENUS */
    /* ======================================================== */
    .header .primary-header-inner .header-menu-wrap .sub-menu li ul {
        background-color: #ffffff !important;
        min-width: 310px !important;
        width: max-content !important;
        max-width: 420px !important;
        padding: 8px 0 !important;
        border-radius: 12px !important;
        border: 1px solid #e2e8f0 !important;
        box-shadow: 0 18px 45px rgba(3, 72, 97, 0.18), 0 2px 8px rgba(0, 0, 0, 0.06) !important;
        position: absolute !important;
        left: 0 !important;
        top: 100% !important;
        z-index: 100010 !important;
        margin: 0 !important;
        list-style: none !important;
    }

    /* 2nd Level Flyout Dropdown (e.g. Civil Services -> courses) */
    .header .primary-header-inner .header-menu-wrap .sub-menu li li ul {
        top: 0 !important;
        left: 100% !important;
        margin-left: 2px !important;
        min-width: 320px !important;
        border-radius: 12px !important;
        z-index: 100020 !important;
    }

    /* Dropdown Items */
    .header .primary-header-inner .header-menu-wrap .sub-menu li ul li {
        display: block !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        border-bottom: 1px solid #f1f5f9 !important;
        transition: background-color 0.2s ease !important;
        position: relative !important;
    }
    .header .primary-header-inner .header-menu-wrap .sub-menu li ul li:last-child {
        border-bottom: none !important;
    }

    /* Dropdown Link */
    .header .primary-header-inner .header-menu-wrap .sub-menu li ul li a {
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        width: 100% !important;
        padding: 10px 18px !important;
        font-size: 13.5px !important;
        font-weight: 500 !important;
        color: #1e293b !important;
        text-align: left !important;
        white-space: normal !important;
        line-height: 1.45 !important;
        background: transparent !important;
        transition: all 0.2s ease !important;
    }
    .header .primary-header-inner .header-menu-wrap .sub-menu li ul li a i {
        font-size: 11px !important;
        color: #94a3b8 !important;
        margin-left: 10px !important;
        transition: transform 0.2s ease, color 0.2s ease !important;
    }

    /* Dropdown Hover State - Soft Luxury Teal Tint */
    .header .primary-header-inner .header-menu-wrap .sub-menu li ul li:hover {
        background-color: #f0fdfa !important;
    }
    .header .primary-header-inner .header-menu-wrap .sub-menu li ul li:hover > a {
        color: #016d77 !important;
        font-weight: 600 !important;
        padding-left: 20px !important;
    }
    .header .primary-header-inner .header-menu-wrap .sub-menu li ul li:hover > a i {
        color: #016d77 !important;
        transform: translateX(3px) !important;
    }

    /* Right Action Container */
    .header-right-wrap {
        display: flex !important;
        align-items: center !important;
        flex-shrink: 0 !important;
    }

    /* Professional Donate Now Navbar Button */
/* Professional Golden Donate Now Navbar Button */
.sambhavam-donate-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    background: linear-gradient(135deg, #f5d76e 0%, #d4af37 50%, #b8860b 100%);
    color: #ffffff !important;
    font-family: inherit !important;
    font-size: 13.5px !important;
    font-weight: 600 !important;
    letter-spacing: -0.1px !important;
    text-transform: none !important;
    padding: 8px 18px;
    border-radius: 50px;
    box-shadow: 0 4px 14px rgba(212, 175, 55, 0.35);
    transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
    white-space: nowrap;
    text-decoration: none;
    border: none;
    position: relative;
    overflow: hidden;
}

.sambhavam-donate-btn:hover {
    background: linear-gradient(135deg, #b8860b 0%, #d4af37 50%, #f5d76e 100%);
    color: #ffffff !important;
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 8px 22px rgba(212, 175, 55, 0.48);
}
    .sambhavam-donate-btn i {
        color: #ffffff;
        font-size: 11.5px;
        animation: heartBeat 2s infinite ease-in-out;
    }
    @keyframes heartBeat {
        0%, 100% { transform: scale(1); }
        14% { transform: scale(1.22); }
        28% { transform: scale(1); }
        42% { transform: scale(1.22); }
        70% { transform: scale(1); }
    }

    /* User / Admin / Login Button & Dropdown */
    .header-user-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #ffffff;
        border: 1.5px solid #034861;
        color: #034861 !important;
        padding: 7px 16px;
        border-radius: 50px;
        font-family: inherit !important;
        font-size: 13.5px !important;
        font-weight: 600 !important;
        letter-spacing: -0.1px !important;
        white-space: nowrap;
        transition: all 0.25s ease;
        text-decoration: none;
        box-shadow: 0 2px 8px rgba(3, 72, 97, 0.08);
    }
    .header-user-btn:hover {
        background: #034861;
        color: #ffffff !important;
        border-color: #034861;
        box-shadow: 0 4px 12px rgba(3, 72, 97, 0.18);
    }
    .header-right .dropdown {
        position: relative !important;
        z-index: 100020 !important;
    }
    .header-right .dropdown-menu {
        z-index: 100050 !important;
        border-radius: 12px !important;
        border: 1px solid #e2e8f0 !important;
        box-shadow: 0 16px 36px rgba(3, 72, 97, 0.18), 0 4px 12px rgba(0, 0, 0, 0.08) !important;
        padding: 8px 0 !important;
        min-width: 200px !important;
        margin-top: 8px !important;
    }
    .header-right .dropdown-menu .dropdown-item {
        padding: 9px 18px !important;
        font-size: 13.5px !important;
        font-weight: 500 !important;
        color: #1e293b !important;
        display: flex !important;
        align-items: center !important;
        gap: 8px !important;
        transition: all 0.2s ease !important;
    }
    .header-right .dropdown-menu .dropdown-item:hover {
        background-color: #f0fdfa !important;
        color: #016d77 !important;
        font-weight: 600 !important;
    }
    .header-right .dropdown-menu .dropdown-item.text-danger:hover {
        background-color: #fef2f2 !important;
        color: #dc2626 !important;
        font-weight: 600 !important;
    }
    .header-right .dropdown-menu .dropdown-divider {
        margin: 6px 0 !important;
        border-color: #f1f5f9 !important;
    }

    /* Mobile Hamburger Icon */
    .mobile-side-menu-toggle {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: #f1f5f9;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #034861;
        font-size: 18px;
        transition: all 0.25s ease;
    }
    .mobile-side-menu-toggle:hover {
        background: #016d77;
        color: #ffffff;
    }

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

    /* ======================================================== */
    /* HEADER ISO 9001:2015 SEAL BADGE                          */
    /* ======================================================== */
    .header-logo-wrap {
        display: flex !important;
        align-items: center !important;
        position: relative !important;
        gap: 0px !important;
        flex-shrink: 0 !important;
    }
    .header-iso-badge {
        display: inline-flex !important;
        align-items: center !important;
        text-decoration: none !important;
        position: relative !important;
        top: -4px !important;
        margin-left: -12px !important;
        flex-shrink: 0 !important;
        transition: transform 0.25s cubic-bezier(0.175, 0.885, 0.32, 1.275), filter 0.25s ease !important;
    }
    .header-iso-badge:hover {
        transform: rotate(-6deg) scale(1.06) !important;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.22)) !important;
    }
    .iso-badge-img {
        width: clamp(48px, 5vw, 82px) !important;
        height: auto !important;
        transform: rotate(-9deg) !important;
        transform-origin: center !important;
        object-fit: contain !important;
        flex-shrink: 0 !important;
        filter: drop-shadow(0 3px 5px rgba(0, 0, 0, 0.18)) !important;
        display: block !important;
    }
    @media (min-width: 1400px) {
        .header-iso-badge {
            margin-left: -14px !important;
        }
        .iso-badge-img {
            width: 78px !important;
        }
    }
    @media (max-width: 1399px) {
        .header-iso-badge {
            margin-left: -10px !important;
        }
        .iso-badge-img {
            width: 66px !important;
        }
    }
    @media (max-width: 991px) {
        .header-iso-badge {
            margin-left: -8px !important;
            top: -3px !important;
        }
        .iso-badge-img {
            width: 56px !important;
        }
    }
    @media (max-width: 575px) {
        .header-iso-badge {
            margin-left: -6px !important;
            top: -2px !important;
        }
        .iso-badge-img {
            width: 46px !important;
        }
    }
    @media (max-width: 375px) {
        .header-iso-badge {
            margin-left: -4px !important;
            top: -2px !important;
        }
        .iso-badge-img {
            width: 40px !important;
        }
    }
    @media (max-width: 330px) {
        .header-iso-badge {
            margin-left: -3px !important;
        }
        .iso-badge-img {
            width: 35px !important;
        }
    }
</style>