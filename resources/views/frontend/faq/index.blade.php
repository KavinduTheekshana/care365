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
    <div class="breadcumb-wrapper ">
        <div class="breadcumb-bg-thumb" data-overlay="title" data-opacity="5" data-bg-src="assets/img/bg/breadcumb-bg.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">Frequently Asked Questions</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>FAQ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Faq Area
==============================-->
    <div class=" space">
        <div class="container">
            <div class="row gy-40 gx-60">
                <div class="col-xxl-7 col-xl-7">
                    <div class="title-area">
                        <h2 class="sec-title text-anim2" data-cue="slideInLeft">Frequently Ask Questions</h2>
                        <p class="desc">Find answers to common questions about our elder care services, ensuring you have all the information you need to make informed decisions for your loved ones.</p>
                    </div>


                    <!--==============================
Faq Area
==============================-->
                    <div class="faq-wrap1 pe-xl-4">
                        <div class="accordion" id="faqAccordion">


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"><span class="count">1.</span> What types of care services are provided?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We offer a range of care services including assistance with activities of daily living, medication management, and specialized memory care.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"><span class="count">2.</span> Is there 24/7 staff available for assistance?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Yes, our facility has 24/7 staff available to assist residents whenever needed.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"><span class="count">3.</span> How are medical needs handled? Is there a nurse on-site?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We have trained staff who can handle basic medical needs, and a nurse is available onsite for more specialized care.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4"><span class="count">4.</span> What are the living arrangements like (private or shared rooms)?</button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Residents have the option for both private and shared rooms, depending on their package preference and budget.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5"><span class="count">5.</span> Are meals provided, and can dietary restrictions be accommodated?</button>
                                </div>
                                <div id="collapse-5" class="accordion-collapse collapse " aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Nutritious meals are provided, and we can accommodate various dietary restrictions and preferences.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6"><span class="count">6.</span> What kinds of activities and amenities are available for residents?</button>
                                </div>
                                <div id="collapse-6" class="accordion-collapse collapse " aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We offer a variety of activities and amenities such as exercise classes, social events, and recreational outings.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7"><span class="count">7.</span> How is safety and security handled within the facility?</button>
                                </div>
                                <div id="collapse-7" class="accordion-collapse collapse " aria-labelledby="collapse-item-7" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Safety and security are top priorities; our facility is equipped with security systems and staff are trained in emergency procedures.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8"><span class="count">8.</span> What is the staff-to-resident ratio?</button>
                                </div>
                                <div id="collapse-8" class="accordion-collapse collapse " aria-labelledby="collapse-item-8" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Our staff-to-resident ratio is designed to ensure personalized care and attention for each resident.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9"><span class="count">9.</span> Is transportation provided for appointments or outings?</button>
                                </div>
                                <div id="collapse-9" class="accordion-collapse collapse " aria-labelledby="collapse-item-9" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Transportation is provided for appointments and outings to ensure residents can access necessary services and activities. Extra charges applicable.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-10">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10"><span class="count">10.</span> How are personal care needs like bathing and grooming assisted?</button>
                                </div>
                                <div id="collapse-10" class="accordion-collapse collapse " aria-labelledby="collapse-item-10" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Our staff is available to assist residents with personal care needs like bathing and grooming on a daily basis. Rates may vary based on special concerns or needs for additional care.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-11">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-11" aria-expanded="false" aria-controls="collapse-11"><span class="count">11.</span> Can couples stay together in the same room or suite?</button>
                                </div>
                                <div id="collapse-11" class="accordion-collapse collapse " aria-labelledby="collapse-item-11" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Yes, couples can stay together in the same room or suite if they prefer. They can select customizable package.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-12">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-12" aria-expanded="false" aria-controls="collapse-12"><span class="count">12.</span> What are the costs and payment options for care services?</button>
                                </div>
                                <div id="collapse-12" class="accordion-collapse collapse " aria-labelledby="collapse-item-12" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Costs vary depending on the level of care needed and the chosen living arrangements. We offer various payment options including private pay, insurance, and assistance programs. We do have online payment system through website and selected partner credit cards are available for installment payments.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-13">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-13" aria-expanded="false" aria-controls="collapse-13"><span class="count">13.</span> Are there any wait lists or special requirements for admission?</button>
                                </div>
                                <div id="collapse-13" class="accordion-collapse collapse " aria-labelledby="collapse-item-13" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">We do have wait lists at times, and there may be specific requirements for admission depending on the level of care needed.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-14">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-14" aria-expanded="false" aria-controls="collapse-14"><span class="count">14.</span> How are medications managed and administered?</button>
                                </div>
                                <div id="collapse-14" class="accordion-collapse collapse " aria-labelledby="collapse-item-14" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Medications are managed and administered by trained staff according to each resident's individual care plan.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card style3" data-cue="slideInUp">
                                <div class="accordion-header" id="collapse-item-15">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-15" aria-expanded="false" aria-controls="collapse-15"><span class="count">15.</span> Can visitors come and go freely, or are there set visiting hours?</button>
                                </div>
                                <div id="collapse-15" class="accordion-collapse collapse " aria-labelledby="collapse-item-15" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Visitors are welcome to come and go freely during designated visiting hours, ensuring residents can stay connected with loved ones.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 " data-cue="slideInUp">
                    <div class="info-wrap" data-cue="slideInUp">
                        <div class="top">
                            <h4 class="box-title">Didn’t Find the Answer? Ask us Question?</h4>
                            <p class="box-text">Call us directly, submit a sample or email us!</p>
                        </div>

                        <div class="info-box" data-cue="slideInUp">
                            <div class="box-icon">
                                <img src="assets/img/icon/faq-call.svg" alt="img">
                            </div>
                            <div class="content">
                                <h4 class="box-title">Call Us</h4>
                                <p class="box-text"><a href="tel:+94776604040">(+94)77 660 40 40</a></p>
                                <p class="box-text">Available 24/7 for booking & travel assistance</p>
                            </div>
                        </div>
                        <div class="info-box" data-cue="slideInUp">
                            <div class="box-icon">
                                <img src="assets/img/icon/faq-email.svg" alt="img">
                            </div>
                            <div class="content">
                                <h4 class="box-title">E-mail</h4>
                                <p class="box-text"><a href="mailto:info@care36t5.com">info@care36t5.com</a></p>
                                <p class="box-text">custom packages, or general questions</p>
                            </div>
                        </div>
                        <div class="info-box" data-cue="slideInUp">
                            <div class="box-icon">
                                <img src="assets/img/icon/faq-location.svg" alt="img">
                            </div>
                            <div class="content">
                                <h4 class="box-title">Visit Us</h4>
                                <p class="box-text">407 C1, Nomis Weragala Mw, Hokandara South. Thalawathugoda, Sri Lanka</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Testimonial Area  
==============================-->
    <section class="testi-area-1 space overflow-hidden bg-white" id="testi-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title text-anim subtitle-line" data-cue="slideInUp">Testimonials</span>
                <h2 class="sec-title text-anim" data-cue="slideInUp">What Families Say About Us</h2>
                <p class="fs-18 text-anim2" data-cue="slideInUp">Read the heartwarming stories from families who entrusted their loved ones to our care.</p>
            </div>
            <div class="row gy-50 flex-row-reverse">
                <div class="slider-area testi-slider1" data-cue="slideInUp">
                    <div class="swiper th-slider has-shadow" id="testiSlide1" data-slider-options='{"autoHeight": false,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"},"1600":{"slidesPerView":"2"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-1-quote">
                                        <img src="assets/img/icon/quote_icon.svg" alt="icon">
                                    </div>
                                    <div class="testi-bg-mask" data-mask-src="assets/img/shape/testi_card_mask1_1.jpg"></div>
                                    <div class="testi-card-profile">
                                        <div class="testi-card-avater">
                                            <img src="assets/img/testimonial/testi1-1.jpg" alt="img" width="80" height="80">
                                        </div>
                                        <div class="testi-card-profile-detaile">
                                            <h3 class="box-title">Ruwan de Silva</h3>
                                            <p class="box-desig">Senior Software Engineer</p>
                                        </div>
                                    </div>

                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">"Elder Care Home's compassionate team understood my mom's needs, giving me confidence in my decision for her care."</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-1-quote">
                                        <img src="assets/img/icon/quote_icon.svg" alt="icon">
                                    </div>
                                    <div class="testi-bg-mask" data-mask-src="assets/img/shape/testi_card_mask1_1.jpg"></div>
                                    <div class="testi-card-profile">
                                        <div class="testi-card-avater">
                                            <img src="assets/img/testimonial/testi1-2.jpg" alt="img" width="80" height="80">
                                        </div>
                                        <div class="testi-card-profile-detaile">
                                            <h3 class="box-title">Silvia Peiris</h3>
                                            <p class="box-desig">Bank Officer</p>
                                        </div>
                                    </div>

                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">"Moving my dad to ElderCare Home was easy thanks to their personalized approach and welcoming environment."</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-1-quote">
                                        <img src="assets/img/icon/quote_icon.svg" alt="icon">
                                    </div>
                                    <div class="testi-bg-mask" data-mask-src="assets/img/shape/testi_card_mask1_1.jpg"></div>
                                    <div class="testi-card-profile">
                                        <div class="testi-card-avater">
                                            <img src="assets/img/testimonial/testi1-3.jpg" alt="img" width="80" height="80">
                                        </div>
                                        <div class="testi-card-profile-detaile">
                                            <h3 class="box-title">Jeewan Mahanama</h3>
                                            <p class="box-desig">Accountant</p>
                                        </div>
                                    </div>

                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">"Eager to explore options for my loved one's care, I stumbled upon ElderCare's digital platform. Little did I know, this virtual portal would become my lifeline, offering a wealth of information and support as I navigated the journey ahead."</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-1-quote">
                                        <img src="assets/img/icon/quote_icon.svg" alt="icon">
                                    </div>
                                    <div class="testi-bg-mask" data-mask-src="assets/img/shape/testi_card_mask1_1.jpg"></div>
                                    <div class="testi-card-profile">
                                        <div class="testi-card-avater">
                                            <img src="assets/img/testimonial/testi1-4.jpg" alt="img" width="80" height="80">
                                        </div>
                                        <div class="testi-card-profile-detaile">
                                            <h3 class="box-title">Arjuna Perera</h3>
                                            <p class="box-desig">Business Owner</p>
                                        </div>
                                    </div>

                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">"The staff at ElderCare Home treats my mother with dignity and respect. Their attention to detail and genuine care has made all the difference in her quality of life."</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-pagination-wrap mt-30">
                            <button data-slider-prev="#testiSlide1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                            <div class="slider-pagination"></div>
                            <button data-slider-next="#testiSlide1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

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