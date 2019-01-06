<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.08.2018
 * Time: 18:42
 */

/**
 * Enqueue scripts and styles.
 */
function farmada_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/libs/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/libs/fontawesome-all.min.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/libs/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/libs/slick/slick-theme.css');
    wp_enqueue_style( 'farmada-style', get_stylesheet_uri() );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', ( 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' ), false, null, false );
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'farmada-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script('bootstrap', get_template_directory_uri() . "/assets/libs/bootstrap.min.js", array('jquery'), '', true);
    wp_enqueue_script('slick', get_template_directory_uri() . "/assets/libs/slick/slick.min.js", array('jquery'), '', true);
    wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/main.js", array('jquery'), '', true);

    wp_enqueue_script( 'farmada-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'farmada_scripts' );