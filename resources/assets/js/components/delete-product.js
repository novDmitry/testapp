let jsItemBasketWrapper = '.popup-basket__item-wrapper';

$('.jsProductDel').click(function () {
	$(this).closest(jsItemBasketWrapper).find('.popup-basket__item').animate({top: "150px", opacity: 0.4}, 300);
	$(this).closest(jsItemBasketWrapper).find('.popup-basket-delete__accept').css('display', 'flex');
	// $(this).closest(jsItemBasketWrapper).find('.popup-basket-delete__accept').animate({opacity: 1}, 300);
})

$('.jsDeleteItemNo').click(function () {
	$(this).closest(jsItemBasketWrapper).find('.popup-basket__item').animate({top: "0px", opacity: 1}, 250);
	// $(this).closest(jsItemBasketWrapper).find('.popup-basket-delete__accept').css('display', 'none');
})

$(".jsDeleteItemYes").on("click", function(){
	let $this = $(this),
		itemWrap = $this.closest(jsItemBasketWrapper);
		// itemWrap.find('.popup-basket__item').animate({top: "100px", opacity: 0}, 800);
		itemWrap.find('.popup-basket-delete__accept').animate({opacity: 0}, 10);
	
	setTimeout(function() {
		itemWrap.css({
			"min-height": "0px",
			"padding": "0px",
			"margin": "0px",
			"border": "0px"
		  })
	}, 100)

	setTimeout(function(){
		itemWrap.remove();
		if ($('.popup-basket__item').length == 0) {
			$('#popup-basket-price--all').text('0');
			$('.popup-basket-clear').addClass('active')
		}
		else {
			$('.popup-basket-clear').removeClass('active')
			$('.popup-basket__count').trigger('change');
		}
	}, 1000);
});



