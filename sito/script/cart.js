if(document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    //Rimuovo elementi
    var removeElement = document.getElementById("remove");

    //Listener per rimozione
    for(var i = 0; i < removeElement.length; i++) {
        var button = removeElement[i];
        button.addEventListener('click', removeCartItem)
    }

    //Listener per l'input
    var quantityInput = document.getElementById('quantity-input')
    for(var i = 0; i < removeInput.length; i++) {
        var input = quantityInput[i]
        input.addEventListener('change', quantityChange)
    }

    //Apertura carrello
    var addToCartButtons = document.getElementById('shop-item')
    for(var i = 0; i < removeElement.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartCLicked)
    }
}

//Controllo input quantità
function quantityChange(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updateCartTotal()
}

//Aggiungo elementi al carrello
function addToCartCLicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementById('shop-item-title')[0].innerText
    var price = shopItem.getElementById('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementById('shop-item-image')[0].src
    addItemToCart(title, price, imageSrc)
}

//Aggiunge effettivamente un elemento al carrello
function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementById('item')[0]
    var cartRowContents = /* codice html */
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
}

//Rimozione elementi
function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal()
}

//update totale
function updateCartTotal() {
    var cartItemContainer = document.getElementById('item')[0]
    var cartRows = cartItemContainer.getElementById('item-row')
    var total = 0;

    for(var i = 0; i < cartRows.length; i++) {
        var row = cartRows[i];
        var priceElement = row.getElementById('price')[0]
        var quantityElement = row.getElementById('quantity-input')[0]

        //update prezzo
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total += (price * quantity)
    }

    //Sistemo i decimali e update totale prezzo
    total = Math.round(total * 100) / 100
    document.getElementById('total-price')[0].innerText = total
}
