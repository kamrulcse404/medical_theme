<?php

// appoinment 
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



// user contact 
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

    // send mail code start 

    $to = 'anmtanvir872@gmail.com';
    $subject = 'Subject';
    // $body = $formdata['temp_desc'];
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'From:' . "testing@gmail.com";


    //Message
    $message = "Your registration is successful.Your registration number is 1234 ";

    // foreach ($formdata as $index => $field) {
    //     $message .= '<strong>' . $index . '</strong> :' . $field . '<br/>';
    // }

    $test = wp_mail($to, $subject, $message, $headers);


    // send mail code end 


    // Send a response
    wp_send_json_success('Cotact Data Submitted !');

    wp_die();
}

// comments 
add_action('wp_ajax_get_comment_data', 'get_comment_data');
add_action('wp_ajax_nopriv_get_comment_data', 'get_comment_data');

function get_comment_data()
{

    $formdata = [];
    wp_parse_str($_POST['get_comment_data'], $formdata);

    $commentor_name = sanitize_text_field($formdata['commentor_name']);
    $commentor_email = sanitize_email($formdata['commentor_email']);
    $commentor_message = sanitize_text_field($formdata['commentor_message']);

    global $wpdb;

    $data = array(
        'commentor_name' => $commentor_name,
        'commentor_email' => $commentor_email,
        'commentor_message' => $commentor_message,
    );

    // Insert data into the database
    $table_name = $wpdb->prefix . 'user_comment'; // Use proper table prefix
    $wpdb->insert($table_name, $data);



    // Send a response
    wp_send_json_success('Comment Submitted');


    wp_die();
}

