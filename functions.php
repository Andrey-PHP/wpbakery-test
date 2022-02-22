<?php

/**
 * Theme css & js
 */

define( 'FRONT_PATH', get_stylesheet_directory_uri() );

function bakerytest_scripts_styles() {
    $in_footer = true;
    // Loads our main stylesheet.
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array() );

    // Front css
    wp_enqueue_style( 'main-style', FRONT_PATH . '/markup/build/css/main.css', array() );

    // JavaScript for theme
    wp_enqueue_script( 'main-script', FRONT_PATH . '/markup/build/js/main.js', array( 'jquery' ), time(), $in_footer );
}

add_action( 'wp_enqueue_scripts', 'bakerytest_scripts_styles' );
