<?php
<<<<<<< HEAD

require_once __DIR__ . '/libs/Autoloader.php';
=======
//namespace MicroFramework;
//require("./libs/core/Kiput-Supra/Core.php");
require('./libs/core/Kiput-Supra/WriterBulk.php');
//echo("line 5!");
//use MicroFramework\KSupra\Writer as Writer;
//require_once("autoloader.php");
$writer = new WriterBulk();
//$res = $writer;
//$writer->

echo "Page is working!";

$writer->html5(false, function($writer){
	echo "<br>";
	$writer->b(false, function($writer){
		echo "<br>";
		$writer->h1(false, function($writer){
			echo htmlentities("<br>");
			echo("Hello! I'm an H1!");
			$writer->p(false, function($writer){
				echo htmlentities("<br>");
				echo("Hello! I'm an H1!");
			});
		});
	});
});

>>>>>>> b6fee2fae73d1652d0078c1acd2c785cae5a9e62
