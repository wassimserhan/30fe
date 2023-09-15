
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


function categoryFilter() {

  categoryInsights.forEach(function (item) {

    item.addEventListener('click', (e) => {

      let category = e.target.attributes.value.nodeValue;
      const button = document.querySelector('.insights__load');


      if (category == "all") {
        let params = new URLSearchParams();
        params.append('action', 'reset_insights_search');
        params.append('category', "");
      }

      let params = new URLSearchParams();
      params.append('action', 'insights_search');
      params.append('category', category);

      axios.post('/wp-admin/admin-ajax.php', params)
        .then(res => {

          let posts_list = document.querySelector('.insights__grid');

          posts_list.innerHTML = res.data.data;


          // let getUrl = window.location;
          // let baseUrl = getUrl.protocol + "//" + getUrl.host + "/";

          // window.history.pushState('', '', baseUrl + '30fe/' + 'insights/' + category);

          if (button) {
            button.parentNode.removeChild(button);
          }


        })
    }
    )
  })
}











