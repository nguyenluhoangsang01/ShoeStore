var modalWrapper = document.querySelector("#modal-wrapper");
var modalCheckbox = document.querySelector("#modal-checkbox");
document.onclick = function (event) {
  if (event.target == modalWrapper) {
    modalCheckbox.checked = false;
  }
};

var esc = 27;
document.addEventListener("keyup", function (e) {
  if (e.keyCode == esc) {
    modalCheckbox.checked = false;
  }
});
