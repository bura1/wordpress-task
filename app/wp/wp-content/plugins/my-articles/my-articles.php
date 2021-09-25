<?php
/**
 * Plugin Name:       My articles
 * Description:       Block to show articles
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            tb
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-articles
 *
 * @package           my-api-articles
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function my_api_articles_my_articles_block_init() {
	register_block_type( 
		__DIR__,
		array(
			'render_callback' => 'my_articles_block_render',
			'attributes' => array(
				'numberOfArticles' => array(
					'type' => 'number',
					'default' => 4
				)
			)
		)
	);
}
add_action( 'init', 'my_api_articles_my_articles_block_init' );

function my_articles_block_render($attributes) {
	
	//$response = wp_remote_get('http://localhost:8080/wp-json/wl/v1/articles');

	// testni url, jer lokalno je bio problem sa portom pa php nije mogao dohvatiti podatke
	$response = wp_remote_get('https://melodiapp.com/wp-json/wl/v1/articles');
    $body = wp_remote_retrieve_body($response);
    $articles = json_decode($body, true);


	$return = '<h1>Latest corns</h1><div class="articles-wrapper">';

	for ($i = 0; $i < $attributes["numberOfArticles"]; $i++) {
		$return .= '<a href="'. $articles['data'][$i]['url'] .'" class="single-article">' . 
			'<div class="article-img" style="background-image: url('. $articles['data'][$i]['imageUrl'] .')"></div>' .
			'<p>'. $articles['data'][$i]['date'] .'</p>' .
			'<h3>'. $articles['data'][$i]['title'] .'</h3>' .
			'<div>'. wp_trim_words($articles['data'][$i]['content'], 18, '...') .'</div>' .
		'</a>';
	}

	$return .= '</div>';

	return $return;
}