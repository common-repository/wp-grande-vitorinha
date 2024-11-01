<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/Rahmon
 * @since      1.0.0
 *
 * @package    WP_Grande_Vitorinha_Font
 * @subpackage WP_Grande_Vitorinha_Font/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    WP_Grande_Vitorinha_Font
 * @subpackage WP_Grande_Vitorinha_Font/public
 * @author     Rahmohn
 */
class WP_Grande_Vitorinha_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-grande-vitorinha-public.css', array(), $this->version, 'all' );

	}

	public function wp_grande_vitorinha_shortcode_init() {

		function wp_grande_vitorinha_shortcode( $atts = [], $content = null, $tag = '' ) {

			$atts = array_change_key_case( (array) $atts, CASE_LOWER );

			$wpgv_atts = shortcode_atts( [
				'color' => '#333333',
				'size' => 60,
			], $atts, $tag );

			$o = '';
			$o .= '<span class="vitorinha" style="font-size:' . esc_attr( $wpgv_atts['size'] ) . 'px; color:' . esc_attr( $wpgv_atts['color'] ) . ';">';

			if ( ! is_null( $content ) ) {
				$o .= do_shortcode( $content );
			}

			$o .= '</span>';

			return $o;
		}

		add_shortcode( 'wpgv', 'wp_grande_vitorinha_shortcode' );

	}

}
