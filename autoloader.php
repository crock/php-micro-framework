<?php
namespace MF;

// Your custom class dir
define('CLASS_DIR', 'libs/core/');

define('BASEDIR', __DIR__);

class Autoloader {

	public function __construct() {

		// Add your class dir to include path
		set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);

		// You can use this trick to make autoloader look for commonly used filenames
		spl_autoload_extensions('.php');

		// Use default autoload implementation
		spl_autoload_register( function($className) {
			echo 'Trying to load '. $className .' via '. __METHOD__  ."()\n";
        	include $className . '.php';
		});
	}
}

/*
class Autoloader {

    public function __construct() {
        set_include_path("core/");
        spl_autoload_extensions('.php');
        spl_autoload_register(array($this, 'loader'));
    }

    private function loader($className) {
        echo 'Trying to load ', $className, ' via ', __METHOD__, "()\n";
        include $className . '.php';
    }
}
*/