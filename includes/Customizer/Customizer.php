<?php
/**
 * Kirki Setup class file
 *
 * @package wp-starter-theme
 */

namespace Theme\Customizer;

use Theme\Traits\Singleton;

class Customizer {
	protected $config = 'theme_customizer_config';
	use Singleton;

	public function __construct () {
		if ( ! class_exists( 'Kirki' ) ) {
			return;
		}
		//Load the class methods
		$this->config();
		$this->load_panels();
		$this->load_sections();
	}

	public function config () {
		\Kirki::add_config( $this->config, [
			'capability'  => 'edit_theme_options',
			'option_type' => 'option',
		] );
	}

	public function load_panels () {
		//Load panels
		Panels\ThemeOptions::get_instance();
		//Panels\FrontPage::get_instance();
	}

	public function load_sections () {
		//Theme option sections
		Sections\ThemeOptions\Typography::get_instance();

		//Front page sections
		Sections\FrontPage\Sortable::get_instance();
		Sections\FrontPage\Hero::get_instance();
	}

}