/**
 * Care365 Preloader Script
 * Handles the page loading animation
 */

(function() {
    'use strict';

    // Preloader configuration
    const config = {
        minDisplayTime: 800,        // Minimum time to show preloader (ms)
        fadeOutDuration: 500,       // Fade out animation duration (ms)
        useBackground: null,        // Options: 'bg-light', 'bg-dark', 'bg-primary', 'bg-success', or null for default white
    };

    // Track when the page started loading
    const loadStartTime = Date.now();

    /**
     * Hide the preloader with fade out animation
     */
    function hidePreloader() {
        const preloader = document.getElementById('preloader');

        if (!preloader) return;

        // Calculate how long the page has been loading
        const elapsedTime = Date.now() - loadStartTime;

        // Calculate remaining time to show preloader (if any)
        const remainingTime = Math.max(0, config.minDisplayTime - elapsedTime);

        // Wait for minimum display time, then fade out
        setTimeout(function() {
            preloader.classList.add('fade-out');

            // Remove preloader from DOM after fade out completes
            setTimeout(function() {
                if (preloader.parentNode) {
                    preloader.parentNode.removeChild(preloader);
                }

                // Enable scrolling
                document.body.style.overflow = '';

                // Trigger custom event for other scripts
                const event = new CustomEvent('preloaderHidden');
                document.dispatchEvent(event);
            }, config.fadeOutDuration);
        }, remainingTime);
    }

    /**
     * Initialize preloader
     */
    function initPreloader() {
        const preloader = document.getElementById('preloader');

        if (!preloader) return;

        // Disable scrolling while preloader is visible
        document.body.style.overflow = 'hidden';

        // Apply background color if specified
        if (config.useBackground) {
            preloader.classList.add(config.useBackground);
        }

        // Hide preloader when page is fully loaded
        if (document.readyState === 'complete') {
            hidePreloader();
        } else {
            window.addEventListener('load', hidePreloader);
        }
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPreloader);
    } else {
        initPreloader();
    }

    // Fallback: Hide preloader after maximum wait time (in case page load event doesn't fire)
    setTimeout(function() {
        hidePreloader();
    }, 10000); // 10 seconds maximum

})();

/**
 * Optional: Add custom loading messages
 * Uncomment and customize as needed
 */
/*
(function() {
    const messages = [
        'Loading Care365...',
        'Preparing your experience...',
        'Almost ready...',
        'Just a moment...'
    ];

    let messageIndex = 0;
    const textElement = document.querySelector('.preloader-text');

    if (textElement) {
        setInterval(function() {
            messageIndex = (messageIndex + 1) % messages.length;
            textElement.textContent = messages[messageIndex];
        }, 1500);
    }
})();
*/

/**
 * Optional: Add loading percentage
 * Uncomment to show loading percentage
 */
/*
(function() {
    let progress = 0;
    const textElement = document.querySelector('.preloader-text');

    if (textElement) {
        const interval = setInterval(function() {
            progress += Math.random() * 30;
            if (progress >= 100) {
                progress = 100;
                clearInterval(interval);
            }
            textElement.textContent = `Loading... ${Math.floor(progress)}%`;
        }, 200);

        // Ensure it reaches 100% when page loads
        window.addEventListener('load', function() {
            clearInterval(interval);
            textElement.textContent = 'Loading... 100%';
        });
    }
})();
*/
