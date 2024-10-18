const accordionsFaq = document.querySelectorAll('.accordion-faq');

const openAccordionFaq = accordion => {
  const content = accordion.querySelector('.accordion-faq__content');
  accordion.classList.add('accordion-faq__active');
  content.style.maxHeight = content.scrollHeight + 5 + 'px';
};

const closeAccordionFaq = accordion => {
  const content = accordion.querySelector('.accordion-faq__content');
  accordion.classList.remove('accordion-faq__active');
  content.style.maxHeight = null;
  content.style.paddingTop = null;
};

accordionsFaq.forEach(accordion => {
  const intro = accordion.querySelector('.accordion-faq__wrapper');
  const content = accordion.querySelector('.accordion-faq__content');

  intro.onclick = () => {
    if (content.style.maxHeight) {
      closeAccordionFaq(accordion);
    } else {
      accordionsFaq.forEach(accordion => closeAccordionFaq(accordion));
      openAccordionFaq(accordion);
    }
  };
});



//Scroll items
if (document.querySelector('.left-column')) {
  document.addEventListener('DOMContentLoaded', function () {
    const leftColumn = document.querySelector('.left-column');
    const rightColumn = document.querySelector('.right-column');

    rightColumn.addEventListener('scroll', function () {
      const scrollPosition = rightColumn.scrollTop;
      const maxScrollRight = rightColumn.scrollHeight - rightColumn.clientHeight;
      const maxScrollLeft = leftColumn.scrollHeight - leftColumn.clientHeight;

      if (scrollPosition < maxScrollRight) {
        leftColumn.classList.add('sticky');
        leftColumn.style.top = '0px';
      } else {
        leftColumn.classList.remove('sticky');
        const remainingScroll = scrollPosition - maxScrollRight;
        leftColumn.style.top = `${Math.min(remainingScroll, maxScrollLeft)}px`;
      }
    });
  });
}
