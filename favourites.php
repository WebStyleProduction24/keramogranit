<?php
/*
Template Name: Избранное
*/
?>

<?php get_header(); ?>

<main class="offer">
	<hr class="grey_hr">
	<h2><?php the_title();?></h2>
	<div class="main-container">
		<?php get_sidebar(); ?>
		<div class="main-content">
			<?php get_sorting(); ?>
			<div class="goods">
				<?php the_post(); ?>
				<?php the_content(); ?>	
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
