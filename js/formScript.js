
$(document).ready(function () {
	$('.popup').hide();
	$('#feedback').click(function () {
	$('.popup').slideToggle(500);
	});
	$('#close').click(function(){
		$('.popup').slideUp(500);
	});
});