<?php

namespace KSupra\Shortcuts\Shortcut;

class Shortcut {
	//Adds shortcut values to a master array
	//First param is shortcut being added, requires [ 'name' => []] format
	//Second param should be a passed reference to the master collection(array) of shortcuts
	public static function Add($arr, $master){
		if(!is_array($arr) || !is_array($master))
			return;
		else {
			if(!is_array($arr[0]))
				return;
			else {
				$master[]=$arr;
			}
		}
	}
}