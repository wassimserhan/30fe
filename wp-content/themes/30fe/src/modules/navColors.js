
const fullscreen = document.querySelector(".fullscreen");



if (fullscreen) {


  const $whitesmoke = '#f2f1ed';
  $black = '#1d1c1d';
  $taupe = '#cbbea5';
  $orange = '#ff6f48';
  $blue = '#0175df';
  $green = '#08cb80';
  $logoBlack = 'invert(0%)';
  $logoWhite = 'invert(100%)';





  let navData = document.querySelector('.nav');
  let pageTitle = navData.getAttribute('data-page');
  let sectionColors;
  let logoColor;
  let navItems;
  let searchBorder;
  let searchIcon;
  let navButton;
  let navButtonColor;
  let navScroll;
  let plus;






  switch (pageTitle) {
    case 'front-page.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoWhite })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite })
      sectionColors = [$black, $whitesmoke];
      navColors = [$black, $whitesmoke];
      navItems = [$whitesmoke, $black]
      logoColor = [$logoWhite, $logoBlack];
      searchBorder = [$whitesmoke, $black];
      searchIcon = [$logoBlack, $logoWhite];
      navButton = [$whitesmoke, $black];
      navButtonColor = [$black, $whitesmoke];
      plus = [$logoWhite, $logoBlack];
      navScroll = true;
      break;
    case 'about.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoWhite })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      sectionColors = [$black, $whitesmoke, $whitesmoke, $black, $whitesmoke, $taupe];
      navColors = [$black, $whitesmoke, $whitesmoke, $black, $whitesmoke, $taupe];
      navItems = [$whitesmoke, $black, $black, $whitesmoke, $black, $black]
      logoColor = [$logoWhite, $logoBlack, $logoBlack, $logoWhite, $logoBlack, $logoBlack];
      searchBorder = [$whitesmoke, $black, $black, $whitesmoke, $black, $black];
      searchIcon = [$logoBlack, $logoWhite, $logoWhite, $logoBlack, $logoBlack, $logoWhite, $logoBlack];
      navButton = [$whitesmoke, $black, $black, $whitesmoke, $black, $black];
      navButtonColor = [$black, $whitesmoke, $whitesmoke, $black, $whitesmoke, $whitesmoke];
      plus = [$logoWhite, $logoBlack];
      navScroll = true;
      break;
    case 'team.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $black })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $black })
      sectionColors = [$whitesmoke, $taupe];
      navColors = [$whitesmoke, $taupe];
      navItems = [$black]
      logoColor = [$logoBlack];
      navScroll = false;
      break;
    case 'expertise.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite })
      sectionColors = [$whitesmoke, $taupe];
      navColors = [$whitesmoke, $taupe];
      navItems = [$black, $black]
      logoColor = [$logoBlack, $logoBlack];
      searchBorder = [$black, $black];
      searchIcon = [$logoWhite, $logoWhite];
      navButton = [$black, $black];
      navButtonColor = [$whitesmoke, $whitesmoke];
      plus = [$logoWhite, $logoBlack];
      navScroll = true;

      break;
    case 'sectors.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite })

      sectionColors = [$black, $taupe];
      navColors = [$black, $taupe];
      navItems = [$whitesmoke, $black]
      logoColor = [$logoWhite, $logoBlack];
      searchBorder = [$whitesmoke, $black];
      searchIcon = [$logoBlack, $logoWhite];
      navButton = [$whitesmoke, $black];
      navButtonColor = [$black, $whitesmoke];
      plus = [$logoWhite, $logoBlack];
      navScroll = true;
      break;
    case 'contact.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      sectionColors = [$black, $black, $taupe];
      navColors = [$black, $taupe];
      navItems = [$whitesmoke, $black]
      logoColor = [$logoWhite, $logoBlack];
      searchBorder = [$whitesmoke, $black];
      searchIcon = [$logoBlack, $logoWhite];
      navButton = [$whitesmoke, $black];
      navButtonColor = [$black, $whitesmoke];
      plus = [$logoWhite, $logoBlack];
      navScroll = true;
      break;
    case 'careers.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      navScroll = false;
      break;
    case 'home.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $black })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoWhite })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navItems = [$black];
      logoColor = [$logoBlack];
      navScroll = false;
      break;
    case 'single-expertise.php':

      let expertisePage = document.querySelector('.industry');
      let expertiseNav = expertisePage.getAttribute('data-navColor');

      gsap.set(".nav", { backgroundColor: expertiseNav });
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navItems = [$black];
      logoColor = [$logoBlack];
      searchBorder = [$black];
      searchIcon = [$logoWhite];
      navButton = [$black];
      navButtonColor = [$whitesmoke];
      navScroll = false;
      break;
    case 'single-sector.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke, $whitesmoke, $taupe];
      navColors = [$whitesmoke, $whitesmoke, $taupe];
      navItems = [$black];
      logoColor = [$logoBlack];
      navScroll = false;
      break;
    case 'single-team.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $black })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoWhite })
      sectionColors = [$whitesmoke, $taupe];
      navColors = [$whitesmoke, $taupe];
      navItems = [$black];
      logoColor = [$logoBlack];
      navScroll = false;
      break;
    case 'single.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoWhite })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      sectionColors = [$black, $whitesmoke];
      navColors = [$black, $whitesmoke];
      navItems = [$whitesmoke, $black,]
      logoColor = [$logoWhite, $logoBlack];
      searchBorder = [$whitesmoke, $black];
      searchIcon = [$logoBlack, $logoWhite];
      navButton = [$whitesmoke, $black];
      navButtonColor = [$black, $whitesmoke];
      plus = [$logoWhite, $logoBlack];
      navScroll = true;
      break;

    case 'archive.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navItems = [$black];

      logoColor = [$logoBlack];
      navScroll = false;
      break;
    case 'seminars.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navItems = [$black];

      logoColor = [$logoBlack];
      navScroll = false;
      break;
    case 'news.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navItems = [$black];

      logoColor = [$logoBlack];
      navScroll = false;
      break;
    case 'single-news.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navItems = [$black];

      logoColor = [$logoBlack];
      navScroll = false;
      break;
    case 'submit.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $black })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoWhite })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navItems = [$black];
      logoColor = [$logoBlack];
      navScroll = false;
      break;
    case '404.php':
      // gsap.set(".nav", { backgroundColor: $taupe })
      sectionColors = [$taupe];
      navColors = [$taupe];
      navItems = [$black];
      logoColor = [$logoBlack];
      navScroll = false;
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
      // duration: 1,
      scrollTrigger: {
        trigger: section,
        start: "top 112px",
        end: "bottom 112px",
        markers: false,
        toggleActions: "restart none none reverse"
      }
    })
    if (navScroll) {
      tl.to(".nav", { backgroundColor: navColors[index], immediateRender: false })
        .to(".nav__items", { color: navItems[index], immediateRender: false }, "<")
        .to(".nav__logo__black", {
          filter: logoColor[index], immediateRender: false
        }, "<")
    }

    if (navScroll) {
      tl.to(".search-overlay--desktop__wrapper", {
        borderColor: searchBorder[index], immediateRender: false
      }, "<")
    }
    if (navScroll) {
      tl.to(".search-overlay--desktop__icon", {
        filter: searchIcon[index], immediateRender: false
      }, "<")
    }
    if (navScroll) {
      tl.to(".nav__button", {
        backgroundColor: navButton[index], color: navButtonColor[index], immediateRender: false
      }, "<")
    }
    if (navScroll) {
      tl.to(".plus-nav", {
        filter: plus[index], immediateRender: false
      }, "<")
    }


  })

}

