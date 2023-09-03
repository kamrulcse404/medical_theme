<?php


    add_action('wp_ajax_get_appoinment_data', 'get_appoinment_data');
    add_action('wp_ajax_nopriv_get_appoinment_data', 'get_appoinment_data');

    function get_appoinment_data()
    {

        $formdata = [];
        wp_parse_str($_POST['get_appoinment_data'], $formdata);


    // print_r($formdata);

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

?>