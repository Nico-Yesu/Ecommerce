
<?php ob_start();  ?>

<?php 
require_once '../core/init.php';
$id = $_POST['id'];
$id = (int)$id;
$sql = "SELECT * FROM products WHERE id = '$id'";
$result = $db->query($sql);
$product = mysqli_fetch_assoc($result);
$brand_id = $product['brand'];
$sql = "SELECT brand FROM brand WHERE id = '$brand_id'";
$brand_query = $db->query($sql);
$brand = mysqli_fetch_assoc($brand_query);
$sizestring = $product['sizes'];
$size_array = explode(',', $sizesstring);
 ?>

<div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<button class="close" type="button" onclick="closeModal()" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title "> <?=  $product['title']; ?> </h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
				<div class="row">
					<span id="modal_errors" class="bg-danger"></span>
					<div class="col-sm-6">
					<div class="center-block">
						<img src="<?= $product['image']; ?>" class="details img-responsive">
					
					</div>
			</div>
			<div class="col-sm-6">
						<h4>Details</h4>
						<p> <?=  $product['description']; ?></p>
						<hr>
						<p>Price: <?=  $product['price']; ?> </p>
						<p>Brand: <?=  $brand['brand']; ?></p>
						<form action="add_cart.php" method="post" id="add_product_form">
							<input type="hidden" name="product_id" value="<?= $id; ?>">
							<input type="hidden" name="available" id="available" value="">
							<div class="form-group">
								<div class="col-xs-3">
									<label for="quantity">Quantity</label>
									<input type="text" name="quantity" id="quantity" class="form-control">

								</div>
								<p>Available: 5 Left</p>
							</div>
							<div class="form-group">
								<label for="size"> Size</label>
								<select name="size" id="size" class="form-control">
								<option value="S">0-5 days</option>
								<option value="M">5-10 days</option>
								<option value="L">10+ days</option>
								</select>
							</div>
						</form>
					</div>
		</div>
	</div>
</div>
<div class="modal-footer">
	<button class="btn btn-default" onclick="closeModal()">Close</button>
	<button class="btn btn-warning" onclick="add_to_cart(); return false;"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
</div>
</div>
</div>
</div>


<script>





	
	function closeModal(){
		jQuery('#details-modal').modal('hide');
		setTimeout(function(){
			jQuery('#details-modal').remove();
		},500);
	}

</script>
<?php echo ob_get_clean(); ?>