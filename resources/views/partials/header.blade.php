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
                                    <a href="{{ url('about') }}">About</a>
                                    <ul>
                                        <li><a href="{{ url('about') }}">About Us</a></li>
                                        <li><a href="{{ url('about') }}#impact">Our Impact Ecosystem</a></li>
                                        <li><a href="{{ url('careers') }}">Careers</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}#academy">Sambhavam Academy</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ url('/') }}#programmes">Programmes</a>
                                    <ul>
                                        <li><a href="{{ url('course-details') }}?course=upsc-civil-services">Civil Services</a></li>
                                        <li><a href="{{ url('course-details') }}?course=jee-main-advanced">Engineering</a></li>
                                        <li><a href="{{ url('course-details') }}?course=neet-ug">Medical</a></li>
                                        <li><a href="{{ url('course-details') }}?course=school-foundation">School Foundation</a></li>
                                        <li><a href="{{ url('course-details') }}?course=leadership-life-skills">Leadership &amp; Life Skills</a></li>
                                        <li><a href="{{ url('course-details') }}?course=ai-coding-future-skills">Future Skills &amp; Innovation</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('scholarships') }}">Scholarships</a>
                                </li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                        <div class="mid-header-right d-flex justify-content-end align-items-center"></div>
                    </div>
                    <!-- /.header-menu-wrap -->

                </div>
                <div class="header-right-wrap">
                    <div class="header-right">
                        <a href="{{ url('contact') }}" class="ed-primary-btn header-btn d-none d-md-block">Book Free Counselling</a>
                        <div class="header-right-item d-lg-none d-md-block">
                            <a href="javascript:void(0)" class="mobile-side-menu-toggle"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                    <!-- /.header-right -->
                </div>
            </div>
            <!-- /.primary-header-inner -->
        </div>
    </div>
</header>
<!-- /.Main Header -->

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
            <li><i class="fa fa-map-marker"></i>Address : <span>CBD Belapur, Navi Mumbai</span></li>
            <li><i class="fa fa-phone"></i>Phone : <a href="tel:+912249789869">+91 22 4978 9869</a></li>
            <li><i class="fa fa-envelope"></i>Email : <a href="mailto:sambhavamfoundation@gmail.com">sambhavamfoundation@gmail.com</a></li>
        </ul>
    </div>
</div>
<!-- /.mobile-side-menu -->
<div class="mobile-side-menu-overlay"></div>


<!-- ============================================= -->
<!-- ANNOUNCEMENT TICKER (between header and hero) -->
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