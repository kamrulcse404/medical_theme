<?php
defined('ABSPATH') || exit;

// Basic Settings //

// agreement section start 
Redux::setSection($opt_name, array(
    'title'            => __('Header Section', 'doc_pro'),
    'id'               => 'header-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'header-text-support',
            'type' => 'text',
            'title' => __('Support Contact', 'doc_pro'),
            'subtitle' => __('write your contact email', 'doc_pro'),
            'default' => 'support@novena.com',
        ),
        array(
            'id' => 'header-text-address',
            'type' => 'text',
            'title' => __('Address', 'doc_pro'),
            'subtitle' => __('write your address', 'doc_pro'),
            'default' => 'Address Ta-134/A, New York, USA',
        ),
        array(
            'id' => 'header-text-phone',
            'type' => 'text',
            'title' => __('Mobile Number', 'doc_pro'),
            'subtitle' => __('write your contact number', 'doc_pro'),
            'default' => '+880176543212',
        ),

    )
));

Redux::setSection($opt_name, array(
    'title'            => __('Footer Section', 'doc_pro'),
    'id'               => 'footer-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'footer-description',
            'type' => 'editor',
            'title' => __('Footer Description', 'doc_pro'),
            'default' => 'Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.',
        ),
        array(
            'id' => 'social-media-icon-one',
            'type' => 'text',
            'title' => __('Social Media Icon One', 'doc_pro'),
            'default' => 'icofont-facebook',
        ),
        array(
            'id' => 'social-media-icon-one-url',
            'type' => 'text',
            'title' => __('Social Media Icon One Url', 'doc_pro'),
            'default' => 'https://web.facebook.com/?_rdc=1&_rdr',
        ),
        array(
            'id' => 'social-media-icon-two',
            'type' => 'text',
            'title' => __('Social Media Icon Two', 'doc_pro'),
            'default' => 'icofont-twitter',
        ),
        array(
            'id' => 'social-media-icon-two-url',
            'type' => 'text',
            'title' => __('Social Media Icon Two Url', 'doc_pro'),
            'default' => 'https://twitter.com',
        ),
        array(
            'id' => 'social-media-icon-three',
            'type' => 'text',
            'title' => __('Social Media Icon Three', 'doc_pro'),
            'default' => 'icofont-linkedin',
        ),
        array(
            'id' => 'social-media-icon-three-url',
            'type' => 'text',
            'title' => __('Social Media Icon Three Url', 'doc_pro'),
            'default' => 'https://www.linkedin.com/',
        ),

        array(
            'id' => 'copyright-section',
            'type' => 'text',
            'title' => __('Copyright', 'doc_pro'),
            'default' => 'Copyright &copy; 2021, Designed &amp; Developed by ',
        ),
        array(
            'id' => 'author',
            'type' => 'text',
            'title' => __('Author', 'doc_pro'),
            'default' => 'Themefisher ',
        ),
        array(
            'id' => 'author-url',
            'type' => 'text',
            'title' => __('Author Url', 'doc_pro'),
            'default' => 'https://themefisher.com/',
        ),
        array(
            'id' => 'footer-menu-last',
            'type' => 'text',
            'title' => __('Footer Menu ', 'doc_pro'),
            'default' => 'Get In Touch ',
        ),
        array(
            'id' => 'support-duration',
            'type' => 'text',
            'title' => __('Supporting Text ', 'doc_pro'),
            'default' => 'Support Available for 24/7 ',
        ),
        array(
            'id' => 'support-mail',
            'type' => 'text',
            'title' => __('Support Mail ', 'doc_pro'),
            'default' => 'Support@email.com ',
        ),
        array(
            'id' => 'time-duaration',
            'type' => 'text',
            'title' => __('Suporting Time ', 'doc_pro'),
            'default' => 'Mon to Fri : 08:30 - 18:00 ',
        ),
        array(
            'id' => 'contact-number',
            'type' => 'text',
            'title' => __('Contact Number ', 'doc_pro'),
            'default' => '+23-456-6588 ',
        ),
    )
));
