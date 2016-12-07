<?php
/**
 * Template Name: Galleries Page
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


            <div>
                <?php
                // get the current page slug and id
                $slug = get_post_field('post_name', get_post());
                $id = get_the_ID();
                // get the parents slug and id
                $parent_post_id = reset(get_post_ancestors($id));
                $parent_post_slug = get_post_field('post_name', $parent_post_id);
                // Use the slug to find the correct images directory and load any found images into img tags.
                $handle = opendir(dirname(realpath(__FILE__)) . '/../assets/images/' . $parent_post_slug . '/' . $slug);
                while ($file = readdir($handle)) {
                    if ($file !== '.' && $file !== '..') {
                        echo '<img src="wp-content/themes/fe_theme/assets/images/' . $parent_post_slug . '/' . $slug . '/' . $file . '" border="0" />';
                    }
                } ?>
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