 
 <div class="footer">
  <div class="footer_body">
    <div class="footer__block">
      <h2>О портале</h2>
      <a href="#">Регламент обработки информации на портале «Моё Поморье»</a>
      <a href="#">Условия использования информации</a>
      <a href="#">Расскажи друзьям</a>
     
    </div>

    <div class="footer__block">
      <h2>Посетителям</h2>
      <a href="#">Единые правила модерации</a>
      <a href="#">Часто задаваемые вопросы</a>
      <a href="#">Предложить идею или сообщить об ошибке в работе Портала</a>
    </div>

    <div class="footer__block">
      <h2>Наши проекты</h2>
      <a href="#">dvinaland.ru</a>
      <a href="#">transport29.ru</a>
      <a href="#">gkh.dvinaland.ru</a>
      <a href="#">rc.dvinaland.ru/main</a>
      <a href="#">anticorr29.ru</a>
      <a href="#">opendata.dvinaland.ru</a>
      <a href="#">https://regulation.dvinaland.ru</a>
      
    </div>

    <div class="footer__block">
       <h2>Мы в соц. сетях</h2>
       <div class="footer__social">
        <a href='#'><img src="./gfx/icons/222.png"></a>    
        <a href='#'><img src="./gfx/icons/111.png"></a>    
        <a href='#'><img src="./gfx/icons/333.png"></a>    
         
      </div>
    </div>

  </div>
  <div class="footer__licenses">
    <p>
      Все материалы сайта доступны по лицензии Creative Commons Attribution 3.0 при условии ссылки на первоисточник
(в случае использования материалов сайта в сети Интернет – интерактивная ссылка).
    </p>
  </div>
</div>    



</div>              




<a id="button"></a>

<script> 

  jQuery(document).ready(function() {
    var btn = $('#button');  
    btn.hide();
    $(window).scroll(function() {     
      if ($(window).scrollTop() > 500) {
       btn.fadeIn();
     } else {
       btn.fadeOut();
     }
   });
    btn.on('click', function(e) {
     e.preventDefault();
     $('html, body').animate({scrollTop:0}, '300');
   });
  });
</script> 
</body>
</html>
