<nav id="site-navigation" class="main-navigation" role="navigation">

	<script>
		//small-menu accordian toggle
		$(function () {
			if ($('top-menu').attr('aria-expanded') === false) {
				//
				$( "ul#top-menu" ).toggleClass( "top-menu-expanded" )
			}
		})
	</script>

	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'fe_theme' ); ?></button>


	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' ) ); ?>
</nav>
