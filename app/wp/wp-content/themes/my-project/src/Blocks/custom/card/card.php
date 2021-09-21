<?php

/**
 * Template for the Card Block.
 *
 * @package MyProject
 */

use MyProjectVendor\EightshiftLibs\Helpers\Components;

echo Components::render( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	'card',
	Components::props('card', $attributes)
);
