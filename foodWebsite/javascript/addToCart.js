document.addEventListener("DOMContentLoaded", function () {
    const removeCartItemButtons = document.querySelectorAll(".btn-danger");
    removeCartItemButtons.forEach(function (button) {
        button.addEventListener("click", removeCartItem);
    });

    const quantityInputs = document.querySelectorAll(".cart-quantity-input");
    quantityInputs.forEach(function (input) {
        input.addEventListener("change", quantityChanged);
    });

    const addToCartButtons = document.querySelectorAll(".burger-item-button");
    addToCartButtons.forEach(function (button) {
        button.addEventListener("click", addToCartClicked);
    });

    const purchaseButton = document.querySelector(".btn-purchase");
    purchaseButton.addEventListener("click", purchaseClicked);
});

function purchaseClicked() {
    alert("Thank you for your purchase");
    const cartItems = document.querySelector(".cart-items");
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild);
    }
    updateCartTotal();
}

function removeCartItem(event) {
    const buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
}

function quantityChanged(event) {
    const input = event.target;
    if (isNaN(parseFloat(input.value)) || parseFloat(input.value) <= 0) {
        input.value = 1;
    }
    updateCartTotal();
}

function addToCartClicked(event) {
    const button = event.target;
    const burgerItem = button.parentElement.parentElement;
    const title = burgerItem.querySelector(".burger-title").textContent;
    const price = burgerItem.querySelector(".burger-price").textContent;
    const imageSrc = burgerItem.querySelector(".burger-image").src;
    addItemToCart(title, price, imageSrc);
    updateCartTotal();
}

function addItemToCart(title, price, imageSrc) {
    const cartItem = `
    <div class="cart-rows">
      <div class="cart-item cart-column">
        <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
        <span class="cart-item-title">${title}</span>
      </div>
      <span class="cart-price cart-column">${price}</span>
      <div class="cart-quantity cart-column">
        <input class="cart-quantity-input" type="number" value="1">
        <button class="btn btn-danger" type="button">REMOVE</button>
      </div>
    </div>`;
    const cartItems = document.querySelector(".cart-items");
    const cartItemNames = cartItems.querySelectorAll(".cart-item-title");
    for (const cartItemName of cartItemNames) {
        if (cartItemName.textContent === title) {
            alert("This item is already added to the cart");
            return;
        }
    }
    cartItems.insertAdjacentHTML("beforeend", cartItem);
    const removeCartItemButton = cartItems.querySelector(
        ".btn-danger:last-of-type"
    );
    removeCartItemButton.addEventListener("click", removeCartItem);
    const quantityInput = cartItems.querySelector(
        ".cart-quantity-input:last-of-type"
    );
    quantityInput.addEventListener("change", quantityChanged);
}
function updateCartTotal() {
    const cartItemContainer = document.querySelector(".cart-items");
    const cartRows = cartItemContainer.querySelectorAll(".cart-row");
    let total = 0;
    cartRows.forEach(function (cartRow) {
        const priceElement = cartRow.querySelector(".cart-price");
        const quantityElement = cartRow.querySelector(".cart-quantity-input");
        const price = parseFloat(priceElement.textContent.replace("£", ""));
        const quantity = parseInt(quantityElement.value);
        total += price * quantity;
    });
    total = Math.round(total * 100) / 100;
    const cartTotalPriceElement = document.querySelector(".cart-total-price");
    cartTotalPriceElement.textContent = "£" + total;
}
