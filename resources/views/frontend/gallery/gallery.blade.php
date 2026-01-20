<div class="overflow-hidden space z-index-common">
    <div class="container">
        {{-- Category Filter (only show if there are galleries) --}}
        @if($galleries->isNotEmpty())
            <div class="gallery-filter-wrap mb-5">
                <div class="text-center">
                    <button class="filter-btn active" data-filter="all">All Images</button>
                    @foreach($categories as $category)
                        <button class="filter-btn" data-filter="{{ Str::slug($category) }}">
                            {{ $category }}
                        </button>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Gallery Grid --}}
        <div class="gallery-grid" id="galleryGrid">
            @forelse($galleries as $index => $gallery)
                <div class="gallery-item" data-category="{{ Str::slug($gallery->category_name) }}">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img 
                                src="{{ asset('gallery_img/' . $gallery->image_path) }}" 
                                alt="{{ $gallery->category_name ?? 'Gallery Image' }}"
                                loading="lazy"
                                width="100%"
                                height="300"
                                onerror="this.onerror=null; this.src='{{ asset('images/no-image-available.jpg') }}'; this.alt='Image not available';"
                            >
                            @if(file_exists(public_path('gallery_img/' . $gallery->image_path)))
                                <a href="{{ asset('gallery_img/' . $gallery->image_path) }}" class="icon-btn th-popup-image">
                                    <i class="fa-regular fa-magnifying-glass"></i>
                                </a>
                            @endif
                            <div class="gallery-category-label">{{ $gallery->category_name ?? 'Uncategorized' }}</div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5 my-5 empty-gallery-state">
                    <i class="fa-solid fa-images fa-5x text-muted mb-4"></i>
                    <h3 class="text-muted">No images in the gallery yet</h3>
                    <p class="text-secondary mb-4">Check back later or add some beautiful moments!</p>

                </div>
            @endforelse
        </div>
    </div>
</div>

<style>
.gallery-filter-wrap {
    padding: 20px 0;
}

.filter-btn {
    background: #f8f9fa;
    border: 2px solid #e9ecef;
    padding: 10px 25px;
    margin: 5px;
    cursor: pointer;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.filter-btn:hover {
    background: #e9ecef;
    border-color: #dee2e6;
}

.filter-btn.active {
    background: var(--theme-color, #007bff);
    color: white;
    border-color: var(--theme-color, #007bff);
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    margin-bottom: 40px;
}

.gallery-item {
    opacity: 1;
    transform: scale(1);
    transition: all 0.3s ease;
}

.gallery-item.hidden {
    display: none;
    opacity: 0;
    transform: scale(0.8);
}

.gallery-card {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.gallery-img {
    position: relative;
    overflow: hidden;
}

.gallery-img img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-card:hover .gallery-img img {
    transform: scale(1.1);
}

.gallery-category-label {
    position: absolute;
    top: 10px;
    left: 10px;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    z-index: 2;
}

.icon-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 3;
}

.gallery-card:hover .icon-btn {
    opacity: 1;
}

.empty-gallery-state {
    min-height: 400px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #f8f9fa;
    border-radius: 12px;
    border: 2px dashed #dee2e6;
}

.empty-gallery-state i {
    opacity: 0.6;
}

.empty-gallery-state h3 {
    font-weight: 600;
    margin-bottom: 0.5rem;
}

@media (max-width: 768px) {
    .gallery-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 15px;
    }
    
    .filter-btn {
        padding: 8px 20px;
        font-size: 14px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            galleryItems.forEach(item => {
                if (filterValue === 'all') {
                    item.classList.remove('hidden');
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    const itemCategory = item.getAttribute('data-category');
                    if (itemCategory === filterValue) {
                        item.classList.remove('hidden');
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.classList.add('hidden');
                        }, 300);
                    }
                }
            });
        });
    });
});
</script>