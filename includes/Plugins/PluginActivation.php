<?php

namespace Theme\Plugins;

class PluginActivation {
	use \Theme\Traits\Singleton;

	public function __construct () {
		add_action( 'tgmpa_register', [ $this, 'theme_plugin_activation' ] );
	}

	public function theme_plugin_activation () {
		tgmpa( $this->get_plugins(), $this->get_config() );
	}

	public function get_plugins () {
		return [
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
	}

	public function get_config () {
		return [
			'id'          => 'wp_starter_theme_plugins_activation',
			'menu'        => 'wp_starter_theme-plugins-activation',
			'parent_slug' => 'themes.php',
			'has_notices' => true,

		];
	}
}

