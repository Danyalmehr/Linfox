<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/database.php');

//make the database connection
$conn  = db_connect();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $email = $conn -> real_escape_string($_POST['email']);
    $password = $conn -> real_escape_string($_POST['password']);

    //make a query to check if user login successfully
    $sql = "select * from user where email='$email' and password='$password'";
    $result = $conn -> query($sql);
    $numOfRows = $result -> num_rows;
    $row = $result -> fetch_assoc();
    if ($numOfRows == 1) {
        $_SESSION['valid_user'] = $email;
        header("location: dashboard.php");
    }else {
        $error = 'Your Login Name or Password is invalid';
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    
    <title>Login</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
   <div class="container">
    <div class="login">
     
    	<form action="index.php" method="post">
		
        <span class="login_header"><h1>Login</h1><span><br>
            
            <div class="row">
            	<div class="col">
                	<label for="email">Email</label>
                	<input type="email" id="email" name="email" size="30" maxlength="30" placeholder=" example@abc.com " required />
                </div>
            </div><br>
            <div class="row">
            	<div class="col">
                	<label for="password">Password</label>
                    <input type="password" id="password" name="password"
                           size="30" maxlength="30" placeholder= " ****** " required />
                </div>
           	</div>
           	<br>
			<div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                   <button class="button_login" style="vertical-align:middle" value="Submit"><span>Submit </span></button>

                    
                   
                    <br>
                    <br>
                    <span class="signupnotice"><a href="member.php"><i>Signup to become a member</i></a></span>
                    <?php
                    if(isset($error)) {
                        echo "<span class='error-color'><p style=\"color: red; \">$error</p></span>";
                        unset($error);
                    }
                    ?>
                
   
        </div>
        </div>
        </form>
    </div>
    </div>
   
</body>
</html>