<?php


get_header(); ?>
<div id="primary" class="no-sidebar content-area">
    <main id="main" class="no-sidebar site-main" role="main">
        <h1> Ceremonies </h1>
        <div class="gallery_index_page">
            <a href="<?php echo get_permalink(get_page_by_title('cakes')) ?>" class="gallery_column">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/receptions/index/cakes.jpg">
                <p>Cakes</p>
            </a>
            <div class="gallery_center">
                <a class="gallery_center_left" href="<?php echo get_permalink(get_page_by_title('entry-displays')) ?>">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/receptions/index/entry-displays.jpg">
                    <p>Entry displays</p>
                </a>
                <a class="gallery_center_right" href="<?php echo get_permalink(get_page_by_title('guest-tables')) ?>">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/receptions/index/guest-tables.jpg">
                    <p>Guest Tables</p>
                </a>
            </div>
            <a class="gallery_column" href="<?php echo get_permalink(get_page_by_title('royal-table')) ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/receptions/index/royal-table.jpg">
                <p>Royal Table</p>
            </a>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
