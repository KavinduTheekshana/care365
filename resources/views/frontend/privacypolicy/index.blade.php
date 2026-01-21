@extends('layouts.frontend')

@section('content')

    @include('frontend.privacypolicy.hero')



    <div class="space ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-policy-content">
                        <!-- Header Image Section -->
                        <div class="text-center mb-3" data-cue="slideInUp">
                            <div class="mt-1">
                                <small class="text-muted">We protect your privacy with the highest standards of security and confidentiality</small>
                            </div>
                        </div>

                        <div class="title-area mb-4">
                            <span class="sub-title text-anim subtitle-line" data-cue="slideInUp">Last Updated: January 21, 2026</span>
                            <h2 class="sec-title text-anim" data-cue="slideInUp">Our Commitment to Your Privacy</h2>
                            <p class="fs-18 text-anim2" data-cue="slideInUp">We are committed to protecting the privacy and confidentiality of our residents, their families, and website visitors. This Privacy Policy explains how we collect, use, disclose, and safeguard your information.</p>
                        </div>



                        <div class="policy-section" data-cue="slideInUp">
                            <h3 class="policy-title">1. Information We Collect</h3>
                            <p class="mb-3">We collect information that you provide directly to us, including:</p>
                            
                            <h4 class="policy-subtitle">Personal Information</h4>
                            <p>When you inquire about our services, register for admission, or use our digital platform, we may collect:</p>
                            <ul class="policy-list">
                                <li>Name, address, phone number, and email address</li>
                                <li>Date of birth and age</li>
                                <li>Emergency contact information</li>
                                <li>Financial and insurance information</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Medical and Health Information</h4>
                            <p>For residents, we collect health information necessary to provide care:</p>
                            <ul class="policy-list">
                                <li>Medical history and current health conditions</li>
                                <li>Medication records and treatment plans</li>
                                <li>Dietary requirements and allergies</li>
                                <li>Physical therapy and rehabilitation records</li>
                                <li>Mental health and cognitive assessments</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Website Usage Information</h4>
                            <p>When you visit our website, we automatically collect:</p>
                            <ul class="policy-list">
                                <li>IP address and browser type</li>
                                <li>Pages visited and time spent on each page</li>
                                <li>Referring website addresses</li>
                                <li>Device information and operating system</li>
                            </ul>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">2. How We Use Your Information</h3>
                            <p class="mb-3">We use the information we collect for the following purposes:</p>
                            
                            <h4 class="policy-subtitle">Care Delivery and Management</h4>
                            <ul class="policy-list">
                                <li>Providing personalized care services to residents</li>
                                <li>Maintaining accurate medical records</li>
                                <li>Coordinating with healthcare providers and specialists</li>
                                <li>Managing medications and treatments</li>
                                <li>Monitoring health progress and updating care plans</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Administrative Purposes</h4>
                            <ul class="policy-list">
                                <li>Processing admissions and managing accounts</li>
                                <li>Billing and payment processing</li>
                                <li>Communicating with residents and family members</li>
                                <li>Responding to inquiries and appointment requests</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Digital Platform Services</h4>
                            <ul class="policy-list">
                                <li>Providing access to medical records through our platform</li>
                                <li>Enabling video conferencing with family members</li>
                                <li>Sharing updates about resident activities and well-being</li>
                                <li>Facilitating communication between families and care staff</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Legal and Safety</h4>
                            <ul class="policy-list">
                                <li>Complying with legal and regulatory requirements</li>
                                <li>Ensuring the safety and security of residents</li>
                                <li>Preventing and responding to emergencies</li>
                                <li>Protecting against fraud and unauthorized access</li>
                            </ul>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">3. Information Sharing and Disclosure</h3>
                            <p class="mb-3">We do not sell or rent your personal information. We may share your information in the following circumstances:</p>
                            
                            <h4 class="policy-subtitle">Healthcare Providers</h4>
                            <p>We share medical information with:</p>
                            <ul class="policy-list">
                                <li>Physicians, specialists, and other healthcare professionals involved in resident care</li>
                                <li>Hospitals and medical facilities for treatment purposes</li>
                                <li>Pharmacies for medication management</li>
                                <li>Physical therapists and rehabilitation specialists</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Family Members and Authorized Representatives</h4>
                            <ul class="policy-list">
                                <li>Designated family members with resident consent</li>
                                <li>Legal guardians or power of attorney holders</li>
                                <li>Emergency contacts in case of urgent situations</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Service Providers</h4>
                            <ul class="policy-list">
                                <li>Third-party vendors who assist with our operations (e.g., billing, IT services)</li>
                                <li>Technology platforms that support our digital well-being services</li>
                                <li>Transportation services for resident appointments</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Legal Requirements</h4>
                            <ul class="policy-list">
                                <li>When required by law or legal process</li>
                                <li>To comply with healthcare regulations and standards</li>
                                <li>To protect the rights, property, or safety of residents and staff</li>
                                <li>In response to valid requests from government authorities</li>
                            </ul>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">4. Data Security</h3>
                            <p class="mb-3">We implement comprehensive security measures to protect your information:</p>
                            
                            <h4 class="policy-subtitle">Technical Safeguards</h4>
                            <ul class="policy-list">
                                <li>Encryption of sensitive data in transit and at rest</li>
                                <li>Secure servers with firewall protection</li>
                                <li>Regular security audits and vulnerability assessments</li>
                                <li>Multi-factor authentication for digital platform access</li>
                                <li>Automatic logout after periods of inactivity</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Physical Safeguards</h4>
                            <ul class="policy-list">
                                <li>Secure storage of physical medical records</li>
                                <li>Restricted access to areas containing sensitive information</li>
                                <li>Surveillance systems to monitor facility security</li>
                                <li>Visitor check-in procedures and identification requirements</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Administrative Safeguards</h4>
                            <ul class="policy-list">
                                <li>Staff training on privacy and security protocols</li>
                                <li>Confidentiality agreements with all employees</li>
                                <li>Role-based access controls limiting information access</li>
                                <li>Regular privacy compliance reviews and updates</li>
                            </ul>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">5. Your Rights and Choices</h3>
                            <p class="mb-3">You have the following rights regarding your personal information:</p>
                            
                            <h4 class="policy-subtitle">Access and Review</h4>
                            <ul class="policy-list">
                                <li>Request access to your personal and medical information</li>
                                <li>Review medical records and care plans</li>
                                <li>Obtain copies of your information (fees may apply)</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Corrections and Updates</h4>
                            <ul class="policy-list">
                                <li>Request corrections to inaccurate information</li>
                                <li>Update contact and emergency information</li>
                                <li>Amend medical records with supporting documentation</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Restrictions and Limitations</h4>
                            <ul class="policy-list">
                                <li>Request restrictions on certain uses of your information</li>
                                <li>Limit who can access your medical records</li>
                                <li>Opt-out of non-essential communications</li>
                            </ul>

                            <h4 class="policy-subtitle mt-4">Confidential Communications</h4>
                            <ul class="policy-list">
                                <li>Request communications through specific methods</li>
                                <li>Choose alternative contact addresses or phone numbers</li>
                            </ul>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">6. Cookies and Tracking Technologies</h3>
                            <p class="mb-3">Our website uses cookies and similar technologies to enhance your browsing experience:</p>
                            
                            <h4 class="policy-subtitle">Types of Cookies We Use</h4>
                            <ul class="policy-list">
                                <li><strong>Essential Cookies:</strong> Required for website functionality and security</li>
                                <li><strong>Performance Cookies:</strong> Help us understand how visitors use our site</li>
                                <li><strong>Functional Cookies:</strong> Remember your preferences and settings</li>
                                <li><strong>Analytics Cookies:</strong> Collect information about site usage and performance</li>
                            </ul>

                            <p class="mt-3">You can control cookies through your browser settings. Note that disabling certain cookies may affect website functionality.</p>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">7. Third-Party Links</h3>
                            <p>Our website may contain links to third-party websites, including healthcare providers, insurance companies, and service partners. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies before providing any personal information.</p>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">8. Children's Privacy</h3>
                            <p>Our services are designed for elderly individuals and their adult family members. We do not knowingly collect personal information from children under 18 years of age. If you believe we have inadvertently collected information from a minor, please contact us immediately.</p>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">9. Data Retention</h3>
                            <p class="mb-3">We retain your information for as long as necessary to:</p>
                            <ul class="policy-list">
                                <li>Provide services to residents during their stay</li>
                                <li>Comply with legal and regulatory requirements (typically 7-10 years for medical records)</li>
                                <li>Resolve disputes and enforce our agreements</li>
                                <li>Maintain historical records for continuity of care</li>
                            </ul>
                            <p class="mt-3">After the retention period, we securely destroy or anonymize personal information in accordance with applicable laws.</p>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">10. International Data Transfers</h3>
                            <p>Your information is primarily stored and processed in Sri Lanka. If information is transferred internationally, we ensure appropriate safeguards are in place to protect your privacy and comply with applicable data protection laws.</p>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">11. Changes to This Privacy Policy</h3>
                            <p>We may update this Privacy Policy periodically to reflect changes in our practices, technology, legal requirements, or other factors. We will notify you of material changes by:</p>
                            <ul class="policy-list">
                                <li>Posting the updated policy on our website</li>
                                <li>Updating the "Last Updated" date at the top of this page</li>
                                <li>Sending email notifications for significant changes</li>
                                <li>Posting notices in our facility for resident awareness</li>
                            </ul>
                            <p class="mt-3">We encourage you to review this Privacy Policy regularly to stay informed about how we protect your information.</p>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">12. Contact Us</h3>
                            <p class="mb-3">If you have questions, concerns, or requests regarding this Privacy Policy or our privacy practices, please contact us:</p>
                            
                            <!-- Contact Info with Image -->
                            <div class="row align-items-center mb-4">
                                <div class="col-md-3">
                                    <img 
                                        src="{{ asset('assets/img/privacy/8873476.png') }}" 
                                        alt="Privacy Contact" 
                                        class="img-fluid rounded"
                                        style="max-width: 160px; height: auto; width: 160px; object-fit: contain; margin: 1rem auto; display: block;"
                                    >
                                </div>
                                <div class="col-md-9">
                                    <div class="contact-info-box p-4  rounded">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <h5 class="mb-2"><i class="fas fa-user-shield me-2"></i>Privacy Officer</h5>
                                                <p class="mb-1"><i class="fas fa-envelope me-2"></i>Email: privacy@care36t5.com</p>
                                                <p class="mb-1"><i class="fas fa-phone me-2"></i>Phone: +94 77 660 40 40</p>
                                                <p class="mb-1"><i class="fas fa-envelope me-2"></i>General Inquiries: info@care36t5.com</p>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <h5 class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Mailing Address</h5>
                                                <p class="mb-0">
                                                    Care 36<br>
                                                    407 C1, Nomis Weragala Mw,<br>
                                                    Hokandara South, Thalawathugoda,<br>
                                                    Sri Lanka
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-4">For complaints or concerns about our privacy practices, you may also contact:</p>
                            <ul class="policy-list">
                                <li>Sri Lanka Data Protection Authority (if applicable)</li>
                                <li>Ministry of Health, Sri Lanka</li>
                                <li>Your local healthcare regulatory authority</li>
                            </ul>
                        </div>

                        <div class="policy-section mt-5" data-cue="slideInUp">
                            <h3 class="policy-title">13. Acknowledgment and Consent</h3>
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <p>By using our website, services, or digital platform, or by residing in our facility, you acknowledge that you have read and understood this Privacy Policy and consent to the collection, use, and disclosure of your information as described herein. For residents, a separate consent form will be provided during the admission process.</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('assets/img/privacy/6757578.png') }}" alt="Consent Icon" class="img-fluid" style="max-width: 150px;">
                                </div>
                            </div>
                        </div>

                        <div class="policy-footer mt-5 p-4 bg-light rounded text-center" data-cue="slideInUp">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/img/privacy/8849677.png') }}" alt="Privacy Shield" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <p class="mb-2"><strong>Your privacy is our priority.</strong></p>
                                    <p class="mb-0">We are committed to maintaining the trust and confidence of our residents and their families through responsible information management.</p>
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/img/privacy/wired-outline-2606-secure-data.svg') }}" alt="Secure Data" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .privacy-policy-content {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
        }

        .policy-section {
            margin-bottom: 2rem;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .policy-title {
            color: #2c3e50;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e0e0e0;
        }

        .policy-subtitle {
            color: #34495e;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 0.75rem;
            margin-top: 1.5rem;
        }

        .policy-list {
            list-style: none;
            padding-left: 0;
        }

        .policy-list li {
            padding-left: 1.5rem;
            margin-bottom: 0.5rem;
            position: relative;
        }

        .policy-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #27ae60;
            font-weight: bold;
        }

        .contact-info-box {
            background: transparent;
        }

        .contact-info-box h5 {
            color: #2c3e50;
            font-size: 16px;
        }

        .policy-footer {
            background: linear-gradient(135deg, #f1f8e9 0%, #ffffff 100%);
        }

        .policy-footer strong {
            color: #27ae60;
            font-size: 18px;
        }

        /* Image styling */
        .privacy-policy-content img {
            border-radius: 8px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }

        .contact-info-box .fa {
            color: #27ae60;
        }
    </style>
@endsection