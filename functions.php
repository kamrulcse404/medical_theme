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
function register_footer_menus()
{
    register_nav_menus(
        array(
            'footer_menu_1' => __('Footer Menu 1', 'doc_pro'),
            'footer_menu_2' => __('Footer Menu 2', 'doc_pro'),
        )
    );
}
add_action('after_setup_theme', 'register_footer_menus');


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

// nav wakler 
require_once('class-wp-bootstrap-navwalker.php');


// mailTrap 
function mailtrap($phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    // $phpmailer->Username = 'dd723a540dede2';
    // $phpmailer->Password = '8eb1242054fc0a';
}

add_action('phpmailer_init', 'mailtrap');


// licence 
// function custom_redirect() {
//     // Get the current home URL
//     $current_home_url = home_url();

//     // Check if the current home URL is not "localhost/mytheme"
//     if ($current_home_url !== 'http://localhost/medical_pro/') {
//         // Redirect to Facebook
//         wp_redirect('https://www.facebook.com');
//         exit;
//     }
//     else{
//         echo "Hello";
//     }
// }
// add_action('template_redirect', 'custom_redirect');

// Create the custom database table and insert data when the plugin is activated
function create_custom_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'theme_activation';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        active_key varchar(255) NOT NULL,
        domain_name varchar(255) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    // $NineDigitRandomNumber = rand(100000000,999999999);

    // Insert data into the table
    $wpdb->insert(
        $table_name,
        array(
            'active_key' => '0987654321',
            'domain_name' => 'http://localhost/medical_pro/'
        )
    );
}

register_activation_hook(__FILE__, 'create_custom_table');

add_action('after_switch_theme', 'create_custom_table');







//function activate code 

function is_theme_active()
{
    global $doc_pro;
    $active_key = $doc_pro['doc-pro-activation-key'];
    $active_url = $doc_pro['doc-pro-activation-url'];

    global $wpdb;
    $table_name = $wpdb->prefix . 'theme_activation';

    // Check if the active_key is '12345' in the database
    $result = $wpdb->get_results("SELECT * FROM $table_name");

    // echo '<pre>' ;
    // print_r($active_key);  


    if($result[0]->active_key != $active_key){

        if (is_front_page()) {
            wp_die('Your theme is not active, please active the theme by licence code', 'Message Title');
         } 

    }elseif($result[0]->domain_name != $active_url){
        if (is_front_page()) {
            wp_die('Your domain name is not allowed for this theme, please buy a new theme', 'Message Title');
         }
    }elseif($result[0]->active_key == $active_key  && $result[0]->domain_name == $active_url){
        return true ;
    }

    

   
}

add_action('wp_head', 'is_theme_active');


