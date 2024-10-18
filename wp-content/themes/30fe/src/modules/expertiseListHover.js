const expertiseItems = document.querySelectorAll(".expertise-hover")
const expertiseItemsArray = [...expertiseItems];

expertiseItemsArray.forEach(item => {
  item.addEventListener('mouseover', function () {
    item.style.backgroundColor = item.dataset.color;
  })
})

expertiseItemsArray.forEach(item => {
  item.addEventListener('mouseout', function () {
    item.style.backgroundColor = "transparent";
  })
})


const sectorItems = document.querySelectorAll(".sectors-hover")
const sectorItemsArray = [...sectorItems];

sectorItemsArray.forEach(item => {
  item.addEventListener('mouseover', function () {
    item.style.backgroundColor = $taupe;
  })
})

sectorItemsArray.forEach(item => {
  item.addEventListener('mouseout', function () {
    item.style.backgroundColor = "transparent";
  })
})