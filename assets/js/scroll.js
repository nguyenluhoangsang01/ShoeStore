$(window).scroll(function () {
  var height = $(window).scrollTop();
  if (height > 800) {
    $("#scroll-btn").fadeIn();
  } else {
    $("#scroll-btn").fadeOut();
  }
});

$(document).ready(function () {
  $("#scroll-btn").click(function (event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "fast");
    return false;
  });
});

$(window).scroll(function () {
  var height = $(window).scrollTop();
  if (height === 0) {
    $("#scroll-btn").fadeOut();
  }
});

window.onscroll = function () {
  myFunction();
};

var header = document.getElementById("header-main&header-bottom");
var sticky = header.offsetTop;
var modalPage = document.querySelector(".modal-page");

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    modalPage.style.top = "121px";
  } else {
    header.classList.remove("sticky");
    modalPage.style.top = "167px";
  }
}

var avatarImg = document.querySelector(".profile > form");
avatarImg.addEventListener("mouseover", () => {
  var btnProfile = document.querySelector(".username + .btn");
  btnProfile.style.opacity = 1;
  btnProfile.style.visibility = "visible";
});
avatarImg.addEventListener("mouseout", () => {
  var btnProfile = document.querySelector(".username + .btn");
  btnProfile.style.opacity = 0;
  btnProfile.style.visibility = "hidden";
});
