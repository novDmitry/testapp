import "jquery.mmenu"

let $menu = $("#header-nav").mmenu({
  navbar: {
    title: "TEST"
  },
  "extensions": [
    "border-none",
    "fx-menu-slide"
  ]
});

let $icon = $("#header-nav__open");
let API = $menu.data("mmenu");

$icon.on("click", function () {
  API.open();
});

API.bind("open:finish", function () {
  setTimeout(function () {
    $icon.addClass("is-active");
  }, 5);
});
API.bind("close:finish", function () {
  setTimeout(function () {
    $icon.removeClass("is-active");
  }, 5);
});

$('#menu-category__button').click(function () {
  if ($('.menu-category__links').hasClass('add-links')) {
    $('.menu-category__links').removeClass('add-links');
  }
  else {
    $('.menu-category__links').addClass('add-links');
  }
})