<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Create connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>
