<?php
// Saving profile data
$dbservername = "localhost";
$username = "root";
$password = "";
$database_name = "buzzwizz";

// Make a connection
$connection = new mysqli($dbservername, $username, $password, $database_name);

// Validate connection
if ($connection->connect_error) {
    die("Unable to connect. Please try again: " . $connection->connect_error);
}

if (isset($_POST['profile_form'])) {
    $buisness_name = $_POST['buisness_name'];
    $buisness_category = $_POST['buisness_category'];
    $services = $_POST['services'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $user_id = $_POST['user_id'];

    $insert_sql = "INSERT INTO profiles (user_id, buisness_name, buisness_category, services, address, phone) 
                    VALUES ('$user_id', '$buisness_name', '$buisness_category', '$services', '$address', '$phone')";

    if ($connection->query($insert_sql) === TRUE) {
        // echo '<div align="center"><h1>Your profile has been successfully saved. You have saved the following data:</h1>';
        // //echo '<table>
        //         <tr>
        //             <th>Buisness Name:</th>
        //             <td>' . $buisness_name . '</td>
        //         </tr>
        //         <tr>
        //             <th>Buisness Category:</th>
        //             <td>' . $buisness_category . '</td>
        //         </tr>
        //         <tr>
        //             <th>Services:</th>
        //             <td>' . $services . '</td>
        //         </tr>
        //         <tr>
        //             <th>Phone:</th>
        //             <td>' . $phone . '</td>
        //         </tr>
        //         <tr>
        //             <th>Address:</th>
        //             <td>' . $address . '</td>
        //         </tr>
        //     </table>    */  </div>';
    } 
	else {
        echo '<div align="center"><h1>There is an error. Please try again later.' . $connection->error . '</h1></div>';
    }
}
$connection->close();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css?rand=<?php echo rand(200, 100000); ?>">
    <style>
        body {
            background: url('images/down.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .userform {
            background: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background */
            box-shadow: 0 0 3px #333333;
            margin: 50px auto;
            max-width: 550px;
            padding: 30px; /* Increased padding for better appearance */
            overflow: hidden;
            position: relative;
            text-align: center;
        }

        .form-field {
            text-align: left; /* Align the form fields to the left */
        }

		 
        table {
            width: 100%; /* Table takes the full width of the container */
            background-color: rgba(255, 255, 255, 0.5); /* Add a semi-transparent white background to the table */
            margin-top: 20px; /* Some top margin for spacing */
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2; /* Light gray background for table headers */
        }
    </style>
</head>

<body>
    <div class="userform">
        <form action="dosignup.php" id="login" method="post">
            <!-- Your form content here -->

            <!-- Display the saved profile data in a table -->
            <?php if (isset($buisness_name) && isset($buisness_category) && isset($services) && isset($phone) && isset($address)) : ?>
            <h1>Your profile has been successfully saved.</h1>
            <table>
                <tr>
                    <th>Buisness Name:</th>
                    <td><?php echo $buisness_name; ?></td>
                </tr>
                <tr>
                    <th>Buisness Category:</th>
                    <td><?php echo $buisness_category; ?></td>
                </tr>
                <tr>
                    <th>Services:</th>
                    <td><?php echo $services; ?></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><?php echo $phone; ?></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><?php echo $address; ?></td>
                </tr>
            </table>
            <?php endif; ?>
        </form>
    </div>
</body>

</html>
