	<div class="main-content" id="main-content">
		
		<?php include 'sorting.php'; ?>

		<!--		ТОВАРЫ			-->
		<div class="goods" >
			<?php include 'hover-product.php'; 
			$i = 1;
			while ($i <= 3) {
				$i++; 
				include 'product-star.php';
			}
			$i = 1;
			while ($i <= 10) {
				$i++; 
				include 'product.php';
			}
			?>


		</div>
	</div>