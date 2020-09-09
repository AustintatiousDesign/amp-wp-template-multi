<?php
/**
 * WP_Rig\WP_Rig\theme_mods\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Theme_Mods;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\wp_rig;
use WP_Customize_Manager;
use function add_action;
use function add_filter;
use function is_admin;
use function get_theme_mod;
use function apply_filters;
use function wp_enqueue_script;
use function get_theme_file_uri;
use function get_theme_file_path;
use function wp_script_add_data;
use function remove_filter;
use function is_feed;
use function is_preview;
use function wp_kses_hair;

/**
 * Class for managing lazy-loading images.
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'theme_mods';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', [ $this, 'action_customize_register_theme_mods' ] );
	}

	/**
	 * Adds a setting and control for lazy loading the Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_customize_register_theme_mods( WP_Customize_Manager $wp_customize ) {
		$theme_mods_choices = [
			'theme_mods'    => __( 'Header-Features on (default)', 'wp-rig' ),
			'no-theme_mods' => __( 'Header-Features off', 'wp-rig' ),
		];

		$wp_customize->add_setting( 'sample_default_checkbox',
   [
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'skyrocket_switch_sanitization'
   ]
);
$wp_customize->add_setting( 'sample_default_textarea',
   [
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
   ]
);
$wp_customize->add_setting('hero_text_color',
  [
	'default' => '#f7f7f7',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('hero_tagline_text_color',
  [
	'default' => '#f7f7f7',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);
  $wp_customize->add_setting('hero_shadow_color',
  [
	'default' => '#333',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color'
  ]);

$wp_customize->add_control( 'sample_default_checkbox',
   [
      'label' => __( 'Default Checkbox Control', 'ephemeris' ),
      'description' => esc_html__( 'Sample description' ),
      'section'  => 'theme_options',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type'=> 'checkbox',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
   ],
   [
	'label' => __( 'Default Checkbox Control 2', 'ephemeris 2' ),
	'description' => esc_html__( 'Sample description 2' ),
	'section'  => 'theme_options',
	'priority' => 10, // Optional. Order priority to load the control. Default: 10
	'type'=> 'checkbox',
	'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
 ]
);
$wp_customize->add_control( 'sample_default_textarea',
   [
      'label' => __( 'Default Textarea Control' ),
      'description' => esc_html__( 'Sample description' ),
      'section' => 'theme_options',
      'priority' => 10, // Optional. Order priority to load the control. Default: 10
      'type' => 'textarea',
      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
      'input_attrs' => array( // Optional.
         'class' => 'my-custom-class',
         'style' => 'border: 1px solid #999',
         'placeholder' => __( 'Enter message...' ),
      ),
   ]
);

$wp_customize->add_control('hero_text_color',
[
  'label' => __( 'Site Title Text Color' ),
  'section' => 'title_tagline',
  'priority' => 20, // Optional. Order priority to load the control. Default: 10
  'type' => 'color',
  'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
]);
$wp_customize->add_control('hero_tagline_text_color',
[
  'label' => __( 'Tag Line Text Color' ),
  'section' => 'title_tagline',
  'priority' => 20, // Optional. Order priority to load the control. Default: 10
  'type' => 'color',
  'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
]);
$wp_customize->add_control('hero_shadow_color',
[
  'label' => __( 'Title & Tagline Shadow Color' ),
  'section' => 'title_tagline',
  'priority' => 20, // Optional. Order priority to load the control. Default: 10
  'type' => 'color',
  'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
]);
	}
}
