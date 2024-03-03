<!-- Establishing connection to connection.php   -->
<?php
include_once('../private/connection.php');
$show_id = $_GET["id"];

//DELETE request method for show_id, show_name, show_type
$delete = $conn->prepare("DELETE FROM shows WHERE show_id = ? LIMIT 1");
$delete->bind_param("i", $show_id);
$delete->execute();
if ($delete->affected_rows > 0) {
	//Echoing out item been deleted 
	echo "Show deleted successfully";
	header("refresh:2; url= view.php");
	//Else echo out something went wrong
} else {
	echo "Something went wrong";
}
//Closing connection
$conn->close();

?>

<!----------------------------------------------------------------------------->

<!-- Setting Doc type as HTML -->
<!doctype html>
<html>
<!-- Title for webpage as editing database-->
<head>
	<meta charset="utf-8">
	<title>Removing from the database</title>
</head>

<body>

	<script type="text/javascript">
		//gets all elements with the class name confirmDelete
		var elems = document.getElementByIdByClassName("confirmDelete");

		for (var i = 0; i < elems.length; i++) {
			//for each instance, add an envent listener
			//listen for click, activate confirmDelete function,
			elems[i].addEventListener("click", confirmDelete);
		}

		function confirmDelete(e) {
			//prompt the user and if they cancel, stop the navigation
			if (!confirm("Do you want to delete this show?")) {
				e.preventDefault();
			}
		}
	</script>
</body>

</html>