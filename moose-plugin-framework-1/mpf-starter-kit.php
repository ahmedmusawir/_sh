<?php 

/**
 *
 * Plugin Name: MPF [Replace]
 * Plugin URI:	https://htmlfivedev.com 
 * Description: Display a short notice above the post content.
 * Version: 	2.0
 * Author URI: 	https://www.linkedin.com/in/ahmedmusawir
 * License: 	GPL-2.0+ 
 *
 */

/**
 *
 * Replace the following from File Level 
 [REPLACE]
 [Replace]
 [replace]
 *
 */


//If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die("Cannot Access Directly");
}

define( "[REPLACE]_PLUGIN_DIR", plugin_dir_path( __FILE__ ) );


require_once( plugin_dir_path( __FILE__ ) . 'class-[replace].php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-enqueue.php' );


// INSTANTIATE CLASSES

	//Enqueue Styles & Scripts
	$setup_styles = new [Replace]_Enqueue();
	$setup_styles->initialize();


	//Calling Plugin Main Class 
	$related_post = new [Replace]();

// Activation
require_once plugin_dir_path( __FILE__ ) . 'inc/Base/class-activate.php';
register_activation_hook( __FILE__, array( '[Replace]_Activate', 'activate' ) );

// Activation
require_once plugin_dir_path( __FILE__ ) . 'inc/Base/class-deactivate.php';
register_deactivation_hook( __FILE__, array( '[Replace]_Deactivate', 'deactivate' ) );