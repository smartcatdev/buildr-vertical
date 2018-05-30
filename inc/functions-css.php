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
        
        ul.vertical-header-menu > li a {
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
            header#masthead.header-style-vertical div#vertical-header-wrap #custom-logo-wrap {
                margin-top: 0;
                margin-bottom: 0;
                padding-top: <?php echo intval( get_theme_mod( BUILDR_OPTIONS::NAVBAR_BRANDING_SPACE_TOP_DSK, BUILDR_DEFAULTS::NAVBAR_BRANDING_SPACE_TOP_DSK ) ); ?>px;
                padding-bottom: <?php echo intval( get_theme_mod( BUILDR_OPTIONS::NAVBAR_BRANDING_SPACE_BOTTOM_DSK, BUILDR_DEFAULTS::NAVBAR_BRANDING_SPACE_BOTTOM_DSK ) ); ?>px;
            }
        }
        
        <?php if ( get_theme_mod( BUILDR_OPTIONS::NAVBAR_MENU_ALIGNMENT, BUILDR_DEFAULTS::NAVBAR_MENU_ALIGNMENT ) == 'right' || get_theme_mod( BUILDR_OPTIONS::NAVBAR_MENU_ALIGNMENT, BUILDR_DEFAULTS::NAVBAR_MENU_ALIGNMENT ) == 'center' ) : ?>
        
            <?php if ( get_theme_mod( BUILDR_OPTIONS::NAVBAR_MENU_ALIGNMENT, BUILDR_DEFAULTS::NAVBAR_MENU_ALIGNMENT ) == 'right' ) : ?>
            
                header#masthead.header-style-vertical #vertical-header-wrap ul#vertical-header-primary {
                    text-align: right;
                }
            
            <?php else : ?>
        
                header#masthead.header-style-vertical #vertical-header-wrap ul#vertical-header-primary {
                    text-align: center;
                }
                
            <?php endif; ?>
            
        <?php endif; ?>
        
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
        
        ul#vertical-header-primary li a {
            color: <?php echo esc_attr( $theme_colors['navbar_menu_fg'] ); ?>;
        }

        /* ----- Navbar Colors & Image -------------------------------------- */

        <?php if ( get_theme_mod( BUILDR_OPTIONS::NAVBAR_BG_STYLE, BUILDR_DEFAULTS::NAVBAR_BG_STYLE ) == 'color' ) : ?>

            header#masthead.header-style-vertical #vertical-header-wrap {
                background-color: <?php echo esc_attr( $theme_colors['navbar_bg'] ); ?>;
            }

        <?php else : ?>

            header#masthead.header-style-vertical #vertical-header-wrap {
                background-image: url(<?php echo esc_url( get_theme_mod( BUILDR_OPTIONS::NAVBAR_BG_IMAGE, BUILDR_DEFAULTS::NAVBAR_BG_IMAGE ) ); ?>);
            }

            header#masthead.header-style-vertical ul#mobile-menu {
                background-color: <?php echo esc_attr( $theme_colors['navbar_bg'] ); ?>;
            }

        <?php endif; ?>
        
        /* ---------------------------------------------------------------------
         * Other
         * ------------------------------------------------------------------ */

        <?php if ( get_theme_mod( BUILDR_OPTIONS::NAVBAR_HAS_SHADOW, BUILDR_DEFAULTS::NAVBAR_HAS_SHADOW ) ) : ?>
            
            header#masthead.header-style-vertical #vertical-header-wrap {
                box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.25);
            }
            
        <?php endif; ?>
        
    </style>

<?php
}
add_action( 'wp_head', 'buildr_vertical_wp_head_styles' );
