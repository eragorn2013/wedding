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
		.best-item-favorite-icon, .card-all-left-images-item:after, .card-all-left-images-item-alternative:after,
		.best-item-right-contacts-phone:before{				
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
							<input class="header-logo-link-city" type="text" title="Введите название города" value="Наро-фоминск" placeholder="Введите название города">
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

		<section id="bread-crumbs">
			<div class="container">
				<div class="content">
					<a class="bread-crumbs-link" href="#">Фотографы Петропавловск-Камчатска</a> / 
					<a class="bread-crumbs-link" href="#">Николай Чернышёв</a>
				</div>
			</div>
		</section>		

		<section id="card-menu" class="services">
			<div class="container">
				<div class="content card-menu-content">
					<a class="card-menu-item" href="#">Отзывы (55)</a>
					<a class="card-menu-item" href="#">Услуги (7)</a>
					<a class="card-menu-item" href="#">Акции и скидки (3)</a>
					<a class="card-menu-item" href="#">Вопросы и ответы (11)</a>
					<a class="card-menu-item" href="#">Фото (3400)</a>
					<a class="card-menu-item" href="#">Видео (44)</a>
				</div>
			</div>
		</section>

		<section id="card-all">
			<div class="container">
				<div class="content card-all-content">
					<div class="card-all-left">
						<div class="card-all-left-services-main-pic" style="background-image: url(img/slides/1.webp);"></div>
						<div class="card-all-left-services-text">
							<h1 class="card-all-left-services-text-head head-left-h">Съемка свадьбы целый день</h1>	
							<div class="card-all-left-services-text-wrap">
								<p class="card-all-left-services-text-p"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
								<p class="card-all-left-services-text-p">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed qui.</p>
							</div>	
							<div class="card-all-left-services-text-actions">
								<select class="card-all-left-services-text-action-select" name="photographers">
									<option value="1">Проверить свою дату</option>
									<option value="2">Имя Фамилия</option>
									<option value="3">Имя Фамилия</option>
									<option value="4">Имя Фамилия</option>
									<option value="5">Имя Фамилия</option>
								</select>
								<a class="card-all-left-services-text-action-link" href="#">Заказать услугу за 12 500 р</a>
							</div>						
						</div>						
						<div class="card-all-left-portfolio">
							<h3 class="card-all-left-portfolio-head head-left-h">Примеры работ</h3>
							<div class="card-all-left-portfolio-wrap">
								<div class="card-all-left-portfolio-item">
									<img class="card-all-left-portfolio-item-img" src="img/services/1.webp" alt="">
								</div>
								<div class="card-all-left-portfolio-item">
									<img class="card-all-left-portfolio-item-img" src="img/services/2.webp" alt="">
								</div>
								<div class="card-all-left-portfolio-item">
									<img class="card-all-left-portfolio-item-img" src="img/services/3.webp" alt="">
								</div>
							</div>
							<div class="card-all-left-portfolio-links">
								<a class="card-all-left-portfolio-link" href="#">http://taplink.viewworks_1</a>
								<a class="card-all-left-portfolio-link" href="#">http://taplink.viewworks_2</a>
								<a class="card-all-left-portfolio-link" href="#">http://taplink.viewworks_3</a>
							</div>
						</div>

						<div class="card-all-left-comments">
							<h3 class="card-all-left-comments-head head-left">Отзывы об услуге Съемка свадьбы целый день</h3>
							<div class="card-all-left-comments-wrap">
								<div class="card-all-left-comments-item">
									<p class="card-all-left-comments-item-p">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugia.</p>
									<div class="card-all-left-comments-item-persona">
										<div class="card-all-left-comments-item-persona-avatar">
											<img class="card-all-left-comments-item-persona-avatar-img" src="img/comments/1.webp" alt="">
										</div>
										<span class='card-all-left-comments-item-persona-name'>Антон и Таня Моргуно</span>
									</div>
								</div>
								<div class="card-all-left-comments-item">
									<p class="card-all-left-comments-item-p">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugia.</p>
									<div class="card-all-left-comments-item-persona">
										<div class="card-all-left-comments-item-persona-avatar">
											<img class="card-all-left-comments-item-persona-avatar-img" src="img/comments/1.webp" alt="">
										</div>
										<span class='card-all-left-comments-item-persona-name'>Антон и Таня Моргуно</span>
									</div>
								</div>
								<div class="card-all-left-comments-item">
									<p class="card-all-left-comments-item-p">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugia.</p>
									<div class="card-all-left-comments-item-persona">
										<div class="card-all-left-comments-item-persona-avatar">
											<img class="card-all-left-comments-item-persona-avatar-img" src="img/comments/1.webp" alt="">
										</div>
										<span class='card-all-left-comments-item-persona-name'>Антон и Таня Моргуно</span>
									</div>
								</div>
							</div>
							<a class="card-all-left-comments-more" href="#">Показать все отзывы</a>
						</div>

						<div class="card-all-left-services">
							<h3 class="card-all-left-services-head head-left">Услуги:</h3>
							<div class="card-all-left-services-wrap">
								<a class="card-all-left-services-item" href="#">
									<img class="card-all-left-services-item-img" src="img/services/1<?= $expansion ?>" alt="">
									<span class="card-all-left-services-item-name">Фотосъемка</span>
									<span class="card-all-left-services-item-hidden">
										<span class="card-all-left-services-item-hidden-wrap">
											<span class="card-all-left-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
											<span class="card-all-left-services-item-hidden-link">Подробнее</span>
										</span>
									</span>
								</a>
								<a class="card-all-left-services-item" href="#">
									<img class="card-all-left-services-item-img" src="img/services/2<?= $expansion ?>" alt="">
									<span class="card-all-left-services-item-name">Фотосъемка</span>
									<span class="card-all-left-services-item-hidden">
										<span class="card-all-left-services-item-hidden-wrap">
											<span class="card-all-left-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
											<span class="card-all-left-services-item-hidden-link">Подробнее</span>
										</span>
									</span>
								</a>
								<a class="card-all-left-services-item" href="#">
									<img class="card-all-left-services-item-img" src="img/services/3<?= $expansion ?>" alt="">
									<span class="card-all-left-services-item-name">Фотосъемка</span>
									<span class="card-all-left-services-item-hidden">
										<span class="card-all-left-services-item-hidden-wrap">
											<span class="card-all-left-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
											<span class="card-all-left-services-item-hidden-link">Подробнее</span>
										</span>
									</span>
								</a>
								<a class="card-all-left-services-item" href="#">
									<img class="card-all-left-services-item-img" src="img/services/4<?= $expansion ?>" alt="">
									<span class="card-all-left-services-item-name">Фотосъемка</span>
									<span class="card-all-left-services-item-hidden">
										<span class="card-all-left-services-item-hidden-wrap">
											<span class="card-all-left-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
											<span class="card-all-left-services-item-hidden-link">Подробнее</span>
										</span>
									</span>
								</a>
								<a class="card-all-left-services-item" href="#">
									<img class="card-all-left-services-item-img" src="img/services/1<?= $expansion ?>" alt="">
									<span class="card-all-left-services-item-name">Фотосъемка</span>
									<span class="card-all-left-services-item-hidden">
										<span class="card-all-left-services-item-hidden-wrap">
											<span class="card-all-left-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
											<span class="card-all-left-services-item-hidden-link">Подробнее</span>
										</span>
									</span>
								</a>
								<a class="card-all-left-services-item" href="#">
									<img class="card-all-left-services-item-img" src="img/services/2<?= $expansion ?>" alt="">
									<span class="card-all-left-services-item-name">Фотосъемка</span>
									<span class="card-all-left-services-item-hidden">
										<span class="card-all-left-services-item-hidden-wrap">
											<span class="card-all-left-services-item-hidden-p">от 30000р. за 10 часовой рабочий день</span>
											<span class="card-all-left-services-item-hidden-link">Подробнее</span>
										</span>
									</span>
								</a>										
							</div>
						</div>
						
					</div>						
					<div class="card-all-right">
						<div class="card-all-right-item">
							<div class="card-all-right-item-avatar">
								<img class="card-all-right-item-avatar-img" src="img/photographers/2.webp" alt="">
								<span class="card-all-right-item-avatar-pro">pro</span>								
							</div>
							<h3 class="card-all-right-item-name">Николай Чернышов</h3>
							<a class="card-all-right-item-favorite" href="#"><i class="card-all-right-item-favorite-icon"></i>В избранное</a>
							<div class="card-all-right-item-phone">+7 (000) 123 45 67</div>
							<div class="card-all-right-item-socials">
								<a class="card-all-right-item-socials-icon inst" href="#">Инстаграм</a>
								<a class="card-all-right-item-socials-icon vk" href="#">Вконтакте</a>
							</div>
							<div class="card-all-right-item-write">
								<a class="card-all-right-item-write-link" href="#">
									<i class="card-all-right-item-write-link-icon wb"></i>
									<span class="card-all-right-item-write-link-span">Написать в Вайбер</span>
								</a>
								<a class="card-all-right-item-write-link" href="#">
									<i class="card-all-right-item-write-link-icon wp"></i>
									<span class="card-all-right-item-write-link-span">Написать в Ватсап</span>
								</a>
							</div>	
							<div class="card-all-right-item-submit">
								<p class="card-all-right-item-submit-text">Свободен на 23 февраля 2020</p>
								<a class="card-all-right-item-submit-link" href="#">Проверить свою дату</a>
							</div>						
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
    <link rel="stylesheet" type="text/css" href="js/lightgallery/dist/css/lightgallery.min.css">
	<link rel="stylesheet" type="text/css" href="js/kladr/jquery.kladr.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?2709191842">
	<script src="js/jquery/jquery-3.4.1.js"></script>
	<script src="js/kladr/jquery.kladr.min.js"></script>	
	<script src='js/owlcarousel/owl.carousel.min.js'></script>
	<script src='js/lightgallery/dist/js/lightgallery.min.js'></script>
	<script src='js/lightgallery/modules/lg-video.min.js'></script>
	<script src="js/maskedinput/maskedinput.min.js"></script>
	<script src="js/my.js?2709191842"></script>		
</body>
</html>