<?php

function buildr_vertical_after_setup_theme() {
    require get_stylesheet_directory() . '/inc/functions-customizer.php';    
}
add_action( 'after_setup_theme', 'buildr_vertical_after_setup_theme', 100 );  

require get_stylesheet_directory() . '/inc/functions-enqueue.php';
require get_stylesheet_directory() . '/inc/functions-css.php';