<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div class="product_icon">
	<div class="product_hover">
		<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woo_product_loop_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woo_product_loop_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' ); 
	?>
	<div class="product_icon_price">

		<?php
		/**
		 * Hook: woocommerce_after_shop_loop_item_title.
		 *
		 * @hooked woocommerce_template_loop_rating - 5
		 * @hooked woocommerce_template_loop_price - 10
		 */
		do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
		<div class="product_icon_price_icons_block">

			<?php 

			/**
			 * Hook: woocommerce_after_shop_loop_item.
			 *
			 * deleted @hooked woocommerce_template_loop_product_link_close - 5
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item' );
			?>

			<?php echo do_shortcode("[ti_wishlists_addtowishlist loop=yes]"); ?>
		</div>
	</div>


	<form method='post' action='#' class="form__item">
		<div class="quantity left-top">
			<input type='button' class='minus' field='quantity' />
			<input type='text' name='quantity' value='0' class='qty' />
			<input type='button' class='plus' field='quantity' />
		</div>
		<p class="quantity__text" id="text__left">Коробки</p>
	</form>


	
	<div class="art">
		<hr>
		<p>Артикул <span><?php echo $product->get_sku(); ?></span></p></div>
	<div class="product_icon-img">
		<button class="icon-btn shadow__btn"><img src="<?php echo get_template_directory_uri();?>/img/arrowUp.png" alt=""></button>
		<ul class="thumbs__item" id="thumbsS">		
			<li><a href="<?php echo get_template_directory_uri();?>/img/slide1.png" title="Image 1"><img src="<?php echo get_template_directory_uri();?>/img/slide1.png" width="80" height="80"></a></li>
			<li><a href="<?php echo get_template_directory_uri();?>/img/slide2.png" title="Image 2"><img src="<?php echo get_template_directory_uri();?>/img/slide2.png" width="80" height="80"></a></li>
			<li><a href="<?php echo get_template_directory_uri();?>/img/slide3.png" title="Image 3"><img src="<?php echo get_template_directory_uri();?>/img/slide3.png" width="80" height="80"></a></li>
			<li><a href="<?php echo get_template_directory_uri();?>/img/slide4.png" title="Image 3"><img src="<?php echo get_template_directory_uri();?>/img/slide4.png" width="80" height="80"></a></li>				   
		</ul>
		<button class="icon-btn top__img"><img src="<?php echo get_template_directory_uri();?>/img/arrowDown.png" alt=""></button>
	</div>
</div>
</div>
<!-- </li> !--> 
