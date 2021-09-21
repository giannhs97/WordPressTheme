<?php
function load_scripts(){
    wp_enqueue_style('stylesheet', get_template_directory_uri().'/style.css', false, 1, 'all');
    wp_enqueue_script('script', get_template_directory_uri().'/app.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

add_theme_support('post-thumbnails');

function wpdocs_custom_excerpt_length(){
    return 30;
}

add_filter('excerpt_length', 'wpdocs_custom_excerpt_length');

function wpdocs_excerpt_more(){
    return '<a href= '.get_the_permalink().'>...</a>';
}

add_filter('excerpt_more', 'wpdocs_excerpt_more');

function load_navigation(){
    register_nav_menus(array(
        'main_menu_header' => 'Main Menu Header',
        'main_menu_footer' => 'Main Menu Footer',
        'second_footer_menu' => 'Second Footer Menu',
        'third_footer_menu' => 'Third Footer Menu'
    ));  
}

add_action('after_setup_theme','load_navigation');

function add_widgets(){
    register_sidebar(array(
        'name' => 'Header Img Widget',
        'id' => 'Fimg'
    ));
}

add_action('widgets_init', 'add_widgets');

function add_widgets_top_menu(){
    register_sidebar(array(
        'name' => 'Top Menu Widget',
        'id' => 'TopMenu'
    ));
}

add_action('widgets_init', 'add_widgets_top_menu');

function add_widgets_bot_menu(){
    register_sidebar(array(
        'name' => 'Bot Menu Widget',
        'id' => 'BotMenu'
    ));
}

add_action('widgets_init', 'add_widgets_bot_menu');

function add_widgets_second_bot_menu(){
    register_sidebar(array(
        'name' => 'Second Bot Menu Widget',
        'id' => "SecondBotMenu"
    ));
}

add_action('widgets_init', 'add_widgets_second_bot_menu');

function add_widgets_thanks(){
    register_sidebar(array(
        'name' => 'Thanks Section',
        'id' => "Thanks"
    ));
}

add_action('widgets_init', 'add_widgets_thanks');

function add_widgets_slider(){
    register_sidebar(array(
        'name' => 'Slider',
        'id' => 'Slider'
    ));
}

add_action('widgets_init', 'add_widgets_slider');

function add_widgets_latest_post(){
    register_sidebar(array(
        'name' => 'Latest Posts',
        'id' => 'Latest'
    ));
}

add_action('widgets_init', 'add_widgets_latest_post');

function add_widgets_calendar(){
    register_sidebar(array(
        'name' => 'Calentar',
        'id' => 'Calentar'
    ));
}

add_action('widgets_init', 'add_widgets_calendar');

function add_widgets_social(){
    register_sidebar(array(
        'name' => 'Social Media',
        'id' => 'SocialMedia'
    ));
}

add_action('widgets_init', 'add_widgets_social');

?>

