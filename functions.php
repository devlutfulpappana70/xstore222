<?php

defined( 'ABSPATH' ) || exit( 'Direct script access denied.' );

update_option( 'etheme_is_activated', true );
update_option( 'envato_purchase_code_15780546', 'activated' );
update_option( 'etheme_activated_data', [
	'api_key'  => 'activated',
	'theme'    => '_et_',
	'purchase' => 'activated',
	'item'     => [ 'token' => 'activated' ]
] );

/*
* Load theme setup
* ******************************************************************* */
require_once( get_template_directory() . '/theme/theme-setup.php' );

if ( !apply_filters('xstore_theme_amp', false) ) {

	/*
	* Load framework
	* ******************************************************************* */
	require_once( get_template_directory() . '/framework/init.php' );

	/*
	* Load theme
	* ******************************************************************* */
	require_once( get_template_directory() . '/theme/init.php' );

}