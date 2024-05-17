<?php

require_once 'vendor/autoload.php';
require_once(dirname(__FILE__) . '/classes/controllers/PA_CPT_Projects.class.php');
require_once(dirname(__FILE__) . '/classes/controllers/PA_CPT_SliderHome.class.php');
require_once(dirname(__FILE__) . '/classes/controllers/PA_Enqueue_Files.class.php');
// require_once(dirname(__FILE__) . '/classes/controllers/PA_CPT_Magazine.class.php');


add_action('after_setup_theme', function () {
    load_theme_textdomain('iasd', get_stylesheet_directory() . '/language/');
}, 9);
