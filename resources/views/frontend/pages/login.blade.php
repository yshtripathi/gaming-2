@extends('frontend.layouts.main')
@section('title', 'Login | Polyboost')

@push('styles')
<style>
/* ============================================================================
   CALDERA LOGIN PAGE — Premium Gaming Theme Style
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

/* Options row: remember & forgot pwd link */
.auth-options {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: var(--spacing-24);
  font-size: 14px;
}

.auth-check {
  display: flex;
  align-items: center;
  gap: var(--spacing-8);
  cursor: pointer;
  user-select: none;
}

.auth-check input {
  cursor: pointer;
  accent-color: var(--color-digital-orange);
  width: 16px;
  height: 16px;
}

.auth-check span {
  color: var(--color-abyssal-ink);
  font-weight: 500;
}

.auth-options a {
  color: var(--color-digital-orange);
  font-weight: 600;
  text-decoration: none;
}

.auth-options a:hover {
  color: var(--color-abyssal-ink);
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
}
</style>
@endpush

@section('main-content')
<section class="polygamez-auth-page auth-login-page">
    
    <!-- Hero / Title Band -->
    <div class="about-hero-section">
      <div class="about-hero-wrapper">
        <h1 class="about-hero-title">LOGIN</h1>
        
        <div class="about-breadcrumb-capsule">
          <a href="{{ route('home') }}">
            <i class="fas fa-home me-2"></i>Home
          </a>
          <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
          <span class="about-breadcrumb-current">Login</span>
        </div>
      </div>
    </div>

    <!-- Auth Console Box -->
    <div class="auth-section-box">
      <div class="auth-console">
        
        <!-- Center Panel: Login Form -->
        <div class="auth-form-panel">
          <h2>WELCOME BACK</h2>
          <p>Login to access your active booster slots, dashboard progress, and purchase history.</p>
          
          <form name="frmLogin" id="frmLogin" action="{{ route('login.submit') }}" method="post">
            @csrf

            <!-- Email Address -->
            <div class="auth-field">
              <label for="email">Email Address</label>
              <div class="auth-input-wrap">
                <input type="email" name="email" id="email" placeholder="Enter email address" value="{{ old('email') }}" class="form-control" required>
                <i class="fas fa-envelope"></i>
              </div>
              @error('email')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Password -->
            <div class="auth-field">
              <label for="password">Password</label>
              <div class="auth-input-wrap">
                <input type="password" name="password" id="password" placeholder="Enter password" value="{{ old('password') }}" class="form-control" required>
                <i class="fas fa-lock"></i>
              </div>
              @error('password')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <!-- Keep me logged in & forgot pwd link -->
            <div class="auth-options">
              <label class="auth-check" for="remember">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <span>Remember Me</span>
              </label>
              <a href="{{ route('forgetpwd.form') }}">Forgot Password?</a>
            </div>

            <!-- Submit -->
            <button type="submit" class="auth-submit-btn-caldera">
              <span>Sign In</span>
              <i class="fas fa-arrow-right"></i>
            </button>
          </form>

          <div class="auth-switch-link">
            <p>Don't have an account? <a href="{{ route('register.form') }}">Create Account Now</a></p>
          </div>
        </div>

      </div>
    </div>

</section>
@endsection
