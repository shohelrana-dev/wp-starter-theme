<?php
/**
 * The single template file
 *
 * @package wp-starter-theme
 */
?>
<aside class="sidebar">
	<?php
	if ( is_active_sidebar( 'BLOG_SIDEBAR' ) && is_home() ) {
		dynamic_sidebar( 'BLOG_SIDEBAR' );
	}
	if ( is_active_sidebar( 'SHOP_SIDEBAR' ) && function_exists( 'is_shop' ) && is_shop() ) {
		dynamic_sidebar( 'SHOP_SIDEBAR' );
	}
	?>
</aside>
