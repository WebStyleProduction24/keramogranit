
$(document).ready(function () {
	$('.popup, .mail-window').hide();
	$('#feedback').click(function () {
	$('.popup').slideToggle(500);
	});
	$('#close').click(function(){
		$('.popup').slideUp(500);
	});
	$('#mailMobile').click(function(){
		$('.mail-window').slideToggle(500);
	});
	$('#mail-window-close').click(function(){
		$('.mail-window').slideUp(500);
	});
	
});