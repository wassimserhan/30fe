
import axios from 'axios';

//Search Filter
// const input = document.getElementById("blogFilter");

// if (input) {
//   input.addEventListener('focus', function () {
//     resetFilterText('selected-role', 'Filter By Category');
//     showAllTeam('insights__card', 'block');
//   })


//   input.addEventListener('keyup', blogFilter);
//   function blogFilter() {

//     var filter, cards, cardContainer, title, i;
//     filter = input.value.toUpperCase();
//     cardContainer = document.getElementById("insights");
//     cards = cardContainer.getElementsByClassName("insights__card");
//     for (i = 0; i < cards.length; i++) {
//       title = cards[i].querySelector(".insights__card__title");
//       if (title.innerText.toUpperCase().indexOf(filter) > -1) {
//         cards[i].style.display = "";
//       } else {
//         cards[i].style.display = "none";
//       }
//     }
//   }
// }

//Search Filter


const dropdownsInsights = document.querySelectorAll('.insights__filter-dropdown');
const roleListInsights = document.querySelectorAll("ul > li");


dropdownsInsights.forEach(dropdown => {
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

  // resetFilterText('selected-role', 'Filter By Category');
  // showAllTeam('insights__card', 'block');



  roleListInsights.forEach(function (item) {


    item.addEventListener('click', (e) => {

      let category = e.target.attributes.value.nodeValue;
      const button = document.querySelector('.insights__load');



      let params = new URLSearchParams();
      params.append('action', 'insights_search');
      params.append('category', category);

      axios.post('/wp-admin/admin-ajax.php', params)
        .then(res => {

          let posts_list = document.querySelector('.insights__grid');

          posts_list.innerHTML = res.data.data;


          let getUrl = window.location;
          let baseUrl = getUrl.protocol + "//" + getUrl.host + "/";

          window.history.pushState('', '', baseUrl + 'insights/' + category);

          if (button) {
            button.parentNode.removeChild(button);
          }


        })
    }
    )
  })
}


//Show all cards
function showAllTeam(className, displayState) {
  var elements = document.getElementsByClassName(className)

  for (var i = 0; i < elements.length; i++) {
    elements[i].style.display = displayState;
  }
}

function resetFilterText(className, text) {
  var elements = document.getElementsByClassName(className);

  for (var i = 0; i < elements.length; i++) {
    elements[i].innerText = text;
    console.log(elements[i].innerText);
  }
}








