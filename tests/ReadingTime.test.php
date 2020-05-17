<?php

use idleherb\ReadingTime\ReadingTime;

class ReadingTimeTest extends WP_UnitTestCase {

	public function test_get_reading_time_with_200_words() {
		$text     = implode( ' ', array_fill( 0, 249, 'foo' ) );
		$actual   = ( new ReadingTime() )->get_reading_time( $text );
		$expected = 1;
		$this->assertEquals( $expected, $actual );
	}

	public function test_get_reading_time_with_4001_words() {
		$text     = implode( ' ', array_fill( 0, 4001, 'foo' ) );
		$actual   = ( new ReadingTime() )->get_reading_time( $text );
		$expected = 17;
		$this->assertEquals( $expected, $actual );
	}

	public function test_get_coffees_with_3_mins() {
		$reading_time = 3;
		$actual       = ( new ReadingTime() )->get_coffees( $reading_time );
		$expected     = '☕';

		$this->assertEquals( $expected, $actual );
	}

	public function test_get_coffees_with_17_mins() {
		$reading_time = 17;
		$actual       = ( new ReadingTime() )->get_coffees( $reading_time );
		$expected     = '☕☕☕☕';

		$this->assertEquals( $expected, $actual );
	}

	public function test_init() {
		$reading_time = new ReadingTime();
		$reading_time->init();
		$this->assertNotEquals( false, has_filter( 'the_content', array( $reading_time, 'add_filter_the_content' ) ) );
	}

	public function test_add_filter_the_content() {
		$content  = 'FOO BAR';
		$actual   = ( new ReadingTime() )->add_filter_the_content( $content );
		$expected = '<p>1 min</p>' . $content;
		$this->assertEquals( $expected, $actual );
	}
}
