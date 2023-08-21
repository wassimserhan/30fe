
const hamburger = document.querySelector('.nav__menu');
const nav = document.querySelector('.nav');
const navItems = document.querySelectorAll('.nav__items');
const dropdown = document.querySelector('.nav__dropdown');
const logoBlack = document.querySelector('.nav__logo__black');
const logoWhite = document.querySelector('.nav__logo__white');

function dropdownMenu() {
  if (dropdown.style.display === 'grid') {
    dropdown.style.display = 'none';
    nav.classList.remove("dark-bg");
    hamburger.classList.remove("nav__menu-reverse");
    document.body.classList.remove('no-scroll');
    logoBlack.style.display = "block";
    logoWhite.style.display = "none";
  } else {
    dropdown.style.display = 'grid';
    nav.classList.add("dark-bg");
    hamburger.classList.add("nav__menu-reverse");
    document.body.classList.add('no-scroll');
    logoBlack.style.display = "none";
    logoWhite.style.display = "block";
  }
}


hamburger.addEventListener('click', dropdownMenu);

navItems.forEach(item => {
  item.addEventListener('click', function () {
    dropdown.style.display = 'none';
    hamburger.classList.remove('is-active');
    nav.classList.remove("dark-bg");
    hamburger.classList.remove("nav__menu-reverse");
    document.body.classList.remove('no-scroll');
    logoBlack.style.display = "block";
    logoWhite.style.display = "none";
  });
});

