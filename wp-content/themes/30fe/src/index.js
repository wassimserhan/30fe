import '../css/style.scss';


//splide modules

// Default theme
import '@splidejs/splide/css';

// or other themes
import '@splidejs/splide/css/skyblue';
import '@splidejs/splide/css/sea-green';

// or only core styles
import '@splidejs/splide/css/core';

import Splide from '@splidejs/splide';


// modules
import gsapTeam from './modules/gsapTeam';
import gsapStats from './modules/gsapStats';
import accordion from './modules/accordion';
import Search from './modules/search'
// import main from './main';
// import navbar from './navbar';

// classes
new Splide('#splide', {
  classes: {
    arrows: 'splide__arrows splide-form__arrows',
    arrow: 'splide__arrow splide-form__arrow',
    prev: 'splide__arrow--prev splide-form__arrow--prev',
    next: 'splide__arrow--next splide-form__arrow--next',
  },
  type: 'loop',
  perPage: 1,
  pagination: false,

}).mount();

new Splide('#splide-testimonials', {

  classes: {
    arrows: 'splide__arrows splide-testimonials__arrows',
    arrow: 'splide__arrow splide-testimonials__arrow',
    prev: 'splide__arrow--prev splide-testimonials__arrow--prev',
    next: 'splide__arrow--next splide-testimonials__arrow--next',
  },

  type: 'loop',
  perPage: 1,
  pagination: false,
  autoplay: true,
}).mount();

const magicalSearch = new Search()




