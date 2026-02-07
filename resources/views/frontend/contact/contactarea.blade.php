<div class="space overflow-hidden bg-smoke2 contact-area-1 position-relative " id="contact-sec">
    <div class="container">
        <div class="row gy-40 gx-40 justify-content-center">
            <div class="col-xl-5" data-cue="slideInUp">
                <div class="info-wrap style2" data-cue="slideInUp">
                    <div class="top">
                        <h4 class="box-title">Let's working together</h4>
                        <p class="box-text">Thank you for your interest in Attach Web Agency. We're excited to hear from you and discuss...</p>
                    </div>

                    <div class="info-box" data-cue="slideInUp">
                        <div class="box-icon" style="background-color: #e6f2ff;">
                            <img src="assets/img/icon/674764367.png" alt="img">
                        </div>

                        <div class="content">
                            <h4 class="box-title">Call Us</h4>
                            <p class="box-text"><a href="tel:+94776604040">(+94)77 660 40 40</a></p>
                        </div>
                    </div>
                    <div class="info-box" data-cue="slideInUp">
                        <div class="box-icon" style="background-color: #e6f2ff;">
                            <img src="assets/img/icon/flat-icon-unread-message-blue-600nw-1909756030-removebg-preview.png" alt="img">
                        </div>
                        <div class="content">
                            <h4 class="box-title">E-mail</h4>
                            <p class="box-text"><a href="mailto:info@care36t5.com">info@care36t5.com</a></p>
                        </div>
                    </div>
                    <div class="info-box" data-cue="slideInUp">
                        <div class="box-icon" style="background-color: #e6f2ff;">
                            <img src="assets/img/icon/10489216.png" alt="img">
                        </div>
                        <div class="content">
                            <h4 class="box-title">Visit Us</h4>
                            <p class="box-text">407 C1, Nomis Weragala Mw, Hokandara South. Thalawathugoda, Sri Lanka</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="contact-form-v1">
                    <form id="contactForm" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your name*" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address*" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="number" id="number" placeholder="Phone Number*" required>
                            </div>

                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select" required>
                                    <option value="" disabled selected hidden>Select Service*</option>
                                    <option value="Medical Care">Medical Care</option>
                                    <option value="Nutritious Meals">Nutritious Meals</option>
                                    <option value="Social/Recreational Activities">Social/Recreational Activities</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="24-hour Staff Availability">24-hour Staff Availability</option>
                                    <option value="Religious and Spiritual Support">Religious and Spiritual Support</option>
                                    <option value="Wound Care">Wound Care</option>
                                    <option value="Paralysis Care">Paralysis Care</option>
                                    <option value="Dementia & Parkinson Care">Dementia & Parkinson Care</option>
                                    <option value="Housekeeping/Laundry Services">Housekeeping/Laundry Services</option>
                                    <option value="Physical Therapy and Rehabilitation">Physical Therapy and Rehabilitation</option>
                                    <option value="Video Conferencing Facility">Video Conferencing Facility</option>
                                    <option value="Music, Art Activities/Library Facilities">Music, Art Activities/Library Facilities</option>
                                    <option value="Affordable Packages">Affordable Packages</option>
                                    <option value="Television Room/Lounge">Television Room/Lounge</option>
                                    <option value="Digital Well-being Platform">Digital Well-being Platform</option>
                                    <option value="Post-surgical Care">Post-surgical Care</option>
                                    <option value="Green Environment">Green Environment</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write a message*" required></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="th-btn style5" id="submitBtn">
                                    <span class="btn-text">Submit Message</span>
                                    <span class="btn-loader" style="display: none;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10" opacity="0.25"/>
                                            <path d="M12 2a10 10 0 0 1 10 10" opacity="0.75">
                                                <animateTransform attributeName="transform" type="rotate" from="0 12 12" to="360 12 12" dur="1s" repeatCount="indefinite"/>
                                            </path>
                                        </svg>
                                        Sending...
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.components.email_alert_modal')

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = document.getElementById('submitBtn');
    const btnText = submitBtn.querySelector('.btn-text');
    const btnLoader = submitBtn.querySelector('.btn-loader');
    
    // Disable button and show loader
    submitBtn.disabled = true;
    btnText.style.display = 'none';
    btnLoader.style.display = 'inline-flex';
    
    const formData = new FormData(this);
    
    fetch('/contact/send', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
            'Accept': 'application/json',
        }
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(err => {
                throw err;
            });
        }
        return response.json();
    })
    .then(data => {
        // Re-enable button
        submitBtn.disabled = false;
        btnText.style.display = 'inline';
        btnLoader.style.display = 'none';
        
        if (data.success) {
            showAlert('success', 'Success!', data.message);
            document.getElementById('contactForm').reset();
        } else {
            showAlert('error', 'Error!', data.message);
        }
    })
    .catch(error => {
        // Re-enable button
        submitBtn.disabled = false;
        btnText.style.display = 'inline';
        btnLoader.style.display = 'none';
        
        console.error('Error:', error);
        
        let errorMessage = 'An unexpected error occurred. Please try again.';
        if (error.message) {
            errorMessage = error.message;
        }
        if (error.error) {
            errorMessage = error.error;
        }
        
        showAlert('error', 'Error!', errorMessage);
    });
});

function showAlert(type, title, message) {
    const modal = document.getElementById('alertModal');
    const icon = document.getElementById('alertIcon');
    const titleEl = document.getElementById('alertTitle');
    const messageEl = document.getElementById('alertMessage');
    
    if (type === 'success') {
        icon.innerHTML = '✓';
        modal.classList.remove('error');
    } else {
        icon.innerHTML = '✕';
        modal.classList.add('error');
    }
    
    titleEl.textContent = title;
    messageEl.textContent = message;
    modal.style.display = 'block';
}

function closeAlert() {
    document.getElementById('alertModal').style.display = 'none';
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('alertModal');
    if (event.target == modal) {
        closeAlert();
    }
}
</script>