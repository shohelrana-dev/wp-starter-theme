<?php
/**
 * The single template file
 *
 * @package wp-starter-theme
 */
?>
<aside class="sidebar">
	<?php
	if ( is_active_sidebar( 'blog-sidebar' ) && is_home() ) {
		dynamic_sidebar( 'blog-sidebar' );
	}
	if ( is_active_sidebar( 'shop-sidebar' ) && function_exists( 'is_shop' ) && is_shop() ) {
		dynamic_sidebar( 'SHOP-SIDEBAR' );
	}
	?>
</aside>
