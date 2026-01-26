<section class="bg-smoke2 overflow-hidden space">
    <div class="container">
        <div class="title-area text-center mb-5">
            <span class="sub-title style2 text-anim" data-cue="slideInUp">Pricing Plan</span>
            <h2 class="sec-title text-anim" data-cue="slideInUp">Our Packages</h2>
            <p class="fs-18 text-anim2" data-cue="slideInUp">Comprehensive care packages designed to meet the unique needs of our residents.</p>
        </div>
        
        @if($packages->isEmpty())
            <div class="text-center py-5">
                <div class="alert alert-info d-inline-block">
                    <i class="fa-solid fa-info-circle me-2"></i>
                    No packages available at the moment. Please check back soon.
                </div>
            </div>
        @else
            <div class="row justify-content-center g-4">
                @foreach($packages as $index => $package)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="pricing-card-grid shadow-sm" data-cue="slideInUp" data-cue-delay="{{ $index * 200 }}" style="border-radius: 12px; overflow: hidden; ">
                            <div class="pricing-1-bg_mask"></div>
                            
                            <!-- Package Header -->
                            <div class="pricing-header text-center p-4 border-bottom">
                                <h3 class="box-title mb-3" style="font-size: 24px; font-weight: 600; color: #2c3e50;">
                                    {{ $package->title }}
                                </h3>
                                
                                <!-- Pricing Display -->
                                <div class="pricing-amount mb-2">
                                    <h2 class="price mb-0" style="font-size: 42px; font-weight: 700; color: #2c3e50; line-height: 1;">
                                        {{ $package->formatted_price_lkr }}
                                    </h2>
                                    <p class="text-muted mb-0" style="font-size: 14px;">
                                        ({{ $package->formatted_price_usd }})
                                    </p>
                                </div>
                                <span class="bg-transparent" style="color: #555; font-size: 13px; line-height: 1.6;">
                                    Upwards Monthly
                                </span>
                            </div>
                            
                            <!-- Features List -->
                            <div class="pricing-body p-4">
                                @if($package->features->isNotEmpty())
                                    <ul class="features-list mb-0" style="list-style: none; padding: 0;">
                                        @foreach($package->features as $feature)
                                            <li class="feature-item d-flex align-items-start mb-3">
                                                <i class="fa-solid fa-circle-check flex-shrink-0 me-3 mt-1" style="color: #4CAF50; font-size: 18px;"></i>
                                                <span style="color: #555; font-size: 15px; line-height: 1.6;">
                                                    {{ $feature->feature }}
                                                </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <div class="text-center py-4">
                                        <i class="fa-solid fa-box-open text-muted mb-3" style="font-size: 40px; opacity: 0.3;"></i>
                                        <p class="text-muted mb-0" style="font-size: 14px;">
                                            Features will be added soon
                                        </p>
                                    </div>
                                @endif
                            </div>
                            
                            <div class="pricing-footer pb-5 pt-3">
                                <div class="d-flex justify-content-end">  <!-- this pushes it to the right -->
                                    <a href="{{ route('contact') }}" class="enquire-link d-inline-flex align-items-center gap-2 fw-medium text-decoration-none"
                                    style="color: #2c3e50; font-size: 16px;">
                                        Enquire Now
                                        <i class="fa-solid fa-arrow-right ms-2" style="font-size: 14px;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

<style>
    /* Reduce text size on mobile */
@media (max-width: 767.98px) {
    .pricing-card-grid .box-title {
        font-size: 21px !important;      /* was 24px */
    }
    
    .pricing-card-grid .price {
        font-size: 36px !important;      /* was 42px */
    }
    
    .pricing-card-grid .feature-item span {
        font-size: 14px !important;      /* was 15px */
    }
    
    .pricing-card-grid .pricing-amount p {
        font-size: 13px !important;
    }
    
    /* Optional: slightly less padding on mobile if cards feel too tall */
    .pricing-body {
        padding: 1.5rem !important;     /* reduced from p-4 (2rem) */
    }
}

.enquire-link {
    transition: all 0.3s ease;
}

.enquire-link:hover {
    color: #4CAF50 !important;
}

.enquire-link:hover i {
    transform: translateX(6px);
}
</style>