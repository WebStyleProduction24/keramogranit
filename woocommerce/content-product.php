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
?><!-- 
<div class="product_icon">
	<img src="<?php// echo get_template_directory_uri();?>/img/Rectangle%20104.png" alt="">
	<p>Керамогранит Estima Standard ST 07 матовый 300х300 мм io</p>
	<div class="product_icon_price"><span>650р/м<sup>2</sup></span><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M7.3534 2.31133L8 2.85941L8.6466 2.31133C10.1811 1.01067 11.8135 0.771093 12.9744 1.18811C14.0875 1.58795 15 2.67374 15 4.5896C15 8.56512 12.1058 12.2621 8 13.539C3.89417 12.2621 1 8.56512 1 4.5896C1 2.67374 1.91246 1.58795 3.02556 1.18811C4.18649 0.771094 5.81894 1.01067 7.3534 2.31133Z" fill="#FFDB4D" stroke="#333333" stroke-width="2" />
	</svg>
</div>
<hr>
<div class="art"><p>Артикул <span>119608</span></p></div>

</div> -->
<!-- <li <?php //wc_product_class( '', $product ); ?>> !-->

<div class="product_icon">
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

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
	<hr>
	<div class="art"><p>Артикул <span><?php echo $product->get_sku(); ?></span></p></div>
</div>
<!-- </li> !--> 
