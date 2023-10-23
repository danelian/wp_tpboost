<?php

/**
 * Подключение стилей и скриптов
 */
function tpboost_scripts() {
  // STYLES
  // Main style
  wp_enqueue_style('main', get_template_directory_uri());
  // Swiper
  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
  // Fancybox
  wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.min.css');
  // App style
  wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/style.min.css');

  // SCRIPTS
  // Jquery
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), null, true);
	wp_enqueue_script('jquery');
  // Swiper
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);
  // Fancybox
  wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', array('jquery'), null, true);
  // App js
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery', 'swiper', 'fancybox'), null, true);
}
add_action('wp_enqueue_scripts', 'tpboost_scripts');


