var descriptionBtn = document.querySelector("#description");
var addInformationBtn = document.querySelector("#add-information");
var evaluateBtn = document.querySelector("#evaluate");

var description = document.querySelector(".description");
var addInformation = document.querySelector(".add-information");
var evaluate = document.querySelector(".evaluate");

descriptionBtn.addEventListener("click", () => {
  description.style.display = "block";
  addInformation.style.display = "none";
  evaluate.style.display = "none";
  descriptionBtn.classList.add("show-border-top");
  addInformationBtn.classList.remove("show-border-top");
  evaluateBtn.classList.remove("show-border-top");
});

addInformationBtn.addEventListener("click", () => {
  description.style.display = "none";
  addInformation.style.display = "block";
  evaluate.style.display = "none";
  descriptionBtn.classList.remove("show-border-top");
  addInformationBtn.classList.add("show-border-top");
  evaluateBtn.classList.remove("show-border-top");
});

evaluateBtn.addEventListener("click", () => {
  description.style.display = "none";
  addInformation.style.display = "none";
  evaluate.style.display = "block";
  descriptionBtn.classList.remove("show-border-top");
  addInformationBtn.classList.remove("show-border-top");
  evaluateBtn.classList.add("show-border-top");
});

var star1 = document.querySelector("#star-1");
var star2 = document.querySelector("#star-2");
var star3 = document.querySelector("#star-3");
var star4 = document.querySelector("#star-4");
var star5 = document.querySelector("#star-5");

star1.addEventListener("click", () => {
  star1.style.color = "var(--primary-color)";
  star2.style.color = "var(--text-color)";
  star3.style.color = "var(--text-color)";
  star4.style.color = "var(--text-color)";
  star5.style.color = "var(--text-color)";
});

star2.addEventListener("click", () => {
  star1.style.color = "var(--primary-color)";
  star2.style.color = "var(--primary-color)";
  star3.style.color = "var(--text-color)";
  star4.style.color = "var(--text-color)";
  star5.style.color = "var(--text-color)";
});

star3.addEventListener("click", () => {
  star1.style.color = "var(--primary-color)";
  star2.style.color = "var(--primary-color)";
  star3.style.color = "var(--primary-color)";
  star4.style.color = "var(--text-color)";
  star5.style.color = "var(--text-color)";
});

star4.addEventListener("click", () => {
  star1.style.color = "var(--primary-color)";
  star2.style.color = "var(--primary-color)";
  star3.style.color = "var(--primary-color)";
  star4.style.color = "var(--primary-color)";
  star5.style.color = "var(--text-color)";
});

star5.addEventListener("click", () => {
  star1.style.color = "var(--primary-color)";
  star2.style.color = "var(--primary-color)";
  star3.style.color = "var(--primary-color)";
  star4.style.color = "var(--primary-color)";
  star5.style.color = "var(--primary-color)";
});

var times = document.querySelector(".fa-times");

times.addEventListener("click", () => {
  modal.style.opacity = 0;
  modal.style.visibility = "hidden";
});

var modal = document.querySelector("#modal");
document.onclick = function (event) {
  if (event.target == modal) {
    modal.style.opacity = 0;
    modal.style.visibility = "hidden";
  }
};

var esc = 27;
document.addEventListener("keyup", function (e) {
  if (e.keyCode == esc) {
    modal.style.opacity = 0;
    modal.style.visibility = "hidden";
  }
});
