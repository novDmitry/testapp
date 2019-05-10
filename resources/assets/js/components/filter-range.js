import "ion-rangeslider"

$(".filter-range").ionRangeSlider({
  skin: "round",
  type: "double",
  grid: false,
  hide_min_max: true,
  hide_from_to: true,
  block: false,
  onChange: function (data) {
    $('#jsMinPrice').val(data.from.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "))
    $('#jsMaxPrice').val(data.to.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "))
  },
});

// if ($('#jsMinPrice').length) {
//   jsMinPrice.onkeypress = event => {
//     if (event.key.length > 1) return true;
//     jsMinPrice.value = (jsMinPrice.value + event.key)
//       .replace(/\D/g, '')
//       .replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
//     event.preventDefault();
//   }
// }

// if ($('#jsMaxPrice').length) {
//   jsMaxPrice.onkeypress = event => {
//     if (event.key.length > 1) return true;
//     jsMaxPrice.value = (jsMaxPrice.value + event.key)
//       .replace(/\D/g, '')
//       .replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
//     event.preventDefault();
//   }
// }

let filter_price = $('.price_input');

filter_price.keypress(function () {
  if (parseInt($('#jsMaxPrice').val().replace(/\s/g, '')) > 10000) {
    $('#jsMaxPrice').val($(".filter-range").data('max').toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "))
  }
  if (parseInt($('#jsMinPrice').val().replace(/\s/g, '')) > 10000) {
    $('#jsMinPrice').val($('#jsMaxPrice').val())
  }
  if (parseInt($(this).val().replace(/\s/g, '')) <= 0) {
    $(this).val($(".filter-range").data('min').toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "))
  }

  let my_range = $('.filter-range').data('ionRangeSlider');
  let rangeData = $('.filter-range').val().split(/;/, 2);

  for (let i = 0; i < 2; i++) {
    rangeData[i] = parseInt(filter_price.eq(i).val().replace(/\s/g, ''))
  }

  my_range.update({
    from: rangeData[0],
    to: rangeData[1]
  });
});


$('#jsMaxPrice').change(function() {
  if (parseInt($('#jsMaxPrice').val().replace(/\s/g, '')) < parseInt($('#jsMinPrice').val().replace(/\s/g, ''))) {
    $('#jsMinPrice').val($('#jsMaxPrice').val())
  }
})

filter_price.change(function () {
  if ($(this).val() < parseInt($(this).attr('min'))) {
    $('#jsMinPrice').val($(this).attr('min'))
    $(this).val($('#jsMinPrice').val());
  }
  else if (parseInt($('#jsMinPrice').val().replace(/\s/g, '')) > parseInt($('#jsMaxPrice').val().replace(/\s/g, ''))) {
    $('#jsMaxPrice').val($('#jsMinPrice').val())
  }


  let ionRangeInstance = $('.filter-range').data('ionRangeSlider');
  let rangeData = $('.filter-range').val().split(/;/, 2);

  for (let i = 0; i < 2; i++) {
    rangeData[i] = parseInt(filter_price.eq(i).val().replace(/\s/g, ''))
  }

  ionRangeInstance.update({
    from: rangeData[0],
    to: rangeData[1]
  });
})


$('#filter-open').click(function () {
  if ($('.filter__wrapper ').hasClass('add-filter')) {
    $('.filter__wrapper ').removeClass('add-filter');
  }
  else {
    $('.filter__wrapper ').addClass('add-filter');
  }
})

$('.jsSubFilterOpen').click(function() {
  if ($(this).parent().find('.filter-category__items').hasClass('add-filter')) {
    $(this).parent().find('.filter-category__items').removeClass('add-filter');
    $(this).find('.jsSvgFilterAnim').css({
      "transform": "rotate(0deg)"
    })
  }
  else {
    $(this).parent().find('.filter-category__items').addClass('add-filter');
    $(this).find('.jsSvgFilterAnim').css({
      "transform": "rotate(180deg)"
    })
  }
})

let ionRangeInstance = $('.filter-range').data('ionRangeSlider');

$('.resetFilterBtn').click(function () {
  ionRangeInstance.update({
    from: $(".filter-range").data('min'),
    to: $(".filter-range").data('max'),
  });
})


