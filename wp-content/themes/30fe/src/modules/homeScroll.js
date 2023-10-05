



// // Get a reference to the HTML element whose text size you want to change
// const heroBG = document.getElementById("home__hero");
const scrollText = document.getElementById("banner-text");
const scrollableNav = document.getElementById("nav");


const minimumFontSize = 60;
const maxLetterSpacing = 0;



if (scrollText) {



  // Function to update the text size based on the scroll position
  function updateBackgroundOnScroll() {

    // Get the current scroll position
    const scrollPosition = window.scrollY;

    // Define the scroll threshold at which the background color change should start
    const scrollThreshold = 50;


    // Calculate the new font size based on the scroll percentage
    // You can adjust the formula to control how text size changes with scrolling
    const newSize = 160 - (scrollPosition * 4); // Example: Increase font size as the user scrolls

    const newSpacing = -6.7 + (scrollPosition);


    const fontSize = Math.max(newSize, minimumFontSize);

    const newLetterSpacing = Math.min(newSpacing, maxLetterSpacing);




    // Define the initial and final background colors
    const initialColor = '#1d1c1d';
    const finalColor = '#f2f1ed';

    const newBackgroundColor = scrollPosition > scrollThreshold ? finalColor : initialColor;

    const newColor = scrollPosition > scrollThreshold ? initialColor : finalColor;



    // Update the font size of the element

    // heroBG.style.backgroundColor = newBackgroundColor;

    scrollText.style.fontSize = `${fontSize}px`;
    scrollText.style.letterSpacing = newLetterSpacing + 'px';
    scrollText.style.color = newColor;

    // scrollableNav.style.backgroundColor = newBackgroundColor;




  }

  // Add a scroll event listener to call the updateTextSizeOnScroll function
  window.addEventListener("scroll", updateBackgroundOnScroll);

  // Call the function initially to set the initial text size
  updateBackgroundOnScroll();
}


const scrollableContent = document.querySelector('#home__hero');
const scrollableNavt = document.querySelector('#nav');
const scrollableNavItems = document.querySelectorAll(".nav__items");
const NavItems = [...scrollableNavItems];
const scrollableButton = document.querySelector('.nav__button');
const scrollableLogo = document.querySelector('.nav__logo');





window.addEventListener('scroll', () => {



  // Get the current scroll position
  const scrollPosition = window.scrollY;

  console.log(scrollPosition);

  // Calculate the scroll percentage based on the scroll position and the page height
  const pageHeight = document.documentElement.scrollHeight - window.innerHeight;
  const scrollPercentage = (scrollPosition / pageHeight) * 10000;

  // Interpolate the background color between the initial and final colors
  const initialColor = [29, 28, 29]; // RGB values of #1d1c1d
  const finalColor = [242, 241, 237]; // RGB values of #f2f1ed
  const interpolatedColor = initialColor.map((channel, index) => {
    const range = finalColor[index] - channel;
    return Math.round(channel + (range * scrollPercentage) / 100);
  });




  // Interpolate the text color between the initial and final colors
  const initialColorText = [242, 241, 237]; // RGB values of #1d1c1d
  const finalColorText = [29, 28, 29]; // RGB values of #f2f1ed
  const interpolatedColorText = initialColorText.map((channel, index) => {
    const rangeText = finalColorText[index] - channel;
    return Math.round(channel + (rangeText * scrollPercentage) / 100);
  });

  // Apply the new background color
  scrollableContent.style.backgroundColor = `rgb(${interpolatedColor.join(', ')})`;


  // Apply Filer to SVG

  const filterScroll = 100 - (Math.min(scrollPercentage, 100));



  // Function to check if an element is in the viewport


  // Get the element to check
  const elementToCheck = document.querySelector('#accordion');
  let hasPassed = false;


  // Listen for the scroll event

  if (!hasPassed && !isTopOfElementAboveViewport(elementToCheck)) {
    scrollableNavt.style.backgroundColor = `rgb(${interpolatedColor.join(', ')})`;
    scrollableButton.style.backgroundColor = `rgb(${interpolatedColorText.join(', ')})`
    scrollableButton.style.color = `rgb(${interpolatedColor.join(', ')})`;

    scrollableNav.style.display = "block";

    scrollableLogo.style.filter = `invert(${filterScroll}%)`;


    NavItems.forEach(item => {
      item.style.color = `rgb(${interpolatedColorText.join(', ')})`
    })

    console.log('Scrolled past the element.');
    // Perform any action you want when you scroll past the element
    hasPassed = true; // Set a flag to prevent further triggering
  }

  // Function to check if the top of an element is above the viewport
  function isTopOfElementAboveViewport(element) {
    const rect = element.getBoundingClientRect();
    console.log(rect)
    return rect.top < 111;
  }

});

