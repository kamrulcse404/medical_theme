<?php

// metabox for service page
function metabox_for_service(array $service_meta)
{
    $service_meta[] = array(
        'id' => 'page_title',
        'title' => 'Service Container Extra Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'service.php',
        ),
        'fields' => array(
            array(
                'id' => 'service-title',
                'name' => 'Title',
                'default' => 'Our services',
                'type' => 'text',
            ),
            array(
                'id' => 'service-description',
                'name' => 'Description',
                'default' => 'What We Do',
                'type' => 'text',
            ),
            array(
                'id' => 'service-container-background',
                'name' => 'Upload background Image for Service Container',
                'default' => get_template_directory_uri() . '/images/bg/22.jpg',
                'type' => 'file',
            ),

            array(
                'id' => 'service-cta-title',
                'name' => 'Cta Title',
                'default' => 'hello',
                'type' => 'wysiwyg',
            ),

            array(
                'id' => 'service-cta-background',
                'name' => 'Upload background Image for Service Cta',
                'default' => get_template_directory_uri() . '/images/bg/banner.jpg',
                'type' => 'file',
            ),

            array(
                'id' => 'service-cta-btn',
                'name' => 'Button Name',
                'default' => 'Get Appoinment',
                'type' => 'text',
            ),
        ),
    );

    return $service_meta;
}

add_filter('cmb2_meta_boxes', 'metabox_for_service');

// We are pleased to offer you the <span class="title-color">chance to have the healthy</span>