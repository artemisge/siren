<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf 8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="This page is about life below water and how to protect it from human behavior">
		<meta name="keywords" content="sealife, marine, water">
		<meta name="author" content="C. Christidis, A. Georgopoulou, C. Pozrikidou, M. Zikou">

		<title>Siren</title>

		<link rel="icon" type="image/png" href="../imgs/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="../css/styles.css" />
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<script src="../js/javascript.js"> </script>
	</head>

	<body>
		<!-- Loading icon -->
		<div class="loader"></div>

		<div class="navbar">
			<div class="nav-bar-siren">
				<div class="siren-icon"></div>
				<a href="home.php" class="active">SIREN</a>
			</div>

			<div class="right-navbar" id="navbarID">
				<ul id="nav">
					<li><a href="home.php">Home</a></li>
					<li><a id="sub-menu-hover">Learn More</a>
						<ul id="sub-menu">
							<li><a href="causes.php">Causes</a> </li>
							<li><a href="effects.php">Effects</a></li>
							<li><a href="resources.php">Resources</a></li>
						</ul>
					</li>
					<li><a href="help.php">How to help</a></li>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="login.php">Login/Register</a></li>

				</ul>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<div class="menu-icon"></div>
				</a>

			</div>
		</div>

		<div id="page-view">
			<div id="home-view-title2">Effects</div>
		</div>

		<!--Info section -->
		<section class="info">
			<div class="container">
				<div class="description-container">

					<div class="description-container-text">
						<img src="../imgs/eating-plastic.jpg" alt="sewage" class="img-responsive floating-image right">
						<h3 class="container-title">Plastic waste</h3>
						<p>There are an estimated 13 million metric tons of plastic being disposed of in the ocean each
							year. As a result, fish, sea birds, sea turtles and other marine animals
							are entangled in the debris. When these animals ingest plastic, the waste clogs their stomach,
							causing them to starve to death. About 60% of all seabird species have
							ingested pieces of plastic, and scientists predict the figure will rise to 99% by 2050.Also,
							plastic waste accelerates the growth of pathogens in the ocean. If the
							pathogens come in contact with corals, there is an 89% chance of the corals contracting
							diseases, in comparison to the 4% likelihood for corals that do not. Not to
							mention that plastics do not fully decompose even after hundreds of years. For this reason, some
							of the plastic ingested by the fish and other marine mammals that
							we eat ends up on our tables. We, therefore, end up eating the plastic debris we dumped on the
							oceans.
						</p><br>
						<hr>
						<hr>
					</div>

					<div class="description-container-text">
						<img src="../imgs/oil.jpg" alt="sewage" class="img-responsive floating-image left">
						<h3 class="container-title">Oil spillage</h3>
						<p>Oil spills are incredibly dangerous to marine life and coral reefs. When exposed to oil, adult
							fish may experience reduced growth, enlarged livers,
							changes in heart and respiration rates, fin erosion, and reproduction impairment. Fish eggs and
							larvae can be especially sensitive to lethal and sublethal impacts.
							Moreover, oil floats on water and creates a layer that denies sunlight from penetrating through
							the water.
							In such cases, marine plants die as they cannot make food through photosynthesis, which requires
							sunlight.</p><br>
						<hr>
						<hr>
					</div>

					<div class="description-container-text">
						<img src="../imgs/acid.jpg" alt="sewage" class="img-responsive floating-image right">
						<h3 class="container-title">Ocean acidification</h3>
						<p>Ocean acidification negatively affects marine life, causing organisms' shells and skeletons made
							from calcium carbonate to dissolve. The more acidic the ocean,
							the faster the shells dissolve. Animals that produce calcium carbonate structures have to spend
							extra energy either repairing their damaged shells or thickening
							them to survive. Using energy for this could impact the animals' abilities to grow and
							reproduce. Animals able to survive and reproduce in more acidic waters are
							likely to become smaller, potentially affecting the food chain that relies on them.
						</p><br><br><br>
						<hr>
						<hr>
					</div>

					<div class="description-container-text">
						<img src="../imgs/turtle.jpg" alt="sewage" class="img-responsive floating-image left">
						<h3 class="container-title">Overfishing</h3>
						<p>Overfishing can impact entire ecosystems. It can change the size of fish remaining, as well as
							how they reproduce and the speed at which they mature. When
							too many fish are taken out of the ocean it creates an imbalance that can erode the food web and
							lead to a loss of other important marine life, including vulnerable
							species like sea turtles and corals.</p>
						<p>Decades of destructive fishing has resulted in the precipitous decline of key fish stocks such as
							bluefin tuna and Grand Banks cod, as well as collateral impacts
							to other marine life. Hundreds of thousands of marine mammals, seabirds, and sea turtles are
							captured each year, alongside tens of millions of sharks. Many of these
							species are endangered and protected, while some such as the vaquita, Eastern Pacific
							leatherback turtle, and Maui dolphin are on the brink of extinction.
						</p><br>
					</div>

				</div>

				<!-- CAROUSEL -->
				<div class="carousel-wrap">
					<h1>Related Articles</h1>
					<div class="carousel" data-flickity='{"wrapAround": true, "autoPlay": true }'>
						<div class="carousel-cell">
							<a href="https://www.nationalgeographic.com/environment/article/plastic-pollution" target="_blank"><img class="carousel-image" src="../imgs/plastic_waste_natgeo.PNG"></a>
							<div class="carousel-article-title">The world's plastic pollution crisis explained</div>
						</div>
						<div class="carousel-cell">
							<a href="https://ocean.si.edu/ocean-life/invertebrates/ocean-acidification" target="_blank"><img class="carousel-image" src="../imgs/coral-reef.jpg"></a>
							<div class="carousel-article-title">Ocean Acidification</div>
						</div>
						<div class="carousel-cell">
							<a href="https://www.nationalgeographic.com/environment/article/critical-issues-marine-pollution" target="_blank"><img class="carousel-image" src="../imgs/marine_polution.PNG"></a>
							<div class="carousel-article-title">Marine pollution, explained</div>
						</div>
						<div class="carousel-cell">
							<a href="https://www.nationalgeographic.com/environment/article/great-barrier-reef-restoration-transplanting-corals" target="_blank"><img class="carousel-image" src="../imgs/coral_reef.PNG"></a>
							<div class="carousel-article-title">Can new science save dying coral reefs?</div>
						</div>
						<div class="carousel-cell">
							<a href="https://www.nationalgeographic.com/environment/article/critical-issues-overfishing" target="_blank"><img class="carousel-image" src="../imgs/overfishing_natgeo.PNG"></a>
							<div class="carousel-article-title">Plenty of Fish in the Sea? Not Always.</div>
						</div>
						<div class="carousel-cell">
							<a href="https://www.noaa.gov/education/resource-collections/ocean-coasts/oil-spills" target="_blank"><img class="carousel-image" src="../imgs/oil_spills.PNG"></a>
							<div class="carousel-article-title">Oil spills</div>
						</div>
						
						
					</div>
				</div>
				<!-- END CAROUSEL -->

			</div>
			
		</section class="info">
		<!-- ./info section-->

		<!--footer-->
		<footer>
			<div class="footer-content">
				<div class="row">
					<div class="col about">
						<h4>About Us</h4>
						<p class="footer-about">We are a group of university students hoping to motivate you to take action.
							We are providing you
							with a bunch of useful articles, documentaries and links to research the matter yourself.
							<br> We should not sit back and watch our planet get destroyed.<br>We must protect it.
						</p>
					</div>

					<div class="col contact-info">
						<h4 class="contact-footer">Contact Us</h4>
						<ul>
							<li><span><i class="fas fa-map-marker-alt"></i>&nbsp; Thessaloniki, Greece</span></li>
							<li><span><i class="fas fa-phone"></i>&nbsp; 2310-097834</span></li>
							<li><span><i class="fas fa-envelope"></i>&nbsp; info@sirenauth.com</span></li>
						</ul>
					</div>

					<div class="col follow-us">
						<h4 class="follow-footer">Follow us</h4>
						<div class="social-links">
							<a href="https://www.facebook.com/siren.auth/" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="https://twitter.com/AuthSiren" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="https://www.instagram.com/siren_auth/" target="_blank"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					&copy; Siren 2021
				</div>
			</div>
		</footer>
		<!-- /.footer -->

	</body>

</html>