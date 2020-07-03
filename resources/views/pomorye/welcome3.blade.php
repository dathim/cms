@include('pomorye.header')

    <div class="content">
        <div class="specform">
            <div class="specform__loginblock">
                <a href="#">
                    <div class="specform__header">
                        <h3>Вход</h3> <div class="specform__arrclose"></div>
                    </div>
                </a>
               
            </div>

            <div class="specform__loginblock">
                <div class="specform__header">
                    <h3>Регистарция</h3>  <div class="specform__arropen"></div>
                </div>   
                <form>
                <div class="specform__body">
                 

                  <div class="specform__formitem">
                        <input type="text"  placeholder="Фамилия*" required="">
                        <div class="specform__formitem-addtext">  
                         
                        </div>
                    </div>

                    <div class="specform__formitem specform__formitem-half">
                        <input type="text"  placeholder="Имя*" required="">
                        <div class="specform__formitem-addtext">  
                         
                        </div>
                    </div>

                    <div class="specform__formitem specform__formitem-half">
                        <input type="text"  placeholder="Отчество*" required="">
                        <div class="specform__formitem-addition-text">  
                         
                        </div>
                    </div>

                    <div class="specform__formitem specform__formitem-half">
                        <input type="text"  placeholder="Email *" required="">
                        <div class="specform__formitem-addtext">  
                         
                        </div>
                    </div>

                    <div class="specform__formitem specform__formitem-half">
                        <input type="text"  placeholder="Телефон*" required="">
                        <div class="specform__formitem-addtext">  
                         
                        </div>
                    </div>

                    <div class="specform__formitem">
                        <input type="password"  placeholder="Пароль *" required="">
                        <div class="specform__formitem-addtext">  
                            Минимум 6 символов
                        </div>
                    </div>

                    <div class="specform__formitem">
                        <input type="password"  placeholder="Подтвердите пароль *" required="">
                        <div class="specform__formitem-addtext">  
                         
                        </div>
                    </div>

                    <div class="specform__formitem">
                        <input type="text"  placeholder="Адрес*" required="">
                        <div class="specform__formitem-addtext">  
                         
                        </div>
                    </div>

                    <div class="specform__formitem specform__formitem-checkbox">
                        <input type="checkbox"  value="1"  >
                        <span>Я принимаю условия <a href="#">Соглашения о пользовательском портале</a></span>
                        <div class="specform__formitem-addtext">  
                         
                        </div>
                    </div>
                    <div class="specform__formitem specform__formitem-checkbox">
                        <input type="checkbox"  value="1"  >
                        <span>Я ознакомлен с <a href="#">Едиными правилами модерации</a></span>
                        <div class="specform__formitem-addtext">  
                         
                        </div>
                    </div>

                    <div class="specform__formitem specform__formitem-submit">
                        <button type="submit">Зарегистрировать</button>
                    </div>
                </div> 
                </form>
            </div>

            <div class="specform__loginblock">
                    <div class="specform__header">
                        <h3>Вход</h3> <div class="specform__arropen"></div>
                    </div>
                <form>
                <div class="specform__body">
                 
                    <div class="specform__formitem specform__formitem">
                        <input type="text"  placeholder="Логин" required="">
                        <div class="specform__formitem-addtext">  
                        </div>
                    </div>

                    <div class="specform__formitem specform__formitem">
                        <input type="text"  placeholder="Пароль" required="">
                        <div class="specform__formitem-addition-text">  
                        </div>
                    </div>
                     <div class="specform__formitem specform__formitem">
                        
                        <div class="specform__formitem-addition-text">  
                            <a href="">Восстановить пароль</a>
                        </div>
                    </div>
                     <div class="specform__formitem specform__formitem-submit">
                        <button type="submit">Вход</button>
                    </div>
                </div> 
                </form>
            </div>

            <div class="specform__loginblock">
                    <div class="specform__header">
                        <h3>Подача обращения</h3> <div class="specform__arropen"></div>
                    </div>
                <form>
                <div class="specform__body">
                    
                    <div class="specform__formitem specform__formitem">
                        <select>
                            <option value="1">Выберите  тему обращения</option> 
                            <option value="1">Клопы</option> 
                            <option value="1">Тараканы</option> 
                            <option value="1">Комары</option> 
                            <option value="1">Мухи</option> 
                            <option value="1">Прочее</option> 
                        </select>
                        <div class="specform__formitem-addtext">  
                        </div>
                    </div>

                    <div class="specform__formitem specform__map">
                        <p class="header">Кликните по карте, чтобы узнать адрес</p>
                        <div id="map"></div>
                        <input name="ymap" type="text" class="coordinats" >
                        <div class="specform__formitem-addtext">  
                        </div>
                    </div>


                    <div class="specform__formitem specform__formitem">
                        <input type="text"  placeholder="Адрес" required="">
                        <div class="specform__formitem-addtext">  
                        </div>
                    </div>

                    <div class="specform__formitem specform__formitem">
                        <input type="text"  placeholder="Тема обращения" required="">
                        <div class="specform__formitem-addition-text">  
                        </div>
                    </div>

                    <div class="specform__formitem specform__formitem">
                        <textarea placeholder="Текст обращения"></textarea> 
                        <div class="specform__formitem-addition-text">  
                        </div>
                    </div>
                    
                    <div class="specform__formitem specform__formitem specform__formfile">
                        <input type="file" id="userfile">

                        
                        <div class="specform__formitem-addition-text">  
                        </div>
                    </div>

                    <div class="specform__formitem specform__formitem-checkbox">
                        <input type="checkbox"  value="1"  >
                        <span>Я принимаю условия <a href="#">Соглашения о пользовательском портале</a></span>
                        <div class="specform__formitem-addtext">  
                         
                        </div>
                    </div>
                    <div class="specform__formitem specform__formitem-checkbox">
                        <input type="checkbox"  value="1"  >
                        <span>Я ознакомлен с <a href="#">Едиными правилами модерации</a></span>
                        <div class="specform__formitem-addtext">  
                         
                        </div>
                    </div>

                    <div class="specform__formitem specform__formitem-checkbox">
                        <input type="checkbox"  value="1"  >
                        <span>Я хочу сделать данное публичным</span>
                        <div class="specform__formitem-addtext">  
                        </div>
                    </div>


                    
                     <div class="specform__formitem specform__formitem-submit">
                        <button type="submit">Отправить</button>
                    </div>
                </div> 
                </form>
            </div>







        </div>
    </div>

    
<script type="text/javascript">
    
    $( "input[type=file]" ).click(function() {
        $("button.remove").remove();
        $(this).parent().append( "<button class='remove' type='button'>Убрать файл</button>" );
    });

    $(document).on( "click", "button.remove", function() {
        $( "input[type=file]" ).val('');
        $(this).remove();
    });

    /*
    $( "#removefile" ).hide();
    $( "#userfile" ).click(function() {
        $( "#removefile" ).show();
    });

    $( "#removefile" ).click(function() {
        $("#userfile").val('');
        $( "#removefile" ).hide();
    });

    */
   
    ymaps.ready(init);

    function init() {
        var myPlacemark,
            myMap = new ymaps.Map('map', {
                center: [64.5416905335426,40.529085334602435],
                zoom: 5,
                controls: ['smallMapDefaultSet']
            });

        // Слушаем клик на карте.
        myMap.events.add('click', function (e) {
            var coords = e.get('coords');

            // Если метка уже создана – просто передвигаем ее.
            if (myPlacemark) {
                myPlacemark.geometry.setCoordinates(coords);
            }
            // Если нет – создаем.
            else {
                myPlacemark = createPlacemark(coords);
                myMap.geoObjects.add(myPlacemark);
                // Слушаем событие окончания перетаскивания на метке.
                myPlacemark.events.add('dragend', function () {
                    getAddress(myPlacemark.geometry.getCoordinates());
                });
            }
            getAddress(coords);

        });

        // Создание метки.
        function createPlacemark(coords) {
            return new ymaps.Placemark(coords, {
                iconCaption: 'Место на карте'
            }, {
                preset: 'islands#redDotIconWithCaption',
                draggable: true
            });
        }

        // Определяем адрес по координатам (обратное геокодирование).
        function getAddress(coords) {
            $(".coordinats").val(coords);
        }
    }

</script>


@include('pomorye.footer')