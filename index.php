<?php
	require 'config/config.php';
	spl_autoload_register(function ($class){
		if(file_exists('libs/'.$class.'.php')){
			require_once 'libs/'.$class.'.php';
		}
	});

 
	$app = new App();
 	
?>