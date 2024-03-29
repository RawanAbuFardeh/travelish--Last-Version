<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('php/connection.php');
?>

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Travelish - Home </title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.css">
	<link rel="stylesheet" href="css/testimonial_carousel.css">
	<link rel="stylesheet" href="css/blog.css">
	<link rel="stylesheet" href="css/packages.css">
	<link rel="stylesheet" href="css/main_slider.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<header id="header"><!-- #header -->
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-6 header-top-left">
						<ul>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="Booking.html">Buy Tickets</a></li>
						</ul>
					</div>
					<div class="col-lg-6 col-sm-6 col-6 header-top-right">
						<div class="header-social">
							<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
							<a href="https://earth.google.com/web/@0,0,0a,22251752.77375655d,35y,0h,0t,0r/data=OgMKATA"><i
									class="fa fa-dribbble"></i></a>
							<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="index.html">Home </a></li>
						<li><a href="packages.html">Packages</a></li>
						<li><a href="hotels.html">Hotels</a></li>
						<li><a href="tour_listing.html">Tours</a></li>
						<li class="menu-has-children"><a href="">Pages</a>
							<ul>
								<li><a href="insurance.html">Tour Insurance</a></li>
								<li><a href="tour_search.html">Search Page</a></li>

								<li><a href="tour_listing_detail.html">Tour Detail</a></li>
								<li><a href="about.html">About Page</a></li>
								<li><a href="hotels.html">Hotels</a></li>
								<li><a href="packages.html">Packages</a></li>




							</ul>
						</li>
						<li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>
							</ul>
						</li>

						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start Slider Area -->
	<div id="fw_al_002" class="carousel slide swipe_x ps_easeInOutSine" data-ride="carousel" data-pause="hover"
		data-interval="5000" data-duration="2000">

		<!-- Wrapper For Slides -->
		<div class="carousel-inner" role="listbox">

			<!-- First Slide -->
			<div class="carousel-item active">

				<!-- Slide Background -->
				<img src="img/slider/slide-1.jpg" alt="fw_al_002_01" />

				<!-- Slide Text Layer -->
				<div class="fw_al_002_slide">
					<h1 style="color: #e00d4e;"><span>Amazing Tours </span>With Travelish</h1>
					<p> your passport to extraordinary journeys and unforgettable adventures! Whether you're a seasoned
						globetrotter or a first-time explorer,<br> we are your trusted travel companion, dedicated to
						inspiring, planning, and enhancing your wanderlust experiences.<br> </p>
					<a href="tour_listing.html" style="color:white; background-color:#e00d4e;">Get Started</a>
				</div>
			</div>
			<!-- End of Slide -->

			<!-- Second Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="img/slider//slide-2.jpg" alt="fw_al_002_02" />

				<!-- Slide Text Layer -->
				<div class="fw_al_002_slide">
					<h1 style="color: #e00d4e;"><span>Amazing Tours </span>With Travelish</h1>
					<p>Home to some of the most luxurious and beautiful private island resorts (most featuring overwater
						bungalows and suites),<br> the Maldives offers the ultimate setting for a dream vacation,
						honeymoon or family escape.</p>
					<a href="tour_listing.html" style="color:white; background-color:#e00d4e;">Get Started</a>
				</div>
			</div>
			<!-- End of Slide -->


			<!-- Third Slide -->
			<div class="carousel-item">

				<!-- Slide Background -->
				<img src="img/slider//slide-3.jpg" alt="fw_al_002_03" />

				<!-- Slide Text Layer -->
				<div class="fw_al_002_slide">
					<h1 style="color: #e00d4e;"><span>Amazing Tours </span>With Travelish</h1>
					<p>Home to some of the most luxurious and beautiful private island resorts (most featuring overwater
						bungalows and suites),<br> the Maldives offers the ultimate setting for a dream vacation,
						honeymoon or family escape.</p>
					<a href="tour_listing.html" style="color:white; background-color:#e00d4e;"> Get Started</a>
				</div>
			</div>
			<!-- End of Slide -->

		</div><!-- End of Wrapper For Slides -->

	</div> <!-- End Slider Area-->
	<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
	<script src="https://mediafiles.botpress.cloud/9244075a-f128-4d18-b8e4-4517cc6ff3e4/webchat/config.js"
		defer></script>

	<!-- Search -->

	<div class="search_tabs">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="Hotels-tab" data-toggle="tab" href="#Hotels" role="tab"
						aria-controls="Hotels" aria-selected="true">Hotels</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="rental-tab" data-toggle="tab" href="#rental" role="tab"
						aria-controls="rental" aria-selected="false">Car Rentals</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="flights-tab" data-toggle="tab" href="#flights" role="tab"
						aria-controls="flights" aria-selected="false">Flights</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="Trips-tab" data-toggle="tab" href="#Trips" role="tab" aria-controls="Trips"
						aria-selected="false">Trips</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="Cruises-tab" data-toggle="tab" href="#Cruises" role="tab"
						aria-controls="Cruises" aria-selected="false">Cruises</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="Activities-tab" data-toggle="tab" href="#Activities" role="tab"
						aria-controls="Activities" aria-selected="false">Activities</a>
				</li>
			</ul>
		</div>
		<div class="tab-content" id="myTabContent" style="background-color:#e00d4e"> <!--search section background-->
			<div class="tab-pane fade show active" id="Hotels" role="tabpanel" aria-labelledby="Hotels-tab">
				<form>
					<div class="form-row">
						<div class="col-md-4">
							<label>DESTINATION</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="col-md-2">
							<label>CHECK IN</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-2">
							<label>CHECK OUT</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-1">
							<label>ADULTS</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-1">
							<label>CHILDREN</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-2 pt-30">
							<button class="btn btn-primary btn-block" type="submit"
								style="background-color:#21346e;">Search</button>
						</div>
					</div>
				</form>
			</div>
			<div class="tab-pane fade" id="rental" role="tabpanel" aria-labelledby="rental-tab">
				<form>
					<div class="form-row">
						<div class="col-md-4">
							<label>CAR DETAIL</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="col-md-2">
							<label>FROM</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-2">
							<label>TO</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-1">
							<label>ADULTS</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-1">
							<label>CHILDREN</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-2 pt-30">
							<button class="btn btn-primary btn-block" type="submit"
								style="background-color:#21346e;">Search</button>
						</div>
					</div>
				</form>
			</div>
			<div class="tab-pane fade" id="flights" role="tabpanel" aria-labelledby="flights-tab">
				<form>
					<div class="form-row">
						<div class="col-md-4">
							<label>DESTINATION</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="col-md-2">
							<label>FROM</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-2">
							<label>TO</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-1">
							<label>ADULTS</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-1">
							<label>CHILDREN</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-2 pt-30">
							<button class="btn btn-primary btn-block" type="submit"
								style="background-color:#21346e;">Search</button>
						</div>
					</div>
				</form>
			</div>
			<div class="tab-pane fade" id="Trips" role="tabpanel" aria-labelledby="Trips-tab">
				<form>
					<div class="form-row">
						<div class="col-md-4">
							<label>DESTINATION</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="col-md-2">
							<label>FROM</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-2">
							<label>TO</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-1">
							<label>ADULTS</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-1">
							<label>CHILDREN</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-2 pt-30">
							<button class="btn btn-primary btn-block" type="submit"
								style="background-color:#21346e;">Search</button>
						</div>
					</div>
				</form>
			</div>
			<div class="tab-pane fade" id="Cruises" role="tabpanel" aria-labelledby="Cruises-tab">
				<form>
					<div class="form-row">
						<div class="col-md-4">
							<label>DESTINATION</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="col-md-2">
							<label>FROM</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-2">
							<label>TO</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-1">
							<label>ADULTS</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-1">
							<label>CHILDREN</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-2 pt-30">
							<button class="btn btn-primary btn-block" type="submit"
								style="background-color:#21346e;">Search</button>
						</div>
					</div>
				</form>
			</div>
			<div class="tab-pane fade" id="Activities" role="tabpanel" aria-labelledby="Activities-tab">
				<form>
					<div class="form-row">
						<div class="col-md-4">
							<label>DESTINATION</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="col-md-2">
							<label>CHECK IN</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-2">
							<label>CHECK OUT</label>
							<input type="text" class="form-control" placeholder="YYYY-MM-DD" required>
						</div>
						<div class="col-md-1">
							<label>ADULTS</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-1">
							<label>CHILDREN</label>
							<input type="number" class="form-control" placeholder="01" required>
						</div>
						<div class="col-md-2 pt-30">
							<button class="btn btn-primary btn-block" type="submit"
								style="background-color:#21346e;">Search</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Start popular-destination Area -->
	<section class="popular-destination-area section-gap">
		<?php
		$sql = "SELECT name, price, image_url FROM destinations";
		$result = $conn->query($sql);

		// Check if there are rows in the result
		if ($result->num_rows > 0) {
			?>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-40 col-lg-10">
						<div class="title text-center">
							<h1 class="mb-10">Top Destinations</h1>
							<p>Embark on a journey to your dream destinations and create memories that last a lifetime.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
					// Loop through the rows and generate HTML for each destination
					while ($row = $result->fetch_assoc()) {
						?>
						<div class="col-md-6 col-sm-12">
							<a href="tour_listing_detail.html" class="photo-box"
								data-background-image="<?php echo $row['image_url']; ?>"
								style="background-image: url(<?php echo $row['image_url']; ?>);">
								<div class="photo-box-content">
									<h3>
										<?php echo $row['name']; ?>
									</h3>
									<span>Starting from
										<?php echo $row['price']; ?>$
									</span>
								</div>
							</a>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<?php
		} else {
			echo "No destinations found in the database.";
		}

		// Close the database connection
		$conn->close();

		?>
	</section>
	<!-- End popular-destination Area -->

	<!-- start Discount Area -->
	<section class="discount-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 section_padding">
					<h3>1000 $ for person - 6 nights</h3>
					<h2>Discount <span class="text_clr">10-30%</span> Off</h2>
					<p>If you’re looking for a truly memorable family break here you find the lowest price on the right
						hotel for you. It's indescribable. Stay up to date and check out the deals for these trending
						destinations.</p>
					<a href="packages.html" class="site-button white">See Promotion Tours</a>
				</div>
				<div class="col-lg-6">
				</div>
			</div>
		</div>
	</section>
	<!-- End Discount Area -->

	<!-- Start price Area -->
	<section class="price-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-40 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Affordable Prices</h1>
						<p>Explore the world without breaking the bank! Unbeatable adventures, unbeatable prices. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="single-price price_bg1">
						<h4>Cheap Packages</h4>
						<ul class="price-list">
							<li class="d-flex justify-content-between align-items-center">
								<span>New York</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Maldives</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Sri Lanka</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Nepal</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Thiland</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Singapore</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-price price_bg2">
						<h4>Luxury Packages</h4>
						<ul class="price-list">
							<li class="d-flex justify-content-between align-items-center">
								<span>New York</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Maldives</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Sri Lanka</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Nepal</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Thiland</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Singapore</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-price price_bg3">
						<h4>Camping Packages</h4>
						<ul class="price-list">
							<li class="d-flex justify-content-between align-items-center">
								<span>New York</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Maldives</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Sri Lanka</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Nepal</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Thiland</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
							<li class="d-flex justify-content-between align-items-center">
								<span>Singapore</span>
								<a href="#" class="price-btn">$1500</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End price Area -->


	<!-- Start Packages Area -->
	<section class="packages-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-40 col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10">Amazing Packages For You</h1>
						<p>"Dive into a world of incredible experiences with our amazing packages tailored just for you!
						</p>
					</div>
				</div>
			</div>
			<?php
			// Assume you have a $pdo variable representing your PDO connection
			
			// Fetch data from the database
			$stmt = $pdo->query("SELECT * FROM paradise_slider");
			$packages = $stmt->fetchAll(PDO::FETCH_ASSOC);
			?>

			<div class="row">
				<!-- Paradise Slider -->
				<div id="w_shop_101_mov_1_col_4"
					class="carousel slide w_shop_101 w_shop_101_control_button swipe_x ps_easeOutCubic"
					data-ride="carousel" data-pause="hover" data-interval="8000" data-duration="2000" data-column="4"
					data-m576="1" data-m768="1" data-m992="2" data-m1200="4">

					<!-- Wrapper For Slides -->

					<?php foreach ($packages as $index => $package): ?>
						<div class="carousel-item <?php echo ($index == 0) ? 'active' : ''; ?>">
							<div class="row">
								<div class="col w_shop_101_grid_col_4">
									<div class="w_shop_101_wrapper">
										<div class="w_shop_101_image">
											<img src="<?php echo $package['image_url']; ?>"
												alt="w_shop_101_<?php echo $index + 1; ?>">
										</div>
										<div class="w_shop_101_header">
											<a href="<?php echo $package['link']; ?>">
												<?php echo $package['offer_title']; ?>
											</a>
											<a href="<?php echo $package['link']; ?>">
												<?php echo $package['destination_title']; ?>
											</a>
										</div>
										<div class="w_shop_101_footer">
											<div class="w_shop_101_price">
												<a href="<?php echo $package['link']; ?>">
													<?php echo '$' . number_format($package['price'], 2); ?>
												</a>
												<a href="<?php echo $package['link']; ?>"><span
														class="fa fa-cart-arrow-down"></span></a>
												<?php if (!empty($package['old_price'])): ?>
													<span class="w_shop_101_old_price">
														<?php echo '$' . number_format($package['old_price'], 2); ?>
													</span>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>

				</div><!-- End of Wrapper For Slides -->
			</div><!-- End Paradise Slider -->
		</div>

		</div>
	</section>
	<!-- End packages Area -->


	<!-- Start testimonial Area -->
	<section class="testimonial-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-40 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Testimonial from our Clients</h1>
						<p> Hear what our clients have to say! Real stories, real experiences</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!--*-*-*-*-*-*-*-*-*-*- BOOTSTRAP CAROUSEL *-*-*-*-*-*-*-*-*-*-->

				<div id="testimonial_carousel"
					class="carousel testimonial_carousel_fade testimonial_carousel_wrapper swipe_x ps_easeOutCirc"
					data-ride="carousel" data-duration="2000" data-interval="6000" data-pause="hover">

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

						<!--========= First slide =========-->
						<div class="carousel-item active">
							<div class="testimonial_carousel_caption">
								<img src="img/test-1.jpg" alt="slider 01" />
								<h3>jackson logan</h3>
								<a href="#">Client</a>
								<p><i class="fa fa-quote-left"></i> "I can't thank TRAVELISH enough for making my travel
									planning experience so seamless and enjoyable! The wealth of information, travel
									tips, and destination guides provided on the site were incredibly helpful in shaping
									my recent trip.</p>
								<ul class="testimonial_rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star-half-o"></i></li>
								</ul>
							</div>
						</div>

						<!--========= Second slide =========-->
						<div class="carousel-item">
							<div class="testimonial_carousel_caption">
								<img src="img/test-2.jpg" alt="slider 02" />
								<h3>sophia mia</h3>
								<a href="#">Client</a>
								<p><i class="fa fa-quote-left"></i> I can confidently say that TRAVELISH has become my
									go-to resource for all things travel. Keep up the fantastic work, and I'm looking
									forward to many more adventures with your guidance!"
								</p>
								<ul class="testimonial_rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star-half-o"></i></li>
								</ul>
							</div>
						</div>

						<!--========= Third slide =========-->
						<div class="carousel-item">
							<div class="testimonial_carousel_caption">
								<img src="img/test-3.jpg" alt="slider 03" />
								<h3>michael elijah</h3>
								<a href="#">Client</a>
								<p><i class="fa fa-quote-left"></i> I've been recommending your website to all my fellow
									travelers, and I can't wait to explore more with your guidance. Keep up the
									fantastic work!"
								</p>
								<ul class="testimonial_rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star-half-o"></i></li>
								</ul>
							</div>
						</div>

						<!--========= Fourth slide =========-->
						<div class="carousel-item">
							<div class="testimonial_carousel_caption">
								<img src="img/test-4.jpg" alt="slider 04" />
								<h3>hannah scarlett</h3>
								<a href="#">Client </a>
								<p><i class="fa fa-quote-left"></i>The deals and recommendations for accommodations and
									activities were spot on, saving me both time and money. The community aspect allowed
									me to connect with fellow travelers who shared invaluable insights and
									recommendations.</p>
								<ul class="testimonial_rating">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star-half-o"></i></li>
								</ul>
							</div>
						</div>

					</div>

					<!--========= Indicators =========-->
					<ol class="carousel-indicators testimonial_carousel_indicators">
						<li data-target="#testimonial_carousel" data-slide-to="0" class="active"></li>
						<li data-target="#testimonial_carousel" data-slide-to="1"></li>
						<li data-target="#testimonial_carousel" data-slide-to="2"></li>
						<li data-target="#testimonial_carousel" data-slide-to="3"></li>
					</ol>

				</div> <!--*-*-*-*-*-*-*-*-*-*- END BOOTSTRAP CAROUSEL *-*-*-*-*-*-*-*-*-*-->
			</div>
		</div>
	</section>
	<!-- End testimonial Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-end">
				<div class="col-lg-6 col-md-12 home-about-left">
					<h1>
						Did not find your Package? <br>
						Feel free to ask us. <br>
						We‘ll make it for you
					</h1>
					<p>
						we understand that your travel needs are unique, and we're here to tailor the perfect package
						just for you. Whether you're looking for a personalized itinerary, a unique destination, or
						specific experiences, our dedicated team of travel experts is ready to create a one-of-a-kind
						adventure that matches your preferences. Contact us today, and let's turn your travel dreams
						into reality."
					</p>
					<a href="about.html" class="primary-btn text-uppercase">More Details</a>
				</div>
				<div class="col-lg-6 col-md-12 home-about-right no-padding">
					<img class="img-fluid" src="img/about-img.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->


	<!-- Start blog Area -->
	<?php


	try {


		// SQL query to retrieve latest blog posts
		$sql = "SELECT * FROM blog_posts ORDER BY date DESC LIMIT 3";

		// Prepare the SQL statement
		$stmt = $pdo->prepare($sql);

		// Execute the query
		$stmt->execute();

		// Check if there are any blog posts
		if ($stmt->rowCount() > 0) {
			// Output data of each row
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo '
            <div class="carousel-item">
                <div class="row">
                    <div class="col post_082_grid">
                        <div class="post_082_wrapper">
                            <div class="post_082_image">
                                <img src="' . $row["image_url"] . '" alt="' . $row["title"] . '">
                            </div>
                            <div class="post_082_content post_082_content_col_3">
                                <h4>' . $row["title"] . '</h4>
                                <h5><a href="blog-single.html">' . $row["content"] . '</a></h5>
                                <a href="blog-single.html">' . $row["date"] . '</a>
                                <div class="post_082_footer">
                                    <a href="blog-single.html"><span class="fa fa-heart-o"></span>' . $row["likes"] . ' likes</a>
                                    <a href="blog-single.html"><span class="fa fa-comment-o"></span>' . $row["comments"] . ' comments</a>
                                    <a href="blog-single.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
			}
		} else {
			echo "0 results";
		}
	} catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}

	// Close the connection
	$conn = null;
	?>

	<!-- End recent-blog Area -->
	<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
	<script src="https://mediafiles.botpress.cloud/9244075a-f128-4d18-b8e4-4517cc6ff3e4/webchat/config.js"
		defer></script>


	<!-- start footer Area -->
	<footer class="footer-area">
		<div class="container">

			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Travelish</h6>
						<p>
							The world has become so fast paced that people don’t want to stand by reading a page of
							information, they would much rather look at a presentation and understand the message. It
							has to understand the message.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Navigation Links</h6>
						<div class="row">
							<div class="col">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">Feature</a></li>
									<li><a href="about.html">Services</a></li>
									<li><a href="hotels.html">Hotels</a></li>
									<li><a href="elements.html">Portfolio</a></li>
								</ul>
							</div>
							<div class="col">
								<ul>
									<li><a href="about.html">Team</a></li>
									<li><a href="about.html">Pricing</a></li>
									<li><a href="blog-home.html">Blog</a></li>
									<li><a href="packages.html">Packages</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>
							For business professionals caught between high OEM price and mediocre print and graphic
							output and to understand the message.
						</p>
						<div id="mc_embed_signup">
							<form target="_blank"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="subscription relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Email Address '" required="" type="email">
									<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">InstaFeed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div class="copyrights">
		<div class="container">
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-8 col-sm-12 footer-text m-0">
					Copyright &copy; All rights reserved.
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="chat-button-container">
				<button class="chat-button" onclick="showPopup()">Chat with our AI Bot</button>
				<div class="chat-popup" id="chatPopup">
					<span class="close-btn" onclick="hidePopup()">&times;</span>
					<p>Welcome to our AI Chat Bot! How can I assist you?</p>-->
	<!-- Add your chatbot interface here if desired -->

	</div>
	</div>


	<!-- End footer Area -->


	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/responsive_bootstrap_carousel.js"></script>
	<script src="js/blog_slider_min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>