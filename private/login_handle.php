<!-- Establishing connection to connection.php   -->
<?php
require_once('../private/connection.php');
session_start();

// POSTing request method 
// Verifying login to database values

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	
// Querying database values with the users input	
	$query = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username'");
	//fetching assocsiated values
	$rows = mysqli_fetch_assoc($query);
	$row = mysqli_num_rows($query);

// Validating password 	
	if (password_verify($password, $rows['password']) && $row ==1){
		$_SESSION['username'] = $rows['username'];
		header("Location: /index.php");
// Login in if correct password redirect to logged in session of index.php
// Else displayt invalid password
// Allow another attempt
		
	}else{
		echo "Invalid Password";
		
	}
	
}


?>