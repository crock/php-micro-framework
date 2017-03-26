<?php

namespace MicroFramework\KSupra\Shortcuts\Loader;

class Loader {

	protected $rootPath = "./libs";

	protected $burrowLimit = 3;

	protected $masterArray = $GLOBALS['shortcuts'];



	//Loads all Shortcuts for use by Kiput-Supra
	//May pass optional function parameter to configure settings
	public static function Load($init = false){


		if(!empty($init))
			if(is_callable($init))
				$init;


		echo self::$rootPath;

	}

}