<?php
$servername ='localhost';
$username = 'root';
$password = '';
$dbname = 'beehoneydb';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
  echo " Connection successfully";
}else{
  die(mysqli_error ($con));
}
?>
