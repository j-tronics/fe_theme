<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

get_header(); ?>
	   <div id="primary" class="no-sidebar content-area">
            <main id="main" class="no-sidebar site-main" role="main">
                <?php while ( have_posts() ) : the_post();
                    the_content();
                endwhile; // end of the loop. ?>
            </main><!-- #main -->
	    </div><!-- #primary -->
<?php get_footer(); ?>