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
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <title> MEMBER PROCESS </title>
</head>
<body onLoad="run_first()">
<?php include("include/banner.inc") ?>
<?php include("include/nav.inc") ?>
<div class="member_process" >
<?php
if(isset($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['password'],  $_POST['user_type'])) {
    //make the database connection
    $conn  = db_connect();
    $fname = $conn -> real_escape_string($_POST['fname']);
	  $lname = $conn -> real_escape_string($_POST['lname']);
    $email = $conn -> real_escape_string($_POST['email']);
    $password = $conn -> real_escape_string($_POST['password']);
    $user_type= $conn -> real_escape_string($_POST['user_type']);
    //create an insert query
    $sql = "insert into user (fname, lname, email, password,user_type)
			VALUES ('$fname', '$lname', '$email', '$password', '$user_type')";
    //execute the query
    if($conn -> query($sql))
    {

        echo "Hi <b>$fname</b> is sucessfully created";

    }
    $conn -> close();
}
else {
    die("Input error");
}
?>
</div>
<?php include("include/footer.inc") ?>
</body>
</html>
