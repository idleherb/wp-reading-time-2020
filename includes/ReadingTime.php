<?php

namespace idleherb\ReadingTime;

class ReadingTime {

	private static $speed = 250;

	public static function get_reading_time( $text ) {
		$words = explode( ' ', $text );
		return (int) ceil( count( $words ) / self::$speed );
	}
}
