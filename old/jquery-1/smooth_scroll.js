$(document).ready(function() {
	$('#home').click(function() {
        $('html, body').animate({
            scrollTop: '0px'
        }, 1500);
        return false;
    });
	
    $('#about_us').click(function() {
        $('html, body').animate({
            scrollTop: '590px'
        }, 1500);
        return false;
    });
    
    $('#gallery').click(function() {
        $('html, body').animate({
            scrollTop: '1712px'
        }, 1500);
        return false;
    });
	
});