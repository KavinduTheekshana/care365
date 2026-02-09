<!-- Exit-Intent Popup Modal -->
<div id="exit-popup" style="display:none;position:fixed;z-index:99999;left:0;top:0;width:100%;height:100%;background:rgba(0,0,0,0.5);align-items:center;justify-content:center;backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);">
  <div style="background:rgba(255,255,255,0.95);padding:30px 28px 24px;border-radius:24px;width:90%;max-width:420px;max-height:90vh;overflow-y:auto;box-shadow:0 20px 60px rgba(0,0,0,0.3);position:relative;text-align:center;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;color:#1d1d1f;">
    
    <!-- Close Button -->
    <button onclick="document.getElementById('exit-popup').style.display='none'" style="position:absolute;top:14px;right:14px;background:rgba(0,0,0,0.05);border:none;font-size:18px;cursor:pointer;color:#86868b;padding:4px;line-height:1;border-radius:50%;width:28px;height:28px;display:flex;align-items:center;justify-content:center;transition:all 0.2s;" aria-label="Close">&times;</button>
    
    <!-- Headline -->
    <h2 style="color:#1d1d1f;font-size:22px;font-weight:600;margin:0 0 6px 0;line-height:1.2;letter-spacing:-0.01em;">Not Sure Which Care Option Is Right?</h2>
    <p style="font-size:15px;color:#86868b;margin:0 0 22px 0;font-weight:400;line-height:1.4;">Get our free Elder Care Planning Guide</p>

    <!-- Lead Form -->
    <form id="guide-form" method="POST" action="{{ route('exit-popup.submit') }}">
      @csrf
      
      <input type="text" name="name" class="input-animate" placeholder="Name" required aria-label="Name" style="width:100%;padding:12px 14px;border:none;border-radius:12px;font-size:16px;font-family:inherit;color:#1d1d1f;background:#f5f5f7;box-sizing:border-box;margin-bottom:10px;">
      
      <input type="email" name="email" class="input-animate" placeholder="Email" required aria-label="Email" style="width:100%;padding:12px 14px;border:none;border-radius:12px;font-size:16px;font-family:inherit;color:#1d1d1f;background:#f5f5f7;box-sizing:border-box;margin-bottom:10px;">
      
      <input type="tel" name="phone" class="input-animate" placeholder="Phone" required aria-label="Phone" style="width:100%;padding:12px 14px;border:none;border-radius:12px;font-size:16px;font-family:inherit;color:#1d1d1f;background:#f5f5f7;box-sizing:border-box;margin-bottom:10px;">
      
      <input type="number" name="age" class="input-animate" placeholder="Senior's Age" min="60" max="120" required aria-label="Age" style="width:100%;padding:12px 14px;border:none;border-radius:12px;font-size:16px;font-family:inherit;color:#1d1d1f;background:#f5f5f7;box-sizing:border-box;margin-bottom:10px;">
      
      <select name="care_type" class="input-animate" required aria-label="Care Type" style="width:100%;padding:12px 14px;border:none;border-radius:12px;font-size:16px;font-family:inherit;color:#1d1d1f;background:#f5f5f7;box-sizing:border-box;margin-bottom:10px;cursor:pointer;appearance:none;background-image:url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%2714%27 height=%2714%27 viewBox=%270 0 12 12%27%3E%3Cpath fill=%27%2386868b%27 d=%27M6 9L1 4h10z%27/%3E%3C/svg%3E');background-repeat:no-repeat;background-position:right 14px center;padding-right:40px;">
        <option value="">Care Type</option>
        <option value="companion">Companion Care</option>
        <option value="shared">Shared Comfort</option>
        <option value="private">Private Heaven</option>
        <option value="dementia">Dementia/Specialized</option>
        <option value="other">Not Sure</option>
      </select>
      
      <select name="timeline" class="input-animate" required aria-label="Timeline" style="width:100%;padding:12px 14px;border:none;border-radius:12px;font-size:16px;font-family:inherit;color:#1d1d1f;background:#f5f5f7;box-sizing:border-box;margin-bottom:16px;cursor:pointer;appearance:none;background-image:url('data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%2714%27 height=%2714%27 viewBox=%270 0 12 12%27%3E%3Cpath fill=%27%2386868b%27 d=%27M6 9L1 4h10z%27/%3E%3C/svg%3E');background-repeat:no-repeat;background-position:right 14px center;padding-right:40px;">
        <option value="">Timeline</option>
        <option value="immediate">Immediately</option>
        <option value="1-3">1–3 months</option>
        <option value="3-6">3–6 months</option>
        <option value="planning">Just planning</option>
      </select>
      
      <button type="submit" 
              style="
              background: #ffffff;
              color: #2B6CB0;
              border: 2px solid #2B6CB0;
              padding: 13px 28px;
              font-size: 17px;
              font-weight: 500;
              border-radius: 12px;
              cursor: pointer;
              width: 100%;
              transition: all 0.2s;
              letter-spacing: -0.01em;
              "
              onmouseover="this.style.background='#EFF6FF'; this.style.color='#1e5a8e'; this.style.borderColor='#1e5a8e';"
              onmouseout="this.style.background='#ffffff'; this.style.color='#2B6CB0'; this.style.borderColor='#2B6CB0';"
              onmousedown="this.style.transform='scale(0.98)'"
              onmouseup="this.style.transform='scale(1)'">
      Get the Free Guide
      </button>
    </form>

    <p style="font-size:11px;color:#86868b;margin-top:16px;line-height:1.3;font-weight:400;">Your information is secure and private</p>
  </div>
</div>

<!-- Notification Container -->
<div id="notification-container" style="position:fixed;top:20px;right:20px;z-index:100000;pointer-events:none;"></div>

<script>
// Custom notification function
function showNotification(message, type = 'error') {
  const container = document.getElementById('notification-container');
  const notification = document.createElement('div');
  
  const bgColor = '#ffffff';
  const borderColor = type === 'success' ? '#2B6CB0' : '#ef4444';
  const iconColor = type === 'success' ? '#2B6CB0' : '#ef4444';
  const icon = type === 'success' ? '✓' : '✕';
  
  notification.innerHTML = `
    <div style="
      background: ${bgColor};
      border: 2px solid ${borderColor};
      padding: 14px 18px;
      border-radius: 14px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.15);
      display: flex;
      align-items: center;
      gap: 12px;
      min-width: 280px;
      max-width: 380px;
      pointer-events: auto;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      animation: slideIn 0.3s ease-out;
      margin-bottom: 12px;
    ">
      <div style="
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: ${type === 'success' ? '#EFF6FF' : '#fef2f2'};
        color: ${iconColor};
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 600;
        flex-shrink: 0;
      ">${icon}</div>
      <div style="
        color: #1d1d1f;
        font-size: 14px;
        font-weight: 500;
        flex: 1;
        line-height: 1.4;
      ">${message}</div>
    </div>
  `;
  
  container.appendChild(notification);
  
  // Auto remove after 4 seconds
  setTimeout(() => {
    notification.style.animation = 'slideOut 0.3s ease-in';
    setTimeout(() => notification.remove(), 300);
  }, 4000);
}

// Add animations
if (!document.getElementById('notification-styles')) {
  const style = document.createElement('style');
  style.id = 'notification-styles';
  style.textContent = `
    @keyframes slideIn {
      from {
        transform: translateX(400px);
        opacity: 0;
      }
      to {
        transform: translateX(0);
        opacity: 1;
      }
    }
    @keyframes slideOut {
      from {
        transform: translateX(0);
        opacity: 1;
      }
      to {
        transform: translateX(400px);
        opacity: 0;
      }
    }
  `;
  document.head.appendChild(style);
}

document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById('exit-popup');
  if (!modal) return;

  const form = document.getElementById('guide-form');
  let popupShown = false;
  const sessionKey = 'exitPopupShown';

  if (sessionStorage.getItem(sessionKey)) return;

  // Exit intent
  document.addEventListener('mouseout', function(e) {
    if (e.clientY < 10 && !popupShown) {
      setTimeout(() => showPopup(), 100);
    }
  });

  // Mobile scroll up
  let lastScroll = 0, scrollUpCount = 0;
  window.addEventListener('scroll', function() {
    if (popupShown) return;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    if (scroll < lastScroll && scroll < 200) {
      scrollUpCount++;
      if (scrollUpCount > 3) showPopup();
    } else {
      scrollUpCount = 0;
    }
    lastScroll = scroll;
  });

  function showPopup() {
    if (popupShown) return;
    modal.style.display = 'flex';
    popupShown = true;
    sessionStorage.setItem(sessionKey, 'true');
    setTimeout(() => {
      const input = modal.querySelector('input[name="name"]');
      if (input) input.focus();
    }, 300);
  }

  modal.addEventListener('click', function(e) {
    if (e.target === modal) modal.style.display = 'none';
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modal.style.display === 'flex') {
      modal.style.display = 'none';
    }
  });

  if (form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;
        submitBtn.style.opacity = '0.6';
        
        const formData = new FormData(form);
        
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            },
            credentials: 'same-origin'
        })
        .then(response => {
            return response.json().then(data => ({
                status: response.status,
                ok: response.ok,
                data: data
            }));
        })
        .then(result => {
            console.log('Response:', result);
            
            if (result.ok && result.data.success === true) {
                // Show success notification
                showNotification('Guide sent! Check your inbox', 'success');
                
                // Reset form
                form.reset();
                
                // Reset button
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
                
                // Close popup after 2 seconds
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 2000);
                
            } else {
                // Show error notification
                showNotification(result.data.message || 'Something went wrong. Please try again.', 'error');
                
                // Reset button
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            
            // Show error notification
            showNotification('Unable to submit. Please try again.', 'error');
            
            // Reset button
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
            submitBtn.style.opacity = '1';
        });
    });
  }
});
</script>