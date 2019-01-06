<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.08.2018
 * Time: 18:38
 */

/*
 * template name: home
 */

get_header();
?>
<section class="filter">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                echo do_shortcode('[searchandfilter id="main_page"]');
                ?>
                <div class="d-flex justify-content-start align-items-center">
                    <a href="" class="filter-clear">Сбросить параметры фильтра</a>
                </div>
                <script type="text/javascript">
                    $(".wpf_item:first-child .wpf_item_name").prepend('<img src="<?= get_template_directory_uri(); ?>/assets/img/manufacturer-icon.png" alt="">');
                    $(".wpf_item:nth-child(2) .wpf_item_name").prepend('<img src="<?= get_template_directory_uri(); ?>/assets/img/model-icon.png" alt="">');
                    $(".wpf_item:nth-child(3) .wpf_item_name").prepend('<img src="<?= get_template_directory_uri(); ?>/assets/img/calendar-icon.png" alt="">');
                    $(".wpf_item:nth-child(4) .wpf_item_name").prepend('<img src="<?= get_template_directory_uri(); ?>/assets/img/price-icon.png" alt="">');
                    $(".filter-clear").click(function () {
                        location.reload();
                    });
                </script>
            </div>
        </div>
    </div>
</section>
    <section class="cars">
        <div class="container">
            <h2 class="text-center text-uppercase">новые машины</h2>
            <div class="row">
                <div class="col-12">
                    <div class="new-cars-slider">
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'stock' => 1,
                            'posts_per_page' => 8,
                            'orderby' =>'date',
                            'order' => 'DESC' );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                            <div class="slider-item">
                                <div class="car-caption">
                                    <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="" />'; ?>
                                    <div class="caption-text">
                                        <h1 class="text-uppercase text-center">
                                            <?php the_title(); ?>
                                        </h1>
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
                                            <?php echo $product->get_price_html(); ?>
                                        </div>
                                    </div>
                                    <div class="buy-btn">
                                        <a class="buy-this" href="<?= get_permalink($product->get_id()); ?>">Перейти</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="<?= get_page_link(5); ?>" class="show-more-cars">Показать все новые машины</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="stock-today">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/car-back.png" alt="car-back" id="car-background">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="stock-cars-slider">
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'meta_key' => 'total_sales',
                            'orderby' => 'meta_value_num',
                            'posts_per_page' => 8,
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
                            global $product; ?>
                            <div class="slider-item">
                                <div class="car-caption">
                                    <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="" />'; ?>
                                    <div class="caption-text">
                                        <h1 class="text-uppercase text-center">
                                            <?php the_title(); ?>
                                        </h1>
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
                                            <?php echo $product->get_price_html(); ?>
                                        </div>
                                    </div>
                                    <div class="buy-btn">
                                        <a class="buy-this" href="<?= get_permalink($product->get_id()); ?>">Перейти</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
                <div class="col-lg-3 flex-column d-flex justify-content-end align-items-center">
                    <h1 class="text-sm-left text-center">ЛУЧШИЕ
                        АВТО</h1>
                    <p class="text-sm-left text-center">
                        В НАЛИЧИИ
                        СЕГОДНЯ
                    </p>
                    <div class="d-flex justify-content-between container mt-4">
                        <button class="slider-arrow sl-prev"><i class="fal fa-angle-left"></i></button>
                        <button class="slider-arrow sl-next"><i class="fal fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();