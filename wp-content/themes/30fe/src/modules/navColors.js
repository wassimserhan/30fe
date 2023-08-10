
// const $whiteSmoke = '#f2f1ed';
// $monochromeBlack = '#1d1c1d';
// $taupe = '#cbbea5';
// $orange = '#ff6f48';
// $black = '#000000';
// $blue = '#0175df';
// $green = '#08cb80';
// $black = '#000000';
// $white = '#ffffff';


// let navData = document.querySelector('.nav');
// let pageTitle = navData.getAttribute('data-page');
// let navColors;
// let itemColors;

// switch (pageTitle) {
//   case 'Home':
//     navColors = [$whiteSmoke, $taupe, $whiteSmoke, $whiteSmoke, $whiteSmoke, $taupe];
//     itemColors = $black;
//     break;
//   case 'Team':
//     navColors = [$whiteSmoke, $taupe, $whiteSmoke, $whiteSmoke, $whiteSmoke, $taupe];
//     itemColors = $black;
//     break;
//   case 'Expertise':
//     gsap.set(".nav", { backgroundColor: $green });
//     // gsap.set(".nav__items", { color: $white });
//     navColors = [$green, $whiteSmoke, $whiteSmoke];
//     itemColors = [$black, $black, $black];
//     break;
//   case 'Sectors':
//     gsap.set(".nav", { backgroundColor: $black });
//     gsap.set(".nav__items", { color: $white });
//     navColors = [$black, $whiteSmoke, $whiteSmoke];
//     itemColors = [$white, $black, $black];
//     break;
// }




// // const sectionColors = ["#00BFFF", "#FFA07A"]

// gsap.registerPlugin(ScrollTrigger)

// //apply sectionColors to each .fullscreen element
// // gsap.set(".fullscreen", { backgroundColor: gsap.utils.wrap(sectionColors) })


// const sections = gsap.utils.toArray(".fullscreen")

// sections.forEach(function (section, index) {
//   let tl = gsap.timeline();
//   console.log(itemColors[index])
//   ScrollTrigger.create({
//     trigger: section,
//     start: "top 78px",
//     end: "bottom 78px",
//     animation: tl.to(".nav", { backgroundColor: navColors[index], immediateRender: false })
//       .to(".nav__items", { color: itemColors[index], immediateRender: false }, '<'),
//     toggleActions: "restart none none reverse"

//   })
// })


// //Nav Scroll

// var prev = 0;
// var nav = document.querySelector("header");

// window.addEventListener("scroll", function () {
//   var scrollTop = window.pageYOffset || 0;

//   if (scrollTop > prev) {
//     nav.classList.add("hidden");
//   } else {
//     nav.classList.remove("hidden");
//   }

//   prev = scrollTop;
// });

