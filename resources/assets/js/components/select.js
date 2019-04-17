import "select2"
$('.category-selector').select2({
    placeholder: "Все категории",
    allowClear: true,
    minimumResultsForSearch: -1
});

$('.select').select2({
    width: '100%',
    height: '40px',
    minimumResultsForSearch: -1
});

$('.rectangle-select').select2({
    width: '100%',
    height: '40px',
});

$(".filter-options__button--reset").click(function(){
    $(".select").select2('val', '1');
});

$('.rectangle-select').on('select2:select', function () {
    let curOptionVal = $(this).val();
    if($(".product-price ").eq(parseInt(curOptionVal) - 1).data('price') === parseInt(curOptionVal)){
        $(".product-price-active").addClass('hide');
        $(".product-discount-active").addClass('hide');
        $(".product-info-quantity").addClass('hide');
        
        $(".product-price-active").eq(parseInt(curOptionVal) - 1).removeClass('hide');
        $(".product-discount-active").eq(parseInt(curOptionVal) - 1).removeClass('hide');
        $(".product-info-quantity").eq(parseInt(curOptionVal) - 1).removeClass('hide');
    }
});