<!-- Setting Doc type as HTML -->
<!doctype html>
<html lang="en">

<head>
	<!-- Title for webpage as Register User-->
	<meta charset="utf-8">
	<title>Register User</title>

	<!-- Setting up Font Styles  -->
	<!-- Inherited from style.css -->
	<link rel="stylesheet" href="./style.css">
	<script defer src="../private/passVal.js"></script>

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
		
		#form{
			padding: 20px;
			border-radius: 4px;
			font-size: 12px;
		}
		
		
		.registerForm {
			width: 100%;

		}

		.registerTitle {
			display: block;
			font-size: 28px;
			color: #333333;
			line-height: 1.2;
			text-align: center;
			padding-bottom: 20px;
			padding-top: 50px;
		}


		.registerSubmit {
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

		/* Set up header, p and input style */

		.label {
			font-size: 14px;
			color: #333333;
			line-height: 1.5;
			padding-left: 7px;

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

		.input-control {
			position: relative;
			width: 100%;
			margin-bottom: 23px;
			display: flex;
			flex-direction: column;
			font-size: 16px;
			color: #333333;
			line-height: 1.2;
			display: block;
			width: 100%;
			height: 55px;
			background: transparent;
			padding: 0 7px 0 10px;
		}

		.input-control input {
			border: 2px solid #f0f0f0;
			border-radius: 4px;
			display: block;
			font-size: 12px;
			padding: 10px;
			width: 100%;
		}

		.input-control input:focus {
			outline: 0;
		}

		.input-control.success input {
			border-color: #09c372;
		}

		.input-control.error input {
			border-color: #ff3860;
		}

		.input-control .error {
			color: #ff3860;
			font-size: 9px;
			height: 13px;
		}
	</style>


</head>

<body>
	<!-- Aligning form inputs -->
	<div class="Anusbg">
		<div class="bg">
			<div class="anusdiv">
				<h1 class="ltTitle">
					<!-- Logo of local theatre -->
					<span class="text-primary">local</span>Theatre
				</h1>
				<!-- Setting up register form -->
				<!-- Styles from css -->
				<form id="form" class="registerForm" action="../private/register_handle.php" method="post">
					<span class="registerTitle">Register </span>
					<div class="input-control">
						<!-- Input: Username -->
						<label for="username">Username</label>
						<input id="username"  name="username" type="text" placeholder="Type your username">
						<div class="error"></div>
					</div>
					<div class="input-control">
						<!-- Input: Email -->
						<label for="email">Email</label>
						<input id="email"  name="email" type="email" placeholder="Type your email">
						<div class="error"></div>
					</div>
					<!-- Styles from css -->
					<div class="input-control">
						<!-- Input: Password1 -->
						<label for="password">Password</label>
						<input id="password"  name="password" type="password" placeholder="Type a new password">
						<div class="error"></div>
					</div>
					<!-- Styles from css -->
					<div class="input-control">
						<!-- Input: Password2 -->
						<label for="password">Password again</label>
						<input id="password2"  name="password2" type="password" placeholder="Re-enter your new password">
						<div class="error"></div>
					</div>
					<!-- Styles from css -->
					<!-- Register button -->
					<button class="registerSubmit" type="submit">Register</button>
				</form>
				<div class="gos">
					<a href="../index.php" class="hoverPoop signPoop"> Return Home</a>
				</div>
				</form>
			</div>
		</div>
	</div>
	<p class="m-0 text-white">
		<!-- Adding copyright legislation -->
		&copy; <a class="text-white font-weight-bold" href="#">localTheatre</a>. All Rights Reserved. Designed by Joshua Oakman
	</p>
	</div>
</body>

</html>