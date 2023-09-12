var colors = ['#ff6f48', '#0175df', '#08cb80'];

const homeHero = document.getElementById("home-hero");
const homeNav = document.querySelector("nav");

if (homeHero) {

  var changeBackground = function () {

    const color = colors[Math.floor(Math.random() * colors.length)];
    homeHero.style.background = color;
    homeNav.style.background = color;
  };

  changeBackground();
}



