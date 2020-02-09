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
							<div class="product_hover">

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

								<form method='post' action='#' class="form__item">
									<div class="quantity left-top">
										<input type='button' value='' class='minus' field='quantity' />
										<input type='text' name='quantity' value='0' class='qty' />
										<input type='button' value='' class='plus' field='quantity' />
									</div>
									<p class="quantity__text">Коробки</p>
								</form>

								<hr>
								<div class="art"><p>Артикул <span><?php echo $product->get_sku(); ?></span></p></div>

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
