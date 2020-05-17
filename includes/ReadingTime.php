<?php

namespace idleherb\ReadingTime;

class ReadingTime {

	private $coffee_time = 5;
	private $emoji       = '"\u2615"';
	private $speed       = 250;

	public function init() {
		add_filter( 'the_content', array( $this, 'add_filter_the_content' ) );
	}

	public function add_filter_the_content( $content ) {
		$reading_time      = $this->get_reading_time( $content );
		$num_coffees       = $this->get_coffees( $reading_time );
		$reading_time_text = '<p class="wp-exclude-emoji">' . str_repeat( json_decode( $this->emoji ), $num_coffees ) . ' ' . $reading_time . ' min</p>';
		return $reading_time_text . $content;
	}

	public function get_coffees( $text ) {
		$reading_time = $this->get_reading_time( $text );
		return max( 1, ceil( $reading_time / $this->coffee_time ) );
	}

	public function get_reading_time( $text ) {
		return max( 1, ceil( str_word_count( $text ) / $this->speed ) );
	}
}
