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
   CALDERA CART SYSTEM — Premium Gaming Design System
   ============================================================================ */

.cart-section {
    padding: 0 !important;
    background: transparent !important;
    margin: var(--spacing-40);
    margin-top: var(--spacing-56);
    margin-bottom: var(--spacing-80) !important;
    min-height: 50vh;
}

.cart-continue {
    margin-bottom: var(--spacing-32) !important;
}

.cart-continue-btn {
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

.cart-continue-btn:hover {
    background: var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    box-shadow: none !important;
    transform: translateY(2px) !important;
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

/* Cart Grid */
.cart-grid {
    display: flex !important;
    flex-direction: column !important;
    gap: var(--spacing-32) !important;
}

/* Cart Table */
.cart-table {
    background: var(--color-pure-white) !important;
    border-radius: 20px !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    box-shadow: 0 20px 50px rgba(7, 6, 7, 0.06) !important;
    overflow: hidden !important;
}

.cart-table-head,
.cart-table-row {
    display: grid !important;
    grid-template-columns: 1fr 180px 140px 120px !important;
    gap: var(--spacing-16) !important;
    align-items: center !important;
    padding: var(--spacing-20) var(--spacing-40) !important;
}

.cart-table-head {
    background: var(--color-abyssal-ink) !important;
    border-bottom: 3px solid var(--color-abyssal-ink) !important;
    padding: var(--spacing-16) var(--spacing-40) !important;
}

.cart-th {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 13px !important;
    font-weight: 800 !important;
    letter-spacing: 1px !important;
    text-transform: uppercase !important;
    color: var(--color-pure-white) !important;
}

.cart-th-center {
    text-align: center !important;
}

.cart-table-row {
    border-bottom: 2px solid rgba(7, 6, 7, 0.08) !important;
    transition: background 0.3s ease !important;
}

.cart-table-row:last-child {
    border-bottom: none !important;
}

.cart-table-row:hover {
    background: var(--color-ash-white) !important;
}

.cart-col-product {
    display: flex !important;
    align-items: center !important;
    gap: var(--spacing-16) !important;
}

.cart-col {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

@media (max-width: 768px) {
    .cart-table-head {
        display: none !important;
    }

    .cart-table-row {
        grid-template-columns: 1fr !important;
        gap: var(--spacing-12) !important;
        padding: var(--spacing-20) !important;
        align-items: flex-start !important;
        border-bottom: 2px solid var(--color-abyssal-ink) !important;
    }

    .cart-table-row:last-child {
        border-bottom: none !important;
    }

    .cart-col-product {
        width: 100% !important;
        margin-bottom: var(--spacing-8) !important;
    }

    .cart-col-price, .cart-col-total, .cart-col-action {
        justify-content: space-between !important;
        width: 100% !important;
    }
}

.cart-product-image {
    width: 84px !important;
    height: 60px !important;
    border-radius: 12px !important;
    overflow: hidden !important;
    background: var(--color-basalt-canvas) !important;
    border: 2px solid var(--color-abyssal-ink) !important;
}

.cart-product-image img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
}

.cart-product-points-only {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 4px !important;
    background: rgba(252, 80, 0, 0.1) !important;
    border: 2px dashed rgba(252, 80, 0, 0.4) !important;
}

.cart-product-points-only i {
    font-size: 16px !important;
    color: var(--color-digital-orange) !important;
}

.cart-product-points-only .points-badge {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 10px !important;
    font-weight: 800 !important;
    color: var(--color-digital-orange) !important;
    text-transform: uppercase !important;
}

.cart-product-title {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 18px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
    margin: 0 !important;
    line-height: 1.2 !important;
    text-align: left !important;
    text-transform: uppercase !important;
}

.cart-product-price {
    font-family: var(--font-dm-sans) !important;
    font-size: 14px !important;
    color: rgba(7, 6, 7, 0.6) !important;
    font-weight: 600 !important;
    text-align: center !important;
    white-space: nowrap !important;
}

.cart-product-price span {
    color: var(--color-digital-orange) !important;
    font-weight: 700 !important;
}

.cart-product-total {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 20px !important;
    font-weight: 900 !important;
    color: var(--color-abyssal-ink) !important;
    line-height: 1 !important;
    white-space: nowrap !important;
}

.cart-cell-label {
    display: none !important;
}

@media (max-width: 768px) {
    .cart-cell-label {
        display: inline-block !important;
        font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
        font-size: 12px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important;
        color: rgba(7, 6, 7, 0.4) !important;
        margin-right: 6px !important;
    }
}

.cart-remove-btn {
    display: inline-flex !important;
    align-items: center !important;
    gap: 6px !important;
    background: rgba(239, 68, 68, 0.1) !important;
    border: 2px solid #ef4444 !important;
    color: #ef4444 !important;
    padding: 8px 16px !important;
    border-radius: var(--radius-buttons) !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 11px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    text-decoration: none !important;
    transition: all 0.2s ease !important;
    cursor: pointer !important;
}

.cart-remove-btn:hover {
    background: #ef4444 !important;
    color: var(--color-pure-white) !important;
    box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2) !important;
}

/* Empty Cart State */
.cart-empty {
    text-align: center !important;
    padding: var(--spacing-64) var(--spacing-32) !important;
    background: var(--color-pure-white) !important;
    border-radius: 20px !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    box-shadow: 0 20px 50px rgba(7, 6, 7, 0.06) !important;
}

.cart-empty-icon {
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

.cart-empty h3 {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 24px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
    text-transform: uppercase !important;
    margin-bottom: var(--spacing-12) !important;
}

.cart-empty p {
    color: rgba(7, 6, 7, 0.6) !important;
    font-size: 15px !important;
    margin-bottom: var(--spacing-28) !important;
}

.cart-empty-btn {
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

.cart-empty-btn:hover {
    background: var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    box-shadow: none !important;
}

/* Cart Summary Sidebar */
.cart-summary {
    background: var(--color-pure-white) !important;
    border-radius: 20px !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    box-shadow: 0 20px 50px rgba(7, 6, 7, 0.06) !important;
    overflow: hidden !important;
    max-width: 600px !important;
    width: 100% !important;
    margin: 0 auto !important;
}

.cart-summary-body {
    padding: var(--spacing-32) !important;
}

.cart-summary-items {
    display: flex !important;
    flex-direction: column !important;
    gap: var(--spacing-16) !important;
    margin-bottom: var(--spacing-24) !important;
    padding-bottom: var(--spacing-24) !important;
    border-bottom: 1px solid rgba(7, 6, 7, 0.08) !important;
}

.cart-summary-item {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
}

.cart-summary-item-label {
    font-family: var(--font-dm-sans) !important;
    font-size: 13.5px !important;
    font-weight: 600 !important;
    color: rgba(7, 6, 7, 0.5) !important;
}

.cart-summary-item-value {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 15px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
}

.cart-summary-totals {
    display: flex !important;
    flex-direction: column !important;
    gap: 12px !important;
    margin-bottom: var(--spacing-28) !important;
}

.cart-summary-row {
    display: flex !important;
    justify-content: space-between !important;
    align-items: center !important;
}

.cart-summary-row.total {
    padding-top: var(--spacing-16) !important;
    border-top: 2px solid rgba(7, 6, 7, 0.08) !important;
}

.cart-summary-row.total .label {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 16px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
    text-transform: uppercase !important;
}

.cart-summary-row.total .value {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 28px !important;
    font-weight: 900 !important;
    color: var(--color-digital-orange) !important;
    line-height: 1 !important;
}

.cart-checkout-btn {
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
    font-size: 15px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 1.2px !important;
    text-decoration: none !important;
    transition: all 0.2s ease !important;
    cursor: pointer !important;
    box-shadow: 0 10px 30px rgba(252, 80, 0, 0.25) !important;
}

.cart-checkout-btn:hover {
    background: var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    box-shadow: none !important;
}

.cart-continue-shopping {
    display: block !important;
    text-align: center !important;
    margin-top: 18px !important;
    color: rgba(7, 6, 7, 0.5) !important;
    font-size: 13.5px !important;
    font-weight: 700 !important;
    text-decoration: none !important;
    transition: color 0.3s ease !important;
}

.cart-continue-shopping:hover {
    color: var(--color-digital-orange) !important;
    text-decoration: underline !important;
}

@media (max-width: 768px) {
    .cart-section {
        padding: 0 !important;
        margin: var(--spacing-16);
    }
    
    .cart-summary {
        position: static !important;
    }
}
</style>
@endpush

@section('main-content')

<!-- Hero / Title Band -->
<div class="about-hero-section">
  <div class="about-hero-wrapper">
    <h1 class="about-hero-title">
      {{ __('common.your_cart') }}
    </h1>
    
    <div class="about-breadcrumb-capsule">
      <a href="{{ route('home') }}">
        <i class="fas fa-home me-2"></i>{{ __('common.home') }}
      </a>
      <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
      <span class="about-breadcrumb-current">{{ __('common.cart') }}</span>
    </div>
  </div>
</div>

<!-- Cart Section -->
<section class="cart-section contact-cart-page">
    <div class="container">

        @if(Helper::cartCount())
            <div class="cart-continue">
                <a href="{{ route('product-lists') }}" class="cart-continue-btn">
                    <i class="fas fa-arrow-left me-2"></i>
                    {{ __('common.continue_shopping') }}
                </a>
            </div>
            
            <div class="cart-grid">
                <!-- Cart Products Table -->
                <div class="cart-table">
                    <div class="cart-table-head">
                        <span class="cart-th">{{ __('common.product') }}</span>
                        <span class="cart-th cart-th-center">{{ __('common.price') }}</span>
                        <span class="cart-th cart-th-center">{{ __('common.total') }}</span>
                        <span class="cart-th cart-th-center">{{ __('common.remove') }}</span>
                    </div>
                    @foreach(Helper::getAllProductFromCart() as $key => $cart)
                        @php
                            $user_id = auth()->check() ? auth()->id() : session('guest');
                            $cartItem = App\Models\Cart::where('user_id', $user_id)->where('order_id', null)->where('id', $cart->id)->first();
                            $points = $cartItem ? $cartItem->points : 0;
                            $hasProduct = !empty($cart['photo']) && $cart['photo'] !== null;
                        @endphp
                        <div class="cart-table-row">
                            <div class="cart-col-product">
                                @if($hasProduct)
                                <div class="cart-product-image">
                                    <img src="{{ asset($cart['photo']) }}" alt="{{ $cleanText($cart['title']) }}" onerror="this.style.display='none'">
                                </div>
                                @else
                                <div class="cart-product-image cart-product-points-only">
                                    <i class="fas fa-star"></i>
                                    <span class="points-badge">{{ $points }} {{ __('common.points') }}</span>
                                </div>
                                @endif
                                <h3 class="cart-product-title">{{ $cleanText($cart['title']) }}</h3>
                            </div>
                            <div class="cart-col cart-col-price">
                                <span class="cart-product-price">
                                    {{ $points }} {{ __('common.points') }} ×
                                    <span>{{ Helper::getCurrencySymbol(session('currency')) }}{{ number_format($cart['price'], session('currency')=='JPY' ? 0 : 2) }}</span>
                                </span>
                            </div>
                            <div class="cart-col cart-col-total">
                                <span class="cart-cell-label">{{ __('common.total') }}:</span>
                                <span class="cart-product-total">
                                    {{ Helper::getCurrencySymbol(session('currency')) }}{{ number_format($cart['amount'], session('currency')=='JPY' ? 0 : 2) }}
                                </span>
                            </div>
                            <div class="cart-col cart-col-action">
                                <a href="{{ route('cart-delete', $cart->id) }}" class="cart-remove-btn">
                                    <i class="fas fa-trash-alt me-2"></i>
                                    {{ __('common.remove') }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Cart Summary Sidebar -->
                <div class="cart-summary">
                    <div class="cart-summary-body">
                        <!-- Summary Section on Top -->
                        <h3 class="cart-summary-title mb-4" style="font-family: var(--font-pp-neue-corp-compact-ultrabold) !important; font-size: 20px !important; font-weight: 800 !important; color: var(--color-abyssal-ink) !important; text-transform: uppercase !important; letter-spacing: 1px !important; text-align: center !important; display: flex !important; align-items: center !important; justify-content: center !important; gap: 10px !important; margin: 0 0 var(--spacing-24) 0 !important;">
                            <i class="fas fa-shopping-basket" style="color: var(--color-digital-orange) !important;"></i>
                            {{ __('common.cart_summary') }}
                        </h3>

                        <div class="cart-summary-items">
                            <div class="cart-summary-item">
                                <span class="cart-summary-item-label">{{ __('common.items') }}</span>
                                <span class="cart-summary-item-value">{{ Helper::cartCount() }}</span>
                            </div>
                            <div class="cart-summary-item">
                                <span class="cart-summary-item-label">{{ __('common.total_points') }}:</span>
                                <span class="cart-summary-item-value">
                                    @php
                                        $totalPoints = 0;
                                        $user_id = auth()->check() ? auth()->id() : session('guest');
                                        foreach(Helper::getAllProductFromCart() as $cart) {
                                            $cartItem = App\Models\Cart::where('user_id', $user_id)->where('order_id', null)->where('id', $cart->id)->first();
                                            $totalPoints += $cartItem ? ($cartItem->points ?? 0) : 0;
                                        }
                                        echo $totalPoints;
                                    @endphp
                                </span>
                            </div>
                        </div>

                        <div class="cart-summary-totals">
                            <div class="cart-summary-row total">
                                <span class="label">{{ __('common.total') }}:</span>
                                <span class="value">{{ Helper::getCurrencySymbol(session('currency')) }}{{ number_format(Helper::totalCartPrice(), session('currency')=='JPY' ? 0 : 2) }}</span>
                            </div>
                        </div>

                        <!-- Checkout Button Section Bottom Centered -->
                        <div style="display: flex; justify-content: center; width: 100%; margin-top: var(--spacing-24);">
                            <a href="{{ route('checkout') }}" class="cart-checkout-btn">
                                <i class="fas fa-lock me-2"></i>
                                {{ __('common.proceed_to_checkout') }}
                            </a>
                        </div>

                        <a href="{{ route('product-lists') }}" class="cart-continue-shopping">
                            {{ __('common.continue_shopping') }}
                        </a>
                    </div>
                </div>
            </div>
        @else
            <!-- Empty Cart State -->
            <div class="cart-empty">
                <div class="cart-empty-icon">
                    <i class="fas fa-shopping-cart" style="font-size: 36px; color: var(--color-digital-orange);"></i>
                </div>
                <h3>{{ __('common.no_cart_available') }}</h3>
                <p>{{ __('common.empty_cart_message') }}</p>
                <a href="{{ route('product-lists') }}" class="cart-empty-btn">
                    <i class="fas fa-search me-2"></i>
                    {{ __('common.browse_products') }}
                </a>
            </div>
        @endif
    </div>
</section>

@endsection


