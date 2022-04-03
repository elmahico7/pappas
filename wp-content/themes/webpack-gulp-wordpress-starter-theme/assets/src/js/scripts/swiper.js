/* eslint-disable */ 
// import Swiper from 'swiper';
// import 'swiper/css/bundle';
import {
  Swiper,
  EffectCoverflow,
  Navigation,
  Autoplay
} from 'swiper';
Swiper.use([Navigation, Autoplay, EffectCoverflow]);


const swiper = new Swiper('.swiper', {
  // Optional parameters
  // direction: 'vertical',
  loop: true,
  grubCursor: true,
  speed: 800,


  // If we need pagination
  // pagination: {
  //   el: '.swiper-pagination',
  // },

  // // Navigation arrows
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },

  // // And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
});