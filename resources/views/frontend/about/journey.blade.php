 <!-- Mission & Vision Section -->
    <section id="who-we-are" style="padding: 100px 20px; background-color: #ffffff;" >
        <div style="max-width: 1100px; margin: 0 auto;">
            
            <!-- Section Header -->
            <div class="col-lg-6 offset-lg-3 text-center" style=" margin-bottom: 70px;">
                <div class="subtitle wow fadeInUp mb-3">What Drives Us</div>
                <h2 class="mb-4 wow fadeInUp" data-wow-delay=".2s">Vision & Mission</h2>
            </div>

            <!-- Cards Container -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                
                <!-- Vision Card -->
                <div style="background: #F8FAFC; border-left: 4px solid #2563EB; padding: 50px 45px; transition: all 0.3s ease; position: relative;">
                    
                    <!-- Icon -->
                    <div style="margin-bottom: 30px;">
                        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </div>
                    
                    <h3 style="font-size: 24px; font-weight: 700; color: #0F172A; margin: 0 0 20px 0; letter-spacing: -0.5px;">Vision</h3>
                    
                    <p style="font-size: 15px; color: #475569; line-height: 1.7; margin: 0; font-weight: 400;">
                        To be the No. 1 care home in Sri Lanka, pioneering innovative care solutions that seamlessly integrate modern comforts and digital services for unparalleled experiences.
                    </p>
                </div>

                <!-- Mission Card -->
                <div style="background: #FFFBEB; border-left: 4px solid #fad643; padding: 50px 45px; transition: all 0.3s ease; position: relative;">
                    
                    <!-- Icon -->
                    <div style="margin-bottom: 30px;">
                        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#fad643" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
                        </svg>
                    </div>
                    
                    <h3 style="font-size: 24px; font-weight: 700; color: #0F172A; margin: 0 0 20px 0; letter-spacing: -0.5px;">Mission</h3>
                    
                    <p style="font-size: 15px; color: #475569; line-height: 1.7; margin: 0; font-weight: 400;">
                      At Care365, we are committed to redefining care by blending contemporary living standards with personalized digital services. Through constant innovation and dedication, we strive to exceed expectations, fostering holistic well-being and creating lasting memories as the premier care provider in Sri Lanka.                    
                    </p>
                </div>

            </div>

            <!-- Bottom Stats/Values -->
            <div style="margin-top: 60px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px; padding-top: 50px; border-top: 1px solid #E2E8F0;">
                
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #fad643; margin-bottom: 8px;">5+</div>
                    <div style="font-size: 14px; color: #64748B; font-weight: 500;">Years of Compassionate Care</div>
                </div>
                
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #2563EB; margin-bottom: 8px;">100+</div>
                    <div style="font-size: 14px; color: #64748B; font-weight: 500;">Happy Residents & Families</div>
                </div>
                
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #fad643; margin-bottom: 8px;">98%</div>
                    <div style="font-size: 14px; color: #64748B; font-weight: 500;">Family Satisfaction</div>
                </div>
                
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #2563EB; margin-bottom: 8px;">24/7</div>
                    <div style="font-size: 14px; color: #64748B; font-weight: 500;">Dedicated Care & Support</div>
                </div>
                
            </div>

        </div>
    </section>

    <style>
        /* Hover Effects */
        @media (hover: hover) {
            div[style*="border-left: 4px solid"]:hover {
                transform: translateX(5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            }
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            div[style*="grid-template-columns: 1fr 1fr"] {
                grid-template-columns: 1fr !important;
                gap: 20px !important;
            }
            
            div[style*="grid-template-columns: repeat(4, 1fr)"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 30px !important;
            }
            
            h2[style*="font-size: 48px"] {
                font-size: 36px !important;
            }
            
            div[style*="padding: 50px 45px"] {
                padding: 35px 30px !important;
            }
        }

        @media (max-width: 640px) {
            div[style*="grid-template-columns: repeat(2, 1fr)"] {
                grid-template-columns: 1fr !important;
            }
        }
    </style>
