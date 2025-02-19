<?php

// My Theme Function



// Theme Titlle
add_theme_support('title-tag');


// Theme CSS and jQuery File calling
function  naimur_css_js_file_calling()
{
    wp_enqueue_style('naimur-style', get_stylesheet());
}

add_action('wp_enqueue_scripts', 'naimur_css_js_file_calling');
