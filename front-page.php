<?php
/**
 * The static front page template
 *
 * @package Floral_Events_Theme
 */
get_header(); ?>
<div id="primary" class="no-sidebar content-area">
    <main id="main" class="no-sidebar site-main" role="main">
        <div class="front-page-gallery">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/aisle-decor.jpg"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/centerpiece.jpg"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/entry-display.jpg"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/front-page/flower-wall.jpg"
            >
        </div>

        <div class="front_page_awards">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media-icons/perfect_wedding_guide.jpg"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media-icons/style_me_pretty.jpg"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media-icons/the_knot.png"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media-icons/wedding_wire.png"
            >
        </div>

    </main>
</div>
<?php get_footer(); ?>
