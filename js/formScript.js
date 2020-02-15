$(document).ready(function () {
//	$('.popup, .mail-window .orderACall').hide();



	$('#feedback').click(function () {
		 $('.orderACall').slideToggle(500, function(){
            if( $(this).css('display') === "none"){
                $(this).removeAttr('style');
            }
        });
	});
	$('#modalBellBut').click(function () {
		 $('.popup, .mail-window').slideToggle(500, function(){
            if( $(this).css('display') === "none"){
                $(this).removeAttr('style');
            }  
         
        });
	});
	$('#modalBellBut').click(function () {		
         $('.orderACall').slideToggle(500, function(){
         	if( $(this).css('display') === "block"){
                $(this).removeAttr('style');
            }       

        });
	});	 
	


	
	$('#mail-window-close').click(function () {
		$('.popup, .mail-window').slideUp(500);
	});
	
	
});
