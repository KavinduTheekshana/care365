<section class="space" id="service-sec">
    <div class="container">
        <div class="title-area text-center mb-50">
            <span class="sub-title style2 text-anim" data-cue="slideInUp">Our Services</span>
            <h2 class="sec-title text-anim2" data-cue="slideInUp">Safe And Secure Elderly Care</h2>
            <p class="fs-18 text-anim2" data-cue="slideInUp">Discover our comprehensive services, providing personalized support and engaging activities to enhance the well-being and quality of life for seniors.</p>
        </div>
        
        @if($services->count() > 0)
        <div class="row gy-4">
            @foreach($services as $service)
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="service-card">
                    <a class="icon-btn style3" href="{{ url('/' . $service->title_slug) }}">
                        <img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img">
                    </a>
                    <div class="box-img" data-mask-src="assets/img/shape/service_card_mask1_1.jpg">
                        @if($service->image_path)
                        <img src="{{ asset('services_img/' . $service->image_path) }}" alt="{{ $service->title }}">
                        @else
                        <img src="assets/img/service/service_card_1_1.jpg" alt="{{ $service->title }}">
                        @endif
                    </div>
                    <div class="box-content">
                        <h3 class="box-title">
                            <a href="{{ url('/' . $service->title_slug) }}">
                                {{ $service->title }}
                            </a>
                        </h3>
                        <p class="box-text">
                            {{ Str::limit($service->description, 150) }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-5">
            <div class="alert alert-info">
                <h4>No Services Available</h4>
                <p>Please check back later or contact us for more information.</p>
            </div>
        </div>
        @endif
    </div>
</section>