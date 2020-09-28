<?php


function pollen_supports(){
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
}
add_action('after_setup_theme','pollen_supports');

if(! function_exists('pollen_register_theme')){
    function pollen_register_theme(){
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu','Pollen'),
            'footer_menu' => __('Footer Menu','Pollen')

        ));
    }
    add_action('after_setup_theme','pollen_register_theme');
}