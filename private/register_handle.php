<!-- Establishing connection to connection.php   -->
<?php
include_once('../private/connection.php');

// POSTing request method 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = test_input($_POST["username"]);
	$email = test_input($_POST["email"]);
	$password = test_input($_POST["password"]);

//Echoing field vairables 	
	echo $username;
	echo $email;
	echo $password;

//Hashing the users inputted password
	
	$hash = password_hash($password, PASSWORD_DEFAULT);
	if ($username === "" || $email === ""|| $password === ""){
// Telling user the password and username input cannot be left blank
		echo "Fields cannot be blank";
		
		
	} else {
		$sql = "INSERT INTO login (username, email, password) VALUES ('$username','$email','$hash')";
		$conn->query($sql);
	}
}

//Allowing connection to login handler
include_once('../private/login_handle.php');
//header("Location: ../index.php");

/*
$sql = "INSERT INTO login (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hash);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["pass1"]);
	
	$hash = password_hash($password, PASSWORD_DEFAULT);
	if ($username === "" || $password === ""){
		echo "username and password cannot be blank";
		header ("refresh:2; url=../php/register.php");
		
	}
	else{
		$stmt->execute();
		echo "Sucess";
		
	}
}
*/


//$stmt->close();
//closing the
$conn->close();
?>
