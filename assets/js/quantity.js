var imgSrc = document.querySelector(
  ".col.l-5.slide-show-container.cursor-grab > img"
).src;

window.onload = function (x) {
  var minusBtn = document.getElementById("minus"),
    plusBtn = document.getElementById("plus"),
    numberPlace = document.getElementById("number-place"),
    submitBtn = document.getElementById("add-product"),
    number = 1,
    min = 1,
    max = 20;

  minusBtn.onclick = function () {
    if (number > min) {
      number = number - 1;
      numberPlace.innerText = number;
    }

    if (number == min) {
      alert("Tối thiểu 1 sản phẩm");
    }
  };

  plusBtn.onclick = function () {
    if (number < max) {
      number = number + 1;
      numberPlace.innerText = number;
    }

    if (number == max) {
      alert("Tối đa 20 sản phẩm");
    }
  };

  // src IMAGES
  var tableImg = document.getElementById("table-img");

  // Tên sản phẩm
  var getContentProductName = document.querySelector(".content-product__name");
  var innerContentProductName = getContentProductName.innerHTML.trim();
  var productName = document.getElementById("product-name");

  // Giá tiền
  var getContentProductCostP = document.querySelector(
    ".content-product__cost > p"
  );
  var innerContentProductCostP =
    getContentProductCostP.innerHTML.toLocaleString("vi-VN");
  var productCostP = document.getElementById("product-cost-p");

  // Số lượng
  var quantityProduct = document.getElementById("quantity-product");

  // Tổng cộng sản phẩm
  var totalCostProduct = document.getElementById("total-cost-product");

  const dot = ".";
  const replaceWith = "";
  const result = innerContentProductCostP.split(dot).join(replaceWith);

  const VND = "VND";
  const space = "";
  var innerContentProductCostP = result.split(VND).join(space);

  var innerContentProductCostP = Number(innerContentProductCostP);

  var faShoppingCart = document.querySelector(".fa-shopping-cart");

  var del = document.querySelector(".del");

  submitBtn.onclick = () => {
    alert(`Thêm thành công ${number} sản phẩm vào giỏ !`);

    faShoppingCart.style.transition = "all 0.2s";
    faShoppingCart.style.color = "var(--primary-color)";

    tableImg.src = imgSrc;

    productName.innerHTML = innerContentProductName;

    productCostP.innerHTML = innerContentProductCostP + " VND";

    quantityProduct.innerHTML = number;

    totalCostProduct.innerHTML = innerContentProductCostP * number + " VND";

    del.style.opacity = 1;
    del.style.visibility = "visible";
  };

  if ((tableImg.src = "../img/no-cart.png")) {
    del.style.opacity = 0;
    del.style.visibility = "hidden";
  }

  del.onclick = () => {
    alert(`Xóa thành công ${number} sản phẩm khỏi giỏ !`);

    faShoppingCart.style.transition = "all 0.2s";
    faShoppingCart.style.color = "var(--text-color)";

    tableImg.src = "../img/no-cart.png";

    productName.innerHTML = "Chưa chọn sản phẩm";

    productCostP.innerHTML = "Chưa chọn sản phẩm";

    quantityProduct.innerHTML = "Chưa chọn sản phẩm";

    totalCostProduct.innerHTML = "Chưa chọn sản phẩm";

    del.style.opacity = 0;
    del.style.visibility = "hidden";
  };
};
