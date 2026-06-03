@extends('frontend.layouts.main')

@section('title', __('common.order_detail'))

@push('styles')
<style>
/* Dashboard Theme Styling for Order Show Page */
.auth-dashboard-page {
    padding: 0 !important;
    background-color: var(--color-basalt-canvas) !important;
    color: var(--color-abyssal-ink) !important;
    font-family: var(--font-dm-sans) !important;
}

/* About Title Band / Hero */
.about-hero-section {
  position: relative !important;
  margin: var(--spacing-40) !important;
  margin-top: 150px !important;
  border-radius: var(--radius-3xl-3) !important;
  overflow: hidden !important;
  background: var(--color-ash-white) !important;
  border: 3px solid var(--color-abyssal-ink) !important;
  box-shadow: 0 40px 100px rgba(7, 6, 7, 0.08) !important;
}

.about-hero-wrapper {
  padding: var(--spacing-80) var(--spacing-40) !important;
  position: relative !important;
  z-index: 2 !important;
  text-align: center !important;
}

.about-hero-title {
  font-size: clamp(36px, 5vw, 64px) !important;
  font-weight: 900 !important;
  text-transform: uppercase !important;
  color: var(--color-abyssal-ink) !important;
  font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
  line-height: 1.1 !important;
  margin-bottom: var(--spacing-16) !important;
}

/* Breadcrumb styling */
.about-breadcrumb-capsule {
  display: inline-flex !important;
  align-items: center !important;
  gap: var(--spacing-12) !important;
  background: var(--color-pure-white) !important;
  border: 2px solid var(--color-abyssal-ink) !important;
  padding: var(--spacing-8) var(--spacing-20) !important;
  border-radius: var(--radius-full) !important;
  font-size: 13px !important;
  font-weight: 500 !important;
}

.about-breadcrumb-capsule a {
  color: var(--color-abyssal-ink) !important;
  text-decoration: none !important;
  transition: var(--transition) !important;
}

.about-breadcrumb-capsule a:hover {
  color: var(--color-digital-orange) !important;
}

.about-breadcrumb-separator {
  color: rgba(7, 6, 7, 0.4) !important;
  font-size: 10px !important;
}

.about-breadcrumb-current {
  color: var(--color-digital-orange) !important;
  font-weight: 600 !important;
}

/* Auth Shell / Container card */
.auth-dashboard-page .auth-shell {
    max-width: var(--page-max-width) !important;
    margin: var(--spacing-56) auto !important;
    background: var(--color-pure-white) !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    border-radius: var(--radius-cards) !important;
    box-shadow: 0 40px 100px rgba(7, 6, 7, 0.08) !important;
    overflow: hidden !important;
}

.auth-dashboard-page .auth-form-panel {
    background: var(--color-pure-white) !important;
    padding: var(--spacing-48) var(--spacing-40) !important;
}

/* Buttons / Nav Links */
.dashboard-nav-link {
    display: inline-flex !important;
    align-items: center !important;
    gap: var(--spacing-8) !important;
    background: var(--color-ash-white) !important;
    border: 2px solid var(--color-abyssal-ink) !important;
    border-radius: var(--radius-buttons) !important;
    padding: 10px 20px !important;
    color: var(--color-abyssal-ink) !important;
    font-family: var(--font-dm-sans) !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    text-decoration: none !important;
    cursor: pointer !important;
    transition: var(--transition) !important;
}

.dashboard-nav-link:hover {
    border-color: var(--color-digital-orange) !important;
    color: var(--color-digital-orange) !important;
}

.dashboard-nav-link.active {
    background: var(--color-digital-orange) !important;
    border-color: var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
    box-shadow: 0 6px 20px rgba(252, 80, 0, 0.25) !important;
}

/* Subtitle Header */
.dashboard-subtitle {
    display: inline-flex !important;
    align-items: center !important;
    gap: 10px !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 16px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
    margin: 34px 0 14px !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
}

.dashboard-subtitle::before {
    content: '' !important;
    width: 4px !important;
    height: 16px !important;
    background: var(--color-digital-orange) !important;
    border-radius: 2px !important;
}

.dashboard-subtitle-first { margin-top: 0 !important; }

/* Tables */
.dashboard-table-wrap { overflow-x: auto !important; -webkit-overflow-scrolling: touch !important; }

.dashboard-table {
    width: 100% !important;
    border-collapse: collapse !important;
    margin: 0 0 8px !important;
    background: transparent !important;
    border: none !important;
}

.dashboard-table thead th {
    background: transparent !important;
    color: var(--color-digital-orange) !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 13px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    text-align: left !important;
    padding: 12px 15px !important;
    border: none !important;
    border-bottom: 2px solid var(--color-abyssal-ink) !important;
    white-space: nowrap !important;
    vertical-align: middle !important;
}

.dashboard-table td {
    padding: 14px 15px !important;
    border: none !important;
    border-bottom: 1px solid rgba(7, 6, 7, 0.08) !important;
    color: var(--color-abyssal-ink) !important;
    font-family: var(--font-dm-sans) !important;
    font-weight: 500 !important;
    vertical-align: middle !important;
    white-space: nowrap !important;
}

.dashboard-table tbody tr {
    background: transparent !important;
    border: none !important;
    transition: all 0.2s ease !important;
}

.dashboard-table tbody tr:hover {
    background: rgba(252, 80, 0, 0.04) !important;
}

.dashboard-table tbody tr:last-child td { border-bottom: none !important; }

/* Status badges */
.status-badge {
    display: inline-flex !important;
    align-items: center !important;
    padding: 5px 12px !important;
    border-radius: 50px !important;
    font-family: var(--font-dm-sans) !important;
    font-size: 10.5px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
}

.status-badge.completed,
.status-badge.success,
.status-badge.paid,
.status-badge.delivered {
    background: rgba(34, 197, 94, 0.1) !important;
    color: #16a34a !important;
    border: 2px solid var(--color-abyssal-ink) !important;
}

.status-badge.pending,
.status-badge.processing {
    background: rgba(249, 115, 22, 0.1) !important;
    color: #ea580c !important;
    border: 2px solid var(--color-abyssal-ink) !important;
}

.status-badge.failed,
.status-badge.cancelled,
.status-badge.canceled {
    background: rgba(239, 68, 68, 0.1) !important;
    color: #dc2626 !important;
    border: 2px solid var(--color-abyssal-ink) !important;
}

@media (max-width: 991px) {
    .auth-dashboard-page .auth-shell {
        margin: var(--spacing-32) var(--spacing-16) !important;
        border-radius: var(--radius-3xl-2) !important;
    }
    .auth-form-panel {
        padding: var(--spacing-32) var(--spacing-24) !important;
    }
}
</style>
@endpush

@section('main-content')

<!-- Hero / Title Band -->
<div class="about-hero-section">
  <div class="about-hero-wrapper">
    <h1 class="about-hero-title">
      {{ __('common.order_detail') }}
    </h1>
    
    <div class="about-breadcrumb-capsule">
      <a href="{{ route('home') }}">
        <i class="fas fa-home me-2"></i>{{ __('common.home') }}
      </a>
      <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
      <a href="/user">{{ __('common.my_account') }}</a>
      <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
      <span class="about-breadcrumb-current">{{ __('common.order_detail') }}</span>
    </div>
  </div>
</div>

<section class="polygamez-auth-page auth-dashboard-page">
    <div class="container">
        <div class="auth-shell">
            <div class="auth-form-panel">
                
                <!-- Action Controls -->
                <div style="display: flex; gap: 12px; margin-bottom: 32px; justify-content: flex-end;">
                    <a href="/user" class="dashboard-nav-link">
                        <i class="fas fa-arrow-left me-2"></i>
                        {{ __('common.back') }}
                    </a>
                    <a href="{{ route('order.pdf', $order->id) }}" class="dashboard-nav-link active">
                        <i class="fas fa-download me-2"></i>
                        {{ __('common.generate_pdf') }}
                    </a>
                </div>

                @if($order)
                @php
                    $currency = match($order->currency) {
                        'USD' => '$',
                        'JPY' => '¥',
                        default => '$',
                    };
                @endphp

                <!-- Table 1: Order Summary -->
                <h2 class="dashboard-subtitle dashboard-subtitle-first" style="margin-bottom: 20px;">{{ __('common.order_summary') }}</h2>
                <div class="dashboard-table-wrap mb-5">
                    <table class="dashboard-table">
                        <thead>
                            <tr>
                                <th>{{ __('common.order_number') }}</th>
                                <th>{{ __('common.name') }}</th>
                                <th>{{ __('common.email') }}</th>
                                <th>{{ __('common.quantity') }}</th>
                                <th class="text-right">{{ __('common.total_amount') }}</th>
                                <th>{{ __('common.status') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $order->order_number }}</td>
                                <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td class="text-right ft-w-b">
                                    {{ $currency }}{{ number_format($order->total_amount, $order->currency=='JPY' ? 0 : 2) }}
                                </td>
                                <td>
                                    <span class="status-badge {{ strtolower($order->status) }}">{{ ucwords($order->status) }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Table 2: Detailed Order Info -->
                <h2 class="dashboard-subtitle" style="margin-bottom: 20px;">{{ __('common.order_information') }}</h2>
                <div class="dashboard-table-wrap">
                    <table class="dashboard-table">
                        <tbody>
                            <tr>
                                <td style="width: 280px; font-weight: 800; font-family: var(--font-pp-neue-corp-compact-ultrabold); text-transform: uppercase;">{{ __('common.order_number') }}</td>
                                <td>{{ $order->order_number }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: 800; font-family: var(--font-pp-neue-corp-compact-ultrabold); text-transform: uppercase;">{{ __('common.order_date') }}</td>
                                <td>{{ $order->created_at->format('D d M, Y') }} at {{ $order->created_at->format('g:i a') }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: 800; font-family: var(--font-pp-neue-corp-compact-ultrabold); text-transform: uppercase;">{{ __('common.quantity') }}</td>
                                <td>{{ $order->quantity }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: 800; font-family: var(--font-pp-neue-corp-compact-ultrabold); text-transform: uppercase;">{{ __('common.order_status') }}</td>
                                <td><span class="status-badge {{ strtolower($order->status) }}">{{ ucwords($order->status) }}</span></td>
                            </tr>
                            <tr>
                                <td style="font-weight: 800; font-family: var(--font-pp-neue-corp-compact-ultrabold); text-transform: uppercase;">{{ __('common.total_amount') }}</td>
                                <td><strong>{{ $currency }} {{ number_format($order->total_amount, $order->currency=='JPY' ? 0 : 2) }}</strong></td>
                            </tr>
                            <tr>
                                <td style="font-weight: 800; font-family: var(--font-pp-neue-corp-compact-ultrabold); text-transform: uppercase;">{{ __('common.payment_method') }}</td>
                                <td>{{ __('common.credit_card') }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: 800; font-family: var(--font-pp-neue-corp-compact-ultrabold); text-transform: uppercase;">{{ __('common.status') }}</td>
                                <td><span class="status-badge {{ strtolower($order->payment_status) }}">{{ ucwords($order->payment_status) }}</span></td>
                            </tr>
                            <tr>
                                <td style="font-weight: 800; font-family: var(--font-pp-neue-corp-compact-ultrabold); text-transform: uppercase;">{{ __('common.transaction_id') }}</td>
                                <td style="word-break: break-all;">{{ $order->trans_id }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @endif

            </div>
        </div>
    </div>
</section>

@endsection
