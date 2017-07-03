<?php



if(!file_exists(ROOT_PATH . ".htaccess")){
	$htaccessFile = fopen(ROOT_PATH . ".htaccess", "w+");

	fwrite($htaccessFile, "

AddDefaultCharset UTF-8
RewriteEngine On

RewriteRule .* index.php

	"); // write to .htaccess

	fclose($htaccessFile);
} // if. !file_exists(.htaccess)



?>