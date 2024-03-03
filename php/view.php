<!-- Establishing connection to connection.php   -->
<?php
include_once('../private/connection.php');

// Connecting to "lopcaltheatre" database
// Selecting * from shows table 
$sql = "SELECT * FROM shows";
$result = $conn->query($sql)
?>

<!-- Setting Doc type as HTML -->
<!doctype html>
<html lang="en">

<!-- Title for webpage as local theatre -->
<meta charset="utf-8">
<title>localTheatre</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="localTheatre" name="keywords">
<meta content="localTheatre" name="description">

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Flaticon Font -->
<link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">


<!-- Setting up Font Styles  -->
<style>
	* {
		margin: 0px;
		padding: 0 0 0 0;
		box-sizing: border-box;
		font-family: "Roboto", sans-serif;
	}

	.div2 {
		margin: auto;
		align-items: center;


	}

	.div1 {
		margin: 0 !important;
		text-align: center;
		padding: 55px 55px 55px 55px;
	}

	.div {
		margin: 0 !important;
		text-align: center;
		padding: 55px 55px 55px 55px;
	}

	/* spacing */

	table {
		table-layout: fixed;
		width: 100%;
		border-collapse: collapse;
		border: 3px solid black;

	}

	thead th:nth-child(1) {
		width: 30%;
	}

	thead th:nth-child(2) {
		width: 20%;
	}

	thead th:nth-child(3) {
		width: 15%;
	}

	thead th:nth-child(4) {
		width: 35%;
	}

	th,
	td {
		padding: 20px;
	}
	/* Table alignment and background */
	/* typography, p, h, div */

	html {
		font-family: 'helvetica neue', helvetica, arial, sans-serif;
	}

	thead th,
	tfoot th {
		font-family: 'Rock Salt', cursive;
	}

	th {
		letter-spacing: 2px;
	}

	td {
		letter-spacing: 1px;
	}

	tbody td {
		text-align: center;
	}

	tfoot th {
		text-align: right;
	}

	/* graphics and colors */

	body {
		background: url(/img/theatre-inside-1920.jpg);
		background-repeat: no-repeat;
		background-size: cover;
	}

	table {
		background: #ffff;
	}

	p {
		color: #ffff;
		text-shadow: black;
		font-size: 5em;
		text-shadow: 2px 2px 4px black, 0 0 1.5em black, 0 0 0.5em black;
	}

	th {
		border-bottom: 2px solid black;
	}

	.form1 {
		display: inline-block;
		border-radius: 4px;
		background-color: #ffff;
		border: none;
		color: black;
		text-align: center;
		font-size: 28px;
		padding: 20px;
		width: 200px;
		transition: all 0.5s;
		cursor: pointer;
		margin: 5px;
	}

	.form2 {
		display: flex;
		align-items: center;
		justify-content: center;

	}

	.gos {
		padding: 40px 0px 31px 0px;
		text-align: center !important;
		color: white !important;

	}

</style>
</head>

<body>
	<!-- Div name of table -->
	<div class='div1'>
		<p>Current Shows</p>
		<div class='div2'>
			<table>
				<tr>
					<!-- Table rows -->
					<th>Show Name</th>
					<th>Show Type</th>
					<th></th>
					<th></th>
				</tr>

				<!-- Php fetching all details from snhow_name and show-type connected to auto-increment ID primary key -->
				<?php
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {

						echo "<tr>
						<td> <a href='edit.php?id=" . htmlspecialchars($row["show_id"]) . "'>" . $row["show_name"] . "</a></td>
						<td>" . $row["show_type"] . "</td>
						<td><a class='confirmEdit' href='edit.php?id=" . htmlspecialchars($row["show_id"]) . "'>Edit</a></td>
						<td><a class='confirmDelete' href='delete.php?id=" . htmlspecialchars($row["show_id"]) . "'>Delete</a></td>
						
				</tr>";
					}
					// If no results of shows found echo out no results 
				} else {
					echo "0 results";
				}
				$conn->close();
				?>
			</table>
		</div>
	</div>
	<script type="text/javascript">
		//gets all elements with the class name confirmDelete
		var elems = document.getElementsByClassName("confirmDelete");

		for (var i = 0; i < elems.length; i++) {
			//for each instance, add an event listener
			//listen for click, activate confirmDelete);
			elems[i].addEventListener("click", confirmDelete, );
		}

		function confirmDelete(e) {
			//prompt the user and if they cancel 
			if (!confirm("Do you want to delete this show?")) {
				e.preventDefault();
			}
		}
	</script>
	<div>
		<form class="form2" method="get" action="/php/addTodB.php">
			<button class="form1" type="submit">Add New Show</button>
	</div>
	<div class="gos">
		<a href="../index.php" class="hoverPoop signPoop"> Return to home</a>
	</div>
	</form>



</body>

</html>