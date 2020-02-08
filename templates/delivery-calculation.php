<div class="total-block">

	<div class="total-container">
		<div class="total-weight">
			<span>Общий вес:</span>
			<p>1.23кг</p>
		</div>
		<div class="total-cost">
			<span>Общая стоимость</span>
			<p><?php wc_cart_totals_subtotal_html(); ?></p>
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