<?php


function pollen_supports(){
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support('post_formats');
    add_image_size( 'page_background', 2560 , 1707 , true );
}
add_action('after_setup_theme','pollen_supports');

if(! function_exists('pollen_register_theme')){
    function pollen_register_theme(){
        register_nav_menus(array(
            'primary_pollen' => __('Primary Menu','Pollen'),
            'footer_pollen' => __('Footer Menu','Pollen')

        ));
    }
    add_action('after_setup_theme','pollen_register_theme');
}
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );