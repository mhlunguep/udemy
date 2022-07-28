<?php


function u_enqueue_style() {
    wp_register_style( 'u-font-rubik_and_pacifico', 'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap', [], null);
    wp_register_style( 'u-bootstrap_icons', get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css'), false );
    wp_register_style( 'u-theme', get_theme_file_uri('assets/public/index.css'), false );

    wp_enqueue_style( 'u-font-rubik_and_pacifico');
    wp_enqueue_style( 'u-bootstrap_icons');
    wp_enqueue_style( 'u-theme');
}
 
function u_enqueue_script() {
    wp_enqueue_script( 'my-js', 'filename.js', false );
}
 
