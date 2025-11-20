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
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css?rand=<?php echo rand(200, 100000); ?>">
</head>

<body style="background: url('images/down.jpg') no-repeat center center fixed; background-size: cover;">
    <div class="userform">
        <form action="dosignup.php" id="login" method="post">
            <input type="hidden" name="profile" value="<?php echo $profile; ?>" />
            <h1>Sign Up to BuzzWizz</h1>
            <div class="form-field">
                <label for="firstname">First Name</label>
                <input type="text" name="first_name" required />
                <label for="lastname">Last Name</label>
                <input type="text" name="last_name" required />
                <label for="email">Email</label>
                <input type="email" name="email" required="email" />
                <label for="password">Password</label>
                <input type="password" name="password" required />
                <label for="phone">Phone</label>
                <input type="text" name="phone" required />
                <input type="submit" value="Sign up" class="button" />
                <p> <a href="signup.php?profile=<?php echo $profile; ?>"></a> </p>
            </div>
        </form>
    </div>
</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .userform {
        background: #d8b9ff;
        box-shadow: 0 0 3px #333333;
		margin: 50px auto 150px;
        max-width: 500px;
        overflow: hidden;
        position: relative;
        padding: 100;
    }

    #sign_up {
        display: none;
    }

    .userform .tab-group {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .userform .tab-group:after {
        content: "";
        display: table;
        clear: both;
    }

    .userform h1 {
        padding: 0 0 20px 0;
        font-size: 26px;
        color: #666;
        font-weight: lighter;
        text-align: center;
    }

    .userform form {
        padding: 30px;
    }

    .userform .tab-group .active a {
        background: #fff;
        color: #444;
        border-top: 5px solid rgb(86, 174, 38);
    }

    .userform input {
        font-size: 16px;
        display: block;
        width: 100%;
        padding: 10px 20px;
        border: 1px solid #eeeeee;
        color: #666;
        border-radius: 0;
        margin-bottom: 10px;
    }

    .userform .tab-group li a {
        display: block;
        text-decoration: none;
        padding: 15px;
        background: #e8e8e8;
        color: #999999;
        font-size: 20px;
        float: left;
        width: 50%;
        text-align: center;
    }

    .userform .tab-group li a:hover {
        color: #444444;
    }

    .userform input:focus {
        outline: 0;
        border-color: rgb(146, 217, 108);
    }

    .userform label {
        font-size: 16px;
        font-weight: normal;
        color: #666;
        margin-bottom: 5px;
        display: block;
    }

    .userform .button {
        border: 0;
        outline: none;
        border-radius: 0;
        padding: 10px 0;
        font-size: 18px;
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 2px;
        background: #800080;
        color: #ffffff;
        cursor: pointer;
    }
</style>
