<?php

/**
 * Template for the Page Overlay Component.
 *
 * @package MyProject
 */

use MyProjectVendor\EightshiftLibs\Helpers\Components;

$manifest = Components::getManifest(__DIR__);

$pageOverlayUse = Components::checkAttr('pageOverlayUse', $attributes, $manifest);
if (!$pageOverlayUse) {
	return;
}

$componentClass = $manifest['componentClass'] ?? '';
$additionalClass = $attributes['additionalClass'] ?? '';
$blockClass = $attributes['blockClass'] ?? '';
$selectorClass = $attributes['selectorClass'] ?? $componentClass;
$componentJsClass = $manifest['componentJsClass'] ?? '';

$overlayClass = Components::classnames([
	Components::selector($componentClass, $componentClass),
	Components::selector($blockClass, $blockClass, $selectorClass),
	Components::selector($additionalClass, $additionalClass),
	Components::selector($componentJsClass, $componentJsClass),
]);

?>

<div class="<?php echo esc_attr($overlayClass); ?>"></div>
