$(document).ready(function () {
  $(".slide-show-container").slick({
    arrows: true,
    autoplay: true,
    initialSlide: 2,
    swipeToSlide: true,
    slidesToShow: 1,
    autoplaySpeed: 4000,
    slidesToScroll: 1,
    prevArrow: '<button class="prev" type="button">&#10094;</button>',
    nextArrow: '<button class="next" type="button">&#10095;</button>',
  });
});

$(document).ready(function () {
  $(".slide-show-partners-container").slick({
    arrows: false,
    autoplay: true,
    initialSlide: 2,
    swipeToSlide: true,
    slidesToShow: 6,
    autoplaySpeed: 300,
    slidesToScroll: 1,
  });
});

$(document).ready(function () {
  $(".care").slick({
    arrows: false,
    autoplay: true,
    initialSlide: 1,
    swipeToSlide: true,
    slidesToShow: 1,
    autoplaySpeed: 465,
    slidesToScroll: 1,
  });
});

$(document).ready(function () {
  $(".row-similar-product").slick({
    arrows: true,
    autoplay: false,
    initialSlide: 2,
    swipeToSlide: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: '<button class="prev" type="button">&#10094;</button>',
    nextArrow: '<button class="next" type="button">&#10095;</button>',
  });
});

$(document).ready(function () {
  $(".slide-show-bottom").slick({
    arrows: true,
    autoplay: false,
    initialSlide: 3,
    swipeToSlide: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: '<button class="prev" type="button">&#10094;</button>',
    nextArrow: '<button class="next" type="button">&#10095;</button>',
  });
});

$(document).ready(function () {
  $(".slide-show-bottomOP").slick({
    arrows: true,
    autoplay: false,
    initialSlide: 4,
    swipeToSlide: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    prevArrow: '<button class="prev" type="button">&#10094;</button>',
    nextArrow: '<button class="next" type="button">&#10095;</button>',
  });
});
