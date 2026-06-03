@extends('frontend.layouts.main')
@section('title', 'About Us')

@push('styles')
<style>
/* ============================================================================
   CALDERA ABOUT PAGE — Premium Gaming Theme Style
   ============================================================================ */

.polygamez-about-page {
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

/* Intro Grid Section */
.about-intro-section {
  position: relative;
  margin: var(--spacing-40);
  margin-top: var(--spacing-56);
  border-radius: var(--radius-3xl-3);
  border: 3px solid var(--color-abyssal-ink);
  box-shadow: 0 40px 100px rgba(7, 6, 7, 0.18);
  overflow: hidden;
}

/* Full-bleed background video */
.about-intro-bg-video {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

/* Dark overlay for text legibility */
.about-intro-overlay {
  position: absolute;
  inset: 0;
  z-index: 1;
  background: linear-gradient(
    100deg,
    rgba(7, 6, 7, 0.88) 0%,
    rgba(7, 6, 7, 0.72) 45%,
    rgba(7, 6, 7, 0.45) 100%
  );
}

.about-intro-wrapper {
  position: relative;
  z-index: 2;
  max-width: 100%;
  padding: var(--spacing-80) var(--spacing-40);
}

.about-intro-grid {
  display: grid;
  grid-template-columns: 1fr;
  max-width: 760px;
  margin: 0 auto;
}

/* Copy block (now over the video) */
.about-copy-block {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.about-badge {
  display: inline-flex;
  align-items: center;
  background: var(--color-ash-white);
  border: 2px solid var(--color-digital-orange);
  color: var(--color-digital-orange);
  padding: var(--spacing-8) var(--spacing-16);
  border-radius: var(--radius-full);
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  margin-bottom: var(--spacing-20);
}

.about-copy-block h2 {
  font-size: clamp(28px, 3.5vw, 42px);
  font-weight: 900;
  color: var(--color-pure-white);
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  line-height: 1.1;
  text-transform: uppercase;
  margin-bottom: var(--spacing-12);
}

.about-copy-block h3 {
  font-size: 18px;
  font-weight: 600;
  color: var(--color-digital-orange);
  margin-bottom: var(--spacing-24);
  line-height: 1.4;
  font-family: var(--font-dm-sans);
}

.about-copy-block p {
  font-size: 15px;
  line-height: 1.7;
  color: rgba(255, 255, 255, 0.85);
  margin-bottom: var(--spacing-20);
}

.about-pill-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: var(--spacing-16) var(--spacing-40);
  background: var(--color-digital-orange);
  color: var(--color-pure-white);
  border: none;
  border-radius: var(--radius-inputs);
  font-size: 14px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  text-decoration: none;
  transition: all 0.3s ease;
  cursor: pointer;
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  box-shadow: 0 12px 30px rgba(252, 80, 0, 0.2);
  margin-top: var(--spacing-16);
}

.about-pill-btn:hover {
  background: var(--color-pure-white);
  color: var(--color-abyssal-ink);
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(255, 255, 255, 0.25);
}

/* Why Choose / Pillars Section Box */
.why-choose-section {
  background: var(--color-pure-white);
  margin: var(--spacing-40);
  margin-top: var(--spacing-56);
  border-radius: var(--radius-3xl-3);
  overflow: hidden;
  box-shadow: 0 0 0 1px rgba(252, 80, 0, 0.1);
}

.why-choose-wrapper {
  max-width: 100%;
  width: 100%;
  padding: var(--spacing-56) var(--spacing-40);
}

/* Card System Grid - 4 Cards */
.grid-4-card-system {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--spacing-24);
  margin-bottom: var(--spacing-40);
}

.card-system {
  border-radius: var(--radius-3xl-3);
  padding: var(--spacing-24) var(--spacing-24);
  display: flex;
  flex-direction: column;
  gap: var(--spacing-12);
  transition: all 0.3s ease;
  min-height: auto;
  justify-content: flex-start;
  align-items: center;
  text-align: center;
  box-shadow: 0 10px 40px rgba(7, 6, 7, 0.08);
  overflow: hidden;
  background: var(--color-pure-white);
  border: 3px solid var(--color-abyssal-ink);
  color: var(--color-abyssal-ink);
}

.card-system:hover {
  background: var(--color-digital-orange);
  border-color: var(--color-digital-orange);
  color: var(--color-pure-white);
  transform: translateY(-4px);
  box-shadow: 0 15px 50px rgba(252, 80, 0, 0.25);
}

.card-system .card-label {
  color: var(--color-abyssal-ink);
}

.card-system .card-description {
  color: var(--color-abyssal-ink);
  line-height: 1.6;
}

.card-system .card-icon-top {
  color: var(--color-digital-orange);
  font-size: 22px;
}

.card-system:hover .card-label {
  color: var(--color-pure-white);
}

.card-system:hover .card-description {
  color: rgba(255, 255, 255, 0.95);
}

.card-system:hover .card-icon-top {
  color: var(--color-pure-white);
}

.card-top {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--spacing-12);
  width: 100%;
  min-height: auto;
  flex-wrap: wrap;
}

.card-label {
  font-size: 18px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.7px;
  margin: 0;
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  word-wrap: break-word;
  overflow-wrap: break-word;
  line-height: 1.3;
}

.card-icon-top {
  font-size: 28px;
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 32px;
}

.card-body {
  width: 100%;
}

.card-description {
  margin: 0;
  font-size: 16px;
  line-height: 1.6;
  word-wrap: break-word;
  overflow-wrap: break-word;
  hyphens: auto;
  text-align: center;
}

/* Section Title with Line */
.section-title-with-line {
  display: flex;
  align-items: center;
  gap: var(--spacing-16);
  margin-bottom: var(--spacing-40);
}

.title-square {
  width: 20px;
  height: 20px;
  background: var(--color-digital-orange);
  border-radius: 3px;
  flex-shrink: 0;
}

.section-title-with-line h2 {
  margin: 0;
  font-size: clamp(28px, 3vw, 42px);
  font-weight: 900;
  color: var(--color-abyssal-ink);
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  text-transform: uppercase;
  letter-spacing: 1px;
}

.title-underline {
  flex: 1;
  height: 2px;
  background: var(--color-abyssal-ink);
  margin-left: var(--spacing-24);
}

/* Footer Banner Call To Action */
.about-footer-cta {
  background: linear-gradient(135deg, var(--color-abyssal-ink) 0%, #17151a 100%);
  margin: var(--spacing-40);
  margin-top: var(--spacing-56);
  border-radius: var(--radius-3xl-3);
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(7, 6, 7, 0.2);
  border: 3px solid var(--color-abyssal-ink);
}

.about-cta-wrapper {
  padding: var(--spacing-64) var(--spacing-40);
  text-align: center;
  position: relative;
}

.about-cta-badge {
  display: inline-flex;
  align-items: center;
  background: rgba(252, 80, 0, 0.1);
  border: 2px solid var(--color-digital-orange);
  color: var(--color-digital-orange);
  padding: var(--spacing-8) var(--spacing-16);
  border-radius: var(--radius-full);
  font-size: 11px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  margin-bottom: var(--spacing-24);
}

.about-footer-cta h2 {
  font-size: clamp(32px, 4vw, 56px);
  color: var(--color-pure-white);
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  text-transform: uppercase;
  line-height: 1.1;
  margin-bottom: var(--spacing-16);
}

.about-footer-cta p {
  color: rgba(255, 255, 255, 0.8);
  font-size: var(--text-body);
  max-width: 600px;
  margin: 0 auto var(--spacing-32);
  line-height: 1.6;
}

.about-cta-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: var(--spacing-16) var(--spacing-48);
  background: var(--color-digital-orange);
  color: var(--color-pure-white);
  border: none;
  border-radius: var(--radius-inputs);
  font-size: 15px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  text-decoration: none;
  transition: all 0.3s ease;
  cursor: pointer;
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  box-shadow: 0 15px 40px rgba(252, 80, 0, 0.3);
}

.about-cta-btn:hover {
  background: var(--color-pure-white);
  color: var(--color-abyssal-ink);
  transform: translateY(-3px);
  box-shadow: 0 15px 40px rgba(255, 255, 255, 0.2);
}

/* Responsive Media Queries */
@media (max-width: 1199px) {
  .grid-4-card-system {
    grid-template-columns: repeat(2, 1fr);
    gap: var(--spacing-24);
  }
}

@media (max-width: 991px) {
  .about-hero-section,
  .about-intro-section,
  .why-choose-section,
  .about-footer-cta {
    margin: var(--spacing-24);
    margin-top: var(--spacing-40);
  }

  .about-hero-wrapper {
    padding: var(--spacing-64) var(--spacing-24);
  }

  .about-intro-wrapper {
    padding: var(--spacing-56) var(--spacing-24);
  }

  .about-cta-wrapper {
    padding: var(--spacing-48) var(--spacing-24);
  }

  .grid-4-card-system {
    grid-template-columns: 1fr;
    gap: var(--spacing-20);
  }
  .card-system {
    min-height: auto;
    padding: var(--spacing-24) var(--spacing-20);
  }
  .section-title-with-line {
    flex-direction: column;
    align-items: flex-start;
    gap: var(--spacing-12);
  }
  .title-underline {
    width: 100%;
    margin-left: 0;
  }
}

@media (max-width: 768px) {
  .about-hero-section,
  .about-intro-section,
  .why-choose-section,
  .about-footer-cta {
    margin: var(--spacing-16);
    margin-top: var(--spacing-32);
    border-radius: var(--radius-3xl-2);
  }

  .about-hero-wrapper {
    padding: var(--spacing-48) var(--spacing-16);
  }

  .about-intro-wrapper {
    padding: var(--spacing-40) var(--spacing-16);
  }

  .about-cta-wrapper {
    padding: var(--spacing-32) var(--spacing-16);
  }

  .about-pill-btn,
  .about-cta-btn {
    width: 100%;
  }

  .card-system {
    gap: var(--spacing-10);
    min-height: auto;
    padding: var(--spacing-16) var(--spacing-16);
  }

  .card-description {
    font-size: 14px;
    line-height: 1.5;
  }

  .card-label {
    font-size: 15px;
  }
}
</style>
@endpush

@section('main-content')
<section class="polygamez-about-page">
    
    <!-- Hero / Title Band -->
    <div class="about-hero-section">
      <div class="about-hero-wrapper">
        <h1 class="about-hero-title">{{ __('common.about_us') }}</h1>

        <div class="about-breadcrumb-capsule">
          <a href="{{ route('home') }}">
            <i class="fas fa-home me-2"></i>{{ __('common.home') }}
          </a>
          <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
          <span class="about-breadcrumb-current">{{ __('common.about_us') }}</span>
        </div>
      </div>
    </div>

    <!-- Intro Section (video background) -->
    <section class="about-intro-section">
      <video class="about-intro-bg-video" src="{{ asset('assets/media/videos/h-2.mp4') }}" autoplay muted loop playsinline></video>
      <div class="about-intro-overlay"></div>
      <div class="about-intro-wrapper">
        <div class="about-intro-grid">

          <!-- Text block -->
          <div class="about-copy-block">
            <span class="about-badge">{{ __('common.about_mission_badge') }}</span>
            <h2>{{ __('common.about_who_we_are') }}</h2>
            <h3>{{ __('common.about_tagline') }}</h3>
            <p>{{ __('common.about_intro_p1') }}</p>
            <p>{{ __('common.about_intro_p2') }}</p>
            <a href="{{ route('contact') }}" class="about-pill-btn">{{ __('common.about_connect_btn') }}</a>
          </div>

        </div>
      </div>
    </section>

    <!-- Core Pillars / Why Choose Us -->
    <section class="why-choose-section">
      <div class="why-choose-wrapper">
        <div class="section-title-with-line mb-5">
          <span class="title-square"></span>
          <h2>{{ __('common.about_core_pillars') }}</h2>
          <div class="title-underline"></div>
        </div>

        <div class="grid-4-card-system">

          <!-- Pillar Card 1 -->
          <div class="card-system">
            <div class="card-top">
              <h5 class="card-label">{{ __('common.about_pillar1_title') }}</h5>
              <i class="fas fa-user-shield card-icon-top"></i>
            </div>
            <div class="card-body">
              <p class="card-description">{{ __('common.about_pillar1_desc') }}</p>
            </div>
          </div>

          <!-- Pillar Card 2 -->
          <div class="card-system">
            <div class="card-top">
              <h5 class="card-label">{{ __('common.about_pillar2_title') }}</h5>
              <i class="fas fa-trophy card-icon-top"></i>
            </div>
            <div class="card-body">
              <p class="card-description">{{ __('common.about_pillar2_desc') }}</p>
            </div>
          </div>

          <!-- Pillar Card 3 -->
          <div class="card-system">
            <div class="card-top">
              <h5 class="card-label">{{ __('common.about_pillar3_title') }}</h5>
              <i class="fas fa-headset card-icon-top"></i>
            </div>
            <div class="card-body">
              <p class="card-description">{{ __('common.about_pillar3_desc') }}</p>
            </div>
          </div>

          <!-- Pillar Card 4 -->
          <div class="card-system">
            <div class="card-top">
              <h5 class="card-label">{{ __('common.about_pillar4_title') }}</h5>
              <i class="fas fa-bolt card-icon-top"></i>
            </div>
            <div class="card-body">
              <p class="card-description">{{ __('common.about_pillar4_desc') }}</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Call To Action -->
    <section class="about-footer-cta">
      <div class="about-cta-wrapper">
        <span class="about-cta-badge">{{ __('common.about_cta_badge') }}</span>
        <h2>{{ __('common.about_cta_title') }}</h2>
        <p>{{ __('common.about_cta_desc') }}</p>
        <a href="{{ route('product-lists') }}" class="about-cta-btn">{{ __('common.browse_services') }} <i class="fas fa-arrow-right ms-2"></i></a>
      </div>
    </section>

</section>
@endsection
