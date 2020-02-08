$(document).ready(function () {
	//	$('.popup, .mail-window .orderACall').hide();
	$('#feedback, #phoneMobile').click(function () {
		$('.orderACall').slideToggle(500);
	});
	$('#closeorderACall').click(function () {
		$('.orderACall').slideUp(500);
	});

	
	$('#mailMobile').click(function () {
		$('.mail-window').slideToggle(500);
	});
	$('#mail-window-close').click(function () {
		$('.mail-window').slideUp(500);
	});

	
	$('#modalBellBut').click(function () {
		$('.popup').slideToggle(500);
	});
	$('#close').click(function () {
		$('.popup').slideUp(500);
	});





});
