<?php

namespace idleherb\ReadingTime;

class ReadingTimeSettings {

	public function init() {
		add_action( 'admin_init', array( $this, 'init_settings' ) );
		add_action( 'admin_menu', array( $this, 'add_menu_item' ) );
	}

	public function init_settings() {
		register_setting(
			'reading_time_settings_group',
			'reading_time_settings',
			array( $this, 'sanitize' )
		);
		add_settings_section(
			'reading_time_settings_section',
			null,
			null,
			'reading_time_settings_page'
		);
		add_settings_field(
			'reading_time_setting_wpm',
			'Words per minute (WPM)',
			array( $this, 'render_setting_wpm' ),
			'reading_time_settings_page',
			'reading_time_settings_section'
		);
	}

	public function add_menu_item() {
		add_options_page(
			'Reading Time Plugin Settings',
			'Reading Time Plugin',
			'manage_options',
			'reading_time_plugin',
			array( $this, 'render_settings_page' )
		);
	}

	public function sanitize( $input ) {
		$new_input = array();
		if ( isset( $input['reading_time_setting_wpm'] ) ) {
			$new_input['reading_time_setting_wpm'] = max( 1, absint( $input['reading_time_setting_wpm'] ) );
		}

		return $new_input;
	}

	/**
	 * @codeCoverageIgnore
	 */
	public function render_settings_page() {
		include 'ReadingTimeSettings.view.php';
	}

	/**
	 * @codeCoverageIgnore
	 */
	public function render_setting_wpm() {
		include 'ReadingTimeSettingWpm.view.php';
	}
}
