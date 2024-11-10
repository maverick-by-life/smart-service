<?php
function smart_service_enqueue_scripts()
{
    wp_enqueue_style('smart-service-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('smart-service-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), "1.0", true);
}

add_action('wp_enqueue_scripts', 'smart_service_enqueue_scripts');

function smart_service_theme_init()
{
    register_nav_menus(
        array('main-menu' => 'Главное меню',)
    );
    register_nav_menus(
        array('languages' => 'Переключатель языков',)
    );
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
 }

add_action('after_setup_theme', 'smart_service_theme_init', 0);