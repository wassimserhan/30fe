const accordionscareers = document.querySelectorAll('.accordion-careers');

const openAccordioncareers = accordion => {
  const content = accordion.querySelector('.accordion-careers__content');
  accordion.classList.add('accordion-careers__active');
  content.style.maxHeight = content.scrollHeight + 5 + 'px';
};

const closeAccordioncareers = accordion => {
  const content = accordion.querySelector('.accordion-careers__content');
  accordion.classList.remove('accordion-careers__active');
  content.style.maxHeight = null;
  content.style.paddingTop = null;
};

accordionscareers.forEach(accordion => {
  const intro = accordion.querySelector('.accordion-careers__wrapper');
  const content = accordion.querySelector('.accordion-careers__content');

  intro.onclick = () => {
    if (content.style.maxHeight) {
      closeAccordioncareers(accordion);
    } else {
      accordionscareers.forEach(accordion => closeAccordioncareers(accordion));
      openAccordioncareers(accordion);
    }
  };
});