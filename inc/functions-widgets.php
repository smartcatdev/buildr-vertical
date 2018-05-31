<?php

function buildr_vertical_deregister_sidebars(){

    // Unregister the Prefooter widget area
    if ( get_theme_mod( BUILDR_OPTIONS::NAVBAR_STYLE, BUILDR_DEFAULTS::NAVBAR_STYLE ) == 'vertical' ) {
        unregister_sidebar( 'sidebar-footer' );
    }
        
}
add_action( 'widgets_init', 'buildr_vertical_deregister_sidebars', 11 );
