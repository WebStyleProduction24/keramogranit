<?php

function styles() {
	wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', '', '1.8.1');
	wp_enqueue_style( 'font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', '', '4.5.0');
	// wp_enqueue_style( 'fonts-googleapis-css', 'https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap');
	wp_enqueue_style( 'fotorama-css', 'http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css', '', '4.6.4');

	wp_enqueue_style( 'arcticmodal-css', get_template_directory_uri().'/css/jquery.arcticmodal.css', '', '0.3');
	wp_enqueue_style( 'buscket-css', get_template_directory_uri().'/css/buscket-style.css');

	wp_enqueue_style( 'style-css', get_stylesheet_uri());

	wp_enqueue_style( 'media-css', get_template_directory_uri().'/css/media.css');
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