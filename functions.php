<?php

// My Theme Function



// Theme Titlle
add_theme_support('title-tag');


// Theme CSS and jQuery File calling
function  naimur_css_js_file_calling()
{
    wp_enqueue_style('naimur-style', get_stylesheet());
    // Registaring  the custom style
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'naimur_css_js_file_calling');
