<?php
/**
 * The template used for displaying hero content.
 *
 * @package Floral_Events_Theme
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="fe_theme-hero">
		<?php the_post_thumbnail( 'fe_theme-hero' ); ?>
	</div>
<?php endif; ?>
