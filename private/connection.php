<!-- Connection to "localtheatre" database with PHPMyAdmin -->
<!-- Servername - Usernames- Password- dbname -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "localtheatre";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Function to connect to local database
function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;

}
?>
	