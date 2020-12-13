<?php
/**
 * The main function file for theme
 *
 * @package wp-starter-theme
 */

//Include autoloader
require_once __DIR__ . '/includes/class-autoloader.php';

//Theme Boot
$theme = new \Theme\Theme();
$theme->boot();