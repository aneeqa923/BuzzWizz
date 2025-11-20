

<?php
$profile = "";

if (isset($_GET['profile'])) {
    $profile = $_GET['profile'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<style type="text/css">
		* {
			text-decoration: none;
		}
		body {
            background: #C3B1E1;
			font-family: calibri;
			margin: 0; /* Remove default margin */
			padding: 0; /* Remove default padding */
		}
		.navbar {
			background: url('images/down.jpg') no-repeat center center fixed;
			background-size: cover;
			font-family: calibri;
			padding-right: 15px;
			padding-left: 15px;
		}
		.navdiv {
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		.logo a {
			font-size: 35px;
			font-weight: 600;
			color: white;
		}
		li {
			list-style: none;
			display: inline-block;
		}
		li a {
			color: white;
			font-size: 18px;
			font-weight: bold;
			margin-right: 25px;
		}
		button {
			background-color: #C3B1E1;
			margin-left: 10px;
			border-radius: 10px;
			padding: 10px;
			width: 90px;
		}
		button a {
			color: white;
			font-weight: bold;
			font-size: 15px;
		}
		.center-text {
			text-align: center;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size: 24px;
			color: white;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<nav class="navbar">
		<div class="navdiv">
			<div class="logo"><a href="#">BuzzWizz</a> </div>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Browse</a></li>
                <li><a href="#">ContactUs</a></li>
				
				<button><a href="#">LogOut</a></button>
				
			</ul>
		</div>
	</nav>
	<div class="center-text">Welcome to customer dashboard</div>
</body>
</html>
