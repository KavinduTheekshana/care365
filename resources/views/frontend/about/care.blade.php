<section class="pt-0">
    <div class="container">
        <div class="row g-3">
            <?php
                $services = [
                    [
                        'icon' => 'assets/images/icons/black/5017575.png',
                        'alt' => 'Medical care icon',
                        'title' => 'Holistic Approach',
                        'description' => 'Complete care for body, mind, and spirit.'
                    ],
                    [
                        'icon' => 'assets/images/icons/black/6546564.png',
                        'alt' => 'Medication icon',
                        'title' => 'Customized Care Plans',
                        'description' => 'Personalized plans tailored to individual needs.'
                    ],
                    [
                        'icon' => 'assets/images/icons/black/57436776.png',
                        'alt' => 'Personal assistance icon',
                        'title' => 'Comprehensive Services',
                        'description' => 'Wide range of daily and medical services.'
                    ],
                    [
                        'icon' => 'assets/images/icons/black/654654.png',
                        'alt' => 'Nutrition icon',
                        'title' => 'Community & Engagement',
                        'description' => 'Social activities that inspire connection and joy.'
                    ],
                    [
                        'icon' => 'assets/images/icons/black/6546564.png',
                        'alt' => 'Activities icon',
                        'title' => 'Quality & Friendly Staff',
                        'description' => 'Trained, caring, and compassionate professionals.'
                    ],
                    [
                        'icon' => 'assets/images/icons/black/564564.png',
                        'alt' => 'Support icon',
                        'title' => '24/7 Support',
                        'description' => 'Care and assistance available day and night.'
                    ],
                    [
                        'icon' => 'assets/images/icons/black/66767467467.png',
                        'alt' => 'Support icon',
                        'title' => 'Comfort & Quality of Life',
                        'description' => 'Safe, comfortable living with dignity.'
                    ],
                    [
                        'icon' => 'assets/images/icons/black/6467437634.png',
                        'alt' => 'Support icon',
                        'title' => 'Continuum of Care',
                        'description' => 'Ongoing care as needs evolve.'
                    ]
                ];


            
            foreach ($services as $index => $service):
                // Add mt-3 class to items after the first row (3 items)
                $mtClass = $index >= 3 ? 'mt-3' : '';
            ?>
            <div class="col-lg-4 col-md-6 <?php echo $mtClass; ?>">
                <div class="col-lg-4 col-md-6 <?php echo $mtClass; ?>">
                    <div class="relative d-flex align-items-start gap-3">
                        <img src="<?php echo $service['icon']; ?>" 
                            class="bg-color-2 w-60px p-10 rounded-10 wow scaleIn" 
                            alt="<?php echo $service['alt']; ?>" 
                            style="flex-shrink: 0;">
                        <div class="wow fadeInUp" style="flex: 0 1 120px;">
                            <h5 class="mb-1" style="font-size: 16px;"><?php echo $service['title']; ?></h5>
                            <p class="mb-0" style="font-size: 13px;"><?php echo $service['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>


            
            <?php endforeach; ?>
        </div>
    </div>
    
    <!-- 
    <div style="text-align: center; background: #ffffff; padding: 40px 30px; border-bottom: 2px solid #E2E8F0;">
        <h3 style="font-size: 26px; font-weight: 600; color: #0F172A; margin: 0 0 12px 0;">
            Explore Our Care Services
        </h3>
        <p style="font-size: 15px; color: #64748B; margin: 0 0 25px 0; margin-left: auto; margin-right: auto; line-height: 1.6; max-width: 500px;">
            Discover personalized care solutions designed to support comfort, dignity, and well-being at every stage.
        </p>
        <a class="btn-main bg-color-2 text-dark mb-3 wow fadeInUp"
            data-wow-delay=".6s"
            href="{{ route('services') }}">
            Learn More About Our Services
        </a>
    </div>
     -->
</section>



