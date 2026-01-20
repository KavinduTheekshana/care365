<div class="space">
    <div class="container">
        <div class="row gy-40 gx-60">
            <div class="col-xxl-7 col-xl-7">
                <div class="title-area">
                    <h2 class="sec-title text-anim2" data-cue="slideInLeft">Frequently Ask Questions</h2>
                    <p class="desc">Find answers to common questions about our elder care services, ensuring you have all the information you need to make informed decisions for your loved ones.</p>
                </div>

                @if($faqs->count() > 0)
                <div class="faq-wrap1 pe-xl-4">
                    <div class="accordion" id="faqAccordion">
                        @foreach($faqs as $index => $faq)
                        <div class="accordion-card style3" data-cue="slideInUp">
                            <div class="accordion-header" id="collapse-item-{{ $index + 1 }}">
                                <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }}" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#collapse-{{ $index + 1 }}" 
                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" 
                                        aria-controls="collapse-{{ $index + 1 }}">
                                    <span class="count">{{ $index + 1 }}.</span> {{ $faq->question }}
                                </button>
                            </div>
                            <div id="collapse-{{ $index + 1 }}" 
                                 class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" 
                                 aria-labelledby="collapse-item-{{ $index + 1 }}" 
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">{{ $faq->answer }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @else
                <div class="alert alert-info">
                    <p>No frequently asked questions available at the moment. Please check back later or contact us directly.</p>
                </div>
                @endif
            </div>
            
            <div class="col-xxl-5 col-xl-5" data-cue="slideInUp">
                <div class="info-wrap" data-cue="slideInUp">
                    <div class="top">
                        <h4 class="box-title">Didn't Find the Answer? Ask us Question?</h4>
                        <p class="box-text">Call us directly, submit a sample or email us!</p>
                    </div>

                    <div class="info-box" data-cue="slideInUp">
                        <div class="box-icon">
                            <img src="assets/img/icon/faq-call.svg" alt="img">
                        </div>
                        <div class="content">
                            <h4 class="box-title">Call Us</h4>
                            <p class="box-text"><a href="tel:+94776604040">(+94)77 660 40 40</a></p>
                            <p class="box-text">Available 24/7 for booking & travel assistance</p>
                        </div>
                    </div>
                    <div class="info-box" data-cue="slideInUp">
                        <div class="box-icon">
                            <img src="assets/img/icon/faq-email.svg" alt="img">
                        </div>
                        <div class="content">
                            <h4 class="box-title">E-mail</h4>
                            <p class="box-text"><a href="mailto:info@care36t5.com">info@care36t5.com</a></p>
                            <p class="box-text">custom packages, or general questions</p>
                        </div>
                    </div>
                    <div class="info-box" data-cue="slideInUp">
                        <div class="box-icon">
                            <img src="assets/img/icon/faq-location.svg" alt="img">
                        </div>
                        <div class="content">
                            <h4 class="box-title">Visit Us</h4>
                            <p class="box-text">407 C1, Nomis Weragala Mw, Hokandara South. Thalawathugoda, Sri Lanka</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>