jQuery(document).ready(function ($) {

    $('header#masthead.header-style-vertical #vertical-header-wrap').fadeIn();

    /* -------------------------------------------------------------------------
     * Main Menu: Expand Items
     * ---------------------------------------------------------------------- */
    
    $('#vertical-header-wrap ul.vertical-header-menu > li.menu-item-has-children ul.sub-menu').before( '<span style="font-family: Helvetica !important;">○</span>' );
    $( '#vertical-header-wrap ul.vertical-header-menu > li.menu-item-has-children > span' ).on( 'click', function() {
        if ( $(this).hasClass('expanded') ) {
            $(this).stop().html('○').toggleClass('expanded').parent().find('ul.sub-menu').stop().slideToggle();   
        } else {
            $(this).stop().html('●').toggleClass('expanded').parent().find('ul.sub-menu').stop().slideToggle();   
        }
    });

    /* -------------------------------------------------------------------------
     * Cart: Slide In Side-panel
     * ---------------------------------------------------------------------- */
    
    $('#vertical-menu-toggle-wrap').bigSlide({
        menu: 'header#masthead.header-style-vertical #vertical-header-wrap',
        push: '#vertical-navbar-push',
        menuWidth: '280px',
        side: 'left',
        beforeOpen: function() {
            $('#vertical-menu-toggle .bar').toggleClass('animate');
            $('#vertical-navbar-push,header#masthead.header-style-vertical #vertical-header-wrap').addClass('expanded');
        },
        afterClose: function() {
            $('#vertical-navbar-push,header#masthead.header-style-vertical #vertical-header-wrap').removeClass('expanded');
            $('#vertical-menu-toggle .bar').toggleClass('animate');
        }
    });
   
    /* -------------------------------------------------------------------------
     * SlimScroll Menu
     * ---------------------------------------------------------------------- */
    $('#vert-nav-slim-scroll-wrap').slimScroll({
        height: $(window).height() - $('header#masthead.header-style-vertical div#vertical-header-wrap #custom-logo-wrap').outerHeight() - $('header#masthead.header-style-vertical .navbar-social').outerHeight(),
        size: '0px',
        railVisible: false,
        railColor: '#e6e6e6',
        railOpacity: 1.0,
        color: '#333333',
        position: 'right'
    });
    
    $('#vert-nav-slim-scroll-wrap ul#vertical-header-primary').css('padding-bottom', $('div#vertical-header-wrap #footer-branding-wrap').outerHeight() + 150 );
    
});
