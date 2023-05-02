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
	<title>Dashboard - BeeHoney </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script>
		function predict() {
			window.location.href = "prediction_index.html";
		}

		function check() {
			window.location.href = "BeeDisease.html";
		}
	</script>

	<link rel="stylesheet" type="text/css" href="./cus_dashboard.css">
</head>

<body>
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
				<li><a href="http://localhost/BeeHoneyPredictionSystemWebApp/index.php">Home</a></li>
				<li><a href="http://localhost/BeeHoneyPredictionSystemWebApp/index.php">Logout</a></li>
			</ul>
		</div>
	</nav>
	<div class="container mt-5">
		<h1 class="text-center mb-4"></h1>
		<div class="row">

			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<img src="Images/5.jpg">
						<h5 class="card-title"> Prediction of production </h5>
						<p class="card-text">Check your production quantity </p><br>
						<button type="button" class="btn btn-primary" onclick="predict()">Predict</button>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<img src="Images/4.jpg">
						<h5 class="card-title"> Dieases Outbreaks </h5>
						<p class="card-text">Check your bee's dieases </p><br>
						<button type="button" class="btn btn-primary" onclick="check()">Check</button>

					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="bg-dark p-2 text-center">
		<div class="container">
			<div class="text-white mb-3 mb-md-0">
				Copyright©HoneyBee 2023. All rights reserved. Developed by Chamali
				Senanayake
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>
</body>

</html>