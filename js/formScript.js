$(document).ready(function () {
	$('.popup, .mail-window .orderACall').hide();
	$('#feedback, #phoneMobile').click(function (openMobile) {
			openMobile.preventDefault();
		$('.orderACall').slideToggle(500);
	});
	$('#closeorderACall').click(function () {
		$('.orderACall').slideUp(500);
	});


	$('#modalBellBut').click(function (openCall) {
			openCall.preventDefault();
		$('.popup').slideToggle(500);
//		if('.orderACall')
	});
	$('#modalBellBut').click(function () {
		 $('.popup, .mail-window').slideToggle(500, function(){
            if( $(this).css('display') === "none"){
                $(this).removeAttr('style');
            }  
         
        });
	});

	$('#mailMobile').click(function () {
	
		$('.mail-window').slideToggle(500);
	});
	$('#mail-window-close').click(function () {
		$('.popup, .mail-window').slideUp(500);
	});
});
