
const mapLocation = document.querySelectorAll('.contact__location h3');
var mapLocationArray = [...mapLocation];
const cityMap = document.getElementById('vancouver');
const cityPin = document.getElementById('vancouver-pin');


mapLocationArray.forEach(mapLocation => {
  mapLocation.addEventListener('click', function () {

    // Reset the background color for all buttons
    mapLocationArray.forEach(btn => {
      btn.classList.remove('vancouver-color');
      btn.classList.remove('calgary-color');
      btn.classList.remove('toronto-color');
      btn.classList.remove('ottawa-color');
      btn.classList.add('whitesmoke');

    });
    if (mapLocation.classList.contains('vancouver')) {
      mapLocation.classList.remove('whitesmoke');
      mapLocation.classList.add('vancouver-color');
    }

    if (mapLocation.classList.contains('calgary')) {
      mapLocation.classList.remove('whitesmoke');
      mapLocation.classList.add('calgary-color');
    }

    if (mapLocation.classList.contains('toronto')) {
      mapLocation.classList.remove('whitesmoke');
      mapLocation.classList.add('toronto-color');
    }

    if (mapLocation.classList.contains('ottawa')) {
      mapLocation.classList.remove('whitesmoke');
      mapLocation.classList.add('ottawa-color');
    }
    let city = mapLocation.innerHTML.toLowerCase();
    cityMap.id = city;
    cityPin.id = city.concat('-pin');
  });

})









if (cityMap) {

  // Pin Animation

  gsap.to("#toronto-pin", { duration: 0.6, y: 20, ease: "circ.in", repeat: -1, yoyo: true })

  gsap.to("#vancouver-pin", { duration: 0.6, y: 20, ease: "circ.in", repeat: -1, yoyo: true })

  gsap.to("#ottowa-pin", { duration: 0.6, y: 20, ease: "circ.in", repeat: -1, yoyo: true })

  gsap.to("#calgary-pin", { duration: 0.6, y: 20, ease: "circ.in", repeat: -1, yoyo: true })

}