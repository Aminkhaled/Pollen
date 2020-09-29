<?php


function pollen_supports(){
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_theme_support('post_formats');
    add_image_size( 'page_background', 2560 , 1707 , true );
    add_image_size( 'page_medium', 540 , 360 , true );
    add_image_size('post_image',745,345,true);
    add_image_size('posts_images',345,145,true);



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

function excerpt($num) {
    $limit = $num+1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt)."... (<a href='" .get_permalink($post->ID) ." '>Read more</a>)";
    echo $excerpt;
}