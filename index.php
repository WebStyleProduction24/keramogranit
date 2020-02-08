<?php get_main_start(); ?>

<div class="main-content">
	<?php get_sorting(); ?>
	<div class="goods">
		<?php the_post(); ?>
		<?php the_content(); ?>	
	</div>
</div>

<?php get_main_end(); ?>