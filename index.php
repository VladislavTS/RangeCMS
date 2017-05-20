<?php



/* PATH's (open) */

if(!defined("ROOT_PATH"))
	define("ROOT_PATH", dirname(__FILE__) . "/");

if(!defined("APP_PATH"))
	define("APP_PATH", dirname(__FILE__) . "/app");

if(!defined("APP_BLOCKS_PATH"))
	define("APP_BLOCKS_PATH", dirname(__FILE__) . "/app/blocks/");

if(!defined("APP_PAGES_PATH"))
	define("APP_PAGES_PATH", dirname(__FILE__) . "/app/pages/");

/* PATH's (close) */



// require: load.php
if(file_exists(ROOT_PATH . "load.php")){
	require_once(ROOT_PATH . "load.php");
} else { echo "Load file not exist"; }



?>