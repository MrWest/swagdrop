<?php 
$DB_HOST = 'your-hosting';
$DB_USER = 'your-user';
$DB_PASS = 'your-pass';
$DB_NAME = 'your-database';
define('DB_USERNAME', 'your-user');
define('DB_PASSWORD', 'your-pass');
define('DB_HOST', 'your-hosting');
define('DB_NAME', 'your-database');



$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

header("Access-Control-Allow-Origin: *");
header('Cache-Control: s-maxage=604800, stale-while-revalidate', false);

?>
