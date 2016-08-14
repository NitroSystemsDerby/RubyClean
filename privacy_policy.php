<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Ruby Clean</title>
	<link rel="stylesheet" type="text/css" href="CSS/main_style.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="/JS/pages.js" type="text/javascript"></script>
</head>
<body>
	<div class="wrapper">
		<div class="head">
			<div class="logo">
				<img src="IMG/Logo/logo.png" alt="Ruby Clean"/>
				<h1>Ruby Clean</h1>
			</div>
			<div class="menu">
				<ul>
					<li><a href="/">Home</a></li><li>
					<a href="/testimonials.php">Testimonials</a></li><li>
					<a href="/pricing.php">Pricing</a></li><li>
					<a href="/contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<h2 class="page"> Privacy Policy </h2>
			<div class="contain">
				<?php 
					include_once './pages/privacy_policy.php';
				?>
			</div>
		</div>
		<div class="footer">
			<div class="fbox">
				<p><a href="/site_map.php" class="int">Site Map</a></p>
				<p><a href="/privacy_policy.php" class="int">Privacy Policy</a></p>
				<p><a href="/terms_of_use.php" class="int">Terms of Use Policy</a></p>
			</div><div class="fbox">
				<a href="/index.php">
					<img src="IMG/Logo/logo_small.png" alt="Ruby Clean"/>
				</a>
				<p>@: <a href="mailTo:contact@rubyclean.co.uk">contact@rubyclean.co.uk</a></p>
				<p>&copy;Ruby Clean 2016</p>
				<p>This is developed and maintained by <a target="_blank" href="http://www.nitrosystems.co.uk">Nitro Systems</a></p>
			</div>
			<div class="clear">
			 
			</div>
		</div>
	</div>
</body>
</html>