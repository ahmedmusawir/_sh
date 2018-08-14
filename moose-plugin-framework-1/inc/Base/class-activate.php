<?php 

/**
* PLUGIN ACTIVATION CLASS
*/
class [Replace]_Activate
{
	function __construct()
	{
		# code...
	}

	public static function activate() {

		flush_rewrite_rules();
	}
}
