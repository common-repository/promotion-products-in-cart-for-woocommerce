<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://about.me/aslamshekh/
 * @since      1.0.0
 *
 * @package    Promotion_Product_Cart
 * @subpackage Promotion_Product_Cart/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Promotion_Product_Cart
 * @subpackage Promotion_Product_Cart/includes
 * @author     Aslam Shekh <aslamdxbca@gmail.com>
 */
class Promotion_Product_Cart_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'promotion-product-cart',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
