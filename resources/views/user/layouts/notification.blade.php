@if(session('success'))
    <div class="ws-toast ws-toast-success" id="wsToastSuccess">
        <div class="ws-toast-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
        </div>
        <div class="ws-toast-content">
            <span class="ws-toast-message">{{ session('success') }}</span>
        </div>
        <button class="ws-toast-close" onclick="closeWsToast('wsToastSuccess')">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>
@endif

@if(session('error'))
    <div class="ws-toast ws-toast-error" id="wsToastError">
        <div class="ws-toast-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <line x1="15" y1="9" x2="9" y2="15"/>
                <line x1="9" y1="9" x2="15" y2="15"/>
            </svg>
        </div>
        <div class="ws-toast-content">
            <span class="ws-toast-message">{{ session('error') }}</span>
        </div>
        <button class="ws-toast-close" onclick="closeWsToast('wsToastError')">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>
@endif

@if(session('loginerror'))
    <div class="ws-toast ws-toast-error" id="wsToastLoginError">
        <div class="ws-toast-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <line x1="15" y1="9" x2="9" y2="15"/>
                <line x1="9" y1="9" x2="15" y2="15"/>
            </svg>
        </div>
        <div class="ws-toast-content">
            <span class="ws-toast-message">{{ session('loginerror') }}</span>
        </div>
        <button class="ws-toast-close" onclick="closeWsToast('wsToastLoginError')">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>
@endif

@if(session('warning'))
    <div class="ws-toast ws-toast-warning" id="wsToastWarning">
        <div class="ws-toast-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                <line x1="12" y1="9" x2="12" y2="13"/>
                <line x1="12" y1="17" x2="12.01" y2="17"/>
            </svg>
        </div>
        <div class="ws-toast-content">
            <span class="ws-toast-message">{{ session('warning') }}</span>
        </div>
        <button class="ws-toast-close" onclick="closeWsToast('wsToastWarning')">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>
@endif

@if(session('info'))
    <div class="ws-toast ws-toast-info" id="wsToastInfo">
        <div class="ws-toast-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <line x1="12" y1="16" x2="12" y2="12"/>
                <line x1="12" y1="8" x2="12.01" y2="8"/>
            </svg>
        </div>
        <div class="ws-toast-content">
            <span class="ws-toast-message">{{ session('info') }}</span>
        </div>
        <button class="ws-toast-close" onclick="closeWsToast('wsToastInfo')">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>
@endif

@if(isset($errors) && $errors->any())
    @foreach($errors->all() as $error)
    <div class="ws-toast ws-toast-error" id="wsToastErr{{ $loop->index }}">
        <div class="ws-toast-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <line x1="15" y1="9" x2="9" y2="15"/>
                <line x1="9" y1="9" x2="15" y2="15"/>
            </svg>
        </div>
        <div class="ws-toast-content">
            <span class="ws-toast-message">{{ $error }}</span>
        </div>
        <button class="ws-toast-close" onclick="closeWsToast('wsToastErr{{ $loop->index }}')">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>
    @endforeach
@endif

<style>
/* Caldera Theme Toast Notifications — Bottom-Right corner, slides in from right. */
.ws-toast-wrapper {
    position: fixed;
    top: 100px;
    right: 24px;
    z-index: 100000;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 12px;
    width: auto;
    max-width: 400px;
    pointer-events: none;
}
.ws-toast-wrapper > * { pointer-events: auto; }

.ws-toast {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    min-width: 320px;
    max-width: 90vw;
    padding: 14px 18px;
    background: var(--color-ash-white);
    color: var(--color-abyssal-ink);
    border: 2px solid var(--color-abyssal-ink) !important;
    border-radius: 4px !important;
    box-shadow: 4px 4px 0px var(--color-abyssal-ink) !important;
    position: relative;
    overflow: hidden;
    font-family: var(--font-dm-sans) !important;
    animation: ws-toast-slide-in 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.2) forwards;
}
.ws-toast.fade-out { animation: ws-toast-slide-out 0.3s ease forwards; }

/* Theme Left Accent Borders */
.ws-toast-success { border-left: 6px solid #22c55e !important; }
.ws-toast-error { border-left: 6px solid #ef4444 !important; }
.ws-toast-warning { border-left: 6px solid var(--color-digital-orange) !important; }
.ws-toast-info { border-left: 6px solid var(--color-cyber-violet) !important; }

/* Square Icon with solid border */
.ws-toast-icon {
    width: 36px;
    height: 36px;
    min-width: 36px;
    border-radius: 2px;
    border: 2px solid var(--color-abyssal-ink);
    display: flex;
    align-items: center;
    justify-content: center;
}
.ws-toast-success .ws-toast-icon { background: #22c55e; }
.ws-toast-error   .ws-toast-icon { background: #ef4444; }
.ws-toast-warning .ws-toast-icon { background: var(--color-digital-orange); }
.ws-toast-info    .ws-toast-icon { background: var(--color-cyber-violet); }
.ws-toast-icon svg { width: 18px; height: 18px; color: #ffffff; }

.ws-toast-content { flex: 1; }
.ws-toast-message {
    font-size: 14px;
    font-weight: 700;
    color: var(--color-abyssal-ink);
    line-height: 1.4;
}

.ws-toast-close {
    background: transparent;
    border: none;
    color: var(--color-abyssal-ink);
    opacity: 0.6;
    cursor: pointer;
    padding: 6px;
    border-radius: 4px;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}
.ws-toast-close:hover { background: rgba(7, 6, 7, 0.08); opacity: 1; }
.ws-toast-close svg { width: 16px; height: 16px; }

/* slide in from right, slide out to right */
@keyframes ws-toast-slide-in {
    0%   { transform: translateX(120%); opacity: 0; }
    100% { transform: translateX(0); opacity: 1; }
}
@keyframes ws-toast-slide-out {
    0%   { transform: translateX(0); opacity: 1; }
    100% { transform: translateX(120%); opacity: 0; }
}

/* progress bar */
.ws-toast-progress {
    display: block !important;
    position: absolute;
    bottom: 0;
    left: 0;
    height: 3px;
    background: var(--color-abyssal-ink);
    opacity: 0.15;
    animation: ws-toast-shrink 3s linear forwards;
}
@keyframes ws-toast-shrink {
    from { width: 100%; }
    to { width: 0%; }
}

@media (max-width: 576px) {
    .ws-toast-wrapper {
        top: 80px;
        right: 12px;
        left: 12px;
        max-width: calc(100vw - 24px);
        align-items: center;
    }
    .ws-toast {
        min-width: 0;
        width: 100%;
    }
}
</style>

<script>
function closeWsToast(id) {
    var toast = document.getElementById(id);
    if (toast) {
        toast.classList.add('fade-out');
        setTimeout(function() {
            if (toast.parentNode) {
                toast.parentNode.removeChild(toast);
            }
        }, 400);
    }
}

// Auto close after 6 seconds
document.addEventListener('DOMContentLoaded', function() {
    var toasts = document.querySelectorAll('.ws-toast');
    toasts.forEach(function(toast) {
        // Add progress bar
        var progress = document.createElement('div');
        progress.className = 'ws-toast-progress';
        toast.appendChild(progress);
        
        // Auto remove after 3 seconds
        setTimeout(function() {
            closeWsToast(toast.id);
        }, 3000);
    });
});
</script>
