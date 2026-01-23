<div class="overflow-hidden space z-index-common">
    <div class="container-fluid p-0">
        <div class="title-area text-center">
            <span class="sub-title style2 text-anim" data-cue="slideInUp">Recent stories</span>
            <h2 class="sec-title text-anim" data-cue="slideInUp">Our success stories</h2>
            <p class="fs-18 text-anim2" data-cue="slideInUp">Easily find and book trusted Pet Caregivers near you</p>
        </div>

        <div class="gallery-1-wrap">
            @php
                $storyIndex = 0;
                $totalStories = count($successStories);
            @endphp

            @while($storyIndex < $totalStories)
                @if($storyIndex % 3 === 0)
                    {{-- Single large image (left side) --}}
                    @if(isset($successStories[$storyIndex]))
                        <div class="gallery-card">
                            <div class="gallery-img">
                                <img 
                                    src="{{ asset('success_stories_img/' . $successStories[$storyIndex]->image) }}" 
                                    alt="{{ $successStories[$storyIndex]->image_alt ?? $successStories[$storyIndex]->title }}"
                                    style="width: 100%; height: 380px; object-fit: cover; display: block;"
                                >
                                <a href="{{ asset('success_stories_img/' . $successStories[$storyIndex]->image) }}" class="icon-btn th-popup-image">
                                    <i class="fa-regular fa-magnifying-glass"></i>
                                </a>
                            </div>
                        </div>
                        @php $storyIndex++; @endphp
                    @endif
                @else
                    {{-- Paired images (right side) --}}
                    <div class="gallery-card-wrap">
                        @for($i = 0; $i < 2; $i++)
                            @if(isset($successStories[$storyIndex]))
                                <div class="gallery-card">
                                    <div class="gallery-img">
                                        <img src="{{ asset('success_stories_img/' . $successStories[$storyIndex]->image) }}" alt="{{ $successStories[$storyIndex]->image_alt ?? $successStories[$storyIndex]->title }}">
                                        <a href="{{ asset('success_stories_img/' . $successStories[$storyIndex]->image) }}" class="icon-btn th-popup-image">
                                            <i class="fa-regular fa-magnifying-glass"></i>
                                        </a>
                                    </div>
                                </div>
                                @php $storyIndex++; @endphp
                            @endif
                        @endfor
                    </div>
                @endif
            @endwhile
        </div>
    </div>
</div>