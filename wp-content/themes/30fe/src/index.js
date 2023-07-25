import '../css/style.scss';



// Default theme
import '@splidejs/splide/css';

// or other themes
import '@splidejs/splide/css/skyblue';
import '@splidejs/splide/css/sea-green';

// or only core styles
import '@splidejs/splide/css/core';

import Splide from '@splidejs/splide';


new Splide('.splide', {
  type: 'loop',
  perPage: 3,
}).mount();




// Our modules / classes
// import agenda from './agenda';
// import main from './main';
// import navbar from './navbar';




