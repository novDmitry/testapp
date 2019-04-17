let form = $("form");

form.each(function() {
    $(this).validate({
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
});

if ($('.footer-subscribe__button').length) {
$('.footer-subscribe__button').removeAttr('data-mfp-src');
}

if ($('.footer-subscribe__input').length) {
$('.footer-subscribe__input').change(function () {
    if ($('#footer-subscribe').valid() == false) {
    $('.footer-subscribe__button').removeAttr('data-mfp-src');
    }
    else {
    $('.footer-subscribe__button').attr('data-mfp-src', '#subscribe');
    }
})
}