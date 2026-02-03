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
                 /* Set the section height to 65vh */
                section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 {
                    height: 77.78vh !important;
                    min-height: 77.78vh !important;
                }

                /* Make all containers fill the height */
                section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .v-center,
                section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper,
                section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-slide,
                section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-inner {
                    height: 100%;
                }

                /* Ensure background images cover properly */
                section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-inner {
                    background-size: cover;
                    background-position: center;
                }

                /* Add or enhance the dark overlay */
                section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .swiper-inner::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.5); /* Dark overlay with 50% opacity */
                    z-index: 1;
                }

                /* Make sure text content appears above the overlay */
                section.section-dark.text-light.no-top.no-bottom.position-relative.overflow-hidden.z-1000 .sw-caption {
                    position: relative;
                    z-index: 2;
                }
            </style>