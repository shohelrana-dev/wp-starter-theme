<?php
require_once get_template_directory() . '/inc/Plugins/class-tgm-plugin-activation.php';

function wp_starter_theme_plugin_activation() {

    $plugins = [
        [
            'name'     => __( 'Kirki Customizer Framework', 'wp_starter_theme' ),
            'slug'     => 'kirki',
            'source'   => 'https://downloads.wordpress.org/plugin/kirki.3.1.5.zip',
            'required' => true,
        ],
        [
            'name'     => __( 'One Click Demo Import', 'wp_starter_theme' ),
            'slug'     => 'one-click-demo-import',
            'source'   => 'https://downloads.wordpress.org/plugin/one-click-demo-import.2.6.1.zip',
            'required' => true,
        ],
    ];

    $config = [
        'id'          => 'wp_starter_theme_plugins_activation',
        'menu'        => 'wp_starter_theme-plugins-activation',
        'parent_slug' => 'themes.php',
        'has_notices' => true,

    ];

    tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'wp_starter_theme_plugin_activation' );