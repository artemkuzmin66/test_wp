<!DOCTYPE html>
<html lang="ru">

<head>
	<title>test task</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<div class="container">
			<header class="header">

				<div class="header__info">
					<div class="header__logo">
						<?php the_custom_logo(); ?>
					</div>
					<button class="header__but">Обратный звонок</button>
					<a href="mailto:info@nerta-sw.ru" class="header__mail"><?php the_field(mail_header); ?></a>
					<a href="+79166227522" class="header__phone"><?php the_field(phone_header); ?></a>
					<div class="header__icon-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="menu-tab" style="display: none;">
					<ul>
						<li>
							<a class="burger-text" href="#">Оборудование</a>
						</li>
						<li>
							<a class="burger-text" href="#">Услуги</a>
						</li>
						<li>
							<a class="burger-text" href="#">О Компании</a>
						</li>
						<li>
							<a class="burger-text" href="#">Контакты</a>
						</li>
					</ul>
					<a href="mailto:info@nerta-sw.ru" class="burger-mail"><?php the_field(mail_header); ?></a>
					<button class="burger-but">Обратный звонок</button>
					<a href="+79166227522" class="burger-phone"><?php the_field(phone_header); ?></a>
					<img class="burger-ico" src="<?php the_field(logo_header); ?>" alt="">
				</div>

				<nav class="header__nav">
					<ul>
						<li class="header__nav-text click-1">
							<a href="#">Оборудование</a>
						</li>
						<div class="popup__menu-1">
							<a href="#" class="popup__menu-text">Пункт меню 1</a>
							<a href="#" class="popup__menu-text">Пункт меню 2</a>
							<a href="#" class="popup__menu-text">Пункт меню 3</a>
						</div>
						<li class="header__nav-text click-2">
							<a href="#">Мойка самообслуживания под ключ</a>
						</li>
						<div class="popup__menu-2">
							<a href="#" class="popup__menu-text">Пункт меню 1</a>
							<a href="#" class="popup__menu-text">Пункт меню 2</a>
							<a href="#" class="popup__menu-text">Пункт меню 3</a>
						</div>
						<li class="header__nav-text click-3">
							<a href="#">Услуги</a>
						</li>
						<div class="popup__menu-3">
							<a href="#" class="popup__menu-text">Пункт меню 1</a>
							<a href="#" class="popup__menu-text">Пункт меню 2</a>
							<a href="#" class="popup__menu-text">Пункт меню 3</a>
						</div>
						<li class="header__nav-text click-4">
							<a href="#">О Компании</a>
						</li>
						<div class="popup__menu-4">
							<a href="#" class="popup__menu-text">Пункт меню 1</a>
							<a href="#" class="popup__menu-text">Пункт меню 2</a>
							<a href="#" class="popup__menu-text">Пункт меню 3</a>
						</div>
						<li class="header__nav-text click-5">
							<a href="#">Контакты</a>
						</li>
						<div class="popup__menu-5">
							<a href="#" class="popup__menu-text">Пункт меню 1</a>
							<a href="#" class="popup__menu-text">Пункт меню 2</a>
							<a href="#" class="popup__menu-text">Пункт меню 3</a>
						</div>
					</ul>
				</nav>

				<div class="container">
					<div style="background-image: url(<?php the_field('background_header'); ?>);" class="header__main">
						<h1 class="header__main-text"> <?php the_field('title_site');?> </h1>
						<div class="header__main-text-flex">
							<h3 class="header__main-text-two-1"> <?php the_field('description_site');?> </h3>
							<h3 class="header__main-text-two-2"> <?php the_field('description_site_2');?> </h3>
						</div>
						<div class="header__main-work-time">Работаем с 2000 года
							по РФ и СНГ</div>

					</div>
			</header>

		</div>