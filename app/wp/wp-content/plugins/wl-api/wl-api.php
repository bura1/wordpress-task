<?php

/**
 * Plugin Name: wl-api
 */

function wl_articles() {
	return 'return';
}

add_action('rest_api_init', function() {
	register_rest_route( 'wl/v1', 'posts', [
		'methods' => 'GET',
		'callback' => 'wl_articles'
	]);
});