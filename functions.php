<?php

require_once('class-lagstheme2-navwalker.php');
require_once('inc/customizer.php');
function wp_myAssets(){
    wp_enqueue_style('styles', get_stylesheet_uri());
    wp_enqueue_style('fa-icons', '//use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/main.js', [], null, true);
}

function wp_theme_setup(){
    register_nav_menus([
        'primary' => __('Primary', 'lagstheme2')
    ]);
    add_theme_support('post-thumbnails');
}
function wp_init_widgets($id){
    register_sidebar([
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}

add_action('wp_enqueue_scripts','wp_myAssets');

add_action('after_setup_theme', 'wp_theme_setup');

add_action('widgets_init', 'wp_init_widgets');