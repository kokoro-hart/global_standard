// swiper
import Swiper from '@modules/swiper/swiper-bundle.min.js';

const myDelay = 7000;
const startAnimation = (index) => {
  let activeSlide = document.querySelectorAll('.js-slider-content')[index];
  activeSlide.classList.add('is-active');
}

const finishAnimation = () => {
  let activeSlide = document.querySelector('.js-slider-content.is-active');
  if (activeSlide) {
    activeSlide.classList.remove('is-active');
  }
}

const mySwiper = new Swiper('.p-mv .swiper', {
  loop: true,
  loopAdditionalSlides: 1,
  speed: 1000,
  autoplay: {
    delay: myDelay,
    disableOnInteraction: false,
    waitForTransition: false,
  },
  followFinger: false,
  observeParents: true,
  on: {
    slideChange: (swiper) => {
      finishAnimation();
    },
    slideChangeTransitionStart: (swiper) => {
      startAnimation(swiper.realIndex);
    },
  }
});