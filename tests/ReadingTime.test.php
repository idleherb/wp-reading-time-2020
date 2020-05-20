<?php

namespace idleherb\ReadingTime;

use phpmock\mockery\PHPMockery;
use idleherb\ReadingTime\ReadingTime;

class ReadingTimeTest extends \WP_UnitTestCase {

	public static function setUpBeforeClass() {
		PHPMockery::mock( __NAMESPACE__, 'get_option' )
			->with( 'reading_time_settings', array( 'reading_time_setting_wpm' => '250' ) )
			->andReturn( array( 'reading_time_setting_wpm' => 250 ) );
	}

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

		PHPMockery::mock( __NAMESPACE__, 'add_filter' )
			->once()
			->with( 'the_content', array( $reading_time, 'add_filter_the_content' ) )
			->andReturn( true );

		$reading_time->init();

		\Mockery::close();
	}

	public function test_init_should_load_wpm() {
		PHPMockery::mock( __NAMESPACE__, 'add_filter' )
			->andReturn( true );
		PHPMockery::mock( __NAMESPACE__, 'get_option' )
			->with( 'reading_time_settings', array( 'reading_time_setting_wpm' => '250' ) )
			->andReturn( array( 'reading_time_setting_wpm' => 11 ) );

		$reading_time = new ReadingTime();
		$reading_time->init();

		$text     = implode( ' ', array_fill( 0, 11, 'foo' ) );
		$actual   = $reading_time->get_reading_time( $text );
		$expected = 1;
		$this->assertEquals( $expected, $actual );

		$text     = implode( ' ', array_fill( 0, 12, 'foo' ) );
		$actual   = $reading_time->get_reading_time( $text );
		$expected = 2;
		$this->assertEquals( $expected, $actual );

		\Mockery::close();
	}

	public function test_add_filter_the_content() {
		$content  = implode( ' ', array_fill( 0, 4001, 'foo' ) );
		$actual   = ( new ReadingTime() )->add_filter_the_content( $content );
		$expected = '<p>☕☕☕☕ 17 min</p>' . $content;

		$this->assertEquals( $expected, $actual );
	}
}
