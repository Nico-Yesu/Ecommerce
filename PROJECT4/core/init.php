<?php
error_reporting(0);
$db = mysqli_connect('127.0.0.1','root','', ecomdb);
if (@mysqli_connect_errno()) {
	# code...
	echo "Database Connection failed with following errors - Nico" . mysqli_connect_error();
	die();
}

/*
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/test/PROJECT4/config.php';
require_once BASEURL.'helpers/helpers.php'


$cart_id = '';
if (isset($_COOKIE[CART_COOKIE])) {
	# code...
	$cart_id = sanitize($_COOKIE[CART_COOKIE])
}

*/

define('BASEURL', '/PROJECT4');

  ?>