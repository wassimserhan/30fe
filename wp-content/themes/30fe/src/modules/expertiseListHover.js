const expertiseItems = document.querySelectorAll(".expertise__list-section")
const expertiseItemsArray = [...expertiseItems];


let color = {
  orange: '#ff6f48',
  blue: '#0175df',
  green: '#08cb80'
}


expertiseItemsArray.forEach(item => {


  item.addEventListener('mouseover', function () {

    console.log(`"${item.dataset.color}"`)

    item.style.color = item.dataset.color;
  })
})

expertiseItemsArray.forEach(item => {
  item.addEventListener('mouseout', function () {
    item.style.color = "#1d1c1d";
  })
})