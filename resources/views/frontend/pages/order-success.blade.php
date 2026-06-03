@extends('frontend.layouts.main')
@section('title', 'Order Success')
@push('styles')
<style>
/* Order Success - Gaming HUD Theme */
.order-result-section {
    padding: 0 !important;
    background: transparent !important;
    margin: var(--spacing-40);
    margin-top: var(--spacing-56);
}

/* Hero / Title Band */
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

.order-result-card {
    max-width: 720px !important;
    margin: 0 auto !important;
    background: var(--color-pure-white) !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    border-radius: var(--radius-cards) !important;
    box-shadow: 0 20px 50px rgba(7, 6, 7, 0.06) !important;
    overflow: hidden !important;
    position: relative !important;
}

.order-result-card::before {
    content: '' !important;
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    height: 6px !important;
    background: #22c55e !important;
}

.order-result-head {
    text-align: center !important;
    padding: var(--spacing-48) var(--spacing-40) var(--spacing-32) !important;
}

.order-result-icon {
    width: 96px !important;
    height: 96px !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    margin: 0 auto 24px !important;
    background: #22c55e !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    box-shadow: 0 0 30px rgba(34, 197, 94, 0.3) !important;
}

.order-result-title {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 30px !important;
    font-weight: 900 !important;
    text-transform: uppercase !important;
    letter-spacing: 1px !important;
    color: var(--color-abyssal-ink) !important;
    margin: 0 0 10px !important;
}

.order-result-subtitle {
    font-size: 15px !important;
    color: rgba(7, 6, 7, 0.6) !important;
    margin: 0 !important;
}

.order-result-body {
    padding: 0 var(--spacing-40) var(--spacing-48) !important;
}

/* Status box */
.order-status-box {
    background: rgba(34, 197, 94, 0.07) !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    border-radius: 16px !important;
    padding: var(--spacing-20) !important;
    margin-bottom: 28px !important;
    text-align: center !important;
}

.order-status-label {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 12px !important;
    color: rgba(7, 6, 7, 0.5) !important;
    text-transform: uppercase !important;
    letter-spacing: 1px !important;
    margin-bottom: 8px !important;
    font-weight: 700 !important;
}

.order-status-value {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 24px !important;
    font-weight: 900 !important;
    color: #22c55e !important;
    text-transform: uppercase !important;
    letter-spacing: 1px !important;
}

.order-result-message {
    text-align: center !important;
    margin-bottom: 32px !important;
}

.order-result-message h3 {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 22px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
    margin-bottom: 14px !important;
    text-transform: uppercase;
}

.order-result-message h5 {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 15px !important;
    color: var(--color-abyssal-ink) !important;
    line-height: 1.6 !important;
    margin-bottom: 10px !important;
}

.order-result-message p {
    font-size: 14.5px !important;
    color: rgba(7, 6, 7, 0.55) !important;
    margin-top: 14px !important;
}

/* Actions */
.order-result-actions {
    display: flex !important;
    gap: 14px !important;
    justify-content: center !important;
    flex-wrap: wrap !important;
}

.btn-result-primary {
    display: inline-flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 15px 30px !important;
    background: var(--color-digital-orange) !important;
    border: 2px solid var(--color-abyssal-ink) !important;
    border-radius: var(--radius-inputs) !important;
    color: var(--color-pure-white) !important;
    font-family: var(--font-dm-sans) !important;
    font-size: 13.5px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    text-decoration: none !important;
    transition: all 0.3s ease !important;
}

.btn-result-primary:hover {
    background: var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    transform: translateY(-2px) !important;
}

.btn-result-secondary {
    display: inline-flex !important;
    align-items: center !important;
    gap: 10px !important;
    padding: 15px 30px !important;
    background: transparent !important;
    border: 2px solid var(--color-abyssal-ink) !important;
    border-radius: var(--radius-inputs) !important;
    color: var(--color-abyssal-ink) !important;
    font-family: var(--font-dm-sans) !important;
    font-size: 13.5px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    text-decoration: none !important;
    transition: all 0.3s ease !important;
}

.btn-result-secondary:hover {
    background: var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    transform: translateY(-2px) !important;
}

@media (max-width: 768px) {
    .order-result-section { padding: var(--spacing-24) 0 !important; }
    .order-result-card { margin: 0 16px !important; }
    .order-result-head { padding: 36px 24px 24px !important; }
    .order-result-body { padding: 0 24px 36px !important; }
    .order-result-title { font-size: 24px !important; }
    .order-status-value { font-size: 20px !important; }
    .order-result-actions { flex-direction: column !important; }
    .btn-result-primary, .btn-result-secondary { width: 100% !important; justify-content: center !important; }
}
</style>
@endpush

@section('main-content')
@php
use App\Models\Order;
$order = Order::where('trans_id', $transaction_id)->first();
@endphp

<!-- Hero / Title Band -->
<div class="about-hero-section">
  <div class="about-hero-wrapper">
    <h1 class="about-hero-title">
      {{ __('common.order_successful') }}
    </h1>
    
    <div class="about-breadcrumb-capsule">
      <a href="{{ route('home') }}">
        <i class="fas fa-home me-2"></i>{{ __('common.home') }}
      </a>
      <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
      <span class="about-breadcrumb-current">{{ __('common.order_successful') }}</span>
    </div>
  </div>
</div>

<!-- Order Success Body -->
<section class="order-result-section">
    <div class="container">
        <div class="order-result-card">
            <div class="order-result-head">
                <div class="order-result-icon">
                    <i class="fas fa-check" style="font-size: 40px; color: var(--color-pure-white);"></i>
                </div>
                <h1 class="order-result-title">{{ __('common.order_successful') }}</h1>
            </div>

            <div class="order-result-body">
                <div class="order-status-box">
                    <div class="order-status-label">{{ __('common.payment_status') }}</div>
                    <div class="order-status-value">{{ __('common.status_successful') }}</div>
                </div>

                <!-- Unified Order Details Block -->
                <div class="order-details-box" style="background: var(--color-basalt-canvas); border: 2px solid var(--color-abyssal-ink); border-radius: 16px; padding: 20px; margin-bottom: 32px; display: flex; flex-direction: column; gap: 12px; text-align: left;">
                    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(7, 6, 7, 0.08); padding-bottom: 8px;">
                        <span style="font-family: var(--font-pp-neue-corp-compact-ultrabold); font-size: 13px; font-weight: 800; text-transform: uppercase; color: rgba(7, 6, 7, 0.5);">{{ __('common.order_number') }}</span>
                        <strong style="font-family: var(--font-pp-neue-corp-compact-ultrabold); font-size: 16px; font-weight: 900; color: var(--color-abyssal-ink);">{{ $orderInfo->order_number ?? ($order->order_number ?? 'N/A') }}</strong>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-family: var(--font-pp-neue-corp-compact-ultrabold); font-size: 13px; font-weight: 800; text-transform: uppercase; color: rgba(7, 6, 7, 0.5);">{{ __('common.transaction_id') }}</span>
                        <strong style="font-family: var(--font-pp-neue-corp-compact-ultrabold); font-size: 16px; font-weight: 900; color: var(--color-abyssal-ink); word-break: break-all;">{{ $transaction_id }}</strong>
                    </div>
                </div>

                <div class="order-result-message">
                    <h3>{{ __('common.thank_you_order') }}</h3>
                    <h5>{{ __('common.order_confirmation') }} {{ $transaction_id }}</h5>
                    <p>{{ __('common.team_contact') }}</p>
                </div>

                <div class="order-result-actions">
                    @if($email_status=='inactive')
                    <a href="{{ route('order.pdf', $order->id) }}" class="btn-result-primary">
                        <i class="fas fa-download me-2"></i>
                        {{ __('common.download_invoice') }}
                    </a>
                    @endif
                    <a href="{{ route('home') }}" class="btn-result-secondary">
                        <i class="fas fa-home me-2"></i>
                        {{ __('common.go_to_homepage') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Back To Top -->
<div id="back-to-top" class="back-to-top">
    <a href="#"><i class="fas fa-angle-up"></i></a>
</div>

@endsection
