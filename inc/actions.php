<?php

function aaa_add_supports() {
    add_theme_support('title-tag');
}

function aaa_remove_post_type_supports() {
    remove_post_type_support('page', 'editor');
    remove_post_type_support('page', 'thumbnail');
}

add_action('after_setup_theme', 'aaa_add_supports');
add_action('init', 'aaa_remove_post_type_supports');