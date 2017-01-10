<?php


get_header(); ?>
    <div id="primary" class="no-sidebar content-area">
        <main id="main" class="no-sidebar site-main" role="main">
            <h1> Ceremonies </h1>
            <div class="gallery_index_page">
                <a href="<?php echo get_permalink(get_page_by_title('aisles')) ?>" class="gallery_column">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ceremonies/index/aisles.jpg">
                    <p>Aisles</p>
                </a>
                <div class="gallery_center">
                    <a class="gallery_center_left" href="<?php echo get_permalink(get_page_by_title('bouquets')) ?>">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/ceremonies/index/bouquets.jpg">
                        <p>Bouquets</p>
                    </a>
                    <a class="gallery_center_right"
                       href="<?php echo get_permalink(get_page_by_title('personal_flowers')) ?>">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/ceremonies/index/personal_flowers.jpg">
                        <p>Personal Flower</p>
                    </a>
                </div>
                <a class="gallery_column" href="<?php echo get_permalink(get_page_by_title('altars')) ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ceremonies/index/altars.jpg">
                    <p>Altars</p>
                </a>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>