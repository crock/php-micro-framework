<?php

namespace MicroFramework\KSupra;

//use \KSupra\

//use KSupra\

class Core {




	protected function begin($el, $attr = 0){
		if(!empty($el) && is_string($el)){
			if(!empty($attr) && is_string($attr))
				return ('<' . $el . ' ' . $attr . '>');
			else
				return ('<' . $el . '>');
		} else
			return "Failed!";
	}

	protected function close($el){
		if(!empty($el) && is_string($el))
			return ('</' . $el . '>');
		else
			return "Failed!";
	}

	protected function builder($args = ["element" => "div", "attr" => "class=\"test\""], $func = false){
		//Translate $args?

		if(!is_array($args))
			return $this;
		else {
			if(!array_key_exists("element", $args))
				return $this;
			else {
				$el = $args["element"];
				//Beginning tags - open

				echo($this->begin($el));

				if(!empty($func) && is_callable($func))
					$func(self);

				//Closing tags
				echo($this->close($el));
				//Make chainable
			}
		}
		return $this;

		//if(!is_array($args))
		//    return $this;
		//else {
		//    if(!array_key_exists("element", $args))
		//        return $this;
		//    else {
		//        $el = $args["element"];
		//        //Beginning tags - open

		//            print($this->begin($el));

		//            if(!empty($func) && is_callable($func))
		//                $func(self);

		//            //Closing tags
		//            printf($this->close($el));
		//            //Make chainable
		//        }
		//    }
		//return $this;

		////Beginning tags - open
		//print('<div ');
		//if(!empty($args) && is_string($args))
		//    print($args);
		//print(' >\n');

		//if(!empty($func) && is_callable($func))
		//    $func($this);

		////Closing tags
		//printf('</div>');
		////Make chainable
		//return $this;
	}

}