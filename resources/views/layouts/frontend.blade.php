<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Babet - Pet Care & Shop HTML Template - Home One</title>
    <meta name="author" content="Babet">
    <meta name="description" content="Babet - Pet Care & Shop HTML Template">
    <meta name="keywords" content="Babet - Pet Care & Shop HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    @vite(['', 'resources/js/app.js'])

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Onest:wght@100..900&display=swap"
        rel="stylesheet">

    <!--==============================
 All CSS File
 ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @stack('styles')

</head>

<body class="bg-smoke2">

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--********************************
   Code Start From Here
 ******************************** -->
    <div class="cursor-follower"></div>

    <!-- slider drag cursor -->
    <!-- <div class="slider-drag-cursor"> DRAG </div> -->



    @include('frontend.components.mobile-header')
    @include('frontend.components.header')
    @yield('content')

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
                            <a class="th-btn style2" href="team.html">Our Specialists <span
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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="blog.html">Our Groomers</a></li>
                                    <li><a href="contact.html">Book an Appointment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Resources</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">Articles & Tips</a></li>
                                    <li><a href="about.html">Preventative Care</a></li>
                                    <li><a href="blog.html">Our Blog</a></li>
                                    <li><a href="about.html">Investors Relations</a></li>
                                    <li><a href="contact.html">Term & Conditions </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="service.html">Dog & Cat Grooming</a></li>
                                    <li><a href="service.html">Bath & Brush</a></li>
                                    <li><a href="service.html">Haircuts & Styling</a></li>
                                    <li><a href="service.html">Nail Trimming</a></li>
                                    <li><a href="service.html">Ear Cleaning</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto" data-cue="slideInUp">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Support</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="contact.html">Help Center</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="about.html">Ticket Support</a></li>
                                    <li><a href="about.html">Live Chat </a></li>
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

    <!--********************************
   Code End  Here
 ******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Cue Js -->
    <script src="{{ asset('assets/js/scrollCue.min.js') }}"></script>
    <!-- Gsap -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <!-- Scroll Trigger -->
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- Split Text -->
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
    <!-- Lenis Js -->
    <script src="{{ asset('assets/js/lenis.min.js') }}"></script>

    <!-- Perticle Js -->
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/particles-config.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
