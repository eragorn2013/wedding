<?php
	$user_agent = $_SERVER["HTTP_USER_AGENT"];
	if (stristr($user_agent, 'Trident')) $user_agent='Internet Explorer';
	if (stristr($user_agent, 'Firefox')) $user_agent='Firefox';
	if (stristr($user_agent, 'Opera')) $user_agent='Opera';
	if (stristr($user_agent, 'Chrome')) $user_agent='Google Chrome';
	if (stristr($user_agent, 'Safari')) $user_agent='Safari';
	if($user_agent == "Safari" || $user_agent == "Internet Explorer") $expansion=".png";	
	else $expansion=".webp";	
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1.0">
	<meta charset="UTF-8">
	<title>Главный свадебный портал</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" href="css/style.css?1810191504">	
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="container">
				<div class="content header-content">
					<div class="header-logo">
						<a class="header-logo-link" href="/">
							<span class="header-logo-link-text">главный свадебный портал в</span>
							<img class="header-logo-link-img" src="img/logo<?= $expansion ?>" alt='Логотип'>
						</a>
						<div class="header-logo-link-city-wrap">
							<input class="header-logo-link-city" type="text" value="Наро-фоминск" title="Введите название города" placeholder="Введите название города">
							<i class="header-logo-link-city-icon"></i>
						</div>
					</div>
					<div class="header-search">
						<input class="header-search-input" type="text" name="search" placeholder="Поиск">
					</div>
					<div class="header-auth">
						<a class="header-auth-link input" href="#">Войти</a>
						<a class="header-auth-link reg open-reg" href="#">Регистрация</a>
					</div>					
				</div>
			</div>
		</header>

		<nav>
			<div class="container">
				<div class="content">
					<div class="m-menu"></div>					
					<ul class="nav-list">
						<li class="nav-list-item submenu active">
							<a class="nav-list-item-link submenu-icon" href="#">Площадки</a>
							<div class="nav-list-item-submenu">
								<ul class="nav-list-item-submenu-list">
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Рестораны</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Свадебные шатры</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Веранды</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Усадьбы</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Загородные клубы</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Речной транспорт</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-list-item submenu">
							<a class="nav-list-item-link submenu-icon" href="#">Исполнители</a>
							<div class="nav-list-item-submenu">
								<ul class="nav-list-item-submenu-list">
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Рестораны</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Свадебные шатры</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Веранды</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Усадьбы</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Загородные клубы</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Речной транспорт</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Рестораны2</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Свадебные шатры2</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Веранды2</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Усадьбы2</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Загородные клубы2</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Речной транспорт2</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Рестораны3</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Свадебные шатры3</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Веранды3</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Усадьбы3</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Загородные клубы3</a></li>
									<li class="nav-list-item-submenu-list-item"><a class="nav-list-item-submenu-list-item-link" href="#">Речной транспорт3</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-list-item"><a class="nav-list-item-link" href="#">Форум</a></li>
						<li class="nav-list-item"><a class="nav-list-item-link" href="#">Магазин</a></li>
						<li class="nav-list-item"><a class="nav-list-item-link" href="#">Тренды 2020</a></li>
						<li class="nav-list-item"><a class="nav-list-item-link" href="#">Фото идеи</a></li>
						<li class="nav-list-item"><a class="nav-list-item-link" href="#">Журнал</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<section id="offer">
			<video autoplay="" loop="" muted="" class="offer-video">
				<source type="video/mp4" src="files/video.mp4">
			</video>
			<div class="container offer-container">
				<div class="content">
					<h1 class="offer-head">
						<span class="offer-head-span">Добро пожаловать</span>
						Главный свадебный портал в<br> Петропавловск-Камчатском
					</h1>
					<ul class="offer-counters-list">
						<li class="offer-counters-list-item">
							<i class="offer-counters-list-item-icon first"></i>
							<div class="offer-counters-list-item-text">
								<span class="offer-counters-list-item-text-count">1200</span>
								<span class="offer-counters-list-item-text-span">исполнителей</span>
							</div>
						</li>
						<li class="offer-counters-list-item mod">
							<i class="offer-counters-list-item-icon second"></i>							
							<span class="offer-counters-list-item-text-count">10+</span>
							<span class="offer-counters-list-item-text-span">сервисов для невест</span>							
						</li>
						<li class="offer-counters-list-item">
							<i class="offer-counters-list-item-icon third"></i>
							<div class="offer-counters-list-item-text">
								<span class="offer-counters-list-item-text-count">120</span>
								<span class="offer-counters-list-item-text-span">ресторанов</span>
							</div>
						</li>
					</ul>					
					<a class="offer-reg-link open-reg" href="#">Регистрация</a>
				</div>
			</div>
			<div class="offer-waves"></div>
		</section>

		<section id="discounts">
			<div class="container discounts-container">
				<span class="discounts-container-arrow prev">&lt;</span>
				<span class="discounts-container-arrow next">&gt;</span>
				<div class="content owl-carousel owl-theme">
					<div class="discounts-item">
						<div class="discounts-item-wrap">
							<h2 class="discounts-item-head">Конкурс для невест</h2>
							<p class="discounts-item-p">Выиграй 150 000 рублей для своей свадьбы</p>
							<span class="discounts-item-span">Ежемесячный конкурс для женихов и невест</span>
							<div class="discounts-item-link-wrap">
								<a class="discounts-item-link" href="#">Принять участие!</a>
							</div>
						</div>
					</div>
					<div class="discounts-item">
						<div class="discounts-item-wrap">
							<h2 class="discounts-item-head">Конкурс для невест</h2>
							<p class="discounts-item-p">Выиграй 150 000 рублей для своей свадьбы</p>
							<span class="discounts-item-span">Ежемесячный конкурс для женихов и невест</span>
							<div class="discounts-item-link-wrap">
								<a class="discounts-item-link" href="#">Принять участие!</a>
							</div>
						</div>
					</div>
					<div class="discounts-item">
						<div class="discounts-item-wrap">
							<h2 class="discounts-item-head">Конкурс для невест</h2>
							<p class="discounts-item-p">Выиграй 150 000 рублей для своей свадьбы</p>
							<span class="discounts-item-span">Ежемесячный конкурс для женихов и невест</span>
							<div class="discounts-item-link-wrap">
								<a class="discounts-item-link" href="#">Принять участие!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="catalog">
			<div class="container">
				<div class="head-center">
					<h2 class="head-center-h">Каталог исполнителей</h2>
				</div>
				<div class="content catalog-content owl-carousel-4 owl-theme">
					<div class="catalog-item">
						<span class="catalog-item-pic">
							<img class="catalog-item-pic-img" src="img/pic/1<?= $expansion ?>" alt="Фотографы" title='Фотографы'>
							<span class="catalog-item-pic-head">
								<i class="catalog-item-pic-head-icon photographer"></i>
								<a class="catalog-item-pic-head-span" href="#">Фотографы</a>
								<span class="catalog-item-pic-head-info">
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Кабриолеты</a>
									<a class="catalog-item-pic-head-item" href="#">Внедорожники</a>
									<a class="catalog-item-pic-head-item" href="#">Ретро</a>
									<a class="catalog-item-pic-head-item" href="#">Микроавтобусы</a>
									<a class="catalog-item-pic-head-item" href="#">Кареты</a>									
								</span>
							</span>
						</span>						
					</div>

					<div class="catalog-item">
						<span class="catalog-item-pic">
							<img class="catalog-item-pic-img" src="img/pic/2<?= $expansion ?>" alt="Видеографы" title='Видеографы'>
							<span class="catalog-item-pic-head">
								<i class="catalog-item-pic-head-icon videographer"></i>
								<a class="catalog-item-pic-head-span" href="#">Видеографы</a>
								<span class="catalog-item-pic-head-info">
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Кабриолеты</a>															
								</span>
							</span>
						</span>						
					</div>

					<div class="catalog-item">
						<span class="catalog-item-pic">
							<img class="catalog-item-pic-img" src="img/pic/3<?= $expansion ?>" alt="Организаторы" title='Организаторы'>
							<span class="catalog-item-pic-head">
								<i class="catalog-item-pic-head-icon organizer"></i>
								<a class="catalog-item-pic-head-span" href="#">Организаторы</a>
								<span class="catalog-item-pic-head-info">
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Кабриолеты</a>
									<a class="catalog-item-pic-head-item" href="#">Внедорожники</a>
									<a class="catalog-item-pic-head-item" href="#">Ретро</a>
									<a class="catalog-item-pic-head-item" href="#">Микроавтобусы</a>
									<a class="catalog-item-pic-head-item" href="#">Кареты</a>
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Кабриолеты</a>
									<a class="catalog-item-pic-head-item" href="#">Внедорожники</a>
									<a class="catalog-item-pic-head-item" href="#">Ретро</a>
									<a class="catalog-item-pic-head-item" href="#">Микроавтобусы</a>
									<a class="catalog-item-pic-head-item" href="#">Кареты</a>									
								</span>
							</span>
						</span>						
					</div>

					<div class="catalog-item">
						<span class="catalog-item-pic">
							<img class="catalog-item-pic-img" src="img/pic/4<?= $expansion ?>" alt="Оформители" title='Оформители'>
							<span class="catalog-item-pic-head">
								<i class="catalog-item-pic-head-icon designer"></i>
								<a class="catalog-item-pic-head-span" href="#">Оформители</a>
								<span class="catalog-item-pic-head-info">
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Кабриолеты</a>
									<a class="catalog-item-pic-head-item" href="#">Внедорожники</a>
									<a class="catalog-item-pic-head-item" href="#">Ретро</a>
									<a class="catalog-item-pic-head-item" href="#">Микроавтобусы</a>
									<a class="catalog-item-pic-head-item" href="#">Кареты</a>
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Кабриолеты</a>
									<a class="catalog-item-pic-head-item" href="#">Внедорожники</a>															
								</span>
							</span>
						</span>						
					</div>

					<div class="catalog-item">
						<span class="catalog-item-pic">
							<img class="catalog-item-pic-img" src="img/pic/5<?= $expansion ?>" alt="Музыканты" title='Музыканты'>
							<span class="catalog-item-pic-head">
								<i class="catalog-item-pic-head-icon musicians"></i>
								<a class="catalog-item-pic-head-span" href="#">Музыканты</a>
								<span class="catalog-item-pic-head-info">
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Ретро</a>
									<a class="catalog-item-pic-head-item" href="#">Микроавтобусы</a>
									<a class="catalog-item-pic-head-item" href="#">Кареты</a>								
								</span>
							</span>
						</span>						
					</div>

					<div class="catalog-item">
						<span class="catalog-item-pic">
							<img class="catalog-item-pic-img" src="img/pic/6<?= $expansion ?>" alt="Артисты" title='Артисты'>
							<span class="catalog-item-pic-head">
								<i class="catalog-item-pic-head-icon artists"></i>
								<a class="catalog-item-pic-head-span" href="#">Артисты</a>
								<span class="catalog-item-pic-head-info">
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Ретро</a>
									<a class="catalog-item-pic-head-item" href="#">Микроавтобусы</a>
									<a class="catalog-item-pic-head-item" href="#">Кареты</a>																
								</span>
							</span>
						</span>						
					</div>

					<div class="catalog-item">
						<span class="catalog-item-pic">
							<img class="catalog-item-pic-img" src="img/pic/7<?= $expansion ?>" alt="Флористы" title='Флористы'>
							<span class="catalog-item-pic-head">
								<i class="catalog-item-pic-head-icon florists"></i>
								<a class="catalog-item-pic-head-span" href="#">Флористы</a>
								<span class="catalog-item-pic-head-info">
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Ретро</a>
									<a class="catalog-item-pic-head-item" href="#">Микроавтобусы</a>														
								</span>
							</span>
						</span>						
					</div>

					<div class="catalog-item">
						<span class="catalog-item-pic">
							<img class="catalog-item-pic-img" src="img/pic/8<?= $expansion ?>" alt="Транспорт" title='Транспорт'>
							<span class="catalog-item-pic-head">
								<i class="catalog-item-pic-head-icon transport"></i>
								<a class="catalog-item-pic-head-span" href="#">Транспорт</a>
								<span class="catalog-item-pic-head-info">
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Ретро</a>
									<a class="catalog-item-pic-head-item" href="#">Микроавтобусы</a>	
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Кабриолеты</a>
									<a class="catalog-item-pic-head-item" href="#">Внедорожники</a>
									<a class="catalog-item-pic-head-item" href="#">Ретро</a>
									<a class="catalog-item-pic-head-item" href="#">Микроавтобусы</a>
									<a class="catalog-item-pic-head-item" href="#">Кареты</a>
									<a class="catalog-item-pic-head-item" href="#">Лимузины</a>
									<a class="catalog-item-pic-head-item" href="#">Кабриолеты</a>
									<a class="catalog-item-pic-head-item" href="#">Внедорожники</a>													
								</span>
							</span>
						</span>						
					</div>					
				</div>
				<div class="catalog-buttons">
					<a class="catalog-buttons-link first" href="#">Присоединиться к исполнителям</a>
					<a class="catalog-buttons-link last" href="#">Перейти в каталог исполнителей</a>
				</div>
			</div>
		</section>

		<section id="top">
			<div class="container">
				<div class="head-left">
					<h2 class="head-left-h">Топ исполнителей города</h2>
				</div>
				<select class="top-select" name="photographers">
					<option value="1">Имя Фамилия</option>
					<option value="2">Имя Фамилия</option>
					<option value="3">Имя Фамилия</option>
					<option value="4">Имя Фамилия</option>
					<option value="5">Имя Фамилия</option>
				</select>
				<div class="content top-content">
					<span class="top-container-arrow prev">&lt;</span>
					<span class="top-container-arrow next">&gt;</span>
					<div class="top-content-wrap owl-carousel-2 owl-theme">
						<a class="top-item" href="#">
							<span class="top-item-avatar">
								<img class="top-item-avatar-img" src="img/people/1<?= $expansion ?>" alt="">
							</span>
							<span class="top-item-info">
								<span class="top-item-info-span name">А.Иванов</span>
								<span class="top-item-info-span text">Стоимость услуг:</span>
								<span class="top-item-info-span price">от 20000 руб.</span>
							</span>
							<span class="top-item-pro">pro</span>
						</a>

						<a class="top-item" href="#">
							<span class="top-item-avatar">
								<img class="top-item-avatar-img" src="img/people/2<?= $expansion ?>" alt="">
							</span>
							<span class="top-item-info">
								<span class="top-item-info-span name">А.Иванов</span>
								<span class="top-item-info-span text">Стоимость услуг:</span>
								<span class="top-item-info-span price">от 20000 руб.</span>
							</span>
						</a>

						<a class="top-item" href="#">
							<span class="top-item-avatar">
								<img class="top-item-avatar-img" src="img/people/3<?= $expansion ?>" alt="">
							</span>
							<span class="top-item-info">
								<span class="top-item-info-span name">А.Иванов</span>
								<span class="top-item-info-span text">Стоимость услуг:</span>
								<span class="top-item-info-span price">от 20000 руб.</span>
							</span>
							<span class="top-item-pro">pro</span>
						</a>

						<a class="top-item" href="#">
							<span class="top-item-avatar">
								<img class="top-item-avatar-img" src="img/people/4<?= $expansion ?>" alt="">
							</span>
							<span class="top-item-info">
								<span class="top-item-info-span name">А.Иванов</span>
								<span class="top-item-info-span text">Стоимость услуг:</span>
								<span class="top-item-info-span price">от 20000 руб.</span>
							</span>
						</a>

						<a class="top-item" href="#">
							<span class="top-item-avatar">
								<img class="top-item-avatar-img" src="img/people/5<?= $expansion ?>" alt="">
							</span>
							<span class="top-item-info">
								<span class="top-item-info-span name">А.Иванов</span>
								<span class="top-item-info-span text">Стоимость услуг:</span>
								<span class="top-item-info-span price">от 20000 руб.</span>
							</span>
						</a>

						<a class="top-item" href="#">
							<span class="top-item-avatar">
								<img class="top-item-avatar-img" src="img/people/6<?= $expansion ?>" alt="">
							</span>
							<span class="top-item-info">
								<span class="top-item-info-span name">А.Иванов</span>
								<span class="top-item-info-span text">Стоимость услуг:</span>
								<span class="top-item-info-span price">от 20000 руб.</span>
							</span>
						</a>

						<a class="top-item" href="#">
							<span class="top-item-avatar">
								<img class="top-item-avatar-img" src="img/people/3<?= $expansion ?>" alt="">
							</span>
							<span class="top-item-info">
								<span class="top-item-info-span name">А.Иванов</span>
								<span class="top-item-info-span text">Стоимость услуг:</span>
								<span class="top-item-info-span price">от 20000 руб.</span>
							</span>
						</a>

						<a class="top-item" href="#">
							<span class="top-item-avatar">
								<img class="top-item-avatar-img" src="img/people/4<?= $expansion ?>" alt="">
							</span>
							<span class="top-item-info">
								<span class="top-item-info-span name">А.Иванов</span>
								<span class="top-item-info-span text">Стоимость услуг:</span>
								<span class="top-item-info-span price">от 20000 руб.</span>
							</span>
						</a>

						<a class="top-item" href="#">
							<span class="top-item-avatar">
								<img class="top-item-avatar-img" src="img/people/5<?= $expansion ?>" alt="">
							</span>
							<span class="top-item-info">
								<span class="top-item-info-span name">А.Иванов</span>
								<span class="top-item-info-span text">Стоимость услуг:</span>
								<span class="top-item-info-span price">от 20000 руб.</span>
							</span>
						</a>

						<a class="top-item" href="#">
							<span class="top-item-avatar">
								<img class="top-item-avatar-img" src="img/people/6<?= $expansion ?>" alt="">
							</span>
							<span class="top-item-info">
								<span class="top-item-info-span name">А.Иванов</span>
								<span class="top-item-info-span text">Стоимость услуг:</span>
								<span class="top-item-info-span price">от 20000 руб.</span>
							</span>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="platforms">
			<div class="container">
				<div class="head-center">
					<h2 class="head-center-h">Каталог площадок</h2>
				</div>				
				<div class="content platforms-content owl-carousel-5 owl-theme">
					<div class="platforms-item">
						<div class="platforms-item-pic">
							<img class="platforms-item-pic-img" src="img/types/4<?= $expansion ?>" alt="Рестораны" title='Рестораны'>
							<h3 class="platforms-item-pic-head">
								<i class="platforms-item-pic-head-icon restaurants"></i>
								<span class="platforms-item-pic-head-span">Рестораны</span>								
							</h3>
						</div>						
					</div>

					<div class="platforms-item">
						<div class="platforms-item-pic">
							<img class="platforms-item-pic-img" src="img/types/3<?= $expansion ?>" alt="Свадебные шатры" title='Свадебные шатры'>
							<h3 class="platforms-item-pic-head">
								<i class="platforms-item-pic-head-icon tents"></i>
								<span class="platforms-item-pic-head-span">Свадебные шатры</span>								
							</h3>
						</div>						
					</div>

					<div class="platforms-item">
						<div class="platforms-item-pic">
							<img class="platforms-item-pic-img" src="img/types/5<?= $expansion ?>" alt="Веранды" title='Веранды'>
							<h3 class="platforms-item-pic-head">
								<i class="platforms-item-pic-head-icon verandas"></i>
								<span class="platforms-item-pic-head-span">Веранды</span>								
							</h3>
						</div>						
					</div>

					<div class="platforms-item">
						<div class="platforms-item-pic">
							<img class="platforms-item-pic-img" src="img/types/2<?= $expansion ?>" alt="Усадьбы" title='Усадьбы'>
							<h3 class="platforms-item-pic-head">
								<i class="platforms-item-pic-head-icon homesteads"></i>
								<span class="platforms-item-pic-head-span">Усадьбы</span>								
							</h3>
						</div>						
					</div>

					<div class="platforms-item">
						<div class="platforms-item-pic">
							<img class="platforms-item-pic-img" src="img/types/1<?= $expansion ?>" alt="Загородные клубы" title='Загородные клубы'>
							<h3 class="platforms-item-pic-head">
								<i class="platforms-item-pic-head-icon clubs"></i>
								<span class="platforms-item-pic-head-span">Загородные клубы</span>								
							</h3>
						</div>						
					</div>

					<div class="platforms-item">
						<div class="platforms-item-pic">
							<img class="platforms-item-pic-img" src="img/types/6<?= $expansion ?>" alt="Теплоходы" title='Теплоходы'>
							<h3 class="platforms-item-pic-head">
								<i class="platforms-item-pic-head-icon motorships"></i>
								<span class="platforms-item-pic-head-span">Теплоходы</span>								
							</h3>
						</div>						
					</div>				

				</div>
				<div class="platforms-buttons">
					<a class="platforms-buttons-link first" href="#">Добавить площадку</a>
					<a class="platforms-buttons-link last" href="#">Перейти в каталог площадок</a>
				</div>
			</div>
		</section>

		<section id="top-platforms">
			<div class="container top-platforms-container">
				<div class="head-left">
					<h2 class="head-left-h">Топ площадок города</h2>
				</div>
				<select class="top-platforms-select" name="photographers">
					<option value="1">Рестораны</option>
					<option value="2">Рестораны</option>
					<option value="3">Рестораны</option>
					<option value="4">Рестораны</option>
					<option value="5">Рестораны</option>
				</select>
				<div class="content top-platforms-content">
					<span class="top-platforms-container-arrow prev">&lt;</span>
					<span class="top-platforms-container-arrow next">&gt;</span>
					<div class="top-platforms-content-wrap owl-carousel-3 owl-theme">
						<a class="top-platforms-item" href="#">
							<span class="top-platforms-item-avatar">
								<img class="top-platforms-item-avatar-img" src="img/top/2<?= $expansion ?>" alt="">
							</span>
							<span class="top-platforms-item-info">
								<span class="top-platforms-item-info-span name">Ресторан “Aurum”</span>
								<span class="top-platforms-item-info-span text">ул.Красная, 3 а</span>
								<span class="top-platforms-item-info-span price">350 чел, от 2000 руб/чел</span>
								<span class="top-platforms-item-info-span metro">Площадь свободы</span>
							</span>
						</a>

						<a class="top-platforms-item" href="#">
							<span class="top-platforms-item-avatar">
								<img class="top-platforms-item-avatar-img" src="img/top/1<?= $expansion ?>" alt="">
							</span>
							<span class="top-platforms-item-info">
								<span class="top-platforms-item-info-span name">Ресторан “Aurum”</span>
								<span class="top-platforms-item-info-span text">ул.Красная, 3 а</span>
								<span class="top-platforms-item-info-span price">350 чел, от 2000 руб/чел</span>
								<span class="top-platforms-item-info-span metro">Киевская</span>
							</span>
						</a>

						<a class="top-platforms-item" href="#">
							<span class="top-platforms-item-avatar">
								<img class="top-platforms-item-avatar-img" src="img/top/3<?= $expansion ?>" alt="">
							</span>
							<span class="top-platforms-item-info">
								<span class="top-platforms-item-info-span name">Ресторан “Aurum”</span>
								<span class="top-platforms-item-info-span text">ул.Красная, 3 а</span>
								<span class="top-platforms-item-info-span price">350 чел, от 2000 руб/чел</span>
								<span class="top-platforms-item-info-span metro">Проспект Вернадского</span>
							</span>
						</a>

						<a class="top-platforms-item" href="#">
							<span class="top-platforms-item-avatar">
								<img class="top-platforms-item-avatar-img" src="img/top/4<?= $expansion ?>" alt="">
							</span>
							<span class="top-platforms-item-info">
								<span class="top-platforms-item-info-span name">Ресторан “Aurum”</span>
								<span class="top-platforms-item-info-span text">ул.Красная, 3 а</span>
								<span class="top-platforms-item-info-span price">350 чел, от 2000 руб/чел</span>
								<span class="top-platforms-item-info-span metro">Библиотка Им. Ленина</span>
							</span>
						</a>

						<a class="top-platforms-item" href="#">
							<span class="top-platforms-item-avatar">
								<img class="top-platforms-item-avatar-img" src="img/top/2<?= $expansion ?>" alt="">
							</span>
							<span class="top-platforms-item-info">
								<span class="top-platforms-item-info-span name">Ресторан “Aurum”</span>
								<span class="top-platforms-item-info-span text">ул.Красная, 3 а</span>
								<span class="top-platforms-item-info-span price">350 чел, от 2000 руб/чел</span>
								<span class="top-platforms-item-info-span metro">ВДНХ</span>
							</span>
						</a>

						<a class="top-platforms-item" href="#">
							<span class="top-platforms-item-avatar">
								<img class="top-platforms-item-avatar-img" src="img/top/1<?= $expansion ?>" alt="">
							</span>
							<span class="top-platforms-item-info">
								<span class="top-platforms-item-info-span name">Ресторан “Aurum”</span>
								<span class="top-platforms-item-info-span text">ул.Красная, 3 а</span>
								<span class="top-platforms-item-info-span price">350 чел, от 2000 руб/чел</span>
								<span class="top-platforms-item-info-span metro">Воробьевы Горы</span>
							</span>
						</a>

						<a class="top-platforms-item" href="#">
							<span class="top-platforms-item-avatar">
								<img class="top-platforms-item-avatar-img" src="img/top/3<?= $expansion ?>" alt="">
							</span>
							<span class="top-platforms-item-info">
								<span class="top-platforms-item-info-span name">Ресторан “Aurum”</span>
								<span class="top-platforms-item-info-span text">ул.Красная, 3 а</span>
								<span class="top-platforms-item-info-span price">350 чел, от 2000 руб/чел</span>
								<span class="top-platforms-item-info-span metro">Парк Культуры</span>
							</span>
						</a>

						<a class="top-platforms-item" href="#">
							<span class="top-platforms-item-avatar">
								<img class="top-platforms-item-avatar-img" src="img/top/4<?= $expansion ?>" alt="">
							</span>
							<span class="top-platforms-item-info">
								<span class="top-platforms-item-info-span name">Ресторан “Aurum”</span>
								<span class="top-platforms-item-info-span text">ул.Красная, 3 а</span>
								<span class="top-platforms-item-info-span price">350 чел, от 2000 руб/чел</span>
								<span class="top-platforms-item-info-span metro">Комсомольская</span>
							</span>
						</a>
						
					</div>
				</div>
			</div>
		</section>

		<section id="services">
			<img class="services-waves" src="img/waves2<?= $expansion ?>" alt="">
			<div class="container">
				<div class="head-center">
					<h2 class="head-center-h">Сервисы для невест</h2>
				</div>
				<div class="content services-content owl-carousel-9 owl-theme">					
					<div class="services-item">
						<i class="services-item-icon scheduler"></i>
						<h3 class="services-item-head">Свадебный<br> планировщик</h3>
						<span class="services-item-desc">Lorem ipsum dolor sit amet</span>
					</div>
					<div class="services-item">
						<i class="services-item-icon budget"></i>
						<h3 class="services-item-head">Свадебный<br> бюджет</h3>
						<span class="services-item-desc">Lorem ipsum dolor sit amet</span>
					</div>
					<div class="services-item">
						<i class="services-item-icon list"></i>
						<h3 class="services-item-head">Список<br> гостей</h3>
						<span class="services-item-desc">Lorem ipsum dolor sit amet</span>
					</div>
					<div class="services-item">
						<i class="services-item-icon cases"></i>
						<h3 class="services-item-head">Готовые<br> кейсы</h3>
						<span class="services-item-desc">Lorem ipsum dolor sit amet</span>
					</div>				
					<div class="services-item big">
						<i class="services-item-icon timeline"></i>
						<h3 class="services-item-head">Таймлайн<br> дня свадьбы</h3>
						<span class="services-item-desc">Lorem ipsum dolor sit amet</span>
					</div>
					<div class="services-item big">
						<i class="services-item-icon discount"></i>
						<h3 class="services-item-head">Скидки от наших<br> партнеров</h3>
						<span class="services-item-desc">Lorem ipsum dolor sit amet</span>
					</div>
					<div class="services-item big">
						<i class="services-item-icon contest"></i>
						<h3 class="services-item-head">Конкурс<br> для невест</h3>
						<span class="services-item-desc">Lorem ipsum dolor sit amet</span>
					</div>					
				</div>
				<div class="services-buttons">					
					<a class="services-buttons-link last" href="#">Зарегистрироваться бесплатно</a>
				</div>
			</div>
		</section>
		<section id="useful">
			<div class="container">
				<div class="content useful-content">
					<div class="useful-articles">
						<div class="head-left">
							<h2 class="head-left-h">Популярные статьи</h2>
						</div>

						<div class="useful-articles-wrap owl-carousel-6 owl-theme">
							<div class="useful-articles-item">
								<a class="useful-articles-item-pic" href="#">
									<img class="useful-articles-item-pic-img" src="img/articles/1<?= $expansion ?>" alt="">
								</a>
								<div class="useful-articles-item-text">
									<h3 class="useful-articles-item-text-head">
										<a class="useful-articles-item-text-head-link" href="#">Выиграй 150 000 рублей для своей свадьбы</a>
									</h3>
									<p class="useful-articles-item-text-p">
										<a class="useful-articles-item-text-p-link" href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</a>
									</p>
									<div class="useful-articles-item-text-author">
										<span class="useful-articles-item-text-author-info data">27.09.2019</span>
										<span class="useful-articles-item-text-author-info name">Андрей Савельев</span>
										<span class="useful-articles-item-text-author-info comments">15</span>
									</div>
								</div>
							</div>
							<div class="useful-articles-item">
								<a class="useful-articles-item-pic" href="#">
									<img class="useful-articles-item-pic-img" src="img/articles/2<?= $expansion ?>" alt="">
								</a>
								<div class="useful-articles-item-text">
									<h3 class="useful-articles-item-text-head">
										<a class="useful-articles-item-text-head-link" href="#">Выиграй 150 000 рублей для своей свадьбы</a>
									</h3>
									<p class="useful-articles-item-text-p">
										<a class="useful-articles-item-text-p-link" href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</a>
									</p>
									<div class="useful-articles-item-text-author">
										<span class="useful-articles-item-text-author-info data">27.09.2019</span>
										<span class="useful-articles-item-text-author-info name">Андрей Савельев</span>
										<span class="useful-articles-item-text-author-info comments">15</span>
									</div>
								</div>
							</div>
							<div class="useful-articles-item">
								<a class="useful-articles-item-pic" href="#">
									<img class="useful-articles-item-pic-img" src="img/articles/3<?= $expansion ?>" alt="">
								</a>
								<div class="useful-articles-item-text">
									<h3 class="useful-articles-item-text-head">
										<a class="useful-articles-item-text-head-link" href="#">Выиграй 150 000 рублей для своей свадьбы</a>
									</h3>
									<p class="useful-articles-item-text-p">
										<a class="useful-articles-item-text-p-link" href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</a>
									</p>
									<div class="useful-articles-item-text-author">
										<span class="useful-articles-item-text-author-info data">27.09.2019</span>
										<span class="useful-articles-item-text-author-info name">Андрей Савельев</span>
										<span class="useful-articles-item-text-author-info comments">15</span>
									</div>
								</div>
							</div>
							<div class="useful-articles-item">
								<a class="useful-articles-item-pic" href="#">
									<img class="useful-articles-item-pic-img" src="img/articles/4<?= $expansion ?>" alt="">
								</a>
								<div class="useful-articles-item-text">
									<h3 class="useful-articles-item-text-head">
										<a class="useful-articles-item-text-head-link" href="#">Выиграй 150 000 рублей для своей свадьбы</a>
									</h3>
									<p class="useful-articles-item-text-p">
										<a class="useful-articles-item-text-p-link" href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</a>
									</p>
									<div class="useful-articles-item-text-author">
										<span class="useful-articles-item-text-author-info data">27.09.2019</span>
										<span class="useful-articles-item-text-author-info name">Андрей Савельев</span>
										<span class="useful-articles-item-text-author-info comments">15</span>
									</div>
								</div>
							</div>
							<div class="useful-articles-item">
								<a class="useful-articles-item-pic" href="#">
									<img class="useful-articles-item-pic-img" src="img/articles/5<?= $expansion ?>" alt="">
								</a>
								<div class="useful-articles-item-text">
									<h3 class="useful-articles-item-text-head">
										<a class="useful-articles-item-text-head-link" href="#">Выиграй 150 000 рублей для своей свадьбы</a>
									</h3>
									<p class="useful-articles-item-text-p">
										<a class="useful-articles-item-text-p-link" href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</a>
									</p>
									<div class="useful-articles-item-text-author">
										<span class="useful-articles-item-text-author-info data">27.09.2019</span>
										<span class="useful-articles-item-text-author-info name">Андрей Савельев</span>
										<span class="useful-articles-item-text-author-info comments">15</span>
									</div>
								</div>
							</div>
						</div>
					</div>					
					<div class="useful-video">
						<div class="head-left">
							<h2 class="head-left-h min-font">Видео</h2>
						</div>
						<div class="useful-video-wrap owl-carousel-7 owl-theme">
							<div class="useful-video-item" data-id="5hZgvxhZBa0">
								<div class="useful-video-item-pic">
									<img class="useful-video-item-img" src="//img.youtube.com/vi/5hZgvxhZBa0/0.jpg" alt="">
								</div>
								<div class="useful-video-item-text">
									<h4 class="useful-video-item-text-head">10 Советов по выбору ведущего на свадьбу</h4>
									<span class="useful-video-item-text-date">27.09.2019</span>
								</div>
							</div>

							<div class="useful-video-item" data-id="1Jw_EoIV-e0">
								<div class="useful-video-item-pic">
									<img class="useful-video-item-img" src="//img.youtube.com/vi/1Jw_EoIV-e0/0.jpg" alt="">
								</div>
								<div class="useful-video-item-text">
									<h4 class="useful-video-item-text-head">Сколько стоит свадебный декор?</h4>
									<span class="useful-video-item-text-date">27.09.2019</span>
								</div>
							</div>

							<div class="useful-video-item" data-id="p4SAcrm_UNQ">
								<div class="useful-video-item-pic">
									<img class="useful-video-item-img" src="//img.youtube.com/vi/p4SAcrm_UNQ/0.jpg" alt="">
								</div>
								<div class="useful-video-item-text">
									<h4 class="useful-video-item-text-head">Стоит ли заказать Роллс Ройс на свадьбу?</h4>
									<span class="useful-video-item-text-date">27.09.2019</span>
								</div>
							</div>

							<div class="useful-video-item" data-id="xt2ktiVTXyA">
								<div class="useful-video-item-pic">
									<img class="useful-video-item-img" src="//img.youtube.com/vi/xt2ktiVTXyA/0.jpg" alt="">
								</div>
								<div class="useful-video-item-text">
									<h4 class="useful-video-item-text-head">Сколько стоит свадебный декор?</h4>
									<span class="useful-video-item-text-date">27.09.2019</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="best">
			<img class="best-waves" src="img/waves3<?= $expansion ?>" alt="">
			<div class="container">
				<div class="head-center">
					<h2 class="head-center-h">Лучшие фотографии и видео города</h2>
				</div>
				<div class="content best-content">
					<div class="best-wrap first">
						<a class="best-item big" style="background-image: url('img/favorites/2<?= $expansion ?>')" href="img/favorites/2<?= $expansion ?>">
							<div class="best-item-hide-info">
								<div class="best-item-hide-info-wrap">
									<h3 class="best-item-hide-info-head">Свадьба Сони и Ромы</h3>
									<span class="best-item-hide-info-author">Автор: А.Иванов</span>
								</div>
							</div>
						</a>				
						<a class="best-item small" style="background-image: url('img/favorites/1<?= $expansion ?>')" href="img/favorites/1<?= $expansion ?>">
							<div class="best-item-hide-info">
								<div class="best-item-hide-info-wrap">
									<h3 class="best-item-hide-info-head">Свадьба Сони и Ромы</h3>
									<span class="best-item-hide-info-author">Автор: А.Иванов</span>
								</div>
							</div>
						</a>
						<a class="best-item small" style="background-image: url('img/favorites/5<?= $expansion ?>')" href="img/favorites/5<?= $expansion ?>">
							<div class="best-item-hide-info">
								<div class="best-item-hide-info-wrap">
									<h3 class="best-item-hide-info-head">Свадьба Сони и Ромы</h3>
									<span class="best-item-hide-info-author">Автор: А.Иванов</span>
								</div>
							</div>
						</a>
						<a class="best-item small" style="background-image: url('img/favorites/3<?= $expansion ?>')" href="img/favorites/3<?= $expansion ?>">
							<div class="best-item-hide-info">
								<div class="best-item-hide-info-wrap">
									<h3 class="best-item-hide-info-head">Свадьба Сони и Ромы</h3>
									<span class="best-item-hide-info-author">Автор: А.Иванов</span>
								</div>
							</div>
						</a>
						<a class="best-item small video" style="background-image: url('//img.youtube.com/vi/uFDMiZBA8y8/0.jpg')" href="https://www.youtube.com/watch?v=uFDMiZBA8y8">
							<div class="best-item-hide-info video">
								<div class="best-item-hide-info-wrap">
									<h3 class="best-item-hide-info-head">Свадьба Сони и Ромы</h3>
									<span class="best-item-hide-info-author">Автор: А.Иванов</span>
								</div>
							</div>
						</a>
					</div>
					<div class="best-wrap last">
						<a class="best-item small video" style="background-image: url('//img.youtube.com/vi/BRtjmM3K_eU/0.jpg')" href="https://www.youtube.com/watch?v=BRtjmM3K_eU">
							<div class="best-item-hide-info video">
								<div class="best-item-hide-info-wrap">
									<h3 class="best-item-hide-info-head">Свадьба Сони и Ромы</h3>
									<span class="best-item-hide-info-author">Автор: А.Иванов</span>
								</div>
							</div>
						</a>			
						<a class="best-item small" style="background-image: url('img/favorites/6<?= $expansion ?>')" href="img/favorites/6<?= $expansion ?>">
							<div class="best-item-hide-info">
								<div class="best-item-hide-info-wrap">
									<h3 class="best-item-hide-info-head">Свадьба Сони и Ромы</h3>
									<span class="best-item-hide-info-author">Автор: А.Иванов</span>
								</div>
							</div>
						</a>
						<a class="best-item small" style="background-image: url('img/favorites/7<?= $expansion ?>')" href="img/favorites/7<?= $expansion ?>">
							<div class="best-item-hide-info">
								<div class="best-item-hide-info-wrap">
									<h3 class="best-item-hide-info-head">Свадьба Сони и Ромы</h3>
									<span class="best-item-hide-info-author">Автор: А.Иванов</span>
								</div>
							</div>
						</a>
						<a class="best-item small" style="background-image: url('img/favorites/3<?= $expansion ?>')" href="img/favorites/3<?= $expansion ?>">
							<div class="best-item-hide-info">
								<div class="best-item-hide-info-wrap">
									<h3 class="best-item-hide-info-head">Свадьба Сони и Ромы</h3>
									<span class="best-item-hide-info-author">Автор: А.Иванов</span>
								</div>
							</div>
						</a>
						<a class="best-item big" style="background-image: url('img/favorites/4<?= $expansion ?>')" href="img/favorites/4<?= $expansion ?>">
							<div class="best-item-hide-info">
								<div class="best-item-hide-info-wrap">
									<h3 class="best-item-hide-info-head">Свадьба Сони и Ромы</h3>
									<span class="best-item-hide-info-author">Автор: А.Иванов</span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="best-buttons">					
					<a class="best-buttons-link last" href="#">Загрузить еще</a>
				</div>
			</div>
			<img class="best-waves-bottom" src="img/waves4<?= $expansion ?>" alt="">
		</section>

		<section id="shop">			
			<div class="container">				
				<div class="head-center">
					<h2 class="head-center-h">Свадебный магазин</h2>
				</div>
				<div class="content shop-content">
					<div class="shop-wrap first">
						<a class="shop-item big" style="background-image: url('img/score/8<?= $expansion ?>')" href="#">
							<span class="shop-item-name">Кондитерские изделия</span>
						</a>
						<a class="shop-item small" style="background-image: url('img/score/5<?= $expansion ?>')" href="#">
							<span class="shop-item-name">Кольца</span>
						</a>
						<a class="shop-item small" style="background-image: url('img/score/6<?= $expansion ?>')" href="#">
							<span class="shop-item-name">Туфли жениха</span>
						</a>
						<a class="shop-item small" style="background-image: url('img/score/4<?= $expansion ?>')" href="#">
							<span class="shop-item-name">Туфли невесты</span>
						</a>
						<a class="shop-item small" style="background-image: url('img/score/7<?= $expansion ?>')" href="#">
							<span class="shop-item-name">Цветы</span>
						</a>				
						
					</div>
					<div class="shop-wrap last">
						<a class="shop-item small-big" style="background-image: url('img/score/2<?= $expansion ?>')" href="#">
							<span class="shop-item-name">Декоо</span>
						</a>						
						<a class="shop-item small" style="background-image: url('img/score/9<?= $expansion ?>')" href="#">
							<span class="shop-item-name">Аксессуары</span>
						</a>
						<a class="shop-item small" style="background-image: url('img/score/3<?= $expansion ?>')" href="#">
							<span class="shop-item-name">Кольца</span>
						</a>
						<a class="shop-item big" style="background-image: url('img/score/1<?= $expansion ?>')" href="#">
							<span class="shop-item-name">Декор</span>
						</a>
					</div>				
				</div>
				<div class="shop-buttons">					
					<a class="shop-buttons-link last" href="#">Загрузить еще</a>
				</div>
			</div>
		</section>

		<section id="blocks">
			<img class="best-waves" src="img/waves5<?= $expansion ?>" alt="">
			<div class="container">
				<div class="content blocks-content owl-carousel-8 owl-theme">
					<div class="blocks-item big first">
						<div class="blocks-item-wrap">		
							<div class="head-center">
								<h2 class="head-center-h" style="color: #746B64">Регистрируйся и получай бонусы</h2>
							</div>							
							<p class="blocks-item-p">Подарок за регистрацию – pdf-книга <span class="blocks-item-p-span">“30 рекомендаций по подготовке к свадьбе”</span></p>
							<div class="blocks-item-link-wrap">
								<a class="blocks-item-link" href="#">Зарегистрироваться</a>
							</div>
						</div>
					</div>

					<div class="blocks-item small second">
						<div class="blocks-item-wrap">								
							<h2 class="blocks-item-head">Фотографы<br> в ближайших городах</h2>												
							<div class="blocks-item-cities">
								<span class="blocks-item-cities-city">Апрелевка 853</span>
								<span class="blocks-item-cities-city">Обнинск 730</span>
								<span class="blocks-item-cities-city">Селятино 52</span>
								<span class="blocks-item-cities-city">Москвский</span>
								<span class="blocks-item-cities-city">Балашиха</span>
								<span class="blocks-item-cities-city">Москва</span>
								<span class="blocks-item-cities-city">Видное</span>
								<span class="blocks-item-cities-city">Переделкино</span>
							</div>							
						</div>
					</div>
					<div class="blocks-item small third">
						<div class="blocks-item-wrap">								
							<h2 class="blocks-item-head">Свадьба в<br> Петропавловск-Камчатском</h2>							
							<p class="blocks-item-p">Lorem ipsum dolor sit amet, consectetuer adipiscingelit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscingelit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscingelit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscingelit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscingelit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscingelit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscingelit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscingelit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscingelit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<a class="blocks-item-wrap-more" href="#">Читать полностью</a>							
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="socials">
			<div class="container socials-container">
				<div class="content socials-content">
					<a class="socials-link" href="#"><span class="socials-link-icon fb"></span></a>
					<a class="socials-link" href="#"><span class="socials-link-icon ig"></span></a>
					<a class="socials-link" href="#"><span class="socials-link-icon p"></span></a>
					<a class="socials-link" href="#"><span class="socials-link-icon vk"></span></a>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="content footer-content">
					<div class="footer-left">
						<div class="footer-left-logo">
							<a class="footer-left-logo-link" href="/">
								<span class="footer-left-logo-link-text">главный свадебный портал в</span>
								<img class="footer-left-logo-link-img" src="img/logo<?= $expansion ?>" alt='Логотип'>
							</a>
							<div class="footer-left-logo-link-city-wrap">Наро-фоминск</div>		
						</div>
						<span class="footer-left-info">Все права защищены (с) 2019</span>
					</div>
					<div class="footer-right">
						<div class="footer-right-item">
							<h5 class="footer-right-item-head">Площадки</h5>
							<a class="footer-right-item-link" href="#">Рестораны</a>
							<a class="footer-right-item-link" href="#">Свадебные шатры</a>
							<a class="footer-right-item-link" href="#">Веранды</a>
							<a class="footer-right-item-link" href="#">Усадьбы</a>
							<a class="footer-right-item-link" href="#">Загородные клубы</a>
							<a class="footer-right-item-link" href="#">Речной транспорт</a>
						</div>
						<div class="footer-right-item">
							<h5 class="footer-right-item-head">Исполнители</h5>
							<a class="footer-right-item-link" href="#">Фотографы</a>
							<a class="footer-right-item-link" href="#">Видеографы</a>
							<a class="footer-right-item-link" href="#">Организаторы</a>
							<a class="footer-right-item-link" href="#">Оформители</a>
							<a class="footer-right-item-link" href="#">Музыканты</a>
							<a class="footer-right-item-link" href="#">Артисты</a>
							<a class="footer-right-item-link" href="#">Флористы</a>
							<a class="footer-right-item-link" href="#">Транспорт</a>
						</div>
						<div class="footer-right-item">
							<h5 class="footer-right-item-head">Сервисы невес</h5>
							<a class="footer-right-item-link" href="#">Планировщик</a>
							<a class="footer-right-item-link" href="#">Бюджет</a>
							<a class="footer-right-item-link" href="#">Список гостей</a>
							<a class="footer-right-item-link" href="#">Готовые кейсы</a>
							<a class="footer-right-item-link" href="#">Таймлайн дня свадьбы</a>
							<a class="footer-right-item-link" href="#">Скидки от партнеров</a>
							<a class="footer-right-item-link" href="#">Конкурс для невест</a>							
						</div>
						<div class="footer-right-item">
							<h5 class="footer-right-item-head">Магазин</h5>
							<a class="footer-right-item-link" href="#">Плятья</a>
							<a class="footer-right-item-link" href="#">Костюмы</a>
							<a class="footer-right-item-link" href="#">Аксесуары</a>
							<a class="footer-right-item-link" href="#">Кольца</a>
							<a class="footer-right-item-link" href="#">Декор</a>														
						</div>
					</div>
				</div>
			</div>
		</footer>
		<section id="modal-date">
			<div class="container modal-date-container">
				<div class="content modal-date-content">
					<i class="modal-date-close"></i>
					<form class="modal-date-form" action="#" method="post">
						<div class="modal-date-wrap">
							<h3 class="modal-date-head">Проверить доступную дату</h3>
							<label class="modal-date-label">
								<input class='modal-date-input date' type="text" name="modal-date-date" placeholder="Дата">
								<i class="modal-date-calendar"></i>
							</label>
						</div>
						<div class="modal-date-wrap last">
							<h3 class="modal-date-head">Зарегистрироваться на сайте</h3>
							<label class="modal-date-label">
								<input class='modal-date-input phone' type="text" name="modal-date-phone" placeholder="Телефон">
							</label>
						</div>
						<div class="modal-date-socials">
							<a class="modal-date-socials-link vk" href="#">
								<i class="modal-date-socials-link-icon vk"></i>
								<span class="modal-date-socials-link-span">Вконтакте</span>
							</a>
							<a class="modal-date-socials-link gl" href="#">
								<i class="modal-date-socials-link-icon gl"></i>
								<span class="modal-date-socials-link-span">Google</span>
							</a>
							<a class="modal-date-socials-link fb" href="#">
								<i class="modal-date-socials-link-icon fb"></i>
								<span class="modal-date-socials-link-span">Facebook</span>
							</a>
						</div>
						<p class="modal-date-info">Данную услугу можно оплатить с помощью<br> нашего сервиса</p>
						<button class='modal-date-submit'>Заказать услугу за 12 500 р</button>
					</form>
				</div>
			</div>
		</section>
		<section id="modal-reg">
			<div class="container modal-reg-container">
				<h3>Регистрация</h3>
				<div class="content modal-reg-content">
					<i class="modal-reg-close"></i>
					<form class="modal-reg-form" action="#" method="post">
						<i class="modal-reg-form-loader">
							<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="64px" height="64px" viewBox="0 0 128 128" xml:space="preserve"><g><circle cx="16" cy="64" r="16" fill="#000000" fill-opacity="1"/><circle cx="16" cy="64" r="16" fill="#555555" fill-opacity="0.67" transform="rotate(45,64,64)"/><circle cx="16" cy="64" r="16" fill="#949494" fill-opacity="0.42" transform="rotate(90,64,64)"/><circle cx="16" cy="64" r="16" fill="#cccccc" fill-opacity="0.2" transform="rotate(135,64,64)"/><circle cx="16" cy="64" r="16" fill="#e1e1e1" fill-opacity="0.12" transform="rotate(180,64,64)"/><circle cx="16" cy="64" r="16" fill="#e1e1e1" fill-opacity="0.12" transform="rotate(225,64,64)"/><circle cx="16" cy="64" r="16" fill="#e1e1e1" fill-opacity="0.12" transform="rotate(270,64,64)"/><circle cx="16" cy="64" r="16" fill="#e1e1e1" fill-opacity="0.12" transform="rotate(315,64,64)"/><animateTransform attributeName="transform" type="rotate" values="0 64 64;315 64 64;270 64 64;225 64 64;180 64 64;135 64 64;90 64 64;45 64 64" calcMode="discrete" dur="720ms" repeatCount="indefinite"></animateTransform></g></svg>
						</i>
						<span class="modal-reg-form-error-server"></span>
						<div class="modal-reg-form-field">
							<input class="modal-reg-form-field-input name" type="text" name="reg-name" placeholder="Имя*">
							<span class="modal-reg-form-field-error name"></span>
						</div>
						<div class="modal-reg-form-field">
							<input class="modal-reg-form-field-input phone" type="text" name="reg-phone" placeholder="Номер телефона*">
							<span class="modal-reg-form-field-error phone"></span>
						</div>
						<div class="modal-reg-form-field">
							<input class="modal-reg-form-field-input email" type="text" name="reg-email" placeholder="Email*">
							<span class="modal-reg-form-field-error email"></span>
						</div>
						<div class="modal-reg-form-field">
							<input class="modal-reg-form-field-input pass" type="password" name="reg-pass" placeholder="Пароль">
							<span class="modal-reg-form-field-error pass"></span>
						</div>	
						<div class="modal-reg-form-field">
							<input class="modal-reg-form-field-input pass-repeat" type="password" name="reg-pass-repeat" placeholder="Пароль еще раз">
							<span class="modal-reg-form-field-error pass-repeat"></span>
						</div>
						<label class="modal-reg-form-field check">
							<input class="modal-reg-form-field-check-input" type="checkbox" name="reg-check">
							<span class="modal-reg-form-field-check-text">С условиями <a class="modal-reg-form-field-check-text-link" href="#">политики конфиденциальности</a> согласен</span>
							<span class="modal-reg-form-field-error check"></span>
						</label>					
						<button class="modal-reg-form-submit-button">Регистрация</button>						
					</form>
				</div>
			</div>
		</section>	
		<section id="modal-input">
			<div class="container modal-input-container">
				<div class="content modal-input-content">
					<i class="modal-input-close"></i>
					<form class="modal-input-form">
						<div class="modal-input-form-field">
							<input class="modal-input-form-field-input phone" type="text" name="phone" placeholder="Номер телефона">
						</div>
						<div class="modal-input-form-field">
							<input class="modal-input-form-field-input pass" type="password" name="pass" placeholder="Пароль">
						</div>
						<div class="modal-input-form-submit">
							<div class="modal-input-form-submit-socials">
								<a class="modal-input-form-submit-socials-link vk" href="#"></a>
								<a class="modal-input-form-submit-socials-link fb" href="#"></a>
								<a class="modal-input-form-submit-socials-link gl" href="#"></a>
								<a class="modal-input-form-submit-socials-link ya" href="#"></a>
							</div>
							<button class="modal-input-form-submit-button">Войти</button>
						</div>
					</form>
				</div>
			</div>
		</section>		
		<section id="modal-video">
			<div class="container modal-video-container">
				<div class="content modal-video-content">
					<i class="modal-video-close"></i>					
					<iframe class="modal-video-iframe" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</section>
		<section id="modal-not-working">
			<div class="container not-working-container">
				<div class="content not-working-content">
					<i class="not-working-close"></i>
					<p class="not-working-info">Раздел находится в разработке. Оставьте свой номер телефона и мы свяжемся с вами</p>
					<form class="not-working-form" action="#" method="post">
						<input class="not-working-form-input" type="text" name="phone" placeholder="Номер телефона">
						<button class="not-working-form-submit">Отправить</button>
					</form>
				</div>
			</div>
		</section>		
	</div>	
	<link rel="stylesheet" type="text/css" href="js/owlcarousel/owl.carousel.css?2209191335">  
    <link rel="stylesheet" type="text/css" href="js/owlcarousel/owl.theme.green.css">
    <link rel="stylesheet" type="text/css" href="js/calendar/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="js/lightgallery/dist/css/lightgallery.min.css">
	<link rel="stylesheet" type="text/css" href="js/kladr/jquery.kladr.min.css">	
	<script src="js/jquery/jquery-3.4.1.js"></script>
	<script src="js/kladr/jquery.kladr.min.js"></script>	
	<script src='js/owlcarousel/owl.carousel.min.js'></script>
	<script src='js/lightgallery/dist/js/lightgallery.min.js'></script>
	<script src='js/lightgallery/modules/lg-video.min.js'></script>
	<script src="js/maskedinput/maskedinput.min.js"></script>
	<script src="js/calendar/jquery-ui.min.js"></script>
	<script src="js/my.js?2409191705"></script>	
	<script src="js/calendar/ru.js"></script>
	<style type="text/css">				
		.nav-list-item-link.submenu-icon:after, .header-logo-link-city-icon,
		.offer-counters-list-item-icon, .catalog-item-pic-head-icon, 
		.platforms-item-pic-head-icon, .top-platforms-item-info-span.metro:before,
		.services-item-icon, .useful-articles-item-text-author-info:before,
		.useful-video-item-pic:before, .useful-video-item-text-date:before,
		.modal-video-close, .best-item.video:before, .blocks-item-cities-city:before,
		.socials-link-icon, .m-menu{				
			background-image: url(img/icons<?= $expansion ?>);
		}
		.discounts-item-wrap{
			background-image: url(img/flowers1<?= $expansion ?>);
		}		
		#offer:before{
			 background-image: url(img/flowers4<?= $expansion ?>);
		}
		#offer:after{
			background-image: url(img/flowers3<?= $expansion ?>);
		}
		.blocks-item.first .blocks-item-wrap{
			background-image: url(img/flowers5<?= $expansion ?>);
		}
		.blocks-item.second .blocks-item-wrap{
			background-image: url(img/flowers6<?= $expansion ?>);
		}
		.blocks-item.third .blocks-item-wrap{
			background-image: url(img/flowers7<?= $expansion ?>);
		}
		#offer{
			background-image: url(img/bg<?= $expansion ?>);
		}
		.offer-waves{
			background-image: url(img/waves<?= $expansion ?>);
		}		
	</style>
</body>
</html>