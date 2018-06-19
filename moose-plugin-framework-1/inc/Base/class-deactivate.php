<?php 

/**
* PLUGIN DEACTIVATION CLASS
*/
class [Replace]Deactivate
{
	function __construct()
	{
		# code...
	}

	public static function deactivate() {

		flush_rewrite_rules();

	}

}
