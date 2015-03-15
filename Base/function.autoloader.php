<?php
/**
 * Author	: Mehul Patel
 * File Name: function.autoloader.php
 */

function __autoload($className)
{
	//Does the class already exist?
	//if(class_exists($className))
	//	return;
		
	//Start at the base library path
	//$path = LIBPATH;
	$path = $_SERVER['DOCUMENT_ROOT'];
	//$path = "..";
	//echo $path;
	
	//Array of subdirectories in the library path to search through.
	//This is hard-coded for SPEED.
	
	$subdirs = array("/real/Base");
	foreach($subdirs as $subdir)
	{
		switch($subdir)
		{
			case "/real/Base":
				$fullpath = $path . $subdir . "/" . "class.{$className}.php";
				break;
			default:
				$fullpath = $path . $subdir . "/" . $className.".php";
		}
		//echo "<br> AutoLoad = {$subdir} = ". $fullpath;
		if(file_exists($fullpath) && !class_exists($className))
		{
			require_once($fullpath);
			return;
		}
	}
}
?>