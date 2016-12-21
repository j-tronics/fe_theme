<nav id="site-navigation" class="main-navigation" role="navigation">


	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php esc_html_e( 'Menu', 'fe_theme' ); ?>
	</button>
	<script>
		$(function () {
			// If the top men is not expanded
			if ($('top-menu').attr('aria-expanded') === false) {
				// Toggle the top-menu-expanded css class
				$( "ul#top-menu" ).toggleClass( "top-menu-expanded" )
			}
		});
	</script>

	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' ) ); ?>

</nav>
