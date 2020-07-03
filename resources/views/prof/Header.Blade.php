<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>UI</title>
	<!-- Scripts  -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="js/vueui.js"></script>
	<!-- Fonts -->

	<!-- Styles -->
	<link href="css/style.css" rel="stylesheet">
	<!—[if IE]>
	<script>
		document.createElement('header');
		document.createElement('nav'); 
		document.createElement('section');
		document.createElement('article');
		document.createElement('aside');
		document.createElement('footer');
	</script>
	<![endif]—>
</head>
<body>
	<div id="app">
		<header>
			<content>
				<div class="logo">ПРОФОБРАЗОВАНИЕ <a href="#2" class="cover-button"></a></div>
				<nav class="main-navigate" id="test">
					<div class="main-navigate__gamburger"  v-on:click="isHiddenNavLi = !isHiddenNavLi"></div>
					<div class="main-navigate__menu" v-show="isHiddenNavLi">
						<ul>
							<li><a href="#">Главная</a></li>
							<li><a href="#">Новости</a></li>
							<li><a href="#">Направления</a></li>
							<li><a href="#">Комиссия</a></li>
							<li><a href="#">Вход</a></li>
						</ul>
					</div>
				</nav>
			</content>
		</header>