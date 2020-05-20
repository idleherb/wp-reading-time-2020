<?php

namespace idleherb\ReadingTime;

class ReadingTime {

	private $coffee_time = 5;
	private $emoji       = '☕';
	private $speed;

	public function __construct() {
		$this->speed = get_option(
			'reading_time_settings',
			array( 'reading_time_setting_wpm' => '250' )
		)['reading_time_setting_wpm'];
	}

	public function init() {
		add_filter( 'the_content', array( $this, 'add_filter_the_content' ) );
	}

	public function add_filter_the_content( $content ) {
		$reading_time      = $this->get_reading_time( $content );
		$reading_time_copy = $reading_time . ' min';
		$num_coffees       = $this->get_coffees( $content );
		$coffees_copy      = str_repeat( $this->emoji, $num_coffees );
		$reading_time_html = $this->load_html_fragment(
			'ReadingTime.view.php',
			array(
				'reading_time' => $reading_time_copy,
				'coffees'      => $coffees_copy,
			)
		);

		return $reading_time_html . $content;
	}

	private function load_html_fragment( $view, $vars ) {
		extract( $vars );
		ob_start();
		include $view;
		$html_fragment = ob_get_contents() ?: '';
		ob_end_clean();

		return trim( $html_fragment );
	}

	public function get_coffees( $text ) {
		$reading_time = $this->get_reading_time( $text );
		return max( 1, ceil( $reading_time / $this->coffee_time ) );
	}

	public function get_reading_time( $text ) {
		return max( 1, ceil( str_word_count( $text ) / $this->speed ) );
	}
}
