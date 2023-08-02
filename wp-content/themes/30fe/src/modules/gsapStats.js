document.addEventListener("DOMContentLoaded", function () {



  gsap.timeline()

    .to('#bar .oxy-progress-bar-progress-wrap', { duration: 1, width: "100%", ease: "easeIn" })
    .to('#stats-1', { x: 500, duration: .5, ease: "ease" }, "-=.6")
    .to('#stats-2', { x: 300, duration: .5, ease: "ease" }, "-=.7")
    .to('#stats-3', { x: 200, duration: .5, ease: "ease" }, "-=.8")
    .to('#stats-4', { x: 100, duration: .5, ease: "ease" }, "-=.9")
    .to('#label-1', { opacity: 1, duration: .5, ease: "ease" })
    .to('#label-2', { opacity: 1, duration: .5, ease: "ease" }, "+=.2")
    .to('#label-3', { opacity: 1, duration: .5, ease: "ease" }, "+=.3")
    .to('#label-4', { opacity: 1, duration: .5, ease: "ease" }, "+=.4");

  // const pbar = document.querySelectorAll('.oxy-progress-bar');
  // pbar.forEach((element) => {

  //   let w = element.querySelector('.oxy-progress-bar-progress-wrap');
  //   let p = element.querySelector('.oxy-progress-bar-overlay-percent');

  //   let target = p.textContent;

  //   const pbtl = gsap.timeline({
  //     defaults: {
  //       duration: 4,
  //       ease: "easeIn"
  //     },

  //   });

  //   pbtl.fromTo(w, { width: 0 }, {
  //     width: target,
  //   });
  // })



});