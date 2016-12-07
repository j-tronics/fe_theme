$(function () {
    // If the top men is not expanded
    if ($('top-menu').attr('aria-expanded') === false) {
        // Toggle the top-menu-expanded css class 
        $( "ul#top-menu" ).toggleClass( "top-menu-expanded" )
    }
});