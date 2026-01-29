<?php
function aaa_excerpt_length() {
    return 20;
}

function aaa_excerpt_more( $more ) {
	return '...';
}

add_filter('show_admin_bar', '__return_false');
add_filter('use_block_editor_for_post', '__return_false');
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('excerpt_length', 'aaa_excerpt_length', 99);
add_filter('excerpt_more', 'aaa_excerpt_more');