<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/database.php');
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
    <link rel="stylesheet" href="css/member.css">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <title> MEMBER </title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    <div class="member">
    	<form action="member_process.php" method="post">
          <br>
        	<h1> REGISTRATION FORM </h1>

            <h6><i> Fields marked with an asterisk (*) must be entered </i></h6> <br>
            <div class="row">
            	<div class="col">
                	<label for="fname"> * FIRST NAME </label>
                    <input type="text" id="fname" name="fname" size="30" maxlength="50" placeholder=" John " required />
                </div>
            </div>

            <div class="row">
            	<div class="col">
                	<label for="lname"> * LAST NAME </label>
                    <input type="text" id="lname" name="lname" size="30" maxlength="50" placeholder=" Cena " required />
                </div>
            </div>

            <div class="row">
            	<div class="col">
                	<label for="email"> * EMAIL </label>
                	<input type="email" id="email" name="email" size="30" maxlength="50" placeholder=" abc@abc.com " required />
                </div>
            </div>
            <div class="row">
		<div class="col">
                	<label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="at least 8 characters" size="30" maxlength="30" onChange="passwordCheck(document)" required />
                    <span id="pwd_msg" class="error_msg"></span>
					<span id="password_check" class="error_msg" style="color: red"></span>
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="rePassword"> * RE-ENTER PASSWORD </label>
                    <input type="password" id="rePassword" size="30" maxlength="20"
                               onChange="checkRePassword(document)" placeholder=" ******* " />
                </div>
            </div>


            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <button class="button_signup" style="vertical-align:middle" value="Submit"><span> SIGN UP </span></button></a>



                </div>
            </div>

        </form>
    </div>
	<?php include("include/footer.inc") ?>
</body>

<script>
	   
	   function passwordCheck(document){
		var password=document.getElementById("password");
		var error_msg=document.getElementById("password_check");
		if (password.value.length <= 7) {
			error_msg.innerHTML="Please enter more than 8 characters";
			password.focus();
			return false; }
		else {
			password_check.innerHTML=""
			return true;
			}
	}
	   
	   </script>

</html>
