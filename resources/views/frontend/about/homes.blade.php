<section class="bg-smoke2 space overflow-hidden team-area-1" id="our-homes">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xxl-7 col-xl-7 col-md-8">
                <div class="title-area">
                    <span class="sub-title style2 text-anim" data-cue="slideInUp"> Our Homes</span>
                    <h2 class="sec-title text-anim2" data-cue="slideInUp">Designed with Modern Comforts and Amenities</h2>
                    <p class="fs-18 text-anim2" data-cue="slideInUp">Exciting times are ahead as Care365 prepares to open our brand-new, state-of-the-art facility in Sri Lanka.</p>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <a class="th-btn style-border3" href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>
        </div>
        
        @if($carehomes->count() > 0)
        <div class="row gy-40">
            <div class="col-xl-4">
                <div class="team-nav-wrap">
                    <ul class="nav nav-tabs wow fadeinup" id="myTab" role="tablist">
                        @foreach($carehomes as $index => $carehome)
                        <li class="nav-item" role="presentation" data-cue="slideInUp">
                            <button class="nav-link {{ $index === 0 ? 'active' : '' }}" 
                                    id="team_{{ $carehome->id }}-tab" 
                                    data-bs-toggle="tab" 
                                    data-bs-target="#team_{{ $carehome->id }}" 
                                    type="button" 
                                    role="tab" 
                                    aria-controls="team_{{ $carehome->id }}" 
                                    aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                <span class="team-thumb-sm">
                                    @if($carehome->image_path)
                                    <img src="{{ asset('care_homes_img/' . $carehome->image_path) }}" alt="{{ $carehome->title }}">
                                    @else
                                    <img src="assets/img/care-home/home-placeholder.jpg" alt="{{ $carehome->title }}">
                                    @endif
                                </span>
                                <span class="content-wrap">
                                    <span class="box-title">{{ $carehome->title }}</span>
                                    <span class="desi">{{ $carehome->subtitle }}</span>
                                </span>
                            </button>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="team-content-wrap">
                    <div class="tab-content" id="myTabContent">
                        @foreach($carehomes as $index => $carehome)
                        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" 
                             id="team_{{ $carehome->id }}" 
                             role="tabpanel" 
                             aria-labelledby="team_{{ $carehome->id }}-tab" 
                             data-cue="slideInUp">
                            <div class="team-tab-content">
                                <div class="team-1-bg-mask" style="border-radius: 20px; overflow: hidden;"> </div>
                                    <div class="" style="max-width: 350px;">
                                        @if($carehome->image_path)
                                            <img 
                                                src="{{ asset('care_homes_img/' . $carehome->image_path) }}" 
                                                alt="{{ $carehome->title }}"
                                                style="border-radius: 12px; width: 100%;"
                                            >
                                        @else
                                            <img 
                                                src="assets/img/care-home/home-placeholder.jpg" 
                                                alt="{{ $carehome->title }}"
                                                style="border-radius: 12px; width: 100%;"
                                            >
                                        @endif
                                    </div>

                                <div class="team-content">
                                <div class="top">
                                    <h3 class="box-title" style="font-size: 1.4rem; margin-bottom: 0.6rem;">{{ $carehome->title }}</h3>
                                    <p class="desi" style="margin-bottom: 1rem;">
                                        @if($carehome->badge_text)
                                            <span class="badge" style="
                                                background-color: transparent;
                                                border: 1px solid #89CFF0;
                                                color: #89CFF0;
                                                padding: 4px 10px;
                                                border-radius: 0 12px 0 0;
                                                font-size: 0.7rem;   
                                                font-weight: 500;
                                                display: inline-block;
                                            ">
                                                {{ $carehome->badge_text }}
                                            </span>
                                        @endif
                                    </p>
                                </div>
                                    <div class="body-text mb-4">
                                        <p class="mb-2">{{ $carehome->description }}</p>
                                        @if($carehome->location)
                                        <p class="mb-2"><strong>Location:</strong> {{ $carehome->location }}</p>
                                        @endif
                                    </div>
                                    
                                    <!-- Gallery Link  -->
                                    <div class="mb-3">
                                        <a href="{{ route('gallery') }}" class="gallery-link" 
                                        onclick="setGalleryFilter('{{ Str::slug($carehome->location) }}')"
                                        style="display: inline-flex; align-items: center; color: #89CFF0; text-decoration: none; font-size: 0.9rem; cursor: pointer;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                                                class="bi bi-images me-1" viewBox="0 0 16 16" style="margin-right: 6px;">
                                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                                <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                                            </svg>
                                            View Gallery
                                        </a>
                                    </div>
                                    
                                    <div class="button-wrap mb-4">
                                        <a href="{{ route('contact') }}" class="th-btn th-btn-xl">
                                            <img src="assets/img/icon/phone-white.svg" alt="icon">
                                            @if($carehome->contact_no)
                                            {{ $carehome->contact_no }}
                                            @else
                                            Contact Us
                                            @endif
                                        </a>
                                    </div>
                                    <div class="th-social">
                                        @if($carehome->facebook_url)
                                        <a href="{{ $carehome->facebook_url }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                        @if($carehome->instagram_url)
                                        <a href="{{ $carehome->instagram_url }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                        @endif
                                    </div>
                                </div>
                                <!--
                                <a class="icon-btn style3 hidden" href="{{ route('contact') }}">
                                    <img data-mask-src="assets/img/icon/arrow-right-1.svg" src="assets/img/icon/arrow-right-1.svg" alt="img">
                                </a>
                                -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="text-center py-5">
            <div class="alert alert-info">
                <p>Care homes information will be available soon.</p>
            </div>
        </div>
        @endif
    </div>
</section>


<script>
// Function to set gallery filter using slug
function setGalleryFilter(locationSlug) {
    console.log('Setting gallery filter for slug:', locationSlug);
    
    // Store the slug in localStorage
    localStorage.setItem('galleryFilterLocation', locationSlug);
    localStorage.setItem('galleryFilterTime', Date.now());
    
    // Navigate to gallery page
    window.location.href = "{{ route('gallery') }}";
    return false;
}

// Alternative: Auto-attach to all gallery links
document.addEventListener('DOMContentLoaded', function() {
    const galleryLinks = document.querySelectorAll('a.gallery-link[href="{{ route('gallery') }}"]');
    
    galleryLinks.forEach(link => {
        // Remove existing onclick if present
        link.onclick = null;
        
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get the location from the parent card
            const card = this.closest('.team-content');
            if (card) {
                // Find location text - adjust selector based on your HTML structure
                const locationText = card.querySelector('.body-text')?.textContent;
                let location = 'all';
                
                // Extract location from text
                if (locationText && locationText.includes('Location:')) {
                    const match = locationText.match(/Location:\s*(.+)/);
                    if (match && match[1]) {
                        location = match[1].trim();
                    }
                }
                
                // Convert to slug (same as in gallery page)
                const locationSlug = location.toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
                
                console.log('Found location slug:', locationSlug);
                setGalleryFilter(locationSlug);
            }
        });
    });
});
</script>