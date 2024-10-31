<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://about.me/aslamshekh/
 * @since      1.0.0
 *
 * @package    Promotion_Product_Cart
 * @subpackage Promotion_Product_Cart/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Promotion_Product_Cart
 * @subpackage Promotion_Product_Cart/admin
 * @author     Aslam Shekh <aslamdxbca@gmail.com>
 */
class Promotion_Product_Cart_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts( $hook ) {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Promotion_Product_Cart_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Promotion_Product_Cart_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
        if ( false !== strpos( $hook, 'promotion-product-cart' ) ) {
            wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/promotion-product-cart-admin.js', array('jquery'), $this->version, false);
        }
	}

    /**
     *  Register all settings fields for option page
     */
	public function ppc_register_setting_group(){
        register_setting( 'promotion-product-cart-settings-group', 'ppc_product_type' );
        register_setting( 'promotion-product-cart-settings-group', 'ppc_promotion_label' );
        register_setting( 'promotion-product-cart-settings-group', 'ppc_selected_category' );
        register_setting( 'promotion-product-cart-settings-group', 'ppc_order_by' );
        register_setting( 'promotion-product-cart-settings-group', 'ppc_order_sorting' );
        register_setting( 'promotion-product-cart-settings-group', 'ppc_columns_count' );
        register_setting( 'promotion-product-cart-settings-group', 'ppc_product_limit' );
    }

    /**
     * Register plugin setting page menu under woocommerce
     */
	public function ppc_menu_register(){
        add_submenu_page(
            'woocommerce',
            __( 'Promotion Products in Cart', 'promotion-product-cart' ),
            __( 'Promotion Products in Cart', 'promotion-product-cart' ),
            'manage_options',
            'promotion-product-cart',
            array(
                $this,
                'ppc_register_setting_page',
            )
        );
    }

    /**
     * Setting up the configuration page of the pluginss
     */
    public function ppc_register_setting_page()
    {
        require plugin_dir_path( __FILE__ ) . 'partials/promotion-product-cart-setting-page.php';
    }
}
