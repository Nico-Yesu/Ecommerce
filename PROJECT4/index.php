<?php
require_once 'core/init.php';
 include 'includes/head.php'; 
include 'includes/nav.php';
//include 'includes/detailsmodal.php';

$sql = "SELECT * FROM products WHERE featured = 1";
$db->query($sql);
$featured = $db->query($sql);
?>







 
<h1 style="text-align: center;">NICO & DARIO'S CAR RENTALS</h1>
<!--Header-->
<div id="headerWrapper">
	<div id="back-flower"></div>
	<div id="logotext"></div>
	<div id="for-flower"></div>
</div>


<div class="container-fluid">
Featured Products:

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
		<button type="button" class="btn btn-sm btn-success" onclick="detailsmodal(<?= $product['id']; ?>)">Details</button>
	</div>
<?php endwhile;  ?>

</div>

</div>

<br><br><br><br>

<a href="cart.php">View Cart</a>






<footer class="text-center" id="footer">&copy; Copyright 2019 Dario and Nico</footer>


<script type="text/javascript">
	jQuery(window).scroll(function(){
		var vscroll = jQuery(this).scrollTop();
		console.log(vscroll);

	});

	function detailsmodal(id){
		var data = {"id" : id};
		jQuery.ajax({
			url : 'includes/detailsmodal.php',
			method : "post",
			data : data,
			success: function(data){
			jQuery('body').append(data);
			jQuery('#details-modal').modal('toggle');
			},
			error: function(){
				alert("something is wrong");
			}
		});
	}

function add_to_cart(){
	//alert("Thank You for your business!");
	jQuery('#modal_errors').html("");
	var size = jQuery('#size').val();
	var quantity = jQuery('#quantity').val();
	var available = jQuery('#available').val();
	var error = '';
	var data = jQuery('#add_product_form').serialize();
	if(size==''|| quantity == ''|| quantity == 0){
		error += '<p class= "text-danger text-center">You Must Enter a Size and Quantity</p>';
		jQuery('#modal_errors').html(error);
		return;
	}else{
		jQuery.ajax({
			url : 'admin/parsers/add_cart.php',
			method : 'post',
			data : data,
			success : function(){},
			error : function(){alert("Something is wrong");}
		});
	}
}



</script>


</body>
</html>