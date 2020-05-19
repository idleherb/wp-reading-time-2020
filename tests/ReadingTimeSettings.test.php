<?php

namespace idleherb\ReadingTime;

use phpmock\mockery\PHPMockery;
use phpmock\integration\MockDelegateFunctionBuilder;
use idleherb\ReadingTime\ReadingTimeSettings;

class ReadingTimeSettingsTest extends \WP_UnitTestCase {

	public function test_init() {
		$settings = new ReadingTimeSettings();

		$add_action_mock = PHPMockery::mock( __NAMESPACE__, 'add_action' )
			->once()
			->with( 'admin_menu', array( $settings, 'add_settings_menu_item' ) )
			->andReturn( true );

		$settings->init();

		\Mockery::close();
	}

	public function test_add_settings_menu_item() {
		$settings = new ReadingTimeSettings();

		$add_action_mock = PHPMockery::mock( __NAMESPACE__, 'add_options_page' )
			->once()
			->with(
				'Reading Time 2020 Settings',
				'Reading Time 2020',
				'manage_options',
				'wp-reading-time-2020',
				array( $settings, 'add_options_page_cb' )
			)
			->andReturn( true );

		$settings->add_settings_menu_item();

		\Mockery::close();
	}
}
