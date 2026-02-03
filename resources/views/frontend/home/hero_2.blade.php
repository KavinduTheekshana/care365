<section class="section-dark text-light no-top no-bottom position-relative overflow-hidden z-1000">
    <div class="v-center">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="swiper-inner" data-bgimage="url(assets/img/Home-img/personalized-care-tailoring-services-to-individual-needs-hero-1.jpg)">
                        <div class="sw-caption">
                            <div class="container">
                                <div class="row g-4 justify-content-center">
                                    <div class="spacer-double"></div>
                                    <div class="col-lg-8 text-center">
                                        <div class="spacer-single"></div>
                                        <div class="sw-text-wrapper">
                                            <div class="subtitle mb-2">Compassionate & Personalized Care</div>
                                            <h1 class="slider-title mb-3">A Warm, Homelike Environment for Golden Years</h1>
                                            <p class="slider-teaser mb-3">Enhancing quality of life with dedicated support for comfort, safety, and well-being.</p>
                                            <div class="spacer-10"></div>
                                            <a class="btn-main bg-color-2 text-dark mb10 mb-3" href="{{ route('contact') }}">Schedule a Visit</a>
                                        </div>
                                    </div>
                                    <div class="spacer-single"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-overlay op-4"></div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="swiper-inner" data-bgimage="url(assets/img/Home-img/615b679fef36ca74d291148e_Depositphotos_25178721_L.jpg)">
                        <div class="sw-caption">
                            <div class="container">
                                <div class="row g-4 justify-content-center">
                                    <div class="spacer-double"></div>
                                    <div class="col-lg-8 text-center">
                                        <div class="spacer-single"></div>
                                        <div class="sw-text-wrapper">
                                            <div class="subtitle mb-2">Specialized Support</div>
                                            <h1 class="slider-title mb-3">Safe & Secure Elderly Care for Every Need</h1>
                                            <p class="slider-teaser mb-3">Providing specialized care for dementia, Parkinson's, and paralysis with dignity and compassion.</p>
                                            <div class="spacer-10"></div>
                                            <a class="btn-main bg-color-2 text-dark mb10 mb-3" href="{{ route('services') }}">View Our Services</a>
                                        </div>
                                    </div>
                                    <div class="spacer-single"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-overlay op-4"></div>
                    </div>
                </div>
                <!-- Slide 3 - You can add a third slide if needed -->
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</section>



<section class="pt-0 relative z-1000">
    <div class="container mt-min-50">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white p-30 rounded-1 shadow-soft">
                    <div class="row g-4">

                        <!-- Feature 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="relative">
                                <i class="icofont-heart-alt absolute fs-64 id-color"></i>
                                <div class="ps-80">
                                    <h4 class="mb-0">Holistic Care</h4>
                                    <p class="mb-0">Complete care for body, mind, and spirit.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="relative">
                                <i class="icofont-ui-clip-board absolute fs-64 id-color"></i>
                                <div class="ps-80">
                                    <h4 class="mb-0">Customized Plans</h4>
                                    <p class="mb-0">Personalized care for individual needs.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="relative">
                                <i class="icofont-users-alt-5 absolute fs-64 id-color"></i>
                                <div class="ps-80">
                                    <h4 class="mb-0">24/7 Support</h4>
                                    <p class="mb-0">Caring staff available anytime.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            

 <style>
/* Hero Section Height - Set to 700px as client requested */
section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 {
    height: 700px !important;
    min-height: 700px !important;
}

/* Make all containers fill the 700px height */
section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .v-center,
section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper,
section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-slide,
section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-inner {
    height: 100%;
}

/* Ensure background images cover properly within 700px height */
section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-inner {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* MAIN OVERLAY - Standard for all screens */
section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-inner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); /* Reduced from 0.5 to 0.4 for better visibility */
    z-index: 1;
}

/* Text content above overlay */
section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .sw-caption {
    position: relative;
    z-index: 2;
}

/* Desktop font sizes for 700px height */
section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .slider-title {
    font-size: 2.5rem !important; /* 40px */
    line-height: 1.2 !important;
    margin-bottom: 0.5rem !important;
}

section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .subtitle {
    font-size: 1rem !important; /* 16px */
    margin-bottom: 1rem !important;
}

section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .slider-teaser {
    font-size: 1.125rem !important; /* 18px */
    line-height: 1.5 !important;
    margin-bottom: 1.5rem !important;
}

/* ====== MOBILE RESPONSIVENESS ====== */

/* Tablet - 768px and below */
@media (max-width: 768px) {
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 {
        height: 500px !important;
        min-height: 500px !important;
    }
    
    /* Better mobile image positioning */
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-inner {
        background-position: center center !important;
        background-size: cover !important;
    }
    
    /* LIGHTER overlay for mobile - text is already smaller so needs less darkness */
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-inner::before {
        background: rgba(0, 0, 0, 0.35) !important; /* Lighter than desktop */
    }
    
    /* Tablet font sizes */
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .slider-title {
        font-size: 1.75rem !important; /* 28px */
        line-height: 1.3 !important;
        margin-bottom: 0.4rem !important;
    }
    
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .subtitle {
        font-size: 0.875rem !important; /* 14px */
        margin-bottom: 0.75rem !important;
    }
    
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .slider-teaser {
        font-size: 0.95rem !important; /* 15px */
        line-height: 1.4 !important;
        margin-bottom: 1rem !important;
    }
}

/* Small mobile - 576px and below */
@media (max-width: 576px) {
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 {
        height: 450px !important;
        min-height: 450px !important;
        padding: 0 15px !important;
    }
    
    /* Even lighter overlay for small screens */
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-inner::before {
        background: rgba(0, 0, 0, 0.3) !important; /* Much lighter for mobile */
    }
    
    /* Mobile font sizes */
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .slider-title {
        font-size: 1.5rem !important; /* 24px */
        line-height: 1.3 !important;
        margin-bottom: 0.3rem !important;
    }
    
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .subtitle {
        font-size: 0.8rem !important; /* 13px */
        margin-bottom: 0.5rem !important;
    }
    
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .slider-teaser {
        font-size: 0.875rem !important; /* 14px */
        line-height: 1.4 !important;
        margin-bottom: 0.75rem !important;
    }
}

/* Extra small mobile - 375px and below */
@media (max-width: 375px) {
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 {
        height: 400px !important;
        min-height: 400px !important;
    }
    
    /* Very light overlay for tiny screens */
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-inner::before {
        background: rgba(0, 0, 0, 0.25) !important; /* Minimal overlay */
    }
    
    /* Smallest font sizes */
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .slider-title {
        font-size: 1.25rem !important; /* 20px */
        line-height: 1.25 !important;
    }
    
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .subtitle {
        font-size: 0.75rem !important; /* 12px */
    }
    
    section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .slider-teaser {
        font-size: 0.8125rem !important; /* 13px */
        line-height: 1.35 !important;
    }
}

/* Alternative: Gradient overlay (optional - looks more modern) */
/* Uncomment this if you want a gradient instead */
/*
section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-inner::before {
    background: linear-gradient(to bottom, 
        rgba(0, 0, 0, 0.2), 
        rgba(0, 0, 0, 0.4)
    ) !important;
}
*/
</style>