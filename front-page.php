<?php
/**
 * The static front page template
 *
 * @package Floral_Events_Theme
 */
if ('posts' == get_option('show_on_front')) : get_template_part('index');
else : get_header(); ?>
    <div id="primary" class="no-sidebar content-area">
        <main id="main" class="no-sidebar site-main" role="main">

            <div class="front-page-gallery">
                <img src="wp-content/themes/fe_theme/assets/images/front-page/aisle-decor.jpg">
                <img src="wp-content/themes/fe_theme/assets/images/front-page/centerpiece.jpg">
                <img src="wp-content/themes/fe_theme/assets/images/front-page/entry-display.jpg">
                <img src="wp-content/themes/fe_theme/assets/images/front-page/flower-wall.jpg">
            </div>
        </main>
    </div>
    <?php get_footer(); ?>
<?php endif; ?>
