<?php
namespace MicroFramework;
require("./libs/core/Kiput-Supra/Core.php");
require('./libs/core/Kiput-Supra/Writer.php');
//echo("line 5!");
use MicroFramework\KSupra\Writer as Writer;
//require_once("autoloader.php");
$writer = new Writer();
//$res = $writer;
//$writer->
echo $writer->html5(false, function($writer){
	$writer->b(0, function($writer){
		$writer->h1(0, function($writer){
			print("Hello! I'm an H1!");
			//$writer = new Writer();
			//Writer(-)
			$writer->p(0, function($writer){
				print("Hello! I'm an H1!");
			});
		});
	});
});
