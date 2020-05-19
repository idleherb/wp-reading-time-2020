<?php

namespace idleherb\ReadingTime;

class ReadingTimeSettings {

	public function init() {
		add_action( 'admin_menu', array( $this, 'add_settings_menu_item' ) );
	}

	public function add_settings_menu_item() {
		assert( true );
	}
}
