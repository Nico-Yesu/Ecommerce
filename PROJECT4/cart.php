





<!DOCTYPE html>
<html>
<head>
	<title>Nico's Store</title>

	<?php
require_once 'core/init.php';
 include 'includes/head.php'; 
include 'includes/nav.php';
//include 'includes/detailsmodal.php';

$sql = "SELECT * FROM products WHERE price > 50";
$db->query($sql);
$featured = $db->query($sql);
?>

</head>










<body>



<h1 style="text-align: center;">NICO & DARIO'S CHECK OUT</h1>
<!--Header-->
<div id="headerWrapper">
	<div id="back-flower"></div>
	<div id="logotext"></div>
	<div id="for-flower"></div>
</div>


<div class="container-fluid">
<h1 style="text-align: center;">Your Items:</h1>

<br><br>




<!--main-->
<a name = "inventory"></a>
<div class="col-md-8">
<div class="row">
	<h2 class="text-center"> </h2>
<?php while ($product = mysqli_fetch_assoc($featured)) : ?>

	<div class="col-md-3">
		<h4> <?= $product['title']; ?> </h4>
		<img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" />
		<p class="list-price text-danger"> List Price <s> $ <?= $product['list_price']; ?> </s> a Day</p>
		<p class="price" style="color: green;">Our Price: <?= $product['price']; ?> a Day! </p>
		<button type="button" class="btn btn-sm btn-success" onclick="window.location.href='payment.php';">CHECKOUT</button>
	</div>
<?php endwhile;  ?>

</div>

</div>

<br><br><br><br>


<footer class="text-center" id="footer">&copy; Copyright 2019 Dario and Nico</footer>







</body>
</html>