<!-- Footer Area Start -->
<style>
/* =====================================================================
   CALDERA FOOTER — 4-Column Grid Layout
   Logo | Navigation | Policies | Newsletter
   ===================================================================== */

.gaming-footer {
  background: var(--color-basalt-canvas);
  color: var(--color-abyssal-ink);
  padding: 60px 0 0;
  border-top: 2px solid var(--color-digital-orange);
  position: relative;
  overflow: hidden;
}

.footer-container {
  max-width: 1320px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-top {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 30px;
  padding: 60px 0;
}

/* ---- Column 1: Logo & Company ---- */
.footer-brand {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.footer-logo {
  width: 120px;
  height: auto;
}

.footer-logo img {
  width: 100%;
  height: auto;
  object-fit: contain;
  max-height: 120px;
  display: block;
  mix-blend-mode: multiply;
}

.footer-company-details {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.footer-company-details h3 {
  font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
  font-size: 20px !important;
  color: var(--color-abyssal-ink);
  margin: 0;
  font-weight: 800 !important;
  letter-spacing: 0.02em;
  text-transform: uppercase;
}

.footer-company-details p {
  font-family: var(--font-dm-sans) !important;
  font-size: 15px !important;
  color: var(--color-abyssal-ink);
  line-height: 1.6;
  margin: 0 0 12px 0;
}

.footer-company-details p:last-child {
  margin-bottom: 0;
}

.footer-company-details a {
  color: var(--color-digital-orange);
  text-decoration: none;
  transition: all 0.3s ease;
  font-weight: 500;
}

.footer-company-details a:hover {
  color: var(--color-abyssal-ink);
}

/* ---- Column 2: Navigation Links ---- */
.footer-nav {
  display: flex;
  flex-direction: column;
}

.footer-nav h4 {
  font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
  font-size: 20px !important;
  color: var(--color-abyssal-ink);
  margin: 0 0 20px 0;
  font-weight: 800 !important;
  letter-spacing: 0.02em;
  text-transform: uppercase;
}

.footer-nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.footer-nav li {
  margin: 0;
}

.footer-nav a {
  font-family: var(--font-dm-sans) !important;
  font-size: 15px !important;
  color: var(--color-abyssal-ink);
  text-decoration: none;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  gap: 10px;
}

.footer-nav a:hover {
  color: var(--color-digital-orange);
  transform: translateX(4px);
}

.footer-nav i {
  width: 16px;
  height: 16px;
  color: var(--color-digital-orange);
  font-size: 14px;
}

/* ---- Column 3: Policy Links ---- */
.footer-policies {
  display: flex;
  flex-direction: column;
}

.footer-policies h4 {
  font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
  font-size: 20px !important;
  color: var(--color-abyssal-ink);
  margin: 0 0 20px 0;
  font-weight: 800 !important;
  letter-spacing: 0.02em;
  text-transform: uppercase;
}

.footer-policies ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.footer-policies li {
  margin: 0;
}

.footer-policies a {
  font-family: var(--font-dm-sans) !important;
  font-size: 15px !important;
  color: var(--color-abyssal-ink);
  text-decoration: none;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  gap: 10px;
}

.footer-policies a:hover {
  color: var(--color-digital-orange);
  transform: translateX(4px);
}

.footer-policies i {
  width: 16px;
  height: 16px;
  color: var(--color-digital-orange);
  font-size: 14px;
}

/* ---- Column 4: Newsletter ---- */
.footer-newsletter {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.footer-newsletter h4 {
  font-family: var(--font-pp-neue-corp-compact-ultrabold) !important;
  font-size: 20px !important;
  color: var(--color-abyssal-ink);
  margin: 0;
  font-weight: 800 !important;
  letter-spacing: 0.02em;
  text-transform: uppercase;
}

.footer-newsletter p {
  font-family: var(--font-dm-sans) !important;
  font-size: 15px !important;
  color: var(--color-abyssal-ink);
  line-height: 1.6;
  margin: 0;
}

.newsletter-form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.newsletter-input {
  padding: 10px 14px;
  border: 2px solid var(--color-abyssal-ink);
  border-radius: 8px;
  font-family: var(--font-dm-sans) !important;
  font-size: 14px !important;
  color: var(--color-abyssal-ink);
  background: var(--color-ash-white);
  transition: all 0.3s ease;
}

.newsletter-input:focus {
  outline: none;
  border-color: var(--color-digital-orange);
  box-shadow: 0 0 0 3px rgba(252, 80, 0, 0.1);
}

.newsletter-input::placeholder {
  color: rgba(7, 6, 7, 0.5);
}

.newsletter-btn {
  padding: 10px 20px;
  background: var(--color-digital-orange);
  color: var(--color-pure-white);
  border: none;
  border-radius: 8px;
  font-family: var(--font-dm-sans) !important;
  font-size: 14px !important;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  text-transform: uppercase;
}

.newsletter-btn:hover {
  background: var(--color-abyssal-ink);
  color: var(--color-digital-orange);
  transform: translateY(-2px);
}

.newsletter-success {
  display: none;
  padding: 12px;
  background: rgba(252, 80, 0, 0.1);
  border: 1px solid var(--color-digital-orange);
  border-radius: 8px;
  color: var(--color-abyssal-ink);
  font-size: 13px;
  animation: fadeInUp 0.4s ease;
}

.newsletter-success.show {
  display: block;
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}

/* ---- Footer Bottom: Copyright & Payments ---- */
.footer-bottom {
  background: var(--color-ash-white);
  border-top: 2px solid var(--color-digital-orange);
  padding: 30px 0;
}

.footer-bottom-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
  flex-wrap: wrap;
}

.footer-copyright {
  font-family: var(--font-dm-sans) !important;
  font-size: 14px !important;
  color: var(--color-abyssal-ink);
  flex: 1;
}

.footer-copyright a {
  color: var(--color-digital-orange);
  text-decoration: none;
  transition: all 0.3s ease;
}

.footer-copyright a:hover {
  color: var(--color-abyssal-ink);
}

.payment-icons {
  display: flex;
  align-items: center;
  gap: 12px;
}

.payment-icons img {
  height: 30px;
  width: auto;
  object-fit: contain;
  opacity: 0.8;
  transition: opacity 0.3s ease;
}

.payment-icons img:hover {
  opacity: 1;
}

/* ---- Responsive ---- */
@media (max-width: 1024px) {
  .footer-top {
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    padding: 40px 0;
  }
}

@media (max-width: 768px) {
  .footer-top {
    grid-template-columns: 1fr;
    gap: 30px;
    padding: 40px 0;
  }

  .footer-bottom-content {
    flex-direction: column;
    align-items: flex-start;
  }
}
</style>

<!-- Close main-wrapper from header -->
</div>

<footer class="gaming-footer">
  <div class="footer-container">
    <!-- 5-Column Grid -->
    <div class="footer-top">

      <!-- Column 1: Logo -->
      <div class="footer-brand">
        <a href="{{route('home')}}" class="footer-logo">
          <img src="{{ url('assets/media/images/logo.webp') }}" alt="BattleNPC">
        </a>
      </div>

      <!-- Column 2: Company Details -->
      <div class="footer-company-details">
        <h3>{{ $misc['Company Name'] }}</h3>
        <p>
          <strong>{{ __('common.email') }}:</strong><br>
          <a href="mailto:{{ $misc['Company Email'] }}" style="color: var(--color-abyssal-ink); text-decoration: none;">
            {{ $misc['Company Email'] }}
          </a>
        </p>
        <p>
          <strong>{{ __('common.location') }}:</strong><br>
          {{ $misc['Company Address'] }}
        </p>
      </div>

      <!-- Column 3: Navigation Links -->
      <div class="footer-nav">
        <h4>{{ __('common.navigate') }}</h4>
        <ul>
          <li>
            <a href="{{route('home')}}">
              <i class="fas fa-home"></i>
              {{ __('common.home') }}
            </a>
          </li>
          <li>
            <a href="{{route('about-us')}}">
              <i class="fas fa-info-circle"></i>
              {{ __('common.about_us') }}
            </a>
          </li>
          <li>
            <a href="{{route('product-lists')}}">
              <i class="fas fa-gamepad"></i>
              {{ __('common.games') }}
            </a>
          </li>
          <li>
            <a href="{{route('contact')}}">
              <i class="fas fa-comments"></i>
              {{ __('common.contact_us') }}
            </a>
          </li>
        </ul>
      </div>

      <!-- Column 4: Policy Links -->
      <div class="footer-policies">
        <h4>{{ __('common.policies') }}</h4>
        <ul>
          <li>
            <a href="{{route('pages','delivery-policy')}}">
              <i class="fas fa-truck"></i>
              {{ __('common.delivery_policy') }}
            </a>
          </li>
          <li>
            <a href="{{route('pages','privacy-policy')}}">
              <i class="fas fa-shield-alt"></i>
              {{ __('common.privacy_policy') }}
            </a>
          </li>
          <li>
            <a href="{{route('pages','refund-policy')}}">
              <i class="fas fa-redo"></i>
              {{ __('common.refund_policy') }}
            </a>
          </li>
          <li>
            <a href="{{route('pages','terms-conditions')}}">
              <i class="fas fa-file-alt"></i>
              {{ __('common.terms_conditions') }}
            </a>
          </li>
        </ul>
      </div>

      <!-- Column 5: Newsletter -->
      <div class="footer-newsletter">
        <h4>{{ __('common.subscribe_our_newsletter') }}</h4>
        <form id="subscribe-form" class="newsletter-form">
          <input type="email" id="newsletter-email" name="newsletter-email" required placeholder="{{ __('common.your_email') }}" class="newsletter-input">
          <button type="submit" class="newsletter-btn">
            {{ __('common.subscribe') }}
          </button>
          <div class="newsletter-success" id="newsletterSuccess">
            {{ __('common.success_message') }}
          </div>
        </form>
      </div>

    </div>
  </div>

  <!-- Footer Bottom: Copyright & Payments -->
  <div class="footer-bottom">
    <div class="footer-container">
      <div class="footer-bottom-content">
        <p class="footer-copyright">
          © {{date('Y')}} <a href="{{route('home')}}">{{ $misc['Company Name'] }}</a>. {{ __('common.all_right_reserved') }}
        </p>
        <div class="payment-icons">
          <img src="{{url('assets/media/images/payment.webp')}}" alt="Payment Methods">
        </div>
      </div>
    </div>
  </div>

</footer>
<!-- Footer Area End -->

<!-- jQuery & Scripts -->
<script src="{{url('assets/js/vendor/jquery-3.6.3.min.js')}}"></script>
<script src="{{url('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/vendor/slick.min.js')}}"></script>
<script src="{{url('assets/js/vendor/jquery-appear.js')}}"></script>
<script src="{{url('assets/js/vendor/jquery-validator.js')}}"></script>
<script src="{{url('assets/js/vendor/aksVideoPlayer.js')}}"></script>

<!-- Site Scripts -->
<script src="{{url('assets/js/app.js')}}"></script>
<script src="{{url('assets/js/wow.js')}}"></script>

<script>
new WOW().init();

// Auto-hide flash alerts
setTimeout(function() {
  $('.alert').slideUp();
}, 5000);

// Back-to-top button visibility on scroll
$(window).scroll(function() {
  if ($(this).scrollTop() > 500) {
    $('#backto-top').addClass('show');
  } else {
    $('#backto-top').removeClass('show');
  }
});

// Lock page scroll while the side cart is open
$('.sideCartToggler').click(function() {
  $('body').css('overflow', 'hidden');
});
$('.sideMenuCls2').click(function() {
  $('body').css('overflow', '');
});

// Newsletter form
$('#subscribe-form').on('submit', function(e) {
  e.preventDefault();
  $('#newsletterSuccess').addClass('show');
  $(this)[0].reset();
  setTimeout(function() {
    $('#newsletterSuccess').removeClass('show');
  }, 4000);
});
</script>

</body>
</html>