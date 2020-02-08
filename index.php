<?php get_main_start(); ?>

<div class="main-content">
	<?php get_sorting(); ?>
	<?php if ( function_exists( 'wc_print_notices' ) && isset( WC()->session ) ) {
		wc_print_notices();
	} ?>
	<div class="goods">
		<?php the_post(); ?>
		<?php the_content(); ?>	
	</div>
</div>

<?php get_main_end(); ?>