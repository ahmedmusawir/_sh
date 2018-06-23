<?php 

/**
 *
 * Plugin Name: MPF Starter Widget 
 * Plugin URI:	https://htmlfivedev.com 
 * Description: It's a Widget Starter Kit. Change this now!
 * Version: 	1.0
 * Author URI: 	https://www.linkedin.com/in/ahmedmusawir
 * License: 	GPL-2.0+ 
 *
 */

//If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die("Cannot Access Directly");
}
// define( "PLUGIN_DIR", plugin_dir_path( __FILE__ ) );

/**
 *
 * Replace the following
 *
 */
//[Replace_Me]
//[replace-me]

require_once( plugin_dir_path( __FILE__ ) . 'class-enqueue.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-[replace-me].php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-[replace-me]-body.php' );


	$setup_styles = new [Replace_Me]_Widget_Enqueue();
	$setup_styles->initialize();

	$recent_post = new [Replace_Me]_Widget();

// Activation
require_once plugin_dir_path( __FILE__ ) . 'inc/Base/class-activate.php';
register_activation_hook( __FILE__, array( '[Replace_Me]_Activate', 'activate' ) );

// Activation
require_once plugin_dir_path( __FILE__ ) . 'inc/Base/class-deactivate.php';
register_deactivation_hook( __FILE__, array( '[Replace_Me]_Deactivate', 'deactivate' ) );