<?php

/**
 * Display regular page
 *
 * @package MyProject
 */

get_header();

if (have_posts()) {
	while (have_posts()) {
		the_post();
		the_title('<div class="page-title">', '</div>');
		the_content();
	}
}

get_footer();
