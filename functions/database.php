<?php

// Activation hook
function create_database_for_appoinment()
{

    // Define the custom table name
    global $wpdb;
    $table_name = $wpdb->prefix . 'doctors_appoinment';

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id INT NOT NULL AUTO_INCREMENT,
        department VARCHAR(100) NOT NULL, 
        doctor VARCHAR(100) NOT NULL,
        appoinment_date DATE,
        appoinment_time VARCHAR(100) NOT NULL,
        full_name VARCHAR(100) NOT NULL,
        message TEXT,
        phone_number VARCHAR(100) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    dbDelta($sql);
}

register_activation_hook(__FILE__, 'create_database_for_appoinment');
add_action('after_switch_theme', 'create_database_for_appoinment');




// create database for contact 
function create_database_for_user_contact()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'user_contact';

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name(
        id INT NOT NULL AUTO_INCREMENT,
        user_full_name VARCHAR(100) NOT NULL,
        user_email VARCHAR(100) NOT NULL,
        user_query_topic VARCHAR(255) NOT NULL,
        user_phone_number VARCHAR(100) NOT NULL,
        user_message TEXT NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_database_for_user_contact');
add_action('after_switch_theme', 'create_database_for_user_contact');
