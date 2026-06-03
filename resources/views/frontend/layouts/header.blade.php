<style>
/* =====================================================================
   CALDERA HEADER — Premium Gaming Theme
   Full-width to Floating Navbar with smooth scroll transformation
   ===================================================================== */

:root {
  --transition-duration: 400ms;
  --transition-easing: cubic-bezier(0.22, 1, 0.36, 1);
}

/* ---- Preloader ---- */
#preloader {
  position: fixed;
  inset: 0;
  background: var(--color-basalt-canvas);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 99999;
  transition: opacity 0.5s ease, visibility 0.5s ease;
}

.preloader-content {
  text-align: center;
  background: var(--color-ash-white);
  border-radius: 16px;
  padding: 40px 48px;
  border: 2px solid var(--color-digital-orange);
  box-shadow: 0 10px 40px rgba(7, 6, 7, 0.1);
}

.preloader-logo { margin-bottom: 20px; }
.preloader-logo img {
  width: 80px;
  height: 80px;
  object-fit: contain;
  border-radius: 12px;
  background: var(--color-basalt-canvas);
  padding: 8px;
}

.preloader-spinner { margin-bottom: 20px; }

.spinner-ring {
  width: 50px;
  height: 50px;
  border: 3px solid rgba(252, 80, 0, 0.2);
  border-top-color: var(--color-digital-orange);
  border-radius: 50%;
  animation: spin 1s linear infinite;
  margin: 0 auto;
}

.preloader-text {
  color: var(--color-digital-orange);
  font-family: 'DM Sans', sans-serif;
  font-size: 13px;
  letter-spacing: 2px;
  text-transform: uppercase;
  margin: 0;
  font-weight: 500;
}

@keyframes spin { to { transform: rotate(360deg); } }

/* ---- Back to Top ---- */
.back-to-top {
  background: #fc5000;
  color: #fff;
  width: 44px;
  height: 44px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 999;
  transition: all 0.3s ease;
}

.back-to-top:hover {
  background: #e64a00;
  transform: translateY(-3px);
}

/* ============================================================================
   HEADER — Full-width Desktop Version
   ============================================================================ */

header.large-screens {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  background: var(--color-ash-white);
  z-index: 1000;
  transition: all var(--transition-duration) var(--transition-easing);
  display: block !important;
  overflow: visible !important;
  box-shadow: 0 2px 10px rgba(7, 6, 7, 0.08);
}

header.large-screens.scrolled {
  width: 1200px;
  left: 50%;
  transform: translateX(-50%);
  top: 16px;
  background: rgba(247, 246, 242, 0.95);
  border: 2px solid var(--color-digital-orange);
  border-radius: 20px;
  padding: 0;
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  box-shadow: 0 20px 60px rgba(7, 6, 7, 0.15);
}

/* Navbar container */
header.large-screens nav.navbar {
  min-height: auto;
  background: transparent !important;
  border: none !important;
  padding: 16px 32px;
  display: flex;
  align-items: center;
  gap: 20px;
  position: relative;
}

/* ---- Logo/Brand with Animated Background ---- */
header.large-screens .navbar-brand {
  padding: 8px 16px !important;
  margin: 0 !important;
  background: linear-gradient(135deg, rgba(252, 80, 0, 0.05), rgba(252, 80, 0, 0.02));
  border: 2px solid rgba(252, 80, 0, 0.1);
  border-radius: 12px;
  display: flex;
  align-items: center;
  flex-shrink: 0;
  transition: all 0.3s ease;
  z-index: 10;
  position: relative;
  overflow: hidden;
}

header.large-screens .navbar-brand::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(252, 80, 0, 0.1) 0%, transparent 70%);
  animation: brandGlow 4s ease-in-out infinite;
  z-index: 1;
}

header.large-screens .navbar-brand img {
  height: 48px;
  width: auto;
  max-width: 280px;
  object-fit: contain;
  display: block !important;
  background: transparent !important;
  padding: 0 !important;
  margin: 0 !important;
  border: none !important;
  box-shadow: none !important;
  position: relative;
  z-index: 2;
}

@keyframes brandGlow {
  0%, 100% { transform: scale(1); opacity: 0.5; }
  50% { transform: scale(1.1); opacity: 0.8; }
}

header.large-screens.scrolled .navbar-brand img {
  height: 40px;
}

header.large-screens .navbar-brand:hover {
  transform: scale(1.02);
}

/* Remove any background effects on logo container */
header.large-screens .navbar-brand::before,
header.large-screens .navbar-brand::after {
  display: none !important;
}

/* ---- Navigation Menu ---- */
header.large-screens nav .navbar-collapse {
  display: flex !important;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  flex-basis: auto !important;
  margin: 0 !important;
  padding: 0 !important;
  position: relative;
  overflow: visible !important;
}

header.large-screens .navbar-nav.mainmenu {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 4px;
  margin: 0 !important;
  background: transparent !important;
  flex: 1;
}

header.large-screens .navbar-nav.mainmenu > li {
  list-style: none;
  margin: 0;
  position: relative;
}

header.large-screens .navbar-nav.mainmenu > li > a {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  color: var(--color-abyssal-ink) !important;
  padding: 8px 16px !important;
  border-radius: 8px;
  font-size: 13px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  text-decoration: none;
  background: transparent !important;
  transition: all 0.3s ease;
  font-family: 'DM Sans', sans-serif;
}

header.large-screens .navbar-nav.mainmenu > li > a:hover,
header.large-screens .navbar-nav.mainmenu > li > a.active {
  color: var(--color-pure-white) !important;
  background: var(--color-digital-orange) !important;
}

header.large-screens .navbar-nav.mainmenu > li > a .fa-caret-down {
  color: inherit;
  font-size: 10px;
}

/* ---- Dropdown Submenus ---- */
header.large-screens .submenu,
.navbar .dropdown-menu {
  background: var(--color-ash-white) !important;
  border: 2px solid var(--color-digital-orange) !important;
  border-radius: 12px !important;
  padding: 8px !important;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1) !important;
  min-width: 200px;
  backdrop-filter: blur(10px);
  position: absolute !important;
  z-index: 1100 !important;
  top: 100% !important;
  left: 0 !important;
  display: none !important;
}

header.large-screens .submenu li,
.navbar .dropdown-menu li {
  list-style: none;
  margin: 0 0 2px;
}

header.large-screens .submenu li a,
.navbar .dropdown-menu li a {
  display: block;
  padding: 10px 14px !important;
  background: transparent !important;
  border-radius: 8px !important;
  color: var(--color-abyssal-ink) !important;
  font-size: 13px;
  font-weight: 500;
  text-decoration: none;
  transition: all 0.25s ease;
  font-family: 'DM Sans', sans-serif;
}

header.large-screens .submenu li a:hover,
.navbar .dropdown-menu li a:hover {
  background: var(--color-digital-orange) !important;
  color: var(--color-pure-white) !important;
}

/* Show dropdown on parent hover */
header.large-screens .menu-item:hover > .submenu,
header.large-screens .menu-item.has-children:hover .submenu,
.navbar li:hover > .dropdown-menu {
  display: block !important;
}

/* Override Bootstrap dropdown styles */
.dropdown-menu,
.submenu {
  background-color: var(--color-ash-white) !important;
  border: 2px solid var(--color-digital-orange) !important;
  border-radius: 12px !important;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1) !important;
}

.dropdown-item {
  color: var(--color-abyssal-ink) !important;
  padding: 10px 14px !important;
  border-radius: 8px !important;
  transition: all 0.25s ease;
}

.dropdown-item:hover,
.dropdown-item:focus,
.dropdown-item.active,
.dropdown-item:active {
  background-color: var(--color-digital-orange) !important;
  color: var(--color-pure-white) !important;
  border-radius: 8px !important;
}

/* Game mega menu: 2-col grid */
.game-mega-menu {
  display: grid !important;
  grid-template-columns: repeat(2, minmax(140px, 1fr));
  gap: 2px 12px;
  min-width: 340px !important;
  max-width: 460px !important;
}

/* Currency & Language dropdowns */
header.large-screens .navbar-nav.right-content li.menu-item.has-children .children,
header.large-screens .navbar-nav.right-content li.has-children .children,
.navbar-nav.right-content li.menu-item.has-children .children,
.navbar-nav.right-content li.has-children .children {
  background: var(--color-ash-white) !important;
  border: 2px solid var(--color-digital-orange) !important;
  border-radius: 12px !important;
  padding: 8px !important;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1) !important;
  position: absolute !important;
  z-index: 1100 !important;
  top: 100% !important;
  right: 0 !important;
  left: auto !important;
  min-width: 160px !important;
  display: none !important;
  list-style: none !important;
  margin: 8px 0 0 0 !important;
  padding: 8px !important;
}

header.large-screens .navbar-nav.right-content li.menu-item.has-children:hover .children,
header.large-screens .navbar-nav.right-content li.has-children:hover .children,
.navbar-nav.right-content li.menu-item.has-children:hover .children,
.navbar-nav.right-content li.has-children:hover .children {
  display: block !important;
}

header.large-screens .navbar-nav.right-content li.menu-item.has-children .children li,
header.large-screens .navbar-nav.right-content li.has-children .children li,
.navbar-nav.right-content li.menu-item.has-children .children li,
.navbar-nav.right-content li.has-children .children li {
  list-style: none !important;
  margin: 0 !important;
  padding: 0 !important;
}

header.large-screens .navbar-nav.right-content li.menu-item.has-children .children li a,
header.large-screens .navbar-nav.right-content li.has-children .children li a,
.navbar-nav.right-content li.menu-item.has-children .children li a,
.navbar-nav.right-content li.has-children .children li a {
  display: block;
  padding: 10px 14px !important;
  background: transparent !important;
  border: none !important;
  border-radius: 8px !important;
  color: var(--color-abyssal-ink) !important;
  font-size: 13px;
  font-weight: 500;
  text-decoration: none;
  transition: all 0.25s ease;
  font-family: 'DM Sans', sans-serif;
  margin: 0 !important;
}

header.large-screens .navbar-nav.right-content li.menu-item.has-children .children li a:hover,
header.large-screens .navbar-nav.right-content li.has-children .children li a:hover,
.navbar-nav.right-content li.menu-item.has-children .children li a:hover,
.navbar-nav.right-content li.has-children .children li a:hover {
  background: var(--color-digital-orange) !important;
  color: var(--color-pure-white) !important;
  border: none !important;
}

/* Override old theme styles for currency/language buttons */
header.large-screens .navbar-nav.right-content li.menu-item > a.main-menu-item:hover,
.navbar-nav.right-content li.menu-item > a.main-menu-item:hover {
  background: var(--color-digital-orange) !important;
  border-color: var(--color-digital-orange) !important;
  color: var(--color-pure-white) !important;
}

/* ---- Right Content (Icons & Controls) ---- */
header.large-screens .navbar-nav.right-content {
  display: flex;
  align-items: center;
  gap: 12px;
  margin: 0 !important;
}

header.large-screens .navbar-nav.right-content > li {
  position: relative;
}

header.large-screens .navbar-nav.right-content > li.menu-item > a.main-menu-item {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: var(--color-ash-white) !important;
  border: 2px solid var(--color-abyssal-ink) !important;
  border-radius: 20px !important;
  color: var(--color-abyssal-ink) !important;
  padding: 8px 14px !important;
  font-size: 12px;
  font-weight: 500;
  text-transform: uppercase;
  text-decoration: none;
  white-space: nowrap;
  transition: all 0.3s ease;
  font-family: 'DM Sans', sans-serif;
}

header.large-screens .navbar-nav.right-content > li.menu-item > a.main-menu-item:hover {
  background: var(--color-digital-orange) !important;
  border-color: var(--color-digital-orange) !important;
  color: var(--color-pure-white) !important;
}

/* Icon buttons (cart, account) */
header.large-screens .right-content li.icon a,
header.large-screens .navbar-nav.right-content li.menu-item > a.header-icon-btn {
  width: 40px !important;
  height: 40px !important;
  min-width: 40px !important;
  padding: 0 !important;
  background: var(--color-ash-white) !important;
  border: 2px solid var(--color-abyssal-ink) !important;
  border-radius: 10px !important;
  color: var(--color-abyssal-ink) !important;
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  position: relative;
  transition: all 0.3s ease;
  font-family: 'DM Sans', sans-serif;
  text-decoration: none;
}

header.large-screens .right-content li.icon a:hover,
header.large-screens .navbar-nav.right-content li.menu-item > a.header-icon-btn:hover {
  background: var(--color-digital-orange) !important;
  border-color: var(--color-digital-orange) !important;
  color: var(--color-pure-white) !important;
  transform: translateY(-2px);
}

header.large-screens .right-content li.icon a svg,
header.large-screens .navbar-nav.right-content li.menu-item > a.header-icon-btn svg {
  width: 18px !important;
  height: 18px !important;
  stroke: currentColor !important;
  fill: none !important;
  color: inherit !important;
}

header.large-screens .right-content li.icon a .badge-uinfo {
  position: absolute;
  top: -6px;
  right: -6px;
  background: #fc5000 !important;
  color: #fff !important;
  font-size: 10px;
  font-weight: 700;
  min-width: 18px;
  height: 18px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 4px;
  box-shadow: 0 0 0 2px rgba(10, 10, 20, 0.95);
}

/* Credits chip (logged-in users) */
.custom-jpont { list-style: none; }
.custom-jpont a {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: #fc5000 !important;
  color: #fff !important;
  border-radius: 20px;
  padding: 8px 14px;
  font-weight: 500;
  font-size: 12px;
  text-decoration: none;
  box-shadow: 0 0 20px rgba(252, 80, 0, 0.3);
  transition: all 0.3s ease;
  font-family: 'DM Sans', sans-serif;
}

.custom-jpont a:hover {
  background: #e64a00 !important;
  transform: translateY(-2px);
  box-shadow: 0 5px 25px rgba(252, 80, 0, 0.4);
}

/* ============================================================================
   MOBILE HEADER
   ============================================================================ */

header.small-screen {
  display: none !important;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  background: var(--color-ash-white);
  border-bottom: 2px solid var(--color-digital-orange);
  padding: 12px 16px;
  z-index: 1000;
  backdrop-filter: blur(10px);
}

header.small-screen .navbar {
  padding: 0;
}

header.small-screen .navbar-brand img {
  height: 40px;
  width: auto;
}

header.small-screen .hamburger-menu {
  width: 40px;
  height: 40px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 5px;
  cursor: pointer;
}

header.small-screen .hamburger-menu .bar {
  width: 24px;
  height: 2px;
  background: var(--color-abyssal-ink) !important;
  border-radius: 2px;
  transition: all 0.3s ease;
}

header.small-screen .hamburger-menu.active .bar:nth-child(1) {
  transform: rotate(45deg) translate(8px, 8px);
}

header.small-screen .hamburger-menu.active .bar:nth-child(2) {
  opacity: 0;
}

header.small-screen .hamburger-menu.active .bar:nth-child(3) {
  transform: rotate(-45deg) translate(8px, -8px);
}

header.small-screen .mobile-navar {
  position: absolute;
  top: 60px;
  left: 0;
  right: 0;
  background: var(--color-ash-white) !important;
  border-bottom: 2px solid var(--color-digital-orange);
  max-height: calc(100vh - 60px);
  overflow-y: auto;
  backdrop-filter: blur(10px);
  display: none;
}

header.small-screen .mobile-navar.active {
  display: block;
}

header.small-screen .mobile-navar ul {
  list-style: none;
  margin: 0;
  padding: 12px;
}

header.small-screen .mobile-navar ul li a {
  display: block;
  padding: 12px 16px !important;
  border-radius: 8px;
  color: var(--color-abyssal-ink) !important;
  font-size: 14px;
  font-weight: 500;
  text-decoration: none;
  background: var(--color-basalt-canvas) !important;
  border: 2px solid rgba(7, 6, 7, 0.1) !important;
  margin-bottom: 6px;
  transition: all 0.3s ease;
  font-family: 'DM Sans', sans-serif;
}

header.small-screen .mobile-navar ul li a:hover,
header.small-screen .mobile-navar ul li a.active {
  background: var(--color-digital-orange) !important;
  color: var(--color-pure-white) !important;
  border-color: var(--color-digital-orange) !important;
}

/* ============================================================================
   SIDE CART PANEL (Glassmorphism)
   ============================================================================ */

.sideCart-wrapper.offcanvas-wrapper {
  position: fixed !important;
  top: 0 !important;
  right: 0 !important;
  bottom: 0 !important;
  left: 0 !important;
  width: 100% !important;
  height: 100% !important;
  z-index: 1100 !important;
  background: rgba(0, 0, 0, 0) !important;
  backdrop-filter: blur(0px);
  -webkit-backdrop-filter: blur(0px);
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
  pointer-events: none;
}

.sideCart-wrapper.offcanvas-wrapper.show {
  background: rgba(0, 0, 0, 0.4) !important;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.sideCart-wrapper .sidemenu-content {
  position: fixed !important;
  right: 0 !important;
  top: 0 !important;
  bottom: 0 !important;
  width: 420px !important;
  max-width: 92vw !important;
  padding: 0 !important;
  background: var(--color-ash-white) !important;
  border: 2px solid var(--color-digital-orange) !important;
  border-right: none !important;
  border-left: 2px solid var(--color-digital-orange) !important;
  backdrop-filter: blur(10px);
  overflow: hidden !important;
  display: flex !important;
  flex-direction: column !important;
  box-shadow: -20px 0 50px rgba(0, 0, 0, 0.1);
  z-index: 1101 !important;
  transform: translateX(100%);
  transition: transform 0.3s ease;
  height: 100vh !important;
}

.sideCart-wrapper.show .sidemenu-content {
  transform: translateX(0);
}

/* Cart header */
.sideCart-wrapper .widget_title {
  position: relative;
  flex: 0 0 auto;
  margin: 0 !important;
  padding: 24px 24px 20px !important;
  background: var(--color-basalt-canvas) !important;
  color: var(--color-abyssal-ink) !important;
  font-family: 'DM Sans', sans-serif !important;
  font-size: 16px !important;
  font-weight: 600 !important;
  text-transform: uppercase;
  letter-spacing: 1px;
  display: flex;
  align-items: center;
  gap: 10px;
  border: none !important;
  border-bottom: 2px solid var(--color-digital-orange) !important;
}

.sideCart-wrapper .widget_title::before {
  content: "\f07a";
  font-family: "Font Awesome 5 Free", "Font Awesome 5 Pro", sans-serif;
  font-weight: 900;
  color: var(--color-digital-orange);
  font-size: 16px;
}


/* Cart items */
.sideCart-wrapper .cart_list {
  flex: 1 1 auto;
  min-height: 0;
  overflow-y: auto;
  list-style: none;
  margin: 0;
  padding: 16px;
}

.sideCart-wrapper .mini_cart_item {
  position: relative;
  list-style: none;
  background: var(--color-basalt-canvas) !important;
  border: 2px solid rgba(7, 6, 7, 0.1) !important;
  border-radius: 12px !important;
  padding: 14px !important;
  margin: 0 0 10px !important;
  transition: all 0.25s ease;
}

.sideCart-wrapper .mini_cart_item:hover {
  border-color: var(--color-digital-orange) !important;
  background: rgba(252, 80, 0, 0.05) !important;
}

.sideCart-wrapper .cart-product-title {
  color: var(--color-abyssal-ink) !important;
  font-family: 'DM Sans', sans-serif !important;
  font-weight: 600;
  font-size: 14px;
  line-height: 1.3;
  margin: 0 0 6px;
}

.sideCart-wrapper .cart-total-points {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  background: var(--color-digital-orange);
  color: #fff !important;
  font-family: 'DM Sans', sans-serif !important;
  font-weight: 600;
  font-size: 12px;
  padding: 4px 10px;
  border-radius: 12px;
  line-height: 1;
  margin-top: 6px;
}

.sideCart-wrapper .mini_cart_item > .remove {
  position: absolute !important;
  top: 10px !important;
  right: 10px !important;
  width: 28px;
  height: 28px;
  border-radius: 6px;
  background: rgba(255, 42, 42, 0.1);
  border: 1px solid rgba(255, 42, 42, 0.2);
  color: #ff2a2a !important;
  font-size: 12px;
  display: flex !important;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  transition: all 0.2s ease;
  cursor: pointer;
}

.sideCart-wrapper .mini_cart_item > .remove:hover {
  background: #ff2a2a;
  border-color: #ff2a2a;
  color: #fff !important;
}

/* Cart footer */
.sideCart-wrapper .sidecart-footer {
  flex: 0 0 auto;
  padding: 16px;
  background: var(--color-basalt-canvas);
  border-top: 2px solid rgba(7, 6, 7, 0.1);
}

.sideCart-wrapper .total {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: var(--color-digital-orange) !important;
  border: none !important;
  border-radius: 10px;
  padding: 14px 16px;
  margin: 0 0 12px !important;
  width: 100%;
}

.sideCart-wrapper .total strong {
  color: var(--color-pure-white) !important;
  font-family: 'DM Sans', sans-serif !important;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin: 0;
}

.sideCart-wrapper .total .amount {
  color: var(--color-pure-white) !important;
  font-family: 'DM Sans', sans-serif !important;
  font-weight: 700;
  font-size: 20px;
  white-space: nowrap;
}

.sideCart-wrapper .buttons {
  display: flex;
  gap: 10px;
  margin: 0 !important;
}

.sideCart-wrapper .buttons .cus-btn {
  flex: 1;
  width: auto !important;
  margin: 0 !important;
  justify-content: center;
  text-align: center;
  background: #fc5000 !important;
  color: #fff !important;
  border: none !important;
  padding: 12px 14px !important;
  font-size: 12px !important;
  font-family: 'DM Sans', sans-serif !important;
  font-weight: 600 !important;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  border-radius: 8px !important;
  transition: all 0.2s ease !important;
  cursor: pointer;
}

.sideCart-wrapper .buttons .cus-btn:hover {
  background: #e64a00 !important;
  transform: translateY(-2px);
}

.sideCart-wrapper .closeButton {
  position: absolute !important;
  top: 16px !important;
  right: 16px !important;
  z-index: 6;
  width: 34px;
  height: 34px;
  border-radius: 8px;
  padding: 0 !important;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(252, 80, 0, 0.1) !important;
  border: 1px solid rgba(252, 80, 0, 0.2) !important;
  color: var(--color-digital-orange) !important;
  font-size: 16px;
  line-height: 1;
  cursor: pointer;
  transition: all 0.2s ease;
}

.sideCart-wrapper .closeButton:hover {
  background: rgba(252, 80, 0, 0.2) !important;
  transform: rotate(90deg);
}

/* ============================================================================
   RESPONSIVE
   ============================================================================ */

@media (max-width: 1199px) {
  header.large-screens { display: none !important; }
  header.small-screen { display: block !important; }
}

@media (min-width: 1200px) {
  header.small-screen { display: none !important; }
  header.large-screens { display: block !important; }
}

@media (max-width: 768px) {
  header.small-screen { padding: 10px 12px; }
  .sideCart-wrapper .sidemenu-content { width: 100vw !important; max-width: 100vw !important; }
}
</style>
<body>
  <!-- Preloader-->
  <div id="preloader">
    <div class="preloader-content">
      <div class="preloader-logo">
        <img src="{{ asset('assets/media/favicon.webp') }}" alt="Polygamez">
      </div>
      <div class="preloader-spinner">
        <div class="spinner-ring"></div>
      </div>
      <p class="preloader-text">Loading...</p>
    </div>
  </div>
  <!-- Back To Top Start -->
  <a href="#main-wrapper" id="backto-top" class="back-to-top"><i class="fas fa-angle-up"></i></a>
  <!-- Main Wrapper Start -->
  <div id="main-wrapper" class="main-wrapper overflow-hidden">

    <!-- Header Area Start -->
    <header class="large-screens">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="collapse navbar-collapse justify-content-between">

            <a class="navbar-brand" href="{{route('home')}}" style="display: inline-block !important; padding: 0 !important;">
    <img
        alt="Polygamez"
        src="{{url('assets/media/logo.webp')}}"
        style="height: 74px !important; width: auto !important; max-width: 300px !important; object-fit: contain !important; display: block !important; padding: 0 !important; margin: 0 !important;"
    >
</a>

            <ul class="navbar-nav mainmenu">
              <li class="menu-item has-children">
                <a href="{{route('home')}}" class="main-menu-item {{ request()->routeIs('home') ? 'active' : '' }}">{{__('common.home')}}</a>  </li> 
                 <li class="menu-item has-children">
                <a href="{{route('about-us')}}" class="main-menu-item {{ request()->routeIs('about-us') ? 'active' : '' }}">{{__('common.about')}}</a>  </li> 
                 
              <li class="menu-item has-children">

    <a href="javascript:void(0);" class="main-menu-item" style="min-width:80px;">
      {{__('common.games')}}
        <i class="fas fa-caret-down ms-1"></i>
    </a>

    <ul class="submenu game-mega-menu">

        @php 
            $categories = Helper::productCategoryList("all");
        @endphp

        @foreach($categories as $cat_info)
            <li class="menu-item">
                <a href="{{ route('product-cat', $cat_info->slug) }}">
                    {{ $cat_info->title }}
                </a>
            </li>
        @endforeach

    </ul>

</li>
               <li class="menu-item has-children"><a href="{{route('contact')}}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">{{__('common.contact_us')}}</a></li>
             
            </ul>
            @auth
    @php
        $points = DB::table('users')
            ->where('id', auth()->id())
            ->value('points')?? 0;
    @endphp

    <li style="list-style:none;" class="custom-jpont">
        <a href="javascript:void(0)">
            <span>{{ __('common.credits') }}: <b class="dash-epnt1" >{{ $points }}</b></span>
        </a>
    </li>
@endauth

            <ul class="navbar-nav right-content unstyled"> 
               <li class="menu-item has-children d-none d-md-block">
                <a href="javascript:void(0);" class="main-menu-item ">
                  {{Helper::getCurrencySymbol(session('currency')).' '.session('currency')}}
                     @php  $currencies = Helper::CurrenciesList();  @endphp
                    
                    <i class="fas fa-caret-down m-1"></i></a>
                <ul class="submenu">
    @foreach($currencies as $currency) 
<li><a class="dropdown-item" href="{{ route('change.currency', $currency->code) }}">{{$currency->symbol." ".$currency->code}}</a></li>
                            @endforeach
                </ul>
              </li>

              <li class="menu-item has-children d-none d-md-block">
                <a href="javascript:void(0);" class="main-menu-item " style="min-width:80px;">
                         @php
                                if(session('app_locale') == 'ja') {
                                    echo 'JA';
                                } else {
                                    echo 'EN';
                                }
                            @endphp

                    <i class="fas fa-caret-down m-1"></i></a>
                <ul class="submenu">
         <li><a href="{{ route('change.language', 'en') }}">EN</a></li>
        <li><a href="{{ route('change.language', 'ja') }}">JA</a></li>
                </ul>
              </li>

                    <!-- Cart Icon -->
              <li class="icon position-relative sideCartToggler">
                <a href="javascript:void(0)" class="header-icon-btn cart-icon-btn" aria-label="Shopping Cart">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="9" cy="21" r="1"/>
                        <circle cx="20" cy="21" r="1"/>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                    </svg>
                    <span class="badge-uinfo">{{ Helper::totalCartQuantity() }}</span>
                </a>
            </li>
            
            <!-- User/Profile Icon with Dropdown -->
            @if(Auth::check() && Auth::user()->role=='user')
                <li class="menu-item has-children">
                    <a href="{{route('user')}}" class="header-icon-btn" aria-label="My Account">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('user')}}">{{ __('common.my_account') ?? 'My Account' }}</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('common.logout') ?? 'Logout' }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="menu-item has-children">
                    <a href="javascript:void(0)" class="header-icon-btn" aria-label="Account">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('login.form')}}">{{ __('common.login') }}</a></li>
                        <li><a href="{{route('register.form')}}">{{ __('common.register') }}</a></li>
                    </ul>
                </li>
            @endif
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <header class="small-screen">
      <div class="container">
        <div class="mobile-menu">
<a class="navbar-brand" href="{{route('home')}}" style="display: inline-block !important; padding: 0 !important;">
    <img
        src="{{url('assets/media/logo.webp')}}"
        alt="Polygamez"
        style="height: 62px !important; width: auto !important; max-width: 250px !important; object-fit: contain !important; display: block !important; padding: 0 !important; margin: 0 !important;"
    >
</a>
          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
        <nav class="mobile-navar d-xl-none">
          <ul>
            <li class="mobile-icons-row">
              <a href="#" class="mobile-icon-btn" onclick="document.querySelector('.sideCart-wrapper').classList.add('show'); return false;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="9" cy="21" r="1"></circle>
                  <circle cx="20" cy="21" r="1"></circle>
                  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                <span>Cart</span>
                <span class="badge">{{Helper::cartCount()}}</span>
              </a>
              @if(Auth::check() && Auth::user()->role=='user')
                <a href="{{route('user')}}" class="mobile-icon-btn">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <span>Account</span>
                </a>
              @else
                <a href="{{route('login.form')}}" class="mobile-icon-btn">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                  <span>Login</span>
                </a>
              @endif
            </li>
 
           

              <li class="has-children active"><a href="{{route('home')}}">{{__('common.home')}}</a>  </li>
            <li class="has-children">{{__('common.games')}} <span class="icon-arrow"></span>

               @php 
            $categories = Helper::productCategoryList("all");
        @endphp
        <ul class="childern">
           @foreach($categories as $cat_info)
            <li class="menu-item">
                <a href="{{ route('product-cat', $cat_info->slug) }}">
                    {{ $cat_info->title }}
                </a>
            </li>
          @endforeach
      </ul>
            </li>
              <li class="has-children"><a href="{{route('about-us')}}">{{__('common.about_us')}}</a></li>  
             <li class=" has-children"><a href="{{route('database')}}">{{__('common.database')}}</a></li> 
                <li class=" has-children"> <a href="{{route('contact')}}">{{__('common.contact_us')}}</a></li>
                <li class="has-children">  {{Helper::getCurrencySymbol(session('currency')).' '.session('currency')}}
                     @php  $currencies = Helper::CurrenciesList();  @endphp <span class="icon-arrow"></span>
         <ul class="children">
              
        @foreach($currencies as $currency) 
          <li><a class="dropdown-item" href="{{ route('change.currency', $currency->code) }}">{{$currency->symbol." ".$currency->code}}</a></li>
                            @endforeach
            </li>
</ul>
</li>

             <li class="has-children">
                <a href="javascript:void(0);" >
                         @php
                                if(session('app_locale') == 'ja') {
                                    echo 'JA';
                                } else {
                                    echo 'EN';
                                }
                            @endphp 
                    
                   <span class="icon-arrow"></span></a>
                <ul class="children">
         <li><a href="{{ route('change.language', 'en') }}">EN</a></li>
        <li><a href="{{ route('change.language', 'ja') }}">JA</a></li>
                </ul>
              </li>
              @if(Auth::check() && Auth::user()->role=='user')
              <li><a href="{{route('user')}}"><i class="fal fa-address-card"></i></a></li>
                  @else
                <li><a href="{{route('login.form')}}"><i class="fal fa-user"></i></a></li>
                 @endif
</ul>
                

          </ul>
        </nav>
      </div>
    </header>
        <!--==============================
    Cart Side bar
    ============================== -->
   <div class="sideCart-wrapper offcanvas-wrapper ">
    <div class="sidemenu-content">
        <button class="closeButton border-theme bg-theme-hover sideMenuCls2">
            <i class="far fa-times"></i>
        </button>

        <div class="widget widget_shopping_cart">

        @if(Helper::cartCount())

            @php
                $hasGameProduct = false;
            @endphp

            <h3 class="widget_title">{{__('common.shopping_cart')}}</h3>

            <div class="widget_shopping_cart_content">
                <ul class="cart_list">

                @foreach(Helper::getAllProductFromCart() as $key=>$cart)

                    @if(isset($cart->product['id']) && $cart->product['id'] < 1000)
                        @php $hasGameProduct = true; @endphp

                        <li class="mini_cart_item">

                            <a href="{{ route('cart-delete',$cart->id) }}" class="remove">
                                <i class="fal fa-trash-alt"></i>
                            </a>

                            @php
                                $photo = explode(',', $cart->product['photo']);
                        $product_detail= App\Models\Product::getProductBySlug($cart->product->slug);                                                    
                            $a=$cart['price']-$product_detail->price;
                            $perhour = 20;                        
                            
                          $basic=$product_detail->price;
                          $hours=$cart->hours;       
                            @endphp

                            <div class="prductsde_info">

    <a href="{{ route('product-detail',$cart->product->slug) }}">
        <img src="{{ url($photo[0]) }}" alt="Cart Image">
    </a>

    <div class="cart-product-info">

        <p class="cart-product-title">
            {{ $cart->product['title'] }}
        </p>

        @if($hours > 0)

            <p class="mb-0 text-white">
                <span>{{number_format($basic,0)}} +</span>
            </p>

            <div class="car-hours-group">

                <a href="{{ route('trainingdelete', $cart->id) }}"
                   class="training-remove">
                    ×
                </a>

                <h5>
                    {{$hours}} {{ __('common.hours') }}
                </h5>

                <p class="text-white mb-0">
                    ( {{$hours}} X {{number_format($perhour,0)}} )
                </p>

            </div>

        @endif

        <p class="cart-total-points mb-0">
            = {{number_format($cart['price'],0)}} {{ __('common.points') }}
        </p>

    </div>

</div>

                        </li>

                    @else

                        <li class="mini_cart_item">

                            <a href="{{ route('cart-delete',$cart->id) }}" class="remove">
                                <i class="fal fa-trash-alt"></i>
                            </a>

                            @php
                                $user_id = auth()->check() ? auth()->id() : session('guest');
                                $points = App\Models\Cart::where('user_id', $user_id)
                                            ->where('order_id',null)
                                            ->pluck('points')
                                            ->first();
                            @endphp

                            <div class="cart-info">
                                {{ $points.' '.__('common.points') }}

                                <p class="mb-0">
                                     =  {{ Helper::getCurrencySymbol(session('currency')) }}
                                    {{number_format($cart['price'], session('currency')=='JPY' ? 0 : 2)}}
                                </p>
                            </div>

                        </li>

                    @endif

                @endforeach

                </ul>


                {{-- PINNED FOOTER: total + CTAs --}}
                <div class="sidecart-footer">

                    {{-- TOTAL --}}
                    <div class="total">

                        @php
                            $total_amount = Helper::totalCartPrice();

                            if(session()->has('coupon')) {
                                $total_amount -= Session::get('coupon')['value'];
                            }
                        @endphp

                        <strong>{{__('common.total')}}:</strong>

                        @if($hasGameProduct)
                            <span class="amount">{{ number_format($total_amount,0) }} {{ __('common.points') }}</span>
                        @else
                            <span class="amount">{{ Helper::getCurrencySymbol(session('currency')) }} {{ number_format($total_amount,0) }}</span>
                        @endif
                    </div>


                    {{-- BUTTON SECTION --}}
                    <div class="buttons">

                        @if($hasGameProduct)
                            <a href="{{ route('gamecart') }}" class="cus-btn primary">
                                {{ __('common.purchase_services') }}
                            </a>
                        @else
                            <a href="{{ route('cart') }}" class="cus-btn primary">
                                {{__('common.view_cart')}}
                            </a>

                            <a href="{{ route('checkout') }}" class="cus-btn primary">
                                {{__('common.checkout')}}
                            </a>
                        @endif

                    </div>

                </div>

            </div>

        @else

            <div class="widget_title">
                {{ __('common.no_cart_available') }}
            </div>

        @endif

        </div>
    </div>
</div>

<script>
  // Premium Header Scroll Transformation
  document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('header.large-screens');
    const scrollThreshold = 50;
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop > scrollThreshold) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }

      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    }, false);
  });

  // Mobile Menu Toggle
  document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('header.small-screen .hamburger-menu');
    const mobileNav = document.querySelector('header.small-screen .mobile-navar');

    if (hamburger) {
      hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('active');
        mobileNav.classList.toggle('active');
      });
    }

    // Close mobile menu when clicking on a link
    const mobileLinks = document.querySelectorAll('header.small-screen .mobile-navar a');
    mobileLinks.forEach(link => {
      link.addEventListener('click', function() {
        hamburger.classList.remove('active');
        mobileNav.classList.remove('active');
      });
    });
  });

  // Side Cart Toggle
  document.addEventListener('DOMContentLoaded', function() {
    const cartToggler = document.querySelector('.sideCartToggler');
    const cartLink = document.querySelector('.sideCartToggler a');
    const sideCart = document.querySelector('.sideCart-wrapper');
    const closeBtn = document.querySelector('.sideMenuCls2');

    if (cartToggler && sideCart) {
      // Click on li element
      cartToggler.addEventListener('click', function(e) {
        if (e.target !== cartLink && !cartLink.contains(e.target)) return;
        e.preventDefault();
        e.stopPropagation();
        sideCart.classList.toggle('show');
      });

      // Click on link
      if (cartLink) {
        cartLink.addEventListener('click', function(e) {
          e.preventDefault();
          e.stopPropagation();
          sideCart.classList.toggle('show');
        });
      }
    }

    if (closeBtn && sideCart) {
      closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        sideCart.classList.remove('show');
      });
    }

    // Close cart when clicking outside
    document.addEventListener('click', function(e) {
      if (sideCart && sideCart.classList.contains('show')) {
        if (!sideCart.contains(e.target) && !cartToggler.contains(e.target)) {
          sideCart.classList.remove('show');
        }
      }
    });
  });

  // Preloader
  window.addEventListener('load', function() {
    const preloader = document.getElementById('preloader');
    if (preloader) {
      preloader.style.opacity = '0';
      preloader.style.visibility = 'hidden';
    }
  });

  // Back to Top Button
  document.addEventListener('DOMContentLoaded', function() {
    const backToTopBtn = document.getElementById('backto-top');

    if (backToTopBtn) {
      window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
          backToTopBtn.style.display = 'flex';
        } else {
          backToTopBtn.style.display = 'none';
        }
      });

      backToTopBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }
  });
</script>

</body>
</html>
