// Hamburger Menu Toggle
const hamburger = document.querySelector('.nav__menu');
const body = document.body;
const sideNav = document.querySelector('.nav__dropdown');
const navLogo = document.querySelector('.nav__logo__black');

hamburger.addEventListener('click', () => {
  toggleClass(sideNav, 'show-nav', 'hide-nav');
  body.classList.toggle('fixed-position');
  hamburger.classList.toggle('is-active');
  navLogo.classList.toggle('nav__logo__black--active');
});

// Utility function to toggle classes
function toggleClass(element, addClass, removeClass) {
  element.classList.toggle(addClass);
  element.classList.toggle(removeClass);
}

// Close Side Menu on Navigation Item Click
document.querySelectorAll('.nav__items').forEach(item => {
  item.addEventListener('click', () => {
    hamburger.classList.remove('is-active');
    sideNav.classList.remove('show-nav');
    body.classList.remove('fixed-position');
  });
});

// Mobile Dropdowns
const accordionsAbout = document.querySelectorAll('.accordion-about');

// Open Accordion
const openAccordion = accordion => {
  const content = accordion.querySelector('.accordion-about__content');
  accordion.classList.add('accordion-about__active');
  content.style.maxHeight = `${content.scrollHeight}px`;
};

// Close Accordion
const closeAccordion = accordion => {
  const content = accordion.querySelector('.accordion-about__content');
  accordion.classList.remove('accordion-about__active');
  content.style.maxHeight = null;
};

// Add event listeners to accordions
accordionsAbout.forEach(accordion => {
  const intro = accordion.querySelector('.accordion-about__wrapper');
  intro.addEventListener('click', () => {
    const isActive = accordion.classList.contains('accordion-about__active');
    accordionsAbout.forEach(closeAccordion);
    if (!isActive) openAccordion(accordion);
  });
});

// Show/Hide Navigation Bar on Scroll
{
  const nav = document.querySelector('.nav');
  const header = document.querySelector('.header');
  let lastScrollY = window.scrollY;

  window.addEventListener('scroll', () => {
    const isScrollingDown = lastScrollY < window.scrollY && lastScrollY > 800;
    nav.classList.toggle('nav--hidden', isScrollingDown);
    header.style.zIndex = isScrollingDown ? '-1' : '10';
    lastScrollY = window.scrollY;
  });
}

// Dropdown Menu for Desktop
const navItems = [
  { trigger: '.nav-expertise', dropdown: '.nav__dropdown-grid--expertise', icon: '.plus-expertise' },
  { trigger: '.nav-sectors', dropdown: '.nav__dropdown-grid--sectors', icon: '.plus-sectors' },
  { trigger: '.nav-people', dropdown: '.nav__dropdown-grid--people', icon: '.plus-people' },
  { trigger: '.nav-latest', dropdown: '.nav__dropdown-grid--latest', icon: '.plus-latest' }
];

const closeAllDropdowns = () => {
  navItems.forEach(({ dropdown, icon }) => {
    document.querySelector(dropdown).classList.remove('nav__dropdown-grid--active');
    document.querySelector(icon).classList.remove('plus-nav--active');
  });
};

navItems.forEach(({ trigger, dropdown, icon }) => {
  const triggerElement = document.querySelector(trigger);
  const dropdownElement = document.querySelector(dropdown);
  const iconElement = document.querySelector(icon);

  // Handle click on icon (always toggle dropdown)
  iconElement.addEventListener('click', (event) => {
    event.preventDefault();
    event.stopPropagation();

    const isActive = dropdownElement.classList.contains('nav__dropdown-grid--active');
    closeAllDropdowns();

    if (!isActive) {
      dropdownElement.classList.add('nav__dropdown-grid--active');
      iconElement.classList.add('plus-nav--active');
    }
  });

  // Only allow <p> triggers to toggle dropdown on click
  if (triggerElement.querySelector('p')) {
    triggerElement.querySelector('p').addEventListener('click', (event) => {
      event.preventDefault();
      event.stopPropagation();

      const isActive = dropdownElement.classList.contains('nav__dropdown-grid--active');
      closeAllDropdowns();

      if (!isActive) {
        dropdownElement.classList.add('nav__dropdown-grid--active');
        iconElement.classList.add('plus-nav--active');
      }
    });
  }
});


// Close dropdowns on resize or scroll
['resize', 'scroll'].forEach(event =>
  window.addEventListener(event, closeAllDropdowns)
);