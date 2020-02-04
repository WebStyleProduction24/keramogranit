<?php
/*
Template Name: Шаблон страницы "Корзина"
*/
?>

<?php include 'header.php'; ?>
<main>
	<hr class="grey_hr">
	<h2><?php the_title(); ?></h2>

	<?php the_post(); ?>
	<?php the_content(); ?>
	
</main>





<main>
<hr class="grey_hr">
	<h2>Корзина</h2>
	<?php
	$i = 1;
	while ($i <= 3) {
		$i++; 
		include 'busket-product.php';
	}
	?>

	<div class="total-block">
		
		<div class="total-container">
			<div class="total-weight">
				<span>Общий вес:</span>
				<p>1.23кг</p>
			</div>
			<div class="total-cost">
				<span>Общая стоимость</span>
				<p>12450р</p>
			</div>
		</div>	
		<div class="about-cost">

			<form action="">
				
				<input type="checkbox" name="cost_of_delivery">
				<label for="cost_of_delivery">Посчитать ориентировочную стоимость доставки</label>
				<p>1500р</p>
			</form>
			<!--				<p>1500р</p>-->
		</div>
	</div>
	<div class="busket_form">
		<h3>Сделать заказ</h3>
		<span>Мы свяжемся с вами в течение 10 минут (ПН-ПТ, с 10:00 до 19:00)</span>
		<form action="#" method="post">
			<input type="text" placeholder="Имя">
			<input type="phone" placeholder="Телефон">
			<input type="submit" value="Сделать заказ" class="modalBut">
			<p>Нажимая на кнопку, я принимаю <br>правила <a href="/privacy-policy/">политики конфиденциальности</a></p>
		</form>
	</div>
</main>


<?php include 'footer.php'; ?>
