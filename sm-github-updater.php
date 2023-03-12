<?php
	/*
		Plugin Name: SM GitHub Updater
		Plugin URI:  https://github.com/adam-laita/sm-github-updater
		Description: Test plugin for GitHub updating inspired by https://github.com/rayman813/smashing-updater-plugin
		Version:     1.0.2
		Author:      Adam Laita
		Author URI:  https://www.laita.cz/
		License:     GPL3
		License URI: https://www.gnu.org/licenses/gpl-3.0.html
		Text Domain: smghu
	*/

	if( !class_exists( 'Smashing_Updater' ) ){
		include_once( plugin_dir_path( __FILE__ ) . 'includes/class-sm-github-updater.php' );
	}
	
	$updater = new Smashing_Updater( __FILE__ );
	$updater->set_username( 'adam-laita' );
	$updater->set_repository( 'sm-github-updater' );
	// $updater->authorize( 'abcdefghijk1234567890' );
	$updater->initialize();
