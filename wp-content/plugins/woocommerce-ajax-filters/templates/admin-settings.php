<?php 
$dplugin_name  = 'WooCommerce AJAX Products Filter';
$dplugin_link  = 'http://berocket.com/product/woocommerce-ajax-products-filter';
$dplugin_price = 26;
$dplugin_lic   = 1;
$dplugin_desc  = '';
@ include 'settings_head.php';
@ include 'discount.php';
?>
<div class="wrap">
    <form class="show_premium" method="post" action="options.php">
        <?php
        settings_fields('br_filters_plugin_options');
        $options = get_option('br_filters_options');
        $tabs_array = array( 'general', 'selectors', 'advanced', 'design', 'javascript', 'customcss' );
        ?>
        <h2 class="nav-tab-wrapper filter_settings_tabs">
            <a href="#general" class="nav-tab <?php if(@$options['br_opened_tab'] == 'general' || !in_array( @$options['br_opened_tab'], $tabs_array ) ) echo 'nav-tab-active'; ?>"><?php _e('General', 'BeRocket_AJAX_domain') ?></a>
            <a href="#selectors" class="nav-tab <?php if(@$options['br_opened_tab'] == 'selectors' ) echo 'nav-tab-active'; ?>"><?php _e('Selectors', 'BeRocket_AJAX_domain') ?></a>
            <a href="#advanced" class="nav-tab <?php if(@$options['br_opened_tab'] == 'advanced' ) echo 'nav-tab-active'; ?>"><?php _e('Advanced', 'BeRocket_AJAX_domain') ?></a>
            <a href="#design" class="nav-tab <?php if(@$options['br_opened_tab'] == 'design' ) echo 'nav-tab-active'; ?>"><?php _e('Design', 'BeRocket_AJAX_domain') ?></a>
            <a href="#javascript" class="nav-tab <?php if(@$options['br_opened_tab'] == 'javascript' ) echo 'nav-tab-active'; ?>"><?php _e('JavaScript', 'BeRocket_AJAX_domain') ?></a>
            <a href="#customcss" class="nav-tab <?php if(@$options['br_opened_tab'] == 'customcss' ) echo 'nav-tab-active'; ?>"><?php _e('Custom CSS', 'BeRocket_AJAX_domain') ?></a>
        </h2>
        <div id="general" class="tab-item <?php if(@$options['br_opened_tab'] == 'general' || !in_array( @$options['br_opened_tab'], $tabs_array ) ) echo 'current'; ?>">
            <table class="form-table">
                <tr>
                    <th scope="row"><?php _e('SETUP WIZARD', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <a class="button" href="<?php echo admin_url( 'admin.php?page=br-aapf-setup' ); ?>"><?php _e('RUN SETUP WIZARD', 'BeRocket_AJAX_domain') ?></a>
                        <div>
                            <?php _e('Run it to setup plugin options step by step', 'BeRocket_AJAX_domain') ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('"No Products" message', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input size="50" name="br_filters_options[no_products_message]" type='text' value='<?php echo @$options['no_products_message']?>'/>
                        <br />
                        <span style="color:#666666;margin-left:2px;"><?php _e('Text that will be shown if no products found', 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Sorting control', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input name="br_filters_options[control_sorting]" type='checkbox' value='1' <?php if( @$options['control_sorting'] ) echo "checked='checked'";?>/>
                        <span style="color:#666666;margin-left:2px;"><?php _e("Take control over WooCommerce's sorting selectbox?", 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('SEO friendly urls', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input name="br_filters_options[seo_friendly_urls]" type='checkbox' value='1' <?php if( @$options['seo_friendly_urls'] ) echo "checked='checked'";?>/>
                        <span style="color:#666666;margin-left:2px;"><?php _e('If this option is on url will be changed when filter is selected/changed', 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Hide values', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input name="br_filters_options[hide_value][o]" type='checkbox' value='1' <?php if( @$options['hide_value']['o'] ) echo "checked='checked'";?>/>
                        <span style="color:#666666;margin-left:2px;"><?php _e('Hide values without products', 'BeRocket_AJAX_domain') ?></span><br>
                        <input name="br_filters_options[hide_value][sel]" type='checkbox' value='1' <?php if( @$options['hide_value']['sel'] ) echo "checked='checked'";?>/>
                        <span style="color:#666666;margin-left:2px;"><?php _e('Hide selected values', 'BeRocket_AJAX_domain') ?></span>
                    </td>
                    <td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Jump to first page', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input name="br_filters_options[first_page_jump]" type='checkbox' value='1' <?php if( @$options['first_page_jump'] ) echo "checked='checked'";?>/>
                        <span style="color:#666666;margin-left:2px;"><?php _e('Check if you want load first page after filters change', 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Scroll page to the top</th>
                    <td>
                        <input name="br_filters_options[scroll_shop_top]" type='checkbox' value='1' <?php if( @$options['scroll_shop_top'] ) echo "checked='checked'";?>/>
                        <span style="color:#666666;margin-left:2px;">Check if you want scroll page to the top of shop after filters change</span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Select2', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input name="br_filters_options[use_select2]" type='checkbox' value='1' <?php if( ! empty($options['use_select2']) ) echo "checked='checked'";?>/>
                        <span style="color:#666666;margin-left:2px;"><?php _e('Use Select2 script for dropdown menu', 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
            </table>
        </div>
        <div id="selectors" class="tab-item <?php if(@$options['br_opened_tab'] == 'selectors' ) echo 'current'; ?>">
            <table class="form-table">
                <tr>
                    <th scope="row"><?php _e('Get selectors automatically (BETA)', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <?php echo BeRocket_wizard_generate_autoselectors(array('products' => '.berocket_aapf_products_selector', 'pagination' => '.berocket_aapf_pagination_selector', 'result_count' => '.berocket_aapf_product_count_selector')); ?>
                        <div>
                            <?php _e('Please do not use it on live sites. If something went wrong write us.', 'BeRocket_AJAX_domain') ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Products selector', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input class="berocket_aapf_products_selector" name="br_filters_options[products_holder_id]" type='text' value='<?php echo @$options['products_holder_id']?$options['products_holder_id']:'ul.products'?>'/>
                        <br />
                        <span style="color:#666666;margin-left:2px;"><?php _e("Selector for tag that is holding products. Don't change this if you don't know what it is", 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Product count selector', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input class="berocket_aapf_product_count_selector" size="30" name="br_filters_options[woocommerce_result_count_class]" type='text' value='<?php echo @$options['woocommerce_result_count_class']?$options['woocommerce_result_count_class']:BeRocket_AAPF::$defaults['woocommerce_result_count_class']?>'/>
                        <br />
                        <span style="color:#666666;margin-left:2px;"><?php _e('Selector for tag with product result count("Showing 1–8 of 61 results"). Don\'t change this if you don\'t know what it is', 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Product order by selector', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input size="30" name="br_filters_options[woocommerce_ordering_class]" type='text' value='<?php echo @$options['woocommerce_ordering_class']?$options['woocommerce_ordering_class']:BeRocket_AAPF::$defaults['woocommerce_ordering_class']?>'/>
                        <br />
                        <span style="color:#666666;margin-left:2px;"><?php _e("Selector for order by form with drop down menu. Don't change this if you don't know what it is", 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Products pagination selector', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input class="berocket_aapf_pagination_selector" size="30" name="br_filters_options[woocommerce_pagination_class]" type='text' value='<?php echo @$options['woocommerce_pagination_class']?$options['woocommerce_pagination_class']:BeRocket_AAPF::$defaults['woocommerce_pagination_class']?>'/>
                        <br />
                        <span style="color:#666666;margin-left:2px;"><?php _e("Selector for tag that is holding products. Don't change this if you don't know what it is", 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
            </table>
        </div>
        <div id="advanced" class="tab-item <?php if(@$options['br_opened_tab'] == 'advanced' ) echo 'current'; ?>">
            <table class="form-table">
                <tr>
                    <th scope="row"><?php _e('"No Products" class', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input name="br_filters_options[no_products_class]" type='text' value='<?php echo @$options['no_products_class']?>'/>
                        <br />
                        <span style="color:#666666;margin-left:2px;"><?php _e('Add class and use it to style "No Products" box', 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Turn all filters off', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input name="br_filters_options[filters_turn_off]" type='checkbox' value='1' <?php if( @$options['filters_turn_off'] ) echo "checked='checked'";?>/>
                        <span style="color:#666666;margin-left:2px;"><?php _e('If you want to hide filters without losing current configuration just turn them off', 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Show all values', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input name="br_filters_options[show_all_values]" type='checkbox' value='1' <?php if( @$options['show_all_values'] ) echo "checked='checked'";?>/>
                        <span style="color:#666666;margin-left:2px;"><?php _e('Check if you want to show not used attribute values too', 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('Template ajax load fix', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <input class="load_fix_ajax_request_load" name="br_filters_options[ajax_request_load]" type='checkbox' value='1' <?php if( @$options['ajax_request_load'] ) echo "checked='checked'";?>/>
                        <span style="color:#666666;margin-left:2px;"><?php _e('Use all plugins on ajax load(can slow down products loading)', 'BeRocket_AJAX_domain') ?></span>
                        <p class="load_fix_use_get_query"<?php if( empty($options['ajax_request_load']) ) echo ' style="display:none;"'; ?>>
                            <input name="br_filters_options[use_get_query]" type='checkbox' value='1' <?php if( ! empty($options['use_get_query']) ) echo "checked='checked'";?>/>
                            <span style="color:#666666;margin-left:2px;"><?php _e('Use GET query instead POST for filtering', 'BeRocket_AJAX_domain') ?></span>
                            <script>
                                jQuery(document).on('change', '.load_fix_ajax_request_load', function() {
                                    if( jQuery(this).prop('checked') ) {
                                        jQuery('.load_fix_use_get_query').show();
                                    } else {
                                        jQuery('.load_fix_use_get_query').hide();
                                    }
                                });
                            </script>
                        </p>
                        <div class="settings-sub-option">
                            <span style="color:#666666;margin-left:2px;"><?php _e('Use', 'BeRocket_AJAX_domain') ?></span>
                            <select name="br_filters_options[ajax_request_load_style]">
                                <option <?php echo ( ! @ $options['ajax_request_load_style'] ) ? 'selected' : '' ?> value=""><?php _e('PHP', 'BeRocket_AJAX_domain') ?></option>
                                <option <?php echo ( @ $options['ajax_request_load_style'] == 'jquery' ) ? 'selected' : '' ?> value="jquery"><?php _e('JavaScript (jQuery)', 'BeRocket_AJAX_domain') ?></option>
                            </select>
                            <span style="color:#666666;margin-left:2px;"><?php _e('for fix', 'BeRocket_AJAX_domain') ?></span>
                            <br>
                            <span style="color:#666666;margin-left:2px;">
                                <?php _e('PHP - loads the full page and cuts products from the page via PHP. Slow down server, but users take only needed information.', 'BeRocket_AJAX_domain') ?>
                            </span>
                            <br>
                            <span style="color:#666666;margin-left:2px;">
                                <?php _e('JavaScript (jQuery) - loads the full page and copy all products from the loaded page to the current page using JQuery. Slow down server and users take the full page. Works good with different themes and plugins.', 'BeRocket_AJAX_domain') ?>
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div id="design" class="tab-item <?php if(@$options['br_opened_tab'] == 'design' ) echo 'current'; ?>">
            <a href="http://berocket.com/product/woocommerce-ajax-products-filter" target="_blank">
                <img src="<?php echo AAPF_URL; ?>images/paid/styler.png" style="max-width: 100%;" />
            </a>
        </div>
        <div id="javascript" class="tab-item <?php if(@$options['br_opened_tab'] == 'javascript' ) echo 'current'; ?>">
            <table class="form-table">
                <tr>
                    <th scope="row"><?php _e('Before Update:', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <textarea style="min-width: 500px; height: 100px;" name="br_filters_options[user_func][before_update]"><?php echo @$options['user_func']['before_update'] ?></textarea>
                        <br />
                        <span style="color:#666666;margin-left:2px;"><?php _e("If you want to add own actions on filter activation, eg: alert('1');", 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('On Update:', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <textarea style="min-width: 500px; height: 100px;" name="br_filters_options[user_func][on_update]"><?php echo @$options['user_func']['on_update'] ?></textarea>
                        <br />
                        <span style="color:#666666;margin-left:2px;"><?php _e("If you want to add own actions right on products update. You can manipulate data here, try: data.products = 'Ha!';", 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('After Update:', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <textarea style="min-width: 500px; height: 100px;" name="br_filters_options[user_func][after_update]"><?php echo @$options['user_func']['after_update'] ?></textarea>
                        <br />
                        <span style="color:#666666;margin-left:2px;"><?php _e("If you want to add own actions after products updated, eg: alert('1');", 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
            </table>
        </div>
        <div id="customcss" class="tab-item <?php if(@$options['br_opened_tab'] == 'customcss' ) echo 'current'; ?>">
            <table class="form-table">
                <tr>
                    <th colspan="2"><?php _e('User custom CSS style:', 'BeRocket_AJAX_domain') ?></th>
                </tr>
                <tr>
                    <td style="width:600px;">
                        <textarea style="width: 100%; min-height: 400px; height:900px" name="br_filters_options[user_custom_css]"><?php echo br_get_value_from_array($options, 'user_custom_css') ?></textarea>
                    </td>
                    <td><div class="berocket_css_examples"style="max-width:300px;">
                        <h4>Add border to widget</h4>
<div style="background-color:white;"><pre>#widget#{
    border:2px solid #FF8800;
}</pre></div>
                        <h4>Set font size and font color for title</h4>
<div style="background-color:white;"><pre>#widget-title#{
    font-size:36px!important;
    color:orange!important;
}</pre></div>
                        <h4>Display all inline</h4>
<div style="background-color:white;"><pre>#widget# li{
    display: inline-block;
}</pre></div>
                        <h4>Use WooCommerce font for checkbox</h4>
<div style="background-color:white;">
<pre>#widget# input[type=checkbox] + label:before{
    font-family: WooCommerce!important;
    speak: none!important;
    font-weight: 400!important;
    font-variant: normal!important;
    text-transform: none!important;
    content: "\e039"!important;
    text-decoration: none!important;
    background:none!important;
}
#widget# input[type=checkbox]:checked + label:before {
    content: "\e015"!important;
}</pre></div>
                        <h4>Use block for slider handler instead image</h4>
<div style="background-color:white;"><pre>#widget# .ui-slider-handle {
    background:none!important;
    border-radius:50px!important;
    background-color:white!important;
    border: 2px solid black!important;
    outline:none!important;
}
#widget# .ui-slider-handle.ui-state-active {
    border: 3px solid black!important;
}</pre></div>
<style>
.berocket_css_examples {
    width:300px;
    overflow:visible;
}
.berocket_css_examples div{
    background-color:white;
    width:100%;
    min-width:100%;
    overflow:hidden;
    float:right;
    border:1px solid white;
    padding: 2px;
}
.berocket_css_examples div:hover {
    position:relative;
    z-index: 9999;
    width: initial;
    border:1px solid #888;
}
</style>
                    </div></td>
                </tr>
            </table>
            <table class="form-table">
                <tr>
                    <th scope="row"><?php _e('Definitions:', 'BeRocket_AJAX_domain') ?></th>
                    <td>
                        <span style="color:#6666FF;margin-left:2px;">#widget#</span><span style="color:#666666;margin-left:2px;"> - <?php _e('widget block.', 'BeRocket_AJAX_domain') ?></span><br />
                        <span style="color:#6666FF    ;margin-left:2px;">#widget-title#</span><span style="color:#666666;margin-left:2px;"> - <?php _e('widget title.', 'BeRocket_AJAX_domain') ?></span>
                    </td>
                </tr>
            </table>
            <input type="hidden" id="br_opened_tab" name="br_filters_options[br_opened_tab]" value="<?php echo @$options['br_opened_tab'] ?>">
        </div>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
    </form>
<?php
/*
    <h3>Receive more features and control with Paid version of the plugin:</h3>
    <ul>
        <li><b>- Filter by Attribute, Tag, Custom Taxonomy, Color, Sub-categories and Availability( in stock | out of stock | any )</b></li>
        <li><b>- Customize filters look through admin</b></li>
        <li><b>- Option to re-count products amount in values when some value selected</b></li>
        <li><b>- Tag Cloud for Tag filter</b></li>
        <li><b>- Description can be added for the attributes</b></li>
        <li><b>- Slider can use strings as a value</b></li>
        <li><b>- Filters can be collapsed by clicking on title, option to collapse filter on start</b></li>
        <li><b>- Price Filter Custom Min and Max values</b></li>
        <li><b>- Add custom CSS on admin settings page</b></li>
        <li><b>- Show icons before/after widget title and/or before/after values</b></li>
        <li><b>- Option to upload "Loading..." gif image and set label after/before/above/under it</b></li>
        <li><b>- Show icons before/after widget title and/or before/after values</b></li>
        <li><b>- Scroll top position can be controlled by the admin</b></li>
        <li><b>- Option to hide on mobile devices</b></li>
        <li><b>- Much better support for custom theme</b></li>
        <li><b>- Enhancements of the free features</b></li>
    </ul>
    <h4>Support the plugin by purchasing paid version. This will provide faster growth, better support and much more functionality for the plugin!</h4>
*/
$feature_list = array(
    'Filter by Tag and Custom Taxonomy',
    'Support 99% of the Themes',
    'Nice URLs for SEO Friendly URLs',
    'Icons Before and After Title',
    'Optimization to Handle up to 5,000 Products Total',
    'Icons Before and After Values',
    'Customization for text, checkbox, radio, slider and other elements',
    'Filters Can be Collapsed, Option to Collapse Filter on Start',
    'Shortcode Builder for Easy Shortcode Creation',
    'Price Filter Custom Min and Max Values',
    'Option to Set Values for the Price Slider Manually',
    'Description for Widgets',
    'Selected Filters Area',
    'Reset button widget',
    'Search box widget',
    'Cache for Widgets',
    'Color and Image Type of Widgets',
    'Custom CSS Styles',
    'Filters Visibility by Pages',
    'Count of Products with Attribute Values',
    'Show amount of products before update',
    'Price as checkbox with min and max values',
);
@ include 'settings_footer.php';
?>
</div>
