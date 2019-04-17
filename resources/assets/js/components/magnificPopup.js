import "magnific-popup"
if ($('.popup-open').length) {
  $('.popup-open').magnificPopup({
    type: 'inline',

    fixedContentPos: true,
    fixedBgPos: true,

    overflowY: 'auto',

    closeBtnInside: true,
    preloader: false,

    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
  });
}

$('.popup-open__sub').magnificPopup({
  type: 'inline',
  removalDelay: 300,
  mainClass: 'my-mfp-zoom-in',
  callbacks: {
    close: function () {
      $('#footer-subscribe').submit()
    }
  }
})

$('.image-popup-fit-width').magnificPopup({
  type: 'image',
  closeOnContentClick: true,
  image: {
    verticalFit: false
  }
});
