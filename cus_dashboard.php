
<?php
session_start();
require_once "./config.php";
if(isset($_SESSION ["username"])){
	header("location: ./index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="cus_dashboard.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h3>Welcome, <?php if(isset($_SESSION["username"])){echo $_SESSION["name"];}  ?></h3>
		
	</main>
</body>
</html>
