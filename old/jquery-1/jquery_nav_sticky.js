function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#wrapper_menu').addClass('stick');
    } else {
        $('#wrapper_menu').removeClass('stick');
    } 
}

$(function () {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});// JavaScript Document
