
const fullscreen = document.querySelector(".fullscreen");

if (fullscreen) {


  const $whitesmoke = '#f2f1ed';
  $black = '#1d1c1d';
  $taupe = '#cbbea5';
  $orange = '#ff6f48';
  $blue = '#0175df';
  $green = '#08cb80';
  $white = '#ffffff';


  let navData = document.querySelector('.nav');
  let pageTitle = navData.getAttribute('data-page');
  let sectionColors;

  switch (pageTitle) {
    case 'Home':
      sectionColors = [$whitesmoke, $taupe, $whitesmoke, $whitesmoke, $taupe, $whitesmoke, $taupe];
      // navColors = [$black, $whitesmoke, $taupe, $whitesmoke, $whitesmoke, $taupe, $whitesmoke, $taupe];
      break;
    case 'About':
      sectionColors = [$black, $whitesmoke, $whitesmoke, $taupe, $black, $whitesmoke, $taupe];
      break;
    case 'Team':
      sectionColors = [$whitesmoke, $taupe];
      break;
    case 'Expertise':
      sectionColors = [$green, $whitesmoke, $taupe];
      break;
    case 'Sectors':
      sectionColors = [$black, $black, $taupe, $whitesmoke];
      break;
    case 'Careers':
      sectionColors = [$black, $orange, $blue, $green, $taupe, $black];
      break;
    case 'Insights':
      sectionColors = [$whitesmoke];
      break;

  }


  // const sectionColors = ["#00BFFF", "#FFA07A"]

  gsap.registerPlugin(ScrollTrigger)

  //apply sectionColors to each .fullscreen element
  gsap.set(".fullscreen", { backgroundColor: gsap.utils.wrap(sectionColors) })
  // gsap.set(".nav", { backgroundColor: gsap.utils.wrap(sectionColors) })


  const sections = gsap.utils.toArray(".fullscreen")


  sections.forEach(function (section, index) {
    let tl = gsap.timeline();
    ScrollTrigger.create({
      trigger: section,
      start: "top 78px",
      end: "bottom 78px",
      animation: tl.to(".nav", { backgroundColor: sectionColors[index], immediateRender: false }),
      toggleActions: "restart none none reverse"

    })
  })


}
