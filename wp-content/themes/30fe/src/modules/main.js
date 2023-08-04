

//Search Filter
const input = document.getElementById("myFilter");

if (input) {
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


//Expertise Filter
const e = document.getElementById("team__expertise");

if (e) {

  e.addEventListener('change', expertiseFilter);

  function expertiseFilter() {
    resetSearch()
    const role = document.getElementById("team__role").value = 'all';
    var filter, cards, cardContainer, title, i;
    filter = e.value.toUpperCase();
    cardContainer = document.getElementById("team");
    cards = cardContainer.getElementsByClassName("team__card");
    for (i = 0; i < cards.length; i++) {
      title = cards[i].querySelector(".team__card__expertise");
      if (title.innerText.toUpperCase().indexOf(filter) > -1) {
        cards[i].style.display = "";
      } else {
        cards[i].style.display = "none";
      }
    }
  }
}

//Role Filter
const role = document.getElementById("team__role");

if (role) {
  role.addEventListener('change', roleFilter);

  function roleFilter() {
    resetSearch()
    const e = document.getElementById("team__expertise").value = 'all';
    var filter, cards, cardContainer, title, i;
    filter = role.value.toUpperCase();
    cardContainer = document.getElementById("team");
    cards = cardContainer.getElementsByClassName("team__card");
    for (i = 0; i < cards.length; i++) {
      title = cards[i].querySelector(".team__card__role");
      if (title.innerText.toUpperCase().indexOf(filter) > -1) {
        cards[i].style.display = "";
      } else {
        cards[i].style.display = "none";
      }
    }
  }
}


function resetSearch() {
  cardContainer = document.getElementById("team");
  cards = cardContainer.getElementsByClassName("team__card");
  for (i = 0; i < cards.length; i++) {
    cards[i].style.display = "block";
  }


}
