<?php
/**
 * PHPUnit bootstrap file
 *
 * @package Wp_Reading_Time_2020
 */

$wp_reading_time_2020_tests_dir = getenv( 'WP_TESTS_DIR' );

if ( ! $wp_reading_time_2020_tests_dir ) {
	$wp_reading_time_2020_tests_dir = rtrim( sys_get_temp_dir(), '/\\' ) . '/wordpress-tests-lib';
}

if ( ! file_exists( $wp_reading_time_2020_tests_dir . '/includes/functions.php' ) ) {
	echo "Could not find $wp_reading_time_2020_tests_dir/includes/functions.php, have you run bin/install-wp-tests.sh ?" . PHP_EOL; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	exit( 1 );
}

// Give access to tests_add_filter() function.
require_once $wp_reading_time_2020_tests_dir . '/includes/functions.php';

/**
 * Manually load the plugin being tested.
 */
function wp_reading_time_2020_manually_load_plugin() {
	require dirname( dirname( __FILE__ ) ) . '/wp-reading-time-2020.php';
}
tests_add_filter( 'muplugins_loaded', 'wp_reading_time_2020_manually_load_plugin' );

// Start up the WP testing environment.
require $wp_reading_time_2020_tests_dir . '/includes/bootstrap.php';
