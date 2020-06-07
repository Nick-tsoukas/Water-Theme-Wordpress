<?php
function water_files() {
    wp_enqueue_script('main-water-js', get_theme_file_uri('/js/main.js', NULL, microtime(), true));

    wp_enqueue_style('water_main_syles', get_stylesheet_uri(NULL, microtime(), true));

}

add_action('wp_enqueue_scripts', 'water_files');

function water_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'water_features');

?>