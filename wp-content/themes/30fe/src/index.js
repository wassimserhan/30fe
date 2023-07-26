import '../css/style.scss';



// Default theme
import '@splidejs/splide/css';

// or other themes
import '@splidejs/splide/css/skyblue';
import '@splidejs/splide/css/sea-green';

// or only core styles
import '@splidejs/splide/css/core';

import Splide from '@splidejs/splide';


new Splide('#splide', {
  type: 'loop',
  perPage: 1,
  pagination: false,

}).mount();

// new Splide('#splide-timeline', {
//   type: 'slide',
//   perPage: 3,
//   pagination: false,
//   arrows: true,
//   perMove: 1,
//   keyboard: true,
// }).mount();



// Our modules / classes
import gsap from './gsap';
// import main from './main';
// import navbar from './navbar';




