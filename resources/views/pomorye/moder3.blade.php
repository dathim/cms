<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Моё поморье</title>
	<!-- Scripts  -->
	<script src="http://scss.test/js/bootstrap.min.js" defer></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=3063a09e-66fa-4e1a-b6e5-c291f139a5aa" type="text/javascript"></script>
	

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;300;400;500&display=swap" rel="stylesheet">
	<!-- Styles -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">
</head>
<body>

	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
		<h5 class="my-0 mr-md-auto font-weight-normal">Моё поморье</h5>
		<nav class="my-2 my-md-0 mr-md-3">
			<a class="p-2 text-dark" href="#">На сайт</a>
			<a class="p-2 text-dark" href="#">Справка</a>
			<a class="p-2 text-dark" href="#">Правила модерации</a>
		</nav>
		<a class="btn btn-outline-primary" href="#">Выход</a>
	</div>

	

	<div class="row  ">
		<div class="col-md-12 mx-auto">
			
			<div class="row  p-4">
				<div class="col-md-12">
					<h2><a href="">Новые обращения </a>/ <a href="">Обработанные</a></h2>
					
				</div>
				<div class="col-md-3">
					<h4>Константин Константинович Канстантинопольский</h4>
					<p>Дата обращения: 12.11.2020</p>
					<p>Раздел обращения: Автомобильные дороги</p>
					<p>Подраздел обращения: Дорожные знаки</p>
					<p>Тема обращения: Криврой дорожный знак</p>
					<p>Стстус: Новое</p>
					<div style="    height: 300px;"class="singlereport__map mt-2" id="map"></div>


					<div class="mt-3">
						<h3>Перенаправить:</h3>
						<form class="needs-validation" novalidate="">
							<div class="row mt-4">
							 <div class="col-md-12 mb-3">
								<label for="state">Министерство</label>
								<select class="custom-select d-block w-100" id="state" required="">
									<option value="">Choose...</option>
									<option>California</option>
								</select>
							</div>
							<button type="button"  type="submit" class="btn btn-warning mx-auto">Перенаправить</button>
						</div>
					</form>
					
					<h3>Мотивированый отказ:</h3>
					<form class="needs-validation" novalidate="">
						<div class="row mt-3">
						 <div class="col-md-12 mb-3">
							<label for="state">Причина отказа</label>
							<textarea class="form-control" id="response" required=""></textarea>
							<div class="invalid-feedback">
								Please provide a valid state.
							</div>
						</div>
						
						<button type="button"  type="submit" class="btn btn btn-danger mx-auto">Направить отказ</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6">
			<h3>Тема обращения: <b> Sed molestie metus eget lectus vulputate consequat.</b></h3>
			<h3>Текст обращения:</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam egestas metus ex, in lobortis nibh elementum et. Suspendisse blandit dictum ante ac commodo. Fusce vel lacinia leo, sit amet ornare mi. Curabitur consectetur eget dolor in accumsan. Mauris eu congue dolor. Proin arcu enim, laoreet in tempus quis, egestas vel diam. In eget cursus risus, id euismod lacus. Etiam dignissim nunc orci, eu aliquet mauris malesuada nec. Sed molestie metus eget lectus vulputate consequat. Nullam eget facilisis turpis. Vestibulum condimentum eros in velit efficitur, et imperdiet turpis efficitur. Nulla facilisi. Duis at diam ut odio volutpat rutrum. Ut enim mi, aliquet id pellentesque sed, consequat ac neque. Quisque mattis tellus at metus lacinia, quis commodo felis volutpat. Phasellus faucibus justo facilisis dolor pellentesque egestas.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam egestas metus ex, in lobortis nibh elementum et. Suspendisse blandit dictum ante ac commodo. Fusce vel lacinia leo, sit amet ornare mi. Curabitur consectetur eget dolor in accumsan. Mauris eu congue dolor. Proin arcu enim, laoreet in tempus quis, egestas vel diam. In eget cursus risus, id euismod lacus. Etiam dignissim nunc orci, eu aliquet mauris malesuada nec. Sed molestie metus eget lectus vulputate consequat. Nullam eget facilisis turpis. Vestibulum condimentum eros in velit efficitur, et imperdiet turpis efficitur. Nulla facilisi. Duis at diam ut odio volutpat rutrum. Ut enim mi, aliquet id pellentesque sed, consequat ac neque. Quisque mattis tellus at metus lacinia, quis commodo felis volutpat. Phasellus faucibus justo facilisis dolor pellentesque egestas.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam egestas metus ex, in lobortis nibh elementum et. Suspendisse blandit dictum ante ac commodo. Fusce vel lacinia leo, sit amet ornare mi. Curabitur consectetur eget dolor in accumsan. Mauris eu congue dolor. Proin arcu enim, laoreet in tempus quis, egestas vel diam. In eget cursus risus, id euismod lacus. Etiam dignissim nunc orci, eu aliquet mauris malesuada nec. Sed molestie metus eget lectus vulputate consequat. Nullam eget facilisis turpis. Vestibulum condimentum eros in velit efficitur, et imperdiet turpis efficitur. Nulla facilisi. Duis at diam ut odio volutpat rutrum. Ut enim mi, aliquet id pellentesque sed, consequat ac neque. Quisque mattis tellus at metus lacinia, quis commodo felis volutpat. Phasellus faucibus justo facilisis dolor pellentesque egestas.</p>
			<div class="col-md-12 mt-4 ">
				<img style="max-height: 100px;" src="https://s0.rbk.ru/v6_top_pics/media/img/7/65/755540270893657.jpg" class="img-fluid img-thumbnail " alt="...">
				<img style="max-height: 100px;" src="https://cs11.pikabu.ru/post_img/2019/02/04/12/1549312329147951618.jpg" class="img-fluid img-thumbnail" alt="...">
				<img style="max-height: 100px;" src="https://cat-story.ru/wp-content/uploads/2019/09/%D0%9A%D0%B0%D0%BA-%D0%BA%D1%83%D1%81%D0%B0%D1%8E%D1%82%D1%81%D1%8F-%D0%BA%D0%BE%D1%82%D0%B8%D0%BA%D0%B8.-%D0%9A%D1%83%D1%81%D1%8C-%D1%80%D0%B0%D0%B7%D0%BD%D0%BE%D0%B2%D0%B8%D0%B4%D0%BD%D0%BE%D1%81%D1%82%D0%B84-660x330.jpg" class="img-fluid img-thumbnail" alt="...">
				<img style="max-height: 100px;" src="https://navigato.ru/content/news/image18553.jpg" class="img-fluid img-thumbnail" alt="...">
				<img style="max-height: 100px;" src="https://s11.stc.all.kpcdn.net/share/i/12/10896223/inx960x640.jpg" class="img-fluid img-thumbnail" alt="...">
			</div>
			<div class="mt-3">
				<h3>Ответ:</h3>
				<form class="needs-validation" novalidate="">
					<div class="row mt-4">
					 <div class="col-md-12 mb-3">
						<label for="response">Ваш ответ для пользователя Иванов Иван Иванович:</label>
						<textarea class="form-control" id="response" required=""></textarea>
					</div>
					
					<button type="button"  type="submit" class="btn btn-success mx-auto">Направить ответ</button>
				</div>
			</form>
		</div>
	</div>

	<div class="col-md-3 listhistoru">
	 <ul class="list-group mb-3">
		<li class="list-group-item d-flex justify-content-between lh-condensed">
			<div>
				<h6 class="my-0">Добавлено</h6>
				<small class="text-muted">Новое</small>
			</div>
			<span class="text-muted">12.11.2020 12:34</span>
		</li>
		<li class="list-group-item d-flex justify-content-between lh-condensed">
			<div>
				<h6 class="my-0">Назначен ответственный</h6>
				<small class="text-muted">В работе</small>
				<span class="text-muted">12.11.2020 13:34</span>
			</div>

			<div class="singlereport__attache">
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
			</div>
		</li>

		<li class="list-group-item d-flex justify-content-between lh-condensed">
			<div>
				<h6 class="my-0">Назначен ответственный</h6>
				<small class="text-muted">В работе</small>
			</div>
			<span class="text-muted">12.11.2020 17:34</span>
		</li>

		<li class="list-group-item d-flex justify-content-between lh-condensed">
			<div>
				<h6 class="my-0">Назначен ответственный</h6>
				<small class="text-muted">В работе</small>
				<span class="text-muted">12.11.2020 13:34</span>
			</div>

			<div class="singlereport__attache">
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
			</div>
		</li>

		<li class="list-group-item d-flex justify-content-between lh-condensed">
			<div>
				<h6 class="my-0">Назначен ответственный</h6>
				<small class="text-muted">В работе</small>
			</div>
			<span class="text-muted">12.11.2020 17:34</span>
		</li>

		<li class="list-group-item d-flex justify-content-between lh-condensed">
			<div>
				<h6 class="my-0">Назначен ответственный</h6>
				<small class="text-muted">В работе</small>
				<span class="text-muted">12.11.2020 13:34</span>
			</div>

			<div class="singlereport__attache">
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
				<a href="https://navigato.ru/content/news/image18553.jpg" data-lightbox="01.01.1970 / 00:00"><img src="https://navigato.ru/content/news/image18553.jpg"></a>
			</div>
		</li>

		<li class="list-group-item d-flex justify-content-between lh-condensed">
			<div>
				<h6 class="my-0">Назначен ответственный</h6>
				<small class="text-muted">В работе</small>
			</div>
			<span class="text-muted">12.11.2020 17:34</span>
		</li>
		
		
	</ul>
	
</div>


</div>



<!--
			<div class="row  p-4">
				
				<div class="col-md-3">

					<h3>Перенаправить:</h3>
					<form class="needs-validation" novalidate="">
						<div class="row mt-4">
							 <div class="col-md-12 mb-3">
								<label for="state">Министерство</label>
								<select class="custom-select d-block w-100" id="state" required="">
									<option value="">Choose...</option>
									<option>California</option>
								</select>
							</div>
						 <button type="button"  type="submit" class="btn btn-warning mx-auto">Перенаправить</button>
						</div>
					</form>

					<h3>Мотивированый отказ:</h3>
					<form class="needs-validation" novalidate="">
						<div class="row mt-3">
							 <div class="col-md-12 mb-3">
								<label for="state">Причина отказа</label>
								<textarea class="form-control" id="response" required=""></textarea>
								<div class="invalid-feedback">
									Please provide a valid state.
								</div>
							</div>
					 
						 <button type="button"  type="submit" class="btn btn btn-danger mx-auto">Направить отказ</button>
						</div>
					</form>
				</div>


				<div class="col-md-9">
					<h3>Ответ:</h3>
					<form class="needs-validation" novalidate="">
						<div class="row mt-4">
							 <div class="col-md-12 mb-3">
								<label for="response">Ваш ответ для пользователя Иванов Иван Иванович:</label>
								<textarea class="form-control" id="response" required=""></textarea>
							</div>
							
						 <button type="button"  type="submit" class="btn btn-success mx-auto">Направить ответ</button>
						</div>
					</form>
				</div>

			 </div>
				 
		 
		 
		</div>
	</div>
-->

<script type="text/javascript">
	var myMap;
	document.addEventListener("DOMContentLoaded", function(event) { 
	//do work
				// Дождёмся загрузки API и готовности DOM.
				ymaps.ready(function () {
					var myMap = new ymaps.Map('map', {
						center: [64.5416905335426,40.529085334602435],
						zoom: 5,
						controls: ['smallMapDefaultSet']
					}),
					myGeoObject = new ymaps.GeoObject({
				// Описание геометрии.
				geometry: {
					type: "Point",
					coordinates: [63.33559725386257,39.95779627210243]
				},
				
			});
					myMap.geoObjects.add(myGeoObject);
//            ymaps.geocode(' Архангельск Площадь ленина 3', {
//                results: 1
//            }).then(function (res) {
//                // Выбираем первый результат геокодирования.
//                var firstGeoObject = res.geoObjects.get(0),
//                    // Координаты геообъекта.
//                    coords = firstGeoObject.geometry.getCoordinates(),
//                    // Область видимости геообъекта.
//                    bounds = firstGeoObject.properties.get('boundedBy');
//
//                    firstGeoObject.options.set('preset', 'islands#darkBlueDotIconWithCaption');
//                // Получаем строку с адресом и выводим в иконке геообъекта.
//                firstGeoObject.properties.set('iconCaption', firstGeoObject.getAddressLine());
//
//                // Добавляем первый найденный геообъект на карту.
//                myMap.geoObjects.add(firstGeoObject);
//                // Масштабируем карту на область видимости геообъекта.
//                myMap.setBounds(bounds, {
//                    // Проверяем наличие тайлов на данном масштабе.
//                    checkZoomRange: true
//                });
//            });
});
			});
		</script>


	</body>
	</html>
