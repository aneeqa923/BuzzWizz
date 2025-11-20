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

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$profile=$_POST['profile'];
	
	// checking user email
	$email_check_sql="select * from users where email='".$email."'";
	$email_result = $connection->query($email_check_sql);
	$email_num=$email_result->num_rows;
	
	if ($email_num > 0) {
					echo '<div align="center"><h1>Email address already exists</h1></div>';
					exit;
	}
	
	
	
	
	if($email_num <=0) {
	
			$insert_sql = "INSERT INTO users (user_type,first_name, last_name,phone,password,email) 
					VALUES 
							('$profile','$first_name', '$last_name', '$phone','$password','$email')";
							
			if ($connection->query($insert_sql) === TRUE) {
					    echo '<div align="center"><h1>Thank you for Registering.You can now <a href="login.php">login</a></h1></div>';
			} else {
					  echo '<div align="center"><h1>There is an error.Please try again later.'.$connection->error.'</h1></div>';
			   
			}

	
	}
	

			
}	
	$connection->close();


?> 