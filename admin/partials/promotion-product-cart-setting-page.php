<div class="wrap">
    <h1><?php esc_html_e('WooCommerce Promotion Products in Cart', 'promotion-product-cart'); ?></h1>

    <form method="post" action="options.php">
        <?php
        settings_fields('promotion-product-cart-settings-group');
        do_settings_sections('promotion-product-cart-settings-group');
        $ppcProductType = esc_attr(get_option('ppc_product_type'));
        $ppcSelectedCategory = esc_attr(get_option('ppc_selected_category'));
        $ppcOrderBy = esc_attr(get_option('ppc_order_by'));
        $ppcOrderSorting = esc_attr(get_option('ppc_order_sorting'));
        $ppColumnCount = esc_attr(get_option('ppc_columns_count'));
        $ppcProductLimit = esc_attr(get_option('ppc_product_limit'));
        ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row"><?php esc_html_e('Product Type', 'promotion-product-cart'); ?></th>
                <td>
                    <select name="ppc_product_type" id="ppc_product_type">
                        <option value="sale_product" <?php if (isset($ppcProductType) && !empty($ppcProductType) && $ppcProductType == 'sale_product') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('Random Sale Items', 'promotion-product-cart'); ?></option>
                        <option value="featured_products" <?php if (isset($ppcProductType) && !empty($ppcProductType) && $ppcProductType == 'featured_products') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('Featured Products', 'promotion-product-cart'); ?></option>
                        <option value="best_selling_products" <?php if (isset($ppcProductType) && !empty($ppcProductType) && $ppcProductType == 'best_selling_products') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('Best Selling Products', 'promotion-product-cart'); ?></option>
                        <option value="newest_products" <?php if (isset($ppcProductType) && !empty($ppcProductType) && $ppcProductType == 'newest_products') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('Newest Products', 'promotion-product-cart'); ?></option>
                        <option value="category_products" <?php if (isset($ppcProductType) && !empty($ppcProductType) && $ppcProductType == 'category_products') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('Specific Categories', 'promotion-product-cart'); ?></option>
                    </select>
                </td>
            </tr>

            <tr valign="top" id="ppc_selected_category_row">
                <th scope="row"><?php esc_html_e('Select Category', 'promotion-product-cart'); ?></th>
                <td>
                    <?php
                    wp_dropdown_categories(array(
                        'taxonomy' => 'product_cat',
                        'hierarchical' => true,
                        'show_option_none' => esc_html_x('Select Category', 'Select Category', 'promotion-product-cart'),
                        'option_none_value' => '',
                        'name' => 'ppc_selected_category',
                        'id' => 'ppc_selected_category',
                        'selected' => isset($ppcSelectedCategory) && !empty($ppcSelectedCategory) ? $ppcSelectedCategory : '',
                    ));
                    ?>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php esc_html_e('Columns', 'promotion-product-cart'); ?></th>
                <td>
                    <select name="ppc_columns_count" id="ppc_columns_count">
                        <option value="1" <?php if (isset($ppColumnCount) && !empty($ppColumnCount) && $ppColumnCount == '1') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('1', 'promotion-product-cart'); ?></option>
                        <option value="2" <?php if (isset($ppColumnCount) && !empty($ppColumnCount) && $ppColumnCount == '2') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('2', 'promotion-product-cart'); ?></option>
                        <option value="3" <?php if (isset($ppColumnCount) && !empty($ppColumnCount) && $ppColumnCount == '3') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('3', 'promotion-product-cart'); ?></option>
                        <option value="4" <?php if (isset($ppColumnCount) && !empty($ppColumnCount) && $ppColumnCount == '4') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('4', 'promotion-product-cart'); ?></option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php esc_html_e('Product Limit', 'promotion-product-cart'); ?></th>
                <td>
                    <select name="ppc_product_limit" id="ppc_product_limit">
                        <option value="1" <?php if (isset($ppcProductLimit) && !empty($ppcProductLimit) && $ppcProductLimit == '1') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('1', 'promotion-product-cart'); ?></option>
                        <option value="2" <?php if (isset($ppcProductLimit) && !empty($ppcProductLimit) && $ppcProductLimit == '2') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('2', 'promotion-product-cart'); ?></option>
                        <option value="3" <?php if (isset($ppcProductLimit) && !empty($ppcProductLimit) && $ppcProductLimit == '3') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('3', 'promotion-product-cart'); ?></option>
                        <option value="4" <?php if (isset($ppcProductLimit) && !empty($ppcProductLimit) && $ppcProductLimit == '4') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('4', 'promotion-product-cart'); ?></option>
                        <option value="8" <?php if (isset($ppcProductLimit) && !empty($ppcProductLimit) && $ppcProductLimit == '8') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('8', 'promotion-product-cart'); ?></option>
                        <option value="16" <?php if (isset($ppcProductLimit) && !empty($ppcProductLimit) && $ppcProductLimit == '16') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('16', 'promotion-product-cart'); ?></option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php esc_html_e('Order By', 'promotion-product-cart'); ?></th>
                <td>
                    <select name="ppc_order_by" id="ppc_order_by">
                        <option value="name" <?php if (isset($ppcOrderBy) && !empty($ppcOrderBy) && $ppcOrderBy == 'name') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('Name', 'promotion-product-cart'); ?></option>
                        <option value="id" <?php if (isset($ppcOrderBy) && !empty($ppcOrderBy) && $ppcOrderBy == 'id') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('ID', 'promotion-product-cart'); ?></option>
                        <option value="date" <?php if (isset($ppcOrderBy) && !empty($ppcOrderBy) && $ppcOrderBy == 'date') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('DATE', 'promotion-product-cart'); ?></option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php esc_html_e('Order', 'promotion-product-cart'); ?></th>
                <td>
                    <select name="ppc_order_sorting" id="ppc_order_sorting">
                        <option value="desc" <?php if (isset($ppcOrderSorting) && !empty($ppcOrderSorting) && $ppcOrderSorting == 'desc') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('DESC', 'promotion-product-cart'); ?></option>
                        <option value="asc" <?php if (isset($ppcOrderSorting) && !empty($ppcOrderSorting) && $ppcOrderSorting == 'asc') {
                            echo "selected='selected'";
                        } ?>><?php esc_html_e('ASC', 'promotion-product-cart'); ?></option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row"><?php esc_html_e('Promotion Label', 'promotion-product-cart'); ?></th>
                <td><input type="text" name="ppc_promotion_label"
                           value="<?php echo esc_attr(get_option('ppc_promotion_label')); ?>"/></td>
            </tr>

        </table>

        <?php submit_button(); ?>

    </form>
</div>
