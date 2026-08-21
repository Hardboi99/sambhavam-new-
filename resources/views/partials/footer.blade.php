{{-- ================================================================
     FOOTER PARTIAL — included on every page via @include('partials.footer')
     Edit this ONE file and every page's footer updates automatically.
================================================================ --}}

<footer class="footer-section pt-120" style="background-image:url('{{ asset('images/banners/footer.jpg') }}'); background-size:cover; background-position:center; background-repeat:no-repeat; position:relative; z-index:1;">

    <div class="footer-top-wrap">
        <div class="container">
            <div class="row footer-wrap">

                <!-- Get in Touch -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="widget-header">Get in Touch</h3>
                        <p class="mb-30">SAMBHAVAM Foundation — Education, Innovation, Leadership, Impact. Building future-ready learners and communities.</p>
                        <div class="footer-contact">
                            <span class="number"><i class="fa fa-phone"></i><a href="tel:+912249789869">+91 22 4978 9869</a></span>
                            <span class="number"><i class="fa fa-phone"></i><a href="tel:+918850332700">+91 88503 32700</a></span>
                            <a href="mailto:sambhavamfoundation@gmail.com" class="mail">sambhavamfoundation@gmail.com</a>
                        </div>
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/profile.php?id=61593294384122" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/sambhavamacademy" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/sambhavam-academy-429282429/" target="_blank" rel="noopener"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.youtube.com/@SambhavamAcademyPrep" target="_blank" rel="noopener"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://x.com/sambhavamacad" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Company Info -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget widget-2">
                        <h3 class="widget-header">About Sambhavam</h3>
                        <ul class="footer-list">
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('about') }}">About Us</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('about') }}#academy">Sambhavam Academy</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('about') }}#impact">Our Impact Ecosystem</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('careers') }}">Careers</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}">Become a Mentor</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}">Volunteer With Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Useful Links / Programmes -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="widget-header">Programmes</h3>
                        <ul class="footer-list">
                            <li><a href="{{ url('course-details') }}?course=upsc-civil-services">Civil Services</a></li>
                            <li><a href="{{ url('course-details') }}?course=jee-main-advanced">Engineering (JEE / MHT-CET)</a></li>
                            <li><a href="{{ url('course-details') }}?course=neet-ug">Medical (NEET-UG)</a></li>
                            <li><a href="{{ url('course-details') }}?course=school-foundation">School Foundation</a></li>
                            <li><a href="{{ url('course-details') }}?course=leadership-life-skills">Leadership &amp; Life Skills</a></li>
                            <li><a href="{{ url('course-details') }}?course=ai-coding-future-skills">Future Skills &amp; Innovation</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Our Centres -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="widget-header">Our Centres</h3>
                        <ul class="footer-list">
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}"><i class="fa-light fa-location-dot" style="margin-right:8px;"></i>Navi Mumbai (CBD Belapur)</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}"><i class="fa-light fa-location-dot" style="margin-right:8px;"></i>Barshi, Solapur</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}"><i class="fa-light fa-location-dot" style="margin-right:8px;"></i>Dharashiv</a></li>
                            <li><i class="fa fa-chevron-circle-right"></i><a href="{{ url('contact') }}"><i class="fa-light fa-location-dot" style="margin-right:8px;"></i>Chhatrapati Sambhajinagar</a></li>
                        </ul>
                        <a href="{{ url('donate') }}" class="ed-primary-btn mt-20">Support a Learner</a>
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
