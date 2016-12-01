<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Floral_Events_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
    <!--<<script src="/wp-content/themes/fe_theme/assets/js/singlePageApp.js" ></script>-->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="inner-body">
    <div id="outer-wrap-centered" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'fe_theme'); ?></a>

        <div id="full-height-wrappper">
        <header id="masthead" class="site-header" role="banner">


            <?php fe_theme_the_custom_logo(); ?>

            <?php
            if (is_front_page()) :
                get_template_part('components/features/hero-image/content', 'hero');

            endif; ?>


            <?php get_template_part('components/navigation/navigation', 'top'); ?>


            <?php fe_theme_social_menu(); ?>

        </header>
        <div id="content" class="site-content">