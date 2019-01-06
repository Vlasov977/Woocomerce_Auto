<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fa-armada
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 d-flex justify-content-start justify-content-lg-center align-items-center">
                    <nav class="navbar navbar-expand-lg">
                        <div class="logo navbar-brand">
                            <?php the_custom_logo(); ?>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify" ></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_page_link(9); ?>">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/i-icon.png" alt=""><span>О нас</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_page_link(12); ?>">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/ship-icon.png" alt=""><span>Доставка</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_page_link(14); ?>">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/tax-icon.png" alt=""><span>Растаможка</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= get_page_link(16); ?>">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/img/contact-icon.png" alt=""><span>Контакты</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-3 d-flex justify-content-lg-end align-items-center">
                    <div class="phone-container">
                        <div class="img-phone"><img src="<?= get_template_directory_uri(); ?>/assets/img/phone-icon.png" alt=""></div>
                        <div class="phone-numbers d-flex flex-column flex-sm-row flex-lg-column">
                            <a href="tel://<?php the_field('first_phone', 18); ?>"><span><?php the_field('first_phone', 18); ?></span></a>
                            <a href="tel://<?php the_field('second_phone', 18); ?>"><span><?php the_field('second_phone', 18); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cars-info-slider">
                        <?php
                        echo do_shortcode('[smartslider3 slider=2]');
                        ?>
                    </div>
                    <div class="youtube-link">
                        <a data-toggle="modal" data-target="#youtubemodal">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/youtube-link.png" alt="">
                            <span>Наш промо ролик. <strong>Посмотреть?</strong></span>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="youtubemodal" tabindex="-1" role="dialog" aria-labelledby="youtubemodalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-center">
                                        <iframe width="560" height="315" src="<?php the_field('youtube_banner_link', 18); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?= get_page_link(5); ?>" class="header-order">Перейти <i class="fal fa-angle-right"></i></a>
                    <div class="currency-change">
                        <button type="button" class="change-currency">
                            <img src="<?= get_template_directory_uri(); ?>/assets/img/curr-change.png" alt="">
                        </button>
                        <div class="curr-switch-items">
                            <?php echo do_shortcode('[woocommerce_currency_switcher_radio_list]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>