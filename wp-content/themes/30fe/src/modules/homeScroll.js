

//hero section
const scrollableContent = document.querySelector('#home__hero');
const scrollText = document.getElementById("banner-text");

//nav section
const scrollableNav = document.querySelector('#nav');
const scrollableNavItems = document.querySelectorAll(".nav__items");
const NavItems = [...scrollableNavItems];
const scrollableButton = document.querySelector('.nav__button');
const scrollableLogo = document.querySelector('.nav__logo');
const searchBorder = document.querySelector(".search-overlay--desktop__wrapper");
const searchIconDesktop = document.querySelector('.search-overlay--desktop__icon');
const plus = document.querySelectorAll('.plus-nav');


// define text parameters
const minimumFontSize = 50;
const maxLetterSpacing = 0;


if (scrollableContent) {

  window.addEventListener('scroll', () => {

    // Get the current scroll position
    const scrollPosition = window.scrollY;
    // console.log(Math.max(window.scrollY, 70));

    // Calculate the new font size based on the scroll percentage
    // You can adjust the formula to control how text size changes with scrolling
    const newSize = 160 - (scrollPosition * 4); // Example: Increase font size as the user scrolls
    const newSpacing = -6.7 + (scrollPosition);
    const fontSize = Math.max(newSize, minimumFontSize);
    const newLetterSpacing = Math.min(newSpacing, maxLetterSpacing);

    // Interpolate the background color between the initial and final colors
    const initialColor = [29, 28, 29]; // RGB values of #1d1c1d
    const finalColor = [242, 241, 237]; // RGB values of #f2f1ed

    const interpolatedColor = initialColor.map((channel, index) => {
      const range = finalColor[index] - channel;
      console.log((channel + (range * scrollPosition) / 100))
      return Math.min((channel + (range * scrollPosition) / 100), (242));
    });

    // Interpolate the text color between the initial and final colors
    const initialColorText = [242, 241, 237]; // RGB values of #f2f1ed
    const finalColorText = [29, 28, 29]; // RGB values of #1d1c1d
    const interpolatedColorText = initialColorText.map((channel, index) => {
      const rangeText = finalColorText[index] - channel;
      return Math.max((channel + (rangeText * scrollPosition) / 100), (29));
    });


    // Apply the new background color
    scrollableContent.style.backgroundColor = `rgb(${interpolatedColor.join(', ')})`;

    //Apply the new text color & size
    scrollText.style.fontSize = `${fontSize}px`;
    scrollText.style.letterSpacing = newLetterSpacing + 'px';
    scrollText.style.color = `rgb(${interpolatedColorText.join(', ')})`;

    // Apply Filter to SVG
    const filterScroll = 100 - (Math.min(scrollPosition, 100));
    const filterScrollInverse = (Math.min(scrollPosition, 100));


    // Function to check if an element is in the viewport
    const elementToCheck = document.querySelector('#accordion-scroll');
    let hasPassed = false;

    // Listen for the scroll event to stop nav items from changing after hero
    if (!hasPassed && !isTopOfElementAboveViewport(elementToCheck)) {
      scrollableNav.style.backgroundColor = `rgb(${interpolatedColor.join(', ')})`;
      scrollableButton.style.backgroundColor = `rgb(${interpolatedColorText.join(', ')})`
      scrollableButton.style.color = `rgb(${interpolatedColor.join(', ')})`;
      // scrollableNav.style.display = "block";
      scrollableLogo.style.filter = `invert(${filterScroll}%)`;
      searchIconDesktop.style.filter = `invert(${filterScrollInverse}%)`;
      searchBorder.style.borderColor = `rgb(${interpolatedColorText.join(', ')})`;

      [...plus].forEach(item => {
        item.style.filter = `invert(${filterScroll}%)`;
      })

      NavItems.forEach(item => {
        item.style.color = `rgb(${interpolatedColorText.join(', ')})`
      })

      // Perform any action you want when you scroll past the element
      hasPassed = true; // Set a flag to prevent further triggering
    }

    // Function to check if the top of an element is above the viewport
    function isTopOfElementAboveViewport(element) {
      const rect = element.getBoundingClientRect();
      return rect.top < 0;
    }

  });

}