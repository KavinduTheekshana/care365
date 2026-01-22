<div class="overflow-hidden space z-index-common">
    <div class="container-fluid p-0">
        <div class="title-area text-center">
            <span class="sub-title style2 text-anim" data-cue="slideInUp">Recent stories</span>
            <h2 class="sec-title text-anim" data-cue="slideInUp">Our success stories</h2>
            <p class="fs-18 text-anim2" data-cue="slideInUp">Easily find and book trusted Pet Caregivers near you</p>
        </div>

        <div class="gallery-1-wrap">
            @if($galleryImages->isNotEmpty())
                {{-- First single image --}}
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{ asset('gallery_img/' . $galleryImages[0]->image_path) }}" alt="{{ $galleryImages[0]->category_name }}">
                        <a href="{{ asset('gallery_img/' . $galleryImages[0]->image_path) }}" class="icon-btn th-popup-image">
                            <i class="fa-regular fa-magnifying-glass"></i>
                        </a>
                    </div>
                </div>

                {{-- First two images wrapped --}}
                <div class="gallery-card-wrap">
                    @if(isset($galleryImages[1]))
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('gallery_img/' . $galleryImages[1]->image_path) }}" alt="{{ $galleryImages[1]->category_name }}">
                            <a href="{{ asset('gallery_img/' . $galleryImages[1]->image_path) }}" class="icon-btn th-popup-image">
                                <i class="fa-regular fa-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>
                    @endif
                    
                    @if(isset($galleryImages[2]))
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('gallery_img/' . $galleryImages[2]->image_path) }}" alt="{{ $galleryImages[2]->category_name }}">
                            <a href="{{ asset('gallery_img/' . $galleryImages[2]->image_path) }}" class="icon-btn th-popup-image">
                                <i class="fa-regular fa-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>

                {{-- Second single image --}}
                @if(isset($galleryImages[3]))
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{ asset('gallery_img/' . $galleryImages[3]->image_path) }}" alt="{{ $galleryImages[3]->category_name }}">
                        <a href="{{ asset('gallery_img/' . $galleryImages[3]->image_path) }}" class="icon-btn th-popup-image">
                            <i class="fa-regular fa-magnifying-glass"></i>
                        </a>
                    </div>
                </div>
                @endif

                {{-- Last two images wrapped --}}
                <div class="gallery-card-wrap">
                    @if(isset($galleryImages[4]))
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('gallery_img/' . $galleryImages[4]->image_path) }}" alt="{{ $galleryImages[4]->category_name }}">
                            <a href="{{ asset('gallery_img/' . $galleryImages[4]->image_path) }}" class="icon-btn th-popup-image">
                                <i class="fa-regular fa-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>
                    @endif
                    
                    @if(isset($galleryImages[5]))
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('gallery_img/' . $galleryImages[5]->image_path) }}" alt="{{ $galleryImages[5]->category_name }}">
                            <a href="{{ asset('gallery_img/' . $galleryImages[5]->image_path) }}" class="icon-btn th-popup-image">
                                <i class="fa-regular fa-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            @else
                <p class="text-center">No gallery images found.</p>
            @endif
        </div>
    </div>
</div>