
const fullscreen = document.querySelector(".fullscreen");

if (fullscreen) {


  const $whitesmoke = '#f2f1ed';
  $black = '#1d1c1d';
  $taupe = '#cbbea5';
  $orange = '#ff6f48';
  $blue = '#0175df';
  $green = '#08cb80';
  $white = '#ffffff';
  $logoBlack = 'invert(0%)'
  $logoWhite = 'invert(100%)'



  let navData = document.querySelector('.nav');
  let pageTitle = navData.getAttribute('data-page');
  let sectionColors;
  let logoColor;
  let borderColor;

  switch (pageTitle) {
    case 'front-page.php':
      sectionColors = [$whitesmoke, $taupe, $whitesmoke, $whitesmoke, $taupe, $whitesmoke, $taupe];
      navColors = [$whitesmoke, $taupe, $whitesmoke, $whitesmoke, $taupe, $whitesmoke, $taupe];
      logoColor = [$logoBlack];
      borderColor = [$black];
      break;
    case 'about.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__menu-search", { borderColor: $whitesmoke })
      sectionColors = [$black, $whitesmoke, $whitesmoke, $taupe, $black, $whitesmoke, $taupe];
      navColors = [$black, $whitesmoke, $whitesmoke, $taupe, $black, $whitesmoke, $taupe];
      logoColor = [$logoWhite, $logoBlack, $logoBlack, $logoBlack, $logoWhite, $logoBlack, $logoBlack, $logoBlack];
      borderColor = [$whitesmoke, $black, $black, $black, $whitesmoke, $black, $black];
      break;
    case 'team.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke, $taupe];
      navColors = [$whitesmoke, $taupe];
      logoColor = [$logoBlack];
      borderColor = [$black];
      break;
    case 'expertise.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__menu-search", { borderColor: $whitesmoke })
      sectionColors = [$black, $whitesmoke, $taupe];
      navColors = [$black, $whitesmoke, $taupe];
      logoColor = [$logoWhite, $logoBlack, $logoBlack];
      borderColor = [$whitesmoke, $black];
      break;
    case 'sectors.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__menu-search", { borderColor: $whitesmoke })
      sectionColors = [$black, $black, $taupe, $whitesmoke];
      navColors = [$black, $black, $taupe, $whitesmoke];
      logoColor = [$logoWhite, $logoWhite, $logoBlack];
      borderColor = [$whitesmoke, $whitesmoke, $black];
      break;
    case 'contact.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      sectionColors = [$black, $black, $taupe];
      navColors = [$black, $black, $taupe];
      logoColor = [$logoWhite, $logoWhite, $logoBlack];
      borderColor = [$black];
      break;
    case 'careers.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      sectionColors = [$black, $orange, $blue, $green, $taupe, $black];
      navColors = [$black, $orange, $blue, $green, $taupe, $black];
      logoColor = [$logoWhite, $logoBlack, $logoBlack, $logoBlack, $logoBlack, $logoWhite];
      borderColor = [$black];
      break;
    case 'home.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      logoColor = [$logoBlack];
      borderColor = [$black];
      break;
    case 'single-expertise.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke, $whitesmoke, $whitesmoke];
      navColors = [$whitesmoke, $whitesmoke, $whitesmoke];
      logoColor = [$logoBlack];
      borderColor = [$black];
      break;
    case 'single-sector.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke, $whitesmoke, $taupe];
      navColors = [$whitesmoke, $whitesmoke, $taupe];
      logoColor = [$logoBlack];
      borderColor = [$black];
      break;
    case 'single-team.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke, $taupe];
      navColors = [$whitesmoke, $taupe];
      logoColor = [$logoBlack];
      borderColor = [$black];
      break;
    case 'single.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      sectionColors = [$black, $whitesmoke, $taupe];
      navColors = [$black, $whitesmoke, $taupe];
      logoColor = [$logoWhite, $logoBlack, $logoBlack];
      borderColor = [$black];
      break;
    case 'archive.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      logoColor = [$logoBlack];
      borderColor = [$black];
      break;
    case 'seminars.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      logoColor = [$logoBlack];
      borderColor = [$black];
      break;
    case 'news.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      logoColor = [$logoBlack];
      borderColor = [$black];
      break;
    case 'single-news.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      logoColor = [$logoBlack];
      borderColor = [$black];
      break;
    case 'submit.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      logoColor = [$logoBlack];
      borderColor = [$black];
      break;
  }


  // const sectionColors = ["#00BFFF", "#FFA07A"]

  gsap.registerPlugin(ScrollTrigger)

  //apply sectionColors to each .fullscreen element
  gsap.set(".fullscreen", { backgroundColor: gsap.utils.wrap(sectionColors) })
  // gsap.set(".nav", { backgroundColor: gsap.utils.wrap(sectionColors) })


  const sections = gsap.utils.toArray(".fullscreen")


  sections.forEach(function (section, index) {



    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: section,
        start: "top 78px",
        end: "bottom 78px",
        toggleActions: "restart none none reverse"
      }
    })
      .to(".nav", { backgroundColor: navColors[index], immediateRender: false })
      .to(".nav__logo__black", {
        filter: logoColor[index], immediateRender: false
      }, "<")
      .to(".nav__menu-search", {
        borderColor: borderColor[index], immediateRender: false
      }, "<")
  })

}

