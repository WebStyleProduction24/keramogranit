<?php get_header(); ?>

<main class="offer">
	<hr class="grey_hr">
	<h2>
		<?php
		if (is_woocommerce()) {
			woocommerce_page_title();
		} else the_title();
		?>
		
	</h2>
	<div class="main-container">


		<?php
		if (is_page('cart') == 0) {
			get_sidebar();
		}
		?>