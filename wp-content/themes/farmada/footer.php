<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fa-armada
 */

?>

<section class="company-map-marker">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2750.9387606461733!2d30.708377015407294!3d46.41826977783814!2m3!1f0!2f0!3f0!3m2!1i1824!2i768!4f13.1!3m3!1m2!1s0x40c6336a69ded737%3A0x12a9e7dc24b0d6de!2z0L_RgNC-0YHQvy4g0JzQsNGA0YjQsNC70LAg0JbRg9C60L7QstCwLCA2LCDQntC00LXRgdGB0LAsINCe0LTQtdGB0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDY1MDAw!5e0!3m2!1sru!2sua!4v1534834086433" width="180%" height="535" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<section class="over-footer">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/car-logo-chevrolet.png" alt="">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/car-logo-cadilac.png" alt="">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/car-logo-bmw.png" alt="">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/car-logo-audi.png" alt="">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/car-logo-chrysler.png" alt="">
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="under-logo">
                    <span>© 2018 Автосалон Fa-Armada</span>
                </div>
                <div class="soc-links">
                    <a href="<?php the_field('facebook', 18); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/facebook-icon.png" alt="soc-icon"></a>
                    <a href="<?php the_field('twitter', 18); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/twitter-icon.png" alt="soc-icon"></a>
                    <a href="<?php the_field('instagram', 18); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/instagram-icon.png" alt="soc-icon"></a>
                    <a href="<?php the_field('you_tube', 18); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/img/YouTube-icon.png" alt="soc-icon"></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <h4 class="text-uppercase">информация</h4>
                <ul>
                    <li><a href="<?= get_page_link(9); ?>">О нас</a></li>
                    <li><a href="<?= get_page_link(12); ?>">Доставка</a></li>
                    <li><a href="<?= get_page_link(14); ?>">Растаможка</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <h4 class="text-uppercase">Наши контакты</h4>
                <p>
                    <?php the_field('adress', 18); ?>
                </p>
                <p>
                    <a href="tel://<?php the_field('first_phone', 18); ?>"><?php the_field('first_phone', 18); ?></a>
                </p>
                <p>
                    <a href="tel://<?php the_field('second_phone', 18); ?>"><?php the_field('second_phone', 18); ?></a>
                </p>
                <p>
                    <?php $current_user = wp_get_current_user(); ?>
                    <?= $current_user->user_email; ?>
                </p>
            </div>
            <div class="col-md-4 pl-md-5">
                <h4 class="text-uppercase">
                    МЫ МОЖЕМ <br>
                    ГАРАНТИРОВАТЬ КАЧЕСТВО!
                </h4>
                <span>
                    Самые лучше автомобили из Америки и Европы
                </span>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
