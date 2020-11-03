<?php 





function loadAssets(){
    wp_enqueue_style( 'theme', get_template_directory_uri().'/dist/main.css', [], rand(111,9999), 'all');

}   

add_action('wp_enqueue_scripts', 'loadAssets');


// Theme Options
add_theme_support('menus');
//add featured image
add_theme_support('post-thumbnails');
//enable sidebar
add_theme_support('widgets');



register_nav_menus(
    
    array(
        'header-menu' => 'Header'
    )

    );






















    function hide_admin_bar(){ return false; }
    add_filter( 'show_admin_bar', 'hide_admin_bar' );
    


























?>

