<?php
session_start();
require_once "./config.php";
//if not logged in
if (!isset($_SESSION["username"])) {
	header("location: ./index_cus.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&family=Playfair+Display&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<nav>
		<div class="navbar">
			<div class="user-profile">
				<span class="welcome-message"> Welcome, <?php if (isset($_SESSION["username"])) {
															echo $_SESSION["name"];
														} ?>
				</span>
			</div>
			<ul class="nav-menu">
				<li><a href="./cus_dashboard.php">Dashboard</a></li>
				<li><a href="./index.php">Home</a></li>
				<li><a href="./index.php">Logout</a></li>
			</ul>
		</div>
	</nav>
	<link rel="stylesheet" type="text/css" href="./cus_dashboard.css">
</head>

<body>
	<div class="container mt-5">
		<h1 class="text-center mb-4"></h1>
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<img src="Images/5.jpg">
						<h5 class="card-title"> Prediction of production </h5>
						<p class="card-text">Let's check your production quantity </p><br>
						<a href="" class="btn btn-primary"> Predict </a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<img src="Images/4.jpg">
						<h5 class="card-title"> Dieases Outbreaks </h5>
						<p class="card-text">Let's check your bee's dieases </p><br>
						<a href="#" class="btn btn-primary"> Check </a>
					</div>
				</div>
			</div>









			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

			<!-- Footer -->
			<!--<footer class="bg-dark p-2 text-center">
				<div class="container">
					<div class="text-white mb-3 mb-md-0">
						Copyright © HoneyBee 2023. All rights reserved. Developed by Chamali Senanayake
					</div>
				</div>
			</footer>-->

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>
</body>

</html>