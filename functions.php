<?php 

function load_css () {
    // wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], rand(11, 9999), 'all');
    // wp_enqueue_style('bootstrap');

    wp_register_style('sass', get_template_directory_uri() . '/dist/app.css', [], rand(11, 9999), 'all');
    wp_enqueue_style('sass');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js () {
    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', [], rand(11, 9999), true);
    wp_enqueue_script('app');

    // wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', rand(11, 9999), true);
    // wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options

add_theme_support('menus');
add_theme_support('post-thumbnails');

// Menus

register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'mobile-menu' => 'Mobile Menu'
    )
);