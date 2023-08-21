
const $whitesmoke = '#f2f1ed';
$monochromeBlack = '#1d1c1d';
$taupe = '#cbbea5';
$orange = '#ff6f48';
$blue = '#0175df';
$green = '#08cb80';
$black = '#1d1c1d';
$white = '#ffffff';


let navData = document.querySelector('.nav');
let pageTitle = navData.getAttribute('data-page');
let navColors;

switch (pageTitle) {
  case 'Home':
    // gsap.set(".nav", { backgroundColor: $black });
    // gsap.set(".nav__items", { color: $white });
    navColors = [$whitesmoke, $taupe, $whitesmoke, $whitesmoke, $whitesmoke, $whitesmoke, $taupe];
    break;
  case 'About':
    // gsap.set(".nav", { backgroundColor: $black });
    // gsap.set(".nav__items", { color: $white });
    navColors = [$white, $whitesmoke, $whitesmoke, $taupe];
    break;
  case 'Team':
    navColors = [$taupe];
    break;
  case 'Expertise':
    // gsap.set(".nav", { backgroundColor: $green });
    // gsap.set(".nav__items", { color: $white });
    navColors = [$green, $whitesmoke, $taupe];
    break;
  case 'Sectors':
    // gsap.set(".nav", { backgroundColor: $black });
    // gsap.set(".nav__items", { color: $white });
    navColors = [$black, $black, $taupe, $whitesmoke];
    break;
}


// const sectionColors = ["#00BFFF", "#FFA07A"]

gsap.registerPlugin(ScrollTrigger)

//apply sectionColors to each .fullscreen element
// gsap.set(".fullscreen", { backgroundColor: gsap.utils.wrap(sectionColors) })


const sections = gsap.utils.toArray(".fullscreen")

sections.forEach(function (section, index) {
  let tl = gsap.timeline();
  console.log(pageTitle)
  ScrollTrigger.create({
    trigger: section,
    start: "top 78px",
    end: "bottom 78px",
    animation: tl.to(".nav", { backgroundColor: navColors[index], immediateRender: false }),
    toggleActions: "play none none reverse"

  })
})




