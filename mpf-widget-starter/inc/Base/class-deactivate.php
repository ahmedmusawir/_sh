<?php 

/**
* PLUGIN DEACTIVATION CLASS
*/
class [Replace_Me]_Deactivate
{
	function __construct()
	{
		# code...
	}

	public static function deactivate() {

		flush_rewrite_rules();

	}

}
