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
