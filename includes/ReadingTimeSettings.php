<?php

namespace idleherb\ReadingTime;

class ReadingTimeSettings {

	public function init() {
		add_action( 'admin_menu', array( $this, 'add_settings_menu_item' ) );
	}

	public function add_settings_menu_item() {
		add_options_page(
			'Reading Time 2020 Settings',
			'Reading Time 2020',
			'manage_options',
			'wp-reading-time-2020',
			array( $this, 'add_options_page_cb' )
		);
	}

	public function add_options_page_cb() {
		assert( true );
	}
}
