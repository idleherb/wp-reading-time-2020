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

	public function test_init_settings() {
		$settings = new ReadingTimeSettings();

		PHPMockery::mock( __NAMESPACE__, 'register_setting' )
			->once()
			->with(
				'reading_time_settings_group',
				'reading_time_settings',
				array( $settings, 'sanitize' )
			)
			->andReturn( true );

		PHPMockery::mock( __NAMESPACE__, 'add_settings_section' )
			->once()
			->with(
				'reading_time_settings_section',
				null,
				null,
				'reading_time_settings_page'
			)
			->andReturn( true );

		PHPMockery::mock( __NAMESPACE__, 'add_settings_field' )
			->once()
			->with(
				'reading_time_setting_wpm',
				'Words per minute (WPM)',
				array( $settings, 'render_setting_wpm' ),
				'reading_time_settings_page',
				'reading_time_settings_section'
			)
			->andReturn( true );

		$settings->init_settings();

		\Mockery::close();
	}

	public function test_add_menu_item() {
		$settings = new ReadingTimeSettings();

		PHPMockery::mock( __NAMESPACE__, 'add_options_page' )
			->once()
			->with(
				'Reading Time Plugin Settings',
				'Reading Time Plugin',
				'manage_options',
				'reading_time_plugin',
				array( $settings, 'render_settings_page' )
			)
			->andReturn( true );

		$settings->add_menu_item();

		\Mockery::close();
	}

	public function test_sanitize_wpm() {
		$settings = new ReadingTimeSettings();

		$actual   = $settings->sanitize( array( 'reading_time_setting_wpm' => '' ) );
		$expected = array( 'reading_time_setting_wpm' => 1 );
		$this->assertEquals( $expected, $actual );

		$actual   = $settings->sanitize( array( 'reading_time_setting_wpm' => '0' ) );
		$expected = array( 'reading_time_setting_wpm' => 1 );
		$this->assertEquals( $expected, $actual );

		$actual   = $settings->sanitize( array( 'reading_time_setting_wpm' => '249' ) );
		$expected = array( 'reading_time_setting_wpm' => 249 );
		$this->assertEquals( $expected, $actual );

		$actual   = $settings->sanitize( array( 'reading_time_setting_wpm' => '-5' ) );
		$expected = array( 'reading_time_setting_wpm' => 5 );
		$this->assertEquals( $expected, $actual );

		$actual   = $settings->sanitize( array( 'reading_time_setting_wpm' => '77 foo' ) );
		$expected = array( 'reading_time_setting_wpm' => 77 );
		$this->assertEquals( $expected, $actual );

		$actual   = $settings->sanitize( array( 'reading_time_setting_wpm' => 'bar 77 foo 5 spam' ) );
		$expected = array( 'reading_time_setting_wpm' => 1 );
		$this->assertEquals( $expected, $actual );

		$actual   = $settings->sanitize( array( 'reading_time_setting_wpm' => '8.6' ) );
		$expected = array( 'reading_time_setting_wpm' => 8 );
		$this->assertEquals( $expected, $actual );
	}
}
