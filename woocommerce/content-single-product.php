<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * deleted @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * deleted @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * deleted @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<div><?php $product->list_attributes();?>

	</div>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

	<div style="display: block;" class="box-modal" id="exampleModal__open">
		<div class="artic-goods-container">

			<div class="arric-slider">
				<p><img id="bigetImg" src="<?php echo get_template_directory_uri();?>/img/slide1.png" alt="Large image"></p>
				<div class="arric-slider-thumbs">
					<div class="arric-slider-btnLeft"><img src="<?php echo get_template_directory_uri();?>/img/left.png" class="btn__arrow-artic"></div>
					<ul class="thumbs__item" id="thumbsSS">				   
						<li><a href="<?php echo get_template_directory_uri();?>/img/slide1.png" title="Image 2"><img src="<?php echo get_template_directory_uri();?>/img/slide1.png" width="80" height="80"></a></li>
						<li><a href="<?php echo get_template_directory_uri();?>/img/slide2.png" title="Image 3"><img src="<?php echo get_template_directory_uri();?>/img/slide2.png" width="80" height="80"></a></li>
						<li><a href="<?php echo get_template_directory_uri();?>/img/slide3.png" title="Image 4"><img src="<?php echo get_template_directory_uri();?>/img/slide3.png" width="80" height="80"></a></li>				   
					</ul>
					<div class="arric-slider-btnRight"><img src="<?php echo get_template_directory_uri();?>/img/rigth.png" class="btn__arrow-artic"></div>
				</div>				  
			</div>

			<!--				-->
			
			<div class="arctic__goods-list">
				
				<div class="arctic__goods-info">
					<div class="arctic__goods-art"><p>Артикул: <span class="art__number"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></p></div>
					<?php the_title( '<p class="arctic__goods-name">', '</p>' ); ?>
					<button class="arctic__goods-btn">{{{ data.variation.availability_html }}}</button>
					
				<p class="arctic__goods-quantity">
						Кол-во коробок
					</p>
					<form method='post' action='#'>
						<div class="quantity">
							<input type='button' value='-' class='minus' field='quantity' />
							<input type='text' name='quantity' value='0' class='qty' />
							<input type='button' value='+' class='plus' field='quantity' />
						</div>
					</form>
					<div class="arctic__goods-warring d-flex">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" >
							<circle cx="8" cy="8" r="7" stroke="#666666" stroke-width="2"/>
							<rect x="7" y="4" width="2" height="5" rx="1" fill="#666666"/>
							<rect x="7" y="10" width="2" height="2" rx="1" fill="#666666"/>
						</svg>
						<p class="arctic__goods-warring-text">
							Товар продается кратно коробкам
						</p>
					</div>
					<div class="arctic__goods-payment d-flex">
						<span class="arctic__goods-money">
							650р
						</span>
						<p class="arctic__goods-money-m2">
							/м2
						</p>
					</div>
					<button class="arctic__goods-basket">
						Добавить в корзину
					</button>
					<button class="arctic__btn-heart d-flex" >
						<img src="<?php echo get_template_directory_uri();?>/img/HeartInactive16px.png" class="arctic__heart">
						<p class="arctic__goods-heart-text">
							Добавить в избранное
						</p>
					</button>
				</div>
			</div>
		</div>
		<h3 class="arctic__title">Характеристики</h3>
		<div class="arctic__flex">
			<div class="arctic__property">
				<div class="arctic__property-column">
					<p class="arctic__goods-item">
						Поверхность
					</p>
					<p class="arctic__goods-spesh">
						Матовая
					</p>
				</div>
				<div class="arctic__line"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item">
						Поверхность
					</p>
					<p class="arctic__goods-spesh">
						Матовая
					</p>
				</div>
				<div class="arctic__line"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item">
						Поверхность
					</p>
					<p class="arctic__goods-spesh">
						Матовая
					</p>
				</div>
				<div class="arctic__line"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item">
						Поверхность
					</p>
					<p class="arctic__goods-spesh">
						Матовая
					</p>
				</div>
				<div class="arctic__line"></div>
			</div>
			<div class="arctic__property">
				<div class="arctic__property-column">
					<p class="arctic__goods-item arctic__margin">
						Назначени
					</p>
					<p class="arctic__goods-spesh">
						Для стен
					</p>
				</div>
				<div class="arctic__line-1"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item arctic__margin">
						Назначени
					</p>
					<p class="arctic__goods-spesh">
						Для стен
					</p>
				</div>
				<div class="arctic__line-1"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item arctic__margin">
						Назначени
					</p>
					<p class="arctic__goods-spesh">
						Для стен
					</p>
				</div>
				<div class="arctic__line-1"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item arctic__margin">
						Назначени
					</p>
					<p class="arctic__goods-spesh">
						Для стен
					</p>
				</div>
				<div class="arctic__line-1"></div>
			</div>
		</div>
	</div>