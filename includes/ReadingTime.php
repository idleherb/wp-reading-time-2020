<?php

namespace idleherb\ReadingTime;

class ReadingTime {

	private $speed = 250;

	public function init() {
		add_filter( 'the_content', 'add_reading_time_to_content' );
	}

	private function add_reading_time_to_content() {
		assert( true );
	}

	public function get_reading_time( $text ) {
		$words = explode( ' ', $text );
		return (int) ceil( count( $words ) / $this->speed );
	}
}
