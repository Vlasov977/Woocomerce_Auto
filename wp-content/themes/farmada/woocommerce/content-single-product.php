<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <div class="text-center mx-auto">
                <?php
                woocommerce_breadcrumb();
                ?>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
        <div class="row">
            <div class="col-lg-6">
                <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action( 'woocommerce_before_single_product_summary' );
                ?>
            </div>
            <div class="col-lg-6">
                <div class="summary entry-summary">
                    <?php
                    /**
                     * Hook: woocommerce_single_product_summary.
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data() - 60
                     */
                    do_action( 'woocommerce_single_product_summary' );
                    ?>
                </div>
                <?php
                global $product;
                $attributes = $product->get_attributes();
                ?>
                <table class="shop_attributes table table-striped">
                    <?php if ( $display_dimensions && $product->has_weight() ) : ?>
                        <tr>
                            <th><?php _e( 'Weight', 'woocommerce' ) ?></th>
                            <td class="product_weight"><?php echo esc_html( wc_format_weight( $product->get_weight() ) ); ?></td>
                        </tr>
                    <?php endif; ?>

                    <?php if ( $display_dimensions && $product->has_dimensions() ) : ?>
                        <tr>
                            <th><?php _e( 'Dimensions', 'woocommerce' ) ?></th>
                            <td class="product_dimensions"><?php echo esc_html( wc_format_dimensions( $product->get_dimensions( false ) ) ); ?></td>
                        </tr>
                    <?php endif; ?>

                    <?php foreach ( $attributes as $attribute ) : ?>
                        <tr>
                            <th><?php echo wc_attribute_label( $attribute->get_name() ); ?></th>
                            <td><?php
                                $values = array();

                                if ( $attribute->is_taxonomy() ) {
                                    $attribute_taxonomy = $attribute->get_taxonomy_object();
                                    $attribute_values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'all' ) );

                                    foreach ( $attribute_values as $attribute_value ) {
                                        $value_name = esc_html( $attribute_value->name );

                                        if ( $attribute_taxonomy->attribute_public ) {
                                            $values[] = '<a href="' . esc_url( get_term_link( $attribute_value->term_id, $attribute->get_name() ) ) . '" rel="tag">' . $value_name . '</a>';
                                        } else {
                                            $values[] = $value_name;
                                        }
                                    }
                                } else {
                                    $values = $attribute->get_options();

                                    foreach ( $values as &$value ) {
                                        $value = make_clickable( esc_html( $value ) );
                                    }
                                }

                                echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );
                                ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="col-12">
                <?php
                the_content();
                ?>
            </div>
            <div class="col-12">
                <?php
                echo do_shortcode('[contact-form-7 id="46" title="Контактная форма 1"]');
                ?>
            </div>
            <div class="col-lg-12">
                <?php
                /**
                 * Hook: woocommerce_after_single_product_summary.
                 *
                 * @hooked woocommerce_output_product_data_tabs - 10
                 * @hooked woocommerce_upsell_display - 15
                 * @hooked woocommerce_output_related_products - 20
                 */
                do_action( 'woocommerce_after_single_product_summary' );
                ?>
            </div>
        </div>
    </div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
