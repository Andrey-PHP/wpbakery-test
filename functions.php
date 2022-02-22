<?php

/**
 * Theme css & js
 */

define( 'FRONT_PATH', get_stylesheet_directory_uri() );

function bakerytest_scripts_styles() {
    $in_footer = true;
    // Loads our main stylesheet.
    wp_enqueue_style( 'bakerytheme-style', get_stylesheet_uri(), array(), 1.0 );

    // Front css
    wp_enqueue_style( 'bakerytheme-main-style', FRONT_PATH . '/markup/build/css/main.css', array() );

    // JavaScript for theme
    wp_enqueue_script( 'bakerytheme-main-script', FRONT_PATH . '/markup/build/js/main.js', array( 'jquery' ), time(), $in_footer );
}

add_action( 'wp_enqueue_scripts', 'bakerytest_scripts_styles' );

// Allow upload svg type
function cc_mime_types($mimes) {
    // New allowed mime types.
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}

add_filter( 'upload_mimes', 'cc_mime_types' );


// Require new custom Element
require_once( get_template_directory().'/vc-components/vc-soda-blockquote.php' );