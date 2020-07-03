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

  <div class="row mt-4 p-4">
    <div class="col-md-12 mx-auto">
      <h2>Новые обращения / <a href="">Обработанные</a></h2>
      
      <div class="table-responsive mt-4">  
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Дата</th>
              <th>Статус</th>
              <th>Автор</th>
              <th>Адрес обращения</th>
              <th>Тема </th>
              <th>Раздел</th>
              <th>Проблема</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>12.4.2020 12:43</td>
              <th>Новое</th>
              <td><a href="">Петров И.</a></td>
              <td>г Архангельск ул. воскресенская д 100 </td>
              <td>Отсутствие люка, решетки канализации ...</td>
              <td>АВТОМОБИЛЬНЫЕ ДОРОГИ</td>
              <td>Необходима установка / замена дорожных знаков</td>
            </tr>
            <tr>
              <td>12.4.2020 12:44</td>
              <th>Новое</th>
              <td><a href="">Смирнов О.</a></td>
              <td>г Архангельск ул. воскресенская д 100 </td>
              <td>Отсутствие люка, решетки канализации...</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>12.4.2020 12:44</td>
              <th>Запланировано</th>
              <td><a href="">Смирнов О.</a></td>
              <td>г Архангельск ул. воскресенская д 100 </td>
              <td>Отсутствие люка, решетки канализации...</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>12.4.2020 12:44</td>
              <th>Новое</th>
              <td><a href="">Смирнов О.</td>
              <td>г Архангельск ул. воскресенская д 100 </td>
              <td>Отсутствие люка, решетки канализации...</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
         
          </tbody>
        </table>
      </div>
    </div>
  </div>

    <div class="row mt-4 p-4">
    <div class="col-md-12 mx-auto">
      <h2>Обработанные / <a href="">Новые обращения</a></h2>
      
      <div class="table-responsive mt-4">  
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Дата</th>
              <th>Статус</th>
              <th>Автор</th>
              <th>Адрес обращения</th>
              <th>Тема </th>
              <th>Раздел</th>
              <th>Проблема</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>12.4.2020 12:43</td>
              <th>Мотивированы отказ</th>
              <td>Петров И.</td>
              <td>г Архангельск ул. воскресенская д 100 </td>
              <td>Отсутствие люка, решетки канализации ...</td>
              <td>АВТОМОБИЛЬНЫЕ ДОРОГИ</td>
              <td>Необходима установка / замена дорожных знаков</td>
            </tr>
            <tr>
              <td>12.4.2020 12:44</td>
              <th>Исполнено</th>
              <td>Смирнов О.</td>
              <td>г Архангельск ул. воскресенская д 100 </td>
              <td>Отсутствие люка, решетки канализации...</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>12.4.2020 12:44</td>
              <th>В работе</th>
              <td>Смирнов О.</td>
              <td>г Архангельск ул. воскресенская д 100 </td>
              <td>Отсутствие люка, решетки канализации...</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
            <tr>
              <td>12.4.2020 12:44</td>
              <th>Отклонено</th>
              <td>Смирнов О.</td>
              <td>г Архангельск ул. воскресенская д 100 </td>
              <td>Отсутствие люка, решетки канализации...</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>


            <tr>
              <td>12.4.2020 12:44</td>
              <th>Запланировано</th>
              <td>Смирнов О.</td>
              <td>г Архангельск ул. воскресенская д 100 </td>
              <td>Отсутствие люка, решетки канализации...</td>
              <td>adipiscing</td>
              <td>elit</td>
            </tr>
         
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
