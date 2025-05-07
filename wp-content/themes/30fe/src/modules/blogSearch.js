import axios from 'axios';

document.addEventListener('DOMContentLoaded', () => {
  const dropdownInsights = document.querySelectorAll('.insights__filter-dropdown');

  // Exit if not on the blog page
  if (dropdownInsights.length === 0) return;

  dropdownInsights.forEach(dropdown => {
    const selectInsights = dropdown.querySelector('.insights__select');
    const caretInsights = dropdown.querySelector('.insights__caret');
    const menuInsights = dropdown.querySelector('.insights__menu');
    const optionsInsights = dropdown.querySelectorAll('.insights__menu li');
    const selectedInsights = dropdown.querySelector('.insights__selected');

    // Set data-value dynamically if missing (optional fallback)
    optionsInsights.forEach(option => {
      if (!option.hasAttribute('data-value')) {
        const slug = option.innerText.trim().toLowerCase().replace(/\s+/g, '-');
        option.setAttribute('data-value', slug);
      }
    });

    // Toggle menu on select click
    if (selectInsights) {
      selectInsights.addEventListener('click', () => {
        selectInsights.classList.toggle('insights__select-clicked');
        caretInsights.classList.toggle('insights__caret-rotate');
        menuInsights.classList.toggle('insights__menu-open');

        document.addEventListener('click', event => {
          const isClickInside = selectInsights.contains(event.target);
          if (!isClickInside) {
            caretInsights.classList.remove('insights__caret-rotate');
            menuInsights.classList.remove('insights__menu-open');
          }
        }, { once: true });
      });
    }

    // Update UI on option click
    optionsInsights.forEach(option => {
      option.addEventListener('click', () => {
        selectedInsights.innerText = option.innerText;
        selectInsights.classList.remove('insights__select-clicked');
        caretInsights.classList.remove('insights__caret-rotate');
        menuInsights.classList.remove('insights__menu-open');

        optionsInsights.forEach(opt => opt.classList.remove('active'));
        option.classList.add('active');

        // Run AJAX filter
        runCategoryFilter(option.getAttribute('data-value'));
      });
    });
  });

  // AJAX request for category filtering
  function runCategoryFilter(category) {
    const ajaxUrl = typeof wpAjax !== 'undefined' ? wpAjax.ajaxUrl : `${window.location.origin}/wp-admin/admin-ajax.php`;

    if (!category) {
      console.error('Category value not found on the clicked element.');
      return;
    }

    const params = new URLSearchParams();
    params.append('action', 'insights_search');
    params.append('category', category);

    const button = document.querySelector('.insights__load');
    const postsList = document.querySelector('.insights__grid');

    axios.post(ajaxUrl, params)
      .then(res => {
        if (postsList) {
          postsList.innerHTML = res.data.data;
        } else {
          console.error('Insights grid element not found.');
        }

        if (button && button.parentNode) {
          button.parentNode.removeChild(button);
        }
      })
      .catch(err => {
        console.error('AJAX request failed:', err);
      });
  }
});