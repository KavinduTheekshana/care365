<section>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="subtitle wow fadeInUp mb-3">Testimonials</div>
                <h2 class="mb-4 wow fadeInUp" data-wow-delay=".2s">Our Happy Customers</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @if($testimonials->count() > 0)
                <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                    @foreach($testimonials as $testimonial)
                        <div class="item">
                            <div class="relative p-2">
                                <div class="relative">
                                    @if($testimonial->image_path)
                                        <img class="relative z-2 w-80px mb-3 rounded-1" alt="{{ $testimonial->name }}" src="{{ asset('testimonial_img/' . $testimonial->image_path) }}">
                                    @else
                                        <div class="relative z-2 w-80px h-80px mb-3 rounded-1 bg-light d-flex align-items-center justify-content-center">
                                            <i class="fa fa-user text-muted fa-2x"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="mt-4 text-dark fw-600">
                                    {{ $testimonial->name }}
                                    @if($testimonial->position)
                                        <span>{{ $testimonial->position }}</span>
                                    @else
                                        <span>Customer</span>
                                    @endif
                                </div>
                                <div class="de-rating-ext mb-3">
                                    <span class="d-stars">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $testimonial->rating)
                                                <i class="fa fa-star text-warning"></i>
                                            @else
                                                <i class="fa fa-star text-light"></i>
                                            @endif
                                        @endfor
                                    </span>
                                </div>
                                <p class="mb-0">"{{ $testimonial->message }}"</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- No testimonials message -->
                <div class="col-12 text-center py-5">
                    <div class="d-inline-block p-4 rounded-3 bg-light">
                        <i class="fa fa-comments fa-3x text-muted mb-3"></i>
                        <h4 class="mb-3">No Testimonials Yet</h4>
                        <p class="mb-0 text-muted">Check back soon to see what our customers are saying!</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>