<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="header">
    <div class="container">
    <div class="header-wrapper">
      <img class="logo" src="<?php echo get_template_directory_uri(  ) . '/assets/images/logo.png'?>" alt="Автономные канализации">
      <div class="search">

        <div class="search-top">
          <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/location.svg'?>" alt="Адрес" class="search-top-img">
          <p class="search-top-text">Москва, ул. Ленина 15-3</p>

          <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/chronometer.svg'?>" alt="Время работы" class="search-top-img">
          <p class="search-top-text"><span>Пн—Пт</span> 08:00 - 21.00</p>

          <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/gmail.svg'?>" alt="Почта" class="search-top-img">
          <a href="mailto:info@site.ru" class="search-top-text">info@site.ru</a>
          
        
        </div>
        <!-- /.search-top -->

      <div class="search-center">
        <form action="/search" method="GET" class="search-form">
          <input type="text" class="text" value="" name="q" id="search" placeholder="поиск" autocomplete="off">
          <a href="#" class="btn">Найти</a>
        </form>
        <nav class="header-nav">
          <a href="#catalog-wrap" class="header-nav-link">Каталог</a>
          <a href="#services" class="header-nav-link"> Услуги</a>
          <a href="#video" class="header-nav-link">Видео</a>
          <a href="#footer-wrap" class="header-nav-link">Контакты</a>
        </nav>
      </div>
      <!-- /.search-center -->

      </div>
      <!-- /.search -->
        
      <div class="call">
        <div class="call-phone">
          <a href="tel:+380688200906" class="call-phone-text">+38(068)820-09-06</a>
          <a href="tel:+380680006609" class="call-phone-text">+38(068)000-66-09</a>
        </div>
        <a class="call-btn btn">
          <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/header/whatsapp-btn.svg'?>" alt="Заказать звонок" class="call-btn-img">Заказать звонок
        </a>
        <div class="modal-header" >
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
      <!-- /.call -->
      <a href="#" class="mobile-btn-menu">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
    <!-- /.header-wrapper -->
  </div>
  <!-- /.container -->
</header>