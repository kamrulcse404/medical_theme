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
        'name'               => _x( 'Doctors', 'post type general name', 'doc_pro' ),
        'singular_name'      => _x( 'Doctor', 'post type singular name', 'doc_pro' ),
        'menu_name'          => _x( 'Doctors', 'admin menu', 'doc_pro' ),
        'name_admin_bar'     => _x( 'Doctor', 'add new on admin bar', 'doc_pro' ),
        'add_new'            => _x( 'Add New', 'doctor', 'doc_pro' ),
        'add_new_item'       => __( 'Add New Doctor', 'doc_pro' ),
        'new_item'           => __( 'New Doctor', 'doc_pro' ),
        'edit_item'          => __( 'Edit Doctor', 'doc_pro' ),
        'view_item'          => __( 'View Doctor', 'doc_pro' ),
        'all_items'          => __( 'All Doctors', 'doc_pro' ),
        'search_items'       => __( 'Search Doctors', 'doc_pro' ),
        'parent_item_colon'  => __( 'Parent Doctors:', 'doc_pro' ),
        'not_found'          => __( 'No doctors found.', 'doc_pro' ),
        'not_found_in_trash' => __( 'No doctors found in Trash.', 'doc_pro' )
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

// department custom post type 

function create_departments_post_type()
{
    $labels = array(
        'name'                  => _x('Departments', 'Post type general name', 'doc_pro'),
        'singular_name'         => _x('Department', 'Post type singular name', 'doc_pro'),
        'menu_name'             => _x('Departments', 'Admin Menu text', 'doc_pro'),
        'name_admin_bar'        => _x('Department', 'Add New on Toolbar', 'doc_pro'),
        'add_new'               => __('Add New', 'doc_pro'),
        'add_new_item'          => __('Add New Department', 'doc_pro'),
        'new_item'              => __('New Department', 'doc_pro'),
        'edit_item'             => __('Edit Department', 'doc_pro'),
        'view_item'             => __('View Department', 'doc_pro'),
        'all_items'             => __('All Departments', 'doc_pro'),
        'search_items'          => __('Search Departments', 'doc_pro'),
        'parent_item_colon'     => __('Parent Department:', 'doc_pro'),
        'not_found'             => __('No departments found.', 'doc_pro'),
        'not_found_in_trash'    => __('No departments found in Trash.', 'doc_pro'),
        'featured_image'        => _x('Department Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'doc_pro'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'doc_pro'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'doc_pro'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'doc_pro'),
        'archives'              => _x('Department Archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'doc_pro'),
        'insert_into_item'      => _x('Insert into department', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'doc_pro'),
        'uploaded_to_this_item' => _x('Uploaded to this department', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'doc_pro'),
        'filter_items_list'     => _x('Filter departments list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'doc_pro'),
        'items_list_navigation' => _x('Departments list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'doc_pro'),
        'items_list'            => _x('Departments list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'doc_pro'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,   
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'departments'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true, // Enables hierarchical structure
        'menu_position'      => 20,
        'supports'           => array('title', 'editor', 'thumbnail', 'page-attributes'),
    );

    register_post_type('departments', $args);
}
add_action('init', 'create_departments_post_type');




// texonomoy for doctor 
function create_doctor_taxonomy() {
    $labels = array(
        'name'              => _x( 'Doc Categories', 'taxonomy general name', 'doc_pro' ),
        'singular_name'     => _x( 'Doc Category', 'taxonomy singular name', 'doc_pro' ),
        'search_items'      => __( 'Search Doc Categories', 'doc_pro' ),
        'all_items'         => __( 'All Doc Categories', 'doc_pro' ),
        'parent_item'       => __( 'Parent Doc Category', 'doc_pro' ),
        'parent_item_colon' => __( 'Parent Doc Category:', 'doc_pro' ),
        'edit_item'         => __( 'Edit Doc Category', 'doc_pro' ),
        'update_item'       => __( 'Update Doc Category', 'doc_pro' ),
        'add_new_item'      => __( 'Add New Doc Category', 'doc_pro' ),
        'new_item_name'     => __( 'New Doc Category Name', 'doc_pro' ),
        'menu_name'         => __( 'Doc Categories', 'doc_pro' ),
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
