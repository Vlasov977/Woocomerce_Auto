<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-md-4 mb-4">
    <div class="d-flex justify-content-center align-items-center">
        <div <?php wc_product_class(); ?>>
            <div class="car-caption">
                <?php
                /**
                 * Hook: woocommerce_before_shop_loop_item_title.
                 *
                 * @hooked woocommerce_show_product_loop_sale_flash - 10
                 * @hooked woocommerce_template_loop_product_thumbnail - 10
                 */
                do_action( 'woocommerce_before_shop_loop_item_title' );
                ?>
                <div class="caption-text">
                    <?php
                    /**
                     * Hook: woocommerce_shop_loop_item_title.
                     *
                     * @hooked woocommerce_template_loop_product_title - 10
                     */
                    do_action( 'woocommerce_shop_loop_item_title' );
                    ?>
                    <div class="excerpt-characteristic">
                        <ul>
                            <li> Пробег:
                                <?php
                                echo $product->get_attribute('probeg');
                                ?>
                            </li>
                            <li>Цвет:
                                <?php
                                echo $product->get_attribute('tsvet');
                                ?>
                            </li>
                            <li>
                                <?php
                                echo $product->get_attribute('rastamozhka');
                                ?>
                            </li>
                        </ul>
                    </div>
                    <div class="price">
                        <?php
                        /**
                         * Hook: woocommerce_after_shop_loop_item_title
                         * @hooked woocommerce_template_loop_rating - 5
                         * @hooked woocommerce_template_loop_price - 10
                         */
                        do_action( 'woocommerce_after_shop_loop_item_title' );
                        ?>
                    </div>
                </div>
                <div class="buy-btn">
                    <?php
                    /**
                     * Hook: woocommerce_before_shop_loop_item.
                     *
                     * @hooked woocommerce_template_loop_product_link_open - 10
                     */
                    do_action( 'woocommerce_before_shop_loop_item' );
                    ?>
                    <button class="buy-this">Перейти</button>
                    <?php
                    /**
                     * Hook: woocommerce_after_shop_loop_item.
                     *
                     * @hooked woocommerce_template_loop_product_link_close - 5
                     * @hooked woocommerce_template_loop_add_to_cart - 10
                     */
                    do_action( 'woocommerce_after_shop_loop_item' );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>