/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Swiper Initialization Function
window.initSwipers = function() {
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
};

// Auto-initialize Swiper when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
  if (typeof window.initSwipers === 'function') {
    window.initSwipers();
  }
});

const app = new Vue({
    el: '#app',
});
