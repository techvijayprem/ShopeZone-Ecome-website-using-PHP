<?php
session_start();
include('includes/header.php');
?>

<head>
	<title>Contact Form 04</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" href="assets/css/style_1.css">

	<style>
		body {
    background: white;
    min-height: 100vh;
}

.width-auto {
    width: auto;
}

.text-lg {
    font-size: 2rem;
}

.carousel-indicators li {
    border: none;
    background: #ccc;
}

.carousel-indicators li.active {
    background: #28a745;
}
	</style>

</head>

<body>

	<section class="section mb-3">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4 mt-5">
					<div class="h4 pb-2 mb-4 text-dark border-bottom border-danger text-center pt-2">
        Contact US</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-6">
								<div class="contact-wrap w-100 p-lg-5 p-4">
									<h3 class="mb-4">Send us a message</h3>
									<div id="form-message-warning" class="mb-4"></div> 
									<div id="form-message-success" class="mb-4">
										Your message was sent, thank you!
									</div>
									<form action="functions/code.php" method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message" required></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" name="contact_us_btn" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-lg-5 p-4 img">
									<h3>Contact us</h3>
									<p class="mb-4">We're open for any suggestion or just to have a chat</p>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div>
										<div class="text pl-3">
											<p><span>Address:</span> 198 West 21th Street, Suite 721 Ahmedabad Guajarat India 380050</p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-phone"></span>
										</div>
										<div class="text pl-3">
											<p><span>Phone:</span> <a href="tel://+918160496693">+918160496693</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
											<p><span>Email:</span> <a href="mailto:shopzone07@gmail.com">shopzone07@gmail.com</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-globe"></span>
										</div>
										<div class="text pl-3">
											<p><span>Website</span> <a href="#">ShopZone.com</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<div class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section class="pb-5">
						<div class="container">
							<div class="row">
								<div class="col-lg-10 col-xl-8 mx-auto">
									<div class="p-5 bg-white shadow rounded">
										<!-- Bootstrap carousel-->
										<div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
											<!-- Bootstrap carousel indicators [nav] -->
											<ol class="carousel-indicators mb-0">
												<li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
											</ol>


											<!-- Bootstrap inner [slides]-->
											<div class="carousel-inner px-5 pb-4">
												<!-- Carousel slide-->
												<div class="carousel-item active">
													<div class="media"><img class="rounded-circle img-thumbnail" src="https://bootstrapious.com/i/snippets/sn-slider-quote/avatar-1.jpg" alt="" width="75">
														<div class="media-body ml-3">
															<blockquote class="blockquote border-0 p-0">
																<p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
																<footer class="blockquote-footer">Someone famous in
																	<cite title="Source Title">Source Title</cite>
																</footer>
															</blockquote>
														</div>
													</div>
												</div>

												<!-- Carousel slide-->
												<div class="carousel-item">
													<div class="media"><img class="rounded-circle img-thumbnail" src="https://bootstrapious.com/i/snippets/sn-slider-quote/avatar-3.jpg" alt="" width="75">
														<div class="media-body ml-3">
															<blockquote class="blockquote border-0 p-0">
																<p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
																<footer class="blockquote-footer">Someone famous in
																	<cite title="Source Title">Source Title</cite>
																</footer>
															</blockquote>
														</div>
													</div>
												</div>

												<!-- Carousel slide-->
												<div class="carousel-item">
													<div class="media"><img class="rounded-circle img-thumbnail" src="https://bootstrapious.com/i/snippets/sn-slider-quote/avatar-2.jpg" alt="" width="75">
														<div class="media-body ml-3">
															<blockquote class="blockquote border-0 p-0">
																<p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
																<footer class="blockquote-footer">Someone famous in
																	<cite title="Source Title">Source Title</cite>
																</footer>
															</blockquote>
														</div>
													</div>
												</div>
											</div>


											<!-- Bootstrap controls [dots]-->
											<a class="carousel-control-prev width-auto" href="#carouselExampleIndicators" role="button" data-slide="prev">
												<i class="fa fa-angle-left text-dark text-lg"></i>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next width-auto" href="#carouselExampleIndicators" role="button" data-slide="next">
												<i class="fa fa-angle-right text-dark text-lg"></i>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

	<?php include('includes/footer.php'); ?>
	