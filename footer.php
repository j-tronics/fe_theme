<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Floral_Events_Theme
 */

?>


<footer id="colophon" class="site-footer" role="contentinfo">
    <?php get_template_part('components/footer/site', 'info'); ?>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="wp-content/themes/fe_theme/assets/js/expand-top-menu.js"></script>
<script src="wp-content/themes/fe_theme/assets/js/contact_form_submission.js"></script>

<?php wp_footer(); ?>

</body>
</html>
