@extends('frontend.layouts.main')

@php
    if (request()->routeIs('product-lists')) {
        $category = null;
    }

    if (isset($category)) {
        if (is_object($category) && method_exists($category, 'first')) {
            $category = $category->first();
        }
        if (!is_object($category) || !isset($category->title)) {
            $category = null;
        }
    }
@endphp

@if(isset($category->title) && $category->title)
    @section('title', $category->title)
    @section('description', $category->summary)
@else
    @section('title', __('common.boosting_services'))
    @section('description', __('common.boosting_services'))
@endif

@push('styles')
<style>
/* ============================================================================
   CALDERA PRODUCT CATALOG — Premium Gaming Theme Style
   ============================================================================ */

.product-grid-section {
  padding: 0 !important;
  background: transparent !important;
  margin: var(--spacing-40);
  margin-top: var(--spacing-56);
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

/* Category Spotlight Section */
.category-spotlight-section {
  margin: var(--spacing-40);
  margin-top: var(--spacing-56);
  padding: 0 !important;
}

.category-spotlight-card {
  background: var(--color-ash-white) !important;
  border: 3px solid var(--color-abyssal-ink) !important;
  border-radius: var(--radius-cards) !important;
  box-shadow: 0 20px 50px rgba(7, 6, 7, 0.06) !important;
  padding: var(--spacing-40) !important;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: var(--spacing-16);
}

.spotlight-title {
  font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
  font-size: clamp(28px, 4vw, 42px) !important;
  color: var(--color-abyssal-ink) !important;
  text-transform: uppercase;
  margin-bottom: var(--spacing-12);
}

.spotlight-summary {
  font-size: 15px !important;
  line-height: 1.7 !important;
  color: var(--color-abyssal-ink) !important;
}

/* Catalog Layout Adjustments */
.product-catalog-layout {
  display: grid;
  grid-template-columns: 1fr;
  gap: var(--spacing-32);
  align-items: flex-start;
}

/* Horizontal Products Grid */
.products-grid {
  display: flex !important;
  flex-direction: column !important;
  gap: var(--spacing-24) !important;
}

.product-card-new {
  background: var(--color-pure-white) !important;
  border: 3px solid var(--color-abyssal-ink) !important;
  border-radius: var(--radius-cards) !important;
  box-shadow: 0 10px 40px rgba(7, 6, 7, 0.05) !important;
  overflow: hidden;
  transition: all 0.3s ease !important;
  display: flex !important;
  flex-direction: row !important;
  align-items: stretch !important;
  min-height: 200px;
  width: 100%;
}

.product-card-new:hover {
  transform: translateY(-4px) !important;
  border-color: var(--color-digital-orange) !important;
  box-shadow: 0 15px 45px rgba(252, 80, 0, 0.2) !important;
}

.product-card-image {
  position: relative;
  width: 300px !important;
  aspect-ratio: 16/10;
  overflow: hidden;
  background: var(--color-basalt-canvas);
  border-bottom: none !important;
  border-right: 3px solid var(--color-abyssal-ink) !important;
  flex-shrink: 0;
}

.product-card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease !important;
}

.product-card-new:hover .product-card-image img {
  transform: scale(1.04) !important;
}

.product-card-body {
  padding: var(--spacing-24) !important;
  display: flex !important;
  flex-direction: column !important;
  flex-grow: 1;
  justify-content: space-between !important;
}

.product-card-title {
  font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
  font-size: 22px !important;
  font-weight: 800 !important;
  color: var(--color-abyssal-ink) !important;
  margin: 0 0 var(--spacing-12) 0 !important;
  line-height: 1.3 !important;
  height: auto !important;
  overflow: visible !important;
  text-transform: uppercase;
  text-align: left !important;
}

.product-card-summary {
  font-size: 14.5px !important;
  line-height: 1.6 !important;
  color: rgba(7, 6, 7, 0.6) !important;
  margin: 0 0 var(--spacing-20) 0 !important;
  white-space: normal !important;
  overflow: hidden !important;
  display: -webkit-box !important;
  -webkit-line-clamp: 3 !important;
  -webkit-box-orient: vertical !important;
  text-align: left !important;
}

.product-card-footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-top: var(--spacing-16) !important;
  border-top: 1px solid rgba(7, 6, 7, 0.08) !important;
  margin-top: auto;
  width: 100%;
}

.product-card-price {
  display: flex;
  flex-direction: column;
  text-align: left;
}

.product-card-price-label {
  font-size: 10px !important;
  font-weight: 700;
  color: rgba(7, 6, 7, 0.5) !important;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.product-card-price-value {
  font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
  font-size: 22px !important;
  font-weight: 900 !important;
  color: var(--color-abyssal-ink) !important;
  line-height: 1.1;
  margin-top: 2px;
}

/* Explore and Add to Cart Action Buttons */
.product-card-actions {
  display: flex !important;
  align-items: center !important;
  gap: 10px !important;
}

.product-explore-btn {
  display: inline-flex !important;
  align-items: center !important;
  gap: var(--spacing-8) !important;
  background: transparent !important;
  border: 2px solid var(--color-abyssal-ink) !important;
  border-radius: var(--radius-inputs) !important;
  color: var(--color-abyssal-ink) !important;
  padding: 8px 16px !important;
  font-family: var(--font-dm-sans) !important;
  font-size: 12px !important;
  font-weight: 700 !important;
  text-transform: uppercase;
  cursor: pointer;
  text-decoration: none !important;
  transition: var(--transition) !important;
}

.product-explore-btn:hover {
  background: var(--color-abyssal-ink) !important;
  color: var(--color-pure-white) !important;
}

.product-card-btn {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: var(--spacing-8) !important;
  background: var(--color-digital-orange) !important;
  border: 2px solid var(--color-abyssal-ink) !important;
  border-radius: var(--radius-inputs) !important;
  color: var(--color-pure-white) !important;
  padding: 8px 16px !important;
  font-family: var(--font-dm-sans) !important;
  font-size: 12px !important;
  font-weight: 700 !important;
  text-transform: uppercase;
  cursor: pointer;
  box-shadow: 0 4px 12px rgba(252, 80, 0, 0.15) !important;
  transition: var(--transition) !important;
}

.product-card-btn:hover {
  background: var(--color-abyssal-ink) !important;
  color: var(--color-pure-white) !important;
  box-shadow: 0 4px 12px rgba(7, 6, 7, 0.15) !important;
}

.product-card-btn i {
  font-size: 13px !important;
}

/* Empty states styling */
.no-products {
  background: var(--color-pure-white) !important;
  border: 3px solid var(--color-abyssal-ink) !important;
  border-radius: var(--radius-cards) !important;
  box-shadow: 0 15px 45px rgba(7, 6, 7, 0.05) !important;
  padding: var(--spacing-64) var(--spacing-32) !important;
  text-align: center;
}

.no-products-icon {
  background: rgba(252, 80, 0, 0.1) !important;
  border: 2px solid var(--color-abyssal-ink) !important;
  width: 80px;
  height: 80px;
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--spacing-24) !important;
}

.no-products-icon i {
  color: var(--color-digital-orange) !important;
  font-size: 40px !important;
}

.no-products h3 {
  font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
  font-size: 24px !important;
  color: var(--color-abyssal-ink) !important;
  text-transform: uppercase;
  margin-bottom: var(--spacing-12);
}

.no-products p {
  color: rgba(7, 6, 7, 0.6) !important;
  font-size: 15px !important;
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

/* Responsive Grid Adapters */
@media (max-width: 991px) {
  .product-grid-section,
  .category-spotlight-section {
    margin: var(--spacing-24);
    margin-top: var(--spacing-40);
  }
  .product-card-image {
    width: 240px !important;
  }
}

@media (max-width: 768px) {
  .product-card-new {
    flex-direction: column !important;
  }
  .product-card-image {
    width: 100% !important;
    border-right: none !important;
    border-bottom: 3px solid var(--color-abyssal-ink) !important;
    aspect-ratio: 16/10 !important;
  }
  .product-grid-section,
  .category-spotlight-section {
    margin: var(--spacing-16);
    margin-top: var(--spacing-32);
  }
  .category-spotlight-card {
    padding: var(--spacing-24) !important;
    gap: var(--spacing-20);
  }
}
</style>
@endpush

@section('main-content')

<!-- Hero / Title Band -->
<div class="about-hero-section">
  <div class="about-hero-wrapper">
    <h1 class="about-hero-title">
      @if(isset($category->title) && $category->title)
          {{ $category->title }}
      @else
          {{ __('common.boosting_services') }}
      @endif
    </h1>
    
    <div class="about-breadcrumb-capsule">
      <a href="{{ route('home') }}">
        <i class="fas fa-home me-2"></i>{{ __('common.home') }}
      </a>
      <span class="about-breadcrumb-separator"><i class="fas fa-chevron-right"></i></span>
      <span class="about-breadcrumb-current">
        @if(isset($category->title) && $category->title)
            {{ $category->title }}
        @else
            {{ __('common.boosting_services') }}
        @endif
      </span>
    </div>
  </div>
</div>

@if(isset($category) && $category)
<section class="category-spotlight-section">
    <div class="container">
        <div class="category-spotlight-card">
            <div class="category-spotlight-content">
                <span class="spotlight-tag mb-2 d-inline-block" style="font-size: 11px; font-weight: 800; color: var(--color-digital-orange); text-transform: uppercase; letter-spacing: 1.5px; display: block;">{{ __('common.category_focus') }}</span>
                <h2 class="spotlight-title">{{ $category->title }}</h2>
                @if($category->summary)
                    <p class="spotlight-summary">{{ $category->summary }}</p>
                @endif
            </div>
        </div>
    </div>
</section>
@endif

<!-- Product Grid Section -->
<section class="product-grid-section" id="products">
    <div class="container">
        
        <div class="section-title-with-line mb-5">
          <span class="title-square"></span>
          <h2>
            @if(isset($category->title) && $category->title)
                {{ __('common.services') }}
            @else
                {{ __('common.boosting_services') }}
            @endif
          </h2>
          <div class="title-underline"></div>
        </div>
        
        @if((!isset($category) || !$category) || count($products))
            @php
                $allCategories = Helper::productCategoryList("all")->where('is_parent', 1);
            @endphp
            <div class="product-catalog-layout no-sidebar-landing">
                <div class="products-grid">
                    @if(!isset($category) || !$category)
                        <!-- Main Catalog Landing Page: Show all Games (Categories) -->
                        @foreach($allCategories as $cat)
                            @php
                                $catPhoto = 'assets/media/blogs/bd-1.png';
                                if (!empty($cat->photo)) {
                                    if (filter_var($cat->photo, FILTER_VALIDATE_URL)) {
                                        $catPhoto = $cat->photo;
                                    } else {
                                        $catPhoto = asset($cat->photo);
                                    }
                                }
                            @endphp
                            <div class="product-card-new">
                                <div class="product-card-image">
                                    <a href="{{ route('product-cat', $cat->slug) }}" class="product-card-image-link">
                                        <img src="{{ $catPhoto }}" alt="{{ $cat->title }}">
                                    </a>
                                </div>
                                
                                <div class="product-card-body">
                                    <h3 class="product-card-title">{{ $cat->title }}</h3>
                                    
                                    <div class="category-services-count mb-2" style="font-size: 12px !important; color: var(--color-digital-orange) !important; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px; text-align: left;">
                                        {{ Helper::productCountByCategory($cat->id) }} {{ __('common.services') }}
                                    </div>
                                    
                                    @if($cat->summary)
                                        <p class="product-card-summary" style="margin-bottom: 20px !important;">{{ $cat->summary }}</p>
                                    @endif
                                    
                                    <div class="product-card-footer" style="padding-top: 16px !important; border-top: 1px solid rgba(7, 6, 7, 0.08) !important; margin-top: auto !important; display: flex !important; align-items: center !important; justify-content: flex-end !important;">
                                        <a href="{{ route('product-cat', $cat->slug) }}" class="product-explore-btn">
                                            {{ __('common.explore') }}
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <!-- Specific Category Catalog: Show products inside this Category -->
                        @foreach($products as $product)
                            <div class="product-card-new">
                                <div class="product-card-image">
                                    @php 
                                        $photo = isset($product->photo) ? explode(',', $product->photo) : ['assets/media/blogs/bd-1.png'];
                                    @endphp
                                    <a href="{{ route('product-detail', $product->slug) }}" class="product-card-image-link">
                                        <img src="{{ asset($photo[0]) }}" alt="{{ $product->title }}">
                                    </a>
                                </div>
                                
                                <div class="product-card-body">
                                    <h3 class="product-card-title">{{ $product->title }}</h3>
                                    
                                    @if($product->summary)
                                        <p class="product-card-summary">{{ $product->summary }}</p>
                                    @endif
                                    
                                    <div class="product-card-footer">
                                        <div class="product-card-price">
                                            <span class="product-card-price-label">{{ __('common.points') }}</span>
                                            <span class="product-card-price-value">{{ number_format(Helper::getProductPriceByCurrency('USD', $product), 0) }}</span>
                                        </div>
                                        <div class="product-card-actions">
                                            <a href="{{ route('product-detail', $product->slug) }}" class="product-explore-btn">
                                                {{ __('common.explore') }}
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                            <form action="{{route('single-add-to-cart')}}" method="POST" class="m-0">
                                                @csrf
                                                <input type="hidden" name="quant[1]" class="qty-input" value="1">
                                                <input type="hidden" name="slug" value="{{$product->slug}}">
                                                <button type="submit" class="product-card-btn">
                                                    <i class="fas fa-shopping-cart me-2"></i>
                                                    {{ __('common.add_to_cart') }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        @else
            <div class="no-products">
                <div class="no-products-icon">
                    <i class="fas fa-frown"></i>
                </div>
                <h3>{{ __('common.there_are_no_products') }}</h3>
                <p>{{ __('common.no_products_intro') }}</p>
            </div>
        @endif
    </div>
</section>

@push('scripts')
<script>
// Compact and premium page setup
</script>
@endpush

@endsection
