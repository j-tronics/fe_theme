(function ($) {
    $(document).on('click', '.menu-item', function (event) {
        event.preventDefault();
        $.ajax({
            url: "http://localhost:8000",
            success: function( html ) {
                $('#main').find( 'article' ).remove();
                $('#main').append( html );
                //alert( result );
            }
        })

    })
})(jQuery);

$(document).ready(function () {
    // Find the nav-link and load the clicked on nav in the ajax-box
    $('.btn1').click(function (e) {
        e.stopPropagation();

        if ($(".site-content").is(":hidden")) {
            $(".site-content").slideDown();
            window.console && console.log('foo');

        } else {
            $(".site-content").slideUp();
            window.console && console.log('foo');

        }
    });
});