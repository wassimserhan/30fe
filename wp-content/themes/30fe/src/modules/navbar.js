const hamburger = document.querySelector('.nav__menu');
const body = document.getElementsByTagName('body')[0];
const sideNav = document.querySelector('.nav__dropdown');

hamburger.addEventListener('click', menu);

document.addEventListener('click', e => {
  if (!hamburger.contains(e.target)) {
    closeSideMenu();
  }
})

function menu() {
  sideNav.classList.toggle('show-nav');
  sideNav.classList.toggle('hide-nav');
  body.classList.toggle('fixed-position');
  hamburger.classList.toggle('is-active');
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

