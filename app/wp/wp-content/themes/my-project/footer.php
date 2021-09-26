<?php

/**
 * Display footer
 *
 * @package MyProject
 */

use MyProjectVendor\EightshiftLibs\Helpers\Components;

?>

</main>

<?php
echo Components::render( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	'layout-three-columns',
	[
		'additionalClass' => 'footer',
		'layoutThreeColumnsLeft' => Components::render(
			'menu',
			[
				'variation' => 'horizontal'
			]
		),
		'layoutThreeColumnsRight' => Components::render(
			'copyright',
			[
				'copyrightYear' => gmdate('Y'),
				'copyrightContent' => esc_html__('All love and happines', 'my-project'),
			]
		)
	]
);

wp_footer();
?>
</body>
</html>
