<?php
/**
 * Plugin Name:     Wp Reading Time 2020
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     wp-reading-time-2020
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wp_Reading_Time_2020
 */

defined( 'ABSPATH' ) || exit;

use idleherb\ReadingTime\ReadingTime;

// Your code starts here.
require_once __DIR__ . '/vendor/autoload.php';

new ReadingTime();
