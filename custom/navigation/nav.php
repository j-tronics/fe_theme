<script>
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
</script>



<script>
    (function ($) {
        $(document).on('click', '#top-menu li a', function (event) {
            event.preventDefault();
            var href = $(this).attr('href');
            var request_page_main_div = href + " #inner-body";
            $('#outer-wrap-centered').load( request_page_main_div);
        })
    })(jQuery);
</script>
