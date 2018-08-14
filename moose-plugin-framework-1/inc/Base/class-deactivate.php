<?php 

/**
* PLUGIN DEACTIVATION CLASS
*/
class [Replace]_Deactivate
{
	function __construct()
	{
		# code...
	}

	public static function deactivate() {

		flush_rewrite_rules();

	}

}
