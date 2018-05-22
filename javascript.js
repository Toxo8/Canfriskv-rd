//Javascript code


jQuery(document).ready(function($) {
    $('.hamburger').click(function(e) {
        $(this).toggleClass("is-active");

        if($('.nav-menu ul').is(':visible')){
            $('.header-contact-info').slideToggle("400", "linear").promise().done(function(){
                $('.nav-menu').slideToggle("slow", "linear");

            });
        }else {
            $('.nav-menu').slideToggle("slow", "linear").promise().done(function(){
                $('.header-contact-info').slideToggle("400", "linear");
            });
        }
        e.preventDefault();
    });

    $('#gdpr-check').click(function(e) {

        if($('#gdpr-check').is(':checked')) {
            $('.email-submit-button').css('pointer-events', 'auto');
        }
        else {
            $('.email-submit-button').css('pointer-events', 'none');
        }
    });
});
