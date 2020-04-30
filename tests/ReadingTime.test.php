<?php

use idleherb\ReadingTime\ReadingTime;

class ReadingTimeTest extends WP_UnitTestCase {

	private $reading_time;

	public function setUp() {
		parent::setUp();
		$this->reading_time = new ReadingTime();
	}

	public function test_get_reading_time_with_200_words() {
		$text     = implode( ' ', array_fill( 0, 249, 'foo' ) );
		$actual   = $this->reading_time::get_reading_time( $text );
		$expected = 1;
		$this->assertEquals( $expected, $actual );
	}

	public function test_get_reading_time_with_4001_words() {
		$text     = implode( ' ', array_fill( 0, 4001, 'foo' ) );
		$actual   = $this->reading_time::get_reading_time( $text );
		$expected = 17;
		$this->assertEquals( $expected, $actual );
	}
}
