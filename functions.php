<?php

	register_nav_menus( [
		'header_menu' => 'Меню в шапке',
		'footer_menu' => 'Меню в подвале'
	] );

  add_theme_support( 'post-thumbnails' );

  /**
 * Подключение сайдбара
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sanitation_widgets_init() {
  register_sidebar(
    array(
      'name'          => esc_html__( 'Каталог', 'universal-example' ),
      'id'            => 'main-sidebar',
      'description'   => esc_html__( 'Добавьте виджеты сюда', 'universal-example' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action( 'widgets_init', 'sanitation_widgets_init' );



function enqueue_sanitation_style() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'swiper-slider', get_template_directory_uri(  ) . '/assets/css/swiper-bundle.min.css', 'style', time( ));
  wp_enqueue_style( 'fancybox-style', get_template_directory_uri(  ) . '/assets/css/jquery.fancybox.min.css', 'style', time( ));
  wp_enqueue_style( 'sanitation-theme', get_template_directory_uri(  ) . '/assets/css/style.css', 'style', time( ));
  wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//code.jquery.com/jquery-3.5.1.min.js' );
	wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'swiper', get_template_directory_uri(  ) . '/assets/js/swiper-bundle.min.js', null, time( ));
  wp_enqueue_script( 'fancybox', get_template_directory_uri(  ) . '/assets/js/jquery.fancybox.min.js', null, time( ));
  wp_enqueue_script( 'scripts',  get_template_directory_uri(  ) . '/assets/js/scripts.js', 'swiper', null, time( ));
}
add_action( 'wp_enqueue_scripts', 'enqueue_sanitation_style' );

add_action( 'wp_enqueue_scripts', 'adminAjax_data', 99 );
function adminAjax_data(){
	wp_localize_script( 'jquery', 'adminAjax', 
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);  
}

add_filter( "the_excerpt", "add_class_excerpt" );
function add_class_excerpt( $excerpt ) {
return str_replace( '<p>', '<p class="excerpt">', $excerpt );
}




if ( class_exists( 'WooCommerce' ) ) {
require_once(get_template_directory() . '/woo-c.php');
}




add_action( 'wp_footer', 'back_to_top' );
function back_to_top() {
  echo '<a id="totop" href="#"></a>';
  echo '<a id="whatsapp" href="https://wa.me/+79218918981"></a>';
}

?>