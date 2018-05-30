<?php

/**
 * Enqueue scripts and styles.
 */
function buildr_vertical_scripts() {
    
    $parent_style = 'buildr-style';

    // Styles
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'buildr-vertical', 
        get_stylesheet_directory_uri() . '/assets/css/buildr-vertical.css', 
        array( $parent_style, 'buildr-util', 'buildr' ), 
        BUILDR_VERSION 
    );
    
    // Scripts
    wp_enqueue_script( 'buildr-vertical',
        get_stylesheet_directory_uri() . '/assets/js/buildr-vertical.js', 
        array('jquery', 'bigSlide'), 
        BUILDR_VERSION, 
        true 
    );
    
}
add_action( 'wp_enqueue_scripts', 'buildr_vertical_scripts' );
