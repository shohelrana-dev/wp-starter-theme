<?php
/**
 * The main class file of theme
 *
 * @package wp-starter-theme
 */

namespace Theme;

use Theme\Customizer\Customizer;
use Theme\MetaBoxes\Page\HidePageTitle;
use Theme\Plugins\PluginActivation;
use Theme\Setup\Assets;
use Theme\Setup\Menus;
use Theme\Setup\Theme_Support;
use Theme\Setup\Sidebars;

/**
 * The main theme class
 *
 * @package Theme
 */
class Theme {

	public function boot () {
		$this->define_constants();
		$this->helpers();
		$this->setup_theme();
		$this->plugins();
		$this->meta_boxes();
		$this->customizer();
	}

	/**
	 * Define necessary constants
	 *
	 * @return void
	 */
	private function define_constants () {
		define( 'THEME_PATH', trailingslashit( get_theme_file_path() ) );
		define( 'THEME_URL', trailingslashit( get_theme_file_uri() ) );
		define( 'THEME_ASSETS', trailingslashit( get_theme_file_uri( '/assets' ) ) );
		define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );
	}

	/**
	 * Setup Theme
	 *
	 * @return void
	 */
	private function setup_theme () {
		Assets::get_instance();
		Menus::get_instance();
		Sidebars::get_instance();
		Theme_Support::get_instance();
	}

	/**
	 * Customizer
	 *
	 * @return void
	 */
	private function customizer () {
		Customizer::get_instance();
	}

	public function meta_boxes () {
		HidePageTitle::get_instance();
	}

	/**
	 * Activate necessary plugins
	 *
	 * @return void
	 */
	private function plugins () {
		require_once THEME_PATH . '/includes/Plugins/class-tgm-plugin-activation.php';
		require_once THEME_PATH . '/includes/Plugins/Kirki_Installer_Section.php';

		PluginActivation::get_instance();
	}

	/**
	 * Include necessary helper files
	 *
	 * @return void
	 */
	private function helpers () {
		require_once THEME_PATH . '/includes/helpers/template-tags.php';
		require_once THEME_PATH . '/includes/helpers/functions.php';
	}

}