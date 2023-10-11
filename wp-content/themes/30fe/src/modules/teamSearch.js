

//Search Filter
const input = document.getElementById("teamFilter");


if (input) {


  // click outside textfield
  input.addEventListener("blur", function () {
    let teamRoles = document.querySelectorAll('.team__roles');

    [...teamRoles].forEach(item => {
      item.style.display = "block"
    })
  });



  input.addEventListener('focus', function () {
    resetFilterText('team__selected-expertise', 'Filter By Expertise');
    showAllTeam('team__card', 'block');

    let teamRoles = document.querySelectorAll('.team__roles');

    [...teamRoles].forEach(item => {
      item.style.display = "block"
    })


  })


  input.addEventListener('keyup', teamFilter);
  function teamFilter() {

    var filter, cardContainerLeadership, cardContainerExperts, cardContainerSupport, title, i;
    filter = input.value.toUpperCase();

    cardContainerLeadership = document.getElementById("leadership");
    cardContainerExperts = document.getElementById("experts");
    cardContainerSupport = document.getElementById("support");

    cardsLeadership = cardContainerLeadership.getElementsByClassName("team__card");
    cardsExperts = cardContainerExperts.getElementsByClassName("team__card");
    cardsSupport = cardContainerSupport.getElementsByClassName("team__card");

    teamRoles = document.querySelectorAll('.team__roles');



    for (i = 0; i < cardsLeadership.length; i++) {
      title = cardsLeadership[i].querySelector(".team__card__name");
      if (title.innerText.toUpperCase().indexOf(filter) > -1) {
        cardsLeadership[i].style.display = "";
        [...teamRoles].forEach(item => {
          item.style.display = "none"
        })
      } else {
        cardsLeadership[i].style.display = "none";

      }
    }


    for (i = 0; i < cardsExperts.length; i++) {
      title = cardsExperts[i].querySelector(".team__card__name");
      if (title.innerText.toUpperCase().indexOf(filter) > -1) {
        cardsExperts[i].style.display = "";
        [...teamRoles].forEach(item => {
          item.style.display = "none"
        })
      } else {
        cardsExperts[i].style.display = "none";

      }
    }

    for (i = 0; i < cardsSupport.length; i++) {
      title = cardsSupport[i].querySelector(".team__card__name");
      if (title.innerText.toUpperCase().indexOf(filter) > -1) {
        cardsSupport[i].style.display = "";
        [...teamRoles].forEach(item => {
          item.style.display = "none"
        })
      } else {
        cardsSupport[i].style.display = "none";

      }
    }

  }
}


//Search Filter


const dropdowns = document.querySelectorAll('.team__filter-dropdown');
const expertiseList = document.querySelectorAll("ul > li");


dropdowns.forEach(dropdown => {
  const select = dropdown.querySelector('.team__select');
  const caret = dropdown.querySelector('.team__caret');
  const menu = dropdown.querySelector('.team__menu');
  const options = dropdown.querySelectorAll('.team__menu li');
  const selected = dropdown.querySelector('.team__selected');


  if (select) {
    select.addEventListener('click', () => {
      select.classList.toggle('team__select-clicked');
      caret.classList.toggle('team__caret-rotate');
      menu.classList.toggle('team__menu-open');
      expertiseFilter();

      // I'm using "click" but it works with any event
      document.addEventListener('click', event => {
        const isClickInside = select.contains(event.target)
        if (!isClickInside) {
          caret.classList.remove('team__caret-rotate');
          menu.classList.remove('team__menu-open');
          // The click was OUTSIDE the specifiedElement, do something
        }
      })

    });
  }




  options.forEach(option => {
    option.addEventListener('click', () => {
      selected.innerText = option.innerText;
      select.classList.remove('team__select-clicked');
      caret.classList.remove('team__caret-rotate');
      menu.classList.remove('team__menu-open');

      options.forEach(option => {
        option.classList.remove('active');
      });
      option.classList.add('active');
    });
  });
});


function expertiseFilter() {

  resetFilterText('selected-expertise', 'Filter By Expertise');
  showAllTeam('team__card', 'block');





  expertiseList.forEach(function (item) {
    var filter, cardsLeadership, cardsExperts, cardsSupport, cardContainerLeadership, cardContainerExperts, cardContainerSupport, i;

    item.addEventListener('click', (e) => {
      filter = e.target.textContent.toUpperCase();
      cardContainerLeadership = document.getElementById("leadership");
      cardContainerExperts = document.getElementById("experts");
      cardContainerSupport = document.getElementById("support");

      cardsLeadership = cardContainerLeadership.getElementsByClassName("team__card");
      cardsExperts = cardContainerExperts.getElementsByClassName("team__card");
      cardsSupport = cardContainerSupport.getElementsByClassName("team__card");
      teamRoles = document.querySelectorAll('.team__roles');


      for (i = 0; i < cardsLeadership.length; i++) {
        titleExpertise = cardsLeadership[i].querySelector(".team__card__expertise");
        if (filter == "ALL EXPERTISE") {
          cardsLeadership[i].style.display = "block";
          [...teamRoles].forEach(item => {
            item.style.display = "block"
          })
        } else if (titleExpertise.innerText.toUpperCase().indexOf(filter) > -1) {
          cardsLeadership[i].style.display = "block";
          [...teamRoles].forEach(item => {
            item.style.display = "none"
          })
        } else {
          cardsLeadership[i].style.display = "none";
        }
      }

      for (i = 0; i < cardsExperts.length; i++) {
        titleExpertise = cardsExperts[i].querySelector(".team__card__expertise");
        if (filter == "ALL EXPERTISE") {
          cardsExperts[i].style.display = "block";
          [...teamRoles].forEach(item => {
            item.style.display = "block"
          })
        } else if (titleExpertise.innerText.toUpperCase().indexOf(filter) > -1) {
          cardsExperts[i].style.display = "block";
          [...teamRoles].forEach(item => {
            item.style.display = "none"
          })
        } else {
          cardsExperts[i].style.display = "none";
        }
      }

      for (i = 0; i < cardsSupport.length; i++) {
        titleExpertise = cardsSupport[i].querySelector(".team__card__expertise");
        if (filter == "ALL EXPERTISE") {
          cardsSupport[i].style.display = "block";
          [...teamRoles].forEach(item => {
            item.style.display = "block"
          })
        } else if (titleExpertise.innerText.toUpperCase().indexOf(filter) > -1) {
          cardsSupport[i].style.display = "block";
          [...teamRoles].forEach(item => {
            item.style.display = "none"
          })
        } else {
          cardsSupport[i].style.display = "none";
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
  let elements = document.getElementsByClassName(className);


  for (var i = 0; i < elements.length; i++) {
    elements[i].innerText = text;
    console.log(elements[i].innerText);
  }
}

function resetTitles() {


}












