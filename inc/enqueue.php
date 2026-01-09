<?php

function aaa_register_assets() {
    wp_register_style('aaa-main', get_template_directory_uri() . '/assets/css/main.css');
    wp_register_style('aaa-style', get_template_directory_uri() . '/assets/css/style.css', ['aaa-main']);

    wp_register_script('aaa-libs', get_template_directory_uri() . '/assets/js/libs.min.js', [], false, true);
    wp_register_script('aaa-common', get_template_directory_uri() . '/assets/js/common.min.js', ['aaa-libs', 'jquery'], false, true);

    wp_enqueue_style('aaa-style');
    wp_enqueue_script('aaa-common');
}

add_action('wp_enqueue_scripts', 'aaa_register_assets');