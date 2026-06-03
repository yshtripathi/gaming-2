@extends('frontend.layouts.main')
@section('title', 'Dashboard')

@push('styles')
<style>
/* Dashboard - single-panel layout */
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

.auth-dashboard-page .auth-form-panel h1 {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: clamp(24px, 3vw, 36px) !important;
    text-transform: uppercase !important;
    color: var(--color-abyssal-ink) !important;
    margin-bottom: var(--spacing-12) !important;
    line-height: 1.1 !important;
}

/* Tab navigation pills */
.dashboard-nav-pills {
    display: flex !important;
    flex-wrap: wrap !important;
    gap: var(--spacing-12) !important;
    margin: var(--spacing-8) 0 var(--spacing-32) !important;
    padding-bottom: var(--spacing-24) !important;
    border-bottom: 2px solid rgba(7, 6, 7, 0.08) !important;
}

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

.dashboard-nav-link i { font-size: 14px !important; }

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

.dashboard-nav-link.dashboard-logout {
    margin-left: auto !important;
    background: rgba(239, 68, 68, 0.06) !important;
    border-color: #ef4444 !important;
    color: #ef4444 !important;
}

.dashboard-nav-link.dashboard-logout:hover {
    background: #ef4444 !important;
    border-color: var(--color-abyssal-ink) !important;
    color: var(--color-pure-white) !important;
}

/* Tabs */
.dashboard-tab { display: none !important; }
.dashboard-tab.active { display: block !important; animation: dash-fade 0.4s ease !important; }

@keyframes dash-fade {
    from { opacity: 0; transform: translateY(8px); }
    to { opacity: 1; transform: translateY(0); }
}

.dashboard-tab > h2 {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 24px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
    margin: 0 0 22px !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
}

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

.dashboard-note {
    margin: 0 0 8px !important;
    padding: 16px 18px !important;
    background: var(--color-ash-white) !important;
    border: 2px dashed rgba(7, 6, 7, 0.12) !important;
    border-radius: 16px !important;
    color: rgba(7, 6, 7, 0.6) !important;
    font-size: 13.5px !important;
    font-weight: 600 !important;
    text-align: center !important;
}

/* Invalid input (matches JS .is-invalid on confirm field) */
.auth-input-wrap .form-control.is-invalid {
    border-color: #ef4444 !important;
    box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.12) !important;
}

/* Field styling */
.auth-field {
  display: flex !important;
  flex-direction: column !important;
  gap: var(--spacing-8) !important;
  margin-bottom: var(--spacing-20) !important;
  position: relative !important;
}

.auth-field label {
  font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
  font-size: 13px !important;
  text-transform: uppercase !important;
  letter-spacing: 0.5px !important;
  color: var(--color-abyssal-ink) !important;
}

/* Input design */
.auth-input-wrap {
  position: relative !important;
  width: 100% !important;
}

.auth-input-wrap input {
  padding-left: 48px !important; /* space for icon */
  border-radius: var(--radius-inputs) !important;
  border: 2px solid var(--color-abyssal-ink) !important;
  font-size: 15px !important;
  height: 48px !important;
  width: 100% !important;
  background-color: var(--color-pure-white) !important;
  color: var(--color-abyssal-ink) !important;
  font-family: var(--font-dm-sans) !important;
}

.auth-input-wrap input:focus {
  outline: none !important;
  border-color: var(--color-digital-orange) !important;
  box-shadow: 0 0 0 3px rgba(252, 80, 0, 0.1) !important;
}

.auth-input-wrap i {
  position: absolute !important;
  left: 20px !important;
  top: 15px !important;
  color: rgba(7, 6, 7, 0.4) !important;
  font-size: 16px !important;
  pointer-events: none !important;
}

/* Submit button */
.auth-submit-btn {
  width: 100% !important;
  min-height: 50px !important;
  background: var(--color-digital-orange) !important;
  color: var(--color-pure-white) !important;
  border: 2px solid var(--color-abyssal-ink) !important;
  border-radius: var(--radius-buttons) !important;
  font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
  font-size: 16px !important;
  font-weight: 800 !important;
  text-transform: uppercase !important;
  letter-spacing: 1.2px !important;
  cursor: pointer !important;
  transition: all 0.3s ease !important;
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: var(--spacing-8) !important;
  margin-top: var(--spacing-8) !important;
  box-shadow: 0 10px 30px rgba(252, 80, 0, 0.25) !important;
}

.auth-submit-btn:hover {
  background: var(--color-abyssal-ink) !important;
  color: var(--color-pure-white) !important;
  transform: translateY(-2px) !important;
  box-shadow: 0 10px 30px rgba(7, 6, 7, 0.2) !important;
}

.auth-submit-btn:active {
  transform: scale(0.98) !important;
}

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

.dashboard-table .order-number {
    display: block !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 15px !important;
    font-weight: 800 !important;
    color: var(--color-abyssal-ink) !important;
}

.dashboard-table small {
    display: block !important;
    font-size: 11px !important;
    color: rgba(7, 6, 7, 0.5) !important;
    margin-top: 2px !important;
    white-space: nowrap !important;
}

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

/* Action button */
.action-btn {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 34px !important;
    height: 34px !important;
    border-radius: 12px !important;
    background: rgba(252, 80, 0, 0.08) !important;
    border: 2px solid var(--color-abyssal-ink) !important;
    color: var(--color-digital-orange) !important;
    text-decoration: none !important;
    transition: all 0.3s ease !important;
}

.action-btn:hover {
    background: var(--color-digital-orange) !important;
    color: var(--color-pure-white) !important;
    border-color: var(--color-abyssal-ink) !important;
}

/* Empty state */
.dashboard-empty {
    text-align: center !important;
    padding: 48px 24px !important;
}

.dashboard-empty i {
    font-size: 52px !important;
    color: rgba(7, 6, 7, 0.15) !important;
    margin-bottom: 14px !important;
}

.dashboard-empty h3 {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 17px !important;
    font-weight: 800 !important;
    color: rgba(7, 6, 7, 0.5) !important;
    text-transform: uppercase !important;
    margin: 0 !important;
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

@media (max-width: 575px) {
    .dashboard-nav-link.dashboard-logout { margin-left: 0 !important; }
}
</style>
@endpush

@section('main-content')

<!-- Hero / Title Band -->
<div class="about-hero-section">
  <div class="about-hero-wrapper">
    <h1 class="about-hero-title">
      {{ __('common.my_account') }}
    </h1>
    
    <div class="about-breadcrumb-capsule">
      <a href="{{ route('home') }}">
        <i class="fas fa-home me-2"></i>Home
      </a>
      <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
      <span class="about-breadcrumb-current">My Account</span>
    </div>
  </div>
</div>

<section class="polygamez-auth-page auth-dashboard-page">
    <div class="container">
        <div class="auth-shell">
            <!-- Left: content panel -->
            <div class="auth-form-panel">
                <div class="auth-kicker">{{ __('common.my_account') }}</div>
                <h1>{{ auth()->user()->name }}</h1>
                <p>{{ __('common.welcome_back_player') }}</p>

                <nav class="dashboard-nav-pills">
                    <button class="dashboard-nav-link active" data-target="#password" type="button">
                        <i class="fas fa-lock"></i>
                        {{ __('common.change_password') }}
                    </button>
                    <button class="dashboard-nav-link" data-target="#orders" type="button">
                        <i class="fas fa-shopping-bag"></i>
                        {{ __('common.order_history') }}
                    </button>
                    <button class="dashboard-nav-link" data-target="#points" type="button">
                        <i class="fas fa-coins"></i>
                        {{ __('common.points_history') }}
                    </button>
                    <a href="{{ route('user.logout') }}" class="dashboard-nav-link dashboard-logout">
                        <i class="fas fa-sign-out-alt"></i>
                        {{ __('common.logout') }}
                    </a>
                </nav>

                <!-- Tab: Change Password -->
                <div class="dashboard-tab active" id="password">
                    <h2>{{ __('common.change_password') }}</h2>

                    <form method="POST" action="{{ route('change.password') }}" id="passwordform">
                        @csrf
                        <div class="auth-field">
                            <label for="oldpswrd">{{ __('common.current_password') }}</label>
                            <div class="auth-input-wrap">
                                <input type="password" name="current_password" id="oldpswrd" placeholder="{{ __('common.current_password') }}" class="form-control" required>
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                        <div class="auth-field">
                            <label for="new_password">{{ __('common.new_password') }}</label>
                            <div class="auth-input-wrap">
                                <input id="new_password" type="password" name="new_password" placeholder="{{ __('common.new_password') }}" class="form-control" required minlength="6">
                                <i class="fas fa-key"></i>
                            </div>
                        </div>
                        <div class="auth-field">
                            <label for="cnfrm_pswrd">{{ __('common.confirm_new_password') }}</label>
                            <div class="auth-input-wrap">
                                <input id="cnfrm_pswrd" type="password" name="new_confirm_password" placeholder="{{ __('common.confirm_new_password') }}" class="form-control" required minlength="6">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <button type="submit" class="auth-submit-btn">
                            <span>{{ __('common.submit') }}</span>
                            <i class="fas fa-save"></i>
                        </button>
                    </form>
                </div>

                <!-- Tab: Order History (Points Purchased) -->
                <div class="dashboard-tab" id="orders">
                    <h2>{{ __('common.order_history') }}</h2>

                    @if(count($orders)>0)
                        <div class="dashboard-table-wrap">
                            <table class="dashboard-table">
                                <thead>
                                    <tr>
                                        <th>{{ __('common.serial_number') }}</th>
                                        <th>{{ __('common.order_number') }}</th>
                                        <th>{{ __('common.name') }}</th>
                                        <th>{{ __('common.total_amount') }}</th>
                                        <th>{{ __('common.status') }}</th>
                                        <th>{{ __('common.action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>
                                                <span class="order-number">{{ $order->order_number }}</span>
                                                <small>{{ __('common.order_date') }}: {{ $order->created_at->format('d-M-y') }}</small>
                                            </td>
                                            <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                                            <td>{{ $order->currency }} {{ number_format($order->total_amount, $order->currency=='JPY' ? 0 : 2) }}</td>
                                            <td>
                                                <span class="status-badge {{ strtolower($order->status) }}">{{ ucwords($order->status) }}</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('user.order.show',$order->id) }}" class="action-btn" title="{{ __('common.view_details') }}">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <form method="POST" action="{{ route('user.order.delete',[$order->id]) }}" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="dashboard-empty">
                            <i class="fas fa-shopping-bag"></i>
                            <h3>{{ __('common.no_orders_found') }}</h3>
                        </div>
                    @endif
                </div>

                <!-- Tab: Points History (Points Redeemed) -->
                <div class="dashboard-tab" id="points">
                    <h2>{{ __('common.points_history') }}</h2>

                    @if(count($gameHistory)>0)
                        <div class="dashboard-table-wrap">
                            <table class="dashboard-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Game</th>
                                        <th>Date</th>
                                        <th>Points Spent</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($gameHistory as $game)
                                        @if($game->product)
                                            <tr>
                                                <td>{{ $game->id }}</td>
                                                <td>{{ $game->product->title }}</td>
                                                <td>{{ $game->created_at->format('d-M-y') }}</td>
                                                <td>{{ number_format($game->price,0) }} Points</td>
                                                <td><span class="status-badge completed">Completed</span></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="dashboard-empty">
                            <i class="fas fa-coins"></i>
                            <h3>{{ __('common.no_orders_found') }}</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('.dashboard-nav-link[data-target]').on('click', function() {
        $('.dashboard-nav-link').removeClass('active');
        $(this).addClass('active');
        $('.dashboard-tab').removeClass('active');
        $($(this).data('target')).addClass('active');
    });

    $('#passwordform').on('submit', function(e) {
        var newPassword = $('#new_password').val();
        var confirmPassword = $('#cnfrm_pswrd').val();
        if (newPassword !== confirmPassword) {
            e.preventDefault();
            $('#cnfrm_pswrd').addClass('is-invalid');
        }
    });
});
</script>
@endpush
