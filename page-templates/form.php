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
            <?php while (have_posts()) : the_post();
                the_content();
            endwhile; // end of the loop. ?>

            <form name="message_form" method="POST" onsubmit="return form_validation()" action="<?php include( get_template_directory() . '/contact-form.php'); ?>">
                Your Name:
                    <input type="text" name="message_name"/>
                <br/>
                <br/>
                Your Email:
                    <input type="text" name="message_email"/>
                <br/>
                <br/>
                Your Message:
                    <input type="text" name="message_text"/>
                <br/>
                <br/>
                Whats 2 + 2:
                    <input type="text" id="message_human" name="message_human"/>
                <br/>
                <br/>
                <input type="submit" value="Submit"/>
                <br/>
                <br/>
            </form>
        </div>



        <footer class="entry-footer">
            <?php
            edit_post_link(
                sprintf(
                /* translators: %s: Name of current post */
                    esc_html__( 'Edit %s', 'fe_theme' ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer>
    </article><!-- #post-## -->

    <script type="text/javascript">
        function form_validation() {
            /* Check the Customer Name for blank submission*/
            var message_name = document.forms["message_form"]["message_name"].value;

            if (message_name == "" || message_name == null) {
                alert("Name field must be filled.");
                return false;
            }

            /* Check the Customer Email for invalid format */
            var message_email = document.forms["message_form"]["message_email"].value;
            var at_position = message_email.indexOf("@");
            var dot_position = message_email.lastIndexOf(".");
            if (at_position < 1 || dot_position < at_position + 2 || dot_position + 2 >= message_email.length) {
                alert("Given email address is not valid.");
                return false;
            }
        }
    </script>

<?php get_footer(); ?>