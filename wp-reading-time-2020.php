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
use idleherb\ReadingTime\ReadingTimeSettings;

// Your code starts here.
require_once __DIR__ . '/vendor/autoload.php';

function _load_plugin_textdomain() {
	load_plugin_textdomain( 'wp-reading-time-2020', false, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', '_load_plugin_textdomain' );

// Required for php-mock-mockery mocks
if ( getenv( 'APP_ENV' ) !== 'unittest' ) {
	( new ReadingTime() )->init();
	( new ReadingTimeSettings() )->init();
}
