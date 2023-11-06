// const sectionColors = ["dodgerblue", "salmon", "green", "purple", "maroon", "dodgerblue"]
// const navColors = ["#00BFFF", "#FFA07A", "#90EE90", "#EE82EE", "#FF6347", "#00BFFF"]

// //apply sectionColors to each .fullscreen element
// gsap.set(".fullscreen", { backgroundColor: gsap.utils.wrap(sectionColors) })

// const sections = gsap.utils.toArray(".fullscreen")

// sections.forEach(function (section, index) {
//   console.log(section, navColors[index])
//   ScrollTrigger.create({
//     trigger: section,
//     start: "top 112px",
//     end: "bottom 112px",
//     animation: gsap.to(".nav", { backgroundColor: navColors[index], immediateRender: false }),
//     toggleActions: "restart none none reverse"

//   })
// })