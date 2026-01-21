<div class="video-area-1 overflow-hidden space-top">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <div class="image-wrap">
                    <div class="image-thumb" data-cue="slideInUp" data-overlay="title" data-opacity="4">
                        <img src="assets/img/Home-img/UNS_sliders_FP_eldercare-1.jpg" 
                             alt="Happy nurse holding elderly man's hand in wheelchair in garden" 
                             class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<style>
    .image-wrap {
        position: relative;
        width: 100%;
    }

    .image-thumb {
        position: relative;
        width: 100%;
        height: 600px; 
        overflow: hidden;
    }

    .image-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    /* Remove any video button styles if they remain */
    .video-btn,
    .play-btn,
    .video-text {
        display: none;
    }

    /* Ensure container takes full width */
    .container-fluid.p-0 {
        padding: 0 !important;
    }

    /* If you want to add a caption */
    .image-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 15px 20px;
        font-size: 14px;
        text-align: center;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .image-thumb {
            height: 300px;
        }
    }

    @media (max-width: 576px) {
        .image-thumb {
            height: 250px;
        }
    }

    
</style>