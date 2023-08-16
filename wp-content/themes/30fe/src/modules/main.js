

//Search Filter
const input = document.getElementById("myFilter");

if (input) {
  input.addEventListener('focus', function () {
    resetFilterText('selected-role', 'Filter By Role');
    resetFilterText('selected-expertise', 'Filter By Expertise');
    showAllTeam('team__card', 'block');
  })


  input.addEventListener('keyup', teamFilter);
  function teamFilter() {

    var filter, cards, cardContainer, title, i;
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("team");
    cards = cardContainer.getElementsByClassName("team__card");
    for (i = 0; i < cards.length; i++) {
      title = cards[i].querySelector(".team__card__name");
      if (title.innerText.toUpperCase().indexOf(filter) > -1) {
        cards[i].style.display = "";
      } else {
        cards[i].style.display = "none";
      }
    }
  }
}

//Search Filter


const dropdowns = document.querySelectorAll('.dropdown');
const roleList = document.querySelectorAll("ul > li");


dropdowns.forEach(dropdown => {
  const select = dropdown.querySelector('.select');
  const caret = dropdown.querySelector('.caret');
  const menu = dropdown.querySelector('.menu');
  const options = dropdown.querySelectorAll('.menu li');
  const selected = dropdown.querySelector('.selected');


  if (select) {
    select.addEventListener('click', () => {
      select.classList.toggle('select-clicked');
      caret.classList.toggle('caret-rotate');
      menu.classList.toggle('menu-open');
      roleFilter();

      // I'm using "click" but it works with any event
      document.addEventListener('click', event => {
        const isClickInside = select.contains(event.target)
        if (!isClickInside) {
          caret.classList.remove('caret-rotate');
          menu.classList.remove('menu-open');
          // The click was OUTSIDE the specifiedElement, do something
        }
      })

    });
  }




  options.forEach(option => {
    option.addEventListener('click', () => {
      selected.innerText = option.innerText;
      select.classList.remove('select-clicked');
      caret.classList.remove('caret-rotate');
      menu.classList.remove('menu-open');

      options.forEach(option => {
        option.classList.remove('active');
      });
      option.classList.add('active');
    });
  });
});


function roleFilter() {

  resetFilterText('selected-role', 'Filter By Role');
  resetFilterText('selected-expertise', 'Filter By Expertise');
  showAllTeam('team__card', 'block');



  roleList.forEach(function (item) {
    var filter, cards, cardContainer, i;

    item.addEventListener('click', (e) => {
      filter = e.target.textContent.toUpperCase();
      cardContainer = document.getElementById("team");
      cards = cardContainer.getElementsByClassName("team__card");
      for (i = 0; i < cards.length; i++) {
        titleRoles = cards[i].querySelector(".team__card__role");
        titleExpertise = cards[i].querySelector(".team__card__expertise");

        if (filter == "ALL ROLES" || filter == "ALL EXPERTISE") {
          cards[i].style.display = "block";
        } else if (titleRoles.innerText.toUpperCase().indexOf(filter) > -1 || titleExpertise.innerText.toUpperCase().indexOf(filter) > -1) {

          cards[i].style.display = "block";
        } else {
          cards[i].style.display = "none";
        }


      }

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








