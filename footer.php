<footer class="footer-wrap" id="footer-wrap">
    <div class="container">
      <div class="footer">
        <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/logo-footer.svg'?>" alt="" class="footer-logo">
        <nav class="footer-nav">
            <a href="#catalog-wrap" class="footer-nav-link">Каталог</a>
            <a href="#services" class="footer-nav-link"> Услуги</a>
            <a href="#video" class="footer-nav-link">Видео</a>
            <a href="#footer-wrap" class="footer-nav-link">Контакты</a>
          <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/banks.png'?>" alt="" class="bank">
          <p class="footer-text">@ ТОВ Установка канализаций</p>
        </nav>
        <div class="footer-info">
          <p>Россия, г. Москва <br>
            ул. Первая 99 к5</p>
          <a class="footer-info-contact" href="tel:+78002000000">тел: 8 (800) 2000 000</a>
          <a class="footer-info-contact" href="mailto:info@dezhim.com">info@dezhim.com</a>
          <p class="footer-info-time">с 8.00 до 20.00</p>
        </div>
        <!-- /.footer-info -->

        <div class="footer-social-wrap">
          <a href="#" class="btn footer-btn">Заказать звонок</a>
        <div class="modal footer-modal" id="modal">
          <?php echo do_shortcode( '[contact-form-7 id="130" title="модалки"]' )?>
        </div>
          <div class="social">
            <a href="" class="social-link">
              <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/header/telegram.svg'?>" alt="telegram" class="social-img">
            </a>
            <a href="https://wa.me/+79218918981" class="social-link">
              <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/header/whatsappsvg.svg'?>" alt="whatsapp" class="social-img">
            </a>
            <a href="https://www.instagram.com/hapcolive/" class="social-link">
              <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/header/instagram.svg'?>" alt="instagram" class="social-img">
            </a>
            <a href="https://uslugi.yandex.ru/profile/ZagorodnayaZhizn-1452095" class="social-link">
              <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/header/yandex.svg'?>" alt="yandex" class="social-img">
            </a>
          </div>
        </div>
        <!-- /.footer-social-wrap -->
      </div>
      <!-- /.footer -->
    </div>
    <!-- /.container -->
  </footer>
  <!-- /.footer-wrap -->
<!-- /.footer -->



  <?php wp_footer(  ); ?>
  </body>
</html>