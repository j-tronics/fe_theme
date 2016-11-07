(function ($) {
    $(document).on('click', '#top-menu li a', function (event) {
        //Stop the page redirect
        event.preventDefault();
        // Get the url of the clicked link
        var hrefURL = $(this).attr('href');
        // Add the url plus the content from the returned html string
        var request_url_and_page_main_div = hrefURL + " #outer-wrap-centered";
        // Perform an ajax request to load the
        function updateURL() {
            // State Object, Page Title and the Url to replace the current url
            history.pushState({}, "Page Title", hrefURL);
        }
        $('#inner-body').load(request_url_and_page_main_div, updateURL);
    })
})(jQuery);