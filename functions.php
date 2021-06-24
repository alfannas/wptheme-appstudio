<?php

function load_stylesheets(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('creative', get_template_directory_uri() . '/css/creative.min.css', array(), false, 'all');
    wp_enqueue_style('creative');

    wp_register_style('style', get_template_directory_uri() . '/style.css?v='.time(), array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array(), 1, true);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), 1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), 1, true);
    wp_enqueue_script('easing');

    wp_register_script('magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), 1, true);
    wp_enqueue_script('magnific');

    wp_register_script('creative', get_template_directory_uri() . '/js/creative.min.js', array(), 1, true);
    wp_enqueue_script('creative');

    wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', array(), 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

add_image_size('small', 200, 200, true); 
add_image_size('medium', 400, 400, true);

function basictheme_get_menu_items($menu_name){
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        return wp_get_nav_menu_items($menu->term_id);
    }
}