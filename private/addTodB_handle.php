<!-- Establishing connection to connection.php   -->
<?php
include_once('../private/connection.php');

// POSTing request method 
// Verifying adding to database values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$showname = test_input($_POST["show_name"]);
	$showtype = test_input($_POST["show_type"]);
	

// Getting show_name and show_type

	echo $showname;
	echo $showtype;


	// Querying database values with the users input	
	if ($showname === "" || $showtype === "") {
		// Telling user the password and username input cannot be left blank
		echo "showname and showtype cannot be blank";
	} else {
		$sql = "INSERT INTO shows (show_name, show_type ) VALUES ('$showname','$showtype')";
		$conn->query($sql);
		
	}
}


//Allowing connection to addTodB 
header("Location: ../php/addTodB.php");


//closing the connection
$conn->close();
?>