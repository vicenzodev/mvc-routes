<?php
	$autoload = function($class){
		if(file_exists($class.".php"))
			include($class.".php");
	};

	spl_autoload_register($autoload);

	$app = new Application();
?>