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
use Theme\Setup\ThemeSupport;
use Theme\Setup\Sidebars;

/**
 * The main theme class
 *
 * @package Theme
 */
final class Theme {

	public function boot () {
		$this->define_constants();
		$this->includes();
		$this->setup_theme();
		$this->meta_boxes();
		$this->customizer();
	}

	/**
	 * Define necessary constants
	 *
	 * @return void
	 */
	private function define_constants () {
		define( 'THEME_DIR', trailingslashit( get_theme_file_path() ) );
		define( 'THEME_INC_DIR', trailingslashit( get_theme_file_path( '/includes' ) ) );
		define( 'THEME_LIB_DIR', trailingslashit( get_theme_file_path( '/library' ) ) );
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
		ThemeSupport::get_instance();
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
	private function plugin_activation () {
		PluginActivation::get_instance();
	}

	/**
	 * Include necessary files
	 *
	 * @return void
	 */
	private function includes () {
		require_once THEME_LIB_DIR . '/tgm-plugin-activation/class-tgm-plugin-activation.php';
		require_once THEME_LIB_DIR . '/kirki-installer/class-kirki-installer-section.php';
		require_once THEME_INC_DIR . '/helpers/template-tags.php';
		require_once THEME_INC_DIR . '/helpers/functions.php';
	}

}