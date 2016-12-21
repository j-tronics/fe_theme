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

                        <form id="contact-form" >
                            <input type="hidden" name="action" value="contact_send"/>
                            <?php wp_nonce_field( "contact_form_nonce","contact_form_nonce") ?>

                            <div id="innerForm">
                                <div id="leftForm">
                                    <label for="contact_name">Name: <span>*</span>
                                        <input type="text" name="contact_name" placeholder="Your name.."/>
                                    </label>
                                    <br>

                                    <label for="contact_email">Email: <span>*</span>
                                        <input type="text" name="contact_email">
                                    </label>
                                    <br>


                                    <label for="contact_phone_number">Phone Number: <span>*</span>
                                        <input type="text" name="contact_phone_number">
                                    </label>
                                    <br>

                                    <label for="source_of_introduction">How did you here about us?: <span>*</span>
                                        <input type="text" name="source_of_introduction">
                                    </label>
                                    Whats 2 + 2:
                                    <input type="text" id="message_human" name="message_human"/>
                                    <br/>
                                    <br/>
                                </div>


                                <br>
                                <div id="rightForm">

                                    <label for="event_date">Event Date: <span>*</span>
                                        <input type="text" name="event_date">
                                    </label>
                                    <br>


                                    <label for="event_location">Event('s) Location: <span>*</span>
                                        <input type="text" name="event_location">
                                    </label>

                                    <br>

                                    <br>
                                    <label for="message_text">Message: <span>*</span>
                                        <textarea type="text" name="contact_message"></textarea>
                                    </label>

                                    <ul id="radio_budget_input">
                                        <li>
                                            <input type="radio" name="radio_budget_input" id="r1" value="$1000"><label
                                                for="r1">Less
                                                than $1000</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio_budget_input" id="r2"
                                                   value="$1000 - $1500"><label
                                                for="r2">$1000 - $1500</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio_budget_input" id="r3"
                                                   value="$2000 - $3000"><label
                                                for="r3">$2000 - $3000</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio_budget_input" id="r4"
                                                   value="$3000 - $4000"><label
                                                for="r4">$3000 - $4000</label>

                                        </li>
                                        <li>
                                            <input type="radio" name="radio_budget_input" id="r5"
                                                   value="$4000 - $5000"><label
                                                for="r5">$4000 - $5000</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio_budget_input" id="r6"
                                                   value="$5000 - $7500"><label
                                                for="r6">$5000 - $7500</label>

                                        </li>
                                        <li>
                                            <input type="radio" name="radio_budget_input" id="r7"
                                                   value="More than $7500"><label
                                                for="r7">More than $7500</label>
                                        </li>
                                    </ul>
                                    <input id="contact_form_submit_button" type="submit" value="Send Message"/>

                                </div>
                            </div>
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

                        function handleFormError () {
                            is_sending = false; // Reset the is_sending var so they can try again...
                            alert(failure_message);
                        }

                        function validateInputs () {
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