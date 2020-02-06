<?php
/*
Template Name: Шаблон страницы "Избранные товары"
*/
?>



 
<?php include 'header.php'; ?>

<main class="offer">
<hr class="grey_hr">
	<h2>Избранное</h2>
	<div class="main-container">
		<!-- для расположения фильтра  -->
		<?php include 'aside.php'; ?>

		<!--	для контента	-->
		<div class="main-content">
			<?php include 'sorting.php'; ?>
			

			<!--		ТОВАРЫ			-->
			<div class="goods">



<?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>

		<?php the_content(); ?>

	<?php } /* конец while */ ?>
<?php
} // конец if
else 
	echo "<h2>Записей нет.</h2>"; ?>

			</div>
		</div>
	</div>
</main>


<?php include 'footer.php'; ?>
