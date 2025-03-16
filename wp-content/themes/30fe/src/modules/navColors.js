


const fullscreen = document.querySelector(".fullscreen");




if (true) {

  const $whitesmoke = '#f2f1ed';
  $black = '#1d1c1d';
  $taupe = '#cbbea5';
  $orange = '#ff6f48';
  $blue = '#0175df';
  $green = '#08cb80';
  $logoBlack = 'invert(0%)';
  $logoWhite = 'invert(100%)';

  $whitesmokeOpacity = "rgba(242, 241, 237, 0.1)";
  $blackOpacity = "rgba(29, 28, 29, 0.1)";

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
      // gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite });
      sectionColors = ['#1d1c1d', '#f2f1ed', '#1d1c1d', '#f2f1ed', '#f2f1ed', '#f2f1ed'];
      navColors = ['#1d1c1d', '#f2f1ed', '#1d1c1d', '#f2f1ed', '#f2f1ed', '#f2f1ed'];
      navItems = [$whitesmoke, $black, $whitesmoke, $black, $black, $black];
      navItemsButton = [$whitesmokeOpacity, $blackOpacity, $blackOpacity, $blackOpacity, $blackOpacity, $blackOpacity];
      navBorder = [$whitesmoke, $black, $whitesmoke, $black, $black, $black];
      navDropdown = [$black, $whitesmoke, $whitesmoke, $whitesmoke, $whitesmoke, $whitesmoke];
      navItemsButton = [$whitesmokeOpacity, $blackOpacity, $whitesmokeOpacity, $blackOpacity, $blackOpacity, $blackOpacity];
      navDropdown = [$black, $whitesmoke, $black, $whitesmoke, $whitesmoke, $whitesmoke];
      logoColor = [$logoWhite, $logoBlack, $logoWhite, $logoBlack, $logoBlack, $logoBlack];
      searchBorder = [$whitesmoke, $black, $whitesmoke, $black, $black, $black];
      searchIcon = [$logoBlack, $logoWhite, $logoBlack, $logoWhite, $logoWhite, $logoWhite];
      navButton = [$whitesmoke, $black, $whitesmoke, $black, $black, $black];
      navButtonColor = [$black, $whitesmoke, $black, $whitesmoke, $whitesmoke, $whitesmoke];
      plus = [$logoWhite, $logoBlack, $logoWhite, $logoBlack, $logoBlack, $logoBlack];
      navScroll = true;
      break;
    case 'about.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite })
      sectionColors = [$black, $whitesmoke, $whitesmoke, $whitesmoke, $whitesmoke, $taupe];
      navColors = [$black, $whitesmoke, $whitesmoke, $whitesmoke, $whitesmoke, $taupe];
      navItems = [$whitesmoke, $black, $black, $black, $black, $black];
      navItemsButton = [$whitesmokeOpacity, $blackOpacity, $blackOpacity, $blackOpacity, $blackOpacity, $blackOpacity];
      navBorder = [$whitesmoke, $black, $black, $black, $black, $black];
      navDropdown = [$black, $whitesmoke, $whitesmoke, $whitesmoke, $whitesmoke, $whitesmoke];
      logoColor = [$logoWhite, $logoBlack, $logoBlack, $logoBlack, $logoBlack, $logoBlack];
      searchBorder = [$whitesmoke, $black, $black, $black, $black, $black];
      searchIcon = [$logoBlack, $logoWhite, $logoWhite, $logoBlack, $logoWhite, $logoWhite, $logoBlack];
      navButton = [$whitesmoke, $black, $black, $black, $black, $black];
      navButtonColor = [$black, $whitesmoke, $whitesmoke, $whitesmoke, $whitesmoke, $whitesmoke];
      plus = [$logoWhite, $logoBlack, $logoBlack, $logoBlack, $logoBlack, $logoBlack];
      navScroll = true;
      break;

    case 'expertise.php':
      gsap.set(".nav__logo__black", { filter: $logoBlack })
      gsap.set(".nav__items", { color: $black })
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoWhite })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      sectionColors = [$whitesmoke, $taupe];
      navColors = [$whitesmoke, $taupe];
      navItems = [$black, $black,];
      navItemsButton = [$blackOpacity, $blackOpacity];
      navBorder = [$whitesmoke, $black, $black];
      navDropdown = [$whitesmoke, $taupe];
      logoColor = [$logoBlack, $logoBlack];
      searchBorder = [$black, $black];
      searchIcon = [$logoBlack, $logoWhite];
      navButton = [$black, $black];
      navButtonColor = [$whitesmoke, $whitesmoke];
      plus = [$logoBlack, $logoBlack];
      navScroll = true;
      break;

    case 'sectors.php':
      gsap.set(".nav__logo__black", { filter: $logoBlack })
      gsap.set(".nav__items", { color: $black })
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoWhite })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      sectionColors = [$whitesmoke, $taupe];
      navColors = [$whitesmoke, $taupe];
      navItems = [$black, $black,];
      navItemsButton = [$blackOpacity, $blackOpacity];
      navBorder = [$whitesmoke, $black, $black];
      navDropdown = [$whitesmoke, $taupe];
      logoColor = [$logoBlack, $logoBlack];
      searchBorder = [$black, $black];
      searchIcon = [$logoBlack, $logoWhite];
      navButton = [$black, $black];
      navButtonColor = [$whitesmoke, $whitesmoke];
      plus = [$logoBlack, $logoBlack];
      navScroll = true;
      break;

    case 'contact.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".nav__dropdown-grid", { backgroundColor: $black, borderColor: $whitesmoke })
      gsap.set(".nav__items__button", { backgroundColor: $whitesmokeOpacity })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite });
      sectionColors = [$black];
      navColors = [$black];
      navScroll = false
      break;


    case 'single-expertise.php':
      let expertisePage = document.querySelector('.industry');
      let expertiseNav = expertisePage.getAttribute('data-navColor');
      gsap.set(".nav", { backgroundColor: expertiseNav });
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navItems = [$black];
      navItemsButton = [$blackOpacity, $blackOpacity];
      navBorder = [$black, $black];
      navDropdown = [$whitesmoke, $whitesmoke];
      logoColor = [$logoBlack];
      searchBorder = [$black];
      searchIcon = [$logoWhite];
      navButton = [$black];
      navButtonColor = [$whitesmoke];
      plus = [$logoBlack];
      navScroll = true;
      break;

    case 'single.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite })
      sectionColors = [$black, $whitesmoke, $taupe];
      navColors = [$black, $whitesmoke, $taupe];
      navItems = [$whitesmoke, $black, $black];
      navItemsButton = [$whitesmokeOpacity, $blackOpacity, $blackOpacity];
      navBorder = [$whitesmoke, $black, $black];
      navDropdown = [$black, $whitesmoke, $whitesmoke];
      logoColor = [$logoWhite, $logoBlack, $logoBlack];
      searchBorder = [$whitesmoke, $black, $black];
      searchIcon = [$logoBlack, $logoWhite, $logoBlack];
      navButton = [$whitesmoke, $black, $black];
      navButtonColor = [$black, $whitesmoke, $whitesmoke];
      plus = [$logoWhite, $logoBlack, $logoBlack];
      navScroll = true;
      break;

    case 'team.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke, $taupe];
      navColors = [$whitesmoke, $taupe];
      navScroll = false;
      break;

    case 'careers.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".nav__dropdown-grid", { backgroundColor: $black, borderColor: $whitesmoke })
      gsap.set(".nav__items__button", { backgroundColor: $whitesmokeOpacity })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite });
      sectionColors = [$black];
      navColors = [$black];
      navScroll = false
      break;

    case 'home.php':
      gsap.set(".nav__logo__black", { filter: $logoBlack })
      gsap.set(".nav__items", { color: $black })
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoWhite })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navItems = [$black];
      navItemsButton = [$blackOpacity];
      navBorder = [$black];
      navDropdown = [$whitesmoke];
      logoColor = [$logoBlack];
      searchBorder = [$black];
      searchIcon = [$logoBlack];
      navButton = [$black];
      navButtonColor = [$whitesmoke];
      plus = [$logoBlack];
      navScroll = true;
      break;

    case 'single-news.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".nav__dropdown-grid", { backgroundColor: $black, borderColor: $whitesmoke })
      gsap.set(".nav__items__button", { backgroundColor: $whitesmokeOpacity })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite });
      sectionColors = [$black];
      navColors = [$black];
      navScroll = false
      break;

    case 'single-sector.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navScroll = false;
      break;
    case 'single-team.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke, $taupe];
      navColors = [$whitesmoke, $taupe];
      navScroll = false;
      break;
    case 'archive.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navItems = [$black];
      navScroll = false;
      break;
    case 'submit.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navScroll = false;
      break;
    case '404.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke];
      navColors = [$whitesmoke];
      navScroll = false;
      break;
    case 'news.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".nav__dropdown-grid", { backgroundColor: $black, borderColor: $whitesmoke })
      gsap.set(".nav__items__button", { backgroundColor: $whitesmokeOpacity })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite });
      sectionColors = [$black];
      navColors = [$black];
      navScroll = false
      break;
    case 'taxonomy-news_category.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite });
      sectionColors = [$black];
      navColors = [$black];
      navScroll = false
      break;
    case 'events.php':
      gsap.set(".nav__logo__black", { filter: $logoWhite })
      gsap.set(".nav__items", { color: $whitesmoke })
      gsap.set(".nav", { backgroundColor: $black })
      gsap.set(".nav__dropdown-grid", { backgroundColor: $black, borderColor: $whitesmoke })
      gsap.set(".nav__items__button", { backgroundColor: $whitesmokeOpacity })
      gsap.set(".search-overlay--desktop__wrapper", { borderColor: $whitesmoke })
      gsap.set(".search-overlay--desktop__icon", { filter: $logoBlack })
      gsap.set(".nav__button", { backgroundColor: $whitesmoke, color: $black })
      gsap.set(".plus-nav", { filter: $logoWhite });
      sectionColors = [$black];
      navColors = [$black];
      navScroll = false
      break;

    case 'single-events.php':
      const eventColorId = document.getElementById('event-color');
      const eventColor = eventColorId.getAttribute('data-color');
      gsap.set(".nav", { backgroundColor: eventColor })
      gsap.set(".nav__dropdown-grid", { backgroundColor: eventColor, borderColor: $black })
      gsap.set(".nav__items__button", { backgroundColor: $blackOpacity })
      sectionColors = [eventColor];
      navColors = [eventColor];
      navScroll = false;
      break;

    case 'education.php':
      gsap.set(".nav", { backgroundColor: $whitesmoke })
      sectionColors = [$whitesmoke, $taupe];
      navColors = [$whitesmoke, $taupe];
      navScroll = false;
      break;
    default:
      console.log("hello");

  }

  gsap.registerPlugin(ScrollTrigger)

  //apply sectionColors to each .fullscreen element
  gsap.set(".fullscreen", { backgroundColor: gsap.utils.wrap(sectionColors) })

  const sections = gsap.utils.toArray(".fullscreen")

  sections.forEach(function (section, index) {

    if (navScroll) {
      gsap.timeline({
        scrollTrigger: {
          trigger: section,
          start: "top 112px",
          end: "bottom 112px",
          markers: false,
          immediateRender: false,
          toggleActions: "restart none none reverse",
          preventOverlaps: true
        }
      })
        .to(".nav", { backgroundColor: navColors[index] })
        .to(".nav__items", { color: navItems[index] }, 0)
        .to(".nav__logo__black", {
          filter: logoColor[index]
        }, 0)
        .to(".search-overlay--desktop__wrapper", {
          borderColor: searchBorder[index]
        }, 0)
        .to(".search-overlay--desktop__icon", {
          filter: searchIcon[index]
        }, 0)
        .to(".nav__button", {
          backgroundColor: navButton[index], color: navButtonColor[index]
        }, 0)
        .to(".nav__items__button", {
          backgroundColor: navItemsButton[index]
        }, 0)
        .to(".nav__dropdown-grid", {
          backgroundColor: navDropdown[index], borderColor: navBorder[index]
        }, 0)
        .to(".plus-nav", {
          filter: plus[index]
        }, 0);
    }
  })


}





