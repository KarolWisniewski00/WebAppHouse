//ON RESIZE
$(window).resize(function () {
    //APART
    $('#card-form-apart-container').height($('#card-form-apart').height() / 2)
    $('.fpb').css('padding-bottom', $('#card-form-apart').height() / 2)
    //CONTACT
    $('#card-form-contact-container').height($('#card-form-contact').height() / 2)
    $('.fpt').css('padding-top', $('#card-form-contact').height() / 2)
});
//ON LOAD
$(document).ready(function () {
    //APART
    $('#card-form-apart-container').height($('#card-form-apart').height() / 2)
    $('.fpb').css('padding-bottom', $('#card-form-apart').height() / 2)
    //CONTACT
    $('#card-form-contact-container').height($('#card-form-contact').height() / 2)
    $('.fpt').css('padding-top', $('#card-form-contact').height() / 2)
});