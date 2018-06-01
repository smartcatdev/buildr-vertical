<?php

function buildr_vertical_after_setup_theme() {
    if ( function_exists('buildr\get_plugin_path' ) ) {
        require get_stylesheet_directory() . '/inc/functions-customizer.php';    
    }
}
add_action( 'after_setup_theme', 'buildr_vertical_after_setup_theme', 100 );  

require get_stylesheet_directory() . '/inc/constants.php';
require get_stylesheet_directory() . '/inc/functions-enqueue.php';
require get_stylesheet_directory() . '/inc/functions-widgets.php';
require get_stylesheet_directory() . '/inc/functions-css.php';
