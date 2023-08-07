if (document.querySelector(".member__image") !== null) {

  init = function () {
    let images = gsap.utils.toArray(".member__image"),
      tl = gsap.timeline({ repeat: -1 }),
      fadeDuration = 1.5,
      stayDuration = 5;



    // show the first one
    gsap.set(images[0], { autoAlpha: 1 });

    //stops gsap if only one image
    if (images.length == 1) return;

    // fade each one in successively (in a staggered fashion) EXCEPT the first one (because it's already visible)
    tl.to(images.slice(1), { delay: stayDuration, autoAlpha: 1, duration: fadeDuration, stagger: stayDuration + fadeDuration })
      // hide each one after the next one finishes fading in on top of it. Exclude the final image because we'll handle the crossfade with the first image with a tween at the end.
      .to(images.slice(0, images.length - 1), { autoAlpha: 0, duration: 0.01, stagger: stayDuration + fadeDuration }, stayDuration + fadeDuration)
      // show the first image (but it won't be visible yet because the last image is on top of it)
      .set(images[0], { autoAlpha: 1 })
      // now fade out the last image so that the first one is showing again
      .to(images[images.length - 1], { autoAlpha: 0, duration: fadeDuration }, "+=" + stayDuration);
  }

  window.onload = init();

}