<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Универдом</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>


	<header class="header" id="header">
		<div class="contacts">
			<div class="email mobilePhoneMail">
				<img src="<?php echo get_template_directory_uri();?>/img/MailYellowDesktop.png" alt="">
				<a href="#">
					<div id="phoneMobile"></div>
				</a>
				<a href="#">
					<div id='mailMobile'></div>
				</a>
				<a href="mailto:zakaz@keramogranit.ru"><span>zakaz@keramogranit.ru</span></a>
			</div>

			<div class="phones mobileFavouritesBusket">
				<img src="<?php echo get_template_directory_uri();?>/img/PhoneYellowDesktop.png" alt="">
				<a href="#">
					<div id="favouritesMobile"></div>
				</a>
				<a href="#">
					<div id="busketMobile"></div>
				</a>
				<a href="#" class="secondNum"><span>+7 (495) 22-55-700</span></a>
				<a href="#"><span>+7 (800) 000-00-00</span></a>
			</div>
		</div>
		<div class="mainHeader">
			<div class="logo">
				<a href="/"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>
			</div>
			<div class="searchAndButtons">
				<div class="search">
					<form action="" method="get">
						<input name="s" placeholder="Найти по артикулу" type="search">
						<button type="submit"></button>
					</form>
				</div>
				<a href="/favourites"><button class="favourites"></button></a>
				<a href="/cart"><button class="busket"></button></a>
				<a href="/cart" class="busketPrice"><span>24000р</span></a>

				<button id="feedback"><span>Заказать звонок</span></button>
			</div>
		</div>

		<?php include 'popup.php'; ?>

	</header>
