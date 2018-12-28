<?php 

spl_autoload_register(function($classNome){

	$filename = "class" . DIRECTORY_SEPARATOR . $classNome . ".php";

	if (file_exists(($filename))){

		require_once($filename);
	}
});


?>