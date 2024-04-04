<?php

function warpPipe_menus(){
  $locations = array(
    'primary' => "Primary Menu",
    'mobile' => "Mobile Menu"
  );

  register_nav_menus($locations);
}

add_action('init','warpPipe_menus');

function warpPipe_theme_support(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'warpPipe_theme_support');

function warpPipe_register_styles(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('warpPipe-style', get_template_directory_uri() . "/style.css", array('warpPipe-swiper'), $version, 'all' );
  wp_enqueue_style('warpPipe-swiper', get_template_directory_uri() . "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css", array(), 'all' );
}

add_action('wp_enqueue_scripts', 'warpPipe_register_styles');

function warpPipe_register_scripts(){
  wp_enqueue_script('warpPipe-swiper','https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), true);
  wp_enqueue_script('warpPipe-light-box',get_template_directory_uri()."/assets/scripts/main.js", array(), '1.0' , true);
  wp_enqueue_script('warpPipe-scripts',get_template_directory_uri()."/assets/scripts/fslightbox.js", array(), '1.0' , true);
}
add_action('wp_enqueue_scripts', 'warpPipe_register_scripts');

?>