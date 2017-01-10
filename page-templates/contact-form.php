<?php
/**
 * Template Name: Form Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */


get_header(); ?>
    <div id="primary" class="no-sidebar content-area">
        <main id="main" class="no-sidebar site-main" role="main">
            <article class="page type-page">
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>
                <div class="entry-content">
                    <div id="center-form">
                        <form id="contact-form">
                            <input type="hidden" name="action" value="contact_send"/>
                            <?php wp_nonce_field("contact_form_nonce", "contact_form_nonce") ?>
                            <p>
                                Use this contact form to get in touch with the Floral Events team.
                                Please add your contact info and information on the date and location of the wedding.
                            </p>
                            <input type="text" name="contact_name" placeholder="Your name.."/>
                            <input type="text" name="contact_email" placeholder="Email">
                            <input type="text" name="contact_phone_number" placeholder="Phone Number">
                            <input type="text" name="source_of_introduction" placeholder="How did you hear about us?">
                            <input type="text" name="event_date" placeholder="Event Date">
                            <input type="text" name="event_location" placeholder="Event Location">
                            <textarea type="text" name="contact_message">Our Wedding and Event planners are available for consultations on weekdays, leave your desired appointment dates and times here.</textarea>
                            <p>
                                Consolidations are available via in Person, Phone or Skype.
                            </p>
                            <input id="contact_form_submit_button" type="submit" value="Send Message"/>
                        </form>
                    </div>
                </div>
                <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        var is_sending = false, failure_message = 'Whoops, looks like there was a problem. Please try again later.';

                        $('#contact-form').submit(function (e) {
                            if (is_sending || !validateInputs()) {
                                return false; // Don't let someone submit the form while it is in-progress...
                            }
                            e.preventDefault(); // Prevent the default form submit
                            $this = $(this); // Cache this
                            $.ajax({
                                url: '<?php echo admin_url("admin-ajax.php") ?>', // Let WordPress figure this url out...
                                type: 'post',
                                dataType: 'JSON', // Set this so we don't need to decode the response...
                                data: $this.serialize(), // One-liner form data prep...
                                beforeSend: function () {
                                    is_sending = true;
                                    // You could do an animation here...
                                },
                                error: handleFormError,
                                success: function (data) {
                                    if (data.status === 'success') {
                                        // Here, you could trigger a success message
                                    } else {
                                        handleFormError(); // If we don't get the expected response, it's an error...
                                    }
                                }
                            });
                        });

                        function handleFormError() {
                            is_sending = false; // Reset the is_sending var so they can try again...
                            alert(failure_message);
                        }

                        function validateInputs() {
                            var $name = $('input[name="contact_name"]').val(),
                                $email = $('input[name="contact_email"]').val(),
                                $message = $('textarea[name="contact_message"]').val();
                            if (!$name || !$email || !$message) {
                                alert('Before sending, please make sure to provide your name, email, and message.');
                                return false;
                            }
                            return true;
                        }
                    });
                </script>
            </article><!-- #post-## -->
        </main>
    </div>
<?php get_footer(); ?>