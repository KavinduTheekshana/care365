<footer class="footer-wrapper footer-default">
        <!-- © 2025 Copyrights by Senoya Ceylon. All Rights Reserved.

Designed & Developed by Creatx Software Ltd. -->
        <!-- <div class="shape-mockup footer-bg-shape2 shake" data-bottom="8%" data-right="4%">
            <img src="assets/img/shape/shape1.png" alt="img">
        </div>
        <div class="shape-mockup footer-bg-shape3 jump" data-bottom="35%" data-right="6%">
            <img src="assets/img/shape/shape2.png" alt="img">
        </div>
        <div class="shape-mockup footer-bg-shape4 shake" data-top="35%" data-right="3%">
            <img src="assets/img/shape/shape3.png" alt="img">
        </div> -->
        <div class="container">
            <div class="footer-cta-wrap" id="contact-sec">
                <div class="row gy-40 justify-content-xl-between justify-content-center align-items-center">
                    <div class="col-xl-4 col-lg-6 order-xl-1">
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-anim2" data-cue="slideInLeft">Explore Our Comprehensive Care 365
                                Solutions</h2>
                        </div>
                    </div>

                    <div class="col-xl-5 order-xl-3">
                        <div class="btn-wrap style2 justify-content-xl-end justify-content-center"
                            data-cue="slideInRight">
                            <a class="th-btn" href="{{ route('contact') }}">Make Appointment <span
                                    class="th-btn-icon"></span></a>
                            <a class="th-btn style2" href="{{ route('team') }}">Our Specialists <span
                                    class="th-btn-icon"></span></a>
                        </div>
                    </div>
                    <div class="col-xl-auto align-self-end order-xl-2">
                        <div class="footer-cta-thumb">
                            <!-- <div class="img1" data-cue="slideInUp">
                                <img src="assets/img/normal/footer-default-cta-thumb-1.png" alt="img">
                            </div>
                            <div class="img2">
                                <img src="assets/img/normal/footer-default-cta-thumb-2.png" alt="img">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="index.html"><img src="assets/img/logo2.png" alt="Care 365"
                                            width="150px"></a>
                                </div>
                                <p class="about-text">Join Care 365's extraordinary odyssey, infused with compassion
                                    and dignity, pursuing a life well-lived.</p>
                                <div class="info-box">
                                    <div class="box-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <p class="box-text">
                                        <a href="mailto:info@care36t5.com" class="box-link">info@care36t5.com</a>
                                    </p>
                                </div>
                                <div class="info-box">
                                    <div class="box-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <p class="box-text">
                                        <a href="https://maps.google.com/" class="box-link">407 C1, Nomis Weragala Mw,
                                            Hokandara South. Thalawathugoda, Sri Lanka</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('careers') }}">Careers</a></li>
                                    <li><a href="{{ route('contact') }}">Book an Appointment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Resources</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('blog') }}">Our Blog</a></li>
                                    <li><a href="{{route('testimonial')}}">Testimonial</a></li>
                                    <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ route('about') }}">Investors Relations</a></li>
                                    <li><a href="{{ route('termsconditions') }}">Term & Conditions </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Services</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="{{ route('services') }}">In-Home Care</a></li>
                                        <li><a href="{{ route('services') }}">Personal Hygiene Assistance</a></li>
                                        <li><a href="{{ route('services') }}">Medication Reminders</a></li>
                                        <li><a href="{{ route('services') }}">Meal Preparation & Nutrition</a></li>
                                        <li><a href="{{ route('services') }}">Companionship & Social Activities</a></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Support</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('contact') }}">Help Center</a></li>
                                    <li><a href="{{ route('faq') }}">FAQs</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('about') }}">Ticket Support</a></li>
                                    <li><a href="{{ route('about') }}">Live Chat </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright-wrap">
                <div class="row justify-content-center gy-3 align-items-center">
                    <div class="col-lg-8" data-cue="slideInUp">
                        <p class="copyright-text">
                            © 2025 Copyrights by Care365. All Rights Reserved. Designed & Developed by <a
                                href="https://creatxsoftware.com" target="_blank">Creatx&nbsp;Software&nbsp;Ltd.</a>
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center" data-cue="slideInUp">
                        <div class="th-social">
                            <span class="text-theme">Social Media:</span>
                            <a href="https://www.facebook.com/profile.php?id=61558599706737" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/carethreesixtyfive?utm_source=qr&igsh=MTRkNHhuNWx2ZDd6cw=="
                                target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>