if (window.location.hash) scroll(0, 0);
setTimeout(function () { scroll(0, 0); }, 1);

if ($('.jsFeedBack')[0]) {
	$('.jsFeedBack').click(function () {

		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top + 'px'
		}, 1000, 'swing');

	});
}

if (window.location.hash) {
	$('html, body').animate({
		scrollTop: $(window.location.hash).offset().top + 'px'
	}, 500, 'swing');
	if ($('.product-detail-nav__tab').data('wstabs-button')) {
	}
	for (let i = 0; i < $('.product-detail-nav__tab').length; i++) {
		$('.product-detail-nav__tab').eq(i).removeClass('is-active');
		$('.my-block').eq(i).removeClass('is-active');
		if (i === 2) {
			$('.product-detail-nav__tab ').eq(i).addClass('is-active');
			$('.my-block').eq(i).addClass('is-active');
		}
	}
}
