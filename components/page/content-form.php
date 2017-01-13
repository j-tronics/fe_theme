<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Floral_Events_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="contact-form">
    <header class="entry-header">
    </header>
    <div class="entry-content contact-form">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'fe_theme'),
            'after' => '</div>',
        ));
        ?>
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