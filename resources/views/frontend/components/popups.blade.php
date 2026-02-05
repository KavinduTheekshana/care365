<div id="top-notification-bar" style="
    position: relative;
    z-index: 9999;
    background: #ffffff;
    color: #333;
    padding: 10px 0;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    display: none;
    border-bottom: 1px solid #f0f0f0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-8 col-7">
                <span style="
                    font-size: 0.875rem;
                    font-weight: 400;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    flex-wrap: wrap;
                    color: #555;
                ">
                    <span style="
                        background: #fad643;
                        color: #333;
                        padding: 2px 10px;
                        border-radius: 2px;
                        font-size: 0.7rem;
                        font-weight: 500;
                        letter-spacing: 0.3px;
                        display: inline-flex;
                        align-items: center;
                        white-space: nowrap;
                        text-transform: uppercase;
                    ">
                        New Offer
                    </span>
                    
                    <span style="font-weight: 400; color: #666;">
                        Admission Benefits Available for Premium Retirement Homes
                    </span>
                </span>
            </div>
            <div class="col-lg-3 col-md-4 col-5 text-end">
                <a href="tel:+94776604040" 
                style="
                    background: transparent;
                    color: #2196F3;
                    padding: 4px 10px;          /* very compact */
                    font-size: 0.75rem;         /* quite small text */
                    font-weight: 500;
                    border-radius: 4px;
                    text-decoration: none;
                    display: inline-block;
                    transition: all 0.2s ease;
                    border: 1px solid #2196F3;
                    cursor: pointer;
                    text-align: center;
                    min-width: 90px;            /* prevents it from becoming too narrow */
                    line-height: 1.2;
                "
                onmouseover="this.style.background='#2196F3'; this.style.color='white';"
                onmouseout="this.style.background='transparent'; this.style.color='#2196F3';">
                    Enquire Now
                </a>
                
                <button id="close-notification" 
                        style="
                            background: none;
                            border: none;
                            color: #ccc;
                            cursor: pointer;
                            font-size: 1rem;
                            padding: 0 0 0 12px;
                            transition: all 0.2s ease;
                            width: 20px;
                            height: 20px;
                            display: inline-flex;
                            align-items: center;
                            justify-content: center;
                            margin-left: 8px;
                        "
                        onmouseover="this.style.color='#999';"
                        onmouseout="this.style.color='#ccc';"
                        aria-label="Close notification"
                        title="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Animation Keyframes */
    @keyframes slideDownNotification {
        from { 
            transform: translateY(-100%);
            opacity: 0;
        }
        to { 
            transform: translateY(0);
            opacity: 1;
        }
    }
    
    @keyframes slideUpNotification {
        from {
            transform: translateY(0);
            opacity: 1;
        }
        to {
            transform: translateY(-100%);
            opacity: 0;
        }
    }
    
    /* Responsive adjustments */
    @media (max-width: 992px) {
        #top-notification-bar .container {
            padding: 0 15px !important;
        }
        
        #top-notification-bar span span:first-child {
            font-size: 0.7rem !important;
            padding: 4px 12px !important;
        }
        
        #top-notification-bar span span:last-child {
            font-size: 0.88rem !important;
        }
        
        #top-notification-bar a {
            padding: 7px 18px !important;
            font-size: 0.85rem !important;
            min-width: 120px !important;
        }
    }
    
    @media (max-width: 768px) {
        #top-notification-bar {
            padding: 12px 0 !important;
        }
        
        #top-notification-bar span {
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 6px !important;
        }
        
        #top-notification-bar span span:last-child {
            font-size: 0.85rem !important;
        }
        
        #top-notification-bar a {
            padding: 7px 16px !important;
            font-size: 0.82rem !important;
            min-width: 110px !important;
        }
    }
    
    @media (max-width: 576px) {
        #top-notification-bar a {
            padding: 6px 14px !important;
            font-size: 0.78rem !important;
            min-width: 100px !important;
        }
        
        #top-notification-bar span span:last-child {
            font-size: 0.82rem !important;
            line-height: 1.4;
        }
    }
</style>

<script>
// Notification Bar JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const notificationBar = document.getElementById('top-notification-bar');
    const closeNotificationBtn = document.getElementById('close-notification');
    
    // Check if user has closed before
    const hasClosed = localStorage.getItem('notificationBarClosed');
    const hasEnquired = localStorage.getItem('hasEnquired');
    
    // Don't show if user already enquired or closed
    if (!hasClosed && !hasEnquired && notificationBar) {
        // Show with delay for better UX
        setTimeout(() => {
            notificationBar.style.display = 'block';
            notificationBar.style.animation = 'slideDownNotification 0.6s ease-out';
            
            // Auto-hide after 30 seconds
            setTimeout(() => {
                hideNotificationBar();
            }, 30000);
            
            // Add pulse animation to CTA button every 10 seconds
            setInterval(() => {
                const ctaBtn = notificationBar.querySelector('a[href*="contact"]');
                if (ctaBtn) {
                    ctaBtn.style.animation = 'pulseNotification 1s ease';
                    setTimeout(() => {
                        ctaBtn.style.animation = '';
                    }, 1000);
                }
            }, 10000);
            
        }, 1500); // 1.5 second delay
    }
    
    // Hide notification function
    function hideNotificationBar() {
        if (notificationBar && notificationBar.style.display === 'block') {
            notificationBar.style.animation = 'slideUpNotification 0.5s ease-out';
            setTimeout(() => {
                notificationBar.style.display = 'none';
                notificationBar.style.animation = '';
            }, 500);
            localStorage.setItem('notificationBarClosed', 'true');
        }
    }
    
    // Close button event
    if (closeNotificationBtn) {
        closeNotificationBtn.addEventListener('click', function(e) {
            e.preventDefault();
            hideNotificationBar();
        });
    }
    
    // Track CTA clicks (Enquire Now)
    const ctaButton = notificationBar ? notificationBar.querySelector('a[href*="contact"]') : null;
    if (ctaButton) {
        ctaButton.addEventListener('click', function() {
            // Mark as enquired so bar doesn't show again
            localStorage.setItem('hasEnquired', 'true');
            
            // Optional: Send analytics event
            if (typeof gtag !== 'undefined') {
                gtag('event', 'notification_bar_click', {
                    'event_category': 'CTA',
                    'event_label': 'Enquire Now'
                });
            }
            
            // Hide bar after click
            setTimeout(() => {
                hideNotificationBar();
            }, 300);
        });
    }
    
    // Hide on scroll down (if user scrolls past 300px)
    let lastScrollTop = 0;
    window.addEventListener('scroll', function() {
        if (!notificationBar || notificationBar.style.display !== 'block') return;
        
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Hide if scrolling down past 300px
        if (scrollTop > 300 && scrollTop > lastScrollTop) {
            hideNotificationBar();
        }
        
        lastScrollTop = scrollTop;
    });
    
    // Optional: Show again after 24 hours
    function shouldShowAgain() {
        const lastClosed = localStorage.getItem('notificationBarClosedTime');
        if (lastClosed) {
            const now = Date.now();
            const twentyFourHours = 24 * 60 * 60 * 1000;
            return (now - parseInt(lastClosed)) > twentyFourHours;
        }
        return true;
    }
    
    // Store time when closed
    function storeCloseTime() {
        localStorage.setItem('notificationBarClosedTime', Date.now().toString());
    }
    
    // Update close function to store time
    const originalHide = hideNotificationBar;
    hideNotificationBar = function() {
        originalHide();
        storeCloseTime();
    };
    
    // Check if should show based on time
    if (!shouldShowAgain()) {
        if (notificationBar) {
            notificationBar.style.display = 'none';
        }
    }
});
</script>