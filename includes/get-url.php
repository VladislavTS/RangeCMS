<?php



global $get_url;
global $get_parse_url;
global $get_page;
global $get_page_query;

$get_url = $_SERVER["REQUEST_URI"];
$get_parse_url = parse_url($get_url);
$get_page = parse_url($get_url, PHP_URL_PATH);
$get_page_query = parse_url($get_url, PHP_URL_QUERY);



?>