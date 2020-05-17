<?php

namespace idleherb\ReadingTime;

class ReadingTime {

	private $coffee_time = 5;
	private $emoji       = '☕';
	private $speed       = 250;

	public function init() {
		add_filter( 'the_content', array( $this, 'add_filter_the_content' ) );
	}

	public function add_filter_the_content( $content ) {
		$reading_time      = $this->get_reading_time( $content );
		$reading_time_text = '<p>' . $this->get_coffees( $reading_time ) . ' ' . $reading_time . ' min</p>';
		return $reading_time_text . $content;
	}

	public function get_coffees( $reading_time ) {
		$num_coffees = max( 1, ceil( $reading_time / $this->coffee_time ) );
		return str_repeat( $this->emoji, $num_coffees );
	}

	public function get_reading_time( $text ) {
		$words = explode( ' ', $text );
		return (int) ceil( count( $words ) / $this->speed );
	}
}
