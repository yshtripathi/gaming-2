@extends('frontend.layouts.main')

@section('main-content')

    <!-- Section 1: Hero Banner (Home) -->
    <div class="hero-banner-caldera-box">
      <video class="hero-bg-video" autoplay muted loop playsinline>
        <source src="{{ asset('assets/media/videos/h-3.mp4') }}" type="video/mp4">
      </video>
      <div class="hero-overlay"></div>
      <div class="container position-relative">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-10 col-xl-9">
            <div class="hero-content text-center">
              <div class="hero-badge-caldera mb-4 d-inline-block">
                <i class="fas fa-fire me-2"></i>
                <span>RANK BOOST SPECIALISTS</span>
              </div>
              <h1 class="hero-title-caldera mb-4">
                Dominate Your Game<br>
                <span class="text-orange">Guaranteed Rank Boost</span>
              </h1>
              <p class="hero-subtitle-caldera mb-5">
                Professional boosters with Diamond+ ranks across all major games<br>
                Secure, anonymous, and completely confidential account handling<br>
                Join 50,000+ satisfied players and climb the ladder fast
              </p>
              <div class="hero-buttons-caldera justify-content-center">
                <a href="{{route('register.form')}}" class="btn-primary">
                  <i class="fas fa-play me-2"></i>
                  Start Boosting Now
                </a>
                <a href="#points-topup" class="btn-ghost">
                  <i class="fas fa-coins me-2"></i>
                  View Pricing
                </a>
                <a href="{{route('about-us')}}" class="nav-link-btn">
                  <i class="fas fa-question-circle me-2"></i>
                  How It Works
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Banner End -->

    <!-- Main Content Start (Shares grid overlay and background radial lights) -->
      
      <!-- Section 3: Gaming Showcase - Stacked Category Rows -->
      <section class="gaming-section-wrapper">
        <div class="section-title-with-line mb-5">
          <span class="title-square"></span>
          <h2>FEATURED GAMING</h2>
          <div class="title-underline"></div>
        </div>

        @php
          $categories = Helper::productCategoryList("all")->take(10);
        @endphp

        <!-- Stacked Category Rows -->
        <div class="gaming-rows">
          @foreach($categories as $category)
            @php
              $categoryProducts = $category->products()
                ->where('status', 'active')
                ->limit(10)
                ->get();
            @endphp

            <div class="game-row">
              <!-- Row Header -->
              <div class="game-row-head">
                <div class="game-row-heading">
                  <span class="title-square"></span>
                  <h3 class="game-row-title">{{ $category->title }}</h3>
                </div>
                <a href="{{ route('product-cat', $category->slug) }}" class="game-row-link">
                  View All
                  <i class="fas fa-arrow-right ms-2"></i>
                </a>
              </div>

              <!-- Games Carousel -->
              <div class="swiper game-carousel netflix-swiper-{{ $category->id }}">
                <div class="swiper-wrapper">
                  @forelse($categoryProducts as $product)
                    @php
                      $gamePhoto = !empty($product->photo) ? explode(',', $product->photo)[0] : $category->photo;
                    @endphp
                    <div class="swiper-slide">
                      <a href="{{ route('product-detail', $product->slug) }}" class="game-card">
                        <div class="game-image-wrapper">
                          <img src="{{ asset($gamePhoto) }}" alt="{{ $product->title }}" class="game-image">
                        </div>
                        <div class="game-info">
                          <h4 class="game-title">{{ $product->title }}</h4>
                          <p class="game-reward">
                            <i class="fas fa-coins me-1"></i>
                            {{ number_format(Helper::getProductPriceByCurrency('USD', $product), 0) }} {{ __('common.points') }}
                          </p>
                        </div>
                      </a>
                    </div>
                  @empty
                    <div class="swiper-slide">
                      <div class="empty-games">
                        <i class="fas fa-gamepad mb-2"></i>
                        <p>No games available yet</p>
                      </div>
                    </div>
                  @endforelse
                </div>

                <!-- Navigation Arrows -->
                <div class="swiper-button-next netflix-next-{{ $category->id }}"></div>
                <div class="swiper-button-prev netflix-prev-{{ $category->id }}"></div>
              </div>
            </div>
          @endforeach
        </div>
      </section>
      <!-- Game Streams Grid End -->

      <!-- Section 2: Why Choose Us -->
      <section class="why-choose-section">
        <div class="why-choose-wrapper">
          <div class="section-title-with-line mb-5">
            <span class="title-square"></span>
            <h2>WHY CHOOSE POLYBOOST</h2>
            <div class="title-underline"></div>
          </div>

          <div class="grid-4-card-system">

            <!-- Card 1 -->
            <div class="card-system">
              <div class="card-top">
                <h5 class="card-label">PROFESSIONAL BOOSTERS</h5>
                <i class="fas fa-star card-icon-top"></i>
              </div>
              <div class="card-body">
                <p class="card-description">Experienced players with thousands of successful boosts. All our boosters are verified professionals with Diamond+ ranks.</p>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="card-system">
              <div class="card-top">
                <h5 class="card-label">ACCOUNT SECURITY</h5>
                <i class="fas fa-shield-alt card-icon-top"></i>
              </div>
              <div class="card-body">
                <p class="card-description">Military-grade encryption and VPN protection ensures your account stays safe. No bans, 100% confidential and anonymous.</p>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="card-system">
              <div class="card-top">
                <h5 class="card-label">INSTANT DELIVERY SYSTEM</h5>
                <i class="fas fa-bolt card-icon-top"></i>
              </div>
              <div class="card-body">
                <p class="card-description">Get your rank boost completed within 24-48 hours. Flexible scheduling and priority support for all customers.</p>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="card-system">
              <div class="card-top">
                <h5 class="card-label">24/7 SUPPORT TEAM</h5>
                <i class="fas fa-headset card-icon-top"></i>
              </div>
              <div class="card-body">
                <p class="card-description">Round-the-clock customer support ready to assist. Live chat, email, and phone support always available for you.</p>
              </div>
            </div>

          </div>

          <div class="section-bottom-cta text-center mt-5">
            <a href="{{ route('product-lists') }}" class="btn-section-view">
              View All Services
              <i class="fas fa-arrow-right ms-3"></i>
            </a>
          </div>
        </div>
      </section>
      <!-- Features Section End -->

      <!-- Section 4: Point System -->
      <section class="py-5" id="points-topup">
        <div class="container">
          <!-- Interactive Console (themed two-panel card) -->
          <div class="topup-console">
            <!-- Header (spans both panels) -->
            <div class="topup-header">
              <span class="badge-section">PRICING SYSTEM</span>
              <h2 class="mt-3">Top Up Your Account</h2>
              <p class="section-subtitle-caldera mt-3">Flexible pricing tiers with bonus points on every purchase<br>More points = Better value and faster progression</p>
            </div>
            <!-- Notice banner (spans both panels, permanent) -->
            <div class="topup-notice">
              <i class="fas fa-exclamation-triangle"></i>
              <span><strong>Notice:</strong> {{ __('common.disclaimer') }}</span>
            </div>
            <!-- Left Panel: Bonus Tiers & Process Roadmap -->
            <div class="topup-panel topup-panel-left">
              <span class="topup-panel-label">Bonus Structure</span>
                <div class="d-flex align-items-center mb-4">
                  <div class="feature-icon-caldera me-3">
                    <i class="fas fa-gift"></i>
                  </div>
                  <div>
                    <h4 class="mb-1">Bonus Tiers</h4>
                    <p class="mb-0 text-muted">Get more value with bulk purchases - bigger orders get bigger rewards</p>
                  </div>
                </div>

                <!-- Premium Bonus Table -->
                <div class="table-responsive mb-4">
                  <table class="table">
                    <thead>
                      <tr class="bg-dark text-white">
                        <th>{{ __('common.bonus_table_range') }} ({{ Helper::getCurrencySymbol(session('currency'))}})</th>
                        <th>{{ __('common.bonus_table_multiplier') }}</th>
                        <th>{{ __('common.bonus_table_benefit') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Tier 1 -->
                      <tr>
                        <td class="py-3">
                            {{ session('currency') == 'JPY' ? '¥1 – ¥100,000' : (session('currency') == 'HKD' ? 'HK$ 1 – HK$ 5,000' : '$1 - $630') }}
                          </span>
                        </td>
                        <td class="bp-col-multiplier">
                          <span class="multiplier-pill">1×</span>
                        </td>
                        <td class="bp-col-benefit">
                          <span class="benefit-badge standard">{{ __('common.bonus_standard') }}</span>
                        </td>
                      </tr>
                      <!-- Tier 2 -->
                      <tr class="bp-tier-row tier-2">
                        <td class="bp-col-range">
                          <span class="range-badge">
                            {{ session('currency') == 'JPY' ? '¥100,001 – ¥300,000' : (session('currency') == 'HKD' ? 'HK$ 5,001 – HK$ 15,000' : '$631 - $1,880') }}
                          </span>
                        </td>
                        <td class="bp-col-multiplier">
                          <span class="multiplier-pill boost-1">1.5×</span>
                        </td>
                        <td class="bp-col-benefit">
                          <span class="benefit-badge silver">{{ __('common.bonus_50_extra') }}</span>
                        </td>
                      </tr>
                      <!-- Tier 3 -->
                      <tr class="bp-tier-row tier-3">
                        <td class="bp-col-range">
                          <span class="range-badge">
                            {{ session('currency') == 'JPY' ? '¥300,001 – ¥500,000' : (session('currency') == 'HKD' ? 'HK$ 15,001 – HK$ 25,000' : '$1,881 - $3,125') }}
                          </span>
                        </td>
                        <td class="bp-col-multiplier">
                          <span class="multiplier-pill boost-2">2×</span>
                        </td>
                        <td class="bp-col-benefit">
                          <span class="benefit-badge gold">{{ __('common.bonus_100_extra') }}</span>
                        </td>
                      </tr>
                      <!-- Tier 4 -->
                      <tr class="bp-tier-row tier-4">
                        <td class="bp-col-range">
                          <span class="range-badge">
                            {{ session('currency') == 'JPY' ? __('common.500,001_and_above') : (session('currency') == 'HKD' ? __('common.25000_and_above') : __('common.3125_and_above')) }}
                          </span>
                        </td>
                        <td class="bp-col-multiplier">
                          <span class="multiplier-pill boost-3">5×</span>
                        </td>
                        <td class="bp-col-benefit">
                          <span class="benefit-badge hyper">{{ __('common.bonus_400_extra') }}</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="bp-note-box mb-4">
                  <i class="fas fa-info-circle text-danger"></i>
                  <span class="bp-note-text">{{ __('common.bonus_note') }}</span>
                </div>

                <!-- Process Steps -->
                <div class="bp-process-flow mt-auto">
                  <div class="bp-flow-heading mb-3">Recharge Process Timeline</div>
                  <div class="bp-timeline-container">
                    <div class="bp-timeline-line"></div>
                    <div class="bp-timeline-steps">
                      <!-- Step 1 -->
                      <div class="bp-t-step">
                        <div class="bp-t-number">01</div>
                        <div class="bp-t-label">{{ __('common.choose_amount') }}</div>
                      </div>
                      <!-- Step 2 -->
                      <div class="bp-t-step">
                        <div class="bp-t-number">02</div>
                        <div class="bp-t-label">{{ __('common.auto_calculate') }}</div>
                      </div>
                      <!-- Step 3 -->
                      <div class="bp-t-step">
                        <div class="bp-t-number">03</div>
                        <div class="bp-t-label">{{ __('common.complete_payment') }}</div>
                      </div>
                      <!-- Step 4 -->
                      <div class="bp-t-step">
                        <div class="bp-t-number">04</div>
                        <div class="bp-t-label">{{ __('common.instant_delivery') }}</div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            <!-- Right Panel: Recharge Console -->
            <div class="topup-panel topup-panel-right">
              <span class="topup-panel-label">Recharge Console</span>
              <div class="bp-cyber-calc-card topup-calc">
                <div class="bp-cyber-scan-line"></div>
                <div class="bp-cyber-grid-overlay"></div>
                
                <div class="bp-card-header-block mb-4">
                  <div class="bp-card-header-icon calculator-icon">
                    <i class="fas fa-calculator"></i>
                  </div>
                  <div>
                    <h4 class="bp-card-title-new mb-1 text-white">{{ __('common.start_recharge_title') }}</h4>
                    <p class="bp-card-subtitle-new text-muted">{{ __('common.start_recharge_text') }}</p>
                  </div>
                </div>

                <form action="{{route('points-add-to-cart')}}" method="POST" class="bp-calc-form">
                  @csrf
                  <input type="hidden" name="quant[1]" value="1">
                  <input type="hidden" name="slug" value="points">

                  <!-- Input Container -->
                  <div class="bp-input-container mb-4">
                    <div class="bp-input-header d-flex justify-content-between align-items-center mb-2">
                      <label class="bp-input-label text-white mb-0">{{ __('common.label_amount') }}</label>
                      <span class="bp-input-status-pulse"></span>
                    </div>
                    <div class="bp-input-cyber-wrapper">
                      <div class="bp-currency-indicator">
                        {{ Helper::getCurrencySymbol(session('currency')) }}
                      </div>
                      <input type="number" class="bp-cyber-input"
                             placeholder="{{ __('common.placeholder_amount', ['currency' => Helper::getCurrencySymbol(session('currency'))]) }}"
                             min="1" name="price" id="price" required>
                      <div class="bp-cyber-input-border"></div>
                    </div>
                  </div>

                  <!-- Digital displays cockpit -->
                  <div class="bp-digital-cockpit mb-4">
                    <div class="bp-cockpit-glow"></div>
                    <div class="bp-cockpit-header d-flex justify-content-between mb-3">
                      <span class="bp-cockpit-title"><i class="fas fa-chart-line"></i> VALUATION ENGINE</span>
                      <span class="bp-cockpit-model">v2.1</span>
                    </div>
                    
                    <!-- Row 1: Base Points -->
                    <div class="bp-cockpit-row mb-3">
                      <div class="bp-row-meta">
                        <span class="bp-row-indicator"></span>
                        <span class="bp-row-name">{{ __('common.label_points') }}</span>
                      </div>
                      <div class="bp-row-input-wrap">
                        <input type="number" class="bp-cockpit-display" id="points" readonly value="0">
                        <span class="bp-row-unit">PTS</span>
                      </div>
                    </div>

                    <!-- Row 2: Bonus Points -->
                    <div class="bp-cockpit-row mb-3">
                      <div class="bp-row-meta">
                        <span class="bp-row-indicator bonus-indicator"></span>
                        <span class="bp-row-name">{{ __('common.bonus_points') }}</span>
                      </div>
                      <div class="bp-row-input-wrap bonus-display-wrap">
                        <input type="number" class="bp-cockpit-display bonus" id="bonus_points" readonly value="0">
                        <span class="bp-row-unit">PTS</span>
                      </div>
                    </div>

                    <div class="bp-cockpit-separator mb-3"></div>

                    <!-- Row 3: Total Scoreboard Readout -->
                    <div class="bp-scoreboard-panel">
                      <div class="bp-scoreboard-bg"></div>
                      <div class="bp-scoreboard-header d-flex justify-content-between align-items-center mb-2">
                        <span class="bp-scoreboard-label">{{ __('common.total_points') }}</span>
                        <span class="bp-scoreboard-glow-dot animate-pulse"></span>
                      </div>
                      <div class="bp-scoreboard-value-wrap">
                        <i class="fas fa-bolt bp-bolt-icon"></i>
                        <input type="number" name="points" class="bp-scoreboard-display" id="total_points" readonly value="0">
                        <span class="bp-scoreboard-unit">PTS</span>
                      </div>
                    </div>
                  </div>

                  <!-- Checkout Action -->
                  <div class="bp-checkout-wrapper">
                    <button class="bp-cyber-submit-btn" type="submit">
                      <span class="btn-shine"></span>
                      <span class="btn-text">
                        {{ __('common.add_cart') }} <i class="fas fa-shopping-cart ms-2"></i>
                      </span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- Points Top-Up Section End -->

      <!-- Section 5: Cinematic Video Showcase (cinema-showcase-section) -->
      <section class="cinema-showcase-section">
        <div class="cinema-banner">
          <!-- Full-bleed background video -->
          <video class="cinema-bg-video" autoplay muted loop playsinline>
            <source src="{{ asset('assets/media/videos/hero-banner-2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="cinema-banner-overlay"></div>

          <!-- Overlaid content (split: text left, chips right) -->
          <div class="cinema-banner-content">
            <!-- Left: heading, copy, CTA -->
            <div class="cinema-content-left">
              <div class="cinema-badge mb-3">
                <span class="live-dot"></span>
                <span>CINEMATIC PREVIEW</span>
              </div>
              <h2 class="cinema-banner-title">
                EXPLORE THE <span class="text-orange">NEW FRONTIER</span>
              </h2>
              <p class="cinema-banner-desc">
                Immerse yourself in elite gameplay, custom rank boosters, and a premium gaming vault — explore our full catalog of products and features.
              </p>
              <a href="{{ route('product-lists') }}" class="cinema-cta-btn">
                EXPLORE IT <i class="fas fa-compass ms-2"></i>
              </a>
            </div>

            <!-- Right: feature chips -->
            <div class="cinema-content-right">
              <div class="cinema-chips">
                <span class="cinema-chip"><i class="fas fa-bolt"></i> Instant Point Vault</span>
                <span class="cinema-chip"><i class="fas fa-shield-alt"></i> Secure &amp; Anonymous</span>
                <span class="cinema-chip"><i class="fas fa-headset"></i> 24/7 Support Crew</span>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Main Content End -->

@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<style>
/* ============================================================================
   CALDERA THEME OVERRIDES FOR HOME PAGE
   ============================================================================ */

/* Hero Banner - Curved Box with Video Background */
.hero-banner-caldera-box {
  position: relative;
  margin: var(--spacing-40);
  margin-top: 150px;
  border-radius: var(--radius-3xl-3);
  overflow: hidden;
  min-height: 600px;
  display: flex;
  align-items: center;
  box-shadow: 0 40px 100px rgba(7, 6, 7, 0.1);
}

.hero-bg-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  z-index: 1;
}

.hero-banner-caldera-box .container {
  position: relative;
  z-index: 2;
  padding: var(--spacing-80) var(--spacing-40);
}

.hero-content {
  position: relative;
  z-index: 2;
}

.hero-badge-caldera {
  display: inline-flex;
  align-items: center;
  background: var(--color-pure-white);
  border: 2px solid var(--color-digital-orange);
  color: var(--color-digital-orange);
  padding: var(--spacing-12) var(--spacing-20);
  border-radius: var(--radius-full);
  font-size: var(--text-body-sm);
  font-weight: var(--font-weight-medium);
  text-transform: uppercase;
  letter-spacing: 1px;
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
}

.hero-badge-caldera i {
  font-size: 16px;
  color: var(--color-digital-orange);
}

.hero-title-caldera {
  font-size: clamp(42px, 6vw, 96px);
  font-weight: 900;
  color: var(--color-abyssal-ink);
  line-height: 1.1;
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
}

.hero-subtitle-caldera {
  font-size: var(--text-heading-sm);
  color: var(--color-abyssal-ink);
  line-height: var(--leading-body);
}

.hero-buttons-caldera {
  display: flex;
  flex-wrap: wrap;
  gap: var(--spacing-16);
  margin-top: var(--spacing-32);
}

/* Feature Icon Styling */
.feature-icon-caldera {
  width: 60px;
  height: 60px;
  background: var(--color-digital-orange);
  border-radius: var(--radius-3xl);
  color: var(--color-pure-white);
  font-size: 28px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: all 0.3s ease;
}

.card:hover .feature-icon-caldera {
  transform: scale(1.1);
  box-shadow: 0 10px 30px rgba(252, 80, 0, 0.3);
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

/* Why Choose Section */
.why-choose-section {
  background: var(--color-pure-white);
  margin: var(--spacing-40);
  margin-top: var(--spacing-56);
  border-radius: var(--radius-3xl-3);
  overflow: hidden;
  box-shadow: 0 0 0 1px rgba(252, 80, 0, 0.1);
}

/* Gaming Featured Section */
.gaming-featured-section {
  background: var(--color-basalt-canvas);
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
}

/* Uniform Card Base Style */
.card-system {
  background: var(--color-pure-white);
  border: 3px solid var(--color-abyssal-ink);
  color: var(--color-abyssal-ink);
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

/* Hover State - Change to Orange */
.card-system:hover {
  background: var(--color-digital-orange);
  border-color: var(--color-digital-orange);
  color: var(--color-pure-white);
  transform: translateY(-4px);
  box-shadow: 0 15px 50px rgba(252, 80, 0, 0.25);
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

/* Card Top Section */
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

/* Section Bottom CTA */
.section-bottom-cta {
  display: flex;
  justify-content: center;
  margin-top: var(--spacing-56);
  padding-top: var(--spacing-40);
  border-top: 1px solid rgba(7, 6, 7, 0.1);
}

.btn-section-view {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: var(--spacing-16) var(--spacing-48);
  background: var(--color-digital-orange);
  color: var(--color-pure-white);
  border: none;
  border-radius: var(--radius-inputs);
  font-size: 16px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-decoration: none;
  transition: all 0.3s ease;
  cursor: pointer;
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  box-shadow: 0 16px 40px rgba(252, 80, 0, 0.2);
}

.btn-section-view:hover {
  background: #e65b00;
  transform: translateY(-3px);
  box-shadow: 0 20px 50px rgba(252, 80, 0, 0.3);
}

.btn-section-view i {
  transition: all 0.3s ease;
}

.btn-section-view:hover i {
  transform: translateX(5px);
}

/* Card Action Button */
.btn-card-action {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: var(--spacing-14) var(--spacing-28);
  border: 2px solid var(--color-abyssal-ink);
  background: transparent;
  color: var(--color-abyssal-ink);
  border-radius: var(--radius-full);
  font-size: 13px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  text-decoration: none;
  transition: all 0.3s ease;
  cursor: pointer;
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  width: 100%;
  margin-top: auto;
}

/* Orange Button */
.btn-card-action.btn-orange {
  background: var(--color-digital-orange);
  border-color: var(--color-digital-orange);
  color: var(--color-pure-white);
}

.btn-card-action.btn-orange:hover {
  background: #e65b00;
  border-color: #e65b00;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(252, 80, 0, 0.3);
}

/* Dark Button */
.btn-card-action.btn-dark {
  border-color: var(--color-abyssal-ink);
  color: var(--color-abyssal-ink);
  background: transparent;
}

.btn-card-action.btn-dark:hover {
  background: var(--color-abyssal-ink);
  color: var(--color-pure-white);
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(7, 6, 7, 0.2);
}

/* White Button */
.btn-card-action.btn-white {
  border-color: var(--color-digital-orange);
  color: var(--color-digital-orange);
  background: transparent;
}

.btn-card-action.btn-white:hover {
  background: var(--color-digital-orange);
  color: var(--color-pure-white);
  border-color: var(--color-digital-orange);
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(252, 80, 0, 0.3);
}

/* Responsive */
@media (max-width: 1199px) {
  .grid-4-card-system {
    grid-template-columns: repeat(2, 1fr);
    gap: var(--spacing-24);
  }
}

@media (max-width: 991px) {
  .why-choose-section {
    margin: var(--spacing-24);
    margin-top: var(--spacing-40);
  }

  .gaming-featured-section {
    margin: var(--spacing-24);
    margin-top: var(--spacing-40);
  }

  .grid-4-card-system {
    grid-template-columns: 1fr;
    gap: var(--spacing-20);
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

  .card-system {
    min-height: auto;
    padding: var(--spacing-24) var(--spacing-20);
  }
}

@media (max-width: 768px) {
  .why-choose-section {
    margin: var(--spacing-16);
    margin-top: var(--spacing-32);
    border-radius: var(--radius-3xl-3);
  }

  .why-choose-wrapper {
    padding: var(--spacing-32) var(--spacing-24);
  }

  .gaming-featured-section {
    margin: var(--spacing-16);
    margin-top: var(--spacing-32);
    border-radius: var(--radius-3xl-3);
  }

  .section-title-with-line h2 {
    font-size: clamp(24px, 2.5vw, 32px);
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

  .section-bottom-cta {
    margin-top: var(--spacing-40);
    padding-top: var(--spacing-32);
  }

  .btn-section-view {
    padding: var(--spacing-14) var(--spacing-32);
    font-size: 14px;
    width: 100%;
  }

  /* Gaming Showcase Responsive */
  .gaming-section-wrapper {
    padding: var(--spacing-40) var(--spacing-20);
    margin: var(--spacing-20);
  }

  .gaming-rows {
    gap: var(--spacing-40);
  }

  .game-row-head {
    padding: 0;
    margin-bottom: var(--spacing-16);
  }

  .game-row-title {
    font-size: 20px;
  }

  /* Hide arrows on touch — swipe/scroll instead */
  .game-carousel .swiper-button-next,
  .game-carousel .swiper-button-prev {
    display: none;
  }

  .game-card {
    cursor: default;
  }

  .game-title {
    font-size: 14px;
  }

  .game-reward {
    font-size: 12px;
  }

  .game-info {
    padding: 14px 12px;
  }
}

/* Badge Section */
.badge-section {
  display: inline-block;
  background: var(--color-digital-orange);
  color: var(--color-pure-white);
  padding: var(--spacing-8) var(--spacing-16);
  border-radius: var(--radius-full);
  font-size: var(--text-body-sm);
  font-weight: var(--font-weight-medium);
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Section Subtitle */
.section-subtitle-caldera {
  font-size: var(--text-body);
  color: var(--color-abyssal-ink);
  max-width: 600px;
  margin: 0 auto;
}

/* Top-Up Console — themed two-panel card */
/* Match horizontal inset of the sections above (40px from viewport edge) */
#points-topup .container {
  max-width: 100%;
  width: 100%;
  margin: 0;
  padding-left: var(--spacing-40);
  padding-right: var(--spacing-40);
}

.topup-console {
  display: grid;
  grid-template-columns: 1fr 1fr;
  background: var(--color-ash-white);
  border: 3px solid var(--color-abyssal-ink);
  border-radius: var(--radius-3xl-3);
  overflow: hidden;
}

/* Header — spans both panels, sits at the top of the console */
.topup-header {
  grid-column: 1 / -1;
  text-align: center;
  padding: var(--spacing-40) var(--spacing-40) var(--spacing-32);
  border-bottom: 3px solid var(--color-abyssal-ink);
}

.topup-header h2 {
  margin-top: var(--spacing-12);
}

/* Notice banner — spans both panels, stays permanently */
.topup-notice {
  grid-column: 1 / -1;
  display: flex;
  align-items: flex-start;
  gap: var(--spacing-12);
  padding: var(--spacing-24) var(--spacing-40);
  background: var(--color-ash-white);
  border-bottom: 3px solid var(--color-abyssal-ink);
  color: var(--color-abyssal-ink);
  font-size: var(--text-body-sm);
  line-height: var(--leading-body);
}

.topup-notice i {
  color: var(--color-digital-orange);
  font-size: 18px;
  margin-top: 2px;
  flex-shrink: 0;
}

.topup-panel {
  display: flex;
  flex-direction: column;
  padding: var(--spacing-40);
  min-width: 0;
}

.topup-panel-right {
  border-left: 3px solid var(--color-abyssal-ink);
}

.topup-panel-label {
  display: block;
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  font-size: 22px;
  font-weight: 900;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: var(--color-abyssal-ink);
  margin-bottom: var(--spacing-24);
}

/* Dark calculator block fills the panel below its label */
.topup-panel-right .topup-calc {
  flex: 1;
}

@media (max-width: 991px) {
  #points-topup .container {
    padding-left: var(--spacing-24);
    padding-right: var(--spacing-24);
  }

  .topup-console {
    grid-template-columns: 1fr;
  }

  .topup-panel-right {
    border-left: none;
    border-top: 3px solid var(--color-abyssal-ink);
  }

  .topup-panel {
    padding: var(--spacing-24);
  }

  .topup-notice {
    padding: var(--spacing-20) var(--spacing-24);
  }

  .topup-header {
    padding: var(--spacing-32) var(--spacing-24) var(--spacing-24);
  }
}

/* Card Hover Effects */
.card:hover {
  transform: translateY(-4px);
  box-shadow: 0 20px 50px rgba(252, 80, 0, 0.1);
}

/* Gaming Section Wrapper — matches .why-choose-section spacing */
.gaming-section-wrapper {
  padding: var(--spacing-56) var(--spacing-40);
  background: var(--color-ash-white);
  margin: var(--spacing-40);
  margin-top: var(--spacing-56);
  border-radius: var(--radius-3xl-3);
  box-shadow: 0 0 0 1px rgba(252, 80, 0, 0.1);
  position: relative;
}

/* Stacked Category Rows */
.gaming-rows {
  display: flex;
  flex-direction: column;
  gap: var(--spacing-56);
}

.game-row {
  width: 100%;
}

/* Row Header */
.game-row-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--spacing-16);
  margin-bottom: var(--spacing-24);
  padding: 0 var(--spacing-8);
}

.game-row-heading {
  display: flex;
  align-items: center;
  gap: var(--spacing-12);
}

.game-row-title {
  font-size: clamp(20px, 2.2vw, 28px);
  font-weight: 900;
  color: var(--color-abyssal-ink);
  font-family: var(--font-pp-neue-corp-compact-ultrabold);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin: 0;
  line-height: 1;
}

.game-row-link {
  display: inline-flex;
  align-items: center;
  gap: var(--spacing-8);
  padding: var(--spacing-8) var(--spacing-16);
  background: transparent;
  color: var(--color-abyssal-ink);
  border-radius: var(--radius-full);
  font-family: var(--font-dm-sans);
  font-weight: 600;
  font-size: var(--text-body-sm);
  text-decoration: none;
  white-space: nowrap;
  transition: all 0.3s ease;
}

.game-row-link i {
  transition: transform 0.3s ease;
}

.game-row-link:hover {
  color: var(--color-digital-orange);
}

.game-row-link:hover i {
  transform: translateX(4px);
}

/* Gaming Carousel */
.game-carousel {
  position: relative;
  width: 100%;
  padding: 14px 0;
}

.game-carousel .swiper-slide {
  height: auto;
}

.game-carousel .swiper-button-next,
.game-carousel .swiper-button-prev {
  width: 44px;
  height: 44px;
  background: var(--color-pure-white);
  border: 1px solid rgba(7, 6, 7, 0.1);
  border-radius: 50%;
  transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
  color: var(--color-abyssal-ink);
  box-shadow: 0 6px 18px rgba(7, 6, 7, 0.12);
  top: 38%;
}

.game-carousel .swiper-button-next:hover,
.game-carousel .swiper-button-prev:hover {
  background: var(--color-digital-orange);
  color: var(--color-pure-white);
  border-color: var(--color-digital-orange);
  box-shadow: 0 8px 24px rgba(252, 80, 0, 0.3);
}

.game-carousel .swiper-button-next::after,
.game-carousel .swiper-button-prev::after {
  font-size: 15px;
  font-weight: 900;
}

.game-carousel .swiper-button-prev {
  left: -6px;
}

.game-carousel .swiper-button-next {
  right: -6px;
}

.game-carousel .swiper-button-disabled {
  opacity: 0;
  pointer-events: none;
}

/* Game Card */
.game-card {
  position: relative;
  display: block;
  height: 100%;
  cursor: pointer;
  text-decoration: none;
}

.game-image-wrapper {
  position: relative;
  width: 100%;
  aspect-ratio: 16 / 10;
  overflow: hidden;
  border-radius: var(--radius-3xl);
  background: var(--color-basalt-canvas);
  border: 2px solid var(--color-basalt-canvas);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
  transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.game-card:hover .game-image-wrapper {
  transform: translateY(-6px);
  border-color: var(--color-digital-orange);
  box-shadow: 0 14px 32px rgba(252, 80, 0, 0.22);
}

.game-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.game-image-wrapper:hover .game-image {
  transform: scale(1.12);
}

/* Game Overlay */
.game-overlay {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, rgba(7, 6, 7, 0.75) 0%, rgba(252, 80, 0, 0.2) 100%);
  opacity: 0;
  transition: opacity 0.3s ease;
  border-radius: var(--radius-3xl);
}

.game-image-wrapper:hover .game-overlay {
  opacity: 1;
}

.play-now-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 14px 28px;
  background: var(--color-digital-orange);
  color: var(--color-pure-white);
  border-radius: var(--radius-xl);
  font-weight: 700;
  text-decoration: none;
  transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
  box-shadow: 0 6px 16px rgba(252, 80, 0, 0.3);
  transform: scale(0.85);
}

.game-overlay:hover .play-now-btn {
  transform: scale(1);
}

.play-now-btn:hover {
  box-shadow: 0 10px 28px rgba(252, 80, 0, 0.4);
  background: #e63f00;
}

/* Game Info */
.game-info {
  padding: 16px 14px;
  background: var(--color-pure-white);
  border-top: 2px solid var(--color-basalt-canvas);
  border-radius: 0 0 var(--radius-3xl) var(--radius-3xl);
  margin-top: -4px;
}

.game-title {
  font-size: 16px;
  font-weight: 700;
  color: var(--color-abyssal-ink);
  margin: 0 0 8px 0;
  line-height: 1.3;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.game-reward {
  font-size: 14px;
  font-weight: 600;
  color: var(--color-digital-orange);
  margin: 0;
  display: flex;
  align-items: center;
}

.empty-games {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 220px;
  background: var(--color-pure-white);
  border: 1px dashed rgba(7, 6, 7, 0.15);
  border-radius: var(--radius-3xl);
  color: var(--color-abyssal-ink);
  opacity: 0.55;
}

.empty-games i {
  font-size: 28px;
  color: var(--color-digital-orange);
  margin-bottom: var(--spacing-8);
}

.empty-games p {
  margin: 0;
  font-size: var(--text-body-sm);
}

/* Swiper Custom Theme Styling */
.pg-swiper-showcase {
    width: 100%;
    border-radius: var(--radius-3xl-2);
    background: var(--color-ash-white);
    border: 1px solid rgba(7,6,7,0.08);
    box-shadow: 0 24px 64px rgba(7, 6, 7, 0.06);
    overflow: hidden;
}

.pg-slide-showcase-card {
    display: grid;
    grid-template-columns: 550px 1fr;
    min-height: 350px;
    width: 100%;
}

.pg-slide-image-col {
    position: relative;
    width: 550px;
    height: 350px;
    overflow: hidden;
}

.pg-slide-image-col img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.pg-slide-showcase-card:hover .pg-slide-image-col img {
    transform: scale(1.04);
}

.pg-slide-index-badge {
    position: absolute;
    top: 24px;
    left: 24px;
    background: var(--color-digital-orange);
    color: var(--color-pure-white);
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
    font-weight: 800;
    font-size: 13px;
    padding: 6px 14px;
    border-radius: var(--radius-full);
    letter-spacing: 1px;
    box-shadow: 0 10px 20px rgba(252, 80, 0, 0.2);
}

.pg-slide-details-col {
    padding: var(--spacing-40) var(--spacing-48);
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: left;
    background: var(--color-ash-white);
}

.pg-category-tag {
    display: inline-block;
    background: rgba(252, 80, 0, 0.1);
    color: var(--color-digital-orange);
    border: 1px solid rgba(252, 80, 0, 0.22);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    padding: 6px 12px;
    border-radius: 6px;
    margin-bottom: 16px;
    width: max-content;
}

.pg-slide-details-col h3 {
    font-size: clamp(26px, 3.5vw, 36px) !important;
    font-weight: 900 !important;
    color: var(--color-abyssal-ink) !important;
    margin: 0 0 16px;
    line-height: 1.1;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
}

.pg-details-summary {
    color: var(--color-abyssal-ink) !important;
    font-size: 15px;
    line-height: 1.7;
    margin: 0 0 28px;
    max-width: 580px;
}

.pg-details-actions {
    display: flex;
    align-items: center;
}

.pg-swiper-thumbs {
    width: 100%;
    padding: 10px 0 !important;
    overflow: visible !important;
}

.pg-thumb-slide {
    cursor: pointer;
    opacity: 0.45;
    transition: opacity 0.3s cubic-bezier(0.165, 0.84, 0.44, 1), transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.pg-thumb-slide:hover {
    opacity: 0.8;
}

.mySwiper .swiper-slide-thumb-active {
    opacity: 1 !important;
}

.pg-thumb-card {
    background: var(--color-pure-white);
    border: 1px solid rgba(7,6,7,0.08);
    border-radius: var(--radius-2xl-2);
    padding: 10px;
    display: flex;
    align-items: center;
    gap: 14px;
    box-shadow: 0 10px 24px rgba(7,6,7,0.04);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.pg-thumb-card img {
    width: 68px;
    height: 48px;
    object-fit: cover;
    border-radius: 10px;
    border: 1px solid rgba(0,0,0,0.05);
}

.pg-thumb-title {
    font-size: 12px;
    font-weight: 800;
    color: var(--color-abyssal-ink);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 140px;
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
}

.mySwiper .swiper-slide-thumb-active .pg-thumb-card {
    border-color: var(--color-digital-orange);
    background: var(--color-abyssal-ink);
    box-shadow: 0 14px 28px rgba(252, 80, 0, 0.22);
    transform: scale(1.02);
}

.mySwiper .swiper-slide-thumb-active .pg-thumb-title {
    color: var(--color-pure-white);
}

/* Customize Swiper Navigation Buttons */
.pg-swiper-btn-next,
.pg-swiper-btn-prev {
    color: var(--color-pure-white) !important;
    background: var(--color-digital-orange);
    backdrop-filter: blur(8px);
    width: 48px;
    height: 48px;
    border-radius: 50%;
    border: 1px solid var(--color-digital-orange);
    box-shadow: 0 8px 24px rgba(252, 80, 0, 0.2);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.pg-swiper-btn-next:after,
.pg-swiper-btn-prev:after {
    font-size: 15px !important;
    font-weight: 900;
}

.pg-swiper-btn-next:hover,
.pg-swiper-btn-prev:hover {
    background: var(--color-abyssal-ink);
    border-color: var(--color-abyssal-ink);
    transform: scale(1.08);
}

/* Responsiveness */
@media (max-width: 1199px) {
    .pg-slide-showcase-card {
        grid-template-columns: 460px 1fr;
    }
    .pg-slide-image-col {
        width: 460px;
        height: 350px;
    }
}

@media (max-width: 991px) {
    .pg-slide-showcase-card {
        grid-template-columns: 1fr;
    }
    .pg-slide-image-col {
        width: 100%;
        height: 320px;
    }
    .pg-slide-details-col {
        padding: 34px 28px;
    }
}

/* Points Top-Up Section - Caldera Theme */
.bp-topup-section {
    position: relative;
    padding: var(--spacing-92) 0 !important;
    background: linear-gradient(135deg, var(--color-ash-white), var(--color-basalt-canvas)) !important;
}

/* Disclaimer styling - override alert */
.alert {
    background: rgba(252, 80, 0, 0.05) !important;
    border: 1px solid rgba(252, 80, 0, 0.15) !important;
    border-radius: var(--radius-2xl) !important;
    color: var(--color-abyssal-ink) !important;
}

.alert-warning {
    color: var(--color-digital-orange) !important;
}

.bp-disclaimer-wrapper {
    position: relative;
    border-radius: var(--radius-2xl);
    background: rgba(252, 80, 0, 0.05);
    padding: 1px;
    overflow: hidden;
    box-shadow: none;
}

.bp-disclaimer-content {
    position: relative;
    z-index: 1;
    background: var(--color-pure-white);
    border-radius: calc(var(--radius-2xl) - 1px);
    padding: 16px 24px;
    display: flex;
    align-items: center;
    gap: 16px;
}

.bp-disclaimer-badge {
    background: var(--color-digital-orange);
    color: var(--color-pure-white);
    font-size: 10px;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 5px 12px;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    white-space: nowrap;
}

.bp-disclaimer-text {
    margin: 0 !important;
    color: var(--color-abyssal-ink) !important;
    font-size: 13px !important;
    font-weight: 600;
}

/* Header & Badges */
.bp-header-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--color-digital-orange);
    border: 1px solid var(--color-digital-orange);
    padding: 6px 14px;
    border-radius: var(--radius-full);
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--color-pure-white);
}

.bp-main-title {
    color: var(--color-abyssal-ink) !important;
    font-size: clamp(32px, 4.5vw, 48px) !important;
    font-weight: 900 !important;
    text-transform: uppercase;
    letter-spacing: -0.5px;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
}

.bp-title-separator {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin: 16px auto;
}

.bp-title-separator .sep-line {
    width: 60px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #0b0d10, transparent);
}

.bp-title-separator .sep-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #dfff00;
    border: 1.5px solid #0b0d10;
}

.bp-topup-intro-deck {
    max-width: 760px;
    margin: 0 auto;
}

.bp-intro-lead {
    font-size: 17px !important;
    line-height: 1.6 !important;
    color: #34383f !important;
    font-weight: 600;
    margin-bottom: 10px !important;
}

.bp-intro-sub {
    font-size: 14px !important;
    color: #68707a !important;
    margin-bottom: 0 !important;
}

/* Left Card: Bonus Tiers & Roadmap */
.bp-tier-card {
    background: var(--color-pure-white) !important;
    border: 1px solid rgba(7, 6, 7, 0.08) !important;
    border-radius: var(--radius-3xl-2) !important;
    padding: var(--spacing-40) !important;
    box-shadow: 0 24px 60px rgba(7, 6, 7, 0.05) !important;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.bp-card-corner-decor {
    position: absolute;
    top: 0;
    right: 0;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 40px 40px 0;
    border-color: transparent var(--color-digital-orange) transparent transparent;
}

.bp-card-header-block {
    display: flex;
    align-items: center;
    gap: 16px;
}

.bp-card-header-icon {
    width: 52px;
    height: 52px;
    border-radius: var(--radius-2xl);
    background: var(--color-digital-orange);
    color: var(--color-pure-white);
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 20px rgba(252, 80, 0, 0.15);
}

.bp-card-title-new {
    color: var(--color-abyssal-ink) !important;
    font-size: 22px !important;
    font-weight: 900 !important;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
}

.bp-card-subtitle-new {
    font-size: 13px !important;
    color: var(--color-abyssal-ink) !important;
    margin: 0 !important;
}

/* Premium Table Layout */
.bp-table-container {
    border-radius: var(--radius-2xl-2);
    border: 1px solid rgba(7, 10, 12, 0.08);
    overflow: hidden;
    background: var(--color-pure-white);
}

.bp-premium-table {
    width: 100%;
    border-collapse: collapse;
}

.bp-premium-table th {
    background: var(--color-abyssal-ink);
    color: var(--color-pure-white);
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 11px !important;
    font-weight: 800 !important;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 16px 20px;
    border: none;
}

.bp-premium-table td {
    padding: 18px 20px;
    border-bottom: 1px solid rgba(7, 10, 12, 0.06);
    vertical-align: middle;
    transition: all 0.25s ease;
    color: var(--color-abyssal-ink);
}

.bp-tier-row:last-child td {
    border-bottom: none;
}

.bp-tier-row:hover td {
    background: rgba(252, 80, 0, 0.03);
}

.bp-col-range {
    font-weight: 800;
    color: var(--color-abyssal-ink) !important;
}

.range-badge {
    font-size: 14px;
}

.multiplier-pill {
    background: var(--color-abyssal-ink);
    color: var(--color-pure-white);
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
    font-size: 13px;
    font-weight: 800;
    padding: 4px 12px;
    border-radius: var(--radius-full);
    display: inline-block;
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
}

.multiplier-pill.boost-1 {
    background: var(--color-abyssal-ink);
    color: var(--color-digital-orange);
    border-color: rgba(252, 80, 0, 0.2);
}

.multiplier-pill.boost-2 {
    background: var(--color-abyssal-ink);
    color: var(--color-digital-orange);
    border-color: rgba(252, 80, 0, 0.4);
    box-shadow: 0 4px 14px rgba(252, 80, 0, 0.15);
}

.multiplier-pill.boost-3 {
    background: var(--color-digital-orange);
    color: var(--color-pure-white);
    border-color: var(--color-digital-orange);
    box-shadow: 0 4px 18px rgba(252, 80, 0, 0.3);
}

.bp-tier-row:hover .multiplier-pill.boost-3 {
    transform: scale(1.08) rotate(-2deg);
}

.benefit-badge {
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 4px 10px;
    border-radius: 6px;
    display: inline-block;
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
}

.benefit-badge.standard {
    background: rgba(7, 6, 7, 0.05);
    color: var(--color-abyssal-ink);
}

.benefit-badge.silver {
    background: rgba(7, 6, 7, 0.08);
    color: var(--color-abyssal-ink);
}

.benefit-badge.gold {
    background: rgba(252, 80, 0, 0.12);
    color: var(--color-digital-orange);
}

.benefit-badge.hyper {
    background: var(--color-digital-orange);
    color: var(--color-pure-white);
    font-weight: 900;
}

/* Note box */
.bp-note-box {
    display: flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 74, 90, 0.04);
    border: 1px solid rgba(255, 74, 90, 0.08);
    border-radius: 12px;
    padding: 12px 18px;
}

.bp-note-text {
    font-size: 11.5px;
    font-weight: 700;
    color: #ff4a5a !important;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Roadmap Flow */
.bp-process-flow {
    border-top: 1px dashed rgba(8, 10, 12, 0.12);
    padding-top: 24px;
}

.bp-flow-heading {
    font-family: 'Chakra Petch', sans-serif;
    font-size: 12px;
    font-weight: 800;
    color: #0b0d10;
    text-transform: uppercase;
    letter-spacing: 0.8px;
}

.bp-timeline-container {
    position: relative;
    width: 100%;
}

.bp-timeline-line {
    position: absolute;
    top: 18px;
    left: 4%;
    width: 92%;
    height: 2px;
    background: linear-gradient(90deg, #0b0d10 0%, #dfff00 50%, #0b0d10 100%);
    opacity: 0.25;
    z-index: 0;
}

.bp-timeline-steps {
    display: flex;
    justify-content: space-between;
    position: relative;
    z-index: 1;
}

.bp-t-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 22%;
}

.bp-t-number {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #0b0d10;
    color: #ffffff;
    font-family: 'Orbitron', 'Chakra Petch', sans-serif;
    font-size: 12px;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid #ffffff;
    box-shadow: 0 6px 15px rgba(8, 10, 12, 0.15);
    margin-bottom: 10px;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.bp-t-step:hover .bp-t-number {
    background: #dfff00;
    color: #0b0d10;
    transform: scale(1.15);
    box-shadow: 0 8px 20px rgba(195, 226, 0, 0.35);
}

.bp-t-label {
    font-size: 11px;
    font-weight: 800;
    color: #68707a;
    text-transform: uppercase;
    letter-spacing: 0.3px;
    line-height: 1.3;
}

/* Right Column: Cyber Cockpit Panel */
.bp-cyber-calc-card {
    background: var(--color-pure-white) !important;
    border: 1px solid rgba(7, 6, 7, 0.08) !important;
    border-radius: var(--radius-3xl-2) !important;
    padding: var(--spacing-40) !important;
    box-shadow: 0 32px 80px rgba(7, 6, 7, 0.05) !important;
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.bp-cyber-scan-line {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 50%, rgba(252, 80, 0, 0.02) 50%), linear-gradient(90deg, rgba(252, 80, 0, 0.01), transparent);
    background-size: 100% 4px, 4px 100%;
    z-index: 0;
    pointer-events: none;
}

.bp-cyber-grid-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 85% 15%, rgba(252, 80, 0, 0.05), transparent 45%);
    z-index: 0;
    pointer-events: none;
}

.bp-cyber-calc-card .bp-card-header-block {
    position: relative;
    z-index: 1;
}

.calculator-icon {
    background: var(--color-digital-orange);
    color: var(--color-pure-white);
    box-shadow: 0 10px 24px rgba(252, 80, 0, 0.2);
}

.bp-cyber-calc-card .bp-card-subtitle-new {
    color: var(--color-abyssal-ink) !important;
}

/* Form Styles */
.bp-calc-form {
    position: relative;
    z-index: 1;
    margin-top: 12px;
}

.bp-input-label {
    font-size: 12px !important;
    font-weight: 800 !important;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--color-abyssal-ink) !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
}

.bp-input-status-pulse {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--color-digital-orange);
    box-shadow: 0 0 10px var(--color-digital-orange);
    display: inline-block;
    animation: statusPulse 1.8s infinite;
}

/* Custom Input Box */
.bp-input-cyber-wrapper {
    position: relative;
    height: 60px;
    display: flex;
    align-items: center;
    background: var(--color-ash-white);
    border: 2px solid var(--color-abyssal-ink);
    border-radius: var(--radius-inputs);
    overflow: hidden;
    padding: 0 20px;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.bp-currency-indicator {
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
    color: var(--color-digital-orange);
    font-size: 20px;
    font-weight: 900;
    margin-right: 14px;
    user-select: none;
}

.bp-cyber-input {
    flex: 1;
    background: transparent !important;
    border: none !important;
    outline: none !important;
    color: var(--color-abyssal-ink) !important;
    font-family: var(--font-dm-sans);
    font-size: 18px !important;
    font-weight: 600 !important;
    padding: 0 !important;
    width: 100%;
}

.bp-cyber-input::placeholder {
    color: var(--color-abyssal-ink) !important;
    opacity: 0.5 !important;
    font-size: 15px;
    font-weight: 600;
    font-family: var(--font-dm-sans);
}

.bp-cyber-input-border {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 2px;
    background: var(--color-digital-orange);
    transition: width 0.4s ease;
}

.bp-input-cyber-wrapper:focus-within {
    border-color: var(--color-digital-orange);
    background: var(--color-pure-white);
    box-shadow: 0 10px 30px rgba(252, 80, 0, 0.1);
}

.bp-input-cyber-wrapper:focus-within .bp-cyber-input-border {
    width: 100%;
}

/* Digital Cockpit Breakdown */
.bp-digital-cockpit {
    position: relative;
    background: var(--color-ash-white);
    border: 1px solid rgba(7, 6, 7, 0.08);
    border-radius: var(--radius-3xl);
    padding: var(--spacing-24);
    overflow: hidden;
}

.bp-cockpit-glow {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(252, 80, 0, 0.02) 0%, transparent 60%);
    pointer-events: none;
}

.bp-cockpit-header {
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
    font-size: 10px;
    font-weight: 800;
    color: var(--color-abyssal-ink);
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.bp-cockpit-model {
    color: var(--color-digital-orange);
}

.bp-cockpit-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: var(--color-pure-white);
    border: 1px solid rgba(7, 6, 7, 0.08);
    border-radius: 12px;
    padding: 10px 16px;
}

.bp-row-meta {
    display: flex;
    align-items: center;
    gap: 8px;
}

.bp-row-indicator {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: rgba(7, 6, 7, 0.2);
}

.bp-row-indicator.bonus-indicator {
    background: var(--color-digital-orange);
    box-shadow: 0 0 6px var(--color-digital-orange);
}

.bp-row-name {
    font-size: 12px;
    font-weight: 800;
    color: var(--color-abyssal-ink);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
}

.bp-row-input-wrap {
    display: flex;
    align-items: center;
    gap: 6px;
}

.bp-cockpit-display {
    width: 140px;
    text-align: right;
    background: transparent !important;
    border: none !important;
    outline: none !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
    color: var(--color-abyssal-ink) !important;
    font-size: 17px !important;
    font-weight: 800 !important;
    padding: 0 !important;
}

.bp-cockpit-display.bonus {
    color: var(--color-digital-orange) !important;
}

.bp-row-unit {
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
    font-size: 10px;
    font-weight: 800;
    color: var(--color-abyssal-ink);
    opacity: 0.5;
}

.bp-cockpit-separator {
    height: 1px;
    border-top: 1px dashed rgba(255, 255, 255, 0.1);
}

/* Scoreboard Panel */
.bp-scoreboard-panel {
    position: relative;
    background: rgba(252, 80, 0, 0.04);
    border: 1px solid rgba(252, 80, 0, 0.15);
    border-radius: var(--radius-2xl);
    padding: 16px 20px;
    overflow: hidden;
}

.bp-scoreboard-bg {
    position: absolute;
    inset: 0;
    background: repeating-linear-gradient(0deg, rgba(252, 80, 0, 0.01) 0px, rgba(252, 80, 0, 0.01) 1px, transparent 1px, transparent 4px);
    z-index: 0;
}

.bp-scoreboard-header {
    position: relative;
    z-index: 1;
}

.bp-scoreboard-label {
    font-size: 11px;
    font-weight: 900;
    color: var(--color-digital-orange);
    text-transform: uppercase;
    letter-spacing: 1px;
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
}

.bp-scoreboard-glow-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--color-digital-orange);
    box-shadow: 0 0 10px var(--color-digital-orange);
}

.bp-scoreboard-value-wrap {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 10px;
}

.bp-bolt-icon {
    font-size: 22px;
    color: var(--color-digital-orange);
    animation: lightningFlicker 3s infinite;
}

.bp-scoreboard-display {
    flex: 1;
    background: transparent !important;
    border: none !important;
    outline: none !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
    color: var(--color-digital-orange) !important;
    font-size: 30px !important;
    font-weight: 900 !important;
    padding: 0 !important;
    text-shadow: 0 0 15px rgba(252, 80, 0, 0.2);
    width: 100%;
}

.bp-scoreboard-unit {
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
    font-size: 12px;
    font-weight: 900;
    color: var(--color-digital-orange);
    opacity: 0.6;
}

/* Submit CTA button */
.bp-cyber-submit-btn {
    position: relative;
    width: 100%;
    height: 56px;
    border-radius: var(--radius-inputs);
    border: none;
    background: var(--color-digital-orange);
    color: var(--color-pure-white);
    font-family: var(--font-dm-sans);
    font-size: 15px;
    font-weight: var(--font-weight-medium);
    text-transform: uppercase;
    letter-spacing: 1.5px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 16px 36px rgba(252, 80, 0, 0.24);
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.bp-cyber-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 20px 48px rgba(252, 80, 0, 0.38);
    background: #e65b00;
}

.bp-cyber-submit-btn:active {
    transform: translateY(1px);
}

.btn-shine {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    transition: all 0.6s ease;
}

.bp-cyber-submit-btn:hover .btn-shine {
    left: 100%;
}

/* Animations */
@keyframes flowLight {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

@keyframes statusPulse {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.4); opacity: 0.5; }
    100% { transform: scale(1); opacity: 1; }
}

@keyframes lightningFlicker {
    0%, 100% { opacity: 1; filter: drop-shadow(0 0 5px rgba(223, 255, 0, 0.8)); }
    45% { opacity: 1; }
    50% { opacity: 0.4; }
    55% { opacity: 0.8; }
    60% { opacity: 0.2; }
    65% { opacity: 1; }
}

/* responsive overrides */
@media (max-width: 991px) {
    .bp-timeline-line {
        display: none;
    }
    .bp-timeline-steps {
        flex-direction: column;
        gap: 16px;
        align-items: flex-start;
    }
    .bp-t-step {
        width: 100%;
        flex-direction: row;
        gap: 14px;
        text-align: left;
    }
    .bp-t-number {
        margin-bottom: 0;
    }
    .bp-tier-card, .bp-cyber-calc-card {
        padding: 28px !important;
    }
}

/* Immersive Video Banner Section */
.cinema-showcase-section {
    position: relative;
    padding: var(--spacing-56) 0;
}

.cinema-banner {
    position: relative;
    margin: var(--spacing-40);
    border-radius: var(--radius-3xl-3);
    overflow: hidden;
    min-height: 580px;
    display: flex;
    align-items: flex-end;
    box-shadow: 0 40px 100px rgba(7, 6, 7, 0.12);
}

.cinema-bg-video {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}

.cinema-banner-overlay {
    position: absolute;
    inset: 0;
    z-index: 1;
    background: linear-gradient(0deg, rgba(7, 6, 7, 0.88) 0%, rgba(7, 6, 7, 0.45) 45%, rgba(7, 6, 7, 0.12) 100%);
}

.cinema-banner-content {
    position: relative;
    z-index: 2;
    width: 100%;
    padding: var(--spacing-64) var(--spacing-56);
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: var(--spacing-40);
}

.cinema-content-left {
    max-width: 560px;
}

.cinema-content-right {
    flex-shrink: 0;
}

.cinema-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: var(--color-digital-orange);
    border: 1px solid var(--color-digital-orange);
    padding: 6px 14px;
    border-radius: var(--radius-full);
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--color-pure-white);
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
}

.live-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--color-pure-white);
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.6);
    animation: cinemaPulse 1.8s infinite;
}

@keyframes cinemaPulse {
    0% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.6); }
    70% { box-shadow: 0 0 0 8px rgba(255, 255, 255, 0); }
    100% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0); }
}

.cinema-banner-title {
    color: var(--color-pure-white);
    font-family: var(--font-pp-neue-corp-compact-ultrabold);
    font-size: clamp(34px, 5vw, 64px);
    font-weight: 900;
    line-height: 1.05;
    text-transform: uppercase;
    letter-spacing: -0.5px;
    margin: var(--spacing-16) 0;
}

.cinema-banner-title .text-orange {
    color: var(--color-digital-orange);
}

.cinema-banner-desc {
    color: rgba(255, 255, 255, 0.85);
    font-size: var(--text-body);
    line-height: var(--leading-body);
    max-width: 520px;
    margin-bottom: var(--spacing-24);
}

.cinema-chips {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: var(--spacing-12);
}

.cinema-chip {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    border-radius: var(--radius-full);
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.22);
    backdrop-filter: blur(8px);
    color: var(--color-pure-white);
    font-size: 13px;
    font-weight: 600;
    white-space: nowrap;
}

.cinema-chip i {
    color: var(--color-digital-orange);
}

.cinema-cta-btn {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 56px;
    padding: 0 34px;
    border-radius: var(--radius-inputs);
    border: none;
    background: var(--color-digital-orange);
    color: var(--color-pure-white) !important;
    font-family: var(--font-dm-sans);
    font-size: 14px;
    font-weight: var(--font-weight-medium);
    text-transform: uppercase;
    letter-spacing: 1.5px;
    overflow: hidden;
    box-shadow: 0 16px 36px rgba(252, 80, 0, 0.24);
    cursor: pointer;
    text-decoration: none !important;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.cinema-cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 20px 48px rgba(252, 80, 0, 0.38);
    background: #e65b00;
}

.cinema-cta-btn:active {
    transform: translateY(1px);
}

/* Utility Classes */
.bg-orange {
    background-color: var(--color-digital-orange) !important;
}

.text-orange {
    color: var(--color-digital-orange);
}

/* Responsive overrides */
@media (max-width: 991px) {
    .hero-banner-caldera-box {
        margin: var(--spacing-24);
        margin-top: 120px;
        min-height: 500px;
    }

    .hero-banner-caldera-box .container {
        padding: var(--spacing-56) var(--spacing-24);
    }

    .hero-title-caldera {
        font-size: clamp(32px, 4vw, 56px);
    }

    .hero-subtitle-caldera {
        font-size: var(--text-body);
    }

    .hero-buttons-caldera {
        flex-direction: column;
        gap: var(--spacing-12);
    }

    .hero-buttons-caldera a {
        width: 100%;
        justify-content: center;
    }

    .cinema-banner {
        margin: var(--spacing-24);
        min-height: 480px;
    }
    .cinema-banner-content {
        flex-direction: column;
        align-items: flex-start;
        gap: var(--spacing-24);
        padding: var(--spacing-40) var(--spacing-24);
    }
    .cinema-chips {
        align-items: flex-start;
    }
}

@media (max-width: 768px) {
    .hero-banner-caldera-box {
        margin: var(--spacing-16);
        margin-top: 100px;
        min-height: 450px;
    }

    .hero-banner-caldera-box .container {
        padding: var(--spacing-40) var(--spacing-16);
    }

    .hero-badge-caldera {
        font-size: 12px;
        padding: var(--spacing-8) var(--spacing-12);
    }

    .grid-3 {
        grid-template-columns: 1fr;
    }

    .cinema-banner {
        margin: var(--spacing-16);
        min-height: 440px;
    }

    .cinema-banner-content {
        padding: var(--spacing-32) var(--spacing-20);
    }

    /* Why Choose Section Mobile */
    .why-choose-wrapper {
        padding: var(--spacing-24);
    }

    .grid-4-card-system {
        gap: var(--spacing-16);
    }

    .card-system {
        min-height: auto;
        padding: var(--spacing-20) var(--spacing-16);
        gap: var(--spacing-10);
    }

    .card-description {
        font-size: 14px;
    }

    .card-label {
        font-size: 15px;
    }

    .card-icon-top {
        font-size: 26px;
    }

    .btn-section-view {
        width: 100%;
    }
}
</style>
@endpush

@push('scripts')
<!-- Swiper Library CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<script>
$(document).ready(function() {
  // Initialize Swiper Thumbs Gallery Slider
  var swiper = new Swiper(".mySwiper", {
    loop: false,
    spaceBetween: 12,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
      320: { slidesPerView: 2, spaceBetween: 8 },
      575: { slidesPerView: 3, spaceBetween: 10 },
      768: { slidesPerView: 4, spaceBetween: 12 },
      1200: { slidesPerView: 5, spaceBetween: 16 }
    }
  });

  var swiper2 = new Swiper(".mySwiper2", {
    loop: false,
    spaceBetween: 10,
    navigation: {
      nextEl: ".pg-swiper-btn-next",
      prevEl: ".pg-swiper-btn-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });

  // Initialize Horizontal Gaming Carousels for each category row
  document.querySelectorAll('[class*="netflix-swiper-"]').forEach(function(element) {
    var classList = element.className.split(' ');
    var categoryId = classList.find(function(cls) { return cls.indexOf('netflix-swiper-') === 0; }).replace('netflix-swiper-', '');

    new Swiper(element, {
      loop: false,
      slidesPerView: 'auto',
      spaceBetween: 20,
      grabCursor: true,
      mousewheel: {
        forceToAxis: true,
        sensitivity: 1
      },
      navigation: {
        nextEl: ".netflix-next-" + categoryId,
        prevEl: ".netflix-prev-" + categoryId,
      },
      breakpoints: {
        320: { slidesPerView: 1.3, spaceBetween: 14 },
        576: { slidesPerView: 2.3, spaceBetween: 16 },
        768: { slidesPerView: 3, spaceBetween: 18 },
        992: { slidesPerView: 4, spaceBetween: 20 },
        1400: { slidesPerView: 5, spaceBetween: 20 }
      }
    });
  });

  var currency = "{{ session('currency') }}";
  
  function basicpoints(truepoints){
    truepoints = parseFloat(truepoints);
    if (currency === "HKD") {
      truepoints = truepoints / 8;
    } else if (currency === "JPY") {
      truepoints = truepoints / 160;
    }
    return Math.floor(truepoints);
  }
  
  function calpoints(truepoints){
    truepoints = parseFloat(truepoints);
    if (currency === "HKD") {
      switch (true) {
        case (truepoints > 1 && truepoints < 5001):
          truepoints = truepoints;
          break;
        case (truepoints > 5000 && truepoints < 15001):
          truepoints = Math.floor(truepoints * 1.5);
          break;
        case (truepoints > 15000 && truepoints < 25001):
          truepoints = Math.floor(truepoints * 2);
          break;
        case (truepoints >= 25001):
          truepoints = Math.floor(truepoints * 5);
          break;
        default:
          truepoints = truepoints;
          break;
      }
      truepoints = truepoints / 8;
    } else if (currency === "JPY") {
      switch (true) {
        case (truepoints > 1 && truepoints < 100001):
          truepoints = truepoints;
          break;
        case (truepoints > 100000 && truepoints < 300001):
          truepoints = Math.floor(truepoints * 1.5);
          break;
        case (truepoints > 300000 && truepoints < 500001):
          truepoints = Math.floor(truepoints * 2);
          break;
        case (truepoints >= 500001):
          truepoints = Math.floor(truepoints * 5);
          break;
        default:
          truepoints = truepoints;
          break;
      }
      truepoints = truepoints / 160;
    } else if (currency === "USD") {
      switch (true) {
        case (truepoints > 1 && truepoints < 631):
          truepoints = truepoints;
          break;
        case (truepoints > 630 && truepoints < 1881):
          truepoints = Math.floor(truepoints * 1.5);
          break;
        case (truepoints > 1880 && truepoints < 3126):
          truepoints = Math.floor(truepoints * 2);
          break;
        case (truepoints >= 3125):
          truepoints = Math.floor(truepoints * 5);
          break;
        default:
          truepoints = truepoints;
          break;
      }
    }
    return Math.floor(truepoints);
  }
  
  $('#price').on('keyup', function() {
    var value = $(this).val();
    $('#points').val(basicpoints(value));
    $('#bonus_points').val(calpoints(value) - basicpoints(value));
    $('#total_points').val(calpoints(value));
  });
  
  if ($('#price').val()) {
    $('#price').trigger('keyup');
  }
});
</script>
@endpush
