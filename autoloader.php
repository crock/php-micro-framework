<?php
namespace MicroFramework;



//// Your custom class dir
//define('CLASS_DIR', 'libs/core/');

//define('BASEDIR', "./");

//// Add your class dir to include path
//set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);

//// You can use this trick to make autoloader look for commonly used filenames
//spl_autoload_extensions('.php');

//// Use default autoload implementation
//spl_autoload_register( function($class_name) {
//    include $class_name . '.php';
//});

class Autoloader {
	public static function load($className){
		require '../' . __NAMESPACE__ . $className . '.inc.php';
	}


}

spl_autoload_register(__NAMESPACE__ . "\\Autoloader::load");