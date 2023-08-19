
const hamburger = document.querySelector('.nav__menu');
const nav = document.querySelector('.nav');
const body = document.getElementsByTagName('body')[0];
const navItems = document.querySelectorAll('.nav__items');
const dropdown = document.querySelector('.nav__dropdown');

function dropdownMenu() {
  if (dropdown.style.display === 'grid') {
    dropdown.style.display = 'none';
    hamburger.classList.remove('is-active');
    nav.classList.remove("dark-bg");
    hamburger.classList.remove("nav__menu-reverse");
  } else {
    dropdown.style.display = 'grid';
    hamburger.classList.add('is-active');
    nav.classList.add("dark-bg");
    hamburger.classList.add("nav__menu-reverse");
  }
}

// jQuery(window).on('resize', function () {
//   var win = jQuery(this); //this = window
//   if (win.width() >= 1201) {
//     dropdown.style.display = 'none';
//     hamburger.classList.remove('is-active');
//   }
// });

hamburger.addEventListener('click', dropdownMenu);

navItems.forEach(item => {
  item.addEventListener('click', function () {
    dropdown.style.display = 'none';
    hamburger.classList.remove('is-active');
    nav.classList.remove("dark-bg");
    hamburger.classList.remove("nav__menu-reverse");

  });
  body.classList.remove('fixed-postion');
});

