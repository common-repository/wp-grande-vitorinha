<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Rahmon
 * @since             1.0.0
 * @package           WP_Grande_Vitorinha
 *
 * @wordpress-plugin
 * Plugin Name:       WP Grande Vitorinha
 * Plugin URI:        https://github.com/Rahmon/wp-grande-vitorinha
 * Description:       Use easily the font "Grande Vitorinha" in your website.
 * Version:           1.0.0
 * Author:            Rahmohn
 * Author URI:        https://github.com/Rahmon
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-grande-vitorinha
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-grande-vitorinha.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_grande_vitorinha() {

	$plugin = new WP_Grande_Vitorinha();
	$plugin->run();

}
run_wp_grande_vitorinha();
