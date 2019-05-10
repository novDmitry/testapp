import "jquery.mmenu"
import "magnific-popup"
import "select2"
import wsTabs from 'wezom-standard-tabs'
import "jquery-validation"
import "ion-rangeslider"
import "../js/components/count-box-change"
import "../js/components/magnificPopup"
import "../js/components/validate"
import "../js/components/select"
import "../js/components/mask"
import "../js/components/menu"
import "../js/components/filter-range"
import "../js/components/anchor"
import "../js/components/delete-product"
wsTabs.init();
import "../js/components/maps"

$('.jsPhons').each(function () {
    $(this).attr('href', "tel:" + $(this).text().replace(/\s/g, ''))
})