<?php

/**
 * Theme Name: My Project
 * Description: Description
 * Author: Team Eightshift
 * Author URI: https://eightshift.com/
 * Version: 5.0.0
 * Text Domain: my-project
 *
 * @package MyProject
 */

declare(strict_types=1);

namespace MyProject;

use MyProject\Main\Main;
use MyProjectVendor\EightshiftLibs\Cli\Cli;

/**
 * If this file is called directly, abort.
 */
if (! \defined('WPINC')) {
	die;
}

/**
 * Include the autoloader so we can dynamically include the rest of the classes.
 */
$loader = require __DIR__ . '/vendor/autoload.php';

/**
 * Begins execution of the theme.
 *
 * Since everything within the theme is registered via hooks,
 * then kicking off the theme from this point in the file does
 * not affect the page life cycle.
 */
if (class_exists(Main::class)) {
	(new Main($loader->getPrefixesPsr4(), __NAMESPACE__))->register();
}

/**
 * Run all WPCLI commands.
 */
if (class_exists(Cli::class)) {
	(new Cli())->load('boilerplate');
}

// disable core blocks
remove_theme_support( 'core-block-patterns' );
