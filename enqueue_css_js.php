<?php

function enqueue_custom_styles()
{
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.css', array(), '5.0.0', 'all');

    // Enqueue IcoFont CSS
    wp_enqueue_style('icofont', get_template_directory_uri() . '/plugins/icofont/icofont.min.css', array(), '1.0.0', 'all');

    // Enqueue Slick Carousel CSS
    wp_enqueue_style('slick', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick-theme.css', array('slick'), '1.8.1', 'all');

    // Enqueue Main Stylesheet
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');


    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap JS
    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.js',
        array('jquery'),
        '5.0.0',
        true
    );

    // Enqueue Slick Carousel JS
    wp_enqueue_script('slick', get_template_directory_uri() . '/plugins/slick-carousel/slick/slick.min.js', array('jquery'), '1.8.1', true);

    // Enqueue Shuffle JS
    wp_enqueue_script('shuffle', get_template_directory_uri() . '/plugins/shuffle/shuffle.min.js', array('jquery'), '5.3.0', true);

    // Enqueue Google Maps API
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY_HERE', array(), null, true);

    // Enqueue your custom JS files
    wp_enqueue_script('gmap', get_template_directory_uri() . '/plugins/google-map/gmap.js', array('google-maps'), '1.0.0', true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
