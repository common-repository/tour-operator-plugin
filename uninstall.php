<?php
	// For old versions
	if(!defined('WP_UNINSTALL_PLUGIN'))
		exit();
	
	// Delete options
	delete_option('tourcms_wp_marketplace');
	delete_option('tourcms_wp_channel');
	delete_option('tourcms_wp_apikey');
?>