<?php defined( 'ABSPATH' ) || exit; ?>

<div class="wrap">
	<h1>Reading Time Settings</h1>
	<form action="options.php" method="post">
		<?php settings_fields( 'reading_time_settings_group' ); ?>
		<?php do_settings_sections( 'reading_time_settings_page' ); ?>
		<?php submit_button(); ?>
	</form>
</div>
