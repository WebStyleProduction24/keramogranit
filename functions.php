<?php

require_once ABSPATH . 'wp-admin/includes/plugin.php';

function styles() {
	wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', '', '1.8.1');
	wp_enqueue_style( 'font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', '', '4.5.0');
	// wp_enqueue_style( 'fonts-googleapis-css', 'https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap');
	wp_enqueue_style( 'fotorama-css', 'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css', '', '4.6.4');

	wp_enqueue_style( 'arcticmodal-css', get_template_directory_uri().'/css/jquery.arcticmodal.css', '', '0.3');
	wp_enqueue_style( 'buscket-css', get_template_directory_uri().'/css/buscket-style.css');

	wp_enqueue_style( 'style-css', get_stylesheet_uri());

	wp_enqueue_style( 'media-css', get_template_directory_uri().'/css/media.css');
	wp_enqueue_style( 'cart-hover-css', get_template_directory_uri().'/css/cart-hover.css');
}
add_action('wp_enqueue_scripts', 'styles');


function scripts() {
	wp_enqueue_script('jquery-googleapis', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', '', '3.4.1');
	// wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	
	wp_enqueue_script('formScript', get_template_directory_uri() . '/js/formScript.js');
	// wp_enqueue_script('carouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel.js', '', '5.2.3');
	wp_enqueue_script('arcticmodal', get_template_directory_uri() . '/js/jquery.arcticmodal.min.js', '', '0.3');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'scripts');


## удаляет версию WP из преданного URL у скриптов и стилей
add_filter( 'script_loader_src', 'hb_remove_wp_version_from_src' );
add_filter( 'style_loader_src', 'hb_remove_wp_version_from_src' );
function hb_remove_wp_version_from_src( $src ) {
	global $wp_version;
	parse_str( parse_url( $src, PHP_URL_QUERY ), $query );
	if ( ! empty($query['ver']) && $query['ver'] === $wp_version ) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}

//Задаем новые размеры изображений
add_image_size( 'product-thumbnail', 180, 180, true ); //миниатюры плитки товаров

############ Wocommerce

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

define('WOOCOMMERCE_USE_CSS', false);



// Редактируем Хуки

//Хук отображения миниатюры товара
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'woo_product_loop_thumbnail', 10);

//Хук отображения наименования товара
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'woo_product_loop_title', 10);

//Удаляем хук, заврывающий </a> на карточке товара
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

//Удаляем хук отображения стоимости товара
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

//Удаляем хук отображения артикула товара в карточке товара
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

//Удаляем хук отображения наименования товара в карточке товара
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20 );

//Новые функции для Хуков


//Хук вывода миниатюры в плитке товаров
function woo_product_loop_thumbnail( $post = null ) {
	$src = get_the_post_thumbnail_url( $post, 'product-thumbnail' );
	$alt = get_the_title();
	$href = get_permalink();
	$img = '<a href="' . $href . '"><div class="img-product"><img src="' . $src . '" alt="' . $alt . '"></div></a>';
	echo $img;
}

//Хук вывода наименования в плитке товаров
function woo_product_loop_title() {
	$title = get_the_title();
	$p = '<p>' . $title . '</p>';
	echo $p;
}


//Изменяем вывод валюты и вместо руб выводим р/м^2
add_filter('woocommerce_currency_symbol', 'new_symbol', 10, 2);
function new_symbol( $valyuta_symbol, $valyuta_code ) {
	if( $valyuta_code == 'RUB' ) {
		return 'р/м<sup>2</sup>';
	}
	return $valyuta_symbol;
}






//AJAX-обновление общей стоимости корзины
add_filter( 'woocommerce_add_to_cart_fragments', 'refresh_cart_count', 50, 1 );
function refresh_cart_count( $fragments ){
    ob_start();
    ?>
				<div id="cart-price"><a href="/cart" class="busketPrice"><span><?php echo WC()->cart->get_cart_contents_total(); ?>р</span></a></div>
    <?php
     $fragments['#cart-price'] = ob_get_clean();
    return $fragments;
}

//Изменяем кнопку добавления в корзину на странице вывода списка продуктов
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );  // 2.1 +
function woo_custom_product_add_to_cart_text() {
	$added = '';

	foreach( WC()->cart->get_cart() as $cart_item_key => $values ) {
		$_product = $values['data'];

		if( get_the_ID() == $_product->id ) {
			$added = ' added';
		}
	}
	
	return __('<div class="iconBusket' . $added . '"></div>', 'woocommerce');

}

//Подключение sorting.php
function get_sorting() {
	get_template_part( 'templates/sorting');
}
//Подключение main-start.php
function get_main_start() {
	get_template_part( 'templates/main-start');
}
//Подключение main-end.php
function get_main_end() {
	get_template_part( 'templates/main-end');
}
//Подключение delivery-calculation.php
function get_delivery_calculation() {
	get_template_part( 'templates/delivery', 'calculation');
}
//Подключение order-form.php
function get_order_form() {
	get_template_part( 'templates/order', 'form');
}

//Выводим стоимость текущей вариации без диапазона цен
add_filter('woocommerce_variable_price_html', 'custom_variation_price_default', 10, 2);
add_filter('woocommerce_variable_sale_price_html', 'custom_variation_price_default', 10, 2 );

function custom_variation_price_default( $price, $product ) {
  foreach($product->get_available_variations() as $pav){
      $def=true;
      foreach($product->get_variation_default_attributes() as $defkey=>$defval){
          if($pav['attributes']['attribute_'.$defkey]!=$defval){
              $def=false;             
          }   
      }
      if($def){
          $price = $pav['display_price'];         
      }
  }   

  return woocommerce_price($price);
}