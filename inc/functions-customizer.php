<?php

/**
 * Buildr Vertical Theme Customizer
 *
 * @package Buildr
 */
include_once buildr\get_plugin_path( '/inc/lib/Acid/acid.php' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function buildr_vertical_customize_register( $wp_customize ) {
    
    // Housekeeping ------------------------------------------------------------
    // End Housekeeping --------------------------------------------------------
    
    // Priority ----------------------------------------------------------------
    $wp_customize->get_section( 'section_nav_general' )->priority = 1;
    $wp_customize->get_control( BUILDR_OPTIONS::NAVBAR_STYLE )->priority = 1;
    // End Priority ------------------------------------------------------------
    
    // Selective Refresh -------------------------------------------------------
    if ( isset( $wp_customize->selective_refresh ) ) {
        
    }
    // End Selective Refresh ---------------------------------------------------
}
add_action( 'customize_register', 'buildr_vertical_customize_register', 99 );

$acid = acid_instance( buildr\get_plugin_url( '/inc/lib/' ) );

$data = array (

    'panels' => array (
    
        // Panel: Navbar -------------------------------------------------------
        'panel_navbar' => array (

            'title'         => __( 'Navbar', 'buildr' ),
            'desciption'    => __( 'Customize the primary navbar on your site, including control over appearance & behaviour', 'buildr' ),
            'sections'      => array (

                // Section : Navbar General Settings ---------------------------
                'section_nav_general' => array (

                    'title' => __( 'General Settings', 'buildr' ),
                    'options' => array (

                        BUILDR_OPTIONS::NAVBAR_STYLE => array (
                            'type'          => 'radio-toggle',
                            'label'         => __( 'Navbar Style', 'buildr' ),
                            'default'       => BUILDR_DEFAULTS::NAVBAR_STYLE,
                            'choices'   => array (
                                'slim_split'    => __( 'Slim - Centered & Split', 'buildr' ),
                                'slim_left'     => __( 'Slim - Left Aligned', 'buildr' ),
                                'banner'        => __( 'Banner', 'buildr' ),
                                'vertical'      => __( 'Vertical', 'buildr' ),
                            )
                        ),
                        
                    )

                ),

            ), // End of Navbar Sections

        ), // End of Navbar Panel

    ), // End of Panels

);

$acid->config( $data );
