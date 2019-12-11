<?php include 'header.php'; ?>

<main>
	<h2>Избранное</h2>
	<div class="main-container">
		<!-- для расположения фильтра  -->
		<?php include 'aside.php'; ?>

		<!--	для контента	-->
		<div class="main-content">
			<?php include 'sorting.php'; ?>
			

			<!--		ТОВАРЫ			-->
			<div class="goods">
				<?php include 'product-card.php'; ?>
				<?php include 'product-star.php'; ?>
				<?php include 'product-star.php'; ?>
				<?php include 'product-star.php'; ?>
				<?php include 'product-star.php'; ?>
				<?php include 'product-star.php'; ?>
				<?php include 'product-star.php'; ?>
				<?php include 'product-star.php'; ?>
				<?php include 'product-star.php'; ?>
				<?php include 'product-star.php'; ?>
				<?php include 'product-star.php'; ?>
				<?php include 'product-star.php'; ?>
				<?php include 'product-star.php'; ?>
			</div>
		</div>
	</div>
</main>


<?php include 'footer.php'; ?>
