<?php
// custom post for services 
function custom_post_type_services()
{
    $labels = array(
        'name'               => _x('Services', 'post type general name', 'doc_pro'),
        'singular_name'      => _x('Service', 'post type singular name', 'doc_pro'),
        'menu_name'          => _x('Services', 'admin menu', 'doc_pro'),
        'name_admin_bar'     => _x('Service', 'add new on admin bar', 'doc_pro'),
        'add_new'            => _x('Add New', 'service', 'doc_pro'),
        'add_new_item'       => __('Add New Service', 'doc_pro'),
        'new_item'           => __('New Service', 'doc_pro'),
        'edit_item'          => __('Edit Service', 'doc_pro'),
        'view_item'          => __('View Service', 'doc_pro'),
        'all_items'          => __('All Services', 'doc_pro'),
        'search_items'       => __('Search Services', 'doc_pro'),
        'parent_item_colon'  => __('Parent Services:', 'doc_pro'),
        'not_found'          => __('No services found.', 'doc_pro'),
        'not_found_in_trash' => __('No services found in Trash.', 'doc_pro')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'services'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail')
    );

    register_post_type('services', $args);
}
add_action('init', 'custom_post_type_services');

// custom post for dotor 
function create_doctor_custom_post_type() {
    $labels = array(
        'name'               => _x( 'Doctors', 'post type general name', 'textdomain' ),
        'singular_name'      => _x( 'Doctor', 'post type singular name', 'textdomain' ),
        'menu_name'          => _x( 'Doctors', 'admin menu', 'textdomain' ),
        'name_admin_bar'     => _x( 'Doctor', 'add new on admin bar', 'textdomain' ),
        'add_new'            => _x( 'Add New', 'doctor', 'textdomain' ),
        'add_new_item'       => __( 'Add New Doctor', 'textdomain' ),
        'new_item'           => __( 'New Doctor', 'textdomain' ),
        'edit_item'          => __( 'Edit Doctor', 'textdomain' ),
        'view_item'          => __( 'View Doctor', 'textdomain' ),
        'all_items'          => __( 'All Doctors', 'textdomain' ),
        'search_items'       => __( 'Search Doctors', 'textdomain' ),
        'parent_item_colon'  => __( 'Parent Doctors:', 'textdomain' ),
        'not_found'          => __( 'No doctors found.', 'textdomain' ),
        'not_found_in_trash' => __( 'No doctors found in Trash.', 'textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'doctor' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
    );

    register_post_type( 'doctor', $args );
}
add_action( 'init', 'create_doctor_custom_post_type');

// texonomoy for doctor 
function create_doctor_taxonomy() {
    $labels = array(
        'name'              => _x( 'Doc Categories', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Doc Category', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Doc Categories', 'textdomain' ),
        'all_items'         => __( 'All Doc Categories', 'textdomain' ),
        'parent_item'       => __( 'Parent Doc Category', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Doc Category:', 'textdomain' ),
        'edit_item'         => __( 'Edit Doc Category', 'textdomain' ),
        'update_item'       => __( 'Update Doc Category', 'textdomain' ),
        'add_new_item'      => __( 'Add New Doc Category', 'textdomain' ),
        'new_item_name'     => __( 'New Doc Category Name', 'textdomain' ),
        'menu_name'         => __( 'Doc Categories', 'textdomain' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'doc-category' ), // Replace 'doc-category' with your desired URL slug.
    );

    register_taxonomy( 'doc_category', 'doctor', $args );
}

add_action( 'init', 'create_doctor_taxonomy');
