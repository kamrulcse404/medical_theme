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



// metabox for about page
function metabox_for_about(array $about_meta)
{
    $about_meta[] = array(
        'id' => 'about-page_title',
        'title' => 'About Page Content',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'fields' => array(
            array(
                'id' => 'about-title',
                'name' => 'Page Title',
                'default' => 'About Us',
                'type' => 'text',
            ),
            array(
                'id' => 'about-description',
                'name' => 'Page Description',
                'default' => 'About Us',
                'type' => 'wysiwyg',
            ),

            array(
                'id' => 'about-section-background',
                'name' => 'Upload Background Image',
                'default' => get_template_directory_uri(). '/images/bg/22.jpg',
                'type' => 'file',
            ),


            array(
                'id' => 'about-description-title',
                'name' => 'Description Title',
                'default' => 'Personal care for your healthy living',
                'type' => 'text',
            ),
            array(
                'id' => 'about-section-description',
                'name' => 'Page Description',
                'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quod laborum alias. Vitae dolorum, officia sit! Saepe ullam facere at, consequatur incidunt, quae esse, quis ut reprehenderit dignissimos, libero delectus.',
                'type' => 'wysiwyg',
            ),

            array(
                'id' => 'about-section-description-background',
                'name' => 'Upload Background Image',
                'default' => get_template_directory_uri() . '/images/about/sign.png',
                'type' => 'file',
            ),



            array(
                'id' => 'about-doctors-container-title',
                'name' => 'Container Title',
                'default' => 'Meet Our Specialist',
                'type' => 'text',
            ),
            array(
                'id' => 'about-doctors-container-description',
                'name' => 'Container Description',
                'default' => 'Today’s users expect effortless experiences. Don’t let essential people and processes stay stuck in the past. Speed it up, skip the hassles',
                'type' => 'wysiwyg',
            ),
            array(
                'name'    => 'Select an Option for Custom Post Type',
                'desc'    => 'Choose an option from the dropdown',
                'id'      => 'dropdown_field-custom-post-type',
                'type'    => 'select',
                'show_option_none' => true,
                'options' => array(
                    'services' => 'Services',
                    'doctor' => 'Doctor',
                ),
            ),
        ),
    );

    return
        $about_meta;
}




add_filter('cmb2_meta_boxes', 'metabox_for_about');
