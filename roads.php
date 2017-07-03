<?php



/* PAGE's (open) */

if($get_page == "/"){
	require_once(APP_PAGES_PATH . "home.php");
}

/* PAGE's (close) */



/* SYSTEM (open) */

else {
	require_once(APP_PAGES_PATH . "404.php");
}

/* SYSTEM (close) */



?>