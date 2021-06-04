var cartShopping = document.querySelector(".cart-shopping");
var faShoppingCart = document.querySelector(".fa-shopping-cart");
var close = document.querySelector(".close");

faShoppingCart.addEventListener("click", () => {
  cartShopping.style.opacity = "1";
  cartShopping.style.visibility = "visible";
});

close.addEventListener("click", () => {
  cartShopping.style.opacity = "0";
  cartShopping.style.visibility = "hidden";
});
