//ON RESIZE
$(window).resize(function () {
    $('#card-form-apart-container').height($('#card-form-apart').height() / 2);
    //APART
    if ($(window).width() >= 1200) {
        $('.fpb').css('padding-bottom', $('#card-form-apart').height() / 2);
    } else {
        $('.fpb').css('padding-bottom', 0);
    }
    //CONTACT
    $('#card-form-contact-container').height($('#card-form-contact').height() / 2)
    $('.fpt').css('padding-top', $('#card-form-contact').height() / 2)
});
//ON LOAD
$(document).ready(function () {
    //APART
    $('#card-form-apart-container').height($('#card-form-apart').height() / 2);
    if ($(window).width() >= 1200) {
        $('.fpb').css('padding-bottom', $('#card-form-apart').height() / 2);
    } else {
        $('.fpb').css('padding-bottom', 0);
    }
    //CONTACT
    $('#card-form-contact-container').height($('#card-form-contact').height() / 2)
    $('.fpt').css('padding-top', $('#card-form-contact').height() / 2)
});