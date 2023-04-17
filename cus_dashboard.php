<?php
session_start();

// Check if user is logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("index.html");
    exit;
}

// Connect to database and retrieve user information
// Replace with database details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "honeybeedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve user information
$user_name = $_SESSION["name"];
$sql = "SELECT * FROM customer_tbl WHERE name = $user_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User information found
    $row = $result->fetch_assoc();
    $username = $row["username"];
    //$email = $row["email"];
   // $profile_image = $row["profile_image"];
} else {
    // User information not found
    echo "User information not found.";
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
		<h1>Welcome, <?php echo $username; ?>!</h1>
		<div class="profile">
			<?php if($profile_image) { ?>
				<img src="<?php echo $profile_image; ?>" alt="Profile Image">
			<?php } ?>
			<p>Username: <?php echo $username; ?></p>
			<p>Email: <?php echo $email; ?></p>
		</div>
	</main>
</body>
</html>
