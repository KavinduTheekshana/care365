@extends('layouts.frontend')

{{-- SEO Meta Tags for Terms & Conditions Page --}}
@section('title', 'Terms & Conditions - Care365 Senior Living Sri Lanka')

@section('meta_author', 'Care365')

@section('meta_description', 'Read the Terms and Conditions for using Care365 website and services, including luxury retirement living, elder care agreements, and policies in Sri Lanka. Clear guidelines for residents and families.')

@section('meta_keywords', 'Care365 terms and conditions, Elder care terms Sri Lanka, Senior living policies, Retirement home terms')

@section('og_image', asset('assets/img/logo.png'))

@section('og_type', 'website')


@section('content')
    @include('frontend.termscondition.hero')

    <!-- Terms Content Section -->
    <div class="space overflow-hidden ">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    
                    <!-- Introduction -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <div class="title-area mb-30">
                            <span class="sub-title style2 text-anim">
                                Terms and Conditions
                            </span>
                            <h2 class="sec-title text-anim2">Welcome to At Care 365</h2>
                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-lg-7">
                                <p class="fs-16 mb-3">At Care 365, we understand the intricate needs that arise through life's journey. Whether you need post-surgical care, support for mobility, or a nurturing environment for dementia and Parkinson's, our compassionate team embraces your unique story.</p>
                                <p class="fs-16">Welcome to At Care 365 Healthcare Services. These Terms and Conditions govern your use of our website and services. By accessing or using our services, you agree to be bound by these terms. Please read them carefully before using our services.</p>
                            </div>
                            <div class="col-lg-5">
                                <div class="img-box1">
                                    <div class="img1" data-mask-src="assets/img/normal/about-thumb-mask1-1.png"
                                        style="border-radius: 15px; overflow: hidden;">
                                        <img src="assets/img/term/75675765.jpg" alt="Healthcare Terms">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 1 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">1. Service Definitions</h3>
                        <p class="fs-16 mb-3">Our comprehensive healthcare services include but are not limited to:</p>
                        <div class="checklist style2 mb-3">
                            <ul>
                                <li>Post-Surgical Care and Recovery Support</li>
                                <li>Mobility Support and Assistance</li>
                                <li>Dementia and Alzheimer's Care</li>
                                <li>Parkinson's Disease Support</li>
                                <li>Wound Care and Management</li>
                                <li>Physical Therapy and Rehabilitation</li>
                                <li>24/7 Staff Support and Monitoring</li>
                                <li>Medication Management</li>
                                <li>Chronic Disease Management</li>
                            </ul>
                        </div>
                        <p class="fs-16">All services are provided by qualified healthcare professionals and must be scheduled through our assessment process. Services are subject to availability and medical necessity.</p>
                    </div>

                    <!-- Section 2 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">2. Service Arrangements and Scheduling</h3>
                        <p class="fs-16 mb-3"><strong>Initial Assessment:</strong> All new clients require a comprehensive assessment by our healthcare team before services can be scheduled. This assessment helps us develop a personalized care plan tailored to your specific needs.</p>
                        <p class="fs-16 mb-3"><strong>Scheduling:</strong> Care services are scheduled based on assessment recommendations, staff availability, and client needs. We strive to maintain consistent caregiver assignments whenever possible.</p>
                        <p class="fs-16 mb-3"><strong>Cancellation Policy:</strong> Cancellations must be made at least 48 hours before scheduled services. Emergency cancellations due to medical reasons will be handled on a case-by-case basis without penalty.</p>
                        <p class="fs-16"><strong>Service Changes:</strong> Changes to service schedules require at least 72 hours notice and are subject to staff availability and care plan approval by our clinical team.</p>
                    </div>

                    <!-- Section 3 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">3. Healthcare Requirements and Eligibility</h3>
                        <div class="row align-items-center mb-3">
                            <div class="col-lg-5 mb-3 mb-lg-0">
                                <div class="gallery-img" style="border-radius: 20px; overflow: hidden;">
                                    <img src="assets/img/term/575785687.avif"
                                        alt="Healthcare Safety"
                                        style="width: 100%; height: 300px; object-fit: cover;">
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <p class="fs-16 mb-3">To ensure safe and effective care delivery, we require:</p>
                                <div class="checklist style2 mb-3">
                                    <ul>
                                        <li>Complete medical history and current health status</li>
                                        <li>Physician's orders and treatment plans when applicable</li>
                                        <li>Current medication list and allergies</li>
                                        <li>Emergency contact information and advance directives</li>
                                        <li>Insurance information and verification</li>
                                        <li>Signed consent forms for treatment and services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="fs-16">We reserve the right to refuse or modify services if a client's condition requires care beyond our scope or if safety concerns arise. Our clinical team will make these determinations in consultation with the client's physician when necessary.</p>
                    </div>

                    <!-- Section 4 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">4. Payment and Insurance Terms</h3>
                        <p class="fs-16 mb-3"><strong>Pricing:</strong> Service rates are based on the level of care required, duration of services, and specific care needs. All prices are in USD and will be provided in your personalized care plan.</p>
                        <p class="fs-16 mb-3"><strong>Insurance Billing:</strong> We work with most major insurance providers, Medicare, and Medicaid. It is your responsibility to verify coverage and obtain any necessary pre-authorizations. You are responsible for any deductibles, co-payments, or non-covered services.</p>
                        <p class="fs-16 mb-3"><strong>Private Pay:</strong> For private pay clients, payment is due upon receipt of invoice. We accept cash, credit cards, debit cards, and electronic transfers.</p>
                        <p class="fs-16"><strong>Service Modifications:</strong> Additional charges may apply for unscheduled visits, emergency services, or changes to the care plan requiring additional resources. You will be notified of any additional charges before they are incurred.</p>
                    </div>

                    <!-- Section 5 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">5. Liability and Professional Responsibility</h3>
                        <div class="row align-items-center mb-3">
                            <div class="col-lg-7 mb-3 mb-lg-0">
                                <p class="fs-16 mb-3"><strong>Our Commitment:</strong> Our healthcare professionals are licensed, bonded, and insured. We maintain comprehensive liability insurance and adhere to all state and federal healthcare regulations.</p>
                                <p class="fs-16 mb-3"><strong>Scope of Practice:</strong> Our staff provides care within their professional scope of practice and training. We coordinate with physicians and other healthcare providers to ensure comprehensive care.</p>
                                <p class="fs-16"><strong>Emergency Situations:</strong> In medical emergencies, our staff will follow established emergency protocols, contact emergency services, and notify designated emergency contacts. You authorize us to seek emergency medical treatment on your behalf if you are unable to make decisions.</p>
                            </div>
                            <div class="col-lg-5">
                                <div class="gallery-img" style="border-radius: 20px; overflow: hidden;">
                                    <img src="assets/img/term/6576578.jpg"
                                        alt="Professional Care"
                                        style="width: 100%;">
                                </div>
                            </div>

                        </div>
                        <p class="fs-16"><strong>Limitation of Liability:</strong> While we provide the highest standard of care, we are not liable for complications arising from pre-existing conditions, refusal of recommended care, or circumstances beyond our reasonable control.</p>
                    </div>

                    <!-- Section 6 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">6. Client and Family Responsibilities</h3>
                        <p class="fs-16 mb-3">As a client of At Care 365, you and your family agree to:</p>
                        <div class="checklist style2 mb-3">
                            <ul>
                                <li>Provide accurate and complete health information</li>
                                <li>Participate in care planning and decision-making</li>
                                <li>Maintain a safe environment for care delivery</li>
                                <li>Notify us of changes in health status or medications</li>
                                <li>Treat our staff with respect and dignity</li>
                                <li>Provide necessary medical equipment and supplies</li>
                                <li>Cooperate with care recommendations and treatment plans</li>
                                <li>Make timely payments for services rendered</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Section 7 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">7. Privacy and HIPAA Compliance</h3>
                        <div class="row align-items-center">
                            <div class="col-lg-5 mb-3 mb-lg-0">
                                <div class="gallery-img" style="border-radius: 20px; overflow: hidden;">
                                    <img src="assets/img/term/Black-Elderly-Care-OMEGAYKSI-768x768.jpg"
                                        alt="Healthcare Privacy"
                                        style="width: 100%; height: 400px; object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <p class="fs-16 mb-3">We are fully compliant with HIPAA (Health Insurance Portability and Accountability Act) and other applicable privacy laws. Your health information is protected and confidential.</p>
                                <p class="fs-16 mb-3"><strong>Protected Health Information:</strong> We collect and maintain only the minimum necessary health information to provide quality care. This includes medical history, treatment records, and insurance information.</p>
                                <p class="fs-16 mb-3"><strong>Information Sharing:</strong> Your health information is shared only with authorized individuals involved in your care, insurance companies for billing purposes, and as required by law. You have the right to access your medical records and request amendments.</p>
                                <p class="fs-16"><strong>Data Security:</strong> We employ advanced security measures including encryption, secure data storage, and strict access controls to protect your personal health information.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 8 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">8. Intellectual Property</h3>
                        <p class="fs-16 mb-3">All content on our website, including text, graphics, logos, images, care protocols, and educational materials, is the property of At Care 365 or its content suppliers and is protected by international copyright laws.</p>
                        <p class="fs-16 mb-3">You may not reproduce, distribute, modify, or create derivative works from any content without our express written permission. Healthcare protocols and care plans are proprietary and for client use only.</p>
                        <p class="fs-16"><strong>Testimonials and Media:</strong> With your written consent, we may use testimonials or general service descriptions for educational and marketing purposes. Personal health information is never disclosed without explicit authorization.</p>
                    </div>

                    <!-- Section 9 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">9. Service Modifications and Continuity of Care</h3>
                        <div class="row align-items-center mb-3">
                            <div class="col-lg-7 mb-3 mb-lg-0">
                                <p class="fs-16 mb-3">We reserve the right to modify, suspend, or adjust services based on changing health needs, staff availability, or safety considerations. Changes will be communicated promptly to clients and families.</p>
                                <p class="fs-16 mb-3"><strong>Care Plan Reviews:</strong> Care plans are regularly reviewed and updated based on changing needs and health status. You will be involved in all care plan discussions and decisions.</p>
                                <p class="fs-16"><strong>Staff Consistency:</strong> We strive to maintain consistent caregiver assignments to build trust and understanding. However, staff changes may occur due to scheduling, training, or continuity needs.</p>
                            </div>
                            <div class="col-lg-5">
                                <div class="gallery-img" style="border-radius: 20px; overflow: hidden;">
                                    <img src="assets/img/term/788778587.webp"
                                        alt="Continuity of Care"
                                        style="width: 100%; height: 400px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 10 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">10. Dispute Resolution and Complaints</h3>
                        <p class="fs-16 mb-3"><strong>Complaint Process:</strong> If you have concerns about your care, please contact our Client Services Director immediately. We are committed to addressing and resolving all concerns promptly and fairly.</p>
                        <p class="fs-16 mb-3"><strong>Mediation:</strong> In the event of a dispute, both parties agree to attempt resolution through mediation before pursuing formal legal action. We maintain an open-door policy for addressing concerns.</p>
                        <p class="fs-16"><strong>Governing Law:</strong> These Terms and Conditions are governed by the laws of New York State. Any legal proceedings must be brought in the appropriate courts of New York.</p>
                    </div>

                    <!-- Section 11 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">11. Changes to Terms and Conditions</h3>
                        <p class="fs-16 mb-3">We reserve the right to update these Terms and Conditions to reflect changes in regulations, services, or operational requirements. Significant changes will be communicated to active clients.</p>
                        <p class="fs-16 mb-3">Changes become effective upon posting to our website. Your continued use of services after changes constitutes acceptance of the updated terms.</p>
                        <p class="fs-16">The revision date at the top of this page indicates when these terms were last updated.</p>
                    </div>

                    <!-- Section 12 -->
                    <div class="terms-section mb-40" data-cue="slideInUp">
                        <h3 class="box-title mb-3">12. Contact Information</h3>
                        <p class="fs-16 mb-3">For questions about these Terms and Conditions or our services, please contact us:</p>
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <div class="box-icon">
                                        <i class="fas fa-envelope" style="color: black;"></i>
                                    </div>
                                    <p class="box-text">
                                        <a href="mailto:info@care36t5.com"
                                        class="box-link"
                                        style="color: black;">
                                            info@care36t5.com
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="info-box">
                                    <div class="box-icon">
                                        <i class="fas fa-phone" style="color: black;"></i>
                                    </div>
                                    <p class="box-text">
                                        <a href="tel:+94776604040"
                                        class="box-link"
                                        style="color: black;">
                                            (+94) 77 660 40 40
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="info-box">
                                    <div class="box-icon">
                                        <i class="fas fa-map-marker-alt" style="color: black;"></i>
                                    </div>
                                    <p class="box-text">
                                        <a href="#"
                                        class="box-link"
                                        style="color: black;">
                                            407 C1, Nomis Weragala Mw, Hokandara South,
                                            Thalawathugoda, Sri Lanka
                                        </a>
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
                                <p class="box-text">By using At Care 365 services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions. Thank you for choosing At Care 365 for your healthcare journey – where compassionate care meets every need, 365 days a year.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    

@endsection