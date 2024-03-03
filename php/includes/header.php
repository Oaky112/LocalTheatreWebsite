<!-- Creating old navigation header  -->
<!-- Mostly commented out -->
<?php
echo '
	<nav>
		<ul>
			<li><a href="../index.php">Home</a></li>
			<li><a href="../view.php">View Shows</a></li>
			<li><a href="../register.php">Register Account</a></li>
			<li><a href="../login.php"> ';
			// Setting session for user to begin  login and log out
				if(isset($_SESSION['username'])){
							echo"Log out " . $_SESSION['username'];
					}else{
							echo "Log into Account";}
echo '
	
				
			</a></li>
		</ul>
	</nav>'
?>

	
