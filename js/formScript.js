$(document).ready(function () {
	$('.popup, .mail-window .orderACall').hide();
	$('#feedback, #phoneMobile').click(function (openMobile) {
			openMobile.preventDefault();
		$('.orderACall').slideToggle(500);
	});
	$('#closeorderACall').click(function () {
		$('.orderACall, .popup').slideUp(500);
	});


	$('#modalBellBut').click(function (openCall) {
			openCall.preventDefault();
		$('.popup').slideToggle(500);
//		if('.orderACall')
	});
	

	$('#mailMobile').click(function () {
	
		$('.mail-window').slideToggle(500);
	});
	$('#mail-window-close').click(function () {
		$('.mail-window').slideUp(500);
	});

	$('.modal__window').click(function (e) {
		e.preventDefault();
		$('#exampleModal1').arcticmodal();
		var ID_product = $(this).attr('data-product_id'),
				title = $(this).text(),
				parent = $(this).parent(),
				ask = parent.find('.art p span').text(),
				img = parent.find('.img-product img').attr('src');

		$('#exampleModal1').attr('data-product_id', ID_product)

						$.ajax({
								type: 'POST',
                url: "/wp-content/themes/keramogranit/modal.php",  
                cache: false,  
                success: function(html){  
                    $("#exampleModal1").html(html);
                    $('.arctic__goods-name').text(title);
                    $('.art__number').text(ask);
                    $('img#bigetImg').attr('src', img);
                }  
            });  



		input_conole = 'ссылка изображения: ' + img;

		console.log(input_conole);


	});    
	



	
});
