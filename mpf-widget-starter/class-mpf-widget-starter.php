<?php 
/**
 * Widget Main Class
 */
class [Replace_Me]_Widget
{
	
	function __construct()
	{
		add_action( 'widgets_init', array( $this, 'mpf_recent_post_widget' ) );
	}

	public function mpf_recent_post_widget() {
		
		register_widget( '[Replace_Me]_Widget_Body' );
	}
}