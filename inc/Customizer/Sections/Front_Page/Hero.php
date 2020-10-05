<?php
/**
 * Hero class file for customizer
 *
 * @package starter-theme
 */

namespace Theme\Customizer\Sections\Front_Page;

use Theme\Customizer\Panels\Front_Page;

class Hero extends Front_Page {
    protected $section     = 'front_page_hero_section';
    protected $option_name = 'front_page_hero_section';

    public function __construct() {
        //Load section & fields
        $this->register_section();
        $this->register_fields();
    }

    public function register_section() {
        \Kirki::add_section( $this->section, [
            'title'    => esc_html__( 'Hero Section', 'starter-theme' ),
            'panel'    => $this->panel,
            'priority' => 160,
        ] );
    }

    public function register_fields() {

    	\Kirki::add_field( $this->config, [
            'type'     => 'background',
            'settings' => 'front_page_hero_section_bg',
            'label'    => esc_html__( 'Section Background', 'starter-theme' ),
            'section'  => $this->section,
            'priority' => 10,
            'default'   => [
                'background-color'      => '#ddd',
                'background-repeat'     => 'no-repeat',
                'background-position'   => 'center center',
                'background-size'       => 'cover',
                'background-attachment' => 'scroll',
            ],
            'transport' => 'auto',
            'output'    => [
                [
                    'element' => '#hero',
                ],
            ],
        ] );


        \Kirki::add_field( $this->config, [
            'type'     => 'toggle',
            'settings' => 'display_section',
            'label'    => esc_html__( 'Display Hero Section', 'starter-theme' ),
            'section'  => $this->section,
            'option_name' => $this->option_name,
            'default'  => '1',
            'partial_refresh' => [
                $this->section . 'display_section' => [
                    'selector'        => '#hero-slider',
                    'render_callback' => '__return_true'
                ]
            ],
        ] );

        \Kirki::add_field( $this->config, [
            'type'        => 'text',
            'settings'    => 'section_title',
            'label'       => esc_html__( 'Section title', 'starter-theme' ),
            'section'     => $this->section,
            'option_name' => $this->option_name,
            'partial_refresh' => [
                $this->section . 'display_section' => [
                    'selector'        => '#hero .section-title',
                    'render_callback' => function () {
                        return get_option( $this->option_name )['section_title'];
                    },
                ],
            ],
        ] );
    }

}