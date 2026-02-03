<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission & Vision</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body style="margin: 0; padding: 0; font-family: 'Inter', sans-serif; background-color: #ffffff;">
    
    <!-- Mission & Vision Section -->
    <section id="Vision|Mission" style="padding: 100px 20px; background-color: #ffffff;">
        <div style="max-width: 1100px; margin: 0 auto;">
            
            <!-- Section Header -->
            <div style="text-align: center; margin-bottom: 70px;">
                <p style="font-size: 14px; font-weight: 600; color: #F59E0B; letter-spacing: 2px; text-transform: uppercase; margin: 0 0 12px 0;">What Drives Us</p>
                <h2 style="font-size: 48px; font-weight: 700; color: #0F172A; margin: 0; letter-spacing: -1px; line-height: 1.2;">Vision & Mission</h2>
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
                        To be the global leader in innovation and excellence, transforming industries through cutting-edge solutions that empower businesses and enrich lives worldwide.
                    </p>
                </div>

                <!-- Mission Card -->
                <div style="background: #FFFBEB; border-left: 4px solid #F59E0B; padding: 50px 45px; transition: all 0.3s ease; position: relative;">
                    
                    <!-- Icon -->
                    <div style="margin-bottom: 30px;">
                        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#F59E0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"></path>
                        </svg>
                    </div>
                    
                    <h3 style="font-size: 24px; font-weight: 700; color: #0F172A; margin: 0 0 20px 0; letter-spacing: -0.5px;">Mission</h3>
                    
                    <p style="font-size: 15px; color: #475569; line-height: 1.7; margin: 0; font-weight: 400;">
                        To deliver exceptional value through innovative products and services that exceed expectations. We are committed to fostering sustainable growth and maintaining the highest standards of integrity.
                    </p>
                </div>

            </div>

            <!-- Bottom Stats/Values -->
            <div style="margin-top: 60px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px; padding-top: 50px; border-top: 1px solid #E2E8F0;">
                
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #2563EB; margin-bottom: 8px;">10+</div>
                    <div style="font-size: 14px; color: #64748B; font-weight: 500;">Years Experience</div>
                </div>
                
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #F59E0B; margin-bottom: 8px;">500+</div>
                    <div style="font-size: 14px; color: #64748B; font-weight: 500;">Projects Delivered</div>
                </div>
                
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #2563EB; margin-bottom: 8px;">98%</div>
                    <div style="font-size: 14px; color: #64748B; font-weight: 500;">Client Satisfaction</div>
                </div>
                
                <div style="text-align: center;">
                    <div style="font-size: 36px; font-weight: 700; color: #F59E0B; margin-bottom: 8px;">24/7</div>
                    <div style="font-size: 14px; color: #64748B; font-weight: 500;">Support Available</div>
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

</body>
</html>