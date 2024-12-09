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
    arrowPath: 'M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z',
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
    keyboard: true,
    arrowPath: 'M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z',
  }).mount();
}

const slider3 = document.getElementById('slider3');

if (slider3) {
  new Splide('#slider3', {

    breakpoints: {

      640: {
        perPage: 1,
        width: '100%',

      },
    },
    // classes: {
    //   arrows: 'splide__arrows splide-form__arrows',
    //   arrow: 'splide__arrow splide-form__arrow',
    //   prev: 'splide__arrow--prev splide-form__arrow--prev',
    //   next: 'splide__arrow--next splide-form__arrow--next',
    // },
    width: '80%',
    type: 'loop',
    // perPage: 3,
    pagination: false,
    keyboard: true,
    autoplay: true,
  }).mount();
}

const slider4 = document.getElementById('slider4');

if (slider4) {
  new Splide('#slider4', {

    breakpoints: {

      640: {
        perPage: 1,
        width: '100%',

      },
    },
    // width: '50%',
    type: 'fade',
    arrows: false,
    pagination: false,
    keyboard: true,
    autoplay: true,
    rewind: true,
  }).mount();
}


const slider5 = document.getElementById('slider5');

if (slider5) {
  new Splide('#slider5', {

    classes: {
      arrows: 'splide__arrows splide-timeline__arrows',
      arrow: 'splide__arrow splide-timeline__arrow',
      prev: 'splide__arrow--prev splide-timeline__arrow--prev',
      next: 'splide__arrow--next splide-timeline__arrow--next',
    },

    breakpoints: {

      480: {
        width: '98%',
        perPage: 1,

      },

      1024: {
        width: '100%',
        perPage: 3,

      },

      768: {
        width: '100%',
        perPage: 1,

      },
    },
    start: 0,
    perMove: 1,
    width: '98%',
    perPage: 3,
    type: 'slide',
    arrows: true,
    pagination: false,
    keyboard: true,
    focus: 'center',
    trimSpace: false,
    arrowPath: 'M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z',
  }).mount();
}




const careerIntro = document.getElementById('careerIntro');

if (careerIntro) {
  new Splide('#careerIntro', {
    type: 'loop',
    perPage: 2,
    arrows: false,
    pagination: false,
    keyboard: true,
    autoplay: true,
    rewind: true,
    // padding: '5rem',
    breakpoints: {
      486: {
        width: '100%',
        perPage: 1

      }
    },

  }).mount();
}



const careerSlider = document.getElementById('careers-slider');

if (careerSlider) {
  new Splide('#careers-slider', {

    classes: {
      arrows: 'splide__arrows splide-careers__arrows',
      arrow: 'splide__arrow splide-careers__arrow',
      prev: 'splide__arrow--prev splide-careers__arrow--prev',
      next: 'splide__arrow--next splide-careers__arrow--next',
    },
    breakpoints: {
      786: {
        width: '100%',
        perPage: 2,
        arrows: true,

      },
      1251: {
        width: '100%',
        perPage: 2,
        // arrows: false,

      },
    },

    type: 'loop',
    perMove: 1,
    perPage: 3,
    pagination: false,
    keyboard: true,
    arrowPath: 'M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z',

    // autoplay: true
  }).mount();
}







// modules
import './modules/homeScroll';
import './modules/expertiseListHover';
import './modules/ajaxLoadMore';
import './modules/expertise';
import './modules/contact';
import './modules/teamSearch';
import './modules/teamImages';
import './modules/blogSearch';
import './modules/homeStatsMobile';
import './modules/homeStats';
import './modules/accordion';
import './modules/horizontal-timeline';
import './modules/navColors';
import './modules/navbar';
import './modules/careers';
import './modules/lightgallery';




import Search from './modules/search';
import Accordion from './modules/mobileAccordion';



// classes

const magicalSearch = new Search()
if (document.querySelector('.accordion-container')) {
  const mobileAccordion = new Accordion('.accordion-container', {
    openOnInit: [0],
    collapse: false
  })
}















