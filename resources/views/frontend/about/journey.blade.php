<div class="why-sec-2 overflow-hidden space-bottom overflow-hidden" id="who-we-are">
    <div class="container">
        <div class="row gy-40 gx-80 justify-content-center">
            <div class="col-xxl-12">
                <div class="title-area text-center">
                    <span class="sub-title style2 text-anim" data-cue="slideInUp"> Who We Are</span>
                    <h2 class="sec-title text-anim" data-cue="slideInUp">Navigating Life's Journey with Care 365</h2>
                </div>
            </div>
        </div>
        
        @if($whoweares->count() > 0)
        <div class="slider-area why-slider1_2">
            <div class="swiper th-slider" id="whySlider1_2" data-slider-options='{"autoHeight":true,"autoplay":false,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    @foreach($whoweares as $item)
                    <div class="swiper-slide" data-cue="slideInUp">
                        <div class="why-inner-card">
                            <div class="top">
                                <h4 class="box-title">{{ $item->title }}</h4>
                                <div class="icon">
                                    <img src="assets/img/shape/why-shape-inner.png" alt="img">
                                </div>
                            </div>
                            <div class="box-img">
                                @if($item->image_path)
                                <img src="{{ asset('whoweare_img/' . $item->image_path) }}" alt="{{ $item->title }}">
                                @else
                                <img src="assets/img/normal/why-placeholder.jpg" alt="{{ $item->title }}">
                                @endif
                            </div>
                            <div class="box-content">
                                <p class="box-text">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination-wrap">
                    <button data-slider-prev="#whySlider1_2" class="slider-arrow default style-border2 slider-prev">
                        <img data-mask-src="assets/img/icon/arrow-left.svg" src="assets/img/icon/arrow-left.svg" alt="img">
                    </button>
                    <div class="slider-pagination"></div>
                    <button data-slider-next="#whySlider1_2" class="slider-arrow default style-border2 slider-next">
                        <img data-mask-src="assets/img/icon/arrow-right.svg" src="assets/img/icon/arrow-right.svg" alt="img">
                    </button>
                </div>
            </div>
        </div>
        @else
        <div class="text-center py-5">
            <div class="alert alert-info">
                <p>Who We Are content will be available soon.</p>
            </div>
        </div>
        @endif
    </div>
</div>