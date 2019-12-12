<?php 

require_once $_SERVER['DOCUMENT_ROOT'].'/core/init.php';
$product_id = sanitize($_POST['product_id']);
$size = sanitize($_POST['size']);
$available = sanitize($_POST['available']);
$quantity = sanitize($_POST['quantity']);
$image = sanitize($_POST['image']);

$item = array();
$item[] = array(
	'id' => $product_id,
	'size' => $size,
	'quantity' => $quantity,
	'image' => $image,
);


$domain = 




 ?>