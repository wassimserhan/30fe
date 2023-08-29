init = function () {

  const bar = document.getElementById('statsBar');

  if (bar) {

    gsap.registerPlugin(ScrollTrigger)

    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: ".stats__progress-wrap"
      }
    });

    tl.to('#statsBar .stats__progress-wrap', { duration: 1, width: "100%", ease: "power2.out" })
      .to('#stats-1', { x: 500, duration: 1, ease: "power2.out" }, "-=.6")
      .to('#stats-2', { x: 300, duration: 1, ease: "power2.out" }, "-=.6")
      .to('#stats-3', { x: 400, duration: 1, ease: "power2.out" }, "-=.6")
      .to('#stats-4', { x: 200, duration: 1, ease: "power2.out" }, "-=.6")
      .to('#label-1', { opacity: 1, duration: .5, ease: "ease" }, "<")
      .to('#label-2', { opacity: 1, duration: .5, ease: "ease" }, "<")
      .to('#label-3', { opacity: 1, duration: .5, ease: "ease" }, "<")
      .to('#label-4', { opacity: 1, duration: .5, ease: "ease" }, "<");




  }

}

window.onload = init();