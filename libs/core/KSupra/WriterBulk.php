<?php
namespace MF\core\KSupra;

//use MF\KSupra\Core as Core;
//require 'Core.php';

//class Core {




//    protected function begin($el, $attr = 0){
//        if(!empty($el) && is_string($el)){
//            if(!empty($attr) && is_string($attr))
//                return '<' . $el . ' ' . $attr . '>';
//            else
//                return '<' . $el . '>';
//        } else
//            return "Failed!";
//    }

//    protected function close($el){
//        if(!empty($el) && is_string($el))
//            return '</' . $el . '>';
//        else
//            return "Failed!";
//    }

//    protected function builder($args = ["element" => "div", "attr" => "class=\"test\""], $func = false){
//        //Translate $args?
//        echo "builder got called!";
//        if(!is_array($args))
//            return $this;
//        else {
//            if(!array_key_exists("element", $args))
//                return $this;
//            else {
//                $el = $args["element"];
//                //Beginning tags - open

//                echo $this->begin($el);

//                if(!empty($func) && is_callable($func))
//                    $func(self);

//                //Closing tags
//                echo($this->close($el));
//                //Make chainable
//            }
//        }
//        return $this;

//        //if(!is_array($args))
//        //    return $this;
//        //else {
//        //    if(!array_key_exists("element", $args))
//        //        return $this;
//        //    else {
//        //        $el = $args["element"];
//        //        //Beginning tags - open

//        //            print($this->begin($el));

//        //            if(!empty($func) && is_callable($func))
//        //                $func(self);

//        //            //Closing tags
//        //            printf($this->close($el));
//        //            //Make chainable
//        //        }
//        //    }
//        //return $this;

//        ////Beginning tags - open
//        //print('<div ');
//        //if(!empty($args) && is_string($args))
//        //    print($args);
//        //print(' >\n');

//        //if(!empty($func) && is_callable($func))
//        //    $func($this);

//        ////Closing tags
//        //printf('</div>');
//        ////Make chainable
//        //return $this;
//    }

//}


class WriterBulk {

	//Old Core
	protected function begin($el, $attr = false){
		if(!empty($el) && is_string($el)){
			if(!empty($attr) && is_string($attr))
				echo htmlentities("<" . $el . " " . $attr . ">");
			else
				echo htmlentities("<" . $el . ">");
		} else
			return "Failed!";
	}

	protected function close($el){
		if(!empty($el) && is_string($el))
			echo htmlentities("</" . $el . ">");
		else
			return "Failed!";
	}

	protected function builder($args = ["element" => "div", "attr" => "class=\"test\""], $func = false){
		//Translate $args?



		//echo "builder got called!";
		if(!is_array($args))
			$args = ["element" => "div", "attr" => "class=\"test\""];



			$el = $args["element"];

			//Beginning tags - open
			$res = self::begin($el);

			if(!empty($func))
				$func(new WriterBulk());

			//Closing tags
			$res .= self::close($el);

			//Make chainable
		//}
		//}

		return new WriterBulk();
	}


		//Old Writer
	//public function custom($args = false, $func = false){
	//    self::builder($args, $func);
	//}

	protected function element_resolver($type, $args){
		if(!is_string($type))
			return ["element" => "html"];

		if(!is_array($args))
		    $args = ["element" => "html"];


		 //{
			if(array_key_exists($type, $args)){
				echo "Fail! Cannot overwrite dedicated method!";
				return ["element" => $type];
			} else
				return array_merge(["element" => $type], $args);
		//}
	}

	public function html5($args = false, $func = false){

		//if(array_key_exists("element", $args)){
		//    echo "Fail! Cannot overwrite dedicated method!";
		//    $args = ["element" => "html"];
		//    //return $this;
		//} else
		//    $args = array_merge(["element" => "html"], $args);

		$args = $this->element_resolver("html", $args);

		self::builder($args, $func);
	}

	public function d($args = false, $func = false){
		self::builder($this->element_resolver("div", $args), $func);
	}

	public function h1($args = false, $func = false){
		self::builder($this->element_resolver("h1", $args), $func);
	}

	public function p($args = false, $func = false){
		self::builder($this->element_resolver("p", $args), $func);
	}

	public function a($args = false, $func = false){
		self::builder($this->element_resolver("a", $args), $func);
	}

	public function h2($args = false, $func = false){
		self::builder($this->element_resolver("h2", $args), $func);
	}

	public function b($args = false, $func = false){
		self::builder($this->element_resolver("body", $args), $func);
	}
}