<?php

/**
 * Head section for meta data
 *
 * @package MyProject
 */

use MyProjectVendor\EightshiftLibs\Helpers\Components;

$globalManifest = Components::getManifest(dirname(__DIR__, 2));
$manifest = Components::getManifest(__DIR__);

$headFavicon = Components::checkAttr('headFavicon', $attributes, $manifest);
$headCharset = Components::checkAttr('headCharset', $attributes, $manifest);
$headName = Components::checkAttr('headName', $attributes, $manifest);

?>

<meta charset="<?php echo \esc_attr($headCharset); ?>" />

<!-- Responsive -->
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<!-- Remove IE's ability to use compatibility mode -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- Correct type -->
<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<!-- Disable phone formatting on safari -->
<meta name="format-detection" content="telephone=no">

<!-- Speed up fetching of external assets -->
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//ajax.googleapis.com">
<link rel="dns-prefetch" href="//www.google-analytics.com">

<!-- Win phone Meta -->
<meta name="application-name" content="<?php echo \esc_attr($headName); ?>"/>

<!-- Apple -->
<meta name="apple-mobile-web-app-title" content="<?php echo \esc_attr($headName); ?>">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="apple-touch-startup-image" href="<?php echo \esc_url($headFavicon); ?>">

<!-- General -->
<link rel="shortcut icon" href="<?php echo \esc_url($headFavicon); ?>" />

<?php
echo Components::outputCssVariablesGlobal($globalManifest); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
