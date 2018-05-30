jQuery(document).ready(function ($) {

    /* -------------------------------------------------------------------------
     * Cart: Slide In Side-panel
     * ---------------------------------------------------------------------- */
  
    $('.masonry-card-blog .blog_item_wrap .blog_item .meta-stats span').bigSlide({
        menu: 'header#masthead.header-style-vertical #vertical-header-wrap',
        push: '#vertical-navbar-push',
        menuWidth: '280px',
        side: 'left',
        beforeOpen: function() {
            $('#vertical-navbar-push,header#masthead.header-style-vertical #vertical-header-wrap').addClass('expanded');
        },
        afterClose: function() {
            $('#vertical-navbar-push,header#masthead.header-style-vertical #vertical-header-wrap').removeClass('expanded');
        }
    });
    
});
