/* eslint-disable */ 
import {
  Swiper,
  EffectCoverflow,
  Navigation,
  Autoplay,
  EffectFade,
} from 'swiper';
Swiper.use([Navigation, Autoplay, EffectCoverflow, EffectFade]);


const swiper = new Swiper('.swiper', {
  // direction: 'vertical',
  loop: true,
  // grubCursor: true,
  // speed: 5000,
  // effect: 'fade',
  // fadeEffect: {
  //   crossFade: true
  // },
  effect: 'coverflow',
  coverflowEffect: {
    rotate: 30,
    slideShadows: false,
  },
  autoplay: {
    enabled: true,
    delay: 5000,
    disableOnInteraction: false
  },
  // pagination: {
  //   el: '.swiper-pagination',
  // },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
});