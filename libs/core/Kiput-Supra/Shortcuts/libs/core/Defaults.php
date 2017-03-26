<?php

namespace KSupra\Shortcuts\libs\core\Defaults;

use KSupra\Shortcuts\Shortcut;

if(!is_array($master))
	return;
else
	function($master){
	\Shortcut::Add([
				    "elements" => [
				        "h" => "<head ",
				        "t" => "<title ",
				        "b" => "<body ",
				        "d" => "<div ",
				        "h1" => "<h1 ",
				        "h2" => "<h2 ",
				        "h3" => "<h3 ",
				        "h4" => "<h4 ",
				        "h5" => "<h5 ",
				        "h6" => "<h6 ",
				        "p" => "<p ",
				        "u" => "<ul ",
				        "l" => "<li ",
				        "o" => "<ol ",
				        "a" => "<a ",
				        "ta" => "<table ",
				        "r" => "<tr ",
				        "c" => "<td ",
				        "im" => "<img ",
				        "f" => "<form ",
				        "i" => "<input ",
				        "s" => "<input type=\"submit\" ",
				    ] //more to come :)
				], $master);
}