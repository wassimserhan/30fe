function showMap(id) {
  var element = document.getElementById(id);
  var elements = document.getElementsByClassName("contact__image");

  for (var i = 0; i < elements.length; i++) {
    elements[i].classList.add['show-map'];
  }

  element.classList.add = 'block';


}

window.showMap = showMap