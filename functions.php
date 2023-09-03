<?php


/* -------------- theme support -------------- */
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
load_theme_textdomain('doc_pro', get_template_directory() . '/languages');
add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

/* --------------Post Thumbnails Add-------------- */

add_theme_support('post-thumbnails');
set_post_thumbnail_size(600, 337, true);
add_image_size('single-thumbnail', 600, 337, true);

require_once('enqueue_css_js.php');

function my_theme()
{
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'my_theme');

// footer menus 
function register_footer_menus() {
    register_nav_menus(
        array(
            'footer_menu_1' => __( 'Footer Menu 1', 'doc_pro' ),
            'footer_menu_2' => __( 'Footer Menu 2', 'doc_pro' ),
        )
    );
}
add_action( 'after_setup_theme', 'register_footer_menus');


// header menus 
function register_header_menu()
{
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu', 'doc_pro')
        )
    );
}
add_action('after_setup_theme', 'register_header_menu');

// redux Framework //
require_once('lib/framework/ReduxCore/framework.php');
require_once('lib/framework/sample/config.php');

//cmb2
require_once('metabox/init.php');
require_once('metabox/functions.php');

// custom functions 
require_once('functions/custom-post-type.php');

// database 
require_once('functions/database.php');


// ajax call 
require_once('functions/ajax_actions.php');