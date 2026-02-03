<section>
    <div class="container">
        <div class="row g-4">

            @forelse ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="relative">
                        <div class="post-image rounded-1 mb-2">
                            <div class="abs start-0 top-0 bg-color-2 text-dark p-3 pb-2 m-3 text-center fw-600 rounded-1">
                                <div class="fs-36 mb-0">{{ $blog->date->format('d') }}</div>
                                <span>{{ $blog->date->format('M') }}</span>
                            </div>
                            <img 
                                alt="{{ $blog->title }}" 
                                src="{{ image_url($blog->image_path, 'blog') }}" 
                                class="lazy"
                            >
                        </div>
                        <div class="pt-2 h-100">
                            <h4>
                                <a class="text-dark" href="{{ url('/' . $blog->title_slug) }}">
                                    {{ $blog->title }}
                                </a>
                            </h4>
                            <p class="mb-3">
                                {{ Str::limit($blog->description, 110) }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p>No public blog posts available right now.</p>
                </div>
            @endforelse

            <!-- pagination begin -->
            <div class="col-lg-12 pt-4 text-center">
                <div class="d-inline-block">
                    <nav aria-label="Page navigation example">
                        {{ $blogs->links() }}
                    </nav>
                </div>
            </div>
            <!-- pagination end -->

        </div>
    </div>
</section>


<style>
    /* All blog images will be exactly 220px tall */
    .image-fixed-size {
        height: 220px;
        width: 100%;
        overflow: hidden;
        position: relative;
    }
    
    /* Make sure images cover the area properly */
    .image-fixed-size img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    /* Optional hover effect */
    .image-fixed-size:hover img {
        transform: scale(1.05);
    }
</style>