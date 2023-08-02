const accordion = document.querySelectorAll(".accordion__item");
var accordionArray = [...accordion];

accordionArray.forEach(item => {
  item.addEventListener("click", function () {
    item.classList.add("active");

    for (let sibling of item.parentNode.children) {
      if (sibling !== item) {
        sibling.classList.remove('active')
      };
    }
  });
});
