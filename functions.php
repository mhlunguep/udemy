<?php


// Variables


// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));
include(get_theme_file_path('/includes/setup.php'));

// Hooks

add_action('wp_enqueue_scripts', 'u_enqueue_style');
add_action('wp_enqueue_scripts', 'u_enqueue_script');
add_action('wp_head', 'u_head', 5);
add_action('after_setup_theme', 'u_setup_theme');
