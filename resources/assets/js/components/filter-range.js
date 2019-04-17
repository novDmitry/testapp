import "ion-rangeslider"

$(".filter-range").ionRangeSlider({
  skin: "round",
  type: "double",
  grid: false,
  force_edges: false,
  hide_min_max: true,
  hide_from_to: true,
  block: false,
  onChange: function (data) {
    $('#jsMinPrice').val(data.from.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "))
    $('#jsMaxPrice').val(data.to.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "))
  },
});

jsMinPrice.onkeypress = event => {
  if (event.key.length > 1) return true;
  jsMinPrice.value = (jsMinPrice.value + event.key)
    .replace(/\D/g, '')
    .replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
  event.preventDefault();
}

jsMaxPrice.onkeypress = event => {
  if (event.key.length > 1) return true;
  jsMaxPrice.value = (jsMaxPrice.value + event.key)
    .replace(/\D/g, '')
    .replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
  event.preventDefault();
}
let filter_price = $('.price_input');

filter_price.keypress(function () {
  if (parseInt($(this).val().replace(/\s/g, '')) > 100000) {
    $(this).val($(".filter-range").data('max').toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "))
  }
  else if (parseInt($(this).val().replace(/\s/g, '')) < 0) {
    $(this).val($(".filter-range").data('min').toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "))
  }
  else if (parseInt($('#jsMinPrice').val().replace(/\s/g, '')) > parseInt($('#jsMaxPrice').val().replace(/\s/g, ''))) {
    $('#jsMinPrice').val($(".filter-range").data('min').toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "))
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

filter_price.change(function () {
  if ($(this).val() < parseInt($(this).attr('min'))) {
    $(this).val($(this).attr('min'));
  }
})


$('#filter-open').click(function () {
  if ($('.filter__wrapper ').hasClass('add-filter')) {
    $('.filter__wrapper ').removeClass('add-filter');
  }
  else {
    $('.filter__wrapper ').addClass('add-filter');
  }
})

$('.resetFilterBtn').click(function () {
  my_range.reset();
})


