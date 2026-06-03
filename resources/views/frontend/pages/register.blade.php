@extends('frontend.layouts.main')
@section('title', 'Register')

@push('styles')
<style>
/* ============================================================================
   CALDERA REGISTER PAGE — Premium Gaming Theme Style
   ============================================================================ */

.polygamez-auth-page {
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

/* Auth console layout */
.auth-section-box {
  background: var(--color-pure-white);
  margin: var(--spacing-56) auto;
  max-width: 650px;
  border-radius: var(--radius-3xl-3);
  overflow: hidden;
  box-shadow: 0 40px 100px rgba(7, 6, 7, 0.08);
  border: 3px solid var(--color-abyssal-ink);
}

.auth-console {
  display: block;
}

/* Form Panel */
.auth-form-panel {
  padding: var(--spacing-48);
  display: flex;
  flex-direction: column;
  background: var(--color-pure-white);
}

.auth-form-panel h2 {
  font-size: clamp(24px, 3vw, 36px);
  text-transform: uppercase;
  color: var(--color-abyssal-ink);
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  margin-bottom: var(--spacing-12);
  line-height: 1.1;
  text-align: center;
}

.auth-form-panel p {
  font-size: 15px;
  color: rgba(7, 6, 7, 0.7);
  margin-bottom: var(--spacing-32);
  text-align: center;
}

/* Field styling */
.auth-field {
  display: flex;
  flex-direction: column;
  gap: var(--spacing-8);
  margin-bottom: var(--spacing-20);
  position: relative;
}

.auth-field label {
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  color: var(--color-abyssal-ink);
}

/* Dual-field grid row */
.auth-field-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--spacing-20);
}

/* Input design */
.auth-input-wrap {
  position: relative;
  width: 100%;
}

.auth-input-wrap input {
  padding-left: 48px; /* space for icon */
  border-radius: var(--radius-inputs);
  border: 2px solid var(--color-abyssal-ink);
  font-size: 15px;
  height: 48px;
  width: 100%;
}

.auth-input-wrap i {
  position: absolute;
  left: 20px;
  top: 15px;
  color: rgba(7, 6, 7, 0.4);
  font-size: 16px;
  pointer-events: none;
}

/* Captcha row styles */
.auth-captcha-row {
  display: grid;
  grid-template-columns: 1fr auto;
  gap: var(--spacing-16);
  align-items: center;
  margin-bottom: var(--spacing-24);
}

.auth-captcha-image {
  border: 2px solid var(--color-abyssal-ink);
  border-radius: var(--radius-inputs);
  overflow: hidden;
  height: 48px;
  display: flex;
  align-items: center;
}

.auth-captcha-image img {
  height: 100%;
  width: auto;
  object-fit: cover;
}

/* Submit button */
.auth-submit-btn-caldera {
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

.auth-submit-btn-caldera:hover {
  background: var(--color-abyssal-ink);
  color: var(--color-pure-white);
  transform: translateY(-2px);
  box-shadow: 0 10px 30px rgba(7, 6, 7, 0.2);
}

.auth-submit-btn-caldera:active {
  transform: scale(0.98);
}

/* Validation styles matching standard error message output */
.text-danger {
  display: block;
  font-size: 12px;
  font-weight: 600;
  color: #b45309 !important; /* warning amber */
  margin-top: 6px;
}

.auth-switch-link {
  margin-top: var(--spacing-24);
  text-align: center;
  font-size: 14px;
}

.auth-switch-link p {
  color: rgba(7, 6, 7, 0.6);
  margin: 0;
}

.auth-switch-link a {
  color: var(--color-digital-orange);
  font-weight: 600;
  text-decoration: none;
}

.auth-switch-link a:hover {
  color: var(--color-abyssal-ink);
}

/* Responsive Media Queries */
@media (max-width: 991px) {
  .auth-section-box {
    margin: var(--spacing-40) auto;
  }
}

@media (max-width: 768px) {
  .auth-section-box {
    margin: var(--spacing-32) var(--spacing-16);
    border-radius: var(--radius-3xl-2);
  }

  .auth-form-panel {
    padding: var(--spacing-24) var(--spacing-16);
  }

  .auth-field-grid {
    grid-template-columns: 1fr;
    gap: 0;
  }

  .auth-captcha-row {
    grid-template-columns: 1fr;
    gap: var(--spacing-8);
  }

  .auth-captcha-image {
    width: 100%;
    justify-content: center;
  }
}
</style>
@endpush

@section('main-content')
<section class="polygamez-auth-page auth-register-page">
    
    <!-- Hero / Title Band -->
    <div class="about-hero-section">
      <div class="about-hero-wrapper">
        <h1 class="about-hero-title">{{ __('common.register') }}</h1>
        
        <div class="about-breadcrumb-capsule">
          <a href="{{ route('home') }}">
            <i class="fas fa-home me-2"></i>{{ __('common.home') }}
          </a>
          <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
          <span class="about-breadcrumb-current">{{ __('common.register') }}</span>
        </div>
      </div>
    </div>

    <!-- Auth Console Box -->
    <div class="auth-section-box">
      <div class="auth-console">
        
        <!-- Center Panel: Register Form -->
        <div class="auth-form-panel">
          <h2>{{ __('common.register_header') }}</h2>
          <p>{{ __('common.register_subheader') }}</p>
          
          <form name="frmRegister" id="frmRegister" action="{{ route('register.submit') }}" method="post">
            @csrf

            <!-- Name -->
            <div class="auth-field">
              <label for="name">{{ __('common.your_name') }}</label>
              <div class="auth-input-wrap">
                <input type="text" name="name" id="name" placeholder="{{ __('common.ph_name') }}" class="form-control" value="{{ old('name') }}">
                <i class="fas fa-user"></i>
              </div>
              @error('name')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Email -->
            <div class="auth-field">
              <label for="email">{{ __('common.email') }}</label>
              <div class="auth-input-wrap">
                <input type="email" name="email" id="email" placeholder="{{ __('common.ph_email') }}" class="form-control" value="{{ old('email') }}">
                <i class="fas fa-envelope"></i>
              </div>
              @error('email')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Passwords -->
            <div class="auth-field-grid">
              <div class="auth-field">
                <label for="password">{{ __('common.password') }}</label>
                <div class="auth-input-wrap">
                  <input type="password" name="password" id="password" placeholder="{{ __('common.ph_password') }}" class="form-control" >
                  <i class="fas fa-lock"></i>
                </div>
                @error('password')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="auth-field">
                <label for="password_confirmation">{{ __('common.confirm_password') }}</label>
                <div class="auth-input-wrap">
                  <input type="password" name="password_confirmation" id="password_confirmation" placeholder="{{ __('common.ph_password') }}" class="form-control" >
                  <i class="fas fa-shield-alt"></i>
                </div>
                @error('password_confirmation')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <!-- Captcha -->
            @if(env('ENABLE_CAPTCHA', true))
              <div class="auth-captcha-row">
                <div class="auth-input-wrap">
                  <input type="text" id="captcha" name="captcha" autocomplete="off" class="form-control" placeholder="{{ __('common.ph_verification_code') }}" >
                  <i class="fas fa-key"></i>
                </div>
                <div class="auth-captcha-image">
                  @captcha
                </div>
              </div>
              @error('captcha')
                <span class="text-danger auth-captcha-error">{{ __('common.captcha_error') }}</span>
              @enderror
            @endif

            <!-- Submit -->
            <button type="submit" class="auth-submit-btn-caldera">
              <span>{{ __('common.submit_registration') }}</span>
              <i class="fas fa-user-plus"></i>
            </button>
          </form>

          <div class="auth-switch-link">
            <p>{{ __('common.has_account_prompt') }} <a href="{{ route('login.form') }}">{{ __('common.member_login_link') }}</a></p>
          </div>
        </div>

      </div>
    </div>

</section>
@endsection

@push('scripts')
<script src="{{ url('assets/js/vendor/jquery-validator.js') }}"></script>
<script>
$(document).ready(function () {
    $("#frmRegister").validate({
        rules: {
            name: "required",
            email: { required: true, email: true },
            password: { required: true, minlength: 5 },
            password_confirmation: { required: true, minlength: 5, equalTo: "#password" },
            @if(env('ENABLE_CAPTCHA', true))
            captcha: "required",
            @endif
        },
        messages: {
            name: "{{ __('common.name_required') }}",
            email: "{{ __('common.email_required') }}",
            password: {
                required: "{{ __('common.password_required') }}",
                minlength: "{{ __('common.password_min') }}"
            },
            password_confirmation: {
                required: "{{ __('common.password_confirmation_required') }}",
                minlength: "{{ __('common.password_confirmation_min') }}",
                equalTo: "{{ __('common.password_confirmation_equal') }}"
            },
            @if(env('ENABLE_CAPTCHA', true))
            captcha: "{{ __('common.captcha_required') }}"
            @endif
        },
        errorPlacement: function (error, element) {
            error.addClass('text-danger');
            error.css('display', 'block');
            if (element.attr('id') === 'captcha') {
                error.insertAfter(element.closest('.auth-captcha-row'));
            } else {
                var wrap = element.closest('.auth-input-wrap');
                error.insertAfter(wrap.length ? wrap : element);
            }
        }
    });
});
</script>
@endpush
