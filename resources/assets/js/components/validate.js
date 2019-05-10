// let form = $(".jsFormValid");

$(".jsFormValid").each(function() {
    ($(this)).validate({
        showErrors: function(errorMap, errorList) {
        if (errorList.length) {
            let s = errorList.shift();
            let n = [];
            n.push(s);
            this.errorList = n;
        }
        this.defaultShowErrors();
        },
    });
})

$('.popup-entert__form').validate()



if ($('.jsSubscribeButton').length) {
$('.jsSubscribeButton').removeAttr('data-mfp-src');
}

if ($('.footer-subscribe__input').length) {
$('.footer-subscribe__input').change(function () {
    if ($('#footer-subscribe').valid() == false) {
    $('.jsSubscribeButton').removeAttr('data-mfp-src');
    }
    else {
    $('.jsSubscribeButton').attr('data-mfp-src', '#subscribe');
    }
})
}