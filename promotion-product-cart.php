<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://profiles.wordpress.org/wpboss/
 * @since             1.0.0
 * @package           Promotion_Product_Cart
 *
 * @wordpress-plugin
 * Plugin Name:       Promotion Products in Cart for WooCommerce
 * Description:       This plugin will give the option to the store owner to promote there products on the Cart Page.
 * Version:           1.0.0
 * Author:            Aslam Shekh
 * Author URI:        https://profiles.wordpress.org/wpboss/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       promotion-product-cart
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PROMOTION_PRODUCT_CART_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-promotion-product-cart-activator.php
 */
function activate_promotion_product_cart() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-promotion-product-cart-activator.php';
	Promotion_Product_Cart_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-promotion-product-cart-deactivator.php
 */
function deactivate_promotion_product_cart() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-promotion-product-cart-deactivator.php';
	Promotion_Product_Cart_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_promotion_product_cart' );
register_deactivation_hook( __FILE__, 'deactivate_promotion_product_cart' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-promotion-product-cart.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_promotion_product_cart() {

	$plugin = new Promotion_Product_Cart();
	$plugin->run();

}
run_promotion_product_cart();
