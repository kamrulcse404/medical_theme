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
                'default' =>  get_template_directory_uri() . '/images/about/sign.png',
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


// metabox for blog page
// function metabox_for_blog(array $blog_meta)
// {
//     $blog_meta[] = array(
//         'id' => 'blog-page_title',
//         'title' => 'Blog Page Content',
//         'object_types' => array('page'),
//         'show_on' => array(
//             'key' => 'page-template',
//             'value' => 'about.php',
//         ),
//         'fields' => array(
//             // about section 
//             array(
//                 'id' => 'about-title',
//                 'name' => 'Page Title',
//                 'default' => 'About Us',
//                 'type' => 'text',
//             ),


//         ),
//     );

//     return $blog_meta;
// }
// add_filter('cmb2_meta_boxes', 'metabox_for_blog');


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
                'name' => 'Type Contact Location',
                'default' => 'North Main Street,Brooklyn Australia',
                'type' => 'text',
            ),
            array(
                'id' => 'contact-form-title',
                'name' => 'Contact Form Title',
                'default' => 'Contact us',
                'type' => 'text',
            ),
            array(
                'id' => 'contact-form-desc',
                'name' => 'Contact Form Description',
                'default' => 'Laboriosam exercitationem molestias beatae eos pariatur, similique, excepturi mollitia sit perferendis maiores ratione aliquam?',
                'type' => 'wysiwyg',
            ),

            array(
                'id' => 'contact-page-location',
                'name' => 'Contact Location URL',
                'default' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7306.0001064949265!2d90.464590789186!3d23.711692137937856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b70abed44b75%3A0x4b94bcb774fb6573!2sKonapara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1693904140806!5m2!1sen!2sbd',
                'type' => 'wysiwyg',
            ),
        ),
    );

    return
        $contact_meta;
}
add_filter('cmb2_meta_boxes', 'metabox_for_contact');


// metabox for Department page
function metabox_for_department(array $department_meta)
{
    $department_meta[] = array(
        'id' => 'department-page_title',
        'title' => 'Department Page Title',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'department.php',
        ),
        'fields' => array(
            array(
                'id' => 'department-content-title',
                'name' => 'Department Content Title',
                'default' => 'All Department',
                'type' => 'text',
            ),
            array(
                'id' => 'department-content-desc',
                'name' => 'Department Content Description',
                'default' => 'Care Department',
                'type' => 'wysiwyg',
            ),
            array(
                'id' => 'department-content-background',
                'name' => 'Upload Background Image',
                'default' => get_template_directory_uri() . '/images/bg/22.jpg',
                'type' => 'file',
            ),

            array(
                'id' => 'department-section-title',
                'name' => 'Department Section Title',
                'default' => 'Award winning patient care',
                'type' => 'text',
            ),
            array(
                'id' => 'department-section-desc',
                'name' => 'Department Section Description',
                'default' => 'Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.',
                'type' => 'wysiwyg',
            ),

        ),
    );

    return $department_meta;
}
add_filter('cmb2_meta_boxes', 'metabox_for_department');


// metabox for appoinment page
function metabox_for_appoinment(array $appoinment_meta)
{
    $appoinment_meta[] = array(
        'id' => 'appoinment_page_title',
        'title' => 'Appoinment Container Extra Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'appoinment.php',
        ),
        'fields' => array(
            array(
                'id' => 'appoinment-container-title',
                'name' => 'Appoinment Title',
                'default' => 'Book your Seat',
                'type' => 'text',
            ),
            array(
                'id' => 'appoinment-container-desc',
                'name' => 'Appoinment Description',
                'default' => 'Appoinment',
                'type' => 'wysiwyg',
            ),
            array(
                'id' => 'appoinment-container-background',
                'name' => 'Upload background Image for Appoinment Container',
                'default' => get_template_directory_uri() . '/images/bg/22.jpg',
                'type' => 'file',
            ),


            array(
                'id' => 'appoinment-book-contact-title',
                'name' => 'Appoinment Book Contact Title',
                'default' => 'Call for an Emergency Service!',
                'type' => 'text',
            ),
            array(
                'id' => 'appoinment-book-contact-number',
                'name' => 'Appoinment Book Contact Number',
                'default' => '+84 789 1256',
                'type' => 'text',
            ),
            array(
                'id' => 'appoinment-book-title',
                'name' => 'Appoinment Book Title',
                'default' => 'Book an appoinment',
                'type' => 'text',
            ),
            array(
                'id' => 'appoinment-book-desc',
                'name' => 'Appoinment Book Description',
                'default' => 'Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.',
                'type' => 'wysiwyg',
            ),
        ),
    );

    return $appoinment_meta;
}

add_filter('cmb2_meta_boxes', 'metabox_for_appoinment');


// metabox for doctors page
function metabox_for_doctors(array $doctors_meta)
{
    $doctors_meta[] = array(
        'id' => 'doctors_page_title',
        'title' => 'Doctors Container Title',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'all_doctors.php',
        ),
        'fields' => array(
            array(
                'id' => 'doctors-container-title',
                'name' => 'Doctors Container Title',
                'default' => 'All Doctors',
                'type' => 'text',
            ),
            array(
                'id' => 'doctors-container-desc',
                'name' => 'Doctors Container Description',
                'default' => 'Specalized Doctors',
                'type' => 'wysiwyg',
            ),
            array(
                'id' => 'doctors-container-background',
                'name' => 'Upload background Image for Doctors Container',
                'default' => get_template_directory_uri() . '/images/bg/22.jpg',
                'type' => 'file',
            ),

            array(
                'id' => 'doctors-section-title',
                'name' => 'Doctors Section Title',
                'default' => 'Doctors',
                'type' => 'text',
            ),
            array(
                'id' => 'doctors-section-desc',
                'name' => 'Doctors Section Description',
                'default' => 'We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque',
                'type' => 'wysiwyg',
            ),

            array(
                'id' => 'doctors-cta-desc',
                'name' => 'Doctors CTA Section Description',
                'default' => 'We are pleased to offer you the chance to have the healthy',
                'type' => 'wysiwyg',
            ),
            array(
                'id' => 'doctors-cta-button',
                'name' => 'Doctors CTA Button Title',
                'default' => 'GET APPOINMENT',
                'type' => 'text',
            ),
            array(
                'id' => 'doctors-cta-background',
                'name' => 'Upload background Image for Doctors CTA',
                'default' => get_template_directory_uri() . '/images/bg/banner.jpg',
                'type' => 'file',
            ),
        ),
    );

    return $doctors_meta;
}

add_filter('cmb2_meta_boxes', 'metabox_for_doctors');


// metabox for department single page
function metabox_for_department_single(array $department_single_meta)
{
    $department_single_meta[] = array(
        'id' => 'department_single_page',
        'title' => 'Single Department Container',
        'object_types' => array('departments'),

        'fields' => array(
            array(
                'id' => 'single-department-container-background',
                'name' => 'Single Department Container Background',
                'default' => get_template_directory_uri() . '/images/bg/22.jpg',
                'type' => 'file',
            ),


            array(
                'id' => 'single-department-sidebar-schedule-1-day',
                'name' => 'Single Department Schedule Day One',
                'default' => 'Monday - Friday',
                'type' => 'text',
            ),
            array(
                'id' => 'single-department-sidebar-schedule-1-time',
                'name' => 'Single Department Schedule Time One',
                'default' => '9:00 - 17:00',
                'type' => 'text',
            ),

            array(
                'id' => 'single-department-sidebar-schedule-2-day',
                'name' => 'Single Department Schedule Day Two',
                'default' => 'Saturday',
                'type' => 'text',
            ),
            array(
                'id' => 'single-department-sidebar-schedule-2-time',
                'name' => 'Single Department Schedule Time One',
                'default' => '9:00 - 16:00',
                'type' => 'text',
            ),

            array(
                'id' => 'single-department-sidebar-schedule-3-day',
                'name' => 'Single Department Schedule Day Three',
                'default' => 'Sunday',
                'type' => 'text',
            ),
            array(
                'id' => 'single-department-sidebar-schedule-3-time',
                'name' => 'Single Department Schedule Time One',
                'default' => 'Closed',
                'type' => 'text',
            ),

            array(
                'id' => 'single-department-sidebar-urgent-contact',
                'name' => 'Single Department Urgent Contact',
                'default' => '+23-4565-65768',
                'type' => 'text',
            ),


        ),
    );

    return $department_single_meta;
}

add_filter('cmb2_meta_boxes', 'metabox_for_department_single');



// metabox for doctor single page
function metabox_for_doctor_single(array $doctor_single_meta)
{
    $doctor_single_meta[] = array(
        'id' => 'department_single_page',
        'title' => 'Single Department Container',
        'object_types' => array('doctor'),

        'fields' => array(
            array(
                'id' => 'single-doctor-container-background',
                'name' => 'Single Doctor Container Background',
                'default' => get_template_directory_uri() . '/images/bg/22.jpg',
                'type' => 'file',
            ),

            array(
                'id' => 'single-doctor-skills',
                'name' => 'Single Doctor Skills',
                'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In architecto voluptatem alias, aspernatur
                voluptatibus corporis quisquam? Consequuntur, ad, doloribus, doloremque voluptatem at consectetur natus eum
                ipsam dolorum iste laudantium tenetur.',
                'type' => 'wysiwyg',
            ),



            array(
                'id' => 'single-doctor-visit-day-1',
                'name' => 'Doctor Visiting Day One',
                'default' => 'Monday - Friday',
                'type' => 'text',
            ),
            array(
                'id' => 'single-doctor-visit-time-1',
                'name' => 'Doctor Visiting Time One',
                'default' => '9:00 - 17:00',
                'type' => 'text',
            ),

            array(
                'id' => 'single-doctor-visit-day-2',
                'name' => 'Doctor Visiting Day Two',
                'default' => 'Saturday',
                'type' => 'text',
            ),
            array(
                'id' => 'single-doctor-visit-time-2',
                'name' => 'Doctor Visiting Time Two',
                'default' => '9:00 - 16:00',
                'type' => 'text',
            ),

            array(
                'id' => 'single-doctor-visit-day-off',
                'name' => 'Doctor Visiting Off Day',
                'default' => 'Sunday',
                'type' => 'text',
            ),
            array(
                'id' => 'single-doctor-visit-day-off-1',
                'name' => 'Doctor Visiting Off',
                'default' => 'Closed',
                'type' => 'text',
            ),

            array(
                'id' => 'single-doctor-urgent-contact',
                'name' => 'Doctor Urgent Contact Number',
                'default' => '+23-4565-65768',
                'type' => 'text',
            ),


        ),
    );

    return $doctor_single_meta;
}

add_filter('cmb2_meta_boxes', 'metabox_for_doctor_single');


// repeater add more option for fetaure  
function about_feature_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'about-feature-repeater',
        'title' => 'Add More Option For Feacture',
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



// repeater add more option for department single page   
function single_department_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'single_department-repeater',
        'title' => 'Add More Option For Single Page Service',
        'object_types' => array('departments'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'single-department-service',
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
        'name' => 'Service Title',
        'desc' => 'Enter the feature title',
        'id' => 'service-feature-single-department',
        'type' => 'text',
    ));
}

add_action('cmb2_admin_init', 'single_department_metaboxes');



// repeater add more option for achivement 
function about_achivement_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'about-achivement-repeater',
        'title' => 'Add More Option For Achivement',
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
        'id' => 'about-achivement',
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
        'name' => 'Achivement Image',
        'desc' => 'Upload Your Achivement Image',
        'id' => 'about-achivement-image',
        'type' => 'file',
    ));
}

add_action('cmb2_admin_init', 'about_achivement_metaboxes');



// repeater add more option for testimonial 
function about_testimonial_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'about-testimonial-repeater',
        'title' => 'Add More Option For Testimonial',
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
        'id' => 'about-testimonial',
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
        'name' => 'Testimonial Compliment',
        'id' => 'about-testimonial-compliment',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Doctor Name',
        'id' => 'about-testimonial-doctor-name',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Testimonial Compiment Description',
        'id' => 'about-testimonial-compliment-desc',
        'type' => 'wysiwyg',
    ));
}

add_action('cmb2_admin_init', 'about_testimonial_metaboxes');



// repeater add more option for single doctor social network 
function single_doctor_social_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'single-doctor-social-repeater',
        'title' => 'Add More Option For Single Doctor Social',
        'object_types' => array('doctor'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'single-doctor-social',
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
        'name' => 'Social Network Name',
        'id' => 'single-doctor-social-name',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Social Network URL',
        'id' => 'single-doctor-social-url',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Social Network Icon',
        'id' => 'single-doctor-social-icon',
        'type' => 'text',
    ));
}

add_action('cmb2_admin_init', 'single_doctor_social_metaboxes');


// repeater add more option for single doctor education 
function single_doctor_education_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'single-doctor-education-repeater',
        'title' => 'Add More Option For Single Doctor Education',
        'object_types' => array('doctor'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'single-doctor-ecucation',
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
        'name' => 'Education Duration',
        'id' => 'single-doctor-education-duration',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Institute',
        'id' => 'single-doctor-education-university',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Education details',
        'id' => 'single-doctor-education-details',
        'type' => 'wysiwyg',
    ));
}

add_action('cmb2_admin_init', 'single_doctor_education_metaboxes');


// repeater add more option for single doctor expertise 
function single_doctor_expertise_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'single-doctor-expertise-repeater',
        'title' => 'Add More Option For Single Doctor Expertise',
        'object_types' => array('doctor'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'single-doctor-expertise',
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
        'name' => 'Experise Name',
        'id' => 'single-doctor-expertise-name',
        'type' => 'text',
    ));
}

add_action('cmb2_admin_init', 'single_doctor_expertise_metaboxes');
