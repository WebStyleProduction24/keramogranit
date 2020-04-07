$(document).ready(function () {
	$('#open__color').on('click', function () {
		$('#close__color').slideToggle(100, function () {
			if ($(this).css('display') === "block") {
				$(this).removeAttr('style');
			}
		});

	});
	let num = 0;
	let arr = ["img/arrowUp.png", "img/arrowDown.png"];
	$(this).find('.svg__arrow').click(function () {
		num++;
		if (num >= arr.length) {
			num = 0;
		}
		$(this).find('img').attr("src", arr[num]);
	});

	$('#open__format').on('click', function () {
		$('#close__format').slideToggle(100, function () {
			if ($(this).css('display') === "block") {
				$(this).removeAttr('style');
			}
		});

	});
	let numA = 0;
	let array = ["img/arrowUp.png", "img/arrowDown.png"];
	$(this).find('.svg__arrow-format').click(function () {
		numA++;
		if (numA >= array.length) {
			numA = 0;
		}
		$(this).find('img').attr("src", array[numA]);
	});

	$('#open__way').on('click', function () {
		$('#close__way').slideToggle(100, function () {
			if ($(this).css('display') === "block") {
				$(this).removeAttr('style');
			}
		});

	});
	let open__way = 0;
	let close__way = ["img/arrowUp.png", "img/arrowDown.png"];
	$(this).find('.svg__arrow-way').click(function () {
		open__way++;
		if (open__way >= close__way.length) {
			open__way = 0;
		}
		$(this).find('img').attr("src", close__way[open__way]);
	});



	$('#open__area').on('click', function () {
		$('#close__area').slideToggle(100, function () {
			if ($(this).css('display') === "block") {
				$(this).removeAttr('style');
			}
		});

	});

	let open__area = 0;
	let close__area = ["img/arrowUp.png", "img/arrowDown.png"];
	$(this).find('.svg__arrow-area').click(function () {
		open__area++;
		if (open__area >= close__area.length) {
			open__area = 0;
		}
		$(this).find('img').attr("src", close__area[open__area]);
	});

	$('#open__style').on('click', function () {
		$('#close__style').slideToggle(100, function () {
			if ($(this).css('display') === "block") {
				$(this).removeAttr('style');
			}
		});

	});
	let open__style = 0;
	let close__style = ["img/arrowUp.png", "img/arrowDown.png"];
	$(this).find('.svg__arrow-style').click(function () {
		open__style++;
		if (open__style >= close__style.length) {
			open__style = 0;
		}
		$(this).find('img').attr("src", close__style[open__style]);
	});


	let modalBtn = 0;
	let modalArr = ["img/HeartInactive16px.png", "img/HeartActive16px.png"];
	$(this).find('.arctic__btn-heart').click(function () {
		modalBtn++;
		if (modalBtn >= modalArr.length) {
			modalBtn = 0;
		}
		$(this).find('img').attr("src", modalArr[modalBtn]);
	});
	$('#open__btn-head').on('click', function () {
		$('#close__btn-head').slideToggle(100, function () {
			if ($(this).css('display') === "none") {
				$(this).removeAttr('style');
			}
		});

	});
	$('#open__btn-head').on('click', function () {
		$('#header, #heaed__title').slideToggle(100, function () {
			if ($(this).css('display') === "block") {
				$(this).removeAttr('style');
			}
		});

	});
	$('#open__btn-head').on('click', function () {
		$('#main-content').slideToggle(100, function () {
			if ($(this).css('display') === "flex") {
				$(this).removeAttr('style');
			}
		});

	});
	$('#open__btn-head').on('click', function () {
		$('#open__btn-head').slideToggle(100, function () {
			if ($(this).css('display') === "block") {
				$(this).removeAttr('style');
			}
		});

	});


	$('#open__btn-head').on('click', function () {
		$('#btn-ff').slideToggle(100, function () {
			if ($(this).css('display') === "none") {
				$(this).removeAttr('style');
			}
		});

	});

	$('#arrowLeft__btn').on('click', function () {
		$('#btn-ff').slideToggle(100, function () {
			if ($(this).css('display') === "block") {
				$(this).removeAttr('style');
			}
		});

	});

	$('#arrowLeft__btn').on('click', function () {
		$('#open__btn-head').slideToggle(100, function () {
			if ($(this).css('display') === "none") {
				$(this).removeAttr('style');
			}
		});

	});
	$('#arrowLeft__btn').on('click', function () {
		$('#close__btn-head').slideToggle(100, function () {
			if ($(this).css('display') === "block") {
				$(this).removeAttr('style');
			}
		});

	});

	$('#arrowLeft__btn').on('click', function () {
		$('#main-content').slideToggle(100, function () {
			if ($(this).css('display') === "none") {
				$(this).removeAttr('style');
			}
		});

	});
	$('#arrowLeft__btn').on('click', function () {
		$('#header, #heaed__title').slideToggle(100, function () {
			if ($(this).css('display') === "none") {
				$(this).removeAttr('style');
			}
		});

	});


	$('#show__footer-card').on('click', function () {
		$('#exampleModal__open').slideToggle(100, function () {
			if ($(this).css('display') === "none") {
				$(this).removeAttr('style');
			}
		});

	});

	$('#show__footer-card').on('click', function () {
		$('#goods').slideToggle(100, function () {
			if ($(this).css('display') === "flex") {
				$(this).removeAttr('style');
			}
		});
	});

	var flag = true;

	$('form.variations_form').on('mouseenter', '.swatchinput label', function () {
		var selectid = $(this).attr("selectid");
		var dataoption = $(this).attr("data-option");
		var selectedtext = $(this).attr("selectedtext");

		if (wcva.show_attribute == "yes") {
			$(this).closest('tr').prev().find('.wcva_selected_attribute').text(selectedtext);
		}

		$(this).closest('.attribute-swatch').find('.selectedswatch').removeClass('selectedswatch').addClass('wcvaswatchlabel');
		$(this).removeClass('wcvaswatchlabel').addClass('selectedswatch');

		//find the option to select
		var optionToSelect = parent.jQuery("form.variations_form #" + selectid + "").children("[value='" + dataoption + "']");

		//mark the option as selected
		optionToSelect.prop("selected", "selected").change();

		if (flag) {
			$('form.variations_form').off('click', '.swatchinput label');

			flag = false;
		}
	});
    



	
	/**
	 * Sets product images for the chosen variation
	 */
	$.fn.wc_variations_image_update = function( variation ) {
		var $form             = this,
			$product          = $form.closest( '.product' ),
			$product_gallery  = $product.find( '.images' ),
			$gallery_nav      = $product.find( '.flex-control-nav' ),
			$product_img_wrap = $product_gallery.find( '.woocommerce-product-gallery__image, .woocommerce-product-gallery__image--placeholder' ).eq( 0 ),
			$product_img      = $product_img_wrap.find( '.wp-post-image' ),
			$product_link     = $product_img_wrap.find( 'a' ).eq( 0 );

		if ( variation && variation.image && variation.image.src && variation.image.src.length > 1 ) {
			$product_img.wc_set_variation_attr( 'srcset', variation.image.srcset );
		} else {
			$form.wc_variations_image_reset();
		}

		window.setTimeout( function() {
			$( window ).trigger( 'resize' );
			$form.wc_maybe_trigger_slide_position_reset( variation );
			$product_gallery.trigger( 'woocommerce_gallery_init_zoom' );
		}, 20 );
	};




});
