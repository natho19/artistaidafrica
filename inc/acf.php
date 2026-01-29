<?php
function acf_settings_path($path)
{
    $path = get_stylesheet_directory() . '/inc/third-party/acf/';
    return $path;
}
add_filter('acf/settings/path', 'acf_settings_path');

function acf_settings_dir($dir)
{
    $dir = get_stylesheet_directory_uri() . '/inc/third-party/acf/';
    return $dir;
}
add_filter('acf/settings/dir', 'acf_settings_dir');

include_once(get_stylesheet_directory() . '/inc/third-party/acf/acf.php');

// Google API key for ACF
// add_filter('acf/settings/google_api_key', function () { 
//     return 'AIzaSyAQY3r3qlsF-OWQ7o5L6K2Dliu47Ju_-4Y';
// });

function aaa_acf_google_map_api($api)
{
    $api['key'] = 'AIzaSyAQY3r3qlsF-OWQ7o5L6K2Dliu47Ju_-4Y';
    return $api;
}
add_filter('acf/fields/google_map/api', 'aaa_acf_google_map_api');

// add_filter('acf/settings/show_admin', '__return_false');