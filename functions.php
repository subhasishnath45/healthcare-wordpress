<?php 

function healthcare_register_styles(){
    // only for style.css
    wp_enqueue_style('style_root', get_stylesheet_uri());
    wp_enqueue_style('fontawesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4', 'all');
    wp_enqueue_style('slick_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), '1.8.1', 'all');
    wp_enqueue_style('slick_theme_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css', array(), '1.8.1', 'all');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'healthcare_register_styles');

function healthcare_register_scripts(){
    wp_enqueue_script('jquery_healthcare', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('slick_js_healthcare', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery_healthcare'), '1.8.1', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array('jquery_healthcare'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'healthcare_register_scripts');

function healthcare_theme_support(){

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('widgets');
add_theme_support('menus');
}
add_action('after_setup_theme', 'healthcare_theme_support');

?>