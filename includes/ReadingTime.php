<?php

namespace idleherb\ReadingTime;

class ReadingTime {

	private $speed = 250;

	public function init() {
		add_filter( 'the_content', 'add_filter_the_content' );
	}

	public function add_filter_the_content( $content ) {
		$reading_time_text = '<p>' . $this->get_reading_time( $content ) . ' min</p>';
		return $reading_time_text . $content;
	}

	public function get_reading_time( $text ) {
		$words = explode( ' ', $text );
		return (int) ceil( count( $words ) / $this->speed );
	}
}
