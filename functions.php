<?php 

// Created function to load CSS and JS files
function theme_files() {
    
    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');
}

// Add Wordpress actions
add_action('wp_enqueue_scripts', 'theme_files');

?>