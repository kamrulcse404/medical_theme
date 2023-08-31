<?php

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
