@extends('frontend.layouts.main')
@php
    $cleanText = function($text) {
        $search = [
            'farming', 'Farming', 'FARMING',
            'farm', 'Farm', 'FARM',
            'aura', 'Aura', 'AURA',
            'tournament', 'Tournament', 'TOURNAMENT',
            'tournamet', 'Tournamet', 'TOURNAMET'
        ];
        $replace = [
            'progression', 'Progression', 'PROGRESSION',
            'collect', 'Collect', 'COLLECT',
            'presence', 'Presence', 'PRESENCE',
            'championship', 'Championship', 'CHAMPIONSHIP',
            'championship', 'Championship', 'CHAMPIONSHIP'
        ];
        return str_replace($search, $replace, $text);
    };
@endphp
@section('title', 'Cart')

@push('styles')
<style>
/* ============================================================================
   CALDERA GAMECART SYSTEM — Premium Gaming Design System
   ============================================================================ */

.gamecart-section {
    padding: 0 !important;
    background: transparent !important;
    margin: var(--spacing-40);
    margin-top: var(--spacing-56);
    margin-bottom: var(--spacing-80) !important;
    min-height: 50vh !important;
}

@media (max-width: 768px) {
    .gamecart-section {
        margin: var(--spacing-16) !important;
        margin-top: var(--spacing-32) !important;
        margin-bottom: var(--spacing-48) !important;
    }
}

/* Top bar: credits */
.gamecart-topbar {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    flex-wrap: wrap !important;
    gap: 16px !important;
    margin-bottom: var(--spacing-32) !important;
}

.gamecart-continue-btn {
    display: inline-flex !important;
    align-items: center !important;
    gap: var(--spacing-8) !important;
    background: var(--color-ash-white) !important;
    border: 2px solid var(--color-abyssal-ink) !important;
    border-radius: var(--radius-buttons) !important;
    color: var(--color-abyssal-ink) !important;
    padding: 12px 24px !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 13px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 1px !important;
    text-decoration: none !important;
    box-shadow: 0 4px 0 var(--color-abyssal-ink) !important;
    transition: all 0.2s ease !important;
}

.gamecart-continue-btn:hover {
    background: var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    box-shadow: none !important;
    transform: translateY(2px) !important;
}

.gamecart-credits {
    display: inline-flex !important;
    align-items: center !important;
    gap: 10px !important;
    background: var(--color-pure-white) !important;
    border: 2px solid var(--color-abyssal-ink) !important;
    border-radius: var(--radius-inputs) !important;
    padding: 12px 20px !important;
    box-shadow: 0 4px 0 rgba(7, 6, 7, 0.05) !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 13px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    color: var(--color-abyssal-ink) !important;
}

.gamecart-credits i {
    color: var(--color-digital-orange) !important;
}

.gamecart-credits b {
    font-size: 16px !important;
    font-weight: 900 !important;
    color: var(--color-digital-orange) !important;
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

/* Layout grid */
.gamecart-grid {
    display: flex !important;
    flex-direction: column !important;
    gap: var(--spacing-32) !important;
}

/* Cards grid */
.gamecart-items {
    display: flex !important;
    flex-direction: column !important;
    gap: var(--spacing-24) !important;
}

/* Horizontal product card */
.game-card {
    display: flex !important;
    flex-direction: row !important;
    background: var(--color-pure-white) !important;
    border-radius: 20px !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    box-shadow: 0 20px 50px rgba(7, 6, 7, 0.06) !important;
    overflow: hidden !important;
    transition: all 0.3s ease !important;
}

.game-card:hover {
    transform: translateY(-2px) !important;
    border-color: var(--color-digital-orange) !important;
    box-shadow: 0 15px 45px rgba(252, 80, 0, 0.15) !important;
}

.game-card-media {
    position: relative !important;
    width: 240px !important;
    min-width: 240px !important;
    height: auto !important;
    overflow: hidden !important;
    background: var(--color-basalt-canvas) !important;
    border-right: 3px solid var(--color-abyssal-ink) !important;
}

.game-card-media img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
}

.game-card-points-badge {
    position: absolute !important;
    top: 12px !important;
    right: 12px !important;
    display: inline-flex !important;
    align-items: center !important;
    gap: 6px !important;
    background: var(--color-abyssal-ink) !important;
    border: 1px solid var(--color-digital-orange) !important;
    border-radius: 8px !important;
    padding: 6px 12px !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 13px !important;
    font-weight: 900 !important;
    color: var(--color-pure-white) !important;
}

.game-card-points-badge i {
    color: var(--color-digital-orange) !important;
}

.game-card-body {
    display: flex !important;
    flex-direction: column !important;
    gap: var(--spacing-16) !important;
    padding: var(--spacing-24) !important;
    flex: 1 !important;
}

.game-card-header-row {
    display: flex !important;
    justify-content: space-between !important;
    align-items: flex-start !important;
    gap: 20px !important;
}

.game-card-title {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 18px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
    margin: 0 !important;
    line-height: 1.3 !important;
    text-decoration: none !important;
    text-transform: uppercase !important;
    transition: color 0.3s ease !important;
}

.game-card-title:hover {
    color: var(--color-digital-orange) !important;
}

.game-card-points-label {
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
}

.game-card-points-label .label {
    font-family: var(--font-dm-sans) !important;
    font-size: 12.5px !important;
    font-weight: 600 !important;
    color: rgba(7, 6, 7, 0.5) !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
}

.game-card-points-label .value {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 18px !important;
    font-weight: 900 !important;
    color: var(--color-digital-orange) !important;
}

/* Optional training block */
.game-training {
    position: relative !important;
    background: rgba(252, 80, 0, 0.06) !important;
    border: 2px solid var(--color-abyssal-ink) !important;
    border-radius: 12px !important;
    padding: 14px 16px !important;
}

.game-training-title {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 13.5px !important;
    font-weight: 800 !important;
    color: var(--color-digital-orange) !important;
    margin: 0 0 8px 0 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    padding-right: 22px !important;
}

.game-training-calc {
    font-family: var(--font-dm-sans) !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    color: var(--color-abyssal-ink) !important;
    margin: 0 0 4px 0 !important;
}

.game-training-total {
    font-family: var(--font-dm-sans) !important;
    font-size: 12px !important;
    font-weight: 600 !important;
    color: rgba(7, 6, 7, 0.6) !important;
}

.game-training-total b {
    color: var(--color-digital-orange) !important;
    font-weight: 800 !important;
}

.game-training-remove {
    position: absolute !important;
    top: 10px !important;
    right: 12px !important;
    width: 20px !important;
    height: 20px !important;
    border-radius: 50% !important;
    background: var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    text-decoration: none !important;
    font-size: 10px !important;
    transition: all 0.2s ease !important;
    border: 1px solid var(--color-abyssal-ink) !important;
}

.game-training-remove:hover {
    background: var(--color-digital-orange) !important;
    border-color: var(--color-digital-orange) !important;
    transform: scale(1.1) !important;
}

/* Card footer / remove */
.game-card-footer {
    margin-top: auto !important;
    display: flex !important;
    justify-content: flex-end !important;
}

.game-card-remove {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 8px !important;
    background: rgba(239, 68, 68, 0.1) !important;
    border: 2px solid #ef4444 !important;
    color: #ef4444 !important;
    padding: 10px 20px !important;
    border-radius: var(--radius-buttons) !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 11.5px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    text-decoration: none !important;
    transition: all 0.2s ease !important;
    cursor: pointer !important;
}

.game-card-remove:hover {
    background: #ef4444 !important;
    color: var(--color-pure-white) !important;
    box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2) !important;
}

/* Summary sidebar */
.gamecart-summary {
    background: var(--color-pure-white) !important;
    border-radius: 20px !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    box-shadow: 0 20px 50px rgba(7, 6, 7, 0.06) !important;
    overflow: hidden !important;
    max-width: 600px !important;
    width: 100% !important;
    margin: 0 auto !important;
}

.gamecart-summary-body {
    padding: var(--spacing-32) !important;
}

.gamecart-summary-row {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
}

.gamecart-summary-row.items {
    padding-bottom: 18px !important;
    margin-bottom: 18px !important;
    border-bottom: 1px solid rgba(7, 6, 7, 0.08) !important;
}

.gamecart-summary-row .label {
    font-family: var(--font-dm-sans) !important;
    font-size: 13.5px !important;
    font-weight: 600 !important;
    color: rgba(7, 6, 7, 0.5) !important;
}

.gamecart-summary-row .value {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 15px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
}

.gamecart-summary-row.total {
    padding-top: 18px !important;
    margin-top: 18px !important;
    border-top: 2px solid rgba(7, 6, 7, 0.08) !important;
}

.gamecart-summary-row.total .label {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 15px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
    text-transform: uppercase !important;
}

.gamecart-summary-row.total .value {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 26px !important;
    font-weight: 900 !important;
    color: var(--color-digital-orange) !important;
    line-height: 1 !important;
}

.gamecart-summary-row.total .value small {
    font-size: 12px !important;
    font-weight: 700 !important;
    color: rgba(7, 6, 7, 0.5) !important;
    margin-left: 4px !important;
}

.gamecart-purchase-btn {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 10px !important;
    width: 100% !important;
    background: var(--color-digital-orange) !important;
    border: 2px solid var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    padding: 16px 24px !important;
    border-radius: var(--radius-buttons) !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 14px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 1.2px !important;
    text-decoration: none !important;
    transition: all 0.2s ease !important;
    cursor: pointer !important;
    box-shadow: 0 10px 30px rgba(252, 80, 0, 0.25) !important;
}

.gamecart-purchase-btn:hover {
    background: var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    box-shadow: none !important;
}

/* Empty state */
.gamecart-empty {
    text-align: center !important;
    padding: var(--spacing-64) var(--spacing-32) !important;
    background: var(--color-pure-white) !important;
    border-radius: 20px !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    box-shadow: 0 20px 50px rgba(7, 6, 7, 0.06) !important;
}

.gamecart-empty-icon {
    width: 80px !important;
    height: 80px !important;
    background: rgba(252, 80, 0, 0.1) !important;
    border: 2px solid var(--color-abyssal-ink) !important;
    border-radius: var(--radius-full) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    margin: 0 auto var(--spacing-24) !important;
}

.gamecart-empty h3 {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 24px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
    text-transform: uppercase !important;
    margin-bottom: var(--spacing-12) !important;
}

.gamecart-empty p {
    color: rgba(7, 6, 7, 0.6) !important;
    font-size: 15px !important;
    margin-bottom: var(--spacing-28) !important;
}

.gamecart-empty-btn {
    display: inline-flex !important;
    align-items: center !important;
    gap: 10px !important;
    background: var(--color-digital-orange) !important;
    border: 2px solid var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    padding: 14px 28px !important;
    border-radius: var(--radius-buttons) !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 13px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 1.2px !important;
    box-shadow: 0 10px 30px rgba(252, 80, 0, 0.25) !important;
    transition: all 0.2s ease !important;
}

.gamecart-empty-btn:hover {
    background: var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    box-shadow: none !important;
}

@media (max-width: 768px) {
    .gamecart-section {
        padding: 0 !important;
        margin: var(--spacing-16);
    }
    .game-card {
        flex-direction: column !important;
    }
    .game-card-media {
        width: 100% !important;
        min-width: 0 !important;
        aspect-ratio: 16 / 10 !important;
        border-right: none !important;
        border-bottom: 3px solid var(--color-abyssal-ink) !important;
    }
    .game-card-footer {
        justify-content: flex-start !important;
    }
    .game-card-remove {
        width: 100% !important;
    }
}
</style>
@endpush

@section('main-content')
<main>
    <!-- Hero / Title Band -->
    <div class="about-hero-section">
      <div class="about-hero-wrapper">
        <h1 class="about-hero-title">
          {{ __('common.gamecart_title') }}
        </h1>

        <div class="about-breadcrumb-capsule">
          <a href="{{ route('home') }}">
            <i class="fas fa-home me-2"></i>{{ __('common.home') }}
          </a>
          <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
          <span class="about-breadcrumb-current">{{ __('common.gamecart_title') }}</span>
        </div>
      </div>
    </div>

    <!-- Game Cart Section -->
    <section class="gamecart-section">
        <div class="container">
            @php
                $points = DB::table('users')->where('id', auth()->user()->id)->pluck('points')->first();
            @endphp

            <!-- Top bar -->
            <div class="gamecart-topbar">
                <a href="{{ route('home') }}" class="gamecart-continue-btn">
                    <i class="fas fa-arrow-left me-2"></i>
                    {{ __('common.continue_shopping') }}
                </a>

                @auth
                <span class="gamecart-credits">
                    <i class="fas fa-star me-2"></i>
                    {{ __('common.available_credits') }}: <b class="dash-epnt">{{ $points }}</b>
                </span>
                @endauth
            </div>

            @if(Helper::cartCount())
                <div class="gamecart-grid">
                    <!-- Cards -->
                    <div class="gamecart-items">
                        @foreach(Helper::getAllProductFromCart()->where('order_id', null) as $key => $cart)
                            @php
                                $photo = explode(',', $cart->product['photo']);
                                $product_detail = App\Models\Product::getProductBySlug($cart->product->slug);
                                $m = Helper::getProductPriceByCurrency(session('currency'), $cart->product);

                                if(session('currency') == 'HKD') {
                                    $a = $cart['price'] - $product_detail->price_hk;
                                    $hours = $a / 257; $basic = $product_detail->price_hk;
                                    $perhour = 257;
                                }
                                elseif(session('currency') == 'JPY') {
                                    $a = $cart['price'] - $product_detail->price_jp;
                                    $hours = $a / 5000; $basic = $product_detail->price_jp;
                                    $perhour = 5000;
                                }
                                elseif(session('currency') == 'USD') {
                                    $a = $cart['price'] - $product_detail->price;
                                    $hours = $a / 20; $basic = $product_detail->price;
                                    $perhour = 20;
                                }

                                $a = $cart['price'] - $product_detail->price;
                                $hours = $a / 20; $basic = $product_detail->price;
                                $perhour = 20;
                            @endphp

                            <div class="game-card">
                                <div class="game-card-media">
                                    <a href="{{ route('product-detail', $cart->product->slug) }}">
                                        <img src="{{ asset($photo[0]) }}" alt="{{ $cleanText($cart->product['title']) }}" onerror="this.style.display='none'">
                                    </a>
                                    <span class="game-card-points-badge">
                                        <i class="fas fa-star me-2"></i>
                                        {{ number_format($cart['price'], 0) }}
                                    </span>
                                </div>

                                <div class="game-card-body">
                                    <div class="game-card-header-row">
                                        <a href="{{ route('product-detail', $cart->product->slug) }}" class="game-card-title">
                                            {{ $cleanText($cart->product['title']) }}
                                        </a>

                                        <div class="game-card-points-label">
                                            <span class="label">{{ __('common.points') }}</span>
                                            <span class="value">{{ number_format($cart['price'], 0) }}</span>
                                        </div>
                                    </div>

                                    @if($a > 0)
                                    <div class="game-training">
                                        <a href="{{ route('trainingdelete', $cart->id) }}" class="game-training-remove" title="{{ __('common.remove') }}">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        <h5 class="game-training-title">{{ $hours }} {{ __('common.coaching_hours_unit') }}</h5>
                                        <p class="game-training-calc">{{ number_format($basic, 0) }} + ( {{ $hours }} × {{ number_format($perhour, 0) }} )</p>
                                        <span class="game-training-total">{{ __('common.total') }} = <b>{{ number_format($cart['price'], 0) }} {{ __('common.points') }}</b></span>
                                    </div>
                                    @endif

                                    <div class="game-card-footer">
                                        <a href="{{ route('cart-delete', $cart->id) }}" class="game-card-remove">
                                            <i class="fas fa-trash-alt me-2"></i>
                                            {{ __('common.remove') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Summary -->
                    <div class="gamecart-summary">
                        <div class="gamecart-summary-body">
                            <!-- Summary Section on Top -->
                            <h3 class="gamecart-summary-title mb-4" style="font-family: var(--font-pp-neue-corp-compact-ultrabold) !important; font-size: 20px !important; font-weight: 800 !important; color: var(--color-abyssal-ink) !important; text-transform: uppercase !important; letter-spacing: 1px !important; text-align: center !important; display: flex !important; align-items: center !important; justify-content: center !important; gap: 10px !important; margin: 0 0 var(--spacing-24) 0 !important;">
                                <i class="fas fa-shopping-basket" style="color: var(--color-digital-orange) !important;"></i>
                                {{ __('common.cart_summary') }}
                            </h3>

                            @php
                                $total_amount = Helper::totalCartPrice();
                            @endphp
                            <div class="gamecart-summary-row items">
                                <span class="label">{{ __('common.items') }}</span>
                                <span class="value">{{ Helper::cartCount() }}</span>
                            </div>
                            @auth
                            <div class="gamecart-summary-row mb-3">
                                <span class="label">{{ __('common.available_credits') }}</span>
                                <span class="value">{{ number_format($points, 0) }}</span>
                            </div>
                            @endauth
                            <div class="gamecart-summary-row total">
                                <span class="label">{{ __('common.total') }} {{ __('common.points') }}</span>
                                <span class="value">{{ number_format($total_amount, 0) }}<small>{{ __('common.points') }}</small></span>
                            </div>

                            <!-- Checkout Button Section Bottom Centered -->
                            <div style="display: flex; justify-content: center; width: 100%; margin-top: var(--spacing-24);">
                                <a href="{{ route('buygame') }}" class="gamecart-purchase-btn">
                                    <i class="fas fa-lock me-2"></i>
                                    {{ __('common.purchase_services') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- Empty State -->
                <div class="gamecart-empty">
                    <div class="gamecart-empty-icon">
                        <i class="fas fa-shopping-cart" style="font-size: 36px; color: var(--color-digital-orange);"></i>
                    </div>
                    <h3>{{ __('common.gamecart_empty_title') }}</h3>
                    <p>{{ __('common.gamecart_empty_message') }}</p>
                    <a href="{{ route('home') }}" class="gamecart-empty-btn">
                        <i class="fas fa-arrow-left me-2"></i>
                        {{ __('common.continue_shopping') }}
                    </a>
                </div>
            @endif
        </div>
    </section>
</main>
@endsection
