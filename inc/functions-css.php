<?php

/**
 * Enqueue scripts and styles.
 */
function buildr_vertical_wp_head_styles() { ?>

    <style type="text/css">

        /* ---------------------------------------------------------------------
         * Typography
         * ------------------------------------------------------------------ */

        ul.vertical-header-menu > li a {
            font-family: <?php echo esc_attr( get_theme_mod( BUILDR_OPTIONS::FONT_PRIMARY, BUILDR_DEFAULTS::FONT_PRIMARY ) ); ?>;
        }
        
        <?php if ( get_theme_mod( BUILDR_OPTIONS::NAVBAR_LINKS_FONT_FAMILY, BUILDR_DEFAULTS::NAVBAR_LINKS_FONT_FAMILY ) == 'secondary' ) : ?>

            ul.vertical-header-menu > li a {
                font-family: <?php echo esc_attr( get_theme_mod( BUILDR_OPTIONS::FONT_SECONDARY, BUILDR_DEFAULTS::FONT_SECONDARY ) ); ?>;
            }

        <?php endif; ?>
        
        ul.vertical-header-menu > li {
            font-size: <?php echo intval( get_theme_mod( BUILDR_OPTIONS::NAVBAR_LINKS_FONT_SIZE, BUILDR_DEFAULTS::NAVBAR_LINKS_FONT_SIZE ) ); ?>px;
        }
        
        header#masthead.header-style-vertical div#vertical-header-wrap #custom-logo-wrap img.custom-logo {
            height: <?php echo intval( get_theme_mod( BUILDR_OPTIONS::NAVBAR_LOGO_HEIGHT_DSK, BUILDR_DEFAULTS::NAVBAR_LOGO_HEIGHT_DSK ) ); ?>px;
        }
        
        header#masthead.header-style-vertical div#vertical-header-wrap #custom-logo-wrap {
            margin-top: <?php echo intval( get_theme_mod( BUILDR_OPTIONS::NAVBAR_BRANDING_SPACE_TOP_DSK, BUILDR_DEFAULTS::NAVBAR_BRANDING_SPACE_TOP_DSK ) ); ?>px;
            margin-bottom: <?php echo intval( get_theme_mod( BUILDR_OPTIONS::NAVBAR_BRANDING_SPACE_BOTTOM_DSK, BUILDR_DEFAULTS::NAVBAR_BRANDING_SPACE_BOTTOM_DSK ) ); ?>px;
        }
        
        @media (max-width:991px) {
            header#masthead.header-style-vertical #custom-logo-wrap {
                margin-top: 0;
                margin-bottom: 0;
                padding-top: <?php echo intval( get_theme_mod( BUILDR_OPTIONS::NAVBAR_BRANDING_SPACE_TOP_MBL, BUILDR_DEFAULTS::NAVBAR_BRANDING_SPACE_TOP_MBL ) ); ?>px !important;
                padding-bottom: <?php echo intval( get_theme_mod( BUILDR_OPTIONS::NAVBAR_BRANDING_SPACE_BOTTOM_MBL, BUILDR_DEFAULTS::NAVBAR_BRANDING_SPACE_BOTTOM_MBL ) ); ?>px !important;
            }
        }
        
        <?php if ( get_theme_mod( BUILDR_OPTIONS::NAVBAR_MENU_ALIGNMENT, BUILDR_DEFAULTS::NAVBAR_MENU_ALIGNMENT ) == 'right' || get_theme_mod( BUILDR_OPTIONS::NAVBAR_MENU_ALIGNMENT, BUILDR_DEFAULTS::NAVBAR_MENU_ALIGNMENT ) == 'center' ) : ?>
        
            <?php if ( get_theme_mod( BUILDR_OPTIONS::NAVBAR_MENU_ALIGNMENT, BUILDR_DEFAULTS::NAVBAR_MENU_ALIGNMENT ) == 'right' ) : ?>
            
                header#masthead.header-style-vertical #vertical-header-wrap ul#vertical-header-primary {
                    text-align: right;
                }
                
                #vertical-header-wrap ul.vertical-header-menu > li {
                    padding-left: 0;
                    padding-right: 15px;
                }
                
                #vertical-header-wrap ul.vertical-header-menu > li:before {
                    left: unset;
                    right: 0;
                }
            
            <?php else : ?>
        
                header#masthead.header-style-vertical #vertical-header-wrap ul#vertical-header-primary {
                    text-align: center;
                }
                
                #vertical-header-wrap ul.vertical-header-menu > li {
                    padding-left: 0 !important;
                    padding-right: 0 !important;
                }
                
                #vertical-header-wrap ul.vertical-header-menu > li:before {
                    visibility: hidden !important;
                }
                
            <?php endif; ?>
            
        <?php endif; ?>
                
        div#vertical-header-wrap #footer-branding-wrap {
            font-size: <?php echo intval( get_theme_mod( BUILDR_OPTIONS::FOOTER_COPYRIGHT_TAGLINE_FONT_SIZE, BUILDR_DEFAULTS::FOOTER_COPYRIGHT_TAGLINE_FONT_SIZE ) ); ?>px;
        }
        
        /* ---------------------------------------------------------------------
         * Colors
         * ------------------------------------------------------------------ */

        <?php $theme_colors = buildr_get_all_theme_colors(); ?>
        
        div#vertical-header-wrap ul#mobile-menu:before {
            background-color: <?php echo esc_attr( $theme_colors['primary'] ); ?>;
        }
        
        #vertical-header-wrap {
            color: <?php echo esc_attr( $theme_colors['navbar_fg'] ); ?>;
        }
        
        header#masthead.header-style-vertical .navbar-social a.navbar-icon {
            color: <?php echo esc_attr( $theme_colors['social_fg'] ); ?>;
        }

        header#masthead.header-style-vertical .navbar-social a.navbar-icon:hover {
            color: <?php echo esc_attr( $theme_colors['social_fg_hov'] ); ?>;
        }
        
        div#vertical-header-wrap #footer-branding-wrap svg path {
            fill: <?php echo esc_attr( $theme_colors['navbar_fg'] ); ?>;
        }
        
        ul#vertical-header-primary li a {
            color: <?php echo esc_attr( $theme_colors['navbar_fg'] ); ?>;
        }
        
        #vertical-header-menu-wrap {
            border-color: <?php echo esc_attr( buildr_hex2rgba( $theme_colors['navbar_fg'], .35 ) ); ?>;
        }
        
        #vertical-header-wrap ul.vertical-header-menu > li:before {
            background-color: <?php echo esc_attr( buildr_hex2rgba( $theme_colors['navbar_fg'], .65 ) ); ?>;
        }

        div#vertical-header-wrap #footer-branding-wrap {
            background: -moz-linear-gradient(top, rgba(255,255,255,0.0) 0%, <?php echo esc_attr( buildr_hex2rgba( $theme_colors['navbar_bg'] ) ); ?> 30%, <?php echo esc_attr( buildr_hex2rgba( $theme_colors['navbar_bg'] ) ); ?> 100%);
            background: -webkit-linear-gradient(top, rgba(255,255,255,0.0) 0%, <?php echo esc_attr( buildr_hex2rgba( $theme_colors['navbar_bg'] ) ); ?> 30%, <?php echo esc_attr( buildr_hex2rgba( $theme_colors['navbar_bg'] ) ); ?> 100%);
            background: linear-gradient(to bottom, rgba(255,255,255,0.0) 0%, <?php echo esc_attr( buildr_hex2rgba( $theme_colors['navbar_bg'] ) ); ?> 30%, <?php echo esc_attr( buildr_hex2rgba( $theme_colors['navbar_bg'] ) ); ?> 100%);
            /*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4dffffff', endColorstr='#ffffff',GradientType=0 );*/
        }
        
        span#vertical-menu-toggle-wrap {
            background-color: <?php echo esc_attr(get_theme_mod( BUILDR_VERTICAL_OPTIONS::VERT_NAVBAR_TAB_BACKGROUND, BUILDR_VERTICAL_DEFAULTS::VERT_NAVBAR_TAB_BACKGROUND ) ); ?>;
        }
        
        span#vertical-menu-toggle-wrap #vertical-menu-toggle .bar,
        span#vertical-menu-toggle-wrap #vertical-menu-toggle .bar:before,
        span#vertical-menu-toggle-wrap #vertical-menu-toggle .bar:after {
            background-color: <?php echo esc_attr(get_theme_mod( BUILDR_VERTICAL_OPTIONS::VERT_NAVBAR_TAB_FOREGROUND, BUILDR_VERTICAL_DEFAULTS::VERT_NAVBAR_TAB_FOREGROUND ) ); ?>;
        }
            
        /* ----- Navbar Colors & Image -------------------------------------- */

        header#masthead.header-style-vertical #vertical-header-wrap {
            background-color: <?php echo esc_attr( $theme_colors['navbar_bg'] ); ?>;
        }
        
        /* ---------------------------------------------------------------------
         * Other
         * ------------------------------------------------------------------ */

        <?php if ( get_theme_mod( BUILDR_OPTIONS::NAVBAR_HAS_SHADOW, BUILDR_DEFAULTS::NAVBAR_HAS_SHADOW ) ) : ?>
            
            header#masthead.header-style-vertical #vertical-header-wrap {
                box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.25);
            }
            
        <?php endif; ?>
            
        div#vertical-header-wrap #footer-branding-wrap img.custom-logo.alternate {
            height: <?php echo intval( get_theme_mod( BUILDR_OPTIONS::FOOTER_ALTERNATE_LOGO_HEIGHT, BUILDR_DEFAULTS::FOOTER_ALTERNATE_LOGO_HEIGHT ) ); ?>px;
        }
        
    </style>

<?php
}
add_action( 'wp_head', 'buildr_vertical_wp_head_styles' );
