@extends('layouts.frontend')

<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">



<body class="">

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
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper bg-smoke2">
        <div class="breadcumb-bg-thumb" data-overlay="title" data-opacity="5" data-bg-src="assets/img/bg/breadcumb-bg.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">Contact Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Contact Area   
==============================-->
    <div class="space overflow-hidden bg-smoke2 contact-area-1 position-relative z-index-common" id="contact-sec">
        <div class="container">
            <div class="row gy-40 gx-40 justify-content-center">
                <div class="col-xl-5" data-cue="slideInUp">
                    <div class="info-wrap style2" data-cue="slideInUp">
                        <div class="top">
                            <h4 class="box-title">Let’s working together</h4>
                            <p class="box-text">Thank you for your interest in Attach Web Agency. We're excited to hear from you and discuss...</p>
                        </div>

                        <div class="info-box" data-cue="slideInUp">
                            <div class="box-icon">
                                <img src="assets/img/icon/con-call.svg" alt="img">
                            </div>
                            <div class="content">
                                <h4 class="box-title">Call Us</h4>
                                <p class="box-text"><a href="tel:+94776604040">(+94)77 660 40 40</a></p>
                            </div>
                        </div>
                        <div class="info-box" data-cue="slideInUp">
                            <div class="box-icon">
                                <img src="assets/img/icon/con-email.svg" alt="img">
                            </div>
                            <div class="content">
                                <h4 class="box-title">E-mail</h4>
                                <p class="box-text"><a href="mailto:info@care36t5.com">info@care36t5.com</a></p>
                            </div>
                        </div>
                        <div class="info-box" data-cue="slideInUp">
                            <div class="box-icon">
                                <img src="assets/img/icon/con-location.svg" alt="img">
                            </div>
                            <div class="content">
                                <h4 class="box-title">Visit Us</h4>
                                <p class="box-text">407 C1, Nomis Weragala Mw, Hokandara South. Thalawathugoda, Sri Lanka</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="contact-form-v1">
                        <form action="mail.php" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name*">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address*">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number*">
                                </div>

                                <div class="form-group col-md-6">
                                    <select name="subject" id="subject" class="form-select">
                                        <option value="" disabled selected hidden>Select Service*</option>
                                        <option value="Medical Care">Medical Care</option>
                                        <option value="Nutritious Meals">Nutritious Meals</option>
                                        <option value="Social/Recreational Activities">Social/Recreational Activities</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="24-hour Staff Availability">24-hour Staff Availability</option>
                                        <option value="Religious and Spiritual Support">Religious and Spiritual Support</option>
                                        <option value="Wound Care">Wound Care</option>
                                        <option value="Paralysis Care">Paralysis Care</option>
                                        <option value="Dementia & Parkinson Care">Dementia & Parkinson Care</option>
                                        <option value="Housekeeping/Laundry Services">Housekeeping/Laundry Services</option>
                                        <option value="Physical Therapy and Rehabilitation">Physical Therapy and Rehabilitation</option>
                                        <option value="Video Conferencing Facility">Video Conferencing Facility</option>
                                        <option value="Music, Art Activities/Library Facilities">Music, Art Activities/Library Facilities</option>
                                        <option value="Affordable Packages">Affordable Packages</option>
                                        <option value="Television Room/Lounge">Television Room/Lounge</option>
                                        <option value="Digital Well-being Platform">Digital Well-being Platform</option>
                                        <option value="Post-surgical Care">Post-surgical Care</option>
                                        <option value="Green Environment">Green Environment</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write a message*"></textarea>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn style5">Submit Message</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Map Area  
==============================-->
    <div class="space-bottom bg-smoke2 contact-page-v1">
        <!-- <div class="map-shape-img shape-mockup d-xxl-block d-none" data-bottom="0%" data-left="5%">
            <img src="assets/img/shape/shape1-61.png" alt="img">
        </div> -->
        <div class="container">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0784087733886!2d79.97267607499762!3d6.883149993092709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a5f3c0c6e1d%3A0x1234567890abcdef!2s407%20C1%2C%20Weragala%20Mawatha%2C%20Thalawathugoda!5e0!3m2!1sen!2slk!4v1234567890123!5m2!1sen!2slk" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    

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