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

const slider1 = document.getElementById('slider1');

if (slider1) {
  new Splide('#slider1', {
    classes: {

      arrows: 'splide__arrows splide-testimonials__arrows',
      arrow: 'splide__arrow splide-testimonials__arrow',
      prev: 'splide__arrow--prev splide-testimonials__arrow--prev',
      next: 'splide__arrow--next splide-testimonials__arrow--next',
    },
    type: 'loop',
    perPage: 1,
    pagination: false,

  }).mount();
}

const slider2 = document.getElementById('slider2');

if (slider2) {
  new Splide('#slider2', {
    classes: {
      arrows: 'splide__arrows splide-form__arrows',
      arrow: 'splide__arrow splide-form__arrow',
      prev: 'splide__arrow--prev splide-form__arrow--prev',
      next: 'splide__arrow--next splide-form__arrow--next',
    },

    type: 'loop',
    perPage: 1,
    pagination: false,
    autoplay: true,
  }).mount();
}





// modules
import './modules/careers';
import './modules/expertise';
import './modules/timeline';
import './modules/contact';
import './modules/teamSearch';
import './modules/teamImages';
import './modules/blogSearch';
import './modules/homeStatsMobile';
import './modules/homeStats';
import './modules/accordion';
import './modules/navColors';
import './modules/navbar';
import Search from './modules/search';

// import main from './main';
// import navbar from './navbar';

// classes

const magicalSearch = new Search()






