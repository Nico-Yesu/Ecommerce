<?php 
error_reporting(0);
$sql = "SELECT * FROM categories WHERE parent = 0";
$pquery = $db->query($sql);

 ?>
<!--Top Nav Bar-->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<a href="/index.php" class="navbar-brand">Nico's Store</a>
		<ul class="nav navbar-nav">
			
			<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Rentals<span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#">Sudan</a></li>
				<li><a href="#">Sport</a></li>
				<li><a href="#">Truck</a></li>
				<li><a href="#">Vans</a></li>
		</ul>
	</li>

</ul>
	</div>
</nav>