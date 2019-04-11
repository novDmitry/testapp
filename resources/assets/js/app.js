import $ from 'jquery'
import "jquery.mmenu"
import "magnific-popup"
import "select2"
import wsTabs from 'wezom-standard-tabs'
import "jquery-validation"
import Inputmask from "inputmask"

$(function() {
    wsTabs.init();

    $(".filter-options__button--reset").click(function(){
      $(".select").select2('val', '1');
    });

    if ($(".phone__mask").length) {
        Inputmask("+380 99 999 99 99", { placeholder: "" }).mask($(".phone__mask"));
      }

    var form = $("form");

    form.each(function() {
        $(this).validate({
          showErrors: function(errorMap, errorList) {
            if (errorList.length) {
              var s = errorList.shift();
              var n = [];
              n.push(s);
              this.errorList = n;
            }
            this.defaultShowErrors();
            
          },
          success: 'valid'
        });
      });

    $('#footer-subscribe').validate()

    $('.footer-subscribe__button').click(function () {
      if ($('#footer-subscribe').valid() == false) {
        $('.footer-subscribe__button').removeAttr('data-mfp-src')
      }
      else {
        $('.footer-subscribe__button').attr('data-mfp-src', '#subscribe')
      }
    })

    $('.category-selector').select2({
        placeholder: "Все категории",
        allowClear: true,
        minimumResultsForSearch: -1
    });
    $('.select').select2({
        width: '100%',
        height: '40px'
    });


    if ($('.popup-open').length) {
    $('.popup-open').magnificPopup({
        type: 'inline',
        fixedContentPos: true,
		    fixedBgPos: true
    });
  }

  $('.popup-open__sub').magnificPopup({
    type: 'inline',
    callbacks: {
      close: function() {
          $('#footer-subscribe').submit()
      }
    }
  })
    // $(window).resize(function() {

        var $menu = $("#header-nav").mmenu({
            navbar: {
                title: "TEST"
              },
            "extensions": [
                "border-none",
                "fx-menu-slide"
             ]
        });


    var $icon = $("#header-nav__open");
    var API = $menu.data( "mmenu" );
    
    $icon.on( "click", function() {
    API.open();
    });
    
    API.bind( "open:finish", function() {
    setTimeout(function() {
        $icon.addClass( "is-active" );
    }, 5);
    });
    API.bind( "close:finish", function() {
    setTimeout(function() {
        $icon.removeClass( "is-active" );
    }, 5);
    });

  // });

    // $('#menu-category__button').click(function() {
    //   $('.menu-category__links').addClass('add-links')
    // })


    $('#menu-category__button').click(function(){
      if($('.menu-category__links').hasClass('add-links')) {
        $('.menu-category__links').removeClass('add-links');
      }
      else {
        $('.menu-category__links').addClass('add-links');
      }
    })


    $('.product-offer .price').each(function() {
      let curIndex = $('.price').index(this);
      var currentPrice = parseInt($('.price').eq(curIndex).text().replace(/\s/g, ''));
    
      
        $('.box').eq(curIndex).change(function() {
          var multiplier = $(this).val();
          var newPrice = currentPrice * multiplier;

          if($(this).val() > parseInt($(this).attr('max'))) {
            $(this).val($(this).attr('max'))
          }
          else if($(this).val() < parseInt($(this).attr('min'))) {
            $(this).val($(this).attr('min'))
          }else {
            $('.price').eq(curIndex).text(newPrice);
          }
         })
    
     });
  

});