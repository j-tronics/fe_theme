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
                <form id="message_form" name="message_form" method="POST">
                    <div id="innerForm">


                        <div id="leftForm">
                            <label for="message_name">Name: <span>*</span>
                                <input type="text" name="message_name"/>
                            </label>
                            <br>

                            <label for="message_email">Email: <span>*</span>
                                <input type="text" name="message_email">
                            </label>
                            <br>


                            <label for="message_email">Phone Number: <span>*</span>
                                <input type="text" name="message_email">
                            </label>
                            <br>

                            <label for="message_email">How did you here about us?: <span>*</span>
                                <input type="text" name="message_email">
                            </label>
                            Whats 2 + 2:
                            <input type="text" id="message_human" name="message_human"/>
                            <br/>
                            <br/>
                        </div>


                        <br>
                        <div id="rightForm">

                            <label for="message_email">Event Date: <span>*</span>
                                <input type="text" name="message_email">
                            </label>
                            <br>


                            <label for="message_email">Event('s) Location: <span>*</span>
                                <input type="text" name="message_email">
                            </label>

                            <br>

                            <br>
                            <label for="message_text">Message: <span>*</span>
                                <textarea type="text" name="message_text"></textarea>
                            </label>

                            <ul id="radio_budget_input">
                                <li>
                                    <input type="radio" name="radio_budget_input" id="r1" value="$1000"><label for="r1">Less
                                        than $1000</label>
                                </li>
                                <li>
                                    <input type="radio" name="radio_budget_input" id="r2" value="$1000 - $1500"><label
                                        for="r2">$1000 - $1500</label>
                                </li>
                                <li>
                                    <input type="radio" name="radio_budget_input" id="r3" value="$2000 - $3000"><label
                                        for="r3">$2000 - $3000</label>
                                </li>
                                <li>
                                    <input type="radio" name="radio_budget_input" id="r4" value="$3000 - $4000"><label
                                        for="r4">$3000 - $4000</label>

                                </li>
                                <li>
                                    <input type="radio" name="radio_budget_input" id="r5" value="$4000 - $5000"><label
                                        for="r5">$4000 - $5000</label>
                                </li>
                                <li>
                                    <input type="radio" name="radio_budget_input" id="r6" value="$5000 - $7500"><label
                                        for="r6">$5000 - $7500</label>

                                </li>
                                <li>
                                    <input type="radio" name="radio_budget_input" id="r7" value="More than $7500"><label
                                        for="r7">More than $7500</label>
                                </li>
                            </ul>
                            <input type="submit" value="Submit"/>

                        </div>
                    </div>
                </form>
            </div>

        </div>


        <footer class="entry-footer">
            <?php
            edit_post_link(
                sprintf(
                /* translators: %s: Name of current post */
                    esc_html__('Edit %s', 'fe_theme'),
                    the_title('<span class="screen-reader-text">"', '"</span>', false)
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
        </footer>
    </article><!-- #post-## -->
    


<?php get_footer(); ?>