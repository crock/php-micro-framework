<?php

namespace KSupra;

//use \KSupra\

class Addins extends \stdClass {
	//protected
	protected $attributes = array();
	protected $id;
	protected $name;
	protected $value;
	protected $style;

	//functions

	public function feed($arg, $type){
		switch($type){
			case 'attributes':
				if(is_array($arg))
					$this->attributes=$arg;
				else
					$this->attributes[]=$arg;
				break;
			default:
				break;

		}
	}

	public function report(){
		if(!is_array($this->attributes))
			return;
		else {
			$arr = '';
			$attr = $this->attributes;

			foreach($attr as $a){
				if(is_string($a))
					$arr .= (' ' . $a);
			}
			return print($arr);
		}
	}




}