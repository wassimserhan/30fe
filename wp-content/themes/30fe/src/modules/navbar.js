const hamburger = document.querySelector('.nav__menu');
const body = document.getElementsByTagName('body')[0];
const sideNav = document.querySelector('.nav__dropdown');
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
  addTint.classList.toggle('hide__body');
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



// About Accordion

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
  let lastScrollY = window.scrollY;


  window.addEventListener("scroll", () => {
    console.log(window.scrollY)
    if (lastScrollY < window.scrollY && lastScrollY > 1200) {
      nav.classList.add("nav--hidden");
    } else {
      nav.classList.remove("nav--hidden");
    }


    lastScrollY = window.scrollY;
  });
}
