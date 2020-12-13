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
		add_action( 'widgets_init', [ $this, 'register_sidebars' ] );
	}

	public function register_sidebars () {
		register_sidebar( [
			'name'          => __( 'Blog Sidebar', 'wp-starter-theme' ),
			'id'            => 'blog-sidebar',
			'description'   => __( 'Widgets in this area will be shown on blog page.', 'wp-starter-theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widgettitle">',
			'after_title'   => '</h5>',
		] );

		if ( class_exists( 'WooCommerce' ) ) {
			register_sidebar( [
				'name'          => __( 'Shop Sidebar', 'wp-starter-theme' ),
				'id'            => 'shop-sidebar',
				'description'   => __( 'Widgets in this area will be shown on shop page.', 'wp-starter-theme' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h5 class="widgettitle">',
				'after_title'   => '</h5>',
			] );
		}

		register_sidebar( [
			'name'          => __( 'Footer #1', 'wp-starter-theme' ),
			'id'            => 'footer-one',
			'description'   => __( 'Widgets in this area will be footer on page.', 'wp-starter-theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widgettitle">',
			'after_title'   => '</h5>',
		] );

		register_sidebar( [
			'name'          => __( 'Footer #2', 'wp-starter-theme' ),
			'id'            => 'footer-two',
			'description'   => __( 'Widgets in this area will be footer on page.', 'wp-starter-theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widgettitle">',
			'after_title'   => '</h5>',
		] );

		register_sidebar( [
			'name'          => __( 'Footer #3', 'wp-starter-theme' ),
			'id'            => 'footer-three',
			'description'   => __( 'Widgets in this area will be footer on page.', 'wp-starter-theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widgettitle">',
			'after_title'   => '</h5>',
		] );

		register_sidebar( [
			'name'          => __( 'Footer #4', 'wp-starter-theme' ),
			'id'            => 'footer-four',
			'description'   => __( 'Widgets in this area will be footer on page.', 'wp-starter-theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widgettitle">',
			'after_title'   => '</h5>',
		] );
	}
}