<?php


add_action('wp_ajax_get_appoinment_data', 'get_appoinment_data');
add_action('wp_ajax_nopriv_get_appoinment_data', 'get_appoinment_data');

function get_appoinment_data()
{

    $formdata = [];
    wp_parse_str($_POST['get_appoinment_data'], $formdata);

    $department = sanitize_text_field($formdata['department']);
    $doctor = sanitize_text_field($formdata['doctor']);
    $appoinment_date = sanitize_text_field($formdata['appoinment_date']);
    $appoinment_time = sanitize_text_field($formdata['appoinment_time']);
    $full_name = sanitize_text_field($formdata['full_name']);
    $phone_number = $formdata['phone_number'];
    $message = $formdata['message'];

    global $wpdb;

    $data = array(
        'department' => $department,
        'doctor' => $doctor,
        'appoinment_date' => $appoinment_date,
        'appoinment_time' => $appoinment_time,
        'full_name' => $full_name,
        'phone_number' => $phone_number,
        'message' => $message,
    );

    // Insert data into the database
    $table_name = $wpdb->prefix . 'doctors_appoinment'; // Use proper table prefix
    $wpdb->insert($table_name, $data);



    // Send a response
    wp_send_json_success('Appoinment Accepted');


    wp_die();
}




add_action('wp_ajax_get_contact_data', 'get_contact_data');
add_action('wp_ajax_nopriv_get_contact_data', 'get_contact_data');

function get_contact_data()
{
    $formdata = [];
    wp_parse_str($_POST['get_contact_data'], $formdata);

    // echo '<pre>';
    // print_r($formdata);
    // echo '</pre>';

    // exit;

    $user_full_name = sanitize_text_field($formdata['user_full_name']);
    $user_email = sanitize_email($formdata['user_email']);
    $user_query_topic = sanitize_text_field($formdata['user_query_topic']);
    $user_phone_number = sanitize_text_field($formdata['user_phone_number']);
    $user_message = sanitize_text_field($formdata['user_message']);

    $data = array(
        'user_full_name' => $user_full_name,
        'user_email' => $user_email,
        'user_query_topic' => $user_query_topic,
        'user_phone_number' => $user_phone_number,
        'user_message' => $user_message,
    );


    global $wpdb;
    // Insert data into the database
    $table_name = $wpdb->prefix . 'user_contact';

    $wpdb->insert($table_name, $data);
    // print_r("Hello Kamrul");

    // Send a response
    wp_send_json_success('Cotact Data Submitted !');

    wp_die();
}
