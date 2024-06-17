<?php
session_start();
include('includes/header.php');
?>

<head>
	<style type="text/css">
		.social-link {
			width: 30px;
			height: 30px;
			border: 1px solid #ddd;
			display: flex;
			align-items: center;
			justify-content: center;
			color: #666;
			border-radius: 50%;
			transition: all 0.3s;
			font-size: 0.9rem;
		}

		.social-link:hover{
			color: blue;
			background: cyan;
		},
		.social-link:focus {
			background: #ddd;
			text-decoration: none;
			color: #555;
		}
	</style>
</head>

<div class="bg-light">
	<div class="container py-5">
		<div class="row h-100 align-items-center py-5">
			<div class="col-lg-6">
				<h1 class="display-4">About us</h1>
				<p class="lead text-muted mb-0">“We see our customers as invited guests to a party, and we are the hosts. It’s our job every day to make every important aspect of the customer experience a little bit better.”</p>
				<p class="lead text-muted">-Jeff Bezos (Founder of Amazon)
				</p>
			</div>
			<div class="col-lg-6 d-none d-lg-block"><img src="assets/images/shopping_about.png" width="100%" alt="" class="img-fluid"></div>
		</div>
	</div>
</div>

<div class="bg-white py-5">
	<div class="container py-5">
		<div class="row align-items-center mb-5">
			<div class="col-lg-6 order-2 order-lg-1"><i class="fa-solid fa-id-card-clip fa-2x text-danger"></i>
				<h2 class="font-weight-light">Contact us</h2>
				<p class="font-italic text-muted mb-4">You can contact us if you have any query or any problem, we will try to give you fast response.</p><a href="contact_us.php" class="btn btn-primary px-5 rounded-pill shadow">Learn More</a>
			</div>
			<div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://bootstrapious.com/i/snippets/sn-about/illus.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-5 px-5 mx-auto"><img src="assets/images/shopping_about_2.png" alt="" class="img-fluid mb-4 mb-lg-0"></div>
			<div class="col-lg-6"><i class="fa-solid fa-bag-shopping fa-2x mb-3 text-danger"></i>
				<h2 class="font-weight-light">Buy Here!!</h2>
				<p class="font-italic text-muted mb-4">You can buy any products with security, many categories available here, we will try to give you best quality product here.</p><a href="#" class="btn btn-primary px-5 rounded-pill shadow text-white">Learn More</a>
			</div>
		</div>
	</div>
</div>

<div class="bg-light py-5">
	<div class="container py-5">
		<div class="row mb-4">
			<div class="col-lg-6">
				<h2 class="display-4 font-weight-light">Our team</h2>
				<p class="font-italic text-muted">If everyone is moving forward together, then success takes care of itself.</p>
			</div>
		</div>

		<div class="row text-center">
			<!-- Team item-->
			<div class="col-xl-4 col-sm-6 mb-5">
				<div class="bg-white rounded shadow py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
					<h5 class="mb-0">Archit Patel</h5><span class="small text-uppercase text-muted">Creator</span>
					<ul class="social mb-0 list-inline mt-3">
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- End-->

			<!-- Team item-->
			<div class="col-xl-4 col-sm-6 mb-5">
				<div class="bg-white rounded shadow py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
					<h5 class="mb-0">Prem Khushwah</h5><span class="small text-uppercase text-muted">Creator</span>
					<ul class="social mb-0 list-inline mt-3">
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- End-->

			<!-- Team item-->
			<div class="col-xl-4 col-sm-6 mb-5">
				<div class="bg-white rounded shadow py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
					<h5 class="mb-0">Dev Bhatt</h5><span class="small text-uppercase text-muted">Creator</span>
					<ul class="social mb-0 list-inline mt-3">
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- End-->

		</div>
	</div>
</div>


<?php include('includes/footer.php'); ?>