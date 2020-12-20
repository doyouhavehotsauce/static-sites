<?php



//Adds dynamic title tag support
function cp_theme_support(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'cp_theme_support');



//Create Nav Menus
function cp_create_menu(){
    $cp_nav = array(
        'desktop' => 'Full width nav for desktop',
        'mobile' => 'Mobile nav'
    );
    register_nav_menus($cp_nav);
}
add_action('init', 'cp_create_menu');



//registers stylesheets
function cp_register_styles(){
    wp_enqueue_style('cupcakeFactory-skeleton', get_template_directory_uri().'/assets/skeleton.css', array(), '5.1', 'all');
    wp_enqueue_style('cupcakeFactory-styles', get_template_directory_uri().'/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'cp_register_styles');


//registers js files
function cp_register_scripts(){
    wp_enqueue_script('cupcakeFactory-js', get_template_directory_uri().'/assets/script.js', array(), '1.1', true);
}
add_action('wp_enqueue_scripts', 'cp_register_scripts');




?>