	</div>
	<?php	
	if (is_page('cart')) { 
		get_delivery_calculation();
		get_order_form();
	}
	?>

</main>

<?php get_footer(); ?>