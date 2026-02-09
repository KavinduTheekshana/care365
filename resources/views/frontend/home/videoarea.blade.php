<!--
 <section class="border-top relative no-top no-bottom overflow-hidden">
    <div class="container-fluid position-relative half-fluid">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 position-lg-absolute left-half h-100">
                    <a class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2 popup-youtube" href="https://www.youtube.com/watch?v=HyZvbVf2SSY">
                        <div class="player invert bg-color-2 no-border rounded-1 wow scaleIn"><span></span></div>
                    </a>
                    <div class="image" data-bgimage="url(assets/img/Home-img/UNS_sliders_FP_eldercare-1.jpg) center"></div>
                </div>
                <div class="col-lg-6 offset-lg-6">
                    <div class="spacer-single"></div>
                    <div class="spacer-double"></div>
                    <div class="ps-lg-5">
                        <div class="subtitle wow fadeInUp mb-3">Virtual Tour</div>
                        <h2 class="wow fadeInUp">Experience Our Homelike Environment</h2>
                        <p class="wow fadeInUp">Take a virtual tour of Care 365 and see our warm, comfortable facilities where seniors thrive. Discover our compassionate environment, specialized care areas, and vibrant community spaces designed for comfort, safety, and well-being.</p>
                        <div class="spacer-10"></div>
                        <a class="btn-main " href="{{ route('contact') }}">Schedule a Visit</a>
                    </div>
                    <div class="spacer-double"></div>
                    <div class="spacer-single"></div>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<section class="border-top relative overflow-hidden" id="video-section" style="padding: 0;">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-stretch">
            <!-- Video Section -->
            <div class="col-lg-6 order-1 order-lg-1">
                <div style="position: relative; width: 100%; height: 100%; min-height: 400px; overflow: hidden; background: #000;">
                    <!-- Video Element with Controls -->
                    <video 
                        id="scrollVideo"
                        controls
                        controlslist="nodownload"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;"
                        muted 
                        loop 
                        playsinline
                        preload="metadata"
                        poster="{{ asset('assets/images/Video/325456.webp') }}" loading="lazy">
                        <track kind="captions" src="" label="English" srclang="en" default>
                        <source src="{{ asset('assets/images/Video/ai-video-for-web.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    
                    <!-- Dark Overlay (optional - remove if controls not visible) -->
                    <!-- <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.15); pointer-events: none;"></div> -->
                </div>
            </div>
            
            <!-- Text Section -->
            <div class="col-lg-6 order-2 order-lg-2" style="background: #ffffff;">
                <div style="padding: 60px 30px;">
                    <div class="spacer-single"></div>
                    <div class="spacer-double"></div>
                    <div class="ps-lg-5">
                        <div class="subtitle wow fadeInUp mb-3">Virtual Tour</div>
                        <h2 class="wow fadeInUp">Experience Our Homelike Environment</h2>
                        <p class="wow fadeInUp" style="color: #334155;">Take a virtual tour of Care 365 and see our warm, comfortable facilities where seniors thrive. Discover our compassionate environment, specialized care areas, and vibrant community spaces designed for comfort, safety, and well-being.</p>
                        <div class="spacer-10"></div>
                        <a class="btn-main" 
                        href="{{ route('contact') }}" 
                        style="background-color: #2563EB; color: #ffffff;">
                            Schedule a Visit
                        </a>

                    </div>
                    <div class="spacer-double"></div>
                    <div class="spacer-single"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Subtitle - ensure proper contrast */
.subtitle {
    color: #1E293B;
}



/* Custom Video Controls Styling */
#scrollVideo::-webkit-media-controls-panel {
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
}

#scrollVideo::-webkit-media-controls-play-button,
#scrollVideo::-webkit-media-controls-current-time-display,
#scrollVideo::-webkit-media-controls-time-remaining-display,
#scrollVideo::-webkit-media-controls-timeline,
#scrollVideo::-webkit-media-controls-volume-slider,
#scrollVideo::-webkit-media-controls-mute-button,
#scrollVideo::-webkit-media-controls-fullscreen-button {
    filter: brightness(1.2);
}

/* Responsive Video Section Styles */
@media (max-width: 991px) {
    #video-section .col-lg-6:first-child > div {
        min-height: 350px !important;
    }
    
    #video-section .col-lg-6:last-child > div {
        padding: 40px 20px !important;
    }
}

@media (max-width: 767px) {
    #video-section .col-lg-6:first-child > div {
        min-height: 300px !important;
    }
    
    #video-section .col-lg-6:last-child > div {
        padding: 30px 20px !important;
    }
}

@media (max-width: 575px) {
    #video-section .col-lg-6:first-child > div {
        min-height: 280px !important;
    }
    
    #video-section .col-lg-6:last-child > div {
        padding: 25px 15px !important;
    }
}

/* Ensure full height on desktop */
@media (min-width: 992px) {
    #video-section .row {
        min-height: 600px;
    }
    
    #video-section .col-lg-6:first-child > div {
        min-height: 600px !important;
    }
    
    #video-section .col-lg-6:last-child {
        display: flex;
        align-items: center;
    }
    
    #video-section .col-lg-6:last-child > div {
        padding: 80px 60px !important;
        width: 100%;
    }
}

/* Smooth video transitions */
#scrollVideo {
    transition: opacity 0.3s ease;
}
</style>