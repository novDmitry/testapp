import $ from 'jquery'
$(function () {

  $('.product-offer .price').each(function () {
    let curIndex = $('.price').index(this);
    let currentPrice = parseInt($('.price').eq(curIndex).text().replace(/\s/g, ''));


    $('.box').eq(curIndex).change(function () {
      let multiplier = $(this).val();
      let newPrice = currentPrice * multiplier;

      if ($(this).val() > parseInt($(this).attr('max'))) {
        $(this).val($(this).attr('max'))
        $('.price').eq(curIndex).text(currentPrice * parseInt($(this).attr('max')));
      }
      else if ($(this).val() < parseInt($(this).attr('min'))) {
        $(this).val($(this).attr('min'))
        $('.price').eq(curIndex).text(currentPrice * parseInt($(this).attr('min')));
      } else {
        $('.price').eq(curIndex).text(newPrice);
      }
    })

  });

  $('.down').click(function () {
    let $input = $(this).parent().find('input');
    let count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });

  $('.up').click(function () {
    let $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });


  $('.popup-basket-price__change').each(function () {
    let curIndex = $('.popup-basket-price__change').index(this);
    let currentPrice = parseInt($('.popup-basket-price__change').eq(curIndex).text());

    $('.popup-basket__count').eq(curIndex).change(function () {
      let multiplier = $(this).val();
      let newPrice = currentPrice * multiplier;

      if ($(this).val() > parseInt($(this).attr('max'))) {
        $(this).val($(this).attr('max'))
      }
      else if ($(this).val() < parseInt($(this).attr('min'))) {
        $(this).val($(this).attr('min'))
        $('.popup-basket-price__change').eq(curIndex).text(currentPrice * parseInt($(this).attr('min')))
      } else {
        $('.popup-basket-price__change').eq(curIndex).text(newPrice);
      }
    })
  });

  $('.popup-basket__count').change(function () {
    let arrPrice = $('.popup-basket-price__change').map(function () {
      return parseInt(($(this).text()));
    }).get();

    const reducer = (accumulator, currentValue) => accumulator + currentValue;
    let summ = arrPrice.reduce(reducer);

    $('#popup-basket-price--all').text(summ)
  })
});