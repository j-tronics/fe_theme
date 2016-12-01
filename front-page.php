<?php
/**
 * The static front page template
 *
 * @package Floral_Events_Theme
 */
if ('posts' == get_option('show_on_front')) : get_template_part('index'); else : get_header(); ?>
    <div id="primary" class="no-sidebar content-area">
        <main id="main" class="no-sidebar site-main" role="main">
            <?php while (have_posts()) : the_post();

                the_content();

            endwhile; ?>
        </main>
    </div>
    <?php get_footer(); ?>
<?php endif; ?>
