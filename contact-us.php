<?php

	$msg = '';
	$msgClass = '';
	if(filter_has_var(INPUT_POST, 'submit')){
		// Getting form data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$address = htmlspecialchars($_POST['address']);
		$message = htmlspecialchars($_POST['message']);

		// Email Sending
		$toEmail = 'medicfibers@gmail.com';
		$subject = 'Contact Request from ' . $name;
		$body = '<h2>Contact Request</h2>
			<p><strong>Name: </strong>'.$name.'</p>
			<p><strong>Email: </strong>'.$email.'</p>
			<p><strong>Phone No. - </strong> '.$phone.'</p>
			<p><strong>Address: </strong> '.$address.'</p>
			<p><strong>Message: </strong> '.$message.'</p>
		
		';

		// Email headers
		$headers = "MIME-Version: 1.0". "\r\n";
		$headers.= "Content-Type: text/html;charset=UTF-8". "\r\n";

		$headers.= "From: ". $name . "<" . $email . ">". "\r\n";

		if(mail($toEmail, $subject, $body, $headers)){
			$msg= "Thank you for your contact request";
			$msgClass = "alert-success";
		}
		else{
			$msg= "Your email was not sent.";
			$msgClass = "alert-danger";
		}
	}

?>



<!doctype html>
<html lang="en">


<head>
	<title>Contact Us </title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Kumar Shashwat">
	<meta name="description" content="MedicFibers is a group of very passionate people working for improving the health and lifestyle of the citizens by the new the application of Indian Textile Studies.">
	<meta name="keywords" content="medicfibers, spine-a-crust, business, company, IIT Delhi, Indian textile">
	
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawsome -->
	<link href="fonts/css/fontawesome-all.min.css" rel="stylesheet">
	<!-- Animate CSS-->
	<link href="css/animate.css" rel="stylesheet">
	<!-- menu CSS-->
	<link href="css/bootstrap-4-navbar.css" rel="stylesheet">
	<!-- menu CSS-->
	<link href="slick/slick.css" rel="stylesheet">
	<!-- Lightbox Gallery -->
	<link href="inc/lightbox/css/jquery.fancybox.css" rel="stylesheet">
	<!-- OWL Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Preloader CSS-->
	<link href="css/fakeLoader.css" rel="stylesheet">
	<!-- Main CSS -->
	<link href="style.css" rel="stylesheet">

	<!-- Responsive CSS -->
	<link href="css/responsive.css" rel="stylesheet">

</head>

<body>

	<!-- Preloader -->
	<div id="fakeloader"></div>

	<div class="main-menu-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="main-menu">
						<nav class="navbar navbar-expand-lg navbar-light bg-light btco-hover-menu">
							<a class="navbar-brand" href="index.html#top">
								<img src="images/logo.png" class="d-inline-block align-top" alt="MedicFibers">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
							 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">

								<ul class="navbar-nav ml-auto main-menu-nav">

									<li class="nav-item ">
										<a class="nav-link" href="index.html#top">Home</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="index.html#aboutUs">About Us</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="products.html">Products</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="team.html">Our Team</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="blogs.html">Blogs</a>
									</li>
									
									<li class="nav-item active">
										<a class="nav-link" href="contact-us.php">Contact Us</a>
									</li>

								</ul>

							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact-page-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="contact-form">
					<?php if($msg != ''): ?>
									<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
								<?php endif; ?>
						<h2>Send a Message</h2>
						<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
							<div class="row">
								<div class="col-md-6">
								
									<div class="single-input">
										<i class="fas fa-user"></i>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name" name="name" required aria-label="Name">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<i class="fas fa-envelope"></i>
										<div class="form-group">
											<input type="email" name="email" required class="form-control" placeholder="Email">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<i class="fas fa-phone-volume"></i>
										<div class="form-group">
											<input type="number" name="phone" required class="form-control" placeholder="Phone">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<i class="fas fa-map-marker-alt"></i>
										<div class="form-group">
											<input type="text" name="address" required class="form-control" placeholder="Address" aria-label="Address">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="single-input">
										<i class="fas fa-pen-square"></i>
										<div class="form-group">
											<textarea class="form-control" placeholder="Write something here" rows="5" name="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<button type="submit" class="btn-small" name="submit">Submit <i class="fas fa-paper-plane"></i> </button>

								</div>
							</div>

						</form>

					</div>
				</div>
				<div class="col-md-4">
					<div class="contact-address">
						<h2>Contact</h2>
						<ul>
							<li>
								<div class="media">
									<i class="fas fa-phone-volume"></i>
									<div class="media-body">
										+91-7321808254
									</div>
								</div>
							</li>
							<li>
								<div class="media">
									<i class="fas fa-envelope"></i>
									<div class="media-body">
										medicfibers@gmail.com
									</div>
								</div>
							</li>
							<li>
								<div class="media">
									<i class="fas fa-map-marker-alt"></i>
									<div class="media-body">
										Shivalik Hostel,
										Indian Institute of Technology Delhi, Hauz Khas, New Delhi, Delhi 110016
									</div>
								</div>
							</li>
						</ul>
					</div>

					<div class="client_map">
						<div id="map"></div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<footer class="footer-section-1x">
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<div class="footer-top">
						<div class="row">
							<div class="col-md-9">
								<div class="footer-top-left">
									<div class="row">
										<div class="col-md-4">
											<div class="single-link">
												<h3>Quick Links</h3>
												<ul>
													<li><a href="index.html"> Home </a></li>
													<li><a href="team.html"> Our Mentor </a></li>
													
												</ul>
											</div>
										</div>
										<div class="col-md-4">
											<div class="single-link">
												<h3>Help</h3>
												<ul>
													<li><a href="contact-us.php"> Purchase Products </a></li>
													<li><a href="team.html"> Our Team</a></li>
													<li><a href="contact-us.php"> Contact Us </a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-4">
											<div class="footer-social-link">
												<h3>Follow Us</h3>
												<ul>
													<li class="facebook"><a href="https://www.facebook.com/MedicFibers-522479374891624/"> <i class="fab fa-facebook-f"></i>
														</a></li>
													<li class="instagram"><a href="https://www.instagram.com/medicfibers/"> <i class="fab fa-instagram"></i>
														</a></li>
													<li class="twitter"><a href="#"> <i class="fab fa-twitter"></i> </a></li>
													<li class="google-plus"><a href="#"> <i class="fab fa-google-plus-g"></i> </a></li>
												</ul>
											</div>
										</div>



									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="footer-top-right">

									<ul>
										<li>
											<div class="media">
												<i class="fas fa-map-marker-alt"></i>
												<div class="media-body">
													Shivalik Hostel, Indian Institute of Technology Delhi, Hauz Khas, New Delhi, Delhi 110016
												</div>
											</div>
										</li>
										<li>
											<div class="media">
												<i class="fas fa-phone-volume"></i>
												<div class="media-body">
													+91-7321808254
												</div>
											</div>
										</li>
										<li>
											<div class="media">
												<i class="fas fa-envelope"></i>
												<div class="media-body">
													medicfibers@gmail.com
												</div>
											</div>
										</li>
										<li>
											<div class="media">
												<i class="fas fa-globe"></i>
												<div class="media-body">
													www.medicfibers.com
												</div>
											</div>
										</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="footer-bottom">
						<div class="row">
							<div class="col-md-5">
								<p>&copy; <a href="https://www.github.com/shashutech/">Shashutech</a> All Rights Reserved </p>
							</div>
							<div class="col-md-7">
								<ul>
									<li><a href="index.html"> About MedicFiber </a></li>
									<li><a href="contact-us.php"> Help Center </a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</footer>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
	 crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- OWL Carousel js-->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Wow Script -->
	<script src="js/wow.min.js"></script>
	<!-- Counter Script -->
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src='js/jquery.mixitup.min.js'></script>
	<!-- Lightbox js -->
	<script src="inc/lightbox/js/jquery.fancybox.pack.js"></script>
	<script src="inc/lightbox/js/lightbox.js"></script>
	<!-- Google map js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa6w23do1qZsmF1Xo3atuFzzMYadTuTu0"></script>
	<script src="js/map.js"></script>
	<!-- loader js-->
	<script src="js/fakeLoader.min.js"></script>
	<!-- Scroll bottom to top -->
	<script src="js/scrolltopcontrol.js"></script>
	<!-- menu -->
	<script src="js/bootstrap-4-navbar.js"></script>
	<!-- Testimonial slider Script -->
	<script src="slick/slick.min.js"></script>
	<!-- Custom script -->
	<script src="js/custom.js"></script>

</body>

</html>