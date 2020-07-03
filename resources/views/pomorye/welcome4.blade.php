@include('pomorye.header')

<script type="text/javascript">
    var myMap;
    document.addEventListener("DOMContentLoaded", function(event) { 
  //do work
        // Дождёмся загрузки API и готовности DOM.
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                center: [64.5416905335426,40.529085334602435],
                zoom: 6,
                controls: ['smallMapDefaultSet']
            });

            ymaps.geocode(' Архангельск Площадь ленина 3', {
                results: 1
            }).then(function (res) {
                // Выбираем первый результат геокодирования.
                var firstGeoObject = res.geoObjects.get(0),
                    // Координаты геообъекта.
                    coords = firstGeoObject.geometry.getCoordinates(),
                    // Область видимости геообъекта.
                    bounds = firstGeoObject.properties.get('boundedBy');

                    firstGeoObject.options.set('preset', 'islands#darkBlueDotIconWithCaption');
                // Получаем строку с адресом и выводим в иконке геообъекта.
                firstGeoObject.properties.set('iconCaption', firstGeoObject.getAddressLine());

                // Добавляем первый найденный геообъект на карту.
                myMap.geoObjects.add(firstGeoObject);
                // Масштабируем карту на область видимости геообъекта.
                myMap.setBounds(bounds, {
                    // Проверяем наличие тайлов на данном масштабе.
                    checkZoomRange: true
                });
            });
        });
    });
</script>
<div class="content">

    <div class="breadcrumbs">
        <span class="breadcrumbs__item"><a href="">Главная</a></span> /
        <span class="breadcrumbs__item"><a href="">Бизнес и экономика</a></span> /
        <span class="breadcrumbs__item"><a href="">Подкатегория</a></span> 
    </div>

    <div class="singlereport">
        <div class="singlereport__report">

            <div class="singlereport__header">
                <div class="singlereport__header-name">Максим Иванов</div>
                <div class="singlereport__header-date">
                    <span>23.12.2020 / 08:34 </span>
                    <div class="singlereport__status-inprocess"></div>
                </div>

            </div>
            <div class="singlereport__photo">
                <div class="singlereport__pic">
                    <img src="./gfx/pic/asset-11.png" >
                </div>
                <div class="singlereport__map" id="map"></div>
            </div> 
            <div class="singlereport__subject">
                <h3>Продовольственные ярмарки будут работать каждые выходные дни?</h3>
                <hr />
                <h4>Адрес:</h4>
                <p>г. Архангельск ул. Логинова 34
                </p>
                <h4>Вопрос:</h4>
                <p>Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни
                </p>
            </div>    

        </div>

        <div class="singlereport__report">
            <div class="singlereport__header">
                <div class="singlereport__header-name">Назначен ответствнный:</div>
                <div class="singlereport__header-date">
                    <span>23.12.2020 / 08:34 </span>
                </div>
            </div>
            <div class="singlereport__subject">
                <h3>Иванов Иван Иванович</h3> 
            </div>    
        </div>

        <div class="singlereport__report">

            <div class="singlereport__header">
                <div class="singlereport__header-name">Иванов Иван Иванович</div>
                <div class="singlereport__header-date">
                    <span>23.12.2020 / 08:34 </span>
                    <div class="singlereport__status-finished"></div>
                </div>
            </div>

            <div class="singlereport__subject">
                <h4>Ответ:</h4>
                <p>Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни
                </p>
            </div>    
        </div>


         <div class="singlereport__report">

            <div class="singlereport__header">
                <div class="singlereport__header-name">Иванов Иван Иванович</div>
                <div class="singlereport__header-date">
                    <span>23.12.2020 / 08:34 </span>
                    <div class="singlereport__status-finished"></div>
                </div>
            </div>

            <div class="singlereport__subject">
                <h4>Ответ:</h4>
                <p>Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни Продовольственные ярмарки будут работать будут работать будут работать будут работать будут работать  каждые выходные дни
                </p>
                <div class="singlereport__attache">
                  
                        <a href="https://s0.rbk.ru/v6_top_pics/media/img/7/65/755540270893657.jpg" data-lightbox="roadtrip"><img src="https://s0.rbk.ru/v6_top_pics/media/img/7/65/755540270893657.jpg"></a>
                        <a href="https://s0.rbk.ru/v6_top_pics/media/img/7/65/755540270893657.jpg" data-lightbox="roadtrip"><img src="https://s0.rbk.ru/v6_top_pics/media/img/7/65/755540270893657.jpg"></a>
                       
                        
                        
               
                    
                </div>
            </div>    
        </div>


        <div class="singlereport__report">
         
            <div class="singlereport__header">
                <div class="singlereport__header-name">Ответ</div>
                <div class="singlereport__header-date">
                   
                   
                </div>
            </div>
            
            <div class="singlereport__subject">
                             <form>
                <div class="singlereport__body">
                 
                    <div class="singlereport__formitem singlereport__formitem">
                        <select>
                            <option value="1">Выберите  тему обращения</option> 
                            <option value="1">Клопы</option> 
                            <option value="1">Тараканы</option> 
                            <option value="1">Комары</option> 
                            <option value="1">Мухи</option> 
                            <option value="1">Прочее</option> 
                        </select>
                        <div class="singlereport__formitem-addtext">  
                        </div>
                    </div>

            

                    <div class="singlereport__formitem singlereport__formitem">
                        <textarea placeholder="Текст обращения"></textarea> 
                        <div class="singlereport__formitem-addition-text">  
                        </div>
                    </div>
                    
                    <div class="singlereport__formitem singlereport__formitem singlereport__formfile">
                        <input type="file"  placeholder="Тема обращения" required="">
                        <div class="singlereport__formitem-addition-text">  
                        </div>
                    </div>



                    
                     <div class="singlereport__formitem singlereport__formitem-submit">
                        <button type="submit">Отправить</button>
                    </div>
                </div> 
                </form>
            </div>    
        </div>

    </div>
</div>

@include('pomorye.footer')