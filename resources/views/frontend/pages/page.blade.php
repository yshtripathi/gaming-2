@extends('frontend.layouts.main')
@section('title', $page_data->page_title)

@push('styles')
<style>
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

/* Legal / CMS Page - Gaming HUD Theme */
.legal-section {
    padding: 0 !important;
    background: transparent !important;
    margin: var(--spacing-40) !important;
    margin-top: var(--spacing-56) !important;
    margin-bottom: var(--spacing-80) !important;
    min-height: 50vh !important;
}

@media (max-width: 768px) {
    .legal-section {
        margin: var(--spacing-16) !important;
        margin-top: var(--spacing-32) !important;
        margin-bottom: var(--spacing-48) !important;
    }
}

.legal-content-card {
    max-width: var(--page-max-width) !important;
    margin: 0 auto !important;
    background: var(--color-pure-white) !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    border-radius: 20px !important;
    box-shadow: 0 20px 50px rgba(7, 6, 7, 0.06) !important;
    padding: var(--spacing-48) var(--spacing-40) !important;
    position: relative !important;
    overflow: hidden !important;
}

/* Prose typography */
.legal-prose {
    color: var(--color-abyssal-ink) !important;
    font-size: 15.5px !important;
    line-height: 1.85 !important;
    font-family: var(--font-dm-sans) !important;
}

.legal-prose h1,
.legal-prose h2,
.legal-prose h3,
.legal-prose h4,
.legal-prose h5,
.legal-prose h6 {
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    color: var(--color-abyssal-ink) !important;
    font-weight: 800 !important;
    line-height: 1.3 !important;
    margin: 32px 0 16px !important;
    text-transform: uppercase !important;
}

.legal-prose h1 { font-size: 30px !important; }
.legal-prose h2 { font-size: 25px !important; }
.legal-prose h3 { font-size: 21px !important; }
.legal-prose h4 { font-size: 18px !important; }
.legal-prose h5 { font-size: 16px !important; }
.legal-prose h6 { font-size: 14px !important; letter-spacing: 0.5px !important; }

.legal-prose h1:first-child,
.legal-prose h2:first-child,
.legal-prose h3:first-child {
    margin-top: 0 !important;
}

.legal-prose p {
    margin: 0 0 16px !important;
}

.legal-prose ul,
.legal-prose ol {
    padding-left: 24px !important;
    margin: 0 0 20px !important;
}

.legal-prose li {
    margin-bottom: 10px !important;
}

.legal-prose ul li::marker {
    color: var(--color-digital-orange) !important;
}

.legal-prose ol li::marker {
    color: var(--color-digital-orange) !important;
    font-weight: 700 !important;
}

.legal-prose ol li:has(h1)::marker {
    font-size: 30px !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-weight: 800 !important;
}
.legal-prose ol li:has(h2)::marker {
    font-size: 25px !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-weight: 800 !important;
}
.legal-prose ol li:has(h3)::marker {
    font-size: 21px !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-weight: 800 !important;
}
.legal-prose ol li:has(h4)::marker {
    font-size: 18px !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-weight: 800 !important;
}
.legal-prose ol li:has(h5)::marker {
    font-size: 16px !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-weight: 800 !important;
}
.legal-prose ol li:has(h6)::marker {
    font-size: 14px !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-weight: 800 !important;
}

.legal-prose a {
    color: var(--color-digital-orange) !important;
    font-weight: 700 !important;
    text-decoration: none !important;
    transition: color 0.2s ease !important;
}

.legal-prose a:hover {
    color: var(--color-abyssal-ink) !important;
    text-decoration: underline !important;
}

.legal-prose strong,
.legal-prose b {
    color: var(--color-abyssal-ink) !important;
    font-weight: 800 !important;
}

.legal-prose blockquote {
    margin: 24px 0 !important;
    padding: 16px 22px !important;
    background: rgba(252, 80, 0, 0.06) !important;
    border-left: 4px solid var(--color-digital-orange) !important;
    border-top: 2px solid var(--color-abyssal-ink) !important;
    border-bottom: 2px solid var(--color-abyssal-ink) !important;
    border-right: 2px solid var(--color-abyssal-ink) !important;
    border-radius: 0 12px 12px 0 !important;
    color: var(--color-abyssal-ink) !important;
    font-style: italic !important;
    font-family: var(--font-dm-sans) !important;
}

.legal-prose img {
    max-width: 100% !important;
    height: auto !important;
    border: 3px solid var(--color-abyssal-ink) !important;
    border-radius: 12px !important;
    margin: 16px 0 !important;
}

.legal-prose hr {
    border: none !important;
    border-top: 2px solid rgba(7, 6, 7, 0.1) !important;
    margin: 32px 0 !important;
}

/* Tables inside CMS content - Clean Borderless Horizontal Layout */
.legal-prose table {
    width: 100% !important;
    border-collapse: collapse !important;
    margin: 24px 0 !important;
    background: transparent !important;
    border: none !important;
}

.legal-prose table thead th {
    background: transparent !important;
    color: var(--color-digital-orange) !important;
    font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
    font-size: 14px !important;
    font-weight: 800 !important;
    text-transform: uppercase !important;
    letter-spacing: 1px !important;
    padding: 12px 0 !important;
    border: none !important;
    border-bottom: 2px solid var(--color-abyssal-ink) !important;
    text-align: left !important;
    vertical-align: middle !important;
}

.legal-prose table tbody tr {
    background: transparent !important;
    border: none !important;
    transition: all 0.2s ease !important;
}

.legal-prose table tbody tr:hover {
    background: rgba(252, 80, 0, 0.04) !important;
}

.legal-prose table tbody td {
    padding: 14px 0 !important;
    padding-right: 20px !important;
    border: none !important;
    border-bottom: 1px solid rgba(7, 6, 7, 0.08) !important;
    color: var(--color-abyssal-ink) !important;
    font-family: var(--font-dm-sans) !important;
    font-weight: 500 !important;
    vertical-align: middle !important;
}

.legal-prose table tbody tr:last-child td {
    border-bottom: none !important;
}

/* Responsive table wrapper */
.legal-prose .table-responsive,
.legal-prose figure.table {
    overflow-x: auto !important;
    -webkit-overflow-scrolling: touch !important;
    margin: 24px 0 !important;
}

.legal-prose .table-responsive table,
.legal-prose figure.table table {
    margin: 0 !important;
}

@media (max-width: 768px) {
    .legal-content-card {
        margin: 0 16px !important;
        padding: 30px 22px !important;
    }
    .legal-prose { font-size: 14.5px !important; }
    .legal-prose table { display: table !important; width: 100% !important; }
}
</style>
@endpush

@section('main-content')

<!-- Page Header Band -->
<div class="about-hero-section">
    <div class="about-hero-wrapper">
        <h1 class="about-hero-title">
            {{ $page_data->page_title }}
        </h1>
        <div class="about-breadcrumb-capsule">
            <a href="{{ route('home') }}">
                <i class="fas fa-home me-2"></i>{{ __('common.home') }}
            </a>
            <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
            <span class="about-breadcrumb-current">{{ $page_data->page_title }}</span>
        </div>
    </div>
</div>

<!-- Page Content -->
<section class="legal-section">
    <div class="container">
        <div class="legal-content-card">
            <div class="legal-prose">
                {!! $page_data->page_desc !!}
            </div>
        </div>
    </div>
</section>

@endsection
