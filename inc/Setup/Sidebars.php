<?php
/**
 * Sidebars class file
 *
 * @package wp-starter-theme
 */

namespace Theme\Setup;

use Theme\Traits\Singleton;

class Sidebars {
	use Singleton;

	protected function __construct () {
		$this->setup_hooks();
	}

	public function setup_hooks () {
		//Action
		add_action( 'widgets_init', [ $this, 'register_sidebars' ] );
	}

	public function register_sidebars () {
		register_sidebar( [
			'name'          => __( 'Blog Sidebar', 'wp-starter-theme' ),
			'id'            => 'BLOG_SIDEBAR',
			'description'   => __( 'Widgets in this area will be shown on blog page.', 'wp-starter-theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>',
		] );

		if ( class_exists( 'WooCommerce' ) ) {
			register_sidebar( [
				'name'          => __( 'Shop Sidebar', 'wp-starter-theme' ),
				'id'            => 'SHOP_SIDEBAR',
				'description'   => __( 'Widgets in this area will be shown on shop page.', 'wp-starter-theme' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle">',
				'after_title'   => '</h3>',
			] );
		}

		register_sidebar( [
			'name'          => __( 'Footer #1', 'wp-starter-theme' ),
			'id'            => 'FOOTER_ONE',
			'description'   => __( 'Widgets in this area will be footer on page.', 'wp-starter-theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>',
		] );

		register_sidebar( [
			'name'          => __( 'Footer #2', 'wp-starter-theme' ),
			'id'            => 'FOOTER_TWO',
			'description'   => __( 'Widgets in this area will be footer on page.', 'wp-starter-theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>',
		] );

		register_sidebar( [
			'name'          => __( 'Footer #3', 'wp-starter-theme' ),
			'id'            => 'FOOTER_THREE',
			'description'   => __( 'Widgets in this area will be footer on page.', 'wp-starter-theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>',
		] );

		register_sidebar( [
			'name'          => __( 'Footer #4', 'wp-starter-theme' ),
			'id'            => 'FOOTER_FOUR',
			'description'   => __( 'Widgets in this area will be footer on page.', 'wp-starter-theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>',
		] );
	}
}