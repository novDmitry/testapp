import $ from 'jquery'
import "jquery.mmenu"
import "magnific-popup";

$(function() {

    $('.header-popup__button').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: "auto",
    });

    if($(window).width() < 700){
        var $menu = $("#header-nav").mmenu({
            navbar: {
                title: "TEST"
              },
            "extensions": [
                "border-none",
                "fx-menu-slide"
             ]
        });
        $("#header-nav__open").css({"display":"block"});
    }else{
        $("#header-nav__open").css({"display":"none"});
    }
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

});