@extends('layouts.frontend')

<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">



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

    <!--==============================
    Mobile Menu
  ============================== -->
    
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-bg-thumb" data-overlay="title" data-opacity="5" data-bg-src="assets/img/bg/breadcumb-bg.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">Blog</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row gy-40">
                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-1.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">How to Keep Your Loved Ones Healthy Year-Round </a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-2.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">How to Look After Dogs Loved Ones Healthy Year-Round</a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-3.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Signs Your Cat is Stressed Your Loved Ones </a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-4.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Essential Tips for a Healthy Pet Life Throughout the Year</a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-5.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Understanding Dog Behavior for Better Communication</a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-6.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">The Ultimate Guide to Fostering Rescue Animals</a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-7.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">The Importance of Regular Vet Check-Ups for Pets</a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-8.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">How to Create a Pet-Friendly Home Environment</a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-cue="slideInUp">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/blog-s-1-3.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>Jordan Park</a>
                                <a href="blog.html"><i class="fas fa-calendar"></i>24 Jun, 2025</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">A Comprehensive Handbook for Nurturing Rescue Pets</a></h3>
                            <div class="btn-wrap">
                                <a href="blog-details.html" class="link-btn th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="th-pagination mt-50 text-center" data-cue="slideInUp">
                <ul>
                    <li><a href="#"><i class="far fa-arrow-left"></i></a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="far fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <!-- Swiper Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Range Slider -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- Isotope Filter -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Cue Js -->
    <script src="assets/js/scrollCue.min.js"></script>
    <!-- Gsap -->
    <script src="assets/js/gsap.min.js"></script>
    <!-- Scroll Trigger -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- Split Text -->
    <script src="assets/js/SplitText.min.js"></script>
    <!-- Lenis Js -->
    <script src="assets/js/lenis.min.js"></script>

    <!-- Perticle Js -->
    <script src="assets/js/particles.min.js"></script>
    <script src="assets/js/particles-config.js"></script>

    <!-- Main Js File -->
    <script src="assets/js/main.js"></script>
</body>

</html>