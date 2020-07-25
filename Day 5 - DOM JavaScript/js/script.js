var items = [
  ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'],
  ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
  ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
  ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
];

// release 0
function dataItems(items) {
  var tampung = "";
  for (var i = 0; i < items.length; i++) {
    tampung += `<div class="col-md-4 mt-4">
                <div class="card">
                <img src="img/${items[i][4]}" class="card-img-top p-3 img-object" alt="logitek">
                <div class="card-body">
                    <h5 class="card-tittle" id="itemName">${items[i][1]}</h5>
                    <p class="card-text" id="itemDesc">${items[i][3]}</p>
                    <p class="card-text">Rp ${items[i][2]}</p>
                    <button class="btn btn-primary" id="addCart" onclick ="tambahItems()">Add To Card</button>
                    </div>
                </div>
              </div>`
  }
  return tampung;
}
document.getElementById("listBarang").innerHTML = dataItems(items);

// Release 1
var formSearch = document.getElementById("formItem")
formSearch.addEventListener("submit", function (Event) {
  Event.preventDefault()
  var keyword = document.getElementById("keyword").value

  var filteredItems = filtering(keyword)
  console.log(filteredItems)
  document.getElementById("listBarang").innerHTML = dataItems(filteredItems)
})

function filtering(string) {
  var filteredItems = []
  for (var j = 0; j < items.length; j++) {

    var itemNameLowerCase = items[j][1].toLowerCase()
    var stringToLowerCase = string.toLowerCase()
    if (itemNameLowerCase.includes(stringToLowerCase)) {
      filteredItems.push(items[j])
    }
  }
  return filteredItems
}

// Release 2
var cartText = document.getElementById("cart")
var cartButton = document.getElementById("addCart")
var cartSum = 0

function tambahItems() {
  cartSum += 1
  cartText.innerHTML = '<i class="fas fa-shopping-cart"></i>(' + cartSum + ')'
}