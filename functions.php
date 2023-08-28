<?php

function mytheme_enqueue_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('icofont', get_template_directory_uri() . '/plugins/icofont/icofont.min.css');
    // wp_enqueue_style('slick', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick.css');
    // wp_enqueue_style('slick-theme', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick-theme.css');
    // wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    // wp_enqueue_style('custom', get_stylesheet_uri());

    // wp_enqueue_style('bootstrap');

    // wp_register_style('bootstrap');
    // wp_register_style('icofont');
    // wp_register_style('slick-theme');
    // wp_register_style('style');
    // wp_register_style('custom');

    // wp_enqueue_script('jquery', get_template_directory_uri() .  '/plugins/jquery/jquery.js');
    // wp_enqueue_script('bootstrap', get_template_directory_uri() .  '/plugins/bootstrap/bootstrap.min.js');
    // wp_enqueue_script('slick', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick.min.js');
    // wp_enqueue_script('custom', get_template_directory_uri() .  '/js/script.js');
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');