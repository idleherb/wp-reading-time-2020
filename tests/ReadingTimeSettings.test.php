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
}
