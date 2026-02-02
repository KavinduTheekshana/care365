<section class="relative overflow-hidden border-top">
    <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="subtitle wow fadeInUp mb-3">Our Services</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s" 
                            style="font-size: clamp(1.8rem, 5.5vw, 2.8rem); 
                                line-height: 1.2; 
                                margin-bottom: 1rem;">
                            Safe And Secure Elderly Care
                        </h2>
                    <p class="lead mb-0 wow fadeInUp">
                        Discover our comprehensive services, providing personalized 
                        support and engaging activities to enhance the well-being and quality of life for seniors.
                    </p>
                    <div class="spacer-single"></div>
                    <div class="spacer-half"></div>
                </div>
            </div>
        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-lg-4 col-sm-6">
                <div class="relative h-100">           <!-- ← add h-100 -->
                    <a href="{{ service_url($service) }}" class="d-block hover h-100">   <!-- ← add h-100 -->
                        <div class="relative overflow-hidden rounded-1 shadow-soft d-flex flex-column h-100">  <!-- ← flex + h-100 -->

                            <!-- Decorative flower (optional) -->
                            <img src="images/misc/flowers-crop-3-white.webp"
                                 class="w-50 end-0 absolute hover-op-0" alt="">

                            <!-- Read More overlay – centered vertically -->
                            <div class="absolute z-2 start-0 w-100 abs-middle fs-36 text-white text-center">
                                <span class="btn-main hover-op-1">Read More</span>
                            </div>

                            <!-- Image with fixed aspect ratio -->
                            <div class="ratio ratio-4x3 overflow-hidden">   <!-- ← most important part -->
                                <img src="{{ image_url($service->image_path, 'service') }}"
                                     class="img-fluid object-fit-cover hover-scale-1-2"
                                     alt="{{ $service->title }}">
                            </div>

                            <!-- Title overlay at bottom -->
                            <div class="hover-op-0 abs p-3 px-4 bottom-0 start-0 end-0 text-center text-light overlay-black-1 bg-blur mt-auto">  <!-- ← mt-auto pushes to bottom -->
                                <h4 class="mb-0">{{ $service->title }}</h4>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
.service-card-wrapper,
.relative.h-100,
.hover.h-100,
.shadow-soft.d-flex {
    height: 100%;
}

.ratio.ratio-4x3 img {
    object-fit: cover;           /* or contain — but cover usually looks better */
    width: 100%;
    height: 100%;
}

/* Optional: make sure title doesn't wrap too much */
.overlay-black-1 h4 {
    font-size: 1.25rem;
    line-height: 1.4;
    min-height: 2.8em;           /* helps with very short titles */
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>