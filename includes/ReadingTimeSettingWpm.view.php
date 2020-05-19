<?php defined( 'ABSPATH' ) || exit; ?>

<input
	type='number'
	name='reading_time_settings[reading_time_setting_wpm]'
	value='<?php echo esc_attr( get_option( 'reading_time_settings', array( 'reading_time_setting_wpm' => '250' ) )['reading_time_setting_wpm'] ); ?>'
>
