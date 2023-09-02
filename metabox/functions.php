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
            // about section 
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
                'default' => get_template_directory_uri() . '/images/bg/22.jpg',
                'type' => 'file',
            ),


            // description 
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


            // doctors custom post type 
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


            // achivements or awards
            array(
                'id' => 'about-section-achivements',
                'name' => 'Doctor Achivement Title',
                'default' => 'Our Doctors achievements',
                'type' => 'text',
            ),

            // testimonial
            array(
                'id' => 'about-section-testimonial-image',
                'name' => 'Testimonial Image Uploader',
                'default' => get_template_directory_uri() . '/images/bg/bg-2.jpg',
                'type' => 'file',
            ),

            array(
                'id' => 'about-section-testimonial-title',
                'name' => 'Testimonial Title',
                'default' => 'What they say about us',
                'type' => 'text',
            ),

        ),
    );

    return
        $about_meta;
}
add_filter('cmb2_meta_boxes', 'metabox_for_about');


// metabox for contact page
function metabox_for_contact(array $contact_meta)
{
    $contact_meta[] = array(
        'id' => 'contact-page_title',
        'title' => 'Contact Page Content',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'contact.php',
        ),
        'fields' => array(
            // contact section 
            array(
                'id' => 'contact-title',
                'name' => 'Contact Title',
                'default' => 'Contact Us',
                'type' => 'text',
            ),
            array(
                'id' => 'contact-description',
                'name' => 'Contact Description',
                'default' => 'Get in Touch',
                'type' => 'text',
            ),

            array(
                'id' => 'contatc-section-background',
                'name' => 'Upload Background Image',
                'default' => get_template_directory_uri() . '/images/bg/22.jpg',
                'type' => 'file',
            ),

            // contact info 
            // number 
            array(
                'id' => 'contact-call-title',
                'name' => 'Call Title',
                'default' => 'Call Us',
                'type' => 'text',
            ),
            array(
                'id' => 'contact-call-number',
                'name' => 'Contact Number',
                'default' => '+823-4565-13456',
                'type' => 'text',
            ),
            // email 
            array(
                'id' => 'contact-email-title',
                'name' => 'Email Title',
                'default' => 'Email Us',
                'type' => 'text',
            ),
            array(
                'id' => 'contact-email',
                'name' => 'Type Contact Email',
                'default' => 'contact@mail.com',
                'type' => 'text',
            ),
            // location 
            array(
                'id' => 'contact-location-title',
                'name' => 'Location Title',
                'default' => 'Location',
                'type' => 'text',
            ),
            array(
                'id' => 'contact-location',
                'name' => 'Type Contact LOcation',
                'default' => 'North Main Street,Brooklyn Australia',
                'type' => 'text',
            ),
        ),
    );

    return
        $contact_meta;
}
add_filter('cmb2_meta_boxes', 'metabox_for_contact');





// repeater add more option for fetaure  
function about_feature_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'about-feature-repeater',
        'title' => 'Add More Option',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'about-feature',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Feature Title',
        'desc' => 'Enter the feature title',
        'id' => 'about-feature-title',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Feature Description',
        'desc' => 'Enter the feature description',
        'id' => 'about-feature-description',
        'type' => 'wysiwyg',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Feature Image',
        'desc' => 'Upload your Feature Image',
        'id' => 'about-feature-image',
        'type' => 'file',
    ));
}

add_action('cmb2_admin_init', 'about_feature_metaboxes');
