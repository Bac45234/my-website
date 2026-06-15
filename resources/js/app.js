import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.mjs'

const swiper = new Swiper('.swiper', {
  loop: true,
  speed: 6000,
  spaceBetween: 30,
  freeMode: true,
  slidesPerView: "auto",
  simulateTouch: false,
  allowTouchMove: false,
  autoplay: {
    delay: 0,
    pauseOnMouseEnter: true,
  }
});