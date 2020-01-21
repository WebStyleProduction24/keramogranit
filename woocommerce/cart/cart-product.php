<div class="main__buscket_container">
	<div class="buscket__item">
		<div class="buscket__item-name">
			<?php
			$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

			if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>

						<div class="item-name-and-button">

							<?php
							if ( ! $product_permalink ) {
								echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
							} else {
								echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
							}

							do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>


						<button>В наличии</button>
					</div>


				</div>
				<div class="buscket__item-quantity">
					<span>Кол-во коробок</span>
					<form method='post' action='#'>
						<div class="quantity">
							<input type='button' class='minus' field='quantity' />
							<input type='text' name='quantity' value='0' class='qty' />
							<input type='button' class='plus' field='quantity' />
						</div>
					</form>
					<p>650р<span>/м2</span></p>

				</div>
				<div class="buscket__item_other-info">
					<div class="other-info-weight"><span>Вес</span>
						<p>1.23кг</p>
					</div>
					<div class="other-info-price"><span>Цена</span>
						<p>00000</p>
					</div>
					<div class="delete">Удалить</div>
				</div>
				<!--		<div class="delete">Удалить</div>-->
			</div>
		</div>