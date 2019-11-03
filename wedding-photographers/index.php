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
	<style>		
		.nav-list-item-link.submenu-icon:after, .header-logo-link-city-icon,		
		.socials-link-icon, .m-menu, .best-item-left-contacts-phone:before,
		.best-item-left-contacts-socials-link.inst:before, .best-item-left-contacts-socials-link.vk:before,
		.best-item-right-contacts-socials-link.inst:before, .best-item-right-contacts-socials-link.vk:before,
		.best-item-favorite-icon, .best-item-right-portfolio-item:after, .best-item-right-contacts-phone:before{		
			background-image: url(img/icons<?= $expansion ?>);
		}
		.offer-waves {
		    background-image: url(img/waves<?= $expansion ?>);
		}
		#offer{
			background-image: url(img/bg<?= $expansion ?>);
		}		
		.blocks-item-wrap{
			background-image: url(img/flowers<?= $expansion ?>);
		}		
	</style>	
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
							<input class="header-logo-link-city" type="text" value="Наро-фоминск">
							<i class="header-logo-link-city-icon"></i>
						</div>
					</div>
					<div class="header-search">
						<input class="header-search-input" type="text" name="search" placeholder="Поиск">
					</div>
					<div class="header-auth">
						<a class="header-auth-link input" href="#">Войти</a>
						<a class="header-auth-link reg" href="#">Регистрация</a>
					</div>					
				</div>
			</div>
		</header>

		<nav>
			<div class="container">
				<div class="content">
					<div class="m-menu"></div>					
					<ul class="nav-list">
						<li class="nav-list-item submenu">
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
						<li class="nav-list-item submenu active">
							<a class="nav-list-item-link submenu-icon" href="#">Исполнители</a>
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
			<div class="container">
				<div class="content offer-content">
					<h1 class="offer-h">Фотографы Петропавловск-Камчатска</h1>
					<select class="offer-select" name="photographers">
						<option value="1">Другие исполнители</option>
						<option value="2">Имя Фамилия</option>
						<option value="3">Имя Фамилия</option>
						<option value="4">Имя Фамилия</option>
						<option value="5">Имя Фамилия</option>
					</select>
				</div>
			</div>
			<div class="offer-waves"></div>
		</section>
		<section id="best">
			<div class="container">
				<div class="head-center">
					<h2 class="head-center-h">Лучшие свадебные фотографы Петропавловск-Камчатска</h2>
				</div>
				<div class="content best-content">
					<form class="best-form-search" action="#" method="post">
						<select class="best-form-search-select" name="date">
							<option value="1" disabled selected>Дата мероприятия</option>
							<option value="2">26.09.2019</option>
							<option value="3">27.09.2019</option>
							<option value="4">28.09.2019</option>
							<option value="5">29.09.2019</option>
						</select>
						<select class="best-form-search-select" name="price">
							<option value="1" disabled selected>Стоимость съемки</option>
							<option value="2">500-1000</option>
							<option value="3">1000-2000</option>
							<option value="4">2000-4000</option>
							<option value="5">4000-8000</option>
						</select>
						<select class="best-form-search-select" name="specialization">
							<option value="1" selected>Специализация</option>
							<option value="2">Фотограф</option>
							<option value="3">Видеограф</option>							
						</select>
						<input class="best-form-search-input" type="text" name="name-photographer" placeholder="Имя Фотографа">
						<button class="best-form-search-submit">Найти</button>
					</form>

					<div class="best-content-wrap">
						<div class="best-item">
							<a class="best-item-favorite" href="#">
								<i class="best-item-favorite-icon"></i>
								<span class="best-item-favorite-span">В избранное</span>
							</a>
							<div class="best-item-left">
								<div class="best-item-left-avatar">
									<img class="best-item-left-avatar-img" src="img/photographers/1<?= $expansion ?>" alt="">
									<span class="best-item-left-avatar-pro">pro</span>
								</div>
								<div class="best-item-left-contacts">
									<div class="best-item-left-contacts-phone">+7 (000) 123 45 67</div>
									<div class="best-item-left-contacts-socials">
										<a class="best-item-left-contacts-socials-link inst" href="#">инстаграм</a>
										<a class="best-item-left-contacts-socials-link vk" href="#">вконтакте</a>
									</div>
								</div>
								<div class="best-item-left-date">
									<select class="best-item-left-date-select" name="date">
										<option value="1" disabled selected>Свободные даты</option>
										<option value="2">26.09.2019</option>
										<option value="3">27.09.2019</option>
										<option value="4">28.09.2019</option>
										<option value="5">29.09.2019</option>
									</select>
								</div>
								<ul class="best-item-left-list">
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Отзывы невест - <span class="best-item-left-list-link-count">67</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Услуги Ларисы - <span class="best-item-left-list-link-count">23</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Акции и скидки - <span class="best-item-left-list-link-count">2</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Вопросы и ответы</a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Статьи с Ларисой - <span class="best-item-left-list-link-count">7</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Видео с Ларисой - <span class="best-item-left-list-link-count">3</span></a></li>
								</ul>
							</div>
							<div class="best-item-right">
								<div class="best-item-right-name">Назарова Лариса, <span class="best-item-right-name-text">фотограф в Петропавловск-Камчатском</span></div>
								<div class="best-item-right-price">
									<span class="best-item-right-price-span text">Стоимость: </span>
									<span class="best-item-right-price-span old">200 000р.</span>
									<span class="best-item-right-price-span new">170 000р.</span>
								</div>
								<div class="best-item-right-desc">
									Каждый момент свадьбы я переживаю вместе с вами, немного волнуясь на сборах, обнимая вас после регистрации, пуская слезу, когда идёт танец отца и дочери. Первую свадьбу я отснял ещё в 2011 году и до сих пор кайфую от свадеб. И отвечая на вопрос коллег: — нет, не надоело! Как может надоесть чуть ли не самое эмоциональное и трогательное событие в жизни людей, которое заряжает тебя энергией.
								</div>
								<div class="best-item-right-portfolio">
									<h3 class="best-item-right-portfolio-head">Примеры работ:</h3>
									<div class="best-item-right-portfolio-wrap portfolio-wrap">
										<a class="best-item-right-portfolio-item" href="img/portfolio/1<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/1<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/2<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/2<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/3<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/3<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/4<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/4<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/5<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/5<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/6<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/6<?= $expansion ?>" alt="">
										</a>
									</div>
								</div>
								<div class="best-item-right-services">
									<h3 class="best-item-right-services-head">Услуги:</h3>
									<div class="best-item-right-services-wrap">
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/1<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/2<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Видеосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/3<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотосъемка свадьбы</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/4<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотокнига</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/1<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/2<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Видеосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="best-item">
							<a class="best-item-favorite" href="#">
								<i class="best-item-favorite-icon"></i>
								<span class="best-item-favorite-span">В избранное</span>
							</a>
							<div class="best-item-left">
								<div class="best-item-left-avatar">
									<img class="best-item-left-avatar-img" src="img/photographers/2<?= $expansion ?>" alt="">
									<!--<span class="best-item-left-avatar-pro">pro</span>-->
								</div>
								<!--<div class="best-item-left-contacts">
									<div class="best-item-left-contacts-phone">+7 (000) 123 45 67</div>
									<div class="best-item-left-contacts-socials">
										<a class="best-item-left-contacts-socials-link inst" href="#">инстаграм</a>
										<a class="best-item-left-contacts-socials-link vk" href="#">вконтакте</a>
									</div>
								</div>-->
								<div class="best-item-left-date">
									<select class="best-item-left-date-select" name="date">
										<option value="1" disabled selected>Свободные даты</option>
										<option value="2">26.09.2019</option>
										<option value="3">27.09.2019</option>
										<option value="4">28.09.2019</option>
										<option value="5">29.09.2019</option>
									</select>
								</div>
								<ul class="best-item-left-list">
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Отзывы невест - <span class="best-item-left-list-link-count">67</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Услуги Ларисы - <span class="best-item-left-list-link-count">23</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Акции и скидки - <span class="best-item-left-list-link-count">2</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Вопросы и ответы</a></li>		
								</ul>
							</div>
							<div class="best-item-right">
								<div class="best-item-right-name">Назарова Лариса, <span class="best-item-right-name-text">фотограф в Петропавловск-Камчатском</span></div>
								<div class="best-item-right-contacts">									
									<div class="best-item-right-contacts-socials">
										<a class="best-item-right-contacts-socials-link inst" href="#">инстаграм</a>
										<a class="best-item-right-contacts-socials-link vk" href="#">вконтакте</a>
									</div>
									<div class="best-item-right-contacts-phone">+7 (000) 123 45 67</div>
								</div>
								<!--<div class="best-item-right-price">
									<span class="best-item-right-price-span text">Стоимость: </span>
									<span class="best-item-right-price-span old">200 000р.</span>
									<span class="best-item-right-price-span new">170 000р.</span>
								</div>-->
								<div class="best-item-right-desc">
									Каждый момент свадьбы я переживаю вместе с вами, немного волнуясь на сборах, обнимая вас после регистрации, пуская слезу, когда идёт танец отца и дочери. Первую свадьбу я отснял ещё в 2011 году и до сих пор кайфую от свадеб. И отвечая на вопрос коллег: — нет, не надоело! Как может надоесть чуть ли не самое эмоциональное и трогательное событие в жизни людей, которое заряжает тебя энергией.
								</div>
								<div class="best-item-right-portfolio">
									<h3 class="best-item-right-portfolio-head">Примеры работ:</h3>
									<div class="best-item-right-portfolio-wrap portfolio-wrap">
										<a class="best-item-right-portfolio-item" href="img/portfolio/1<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/1<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/2<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/2<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/3<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/3<?= $expansion ?>" alt="">
										</a>										
									</div>
								</div>
								<div class="best-item-right-services">
									<h3 class="best-item-right-services-head">Услуги:</h3>
									<div class="best-item-right-services-wrap">
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/1<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/2<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Видеосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/3<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотосъемка свадьбы</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/4<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотокнига</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>										
									</div>
								</div>
							</div>
						</div>

						<div class="best-item">
							<a class="best-item-favorite" href="#">
								<i class="best-item-favorite-icon"></i>
								<span class="best-item-favorite-span">В избранное</span>
							</a>
							<div class="best-item-left">
								<div class="best-item-left-avatar">
									<img class="best-item-left-avatar-img" src="img/photographers/2<?= $expansion ?>" alt="">
									<!--<span class="best-item-left-avatar-pro">pro</span>-->
								</div>
								<!--<div class="best-item-left-contacts">
									<div class="best-item-left-contacts-phone">+7 (000) 123 45 67</div>
									<div class="best-item-left-contacts-socials">
										<a class="best-item-left-contacts-socials-link inst" href="#">инстаграм</a>
										<a class="best-item-left-contacts-socials-link vk" href="#">вконтакте</a>
									</div>
								</div>-->
								<div class="best-item-left-date">
									<select class="best-item-left-date-select" name="date">
										<option value="1" disabled selected>Свободные даты</option>
										<option value="2">26.09.2019</option>
										<option value="3">27.09.2019</option>
										<option value="4">28.09.2019</option>
										<option value="5">29.09.2019</option>
									</select>
								</div>
								<ul class="best-item-left-list">
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Отзывы невест - <span class="best-item-left-list-link-count">67</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Услуги Ларисы - <span class="best-item-left-list-link-count">23</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Акции и скидки - <span class="best-item-left-list-link-count">2</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Вопросы и ответы</a></li>		
								</ul>
							</div>
							<div class="best-item-right">
								<div class="best-item-right-name">Назарова Лариса, <span class="best-item-right-name-text">фотограф в Петропавловск-Камчатском</span></div>
								<div class="best-item-right-contacts">									
									<div class="best-item-right-contacts-socials">
										<a class="best-item-right-contacts-socials-link inst" href="#">инстаграм</a>
										<a class="best-item-right-contacts-socials-link vk" href="#">вконтакте</a>
									</div>
									<div class="best-item-right-contacts-phone">+7 (000) 123 45 67</div>
								</div>
								<!--<div class="best-item-right-price">
									<span class="best-item-right-price-span text">Стоимость: </span>
									<span class="best-item-right-price-span old">200 000р.</span>
									<span class="best-item-right-price-span new">170 000р.</span>
								</div>-->
								<div class="best-item-right-desc">
									Каждый момент свадьбы я переживаю вместе с вами, немного волнуясь на сборах, обнимая вас после регистрации, пуская слезу, когда идёт танец отца и дочери. Первую свадьбу я отснял ещё в 2011 году и до сих пор кайфую от свадеб. И отвечая на вопрос коллег: — нет, не надоело! Как может надоесть чуть ли не самое эмоциональное и трогательное событие в жизни людей, которое заряжает тебя энергией.
								</div>
								<div class="best-item-right-portfolio">
									<h3 class="best-item-right-portfolio-head">Примеры работ:</h3>
									<div class="best-item-right-portfolio-wrap portfolio-wrap">
										<a class="best-item-right-portfolio-item" href="img/portfolio/1<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/1<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/2<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/2<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/3<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/3<?= $expansion ?>" alt="">
										</a>										
									</div>
								</div>
								<div class="best-item-right-services">
									<h3 class="best-item-right-services-head">Услуги:</h3>
									<div class="best-item-right-services-wrap">
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/1<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/2<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Видеосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/3<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотосъемка свадьбы</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/4<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотокнига</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>										
									</div>
								</div>
							</div>
						</div>

						<div class="best-item">
							<a class="best-item-favorite" href="#">
								<i class="best-item-favorite-icon"></i>
								<span class="best-item-favorite-span">В избранное</span>
							</a>
							<div class="best-item-left">
								<div class="best-item-left-avatar">
									<img class="best-item-left-avatar-img" src="img/photographers/2<?= $expansion ?>" alt="">
									<!--<span class="best-item-left-avatar-pro">pro</span>-->
								</div>
								<!--<div class="best-item-left-contacts">
									<div class="best-item-left-contacts-phone">+7 (000) 123 45 67</div>
									<div class="best-item-left-contacts-socials">
										<a class="best-item-left-contacts-socials-link inst" href="#">инстаграм</a>
										<a class="best-item-left-contacts-socials-link vk" href="#">вконтакте</a>
									</div>
								</div>-->
								<div class="best-item-left-date">
									<select class="best-item-left-date-select" name="date">
										<option value="1" disabled selected>Свободные даты</option>
										<option value="2">26.09.2019</option>
										<option value="3">27.09.2019</option>
										<option value="4">28.09.2019</option>
										<option value="5">29.09.2019</option>
									</select>
								</div>
								<ul class="best-item-left-list">
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Отзывы невест - <span class="best-item-left-list-link-count">67</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Услуги Ларисы - <span class="best-item-left-list-link-count">23</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Акции и скидки - <span class="best-item-left-list-link-count">2</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Вопросы и ответы</a></li>		
								</ul>
							</div>
							<div class="best-item-right">
								<div class="best-item-right-name">Назарова Лариса, <span class="best-item-right-name-text">фотограф в Петропавловск-Камчатском</span></div>
								<div class="best-item-right-contacts">									
									<div class="best-item-right-contacts-socials">
										<a class="best-item-right-contacts-socials-link inst" href="#">инстаграм</a>
										<a class="best-item-right-contacts-socials-link vk" href="#">вконтакте</a>
									</div>
									<div class="best-item-right-contacts-phone">+7 (000) 123 45 67</div>
								</div>
								<!--<div class="best-item-right-price">
									<span class="best-item-right-price-span text">Стоимость: </span>
									<span class="best-item-right-price-span old">200 000р.</span>
									<span class="best-item-right-price-span new">170 000р.</span>
								</div>-->
								<div class="best-item-right-desc">
									Каждый момент свадьбы я переживаю вместе с вами, немного волнуясь на сборах, обнимая вас после регистрации, пуская слезу, когда идёт танец отца и дочери. Первую свадьбу я отснял ещё в 2011 году и до сих пор кайфую от свадеб. И отвечая на вопрос коллег: — нет, не надоело! Как может надоесть чуть ли не самое эмоциональное и трогательное событие в жизни людей, которое заряжает тебя энергией.
								</div>
								<div class="best-item-right-portfolio">
									<h3 class="best-item-right-portfolio-head">Примеры работ:</h3>
									<div class="best-item-right-portfolio-wrap portfolio-wrap">
										<a class="best-item-right-portfolio-item" href="img/portfolio/1<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/1<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/2<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/2<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/3<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/3<?= $expansion ?>" alt="">
										</a>										
									</div>
								</div>
								<div class="best-item-right-services">
									<h3 class="best-item-right-services-head">Услуги:</h3>
									<div class="best-item-right-services-wrap">
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/1<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/2<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Видеосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/3<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотосъемка свадьбы</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/4<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотокнига</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>										
									</div>
								</div>
							</div>
						</div>

						<div class="best-item">
							<a class="best-item-favorite" href="#">
								<i class="best-item-favorite-icon"></i>
								<span class="best-item-favorite-span">В избранное</span>
							</a>
							<div class="best-item-left">
								<div class="best-item-left-avatar">
									<img class="best-item-left-avatar-img" src="img/photographers/2<?= $expansion ?>" alt="">
									<!--<span class="best-item-left-avatar-pro">pro</span>-->
								</div>
								<!--<div class="best-item-left-contacts">
									<div class="best-item-left-contacts-phone">+7 (000) 123 45 67</div>
									<div class="best-item-left-contacts-socials">
										<a class="best-item-left-contacts-socials-link inst" href="#">инстаграм</a>
										<a class="best-item-left-contacts-socials-link vk" href="#">вконтакте</a>
									</div>
								</div>-->
								<div class="best-item-left-date">
									<select class="best-item-left-date-select" name="date">
										<option value="1" disabled selected>Свободные даты</option>
										<option value="2">26.09.2019</option>
										<option value="3">27.09.2019</option>
										<option value="4">28.09.2019</option>
										<option value="5">29.09.2019</option>
									</select>
								</div>
								<ul class="best-item-left-list">
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Отзывы невест - <span class="best-item-left-list-link-count">67</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Услуги Ларисы - <span class="best-item-left-list-link-count">23</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Акции и скидки - <span class="best-item-left-list-link-count">2</span></a></li>
									<li class="best-item-left-list-li"><a class="best-item-left-list-link" href="#">Вопросы и ответы</a></li>		
								</ul>
							</div>
							<div class="best-item-right">
								<div class="best-item-right-name">Назарова Лариса, <span class="best-item-right-name-text">фотограф в Петропавловск-Камчатском</span></div>
								<div class="best-item-right-contacts">									
									<div class="best-item-right-contacts-socials">
										<a class="best-item-right-contacts-socials-link inst" href="#">инстаграм</a>
										<a class="best-item-right-contacts-socials-link vk" href="#">вконтакте</a>
									</div>
									<div class="best-item-right-contacts-phone">+7 (000) 123 45 67</div>
								</div>
								<!--<div class="best-item-right-price">
									<span class="best-item-right-price-span text">Стоимость: </span>
									<span class="best-item-right-price-span old">200 000р.</span>
									<span class="best-item-right-price-span new">170 000р.</span>
								</div>-->
								<div class="best-item-right-desc">
									Каждый момент свадьбы я переживаю вместе с вами, немного волнуясь на сборах, обнимая вас после регистрации, пуская слезу, когда идёт танец отца и дочери. Первую свадьбу я отснял ещё в 2011 году и до сих пор кайфую от свадеб. И отвечая на вопрос коллег: — нет, не надоело! Как может надоесть чуть ли не самое эмоциональное и трогательное событие в жизни людей, которое заряжает тебя энергией.
								</div>
								<div class="best-item-right-portfolio">
									<h3 class="best-item-right-portfolio-head">Примеры работ:</h3>
									<div class="best-item-right-portfolio-wrap portfolio-wrap">
										<a class="best-item-right-portfolio-item" href="img/portfolio/1<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/1<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/2<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/2<?= $expansion ?>" alt="">
										</a>
										<a class="best-item-right-portfolio-item" href="img/portfolio/3<?= $expansion ?>">
											<img class="best-item-right-portfolio-item-img" src="img/portfolio/3<?= $expansion ?>" alt="">
										</a>										
									</div>
								</div>
								<div class="best-item-right-services">
									<h3 class="best-item-right-services-head">Услуги:</h3>
									<div class="best-item-right-services-wrap">
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/1<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/2<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Видеосъемка</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/3<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотосъемка свадьбы</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>
										<a class="best-item-right-services-item" href="#">
											<img class="best-item-right-services-item-img" src="img/services/4<?= $expansion ?>" alt="">
											<span class="best-item-right-services-item-name">Фотокнига</span>
											<span class="best-item-right-services-item-hidden">
												<span class="best-item-right-services-item-hidden-wrap">
													<span class="best-item-right-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
													<span class="best-item-right-services-item-hidden-link">Подробнее</span>
												</span>
											</span>
										</a>										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pagination">						
						<a class="pagination-arrow left" href="#">&lt;</a>
						<div class="pagination-wrap">
							<a class="pagination-link active" href="#">1</a>
							<a class="pagination-link" href="#">2</a>
							<a class="pagination-link" href="#">3</a>
							<a class="pagination-link" href="#">4</a>
							<span class="pagination-points">...</span>
							<a class="pagination-link" href="#">99</a>
						</div>
						<a class="pagination-arrow right" href="#">&gt;</a>						
					</div>
				</div>
			</div>
		</section>	
		
		<section id="blocks">
			<div class="container">
				<div class="content">
					<div class="blocks-item big second">
						<div class="blocks-item-wrap">								
							<h2 class="blocks-item-head">Свадебные фотографы в Петропавловск-Камчатском</h2>													
							<p class="blocks-item-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
							<a class="blocks-item-link" href="#">Присоединиться к фотографам</a>							
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
	<link rel="stylesheet" type="text/css" href="js/owlcarousel/dist/assets/owl.carousel.css?2209191335">  
    <link rel="stylesheet" type="text/css" href="js/owlcarousel/dist/assets/owl.theme.green.css">
    <link rel="stylesheet" type="text/css" href="js/lightgallery/dist/css/lightgallery.min.css">
	<link rel="stylesheet" type="text/css" href="js/kladr/jquery.kladr.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?2709191842">
	<script src="js/jquery/jquery-3.4.1.js"></script>
	<script src="js/kladr/jquery.kladr.min.js"></script>	
	<script src='js/owlcarousel/dist/owl.carousel.min.js'></script>
	<script src='js/lightgallery/dist/js/lightgallery.min.js'></script>
	<script src='js/lightgallery/modules/lg-video.min.js'></script>
	<script src="js/maskedinput/maskedinput.min.js"></script>
	<script src="js/my.js?2709191842"></script>		
</body>
</html>