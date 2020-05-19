<?php

namespace idleherb\ReadingTime;

use phpmock\mockery\PHPMockery;
use idleherb\ReadingTime\ReadingTimeSettings;

class ReadingTimeSettingsTest extends \WP_UnitTestCase {

	public function test_init() {
		$settings = new ReadingTimeSettings();

		$add_action_mock = PHPMockery::mock( __NAMESPACE__, 'add_action' );
		$add_action_mock
			->once()
			->with( 'admin_init', array( $settings, 'init_settings' ) )
			->andReturn( true );
		$add_action_mock
			->once()
			->with( 'admin_menu', array( $settings, 'add_menu_item' ) )
			->andReturn( true );

		$settings->init();

		\Mockery::close();
	}

	public function test_add_menu_item() {
		$settings = new ReadingTimeSettings();

		$add_action_mock = PHPMockery::mock( __NAMESPACE__, 'add_options_page' )
			->once()
			->with(
				'Reading Time Plugin Settings',
				'Reading Time Plugin',
				'manage_options',
				'reading_time_settings_menu_item',
				array( $settings, 'render_settings_page' )
			)
			->andReturn( true );

		$settings->add_menu_item();

		\Mockery::close();
	}
}
