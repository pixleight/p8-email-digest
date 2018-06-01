<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://pixleight.com
 * @since      1.0.0
 *
 * @package    P8_Email_Digest
 * @subpackage P8_Email_Digest/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    P8_Email_Digest
 * @subpackage P8_Email_Digest/includes
 * @author     Chris Violette <chris@pixleight.com>
 */
class P8_Email_Digest_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'p8-email-digest',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
