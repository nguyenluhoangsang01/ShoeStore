// INTRODUCE PRODUCT-------------------------------------------------------------------------
var getDivIntroduceProduct = document.getElementById("admin-group-introduce");
var introduceRemoveBtn = document.getElementById("introduceRemoveBtn");

function addTextarea() {
  var createTextareaProduct = document.createElement("textarea");
  createTextareaProduct.className = "introduce-product";
  createTextareaProduct.id = "introduce-product";
  createTextareaProduct.name = "introduce-product";
  createTextareaProduct.placeholder = "Nhập nội dung giới thiệu...";

  getDivIntroduceProduct.appendChild(createTextareaProduct);

  introduceRemoveBtn.classList.remove("disabled");
}

function removeTextarea() {
  if ($("#admin-group-introduce > textarea").length !== 1) {
    getDivIntroduceProduct.removeChild(getDivIntroduceProduct.lastChild);
  }
}

setInterval(() => {
  if ($("#admin-group-introduce > textarea").length === 1) {
    introduceRemoveBtn.classList.add("disabled");
  }
}, 1);

// SIZE PRODUCT-------------------------------------------------------------------------
var getDivSizeProduct = document.getElementById("admin-group-size");
var sizeRemoveBtn = document.getElementById("sizeRemoveBtn");

function addSizeInput() {
  var createInputProduct = document.createElement("input");
  createInputProduct.className = "size-product";
  createInputProduct.id = "size-product";
  createInputProduct.name = "size-product";
  createInputProduct.placeholder = "Nhập kích thước...";

  getDivSizeProduct.appendChild(createInputProduct);

  sizeRemoveBtn.classList.remove("disabled");
}

function removeSizeInput() {
  if ($("#admin-group-size > input").length !== 1) {
    getDivSizeProduct.removeChild(getDivSizeProduct.lastChild);
  }
}

setInterval(() => {
  if ($("#admin-group-size > #size-product").length === 1) {
    sizeRemoveBtn.classList.add("disabled");
  }
}, 1);

// COLOR PRODUCT-------------------------------------------------------------------------
var getDivColorProduct = document.getElementById("admin-group-color");
var colorRemoveBtn = document.getElementById("colorRemoveBtn");

function addColorInput() {
  var createInputProduct = document.createElement("input");
  createInputProduct.className = "color-product";
  createInputProduct.id = "color-product";
  createInputProduct.name = "color-product";
  createInputProduct.placeholder = "Nhập màu...";

  getDivColorProduct.appendChild(createInputProduct);

  colorRemoveBtn.classList.remove("disabled");
}

function removeColorInput() {
  if ($("#admin-group-color > input").length !== 1) {
    getDivColorProduct.removeChild(getDivColorProduct.lastChild);
  }
}

setInterval(() => {
  if ($("#admin-group-color > #color-product").length === 1) {
    colorRemoveBtn.classList.add("disabled");
  }
}, 1);

// CATEGORY PRODUCT-------------------------------------------------------------------------
var getDivCategoryProduct = document.getElementById("admin-group-category");
var categoryRemoveBtn = document.getElementById("categoryRemoveBtn");

function addCategoryInput() {
  var createInputProduct = document.createElement("input");
  createInputProduct.type = "text";
  createInputProduct.id = "category-product";
  createInputProduct.className = "category-product";
  createInputProduct.placeholder = "Nhập danh mục sản phẩm...";
  createInputProduct.name = "category-product";

  getDivCategoryProduct.appendChild(createInputProduct);

  categoryRemoveBtn.classList.remove("disabled");
}

function removeCategoryInput() {
  if ($("#admin-group-category > input").length !== 1) {
    getDivCategoryProduct.removeChild(getDivCategoryProduct.lastChild);
  }
}

setInterval(() => {
  if ($("#admin-group-category > #category-product").length === 1) {
    categoryRemoveBtn.classList.add("disabled");
  }
}, 1);
// --------------------------------------------------------------------------------

// INTRODUCE PRODUCT-------------------------------------------------------------------------
var adminDescriptionGroupIntroduce = document.getElementById(
  "admin-description-group-introduce"
);
var introduceRemoveDescriptionBtn = document.getElementById(
  "introduceRemoveDescriptionBtn"
);

function addTextareaDescription() {
  var createTextareaProduct = document.createElement("textarea");
  createTextareaProduct.className = "introduce-product";
  createTextareaProduct.id = "introduce-product";
  createTextareaProduct.name = "introduce-product";
  createTextareaProduct.placeholder = "Nhập nội dung giới thiệu thương hiệu...";

  adminDescriptionGroupIntroduce.appendChild(createTextareaProduct);

  introduceRemoveDescriptionBtn.classList.remove("disabled");
}

function removeTextareaDescription() {
  if ($("#admin-description-group-introduce > textarea").length !== 1) {
    adminDescriptionGroupIntroduce.removeChild(
      adminDescriptionGroupIntroduce.lastChild
    );
  }
}

setInterval(() => {
  if ($("#admin-description-group-introduce > textarea").length === 1) {
    introduceRemoveDescriptionBtn.classList.add("disabled");
  }
}, 1);

// TITLE PRODUCT-------------------------------------------------------------------------
var getDivTitleProduct = document.getElementById("admin-group-title");
var titleRemoveBtn = document.getElementById("titleRemoveBtn");

function addTitleInput() {
  var createInputProduct = document.createElement("input");
  createInputProduct.className = "title-product";
  createInputProduct.id = "title-product";
  createInputProduct.name = "title-product";
  createInputProduct.placeholder = "Nhập tiêu đề...";

  getDivTitleProduct.appendChild(createInputProduct);

  titleRemoveBtn.classList.remove("disabled");
}

function removeTitleInput() {
  if ($("#admin-group-title > input").length !== 1) {
    getDivTitleProduct.removeChild(getDivTitleProduct.lastChild);
  }
}

setInterval(() => {
  if ($("#admin-group-title > #title-product").length === 1) {
    titleRemoveBtn.classList.add("disabled");
  }
}, 1);

// CODE PRODUCT-------------------------------------------------------------------------
var getDivCodeProduct = document.getElementById("admin-group-code");
var codeRemoveBtn = document.getElementById("codeRemoveBtn");

function addCodeInput() {
  var createInputProduct = document.createElement("input");
  createInputProduct.className = "code-product";
  createInputProduct.id = "code-product";
  createInputProduct.name = "code-product";
  createInputProduct.placeholder = "Nhập mã sản phẩm...";

  getDivCodeProduct.appendChild(createInputProduct);

  codeRemoveBtn.classList.remove("disabled");
}

function removeCodeInput() {
  if ($("#admin-group-code > input").length !== 1) {
    getDivCodeProduct.removeChild(getDivCodeProduct.lastChild);
  }
}

setInterval(() => {
  if ($("#admin-group-code > #code-product").length === 1) {
    codeRemoveBtn.classList.add("disabled");
  }
}, 1);

// tag PRODUCT-------------------------------------------------------------------------
var getDivTagProduct = document.getElementById("admin-group-tag");
var tagRemoveBtn = document.getElementById("tagRemoveBtn");

function addTagInput() {
  var createInputProduct = document.createElement("input");
  createInputProduct.className = "tag-product";
  createInputProduct.id = "tag-product";
  createInputProduct.name = "tag-product";
  createInputProduct.placeholder = "Nhập thẻ sản phẩm...";

  getDivTagProduct.appendChild(createInputProduct);

  tagRemoveBtn.classList.remove("disabled");
}

function removeTagInput() {
  if ($("#admin-group-tag > input").length !== 1) {
    getDivTagProduct.removeChild(getDivTagProduct.lastChild);
  }
}

setInterval(() => {
  if ($("#admin-group-tag > #tag-product").length === 1) {
    tagRemoveBtn.classList.add("disabled");
  }
}, 1);

// SI PRODUCT-------------------------------------------------------------------------
var getDivSIProduct = document.getElementById("admin-size-group-introduce");
var sizeSIRemoveBtn = document.getElementById("sizeSIRemoveBtn");

function addSIInput() {
  var createInputProduct = document.createElement("input");
  createInputProduct.className = "introduce-size-product";
  createInputProduct.id = "introduce-size-product";
  createInputProduct.name = "introduce-size-product";
  createInputProduct.placeholder = "Nhập kích thước sản phẩm...";

  getDivSIProduct.appendChild(createInputProduct);

  sizeSIRemoveBtn.classList.remove("disabled");
}

function removeSIInput() {
  if ($("#admin-size-group-introduce > input").length !== 1) {
    getDivSIProduct.removeChild(getDivSIProduct.lastChild);
  }
}

setInterval(() => {
  if ($("#admin-size-group-introduce > #introduce-size-product").length === 1) {
    sizeSIRemoveBtn.classList.add("disabled");
  }
}, 1);

// CI PRODUCT-------------------------------------------------------------------------
var getDivCIProduct = document.getElementById("admin-color-group-introduce");
var colorCIRemoveBtn = document.getElementById("colorCIRemoveBtn");

function addCIInput() {
  var createInputProduct = document.createElement("input");
  createInputProduct.className = "introduce-color-product";
  createInputProduct.id = "introduce-color-product";
  createInputProduct.name = "introduce-color-product";
  createInputProduct.placeholder = "Nhập màu sản phẩm...";

  getDivCIProduct.appendChild(createInputProduct);

  colorCIRemoveBtn.classList.remove("disabled");
}

function removeCIInput() {
  if ($("#admin-color-group-introduce > input").length !== 1) {
    getDivCIProduct.removeChild(getDivCIProduct.lastChild);
  }
}

setInterval(() => {
  if (
    $("#admin-color-group-introduce > #introduce-color-product").length === 1
  ) {
    colorCIRemoveBtn.classList.add("disabled");
  }
}, 1);

// WI PRODUCT-------------------------------------------------------------------------
var getDivWIProduct = document.getElementById("admin-weight-group-introduce");
var weightWIRemoveBtn = document.getElementById("weightWIRemoveBtn");

function addWIInput() {
  var createInputProduct = document.createElement("input");
  createInputProduct.className = "introduce-weight-product";
  createInputProduct.id = "introduce-weight-product";
  createInputProduct.name = "introduce-weight-product";
  createInputProduct.placeholder = "Nhập trọng lượng sản phẩm...";

  getDivWIProduct.appendChild(createInputProduct);

  weightWIRemoveBtn.classList.remove("disabled");
}

function removeWIInput() {
  if ($("#admin-weight-group-introduce > input").length !== 1) {
    getDivWIProduct.removeChild(getDivWIProduct.lastChild);
  }
}

setInterval(() => {
  if (
    $("#admin-weight-group-introduce > #introduce-weight-product").length === 1
  ) {
    weightWIRemoveBtn.classList.add("disabled");
  }
}, 1);
