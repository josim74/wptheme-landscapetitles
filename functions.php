<?php
    add_theme_support('title-tag');
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');
     
    // load theme taxonomy
    load_theme_textdomain('subtle',get_template_directory_uri().'/languages');
   // menu register
    register_nav_menus(array(
        'main-menu'=>__('First Menu','subtle'),
        'footer-menu'=>__('Footer Menu','subtle')
    ));

