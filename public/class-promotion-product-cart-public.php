<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://about.me/aslamshekh/
 * @since      1.0.0
 *
 * @package    Promotion_Product_Cart
 * @subpackage Promotion_Product_Cart/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Promotion_Product_Cart
 * @subpackage Promotion_Product_Cart/public
 * @author     Aslam Shekh <aslamdxbca@gmail.com>
 */
class Promotion_Product_Cart_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @param string $plugin_name The name of the plugin.
     * @param string $version The version of this plugin.
     * @since    1.0.0
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Shortcode to show product in cart based on backend configuration
     */
    public function ppc_promotion_product_cart_shortcode()
    {

        $ppcProductType = esc_attr(get_option('ppc_product_type'));
        $ppcSelectedCategory = esc_attr(get_option('ppc_selected_category'));
        $ppcOrderBy = esc_attr(get_option('ppc_order_by'));
        $ppcOrderSorting = esc_attr(get_option('ppc_order_sorting'));
        $ppColumnCount = esc_attr(get_option('ppc_columns_count'));
        $ppcProductLimit = esc_attr(get_option('ppc_product_limit'));
        $ppcLabel = esc_attr(get_option('ppc_promotion_label'));

        echo "<h2>".$ppcLabel."</h2>";

        switch ($ppcProductType) {
            case 'sale_product':
                echo do_shortcode('[products limit="' . $ppcProductLimit . '" columns="' . $ppColumnCount . '" orderby="' . $ppcOrderBy . '" order="' . $ppcOrderSorting . '" best_selling="true" ]');
                break;

            case 'featured_products':
                echo do_shortcode('[products limit="' . $ppcProductLimit . '" columns="' . $ppColumnCount . '" orderby="' . $ppcOrderBy . '" order="' . $ppcOrderSorting . '" visibility="featured" ]');
                break;

            case 'best_selling_products':
                echo do_shortcode('[products limit="' . $ppcProductLimit . '" columns="' . $ppColumnCount . '" orderby="' . $ppcOrderBy . '" order="' . $ppcOrderSorting . '" class="quick-sale" on_sale="true" ]');
                break;

            case 'newest_products':
                echo do_shortcode('[products limit="' . $ppcProductLimit . '" columns="' . $ppColumnCount . '" orderby="id" order="DESC" ]');
                break;

            case 'category_products':
                echo do_shortcode('[products limit="' . $ppcProductLimit . '" columns="' . $ppColumnCount . '" orderby="' . $ppcOrderBy . '" order="' . $ppcOrderSorting . '" category="' . $ppcSelectedCategory . '" ]');
                break;

            default:
        }
    }
}
