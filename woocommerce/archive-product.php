<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

<div class="container">
    <div class="breadcrumbs">
      <div class="breadcrumbs-wrap">
        <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/breadcrumbs.svg'?>" alt="Главная" class="breadcrumbs-img">
        <a href="#" class="breadcrumbs-link home">Главная&emsp;>></a>
        <a href="#services" class="breadcrumbs-link services">Услуги&emsp;>></a>
        <a href="#" class="breadcrumbs-link repair">Ремонт стиральных машин</a>
      </div>
      <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/banks.png'?>" alt="" class="breadcrumbs-bank">
    </div>
    <!-- /.breadcrumbs -->

    <div class="main-swiper-wrap">
    
      <?php echo do_shortcode('[smartslider3 slider="3"]');?>
      
        <!-- вывод первой акции -->
      <div id="modal-page-contant-one" style="display: none;">

        
          <?php
            query_posts( 'p=84' );

            if( have_posts() ){
              while( have_posts() ){
                the_post();
                ?> 
                
                <div class="header-popup">
                  <h1 class="popup-title">Акции</h1>
                </div>
                <div class="product-contant-wrap">
                  <?php the_post_thumbnail( ) ?>
                  <div class="product-text-wrap">
                  <h3 class="popup-product-title"><?php the_title( );?></h3>

                      <?php
                      the_content();
                    }
                  }
                  else {
                    echo 'Записей нет';
                  }
                  wp_reset_query();
                ?>

                  <div class="wrap-btn">
                    <a href="" class="btn product-popup" data-fancybox data-src="#order-product">Заказать</a>
            
                    <a href="" class="credit" data-fancybox data-src="#credit-product">Рассрочка 0%</a>
                  </div>
            </div>
            <!-- /.product-text-wrap -->
          </div>
        <!-- /.product-contant-wrap -->
          <div class="footer-popup">
            <h2 class="title">Остались вопросы</h2>
            <p class="footer-popup-text">
              Получите консультацию специалиста по выбранному продукту
            </p>
            <?php echo do_shortcode( '[contact-form-7 id="134" title="Форма в услугах"]' );?>
          </div>
        

      </div>


        <!-- вывод второй акции -->
      <div id="modal-page-contant-two" style="display: none;">

        <?php
            query_posts( 'p=82' );

            if( have_posts() ){
              while( have_posts() ){
                the_post();
                ?> 
                
                <div class="header-popup">
                  <h1 class="popup-title">Акции</h1>
                </div>
                <div class="product-contant-wrap">
                  <?php the_post_thumbnail( ) ?>
                  <div class="product-text-wrap">
                  <h3 class="popup-product-title"><?php the_title( );?></h3>

                      <?php
                      the_content();
                    }
                  }
                  else {
                    echo 'Записей нет';
                  }
                  wp_reset_query();
                ?>

                  <div class="wrap-btn">
                    <a href="" class="btn product-popup" data-fancybox data-src="#order-product">Заказать</a>
            
                    <a href="" class="credit" data-fancybox data-src="#credit-product">Рассрочка 0%</a>
                  </div>
            </div>
            <!-- /.product-text-wrap -->
          </div>
        <!-- /.product-contant-wrap -->

          <div class="footer-popup">
            <h2 class="title">Остались вопросы</h2>
            <p class="footer-popup-text">
              Получите консультацию специалиста по выбранному продукту
            </p>
            <?php echo do_shortcode( '[contact-form-7 id="134" title="Форма в услугах"]' );?>
          </div>

      </div>

        <!-- вывод третьей акции -->
      <div id="modal-page-contant-three" style="display: none;">

        <?php
            query_posts( 'p=79' );

            if( have_posts() ){
              while( have_posts() ){
                the_post();
                ?> 
                
                <div class="header-popup">
                  <h1 class="popup-title">Акции</h1>
                </div>
                <div class="product-contant-wrap">
                  <?php the_post_thumbnail( ) ?>
                  <div class="product-text-wrap">
                  <h3 class="popup-product-title"><?php the_title( );?></h3>

                      <?php
                      the_content();
                    }
                  }
                  else {
                    echo 'Записей нет';
                  }
                  wp_reset_query();
                ?>

                  <div class="wrap-btn">
                    <a href="" class="btn product-popup" data-fancybox data-src="#order-product">Заказать</a>
            
                    <a href="" class="credit" data-fancybox data-src="#credit-product">Рассрочка 0%</a>
                  </div>
            </div>
            <!-- /.product-text-wrap -->
          </div>
        <!-- /.product-contant-wrap -->
          <div class="footer-popup">
            <h2 class="title">Остались вопросы</h2>
            <p class="footer-popup-text">
              Получите консультацию специалиста по выбранному продукту
            </p>
            <?php echo do_shortcode( '[contact-form-7 id="134" title="Форма в услугах"]' );?>
          </div>

      </div>

    </div>
    <!-- /.main-swiper-wrap -->


    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->


    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div class="catalog-wrap" id="catalog-wrap">
      <h1 class="title">Каталог</h1>

      <div class="catalog">
        <div class="catalog-active">
          <p class="catalog-active-text">Автономные канализации</p>
        </div>
      <?php get_sidebar();?>


        <?php
        if ( woocommerce_product_loop() ) {

          do_action( 'woocommerce_before_shop_loop' );

          woocommerce_product_loop_start();

          if ( wc_get_loop_prop( 'total' ) ) {
            while ( have_posts() ) {
              the_post();

              do_action( 'woocommerce_shop_loop' );

              wc_get_template_part( 'content', 'product' );
            }
          }

          woocommerce_product_loop_end();


          do_action( 'woocommerce_after_shop_loop' );
        } else {

          do_action( 'woocommerce_no_products_found' );
        }

        do_action( 'woocommerce_after_main_content' );

        do_action( 'woocommerce_sidebar' );?>

      </div>
      <!-- /.catalog -->

  </div>
  <!-- /.catalog -->

  <div class="associates">
    <div class="container">
      <h1 class="title associates-title">С кем мы работаем</h1>
      <div class="swiper-container associates-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/associates/ana.jpeg'?>" alt="" class="associates-img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/associates/cristall.jpeg'?>" alt="" class="associates-img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/associates/Deka.jpeg'?>" alt="" class="associates-img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/associates/evrobion.jpeg'?>" alt="" class="associates-img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/associates/evrolotos.jpeg'?>" alt="" class="associates-img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/associates/KoloVesi.jpeg'?>" alt="" class="associates-img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/associates/petrovich.jpeg'?>" alt="" class="associates-img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/associates/standartpark.jpeg'?>" alt="" class="associates-img">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/associates/uponor.jpeg'?>" alt="" class="associates-img">
          </div>
        </div>

        <div class="swiper-button-prev">
          <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/prev.svg'?>" alt="">
        </div>
        <div class="swiper-button-next">
          <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/next.svg'?>" alt="">
        </div>
      </div>
      
    </div>
    <!-- /.associates -->
    
    <div class="services" id="services">
      <div class="container">
        <h1 class="title">Услуги</h1>
        <div class="services-block">
          
        <?php	global $post;
            //формируем запрос в базу данных
          $query = new WP_Query( [
            'posts_per_page' => 3,
            'category__in' =>24
          ] );
          //создаем переменную-счетчик постов
          $cnt = 0;
            //если посты есть, выводим их
            while ( $query->have_posts() ) {
              $query->the_post();
              // увеличиваем счетчик постов
          $cnt++;
          switch ($cnt) {
            //выводим первый пост
          case '1':
            ?> 
              <div class="services-block-wrap">
                <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" class="services-img">
                <h1 class="services-title"><?php the_title();?></h1>
                  <?php the_excerpt(  );?>
                <a href="<?php echo get_the_permalink( );?>" class="btn" data-fancybox data-src="#services-popup">Заказать</a>
              </div>
            
          <?php
          break;
          
          default: ?>
            <div class="services-block-wrap">
              <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" class="services-img">
              <h1 class="services-title"><?php the_title();?></h1>
                <?php the_excerpt(  );?>
              <a href="<?php echo get_the_permalink( get_the_ID(  ) );?>" class="btn" data-fancybox data-src="#services-popup">Заказать</a>
            </div>

            <div class="services-popup" id="services-popup" style="display: none;">
              <div class="services-popup-header">
                <h2 class="title-popup"><?php the_title();?></h1>
              </div>
              <div class="services-popup-content">
                <?php the_content(  )?>
              </div>
              <!-- /.services-popup-content -->
              <div class="footer-popup">
                <h2 class="title">Остались вопросы</h2>
                <p class="footer-popup-text">
                  Получите консультацию специалиста по выбранному продукту
                </p>
                <?php echo do_shortcode( '[contact-form-7 id="134" title="Форма в услугах"]' );?>
              </div>
            </div>

              <?php
                break;
            }
        }

          wp_reset_postdata();?>

        </div>
        <!-- /.services-block -->
      </div>
    <!-- /.container -->
    </div>
    <!-- /.services -->

    <div class="video" id="video">
      <div class="container">
        <h1 class="title">Видео</h1>

        <!-- Slider main container -->
        <div class="swiper-container video-swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">

              <a href="https://youtu.be/UviBi55rMJ4" class="slide-links fancybox" rel="gallery1">
                <img src="//img.youtube.com/vi/UviBi55rMJ4/maxresdefault.jpg" width="560" alt="" class="img-link">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/play.png'?>" alt="" class="video-play">
              </a>
            </div>
            
            <div class="swiper-slide">
              <a href="https://youtu.be/tgNvrJ6JVMQ" class="slide-links fancybox" rel="gallery1">
                <img src="//img.youtube.com/vi/tgNvrJ6JVMQ/maxresdefault.jpg" width="560" alt="" class="img-link">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/play.png'?>" alt="" class="video-play">
              </a>
              
            </div>
            <div class="swiper-slide">
            
              <a href="https://youtu.be/0pBJS_pb7VQ" class="slide-links fancybox" rel="gallery1">
                <img src="//img.youtube.com/vi/0pBJS_pb7VQ/maxresdefault.jpg" width="560" alt="" class="img-link">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/play.png'?>" alt="" class="video-play">
              </a>
            </div>

            <div class="swiper-slide">
            
              <a href="https://youtu.be/KDLurfkCnfc" class="slide-links fancybox" rel="gallery1">
                <img src="//img.youtube.com/vi/KDLurfkCnfc/mqdefault.jpg" width="560" alt="" class="img-link">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/play.png'?>" alt="" class="video-play">
              </a>
            </div>
            
            <div class="swiper-slide">
            
              <a href="https://youtu.be/oroCCIhu3xg" class="slide-links fancybox" rel="gallery1">
                <img src="//img.youtube.com/vi/oroCCIhu3xg/mqdefault.jpg" width="560" alt="" class="img-link">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/play.png'?>" alt="" class="video-play">
              </a>
              
            </div>

            <div class="swiper-slide">
            
              <a href="https://youtu.be/v7ZZcwS9Vz4" class="slide-links fancybox" rel="gallery1">
                <img src="//img.youtube.com/vi/v7ZZcwS9Vz4/mqdefault.jpg" width="560" alt="" class="img-link">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/play.png'?>" alt="" class="video-play">
              </a>

            </div>

            <div class="swiper-slide">
            
              <a href="https://youtu.be/5a-8-aZPxf8" class="slide-links fancybox" rel="gallery1">
                <img src="//img.youtube.com/vi/5a-8-aZPxf8/maxresdefault.jpg" width="560" alt="" class="img-link">
                <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/play.png'?>" alt="" class="video-play">
              </a>
            </div>


          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev">
            <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/prev.svg'?>" alt="" class="video-btn-prev">
          </div>
          <div class="swiper-button-next">
            <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/next.svg'?>" alt="" class="video-btn-next">
          </div>

        
        </div>

      </div>
    <!-- /.container -->
    </div>
    <!-- /.video -->
  </div>
  <!-- /.consultation -->
    <div class="consultation-wrap">
      <div class="container">
        
        <div class="consultation">
        <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/phone.png'?>" alt="" class="consultation-img">
        
          <div class="contact-form-wrap">
            <?php echo do_shortcode( '[contact-form-7 id="132" title="Форма на главной"]' )?>
          </div>

        </div>
        <!-- /.consultation -->
      </div>
      <!-- /.container -->
  </div>
  <!-- /.consultation-wrap -->

      
  <div class="container">
    <div class="review">
      <h1 class="title">Отзывы</h1>
        <?php echo do_shortcode( ' [testimonial_view id="1"]' )?>
  
    </div>
    <!-- /.review -->
  </div>
  <!-- /.container -->



<?php get_footer( 'shop' );?>