<?php

/**
* 
* All CSS & JS file enqueue.
* 
*/



// Theme CSS and JS file calling.
function comote_css_js_file_calling()
{
    //Style CSS
    wp_enqueue_style('comote-style', get_stylesheet_uri());
    // Nioicon CSS register
    wp_register_style('nioicon', get_template_directory_uri() . '/assets/css/nioicon.css', array(), '1.0.1', 'all');
    // Bootstrap CSS register
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.0', 'all');
    // Owl carousel CSS register
    wp_register_style('owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4', 'all');
    // Owl carousel theme CSS register
    wp_register_style('owl-carousel-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '2.3.4', 'all');
    // Theme CSS register
    wp_register_style('theme-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1', 'all');

    // Nioicon CSS enqueue
    wp_enqueue_style('nioicon');
    // Bootstrap CSS enqueue
    wp_enqueue_style('bootstrap');
    // owl-carousel CSS enqueue
    wp_enqueue_style('owl-carousel-css');
    // owl-carousel CSS enqueue
    wp_enqueue_style('owl-carousel-theme-css');
    // Main CSS enqueue
    wp_enqueue_style('theme-css');


    // Javascript & jQuery
    // Load jQuery
    wp_enqueue_script('jquery');
    // Bootstrap JS
    wp_enqueue_script('bootstrap', get_theme_file_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.0.0', true);
    // Owl carousel
    wp_enqueue_script('owl-carousel', get_theme_file_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
    // Waypoints
    wp_enqueue_script('waypoints', get_theme_file_uri() . '/assets/js/waypoints.min.js', array('jquery'), '2.0.3', true);
    //Main script
    wp_enqueue_script('main-js', get_theme_file_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'comote_css_js_file_calling');



// Google fonts
function comote_add_google_fonts()
{
    wp_enqueue_style('uum_google_font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap', false);
}
add_action('wp_enqueue_scripts', 'comote_add_google_fonts');