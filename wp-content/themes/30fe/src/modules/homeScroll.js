



// // Get a reference to the HTML element whose text size you want to change
// const heroBG = document.getElementById("home__hero");
const scrollText = document.getElementById("banner-text");

const minimumFontSize = 50;
const maxLetterSpacing = 0;

if (scrollText) {



  // Function to update the text size based on the scroll position
  function updateBackgroundOnScroll() {

    // Get the current scroll position
    const scrollPosition = window.scrollY;

    // Define the scroll threshold at which the background color change should start


    // Calculate the new font size based on the scroll percentage
    // You can adjust the formula to control how text size changes with scrolling
    const newSize = 160 - (scrollPosition); // Example: Increase font size as the user scrolls

    const newSpacing = -6.7 + (scrollPosition);

    const fontSize = Math.max(newSize, minimumFontSize);

    const newLetterSpacing = Math.min(newSpacing, maxLetterSpacing);










    // Update the font size of the element

    // heroBG.style.backgroundColor = newBackgroundColor;

    scrollText.style.fontSize = `${fontSize}px`;
    scrollText.style.letterSpacing = newLetterSpacing + 'px';




  }

  // Add a scroll event listener to call the updateTextSizeOnScroll function
  window.addEventListener("scroll", updateBackgroundOnScroll);

  // Call the function initially to set the initial text size
  updateBackgroundOnScroll();
}

