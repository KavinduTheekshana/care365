<div class="overflow-hidden space">
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
    background: rgba(255, 255, 255, 0.95);
    width: 54px;
    height: 54px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.6;
    transition: all 0.25s ease;
    z-index: 3;
    box-shadow: 0 3px 10px rgba(0,0,0,0.2);
    font-size: 1.4rem;           /* bigger icon if you want */
    color: #333;
}

.gallery-card:hover .icon-btn {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1.08);
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
    console.log('Gallery page loaded');
    
    // OPTION 1: Check URL for filter parameter (Most reliable)
    const urlParams = new URLSearchParams(window.location.search);
    const urlFilter = urlParams.get('filter');
    
    // OPTION 2: Check localStorage
    const storageFilter = localStorage.getItem('galleryFilterLocation');
    const storageTime = localStorage.getItem('galleryFilterTime');
    const currentTime = Date.now();
    
    // Determine which filter to use
    let activeFilter = 'all';
    
    if (urlFilter) {
        // URL parameter takes priority
        activeFilter = urlFilter;
        console.log('Using URL filter:', activeFilter);
        
        // Remove filter from URL without reloading
        if (history.replaceState) {
            const newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
            window.history.replaceState({path: newUrl}, '', newUrl);
        }
    } else if (storageFilter && storageTime && (currentTime - storageTime) < 10000) {
        // Use localStorage filter if recent
        activeFilter = storageFilter;
        console.log('Using localStorage filter:', activeFilter);
        
        // Clear storage
        localStorage.removeItem('galleryFilterLocation');
        localStorage.removeItem('galleryFilterTime');
    }
    
    console.log('Final filter to apply:', activeFilter);
    
    // Apply the filter
    if (activeFilter && activeFilter !== 'all') {
        applyFilter(activeFilter);
    }
    
    // Filter function
    function applyFilter(filterValue) {
        console.log('Applying filter:', filterValue);
        
        // Find and click the corresponding filter button
        const filterBtns = document.querySelectorAll('.filter-btn');
        let found = false;
        
        filterBtns.forEach(btn => {
            const btnFilter = btn.getAttribute('data-filter');
            console.log('Checking button filter:', btnFilter, 'against:', filterValue);
            
            if (btnFilter === filterValue) {
                console.log('Found matching button!');
                found = true;
                
                // Remove active from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                
                // Add active to this button
                btn.classList.add('active');
                
                // Filter the gallery items
                filterGalleryItems(filterValue);
            }
        });
        
        if (!found) {
            console.warn('No filter button found for:', filterValue);
            // Fallback to "all"
            const allBtn = document.querySelector('.filter-btn[data-filter="all"]');
            if (allBtn) {
                allBtn.click();
            }
        }
    }
    
    // Gallery items filtering function
    function filterGalleryItems(filterValue) {
        console.log('Filtering gallery items with:', filterValue);
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        galleryItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');
            console.log('Item category:', itemCategory);
            
            if (filterValue === 'all' || itemCategory === filterValue) {
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
        });
    }
    
    // Setup filter button click handlers
    const filterBtns = document.querySelectorAll('.filter-btn');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Get filter value
            const filterValue = this.getAttribute('data-filter');
            
            // Apply filter
            filterGalleryItems(filterValue);
        });
    });
    
    // Log all available filters for debugging
    console.log('Available filters:');
    filterBtns.forEach(btn => {
        console.log('-', btn.getAttribute('data-filter'));
    });
    
    // Log all gallery item categories for debugging
    const galleryItems = document.querySelectorAll('.gallery-item');
    console.log('Gallery item categories:');
    galleryItems.forEach(item => {
        console.log('-', item.getAttribute('data-category'));
    });
});
</script>