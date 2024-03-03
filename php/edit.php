<!-- Establishing connection to connection.php   -->
<?php
include_once('../private/connection.php');

//POST request method for show_id, show_name, show_type
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$show_id = $_POST["show_id"];
	$name = $_POST["show_name"];
	$type = $_POST["show_type"];

	// SQL UPDATE query sets snow_name, show_type where the show_id is selected
	$sql = "UPDATE shows SET show_name ='" . $name . "', show_type = '" . $type . "' WHERE show_id = '" . $show_id . "'";
	$result = $conn->query($sql);

	header("Location: view.php");
	
} else {
	$id = $_GET["id"];
	$sql = "SELECT * FROM shows WHERE show_id = $id";
	$result = $conn->query($sql);

	$row = $result->fetch_assoc();
}
function test($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

//Closing connection
$conn->close();

?>

<!-- Setting Doc type as HTML -->
<!doctype html>
<html>
<!-- Title for webpage as editing database-->
<head>
	<meta charset="utf-8">
	<title>Edit Data in the database</title>
</head>
<title>Edit Data in the database</title>

<!-- Setting up Font Style  -->
<!-- Inherited from style.css -->
<style>
	* {
		margin: 0px;
		padding: 0 0 0 0;
		box-sizing: border-box;
		font-family: "Roboto", sans-serif;
	}

	.Anusbg {
		width: 100%;
		margin: 0 auto;

	}

	.bg {
		background-image: url("/img/theatre-inside-1920.jpg");
		width: 100%;
		min-height: 100vh;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		align-items: center;
		padding: 15px;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	}

	.anusdiv {
		width: 500px;
		background: #fff;
		border-radius: 10px;
		overflow: hidden;
		padding: 55px 55px 55px 55px;


	}

	/* Form styles */
	.loginForm {
		width: 100%;

	}

	.loginTitle {
		display: block;
		font-size: 28px;
		color: #333333;
		line-height: 1.2;
		text-align: center;
		padding-bottom: 49px;
		padding-top: 50px;
	}

	.labelUsername {
		font-size: 14px;
		color: #333333;
		line-height: 1.5;
		padding-left: 7px;
	}

	.labelPassword {
		font-size: 14px;
		color: #333333;
		line-height: 1.5;
		padding-left: 7px;
	}

	.loginSubmit {
		font-size: 16px;
		color: #fff;
		line-height: 1.2;
		text-transform: uppercase;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 0 20px;
		width: 100%;
		height: 50px;
		background: rgb(0, 0, 0);
		background: linear-gradient(90deg, #E45F4E 0%, black 100%);

	}

	.header {
		position: relative;
		width: 100%;
		border-bottom: 2px solid #d9d9d9;
		margin-bottom: 23px;
	}

	.label {
		font-size: 14px;
		color: #333333;
		line-height: 1.5;
		padding-left: 7px;

	}

	/* Set up header, p and input style */
	.input {
		font-size: 16px;
		color: #333333;
		line-height: 1.2;
		display: block;
		width: 100%;
		height: 55px;
		background: transparent;
		padding: 0 7px 0 10px;
		border: 2px solid black;
	}

	.pos {
		padding: 8px 0px 31px 0px;
		text-align: right !important;

	}

	.gos {
		padding: 40px 0px 31px 0px;
		text-align: right !important;

	}

	.ltTitle {
		margin: 0 !important;
		text-transform: capitalize !important;
		font-style: italic !important;
		color: #E45F4E;
		text-decoration: none;
		background-color: transparent;
		font-weight: 700 !important;
		font-size: 4rem;
		font-family: "Roboto", sans-serif;
		line-height: 1.2;
		color: #262626;
		text-transform: uppercase;
		text-align: center;
	}

	.text-primary {
		color: #E45F4E !important;
		box-sizing: border-box;

	}

	.text-secondary {
		display: block;
		font-size: 32px;
		color: #333333;
		line-height: 1.2;
		text-align: center;
		padding-bottom: 49px;
		padding-top: 50px;
	}

	.hoverPoop {
		font-size: 14px;
		line-height: 1.7;
		color: #666666;
		margin: 0px;
		transition: all 0.4s;
		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		-moz-transition: all 0.4s;

	}

	.hoverPoop:hover {
		text-decoration: none;
		color: #E45F4E;

	}

	.dos {
		padding-top: 30px;
		text-align: center;
	}
</style>
</head>

<body>
	<!-- Aligning form inputs -->
	<form class='edit' action='edit.php' method='post'>
		<input type="hidden" name="show_id" value="<?php echo $id; ?>">
		<div class="Anusbg">
			<!-- Styles from css -->
			<div class="bg">
				<div class="anusdiv">
					<h1 class="ltTitle">
						<!-- Logo of local theatre -->
						<span class="text-primary">local</span>Theatre <span class="text-secondary">Edit a show</span>
					</h1>
					<br>
					<!-- Styles from css -->
					<!-- Input: Username -->
					<div class='header username'>
						<span class='label username'>Show Name</span>
						<input class='user input' type="text" name="show_name" value="<?php echo $row["show_name"]; ?>" required>
					</div>
					<!-- Styles from css -->
					<!-- Input: Password -->
					<div class='header password'>
						<span class='label password'>Show Type</span>
						<input class='password input' type="text" name="show_type" value="<?php echo $row["show_type"]; ?>" required>
					</div>
					<button class='loginSubmit' name='submit'>Edit</button>
	</form>
	<!-- Styles from css -->
	<div class="gos">
		<a href="../php/view.php" class="hoverPoop signPoop"> Return to view</a>
	</div>
	</div>
	</div>
	<p class="m-0 text-white">
		<!-- Adding copyright legislation -->
		&copy; <a class="text-white font-weight-bold" href="#">localTheatre</a>. All Rights Reserved. Designed by Joshua Oakman
	</p>
	</div>
</body>

</html