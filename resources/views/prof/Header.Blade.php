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
	<script src="/js/vueui.js"></script>

	<script type="text/x-template" id="modal-template">
		<transition name="modal">
		  <div class="modal-mask">
			 <div class="modal-wrapper">
				<div class="modal-container">

				  <div class="modal-header">
					<div class="modal-close" @click="$emit('close')"></div>
					<slot name="header">
						<h2>Вход</h2>
					 </slot>
				  </div>

				  <div class="modal-body">
					 <slot name="body">
					 	<form>
							<div class="specform__formitem">
								<input type="text" placeholder="Логин" required="">
							</div>
							<div class="specform__formitem ">
								<input type="password" required="" placeholder="Пароль">
							</div>
							<p><a href="#forgot" @click="$emit('fuckingfunction')">Восстановить пароль</a></p>
							<div  class="specform__formitem specform__formitem-submit">
								<button type="submit">Вход</button> 
							</div>
						</form>
						<form style="display:none">
							<div class="specform__formitem">
								<input type="text" placeholder="Логин" required="">
							</div>
							<div class="specform__formitem ">
								<input type="password" required="" placeholder="Пароль">
							</div>
							<p><a href="#forgot">Восстановить пароль</a></p>
							<div  class="specform__formitem specform__formitem-submit">
								<button type="submit">Вход</button> 
							</div>
						</form>
					 </slot>
				  </div>
				</div>
			 </div>
		  </div>
		</transition>
	 </script>
	<!--<script src="js/vuelidate.js"></script>-->

	<!-- Fonts -->

	<!-- Styles -->
	<link href="/css/style.css" rel="stylesheet">
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
		<modal v-if="showModal" @close="showModal = false"></modal>
		<header>
			<content>
				<div class="logo">КАДРЫ ДЛЯ ЦИФРОВОЙ ЭКОНОМИКИ <span>АРХАНГЕЛЬСКАЯ ОБЛАСТЬ</span> <a href="#2" class="cover-button"></a></div>
				<nav class="main-navigate" id="test">
					<div class="main-navigate__gamburger"  v-on:click="isHiddenNavLi = !isHiddenNavLi"></div>
					<div class="main-navigate__menu" v-show="isHiddenNavLi">
						<ul>
							<li><a href="#">Главная</a></li>
							<li><a href="#news" @click="to_forgot()">Новости</a></li>
							<li><a href="#">Направления</a></li>
							<li><a href="#">Комиссия</a></li>
							<li><a href="#regform" class="scroll-to">Регистрация</a></li>
							<li><a href="#"  @click="showModal = true">Вход</a></li>

						</ul>
					</div>
				</nav>
			</content>
		</header>