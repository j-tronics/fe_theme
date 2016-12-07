$(function () {
    $('form').on('submit', function (form) {
        console.log('submiting form');
        form.preventDefault();
        $.ajax({
            type: 'post',
            url: 'wp-content/themes/fe_theme/contact-form.php',
            data: $('form').serialize(),
            success: function () {
                alert('form was submitted');
            },
            error: function () {
                alert('Form Error')
            }
        });

    });

});