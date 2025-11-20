<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="userform">
	<form action="checkUser.php" id="login">
	      <h1>Welcome to BuzzWizz</h1>
		  
	
	      <div class="form-field">
	       <p> <a href="login.php?profile=customer" class="homeSelection">Press C for Customer</a></p>
	       <br>
		   <p> <a href="login.php?profile=business" class="homeSelection">Press B for Business</a></p>
	       
	      </div>
	  </form>
	  
</div>
</body>
</html>

<style>
        body {
            background-image: url("images/page2.jpg"); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: #fff;
            text-shadow: 2px 2px 4px #000;
        }

        p {
            color: #4b015e;
        }
		.form-field {
    text-align: center;
    margin-top: 20px;
}

.homeSelection {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    background-color: #e7d1ff;
    color:#4b015e;
    cursor: pointer;
    margin-right: 20px; 
}

.homeSelection:hover {
    background-color: #a27eab; 
}

    </style>