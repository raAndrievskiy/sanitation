<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<a href="" class="product-link" data-fancybox data-src="#order">
    <?php

    do_action( 'woocommerce_shop_loop_item_title' );

    do_action( 'woocommerce_after_shop_loop_item_title' );

    do_action( 'woocommerce_before_shop_loop_item_title' );
    
    the_excerpt( );
    
    ?>




  <div class="product-text-excerpt">
    <img src="<?php echo get_template_directory_uri(  ) . '/assets/images/shovel.png'?>" alt="" class="img-work">
    <p class="text">
    Стоимость монтажа уточняйте у менеджера
    </p>
  </div>
</a>
  <!-- /.product-link -->
  <div class="wrap-btn">
    <a href="" class="btn product-popup" data-fancybox data-src="#order-product">Заказать</a>
    
    <a href="" class="credit" data-fancybox data-src="#credit-product">Рассрочка 0%</a>

      <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

      <div id="order-product" style="display: none;">
        <div class="modal-header">
          <h2 class="popup-title">Заказать</h2>
        </div>
          <p class="footer-popup-text">
            Получите консультацию специалиста по выбранному продукту
          </p>
          <?php echo do_shortcode( '[contact-form-7 id="134" title="Форма в услугах"]' );?>
      </div>
      <div id="credit-product" style="display: none;">
        <div class="modal-header">
          <h2 class="popup-title">Рассрочка</h2>
        </div>
          <p class="footer-popup-text">
            Получите консультацию специалиста по выбранному продукту
          </p>
          <?php echo do_shortcode( '[contact-form-7 id="134" title="Форма в услугах"]' );?>
      </div>



      <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->



      <div id="order" class="popup-order" style="display: none;">   
      
        <div class="header-popup">
          <h1 class="popup-title">Заказать</h1>
        </div>
        <?php
          global $product;
            
            if ( post_password_required() ) {
              echo get_the_password_form(); 
              return;
            }
            ?>
        <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
          <?php
          
            do_action( 'woocommerce_before_single_product_summary' );
            ?>  

          <div class="summary entry-summary">

            <?php
          
              do_action( 'woocommerce_single_product_summary' );

            ?>
            <div class="wrap-btn">
            
              <a href="#" class="btn product-popup" data-fancybox data-src="#modal-order">Заказать</a>
              
              <a href="#" class="credit" data-fancybox data-src="#modal-credit">Рассрочка 0%</a>

            </div>
          </div>


        <?php do_action( 'woocommerce_after_single_product' );

              the_content(  );
        ?>


      </div>

      
        <div class="modal-order" id="modal-order" style="display: none">
          <div class="modal-header">
            <h2 class="popup-title">Заказать</h2>
          </div>
            <p class="footer-popup-text">
              Получите консультацию специалиста по выбранному продукту
            </p>
            <?php echo do_shortcode( '[contact-form-7 id="134" title="Форма в услугах"]' );?>
        </div>
        <div class="modal-order" id="modal-credit" style="display: none">
          <div class="modal-header">
            <h2 class="popup-title">Рассрочка</h2>
          </div>
            <p class="footer-popup-text">
              Получите консультацию специалиста по выбранному продукту
            </p>
            <?php echo do_shortcode( '[contact-form-7 id="134" title="Форма в услугах"]' );?>
        </div>

        <div class="footer-popup">
          <h2 class="title">Остались вопросы</h2>
          <p class="footer-popup-text">
            Получите консультацию специалиста по выбранному продукту
          </p>
          <?php echo do_shortcode( '[contact-form-7 id="134" title="Форма в услугах"]' );?>
        </div>
      </div>

              

  </div>
  <!-- /.wrap-btn -->
</li>