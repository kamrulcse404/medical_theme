<?php

require_once('enqueue_css_js.php');

function my_theme()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'my_theme');