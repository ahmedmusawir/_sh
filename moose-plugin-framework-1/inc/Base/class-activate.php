<?php 

/**
* PLUGIN ACTIVATION CLASS
*/
class [Replace]Activate
{
	function __construct()
	{
		# code...
	}

	public static function activate() {

		flush_rewrite_rules();
	}
}
