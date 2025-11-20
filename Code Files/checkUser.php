<?php
$dbservername = "localhost";
$username = "root";
$password = "";
$database_name = "buzzwizz";

// Make connection
	$connection = new mysqli($dbservername, $username, $password, $database_name);

// validate connection
if ($connection->connect_error) {
    die("Unable to connect. please try again: " . $connection->connect_error);
}

if(isset($_POST['email'])) {

	$email=$_POST['email'];
	$password=$_POST['password'];

	// checking user exists
	$check_sql="select * from users where email='".$email."'";
	$user_result = $connection->query($check_sql);

	if ($user_result->num_rows > 0) {
			$user_info=$user_result->fetch_assoc();
			
			if($user_info['password']==$password) {
					if($user_info['user_type']=="business") {
						header("Location:profile.php?userid=".$user_info['user_id']."&email=".$user_info['email']);
					} else {
						header("Location:dashboard.php");
					}
					echo '<div align="center"><h1>Welcome to my Website</h1></div>';
			} else {
					echo '<div align="center"><h1>Invalid Username or password</h1></div>';
			}
	} else {
	
			echo '<div align="center"><h1>Your record does not exists in our database.</h1></div>';
	
	}
			
}	
	$connection->close();


?> 