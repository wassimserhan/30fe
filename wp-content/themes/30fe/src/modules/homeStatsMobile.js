init = function () {

  const bar = document.getElementById('statsBaMobile');

  if (bar) {

    gsap.registerPlugin(ScrollTrigger)

    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: ".mobile-stats__wrapper"
      }
    });

    tl
      .to('#statsBox-1', { x: 0, duration: 1, ease: "power2.out" }, "-=.6")
      .to('#statsBox-2', { x: 30, duration: 1, ease: "power2.out" }, "-=.6")
      .to('#statsBox-3', { x: 0, duration: 1, ease: "power2.out" }, "-=.6")
      .to('#statsBox-4', { x: 20, duration: 1, ease: "power2.out" }, "-=.6")





  }

}

window.onload = init();