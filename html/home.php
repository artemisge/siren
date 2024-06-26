<?php include 'server.php'?>

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
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="../js/javascript.js"> </script>
</head>

<body>
	<!-- Loading icon -->
	<div class="loader"></div>

	<!-- Navigation Bar -->
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

				<?php if (isset($_SESSION['username']) && ($_SESSION['username'] == 'admin')): ?>
				<li><a href="admin.php"><?php echo $_SESSION['username']; ?></a></li> <?php endif?>
				<?php if (isset($_SESSION['username']) && ($_SESSION['username'] != 'admin')): ?>
				<li><a href="profile.php">
						<?php 
						$userId = $_SESSION['userId'];

						$query = "SELECT * FROM user WHERE id = $userId";
						$result = mysqli_query($db, $query);
						$image = mysqli_fetch_assoc($result);
						$path = $image['imagePath'];
						$username =  $_SESSION['username'];

						echo "<div class=\"nav-name\"> $username <img id=\"photo-prof-nav\" src=\"$path\"> </div>";

						?></a></li><?php endif?>
				<?php if (!isset($_SESSION['username'])): ?>
				<li><a href="login.php">Login/Register</a></li> <?php endif?>

			</ul>
			<a href="javascript:void(0);" class="icon" onclick="hamburger()">
				<div class="menu-icon"></div>
			</a>

		</div>
	</div>

	<!-- success or error messages, they appear based on occasion-->
	<?php
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
	<?php if (strpos($url, "signup=success") == true): ?>
	<div class="alert success">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
		<?php echo "You are now logged in!"; ?>
	</div> <?php endif?>

	<?php if (strpos($url, "login=success") == true): ?>
	<div class="alert success">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
		<?php echo "You are now logged in!"; ?>
	</div> <?php endif?>

	<?php if (strpos($url, "reset=success") == true): ?>
	<div class="alert success">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
		<?php echo "You've successfully reset your password"; ?>
	</div> <?php endif?>

	<?php if (strpos($url, "access=denied") == true): ?>
	<div class="alert">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
		<?php echo "You don't have admin rights access"; ?>
	</div> <?php endif?>

	<!--ART-->
	<div id="home-view">
		<div id="home-view-title">SIREN</div>
		<div id="home-view-title2">Endangered sea life</div>
		<button type="button" id="home-view-button" onclick="smoothScroll(document.getElementById('aboutSeaLife'))"
			style="margin-top:100px">Dive
			to learn more</button>
	</div>

	<!--About section -->
	<div class="page-wrapper">
		<div class="info-intro">
			<img src="../imgs/siren.png" alt="siren-logo" class="siren">
			<div class="info-intro-text">
				<h1 class="about-title">About sea life</h1>
				<p class="about-p">Marine life is in danger and the threats it's facing are growing
					every second. Every year billions of harmful chemicals, trash and other pollutants enter the ocean.
					Marine pollution is a growing ongoing problem in today's world and it impacts not only the
					environment and
					marine life but also modern economies. That along with unregulated fishing can lead to the
					disturbance of marine biodiversity and put marine species in danger of extinction.
				</p>
			</div>
		</div>

		<div id="aboutSeaLife">
			<div class="flex-images">
				<div class="home-images" id="img1">
					<div class="overlay">
						<div class="animal-label">ENDANGERED</div>
						<div class="text-animal">The whale shark is the biggest fish and shark in the world. These
							gentle marine giants roam the oceans around the globe, generally alone.</div>
					</div>
				</div>
				<div class="home-images" id="img2">
					<div class="overlay">
						<div class="animal-label">ENDANGERED</div>
						<div class="text-animal">Sea turtles are the live representatives of a group of reptiles that
							have existed on Earth and traveled our seas for the last 100 million years. </div>
					</div>
				</div>
				<div class="home-images" id="img3">
					<div class="overlay">
						<div class="animal-label">ENDANGERED</div>
						<div class="text-animal">The sea lion is the most common mammal in the Galápagos.</div>
					</div>
				</div>
				<div class="home-images" id="img4">
					<div class="overlay">
						<div class="animal-label">ENDANGERED</div>
						<div class="text-animal">Blue whales are the largest animals ever known to have lived on Earth.
						</div>
					</div>
				</div>
				<div class="home-images" id="img5">
					<div class="overlay">
						<div class="animal-label">ENDANGERED</div>
						<div class="text-animal">Hector’s dolphins are the smallest and rarest marine dolphins in the
							world.</div>
					</div>
				</div>
			</div>
		</div>

		<div class="home-page-stats-container">
			<div class="home-page-stats" id="home-page-stat1">
				<div class="stats-icon"></div>
				<div class="stats-text">100 million marine animals die each year from plastic waste alone.</div>
			</div>
			<div class="home-page-stats" id="home-page-stat2">
				<div class="stats-icon"></div>
				<div class="stats-text">70% of our debris sinks into the ocean's ecosystem, 15% floats, and 15%
					lands on our beaches.</div>
			</div>
			<div class="home-page-stats" id="home-page-stat3">
				<div class="stats-icon"></div>
				<div class="stats-text">In terms of plastic, 8.3 million tons are discarded in the sea yearly. Of
					which, 236,000 are ingestible microplastics that marine creatures mistake for food.</div>
			</div>
		</div>
	</div>

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
						<li><span style="text-transform: lowercase;"><i class="fas fa-envelope"></i>&nbsp;
								info@sirenauth.com</span></li>
					</ul>
				</div>


				<div class="col follow-us">
					<h4 class="follow-footer">Follow us</h4>
					<div class="social-links">
						<a href="https://www.facebook.com/siren.auth/" target="_blank"><i
								class="fab fa-facebook-f"></i></a>
						<a href="https://twitter.com/AuthSiren" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/siren_auth/" target="_blank"><i
								class="fab fa-instagram"></i></a>
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
