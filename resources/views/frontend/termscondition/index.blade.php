@extends('layouts.frontend')

@section('content')

    <!-- Breadcrumb Section -->
    <div class="breadcumb-wrapper">
        <div class="breadcumb-bg-thumb" data-overlay="title" data-opacity="5" data-bg-src="assets/img/bg/breadcumb-bg.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title text-anim" data-cue="slideInUp" data-delay="100">Terms and Conditions</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Terms and Conditions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Terms Content Section -->
    <div class="space overflow-hidden bg-white">
        <div class="shape-mockup shake d-xxl-block d-none" data-top="20%" data-left="5%">
            <img src="assets/img/shape/shape1-7.png" alt="img">
        </div>
        <div class="shape-mockup shake d-xxl-block d-none" data-top="20%" data-right="5%">
            <img src="assets/img/shape/shape1-8.png" alt="img">
        </div>
        <div class="shape-mockup heartbeat d-xxl-block d-none" data-top="50%" data-left="5%">
            <img src="assets/img/shape/shape1-9.png" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    
                    <!-- Introduction -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <div class="title-area mb-30">
                            <span class="sub-title subtitle-line text-anim">
                                <img class="me-2" src="assets/img/icon/subtitle-icon.svg" alt="icon">
                                Last Updated: January 21, 2026
                            </span>
                            <h2 class="sec-title text-anim2">Welcome to Babet Pet Care</h2>
                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-7">
                                <p class="fs-16 mb-3">Welcome to Babet Pet Care & Grooming Services. These Terms and Conditions govern your use of our website and services. By accessing or using our services, you agree to be bound by these terms.</p>
                                <p class="fs-16">Please read these terms carefully before using our services. If you do not agree with any part of these terms, please do not use our website or services.</p>
                            </div>
                            <div class="col-lg-5">
                                <div class="img-box1">
                                    <div class="img1" data-mask-src="assets/img/normal/about-thumb-mask1-1.png">
                                        <img src="assets/img/normal/about-thumb1-1.jpg" alt="Terms">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 1 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">1. Service Definitions</h3>
                        <p class="fs-16 mb-3">Our services include but are not limited to:</p>
                        <div class="checklist style2 mb-3">
                            <ul>
                                <li>Pet grooming and bathing services</li>
                                <li>Pet sitting and boarding</li>
                                <li>Nail trimming and hygiene care</li>
                                <li>Hair styling and spa treatments</li>
                                <li>Veterinary consultations and check-ups</li>
                                <li>Emergency pet care services</li>
                            </ul>
                        </div>
                        <p class="fs-16">All services are subject to availability and must be booked in advance through our website, mobile app, or by contacting our customer service team.</p>
                    </div>

                    <!-- Section 2 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">2. Booking and Appointments</h3>
                        <p class="fs-16 mb-3"><strong>Appointment Scheduling:</strong> All appointments must be scheduled at least 24 hours in advance. We reserve the right to refuse service if proper notice is not provided or if your pet's health conditions require specialized care beyond our capabilities.</p>
                        <p class="fs-16 mb-3"><strong>Cancellation Policy:</strong> Cancellations must be made at least 24 hours before the scheduled appointment. Late cancellations or no-shows may be subject to a cancellation fee of up to 50% of the service cost.</p>
                        <p class="fs-16 mb-3"><strong>Rescheduling:</strong> We understand that emergencies happen. You may reschedule your appointment up to 12 hours before the scheduled time without penalty.</p>
                        <p class="fs-16"><strong>Late Arrivals:</strong> Please arrive on time for your appointment. If you arrive more than 15 minutes late, we may need to reschedule your appointment or shorten the service time.</p>
                    </div>

                    <!-- Section 3 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">3. Pet Health and Safety Requirements</h3>
                        <div class="row align-items-center mb-3">
                            <div class="col-lg-5 mb-3 mb-lg-0">
                                <div class="gallery-img">
                                    <img src="assets/img/gallery/gallery_1_2.jpg" alt="Pet Safety">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <p class="fs-16 mb-3">For the safety of all pets in our care, we require:</p>
                                <div class="checklist style2 mb-3">
                                    <ul>
                                        <li>Current vaccination records (Rabies, DHPP for dogs, FVRCP for cats)</li>
                                        <li>Proof of flea and tick prevention treatment</li>
                                        <li>Disclosure of any medical conditions, allergies, or behavioral issues</li>
                                        <li>Emergency contact information and veterinarian details</li>
                                        <li>Written consent for any special handling requirements</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="fs-16">We reserve the right to refuse service to any pet showing signs of illness, aggression, or infestation. In such cases, you will be notified immediately and no service fees will be charged.</p>
                    </div>

                    <!-- Section 4 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">4. Payment Terms</h3>
                        <p class="fs-16 mb-3"><strong>Pricing:</strong> All prices listed on our website are in USD and are subject to change without notice. Current pricing will always be confirmed at the time of booking.</p>
                        <p class="fs-16 mb-3"><strong>Payment Methods:</strong> We accept cash, credit cards (Visa, MasterCard, American Express), debit cards, and digital payment methods. Payment is due at the time of service unless otherwise arranged.</p>
                        <p class="fs-16 mb-3"><strong>Deposits:</strong> Certain services may require a deposit at the time of booking. Deposits are non-refundable but may be applied to future services if cancellation notice is provided within policy guidelines.</p>
                        <p class="fs-16"><strong>Additional Charges:</strong> Additional charges may apply for matted fur, aggressive behavior requiring additional handlers, or services extending beyond the estimated time. You will be notified of any additional charges before they are applied.</p>
                    </div>

                    <!-- Section 5 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">5. Liability and Insurance</h3>
                        <div class="row align-items-center mb-3">
                            <div class="col-lg-7 mb-3 mb-lg-0">
                                <p class="fs-16 mb-3"><strong>Our Commitment:</strong> We take every precaution to ensure the safety and well-being of your pet. Our staff is trained in pet handling and first aid, and we maintain comprehensive liability insurance.</p>
                                <p class="fs-16 mb-3"><strong>Limitation of Liability:</strong> While we exercise the utmost care, pet grooming and care services carry inherent risks. We are not liable for any pre-existing conditions, injuries from self-inflicted wounds, or complications arising from undisclosed health issues.</p>
                                <p class="fs-16"><strong>Emergency Care:</strong> In the event of a medical emergency, we will attempt to contact you immediately. If we cannot reach you, we are authorized to seek emergency veterinary care on your behalf. You agree to reimburse all costs associated with such emergency care.</p>
                            </div>
                            <div class="col-lg-5">
                                <div class="gallery-img">
                                    <img src="assets/img/service/service_card_1_1.jpg" alt="Pet Care">
                                </div>
                            </div>
                        </div>
                        <p class="fs-16"><strong>Lost or Stolen Items:</strong> We are not responsible for collars, leashes, toys, or other personal items left with your pet during service. Please remove all valuables before your appointment.</p>
                    </div>

                    <!-- Section 6 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">6. Client Responsibilities</h3>
                        <p class="fs-16 mb-3">As a client of Babet Pet Care, you agree to:</p>
                        <div class="checklist style2 mb-3">
                            <ul>
                                <li>Provide accurate and complete information about your pet</li>
                                <li>Maintain current vaccination and health records</li>
                                <li>Disclose any behavioral issues or special needs</li>
                                <li>Arrive on time for scheduled appointments</li>
                                <li>Follow all care instructions provided by our staff</li>
                                <li>Pay for services rendered in a timely manner</li>
                                <li>Treat our staff and facilities with respect</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Section 7 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">7. Privacy and Data Protection</h3>
                        <div class="row align-items-center">
                            <div class="col-lg-5 mb-3 mb-lg-0">
                                <div class="gallery-img">
                                    <img src="assets/img/gallery/gallery_1_4.jpg" alt="Privacy">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <p class="fs-16 mb-3">We are committed to protecting your privacy and the security of your personal information. We collect, use, and store your data in accordance with applicable data protection laws.</p>
                                <p class="fs-16 mb-3"><strong>Information We Collect:</strong> This includes your name, contact information, pet details, medical records, payment information, and service history.</p>
                                <p class="fs-16 mb-3"><strong>How We Use Your Information:</strong> We use your information to provide services, process payments, send appointment reminders, and improve our services. We may also use it for marketing purposes with your consent.</p>
                                <p class="fs-16"><strong>Data Security:</strong> We implement appropriate technical and organizational measures to protect your personal data against unauthorized access, alteration, or destruction.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 8 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">8. Intellectual Property</h3>
                        <p class="fs-16 mb-3">All content on our website, including text, graphics, logos, images, and software, is the property of Babet Pet Care or its content suppliers and is protected by international copyright laws.</p>
                        <p class="fs-16 mb-3">You may not reproduce, distribute, modify, or create derivative works from any content on our website without our express written permission.</p>
                        <p class="fs-16"><strong>Photography and Media:</strong> We may take photographs or videos of your pet during services for use in our marketing materials. If you do not wish for your pet's image to be used, please notify us in writing.</p>
                    </div>

                    <!-- Section 9 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">9. Service Modifications and Availability</h3>
                        <div class="row align-items-center mb-3">
                            <div class="col-lg-7 mb-3 mb-lg-0">
                                <p class="fs-16 mb-3">We reserve the right to modify, suspend, or discontinue any aspect of our services at any time without notice. We are not liable for any modification, suspension, or discontinuation of services.</p>
                                <p class="fs-16 mb-3"><strong>Seasonal Services:</strong> Some services may only be available during certain seasons or times of year. We will notify you in advance if your requested service is unavailable.</p>
                                <p class="fs-16"><strong>Staff Changes:</strong> While we strive to maintain consistency, your preferred groomer or caretaker may not always be available. We will do our best to accommodate your preferences when possible.</p>
                            </div>
                            <div class="col-lg-5">
                                <div class="gallery-img">
                                    <img src="assets/img/service/service_card_1_3.jpg" alt="Services">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 10 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">10. Dispute Resolution</h3>
                        <p class="fs-16 mb-3"><strong>Complaints:</strong> If you are unsatisfied with our services, please contact us immediately. We are committed to resolving any issues to your satisfaction.</p>
                        <p class="fs-16 mb-3"><strong>Mediation:</strong> In the event of a dispute, both parties agree to attempt to resolve the matter through good faith negotiation and mediation before pursuing legal action.</p>
                        <p class="fs-16"><strong>Governing Law:</strong> These Terms and Conditions are governed by the laws of New York State. Any legal action must be brought in the courts of New York.</p>
                    </div>

                    <!-- Section 11 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">11. Changes to Terms and Conditions</h3>
                        <p class="fs-16 mb-3">We reserve the right to update or modify these Terms and Conditions at any time without prior notice. Changes will be effective immediately upon posting to our website.</p>
                        <p class="fs-16 mb-3">Your continued use of our services after any changes constitutes your acceptance of the new Terms and Conditions. We encourage you to review this page periodically for updates.</p>
                        <p class="fs-16">The date of the last revision will always be indicated at the top of this page.</p>
                    </div>

                    <!-- Section 12 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">12. Contact Information</h3>
                        <p class="fs-16 mb-3">If you have any questions about these Terms and Conditions, please contact us:</p>
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <div class="box-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <p class="box-text">
                                        <a href="mailto:infomail123@domain.com" class="box-link">infomail123@domain.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <div class="box-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <p class="box-text">
                                        <a href="tel:001203456789" class="box-link">+00-(120) 3456 789</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="info-box">
                                    <div class="box-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <p class="box-text">
                                        <a href="https://maps.google.com/" class="box-link">West 2nd lane, Inner circular road, New York City</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Acceptance -->
                    <div class="terms-section" data-cue="slideInUp">
                        <div class="process-card">
                            <div class="process-bg-mask" data-mask-src="assets/img/shape/process_card_mask1_1.jpg"></div>
                            <div class="box-icon">
                                <img src="assets/img/icon/checkmark2.svg" alt="img">
                            </div>
                            <div class="box-content">
                                <h4 class="box-title">Acceptance of Terms</h4>
                                <p class="box-text">By using Babet Pet Care services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions. Thank you for choosing Babet Pet Care for your pet's grooming and care needs!</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="space bg-smoke2 overflow-hidden">
        <div class="shape-mockup shake d-xxl-block d-none" data-top="30%" data-left="8%">
            <img src="assets/img/shape/shape1-11.png" alt="img">
        </div>
        <div class="shape-mockup shake d-xxl-block d-none" data-top="18%" data-right="12%">
            <img src="assets/img/shape/shape1-12.png" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-7 text-center mb-4 mb-lg-0" data-cue="slideInUp">
                    <div class="title-area mb-40">
                        <span class="sub-title subtitle-line text-anim">
                            <img class="me-2" src="assets/img/icon/subtitle-icon.svg" alt="icon">
                            Have Questions?
                        </span>
                        <h2 class="sec-title text-anim2">Ready to Book Your Pet's Next Grooming Session?</h2>
                        <p class="fs-18 text-anim2">Contact us today to schedule an appointment or learn more about our services.</p>
                    </div>
                    <div class="btn-wrap justify-content-center">
                        <a href="{{ route('contact') }}" class="th-btn">Contact Us Now</a>
                        <a href="{{ route('services') }}" class="th-btn style-border">View Our Services</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5" data-cue="slideInUp">
                    <div class="img-box1">
                        <div class="img1" data-mask-src="assets/img/normal/about-thumb-mask1-1.png">
                            <img src="assets/img/normal/why-thumb1-1.png" alt="Contact">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection