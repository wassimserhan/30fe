
import axios from 'axios';

const dropdownInsights = document.querySelectorAll('.insights__filter-dropdown');
const categoryInsights = document.querySelectorAll("ul > li");


dropdownInsights.forEach(dropdown => {
  const selectInsights = dropdown.querySelector('.insights__select');
  const caretInsights = dropdown.querySelector('.insights__caret');
  const menuInsights = dropdown.querySelector('.insights__menu');
  const optionsInsights = dropdown.querySelectorAll('.insights__menu li');
  const selectedInsights = dropdown.querySelector('.insights__selected');


  if (selectInsights) {
    selectInsights.addEventListener('click', () => {
      selectInsights.classList.toggle('insights__select-clicked');
      caretInsights.classList.toggle('insights__caret-rotate');
      menuInsights.classList.toggle('insights__menu-open');
      categoryFilter();

      // I'm using "click" but it works with any event
      document.addEventListener('click', event => {
        const isClickInside = selectInsights.contains(event.target)
        if (!isClickInside) {
          caretInsights.classList.remove('insights__caret-rotate');
          menuInsights.classList.remove('insights__menu-open');
          // The click was OUTSIDE the specifiedElement, do something
        }
      })

    });
  }




  optionsInsights.forEach(option => {
    option.addEventListener('click', () => {

      selectedInsights.innerText = option.innerText;
      selectInsights.classList.remove('insights__select-clicked');
      caretInsights.classList.remove('insights__caret-rotate');
      menuInsights.classList.remove('insights__menu-open');

      optionsInsights.forEach(option => {
        option.classList.remove('active');
      });
      option.classList.add('active');
    });
  });
});


// Function to initialize category filtering
function categoryFilter() {
  // Dynamically determine the AJAX URL
  const ajaxUrl = wpAjax ? wpAjax.ajaxUrl : `${window.location.origin}/wp-admin/admin-ajax.php`;

  // Get all category elements
  const categoryInsights = document.querySelectorAll("ul > li");

  if (categoryInsights.length === 0) {
    console.warn('No category elements found.');
    return;
  }

  // Add event listeners to each category item
  categoryInsights.forEach(item => {
    item.addEventListener('click', (e) => {
      // Safely get the value attribute
      const category = e.target.getAttribute('value');

      if (!category) {
        console.error('Category value not found on the clicked element.');
        return;
      }

      // Prepare the request parameters
      const params = new URLSearchParams();
      params.append('action', 'insights_search');
      params.append('category', category);

      // Get the button element to manipulate later
      const button = document.querySelector('.insights__load');

      // Send the POST request
      axios.post(ajaxUrl, params)
        .then(res => {
          // Update the insights grid with the response
          const postsList = document.querySelector('.insights__grid');
          if (postsList) {
            postsList.innerHTML = res.data.data;
          } else {
            console.error('Insights grid element not found.');
          }

          // Remove the button if it exists
          if (button && button.parentNode) {
            button.parentNode.removeChild(button);
          } else {
            console.warn('Button element not found or has no parent node.');
          }
        })
        .catch(err => {
          console.error('AJAX request failed:', err);
        });
    });
  });
}

// Initialize the category filter
categoryFilter();











