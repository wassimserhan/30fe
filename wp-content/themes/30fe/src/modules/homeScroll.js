// init = function () {

//   const bannerText = document.getElementById('banner-text');

//   $logoBlack = 'invert(0%)'

//   if (bannerText) {

//     gsap.set("#banner-text", { color: "#f2f1ed", fontSize: 350 })
//     gsap.set("#home__hero", { backgroundColor: "#1d1c1d" })
//     gsap.set("#nav", { backgroundColor: "#1d1c1d" })

//     gsap.registerPlugin(ScrollTrigger)



//     let tl = gsap.timeline({
//       scrollTrigger: {
//         trigger: "#banner-text",
//         markers: true,
//         start: "top 40%"
//       }
//     })

//       .to("#banner-text", { duration: 3, fontSize: 70, color: "#1d1c1d", immediateRender: false })
//       .to("#home__hero", { backgroundColor: "#f2f1ed", immediateRender: false }, "<")
//       .to("#nav", { backgroundColor: "#f2f1ed", immediateRender: false }, "<")
//       .to(".nav__items", { color: "#1d1c1d", immediateRender: false }, "<")
//       .to(".nav__logo__black", { filter: $logoBlack, immediateRender: false })







//     // tl.to('#banner-text', { duration: 1, width: "100%", ease: "power2.out" })
//     //   .to('#stats-1', { x: 380, duration: 1, ease: "power2.out" }, "-=.6")
//     //   .to('#stats-2', { x: 300, duration: 1, ease: "power2.out" }, "-=.6")
//     //   .to('#stats-3', { x: 320, duration: 1, ease: "power2.out" }, "-=.6")
//     //   .to('#stats-4', { x: 200, duration: 1, ease: "power2.out" }, "-=.6")
//     //   .to('#label-1', { opacity: 1, duration: .5, ease: "ease" }, "<")
//     //   .to('#label-2', { opacity: 1, duration: .5, ease: "ease" }, "<")
//     //   .to('#label-3', { opacity: 1, duration: .5, ease: "ease" }, "<")
//     //   .to('#label-4', { opacity: 1, duration: .5, ease: "ease" }, "<");




//   }

// }

// window.onload = init();






//New

// Get a reference to the HTML element whose text size you want to change
// const scrollText = document.getElementById("banner-text");

// const minimumFontSize = 60;
// const maxLetterSpacing = 0;

// if (scrollText) {

//   // Function to update the text size based on the scroll position
//   function updateTextSizeOnScroll() {

//     // Calculate the scroll position as a percentage of the page height
//     const scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 10000;

//     // Calculate the new font size based on the scroll percentage
//     // You can adjust the formula to control how text size changes with scrolling
//     const newSize = 300 - (scrollPercentage * 2); // Example: Increase font size as the user scrolls

//     const newSpacing = -.7 + (scrollPercentage);


//     const fontSize = Math.max(newSize, minimumFontSize);

//     const newLetterSpacing = Math.min(newSpacing, maxLetterSpacing);


//     // // Letter Spacing
//     // const maxLetterSpacing = 0; // Maximum letter spacing
//     // const minLetterSpacing = -9; // Minimum letter spacing

//     // Calculate the new letter spacing value based on the scroll position
//     // const newLetterSpacing = Math.max(
//     //   maxLetterSpacing,
//     //   minLetterSpacing // You can adjust the divisor to control the sensitivity
//     // );

//     // Calculate the new color based on the scroll percentage
//     const r = Math.round(242 - (scrollPercentage * (242 - 29) / 100));
//     const g = Math.round(241 - (scrollPercentage * (241 - 28) / 100));
//     const b = Math.round(237 - (scrollPercentage * (237 - 29) / 100));

//     // Create the new color in the format #RRGGBB
//     const newColor = `#${r.toString(16).padStart(2, '0')}${g.toString(16).padStart(2, '0')}${b.toString(16).padStart(2, '0')}`;


//     // Update the font size of the element
//     scrollText.style.fontSize = `${fontSize}px`;
//     scrollText.style.letterSpacing = newLetterSpacing + 'px';
//     scrollText.style.color = newColor;





//   }

//   // Add a scroll event listener to call the updateTextSizeOnScroll function
//   window.addEventListener("scroll", updateTextSizeOnScroll);

//   // Call the function initially to set the initial text size
//   updateTextSizeOnScroll();
// }



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
    const newSize = 300 - (scrollPosition * 4); // Example: Increase font size as the user scrolls

    const newSpacing = -.7 + (scrollPosition);


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


  // Function to check if an element is in the viewport


  // Get the element to check
  const elementToCheck = document.querySelector('#accordion');
  let hasPassed = false;

  // Listen for the scroll event

  if (!hasPassed && !isTopOfElementAboveViewport(elementToCheck)) {
    scrollableNavt.style.backgroundColor = `rgb(${interpolatedColor.join(', ')})`;
    scrollableButton.style.backgroundColor = `rgb(${interpolatedColorText.join(', ')})`
    scrollableButton.style.color = `rgb(${interpolatedColor.join(', ')})`;
    scrollableLogo.style.filter = "invert(50%)";


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

