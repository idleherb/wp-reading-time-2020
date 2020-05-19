<?php

namespace idleherb\ReadingTime;

use phpmock\mockery\PHPMockery;
use idleherb\ReadingTime\ReadingTime;

class ReadingTimeTest extends \WP_UnitTestCase {

	public function test_get_reading_time_with_249_words() {
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

	public function test_get_coffees_with_249_words() {
		$text     = implode( ' ', array_fill( 0, 249, 'foo' ) );
		$actual   = ( new ReadingTime() )->get_coffees( $text );
		$expected = 1;

		$this->assertEquals( $expected, $actual );
	}

	public function test_get_coffees_with_4001_words() {
		$text     = implode( ' ', array_fill( 0, 4001, 'foo' ) );
		$actual   = ( new ReadingTime() )->get_coffees( $text );
		$expected = 4;

		$this->assertEquals( $expected, $actual );
	}

	public function test_init() {
		$reading_time = new ReadingTime();

		$add_action_mock = PHPMockery::mock( __NAMESPACE__, 'add_filter' )
			->once()
			->with( 'the_content', array( $reading_time, 'add_filter_the_content' ) )
			->andReturn( true );

		$reading_time->init();

		\Mockery::close();
	}

	public function test_add_filter_the_content() {
		$content  = implode( ' ', array_fill( 0, 4001, 'foo' ) );
		$actual   = ( new ReadingTime() )->add_filter_the_content( $content );
		$expected = '<p>☕☕☕☕ 17 min</p>' . $content;

		$this->assertEquals( $expected, $actual );
	}
}
