<?php

/**
 * Template for the Example Block view.
 *
 * @package MyProject
 */

use MyProjectVendor\EightshiftLibs\Helpers\Components;

$manifest = Components::getManifest(__DIR__);

$blockClass = $attributes['blockClass'] ?? '';

$articlesContent = Components::checkAttr('articlesContent', $attributes, $manifest);

?>

<div class="<?php echo \esc_attr($blockClass); ?>">

	<?php
	/**
	 * Here I am using test api link from plugin installed on another site because php can't for some reason fetch api data from local port
	 * 
	 * It should be like this:
	 *     - $response = wp_remote_get('http://localhost:8080/wp-json/eightshift-libs/v1/articles-route');
	 */
	$response = wp_remote_get('https://melodiapp.com/wp-json/wl/v1/articles');
    $body = wp_remote_retrieve_body($response);
    $articles = json_decode($body, true);


	$return = '<h1 class="articles-block-title">Latest corns</h1><div class="articles-wrapper">';

		for ($i = 0; $i < 4; $i++) {
			$return .= '<a href="'. $articles['data'][$i]['url'] .'" class="single-article">' . 
				'<div class="article-img" style="background-image: url('. $articles['data'][$i]['imageUrl'] .')"></div>' .
				'<p class="date">'. $articles['data'][$i]['date'] .'</p>' .
				'<h3 class="title">'. $articles['data'][$i]['title'] .'</h3>' .
				'<div class="description">'. wp_trim_words($articles['data'][$i]['content'], 18, '...') .'</div>' .
			'</a>';
		}

	$return .= '</div>';

	echo $return;
	?>

	<?php echo \wp_kses_post($articlesContent); ?>
</div>
