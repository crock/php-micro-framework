<?php

namespace MF\core\KSupra;

//use MF\KSupra\Core as Core;
require 'Core.php';


class Writer extends Core {

	//use KSupra\



	//protecteds


	//protected $core = new Core();

	public function custom($args = false, $func = false){
		parent::builder($args, $func);
	}

	protected function element_resolver($type, $args){
		if(!is_string($type))
			return $this;
		elseif(!is_array($args))
			return $this;
		else {
			if(array_key_exists($type, $args)){
				echo "Fail! Cannot overwrite dedicated method!";
				return ["element" => $type];
				//return $this;
			} else
				return array_merge(["element" => $type], $args);
		}
	}

	//funcs
	public function html5($args = false, $func = false){
		//if(array_key_exists("element", $args)){
		//    echo "Fail! Cannot overwrite dedicated method!";
		//    $args = ["element" => "html"];
		//    //return $this;
		//} else
		//    $args = array_merge(["element" => "html"], $args);
		$args = $this->element_resolver("html", $args);

		parent::builder($args, $func);
	}

	public function d($args = false, $func = false){
		parent::builder($this->element_resolver("div", $args), $func);
	}

	public function h1($args = false, $func = false){
		parent::builder($this->element_resolver("h1", $args), $func);
	}

	public function p($args = false, $func = false){
		parent::builder($this->element_resolver("p", $args), $func);
	}

	public function a($args = false, $func = false){
		parent::builder($this->element_resolver("a", $args), $func);
	}

	public function h2($args = false, $func = false){
		parent::builder($this->element_resolver("h2", $args), $func);
	}

	public function b($args = false, $func = false){
		parent::builder($this->element_resolver("body", $args), $func);
	}



}