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
		.best-item-favorite-icon, .card-all-left-images-item:after, .best-item-right-contacts-phone:before{				
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

		<section id="card-slider">
			<div class="container bread-crumbs-container">
				<span class="card-slide-arrow prev">&lt;</span>
				<span class="card-slide-arrow next">&gt;</span>
				<div class="content owl-carousel owl-theme">
					<div class="card-slider-slide"><img class="card-slider-slide-img" src="img/slides/1.webp" alt=""></div>
					<div class="card-slider-slide"><img class="card-slider-slide-img" src="img/slides/1.webp" alt=""></div>
					<div class="card-slider-slide"><img class="card-slider-slide-img" src="img/slides/1.webp" alt=""></div>
				</div>
			</div>
		</section>

		<section id="card-menu">
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
						<div class="card-all-left-desc">
							<p class="card-all-left-desc-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
						</div>
						<div class="card-all-left-images">
							<h3 class="card-all-left-images-head head-left">Фото в портфолио</h3>
							<div class="card-all-left-images-wrap portfolio-wrap">
								<a class="card-all-left-images-item" href="img/portfolio/1<?= $expansion ?>">
									<img class="card-all-left-images-item-img" src="img/portfolio/1<?= $expansion ?>" alt="">
								</a>
								<a class="card-all-left-images-item" href="img/portfolio/2<?= $expansion ?>">
									<img class="card-all-left-images-item-img" src="img/portfolio/2<?= $expansion ?>" alt="">
								</a>
								<a class="card-all-left-images-item" href="img/portfolio/3<?= $expansion ?>">
									<img class="card-all-left-images-item-img" src="img/portfolio/3<?= $expansion ?>" alt="">
								</a>
								<a class="card-all-left-images-item" href="img/portfolio/4<?= $expansion ?>">
									<img class="card-all-left-images-item-img" src="img/portfolio/4<?= $expansion ?>" alt="">
								</a>
								<a class="card-all-left-images-item" href="img/portfolio/5<?= $expansion ?>">
									<img class="card-all-left-images-item-img" src="img/portfolio/5<?= $expansion ?>" alt="">
								</a>
								<a class="card-all-left-images-item" href="img/portfolio/6<?= $expansion ?>">
									<img class="card-all-left-images-item-img" src="img/portfolio/6<?= $expansion ?>" alt="">
								</a>
							</div>
							<a class="card-all-left-images-more" href="#">Показать все</a>
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
						<div class="card-all-left-comments">
							<h3 class="card-all-left-comments-head head-left">Отзывы</h3>
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
						<div class="card-all-left-questions">
							<h3 class="card-all-left-questions-head head-left">Вопросы и ответы</h3>
							<div class="card-all-left-questions-wrap">
								<div class="card-all-left-questions-item">
									<div class="card-all-left-questions-item-text question">Ut wisi enim ad minim veniam, quis</div>
									<div class="card-all-left-questions-item-text answer">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse, vel illum dolore.</div>
								</div>
								<div class="card-all-left-questions-item">
									<div class="card-all-left-questions-item-text question">Ut wisi enim ad minim veniam, quis</div>
									<div class="card-all-left-questions-item-text answer">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse, vel illum dolore.</div>
								</div>
								<div class="card-all-left-questions-item">
									<div class="card-all-left-questions-item-text question">Ut wisi enim ad minim veniam, quis</div>
									<div class="card-all-left-questions-item-text answer">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse, vel illum dolore.</div>
								</div>
							</div>	
							<a class="card-all-left-questions-more" href="#">Показать все ответы</a>						
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