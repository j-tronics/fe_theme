jQuery(document).ready(function ($) {
    /** Note: $() will work as an alias for jQuery() inside of this function */
    $('.nav-menu').slicknav({
        prependTo: 'nav',
        label: 'Menu'
    });
    //Detect if javascript is available in the browser, used by css to hide fallback menu
    $('nav').addClass('javascript');
});
