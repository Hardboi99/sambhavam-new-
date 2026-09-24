{{-- ================================================================
     FOOTER PARTIAL — included on every page via @include('partials.footer')
     Edit this ONE file and every page's footer updates automatically.
================================================================ --}}

<style>
/* ==========================================================================
   Footer -- compact spacing + subtle animation
   (Inline here on purpose. This partial is included in the body, after
   the layout's style stack in the head has already been rendered, so a
   pushed style block from here never reaches the page. Keeping it inline
   guarantees it actually loads.)
   ========================================================================== */

.footer-section {
    padding-top: 55px !important;   /* was pt-100 */
}

.footer-top-wrap {
    padding-bottom: 14px !important; /* was pb-60, then 30px — tightened further */
}

.footer-wrap {
    margin-bottom: 0 !important;
}

.footer-widget .widget-header {
    font-size: 17px;
    margin-bottom: 10px;
}

.footer-widget p.mb-30 {
    margin-bottom: 16px !important;
    font-size: 13.5px;
    line-height: 1.55;
}

.footer-contact {
    margin-bottom: 14px;
}

.footer-widget .footer-contact .number,
.footer-contact .number {
    font-size: 14px !important;
    font-weight: 500 !important;
    margin-bottom: 5px !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
}

.footer-widget .footer-contact .number i,
.footer-contact .number i {
    font-size: 13px !important;
    margin-right: 0 !important;
    color: #ffffff !important;
    width: 16px !important;
    text-align: center !important;
    flex-shrink: 0 !important;
}

.footer-widget .footer-contact .number a,
.footer-contact .number a {
    font-size: 14px !important;
    font-weight: 500 !important;
    color: #ffffff !important;
    text-decoration: none !important;
    letter-spacing: 0.2px !important;
}

.footer-widget .footer-contact .mail,
.footer-contact .mail {
    font-size: 14px !important;
    font-weight: 500 !important;
    margin-top: 4px !important;
    margin-bottom: 14px !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
    color: #ffffff !important;
}

.footer-widget .footer-contact .mail i,
.footer-contact .mail i {
    font-size: 13px !important;
    color: #ffffff !important;
    width: 16px !important;
    text-align: center !important;
    flex-shrink: 0 !important;
}

.footer-list li {
    margin-bottom: 6px;
    font-size: 13.5px;
}

.footer-social {
    margin-top: 4px;
    display: flex;
    gap: 10px;
    padding: 0;
    list-style: none;
}

.copyright-area {
    padding: 14px 0 !important;
    margin-top: 0 !important;
}

.copyright-area p {
    font-size: 13px;
    margin: 0;
}

/* --------------------------------------------------------------------------
   Social icons — circular, original brand colors, hover animation
   -------------------------------------------------------------------------- */
.footer-social li a {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF !important;
    font-size: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease;
}

.social-fb       { background: #1877F2; }
.social-insta    { background: radial-gradient(circle at 30% 110%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); }
.social-linkedin { background: #0A66C2; }
.social-youtube  { background: #FF0000; }
.social-twitter  { background: #1DA1F2; }

.footer-social li a:hover {
    transform: translateY(-5px) scale(1.12) rotate(8deg);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
}

.footer-list li a {
    transition: transform 0.25s ease, color 0.25s ease;
    display: inline-block;
}
.footer-list li a:hover {
    transform: translateX(5px);
}

.footer-list li i.fa-chevron-circle-right {
    display: inline-block;
    transition: transform 0.25s ease;
}
.footer-list li:hover i.fa-chevron-circle-right {
    transform: translateX(3px) scale(1.1);
}

.footer-contact .number a,
.footer-contact .mail {
    transition: color 0.25s ease, transform 0.25s ease;
    display: inline-block;
}
.footer-contact .number a:hover,
.footer-contact .mail:hover {
    transform: translateX(3px);
}

.footer-widget .ed-white-btn {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.footer-widget .ed-white-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.18);
}

#scroll-top {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
#scroll-top:hover {
    transform: translateY(-4px) scale(1.08);
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.25);
}

/* --------------------------------------------------------------------------
   Fade-in for widgets — pure CSS, runs on load automatically.
   (Not JS/IntersectionObserver-driven on purpose: a pushed script from this
   partial doesn't reliably reach every layout it's included in — e.g. it
   never ran on the admin/guest login pages — which left these widgets stuck
   at opacity:0 forever. A CSS animation always runs regardless.)
   -------------------------------------------------------------------------- */
[data-footer-reveal] {
    opacity: 0;
    transform: translateY(18px);
    animation: footerWidgetReveal 0.6s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
}

@keyframes footerWidgetReveal {
    to { opacity: 1; transform: translateY(0); }
}

@media (prefers-reduced-motion: reduce) {
    [data-footer-reveal] {
        opacity: 1;
        transform: none;
        animation: none;
    }
}
</style>

<footer class="footer-section pt-100" style="background-image:url('{{ asset('images/banners/footer.jpg') }}'); background-size:cover; background-position:center; background-repeat:no-repeat; position:relative; z-index:1;">

    <div class="footer-top-wrap pb-60">
        <div class="container">
            <div class="row footer-wrap">

                <!-- Get in Touch -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget" data-footer-reveal>
                        <h3 class="widget-header">Get in Touch</h3>
                        <p class="mb-30">SAMBHAVAM Foundation — Education, Innovation, Leadership, Impact. Building future-ready learners and communities.</p>
                        <div class="footer-contact">
                            <span class="number"><i class="fa fa-phone"></i><a href="tel:+912249789869">+91 22 4978 9869</a></span>
                            <span class="number"><i class="fa fa-phone"></i><a href="tel:+918850332700">+91 88503 32700</a></span>
                            <span class="number"><i class="fa fa-phone"></i><a href="tel:+917718892626">+91 77188 92626</a></span>
                            <a href="mailto:enquiry@sambhavam.org" class="mail"><i class="fa fa-envelope-o"></i><span style="margin-left: 2px;">enquiry@sambhavam.org</span></a>
                        </div>
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/profile.php?id=61593294384122" target="_blank" rel="noopener" class="social-fb"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/sambhavamacademy" target="_blank" rel="noopener" class="social-insta"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/sambhavam-academy-429282429/" target="_blank" rel="noopener" class="social-linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.youtube.com/@SambhavamAcademyPrep" target="_blank" rel="noopener" class="social-youtube"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://x.com/sambhavamacad" target="_blank" rel="noopener" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Company Info -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget-2" data-footer-reveal style="transition-delay: 80ms;">
                        <h3 class="widget-header">About Sambhavam</h3>
                        <ul class="footer-list">
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('about-us') }}">About Us</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('certificates') }}">Certificates &amp; Accreditations</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('/') }}#academy">Sambhavam Academy</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('impact-ecosystem') }}">Our Impact Ecosystem</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('careers') }}">Careers</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}">Become a Mentor</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}">Volunteer With Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Useful Links / Programmes -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget" data-footer-reveal style="transition-delay: 160ms;">
                        <h3 class="widget-header">Programmes</h3>
                        <ul class="footer-list">
                            @foreach ($headerCategories as $category)
                                @if($category->courses->count() === 1)
                                    {{-- Single-course category: link straight to that course --}}
                                    <li>
                                        <a href="{{ url('course-details') }}?course={{ $category->courses->first()->slug }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @else
                                    {{-- Multi-course category: link to the category's course listing --}}
                                    <li>
                                        <a href="{{ url('courses') }}?course={{ $category->slug }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Our Centres -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget" data-footer-reveal style="transition-delay: 240ms;">
                        <h3 class="widget-header">Our Centres</h3>
                        <ul class="footer-list">
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}"><i class="fa-light fa-location-dot" style="margin-right:8px;"></i>Navi Mumbai (CBD Belapur)</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}"><i class="fa-light fa-location-dot" style="margin-right:8px;"></i>Barshi, Solapur</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}"><i class="fa-light fa-location-dot" style="margin-right:8px;"></i>Dharashiv</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}"><i class="fa-light fa-location-dot" style="margin-right:8px;"></i>Chhatrapati Sambhajinagar</a></li>
                        </ul>
                        <a href="{{ url('donate') }}" class="ed-white-btn mt-20">Support a Learner</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container ">
            <div class="d-md-flex d-block ">
            <div class="copyright-content ">
                <p>Copyright &copy; {{ date('Y') }} <span>Sambhavam Foundation</span>. All Rights Reserved.</p>
            </div>
            <div class="developed-content">
                <p>Developed By <a href="https://hsdigitalmedia.com/" target="_blank">HS Digital Media®</a>.</p>
            </div>
            </div>
        </div>
    </div>
</footer>
<!-- ./ footer-section -->

<div id="scrollup">
    <button id="scroll-top" class="scroll-to-top"><i class="fa fa-arrow-up-long"></i></button>
</div>
<!--scrollup-->