@extends('frontend.layouts.main')
@section('title', 'Contact Us | Polyboost')

@push('styles')
<style>
/* ============================================================================
   CALDERA CONTACT PAGE — Premium Gaming Theme Style
   ============================================================================ */

.polygamez-contact-page {
  padding: 0;
  background-color: var(--color-basalt-canvas);
  color: var(--color-abyssal-ink);
  font-family: var(--font-dm-sans);
}

/* About Title Band / Hero */
.about-hero-section {
  position: relative;
  margin: var(--spacing-40);
  margin-top: 150px; /* offset for navbar floating transformation */
  border-radius: var(--radius-3xl-3);
  overflow: hidden;
  background: var(--color-ash-white);
  border: 3px solid var(--color-abyssal-ink);
  box-shadow: 0 40px 100px rgba(7, 6, 7, 0.08);
}

.about-hero-wrapper {
  padding: var(--spacing-80) var(--spacing-40);
  position: relative;
  z-index: 2;
  text-align: center;
}

.about-hero-title {
  font-size: clamp(36px, 5vw, 64px);
  font-weight: 900;
  text-transform: uppercase;
  color: var(--color-abyssal-ink);
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  line-height: 1.1;
  margin-bottom: var(--spacing-16);
}

/* Breadcrumb styling */
.about-breadcrumb-capsule {
  display: inline-flex;
  align-items: center;
  gap: var(--spacing-12);
  background: var(--color-pure-white);
  border: 2px solid var(--color-abyssal-ink);
  padding: var(--spacing-8) var(--spacing-20);
  border-radius: var(--radius-full);
  font-size: 13px;
  font-weight: 500;
}

.about-breadcrumb-capsule a {
  color: var(--color-abyssal-ink);
  text-decoration: none;
  transition: var(--transition);
}

.about-breadcrumb-capsule a:hover {
  color: var(--color-digital-orange);
}

.about-breadcrumb-separator {
  color: rgba(7, 6, 7, 0.4);
  font-size: 10px;
}

.about-breadcrumb-current {
  color: var(--color-digital-orange);
  font-weight: 600;
}

/* Contact console layout */
.contact-section-box {
  background: var(--color-pure-white);
  margin: var(--spacing-40);
  margin-top: var(--spacing-56);
  border-radius: var(--radius-3xl-3);
  overflow: hidden;
  box-shadow: 0 40px 100px rgba(7, 6, 7, 0.08);
  border: 3px solid var(--color-abyssal-ink);
}

.contact-console {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  min-height: 600px;
}

/* Left Panel: Company details & support details */
.contact-info-panel {
  background: var(--color-ash-white);
  padding: var(--spacing-48);
  display: flex;
  flex-direction: column;
  border-right: 3px solid var(--color-abyssal-ink);
}

.contact-info-panel h2 {
  font-size: clamp(24px, 3vw, 36px);
  text-transform: uppercase;
  color: var(--color-abyssal-ink);
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  margin-bottom: var(--spacing-8);
  line-height: 1.1;
}

.contact-info-subtitle {
  font-size: 15px;
  color: var(--color-digital-orange);
  font-weight: 600;
  margin-bottom: var(--spacing-40);
}

/* Company items stack */
.contact-details-list {
  display: flex;
  flex-direction: column;
  gap: var(--spacing-32);
  margin-bottom: var(--spacing-40);
}

.contact-detail-item {
  display: flex;
  align-items: flex-start;
  gap: var(--spacing-16);
}

.contact-detail-icon {
  width: 50px;
  height: 50px;
  background: var(--color-digital-orange);
  color: var(--color-pure-white);
  border-radius: var(--radius-2xl);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  flex-shrink: 0;
  border: 2px solid var(--color-abyssal-ink);
}

.contact-detail-text {
  display: flex;
  flex-direction: column;
}

.contact-detail-text label {
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  font-size: 14px;
  color: rgba(7, 6, 7, 0.6);
  text-transform: uppercase;
  letter-spacing: 0.5px;
  margin-bottom: var(--spacing-4);
}

.contact-detail-text strong {
  font-size: 16px;
  color: var(--color-abyssal-ink);
  word-break: break-word;
}

.contact-detail-text a {
  font-size: 16px;
  color: var(--color-digital-orange);
  font-weight: 600;
  text-decoration: none;
}

.contact-detail-text a:hover {
  color: var(--color-abyssal-ink);
}

/* Extra support badge at bottom */
.contact-support-badge-caldera {
  margin-top: auto;
  background: var(--color-pure-white);
  border: 2px solid var(--color-abyssal-ink);
  border-radius: var(--radius-2xl);
  padding: var(--spacing-20);
  display: flex;
  align-items: center;
  gap: var(--spacing-16);
}

.contact-support-badge-caldera i {
  font-size: 28px;
  color: var(--color-digital-orange);
}

.contact-support-badge-caldera div {
  display: flex;
  flex-direction: column;
}

.contact-support-badge-caldera span {
  font-size: 12px;
  color: rgba(7, 6, 7, 0.6);
}

.contact-support-badge-caldera strong {
  font-size: 14px;
  font-weight: 700;
  color: var(--color-abyssal-ink);
}

/* Right Panel: Send message form */
.contact-form-panel {
  padding: var(--spacing-48);
  display: flex;
  flex-direction: column;
  background: var(--color-pure-white);
}

.contact-form-panel h2 {
  font-size: clamp(24px, 3vw, 36px);
  text-transform: uppercase;
  color: var(--color-abyssal-ink);
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  margin-bottom: var(--spacing-12);
  line-height: 1.1;
}

.contact-form-panel p {
  font-size: 15px;
  color: rgba(7, 6, 7, 0.7);
  margin-bottom: var(--spacing-32);
}

/* Field styling */
.contact-field-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--spacing-20);
  margin-bottom: var(--spacing-20);
}

.contact-field {
  display: flex;
  flex-direction: column;
  gap: var(--spacing-8);
  margin-bottom: var(--spacing-20);
  position: relative;
}

.contact-field label {
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  color: var(--color-abyssal-ink);
}

/* Input design */
.contact-input-wrap {
  position: relative;
  width: 100%;
}

.contact-input-wrap input {
  padding-left: 48px; /* space for icon */
  border-radius: var(--radius-inputs);
  border: 2px solid var(--color-abyssal-ink);
  font-size: 15px;
  height: 48px;
  width: 100%;
}

.contact-input-wrap textarea {
  padding-left: 48px;
  border-radius: var(--radius-2xl);
  border: 2px solid var(--color-abyssal-ink);
  font-size: 15px;
  min-height: 120px;
  resize: vertical;
  width: 100%;
}

.contact-input-wrap i {
  position: absolute;
  left: 20px;
  top: 15px;
  color: rgba(7, 6, 7, 0.4);
  font-size: 16px;
  pointer-events: none;
}

.contact-input-wrap textarea + i {
  top: 18px;
}

/* Captcha row styles */
.contact-captcha-row {
  display: grid;
  grid-template-columns: 1fr auto;
  gap: var(--spacing-16);
  align-items: center;
  margin-bottom: var(--spacing-24);
}

.contact-captcha-image {
  border: 2px solid var(--color-abyssal-ink);
  border-radius: var(--radius-inputs);
  overflow: hidden;
  height: 48px;
  display: flex;
  align-items: center;
}

.contact-captcha-image img {
  height: 100%;
  width: auto;
  object-fit: cover;
}

/* Submit button */
.contact-submit-btn-caldera {
  width: 100%;
  min-height: 50px;
  background: var(--color-digital-orange);
  color: var(--color-pure-white);
  border: 2px solid var(--color-abyssal-ink);
  border-radius: var(--radius-buttons);
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  font-size: 16px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  cursor: pointer;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: var(--spacing-8);
  margin-top: var(--spacing-8);
  box-shadow: 0 10px 30px rgba(252, 80, 0, 0.25);
}

.contact-submit-btn-caldera:hover {
  background: var(--color-abyssal-ink);
  color: var(--color-pure-white);
  transform: translateY(-2px);
  box-shadow: 0 10px 30px rgba(7, 6, 7, 0.2);
}

.contact-submit-btn-caldera:active {
  transform: scale(0.98);
}

/* Validation styles matching standard error message output */
#contact_form .text-danger,
#contact_form label.error {
  display: block;
  font-size: 12px;
  font-weight: 600;
  color: #b45309 !important; /* warning amber */
  margin-top: 6px;
}

/* Responsive Media Queries */
@media (max-width: 991px) {
  .contact-section-box {
    margin: var(--spacing-24);
    margin-top: var(--spacing-40);
  }

  .contact-console {
    grid-template-columns: 1fr;
  }

  .contact-info-panel {
    border-right: none;
    border-bottom: 3px solid var(--color-abyssal-ink);
    padding: var(--spacing-32);
  }

  .contact-form-panel {
    padding: var(--spacing-32);
  }
}

@media (max-width: 768px) {
  .contact-section-box {
    margin: var(--spacing-16);
    margin-top: var(--spacing-32);
    border-radius: var(--radius-3xl-2);
  }

  .contact-info-panel,
  .contact-form-panel {
    padding: var(--spacing-24) var(--spacing-16);
  }

  .contact-field-grid {
    grid-template-columns: 1fr;
    gap: 0;
  }

  .contact-captcha-row {
    grid-template-columns: 1fr;
    gap: var(--spacing-8);
  }

  .contact-captcha-image {
    width: 100%;
    justify-content: center;
  }
}
</style>
@endpush

@section('main-content')
<section class="polygamez-contact-page">
    
    <!-- Hero / Title Band -->
    <div class="about-hero-section">
      <div class="about-hero-wrapper">
        <h1 class="about-hero-title">CONTACT US</h1>
        
        <div class="about-breadcrumb-capsule">
          <a href="{{ route('home') }}">
            <i class="fas fa-home me-2"></i>Home
          </a>
          <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
          <span class="about-breadcrumb-current">Contact Us</span>
        </div>
      </div>
    </div>

    <!-- Contact Console Box -->
    <div class="contact-section-box">
      <div class="contact-console">
        
        <!-- Left Panel: Support & Company Info -->
        <aside class="contact-info-panel">
          <h2>GET IN TOUCH</h2>
          <span class="contact-info-subtitle">Connecting you to elite support</span>
          
          <div class="contact-details-list">
            
            <!-- Detail 1: Company Name -->
            <div class="contact-detail-item">
              <div class="contact-detail-icon">
                <i class="fas fa-building"></i>
              </div>
              <div class="contact-detail-text">
                <label>Company</label>
                <strong>{{ $misc['Company Name'] }}</strong>
              </div>
            </div>

            <!-- Detail 2: Email -->
            <div class="contact-detail-item">
              <div class="contact-detail-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-detail-text">
                <label>Email Support</label>
                <a href="mailto:{{ $misc['Company Email'] }}">{{ $misc['Company Email'] }}</a>
              </div>
            </div>

            <!-- Detail 3: Address -->
            <div class="contact-detail-item">
              <div class="contact-detail-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="contact-detail-text">
                <label>Office Address</label>
                <strong>{{ $misc['Company Address'] }}</strong>
              </div>
            </div>

          </div>

          <!-- Bottom Support Badge -->
          <div class="contact-support-badge-caldera">
            <i class="fas fa-headset"></i>
            <div>
              <span>Support Response Time</span>
              <strong>Under 24 Hours Guaranteed</strong>
            </div>
          </div>
        </aside>

        <!-- Right Panel: Message Form -->
        <div class="contact-form-panel">
          <h2>SEND A MESSAGE</h2>
          <p>Have questions about your rank boost or points additions? Fill out the details below and our team will support you immediately.</p>
          
          <form id="contact_form" method="POST" action="{{ route('contact.send') }}">
            @csrf

            <div class="contact-field-grid">
              <div class="contact-field">
                <label for="name">Your Name</label>
                <div class="contact-input-wrap">
                  <input type="text" name="name" id="name" placeholder="Enter name" class="form-control required">
                  <i class="fas fa-user"></i>
                </div>
              </div>

              <div class="contact-field">
                <label for="email">Email Address</label>
                <div class="contact-input-wrap">
                  <input type="email" name="email" id="email" placeholder="Enter email" class="form-control required">
                  <i class="fas fa-envelope"></i>
                </div>
              </div>
            </div>

            <div class="contact-field-grid">
              <div class="contact-field">
                <label for="phone">Phone Number</label>
                <div class="contact-input-wrap">
                  <input type="number" name="phone" id="phone" placeholder="Enter phone" class="form-control required">
                  <i class="fas fa-phone"></i>
                </div>
              </div>

              <div class="contact-field">
                <label for="subject">Message Subject</label>
                <div class="contact-input-wrap">
                  <input type="text" name="subject" id="subject" placeholder="Enter subject" class="form-control required">
                  <i class="fas fa-gamepad"></i>
                </div>
              </div>
            </div>

            <div class="contact-field">
              <label for="message">Your Message</label>
              <div class="contact-input-wrap">
                <textarea name="message" id="message" placeholder="Enter message details..." class="form-control required"></textarea>
                <i class="fas fa-comment-dots"></i>
              </div>
            </div>

            @if(env('ENABLE_CAPTCHA', true))
              <div class="contact-captcha-row">
                <div class="contact-input-wrap">
                  <input type="text" id="captcha" name="captcha" autocomplete="off" class="form-control required" placeholder="Fill captcha verification">
                  <i class="fas fa-shield-alt"></i>
                </div>
                <div class="contact-captcha-image">
                  @captcha
                </div>
              </div>
              @error('captcha')
                <span class="text-danger contact-captcha-error">{{ __('common.captcha_error') }}</span>
              @enderror
            @endif

            <button type="submit" class="contact-submit-btn-caldera">
              <span>Send Message</span>
              <i class="fas fa-paper-plane"></i>
            </button>
          </form>
        </div>

      </div>
    </div>

</section>
@endsection

@push('scripts')
<script src="{{ url('assets/js/vendor/jquery-validator.js') }}"></script>
<script>
$(document).ready(function () {
    $("#contact_form").validate({
        rules: {
            name: "required",
            email: { required: true, email: true },
            phone: { required: true, minlength: 10 },
            subject: "required",
            message: "required",
            @if(env('ENABLE_CAPTCHA', true))
            captcha: "required",
            @endif
        },
        messages: {
            name: "{{ __('common.name_required') }}",
            email: "{{ __('common.email_required') }}",
            phone: {
                required: "{{ __('common.phone_required') }}",
                minlength: "{{ __('common.phone_min') }}"
            },
            subject: "{{ __('common.subject_required') }}",
            message: "{{ __('common.message_required') }}",
            captcha: "{{ __('common.fill_it') }}"
        },
        errorPlacement: function (error, element) {
            error.addClass('text-danger');
            error.css('display', 'block');
            if (element.attr('id') === 'captcha') {
                error.insertAfter(element.closest('.contact-captcha-row'));
            } else {
                var wrap = element.closest('.contact-input-wrap');
                error.insertAfter(wrap.length ? wrap : element);
            }
        }
    });
});
</script>
@endpush
