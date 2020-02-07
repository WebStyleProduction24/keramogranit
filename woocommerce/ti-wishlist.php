<?php
/**
 * The Template for displaying wishlist if a current user is owner.
 *
 * @version             1.15.5
 * @package           TInvWishlist\Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
	<?php if ( function_exists( 'wc_print_notices' ) && isset( WC()->session ) ) {
		wc_print_notices();
	} ?>




	<?php
	$wl_paged = get_query_var( 'wl_paged' );
	$form_url = tinv_url_wishlist( $wishlist['share_key'], $wl_paged, true );
	?>
	<form action="<?php echo esc_url( $form_url ); ?>" method="post" autocomplete="off">
		<?php do_action( 'tinvwl_before_wishlist_table', $wishlist ); ?>
			<?php do_action( 'tinvwl_wishlist_contents_before' ); ?>

			<?php

			global $product, $post;
			// store global product data.
			$_product_tmp = $product;
			// store global post data.
			$_post_tmp = $post;

			foreach ( $products as $wl_product ) {

				if ( empty( $wl_product['data'] ) ) {
					continue;
				}

				// override global product data.
				$product = apply_filters( 'tinvwl_wishlist_item', $wl_product['data'] );
				// override global post data.
				$post = get_post( $product->get_id() );

				unset( $wl_product['data'] );
				if ( $wl_product['quantity'] > 0 && apply_filters( 'tinvwl_wishlist_item_visible', true, $wl_product, $product ) ) {
					$product_url = apply_filters( 'tinvwl_wishlist_item_url', $product->get_permalink(), $wl_product, $product );
					do_action( 'tinvwl_wishlist_row_before', $wl_product, $product );
					?>
						<div class="product_icon">
							<?php
							
							do_action( 'woocommerce_before_shop_loop_item_title' );
							do_action( 'woocommerce_shop_loop_item_title' ); 
							?>
							<div class="product_icon_price">
								<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
								<div class="product_icon_price_icons_block">
									<?php do_action( 'woocommerce_after_shop_loop_item' );?>
									<button class="iconHeart tinvwl-product-in-list" type="submit" name="tinvwl-remove" value="<?php echo esc_attr( $wl_product['ID'] ); ?>" />
									</div>
								</div>
								<hr>
								<div class="art"><p>Артикул <span><?php echo $product->get_sku(); ?></span></p></div>
							</div>


						
				
				
					<?php
					do_action( 'tinvwl_wishlist_row_after', $wl_product, $product );
				} // End if().
			} // End foreach().
			// restore global product data.
			$product = $_product_tmp;
			// restore global post data.
			$post = $_post_tmp;
			?>
			
					<?php wp_nonce_field( 'tinvwl_wishlist_owner', 'wishlist_nonce' ); ?>
	</form>





	<?php do_action( 'tinvwl_after_wishlist', $wishlist ); ?>
	<div class="tinv-lists-nav tinv-wishlist-clear">
		<?php do_action( 'tinvwl_pagenation_wishlist', $wishlist ); ?>
	</div>
