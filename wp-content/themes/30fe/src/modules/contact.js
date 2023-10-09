
const mapLocation = document.querySelectorAll('.contact__location h3');
var mapLocationArray = [...mapLocation];
const cityMap = document.getElementById('vancouver');
const cityPin = document.getElementById('vancouver-pin');

mapLocationArray.forEach(mapLocation => {
  mapLocation.addEventListener('click', function () {
    let city = mapLocation.innerHTML.toLowerCase();
    console.log(cityMap)
    cityMap.id = city;
    cityPin.id = city.concat('-pin')

  })
})





if (cityMap) {

  // Pin Animation

  gsap.to("#toronto-pin", { duration: 0.6, y: 20, ease: "circ.in", repeat: -1, yoyo: true })

  gsap.to("#vancouver-pin", { duration: 0.6, y: 20, ease: "circ.in", repeat: -1, yoyo: true })

  gsap.to("#ottowa-pin", { duration: 0.6, y: 20, ease: "circ.in", repeat: -1, yoyo: true })

  gsap.to("#calgary-pin", { duration: 0.6, y: 20, ease: "circ.in", repeat: -1, yoyo: true })

}