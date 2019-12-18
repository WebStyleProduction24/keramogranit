<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Универдом</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery.arcticmodal-0.3.css">
	<link rel="stylesheet" href="css/buscket-style.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
		
</head>

<body>

	<header>
		<div class="contacts">

			<div class="email mobilePhoneMail">
				<img src="img/MailYellowDesktop.png" alt="">
				<a href="#">
					<div id="phoneMobile"></div>
				</a>
				<a href="#">
					<div id='mailMobile'></div>
				</a>
				<a href="mailto:zakaz@keramogranit.ru"><span>zakaz@keramogranit.ru</span></a>
			</div>

			<div class="phones mobileFavouritesBusket">
				<img src="img/PhoneYellowDesktop.png" alt="">
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
				<a href="/"><img src="img/logo.png" alt=""></a>
			</div>
			<div class="searchAndButtons">
				<div class="search">
					<form action="" method="get">
						<input name="s" placeholder="Найти по артикулу" type="search">
						<button type="submit"></button>
					</form>
				</div>
				<a href="/favourites.php"><button class="favourites"></button></a>
				<a href="busket.html"><button class="busket"></button></a>
				<span>24000р</span>

				<button id="feedback"><span>Заказать звонок</span></button>
			</div>
		</div>

		<?php include 'popup.php'; ?>

	</header>
