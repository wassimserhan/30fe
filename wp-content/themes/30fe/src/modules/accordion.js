
import $ from 'jquery';


$(".accordion__item").on("mouseover", function () {
  $(this).addClass("active").siblings().removeClass("active").children().removeClass("active");
  $(this).children().eq(1).addClass("active")
});






//Mobile Accordion

const items = gsap.utils.toArray(".tab");
let currentItem = null;
const firstTab = document.querySelector(".tab");




items.forEach((e, i) => {
  firstTab.children[1].style.height = "auto";

  const content = e.querySelector(".content");
  const t = gsap.to(content, {
    height: "auto",
    paused: true
  });

  e._accordionTween = t;

  e.addEventListener("click", () => {
    firstTab.children[1].style.height = "";
    if (currentItem !== null) {
      items[currentItem].classList.toggle("active");
      if (currentItem === i) {
        currentItem = null;
        return t.reverse();
      }
      items[currentItem]._accordionTween.reverse();
    }
    e.classList.toggle("active");
    t.play();
    currentItem = i;
  });
});

