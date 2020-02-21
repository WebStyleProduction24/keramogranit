<footer id="footer">
	<p>2019, Универдом</p>
</footer>

<div style="display: none">
	<div class="box-modal" id="exampleModal1">

		<div class="artic-goods-container">

			<div class="arric-slider">
				<p><img id="bigetImg" src="<?php echo get_template_directory_uri();?>/img/slide1.png" alt="Large image"></p>
				<div class="arric-slider-thumbs">
					<div class="arric-slider-btnLeft"><img src="<?php echo get_template_directory_uri();?>/img/left.png" class="btn__arrow-artic"></div>
					<ul class="thumbs__item" id="thumbsSS">				   
						<li><a href="<?php echo get_template_directory_uri();?>/img/slide1.png" title="Image 2"><img src="<?php echo get_template_directory_uri();?>/img/slide1.png" width="80" height="80"></a></li>
						<li><a href="<?php echo get_template_directory_uri();?>/img/slide2.png" title="Image 3"><img src="<?php echo get_template_directory_uri();?>/img/slide2.png" width="80" height="80"></a></li>
						<li><a href="<?php echo get_template_directory_uri();?>/img/slide3.png" title="Image 4"><img src="<?php echo get_template_directory_uri();?>/img/slide3.png" width="80" height="80"></a></li>				   
					</ul>
					<div class="arric-slider-btnRight"><img src="<?php echo get_template_directory_uri();?>/img/rigth.png" class="btn__arrow-artic"></div>
				</div>				  
			</div>

			<!--				-->
			
			<div class="arctic__goods-list">
				
				<div class="arctic__goods-info">
					<div class="arctic__goods-art"><p>Артикул: <span class="art__number"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></p></div>
					<?php the_title( '<p class="arctic__goods-name">', '</p>' ); ?>
					<button class="arctic__goods-btn">{{{ data.variation.availability_html }}}</button>
					
				<p class="arctic__goods-quantity">
						Кол-во коробок
					</p>
					<form method='post' action='#'>
						<div class="quantity">
							<input type='button'  class='minus' field='quantity' />
							<input type='text' name='quantity' value='0' class='qty' />
							<input type='button' class='plus' field='quantity' />
						</div>
					</form>
					<div class="arctic__goods-warring d-flex">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" >
							<circle cx="8" cy="8" r="7" stroke="#666666" stroke-width="2"/>
							<rect x="7" y="4" width="2" height="5" rx="1" fill="#666666"/>
							<rect x="7" y="10" width="2" height="2" rx="1" fill="#666666"/>
						</svg>
						<p class="arctic__goods-warring-text">
							Товар продается кратно коробкам
						</p>
					</div>
					<div class="arctic__goods-payment d-flex">
						<span class="arctic__goods-money">
							650р
						</span>
						<p class="arctic__goods-money-m2">
							/м2
						</p>
					</div>
					<button class="arctic__goods-basket">
						Добавить в корзину
					</button>
					<button class="arctic__btn-heart d-flex" >
						<img src="<?php echo get_template_directory_uri();?>/img/HeartInactive16px.png" class="arctic__heart">
						<p class="arctic__goods-heart-text">
							Добавить в избранное
						</p>
					</button>
				</div>
			</div>
		</div>
		<hr class="line__hr">
		<h3 class="arctic__title">Характеристики</h3>

		<div class="arctic__flex">
			<div class="arctic__property">
				<div class="arctic__property-column">
					<p class="arctic__goods-item">
						Поверхность
					</p>
					<p class="arctic__goods-spesh" id="left__column">
						Матовая
					</p>
				</div>
				<div class="arctic__line"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item">
						Поверхность
					</p>
					<p class="arctic__goods-spesh" id="left__column">
						Матовая
					</p>
				</div>
				<div class="arctic__line"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item">
						Поверхность
					</p>
					<p class="arctic__goods-spesh" id="left__column">
						Матовая
					</p>
				</div>
				<div class="arctic__line"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item">
						Поверхность
					</p>
					<p class="arctic__goods-spesh" id="left__column">
						Матовая
					</p>
				</div>
				<div class="arctic__line"></div>
			</div>
			<div class="arctic__property">
				<div class="arctic__property-column">
					<p class="arctic__goods-item arctic__margin">
						Назначени
					</p>
					<p class="arctic__goods-spesh" id="right__column">
						Для стен
					</p>
				</div>
				<div class="arctic__line-1"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item arctic__margin">
						Назначени
					</p>
					<p class="arctic__goods-spesh" id="right__column">
						Для стен
					</p>
				</div>
				<div class="arctic__line-1"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item arctic__margin">
						Назначени
					</p>
					<p class="arctic__goods-spesh" id="right__column">
						Для стен
					</p>
				</div>
				<div class="arctic__line-1"></div>
				<div class="arctic__property-column">
					<p class="arctic__goods-item arctic__margin">
						Назначени
					</p>
					<p class="arctic__goods-spesh" id="right__column">
						Для стен
					</p>
				</div>
				<div class="arctic__line-1"></div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>

</html>
