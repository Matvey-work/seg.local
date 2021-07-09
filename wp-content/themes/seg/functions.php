<?php
/**
* Enqueue scripts and styles.
*/

function all_scripts() {

    wp_enqueue_style('slick-css', get_template_directory_uri().'/build/css/slick.css');
    // wp_enqueue_style('lightbox-css', get_template_directory_uri().'/build/css/lightbox.css');
    wp_enqueue_style('fancybox-css', get_template_directory_uri().'/build/css/jquery.fancybox.min.css');
    wp_enqueue_style('main-css', get_template_directory_uri().'/build/css/style.min.css');

    wp_enqueue_script('jquery-script', get_template_directory_uri() . '/build/js/jquery.js', [], false, true);
    wp_enqueue_script('slick-script', get_template_directory_uri() . '/build/js/slick.js', [], false, true);
    // wp_enqueue_script('lightbox-script', get_template_directory_uri() . '/build/js/lightbox.js', [], false, true);
    wp_enqueue_script('fancybox-script', get_template_directory_uri() . '/build/js/jquery.fancybox.min.js', [], false, true);
    // wp_enqueue_script('animation-script', get_template_directory_uri() . '/build/js/animation.js', [], false, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/build/js/script.min.js', [], false, true);
}
add_action( 'wp_enqueue_scripts', 'all_scripts' );




register_nav_menus(array(
  'top' => 'Верхнее меню',
  'sub_menu' => 'Подменю',
  'bottom_1' => 'Нижнее меню 1',
  'bottom_2' => 'Нижнее меню 2',
  'bottom_3' => 'Нижнее меню 3',
));

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
function my_wp_nav_menu_args( $args='' ){

  $args['container'] = '';

  return $args;
}

add_theme_support( 'custom-header', array(
  'flex-width'    => true,
  'width'         => 222,
  'flex-height'    => true,
  'height'        => 42,
  'uploads'       => true,
  'default-image' => get_template_directory_uri() . '/build/img/logo.png',
) );

function my_widgets(){
	register_sidebar( array(
		'name' => 'виджеты',
		'id' => 'my-widjets',
		'description' => 'Выводиться в выбранном месте сайта.',
		'before_widget' => '<li class="widget-block">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'my_widgets' );
