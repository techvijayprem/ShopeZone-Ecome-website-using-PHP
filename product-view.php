<?php
include('functions/userfunction.php');
include('includes/header.php'); 

if(isset($_GET['product']))
{
	$product_slug = $_GET['product'];
	$product_data = getSlugActive("products",$product_slug);
	$product = mysqli_fetch_array($product_data);

	if($product)
	{
		?>
		<div class="py-3" style="background-color:purple;">
			<div class="container">
				<h6 class="text-white">Home /
					<a href="categories.php" class="text-white"> 
						Collections /
					</a> 
					<?= $product['name']; ?></h6>
				</div>
			</div>
			<div class="bg-light py-4">
				<div class="container mt-4 product_data">
					<div class="row">
						<div class="col-md-4">
							<div class="shadow">
								<img src="../Admin/uploads/<?= $product['image']; ?>" alt="Product Image" class="w-100 bg-white">
							</div> 
						</div>
						<div class="col-md-8">
							<h4 class="fw-bold" style="color:coral;"><?= $product['name']; ?>
							<span class="float-end text-danger">
								<?php
								if($product['trending']){
									echo "Trending";
								}
								?>
							</span>
						</h4>
						<hr>
						<p><?= $product['small_description']; ?></p>
						<div class="row">
							<div class="col-md-6">
								<h4>Rs <span class="text-success fw-bold"><?= $product['selling_price']; ?></span></h4>
							</div>
							<div class="col-md-6">
								<h4>Rs <s class="text-danger"><?= $product['original_price']; ?></s></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">	
								<div class="input-group mb-3" style="width:130px;">
									<button class="input-group-text decrement-btn">-</button>
									<input type="text" class="form-control text-center input-qty bg-white" value="1" disabled>
									<button class="input-group-text increment-btn">+</button>
								</div>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-6">	
								<button class="btn btn-outline-primary px-4 addToCartBtn" value="<?= $product['id']; ?>"><i class="fa-solid fa-cart-plus me-2"></i>Add to Cart</button>
							</div>
							<div class="col-md-6">	
								<button class="btn btn-outline-danger px-4 addToCartBtn"><i class="fa fa-heart me-2"></i>Add to Wishlist</button>
							</div>
						</div>	
						<hr>	

						<h6>Description:</h6>

						<p><?= $product['description']; ?></p>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	else
	{
		echo "Product Not Found!!";
	}
}
else
{
	echo "Something Went Wrong!!";
}
?>

<?php include('includes/footer.php'); ?>