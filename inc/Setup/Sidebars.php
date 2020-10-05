<?php
/**
 * Sidebars class file
 *
 * @package starter-theme
 */

namespace Theme\Setup;
use Theme\Traits\Singleton;

class Sidebars {
    use Singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        //Action
        add_action( 'widgets_init', [$this, 'register_sidebars'] );
    }

    public function register_sidebars() {
        register_sidebar( [
            'name'          => __( 'Shop Sidebar', 'starter-theme' ),
            'id'            => 'shop-sidebar',
            'description'   => __( 'Widgets in this area will be shown on shop page.', 'starter-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        ] );
        register_sidebar( [
            'name'          => __( 'Blog Sidebar', 'starter-theme' ),
            'id'            => 'blog-sidebar',
            'description'   => __( 'Widgets in this area will be shown on blog page.', 'starter-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        ] );
    }
}