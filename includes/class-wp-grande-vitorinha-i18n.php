<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/Rahmon
 * @since      1.0.0
 *
 * @package    WP_Grande_Vitorinha
 * @subpackage WP_Grande_Vitorinha/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    WP_Grande_Vitorinha
 * @subpackage WP_Grande_Vitorinha/includes
 * @author     Rahmohn
 */
class WP_Grande_Vitorinha_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-grande-vitorinha',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
