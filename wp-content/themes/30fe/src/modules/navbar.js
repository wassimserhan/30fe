const hamburger = document.querySelector('.nav__menu');
const body = document.getElementsByTagName('body')[0];
const sideNav = document.querySelector('.nav__dropdown');
const navLogo = document.querySelector('.nav__logo__black');


// const addTint = document.querySelector('.body__hider');

hamburger.addEventListener('click', menu);

// document.addEventListener('click', e => {
//   if (!hamburger.contains(e.target)) {
//     closeSideMenu();
//   }
// })

function menu() {
  sideNav.classList.toggle('show-nav');
  sideNav.classList.toggle('hide-nav');
  body.classList.toggle('fixed-position');
  hamburger.classList.toggle('is-active');
  // addTint.classList.toggle('hide__body');
  navLogo.classList.toggle('nav__logo__black--active');
}

// Side Nav open/close on menu item click
const navItems = document.querySelectorAll('.nav__items');


navItems.forEach(item => {
  item.addEventListener('click', closeSideMenu);
});



function closeSideMenu() {
  hamburger.classList.remove('is-active');
  sideNav.classList.remove('show-nav');
  body.classList.remove('fixed-position');
}



// Mobile Dropdowns

const accordionsAbout = document.querySelectorAll('.accordion-about');

const openAccordionAbout = accordion => {
  const content = accordion.querySelector('.accordion-about__content');
  accordion.classList.add('accordion-about__active');
  content.style.maxHeight = content.scrollHeight + 5 + 'px';
};

const closeAccordionAbout = accordion => {
  const content = accordion.querySelector('.accordion-about__content');
  accordion.classList.remove('accordion-about__active');
  content.style.maxHeight = null;
  content.style.paddingTop = null;
};

accordionsAbout.forEach(accordion => {
  const intro = accordion.querySelector('.accordion-about__wrapper');
  const content = accordion.querySelector('.accordion-about__content');

  intro.onclick = () => {
    if (content.style.maxHeight) {
      closeAccordionAbout(accordion);
    } else {
      accordionsAbout.forEach(accordion => closeAccordionAbout(accordion));
      openAccordionAbout(accordion);
    }
  };
});


//Show Nav on Scroll

// Enable hidden nav bar
{
  const nav = document.querySelector(".nav");
  const header = document.querySelector(".header");
  let lastScrollY = window.scrollY;


  window.addEventListener("scroll", () => {

    if (lastScrollY < window.scrollY && lastScrollY > 800) {
      nav.classList.add("nav--hidden");
      header.style.zIndex = "-1";
    } else {
      nav.classList.remove("nav--hidden");
      header.style.zIndex = "10";
    }

    lastScrollY = window.scrollY;
  });
}

// Desktop Dropdowns
const navExpertise = document.querySelector('.nav-expertise');
const plusExpertise = document.querySelector('.plus-expertise');
const expertiseDropdown = document.querySelector('.nav__dropdown-grid--expertise');

const navSectors = document.querySelector('.nav-sectors');
const plusSectors = document.querySelector('.plus-sectors');
const sectorsDropdown = document.querySelector('.nav__dropdown-grid--sectors');

// Helper function to close all dropdowns
const closeAllDropdowns = () => {
  expertiseDropdown.classList.remove('nav__dropdown-grid--active');
  plusExpertise.classList.remove('plus-nav--active');
  sectorsDropdown.classList.remove('nav__dropdown-grid--active');
  plusSectors.classList.remove('plus-nav--active');
};

// Open Expertise Dropdown
navExpertise.addEventListener('mouseover', () => {
  closeAllDropdowns();
  expertiseDropdown.classList.add('nav__dropdown-grid--active');
  plusExpertise.classList.add('plus-nav--active');
});

// Open Sectors Dropdown
navSectors.addEventListener('mouseover', () => {
  closeAllDropdowns();
  sectorsDropdown.classList.add('nav__dropdown-grid--active');
  plusSectors.classList.add('plus-nav--active');
});

// Close dropdowns on resize
window.addEventListener('resize', () => {
  closeAllDropdowns();
});

// Close dropdowns on scroll
window.addEventListener('scroll', () => {
  closeAllDropdowns();
});

// Close Expertise Dropdown on mouseleave
expertiseDropdown.addEventListener('mouseleave', () => {
  expertiseDropdown.classList.remove('nav__dropdown-grid--active');
  plusExpertise.classList.remove('plus-nav--active');
});

// Close Sectors Dropdown on mouseleave
sectorsDropdown.addEventListener('mouseleave', () => {
  sectorsDropdown.classList.remove('nav__dropdown-grid--active');
  plusSectors.classList.remove('plus-nav--active');
});

