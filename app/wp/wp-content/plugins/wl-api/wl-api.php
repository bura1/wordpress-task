<?php

/**
 * Plugin Name: wl-api
 */

function articles() {

    $response = wp_remote_get('https://inshortsapi.vercel.app/news?category=science');
    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

	return $data;
}

add_action('rest_api_init', function() {
	register_rest_route( 'wl/v1', 'articles', [
		'methods' => 'GET',
		'callback' => 'articles'
	]);
});