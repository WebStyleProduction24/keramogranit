$(document).ready(function(){
	$('.popup').hide();
	$('#feedback').click(function(){$('.popup').addClass('popupShow').slideToggle(500);
	 $(this).removeClass('popupShow'); 
	});

});
	