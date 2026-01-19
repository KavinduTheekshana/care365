<div class="space overflow-hidden bg-smoke2 contact-area-1 position-relative z-index-common" id="contact-sec">
    <div class="container">
        <div class="row gy-40 gx-40 justify-content-center">
            <div class="col-xl-5" data-cue="slideInUp">
                <div class="info-wrap style2" data-cue="slideInUp">
                    <div class="top">
                        <h4 class="box-title">Let's working together</h4>
                        <p class="box-text">Thank you for your interest in Attach Web Agency. We're excited to hear from you and discuss...</p>
                    </div>

                    <div class="info-box" data-cue="slideInUp">
                        <div class="box-icon">
                            <img src="assets/img/icon/con-call.svg" alt="img">
                        </div>
                        <div class="content">
                            <h4 class="box-title">Call Us</h4>
                            <p class="box-text"><a href="tel:+94776604040">(+94)77 660 40 40</a></p>
                        </div>
                    </div>
                    <div class="info-box" data-cue="slideInUp">
                        <div class="box-icon">
                            <img src="assets/img/icon/con-email.svg" alt="img">
                        </div>
                        <div class="content">
                            <h4 class="box-title">E-mail</h4>
                            <p class="box-text"><a href="mailto:info@care36t5.com">info@care36t5.com</a></p>
                        </div>
                    </div>
                    <div class="info-box" data-cue="slideInUp">
                        <div class="box-icon">
                            <img src="assets/img/icon/con-location.svg" alt="img">
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

<!-- Modern Alert Modal -->
<div id="alertModal" class="alert-modal">
    <div class="alert-modal-content">
        <div class="alert-icon" id="alertIcon"></div>
        <h3 id="alertTitle"></h3>
        <p id="alertMessage"></p>
        <button class="alert-close-btn" onclick="closeAlert()">Close</button>
    </div>
</div>

<style>
.alert-modal {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 99999;
    background-color: rgba(0, 0, 0, 0.55);
    backdrop-filter: blur(6px);
    animation: fadeIn 0.25s ease;
}

.alert-modal-content {
    position: relative;
    background: white;
    margin: 10% auto;
    padding: 28px 24px;
    border-radius: 16px;
    max-width: 90%;
    width: 420px;                /* max width on large screens */
    text-align: center;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.18);
    border: 1px solid #e0f2fe;
    animation: slideDown 0.3s ease;
    color: #1e293b;              /* dark slate for text */
}

/* Mobile adjustments */
@media (max-width: 480px) {
    .alert-modal-content {
        margin: 15% auto 5%;
        padding: 24px 20px;
        border-radius: 14px;
        max-width: 92%;
    }
    
    .alert-icon {
        width: 64px;
        height: 64px;
        font-size: 32px;
    }
    
    .alert-modal-content h3 {
        font-size: 20px;
        margin: 12px 0;
    }
    
    .alert-modal-content p {
        font-size: 15px;
        margin: 0 0 20px;
    }
    
    .alert-close-btn {
        padding: 10px 32px;
        font-size: 15px;
    }
}

.alert-icon {
    width: 72px;
    height: 72px;
    margin: 0 auto 16px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    font-weight: bold;
    background: #f0f9ff;           /* very light blue */
    color: #3b82f6;                /* blue icon */
    border: 2px solid #bfdbfe;
    box-shadow: 0 2px 10px rgba(59, 130, 246, 0.15);
}

.alert-modal-content h3 {
    margin: 12px 0 8px;
    font-size: 22px;
    font-weight: 600;
    color: #1e40af;
}

.alert-modal-content p {
    margin: 0 0 24px;
    font-size: 15.5px;
    line-height: 1.5;
    color: #475569;
}

.alert-close-btn {
    background: #3b82f6;
    color: white;
    border: none;
    padding: 11px 36px;
    font-size: 15.5px;
    font-weight: 600;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.25s ease;
    box-shadow: 0 3px 12px rgba(59, 130, 246, 0.25);
}

.alert-close-btn:hover,
.alert-close-btn:focus {
    background: #2563eb;
    transform: translateY(-1px);
    box-shadow: 0 5px 16px rgba(59, 130, 246, 0.35);
    outline: none;
}

/* Error state - still light theme, just slightly more noticeable */
.alert-modal.error .alert-icon {
    background: #fef2f2;
    color: #ef4444;
    border-color: #fecaca;
}

.alert-modal.error .alert-modal-content {
    border-color: #fecaca;
}

/* Loader (unchanged) */
.btn-loader {
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideDown {
    from {
        transform: translateY(-40px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}
</style>

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