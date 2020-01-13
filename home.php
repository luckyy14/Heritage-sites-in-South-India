<?php
	include('session.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Main &mdash;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO"/>
              <meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
		<h1><?php echo "Hello $user_check"?>
		<br>
		<!--<a href='login.php'><h3>Login</h3></a>-->
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html">Explore South India</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="home.php">Home</a><br><br>
									<a href="book_hotel.php">Book a hotel</a><br><br>
									<a href="logout.php">Logout</a><br><br>
									<a href="view_bookings.php"> View bookings</a><br><br>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/Cover.jpg);">
				<div class="desc animate-box">
					
					<!-- <span>Lovely Crafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FREEHTML5.co</a></span> -->
					<!--<span><a class="btn btn-primary btn-lg" href="#">Get Started</a></span>-->
				</div>
			</div>
		</div>
		<div class="fh5co-listing">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item" href="Andhrapradesh.html">
							<img src="images/Andhrapradesh.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Andhra Pradesh</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item"  href="TamilNadu.html">
							<img src="images/TamilNadu.jpeg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Tamil Nadu</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item" href="Kerala.html">
							<img src="images/Kerala.jpeg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Kerala</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item" href="Karnataka.html">
							<img src="images/Karnataka.jpeg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Karnataka</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>

					<div class="col-md-4 col-sm-4 fh5co-item-wrap">
						<a class="fh5co-listing-item" href="Telangana.html">
							<img src="images/Telangana.jpeg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<div class="fh5co-listing-copy">
								<h2>Telangana</h2>
								<span class="icon">
									<i class="icon-chevron-right"></i>
								</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END fh5co-page -->
	</div>
	<!-- END fh5co-wrapper -->
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	</body>
</html>
