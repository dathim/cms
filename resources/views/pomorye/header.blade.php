<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Моё поморье</title>
	<!-- Scripts  -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="http://scss.test/js/bootstrap.min.js" defer></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=3063a09e-66fa-4e1a-b6e5-c291f139a5aa" type="text/javascript"></script>
	<script src="http://scss.test/js/lightbox.js" defer></script>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;300;400;500&display=swap" rel="stylesheet">
	<!-- Styles -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">
</head>
<body>

	
<div class="wrap">
  	<nav class="navbar navbar-expand-md navbar-light bg-white heder__mainmenu">
		<div class="container">
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse justify-content-center" id="navbarSupportedContent" style="">
				<ul class="navbar-nav  heder__ul_items">
					<li class="nav-item   active  ">
						<a class="nav-link" href="/">Главная</a>
					</li>
					
					<li class="nav-item ">
						<a class="nav-link " href="/statistics/">Статистика</a>
					</li>

					<li class="nav-item ">
						<a class="nav-link " href="/budget/">Инициативное бюджетирование</a>
					</li>

					<li class="nav-item ">
						<a class="nav-link " href="/polls/">Опросы</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link " href="https://maps29.ru/map/zhkh/" target="_blank">Аварийные дома</a>
					</li>
					

					<li class="nav-item ">
						<a class="nav-link " href="/auth/">Личный кабинет</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
			
	<div class="heder ">  <!-- header-mini-->
		<div class="heder__leftimg">
			<div class="heder__logo-block">
			  
					<div class="heder__logo"><img src="{{ asset('gfx/icons/gerb_arhangelskoy_oblasti_2.png') }}"></div>
					<div class="heder__logo-text">
						<h1>МОЙ СЕВЕР</h1>
						<p>ПРОЕКТ ДЛЯ ТЕХ КТО УЧАВСТВУЕТ В РАЗВИТИИ АРХАНГЕЛЬСКОЕ ОБЛАСТИ МЕНЯЕТ ЖИЗНЬ ОБЛАСТИ К ЛУЧШЕМУ</p>
					</div>
				<a href="#">          </a>
			</div>

		</div>
		<div class="heder__content">
			
		   <div class="header__body">
				<div class="header__page-subject">
					<p>Народный контроль – это информационная система региона,<br> созданная для взаимодействия исполнительных органов государственной власти, органов местного самоуправления муниципальных образований, окружных организаций и управляющих компаний с населением Архангельской области</p>
					<hr>
					<p>Как это работает?</p>
				</div>
				<div class="header__icons">
					<div class="header__icons-reg"><a href="/auth/"><span>Зарегистрируйтесь</span></a></div>
					<div class="header__icons-write"><a href="/personal/"><span>Напишите сообщение</span></a></div>
					<div class="header__icons-voite"><a href="#"><span>Оцените изменения</span></a></div>
				</div>
			</div>
		</div>
	</div>

