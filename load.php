<?php



if(file_exists(ROOT_PATH . "config.php")){
	if(file_exists(ROOT_PATH . "settings.php")){
		if(file_exists(ROOT_PATH . "roads.php")){

			require_once(ROOT_PATH . "config.php");
			require_once(ROOT_PATH . "settings.php");
			require_once(ROOT_PATH . "roads.php");

		} else { echo "FATAL ERROR: 'roads.php' not find"; }
	} else { echo "FATAL ERROR: 'settings.php' not find"; }
} else { echo "FATAL ERROR: 'config.php' not find"; }




?>