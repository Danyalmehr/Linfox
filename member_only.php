<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');
?>
<?php
ob_start();
// your code here
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
    <link rel="stylesheet" href="css/member.css">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <title> MEMBER DETAILS </title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc")

	?>
    <div class="member_details" id="member_details">
        <h3> MEMBER DETAILS </h3>
       <?php
        // check session variable
        if (isset($_SESSION['valid_user']))
        {
            //make the database connection
            $conn  = db_connect();
            $user_check = $_SESSION['valid_user'];

            //make a query to check if a valid user
            $ses_sql = "select fname from users where email='$user_check'";
            $result = $conn -> query($ses_sql);
            if ($result -> num_rows == 1) {
                $row = $result -> fetch_assoc();
                $fname = $row['fname'];
			$ses_sql = "select lname from users where email='$user_check'";
            $result = $conn -> query($ses_sql);
            $row = $result -> fetch_assoc();
            $lname = $row['lname'];
			$ses_sql = "select email from users where email='$user_check'";
            $result = $conn -> query($ses_sql);
            $row = $result -> fetch_assoc();
            $email = $row['email'];
			$ses_sql = "select fav_team from users where email='$user_check'";
            $result = $conn -> query($ses_sql);
            $row = $result -> fetch_assoc();
            $fteam = $row['fav_team'];
			$ses_sql = "select country from users where email='$user_check'";
            $result = $conn -> query($ses_sql);
            $row = $result -> fetch_assoc();
            $country = $row['country'];
			$ses_sql = "select Postcode from users where email='$user_check'";
            $result = $conn -> query($ses_sql);
            $row = $result -> fetch_assoc();
            $zip = $row['Postcode'];
			$ses_sql = "select ID from users where email='$user_check'";
            $result = $conn -> query($ses_sql);
            $row = $result -> fetch_assoc();
            $id = $row['ID'];
                echo "<p>Welcome <b>$fname $lname</b></p>";
				echo "<p>Your Email address is <b> $email </b> </p>";
				echo "<p>You have selected <b> $fteam </b> as your favorite team</p>";
				echo "<p>You are from <b> $country</b> country</p>";
				echo "<p>Your postcode is <b> $zip </b></p>";
                echo "<p><a href=\"logout.php\"><input type=submit value=LOGOUT></a>
						 <a href='editMember.php'><input type=submit value=EDIT></a>
					  </p>";

            }
            else {
                echo "<p >Something is wrong.</p>";
                echo "<p ><a href=\"login.php\" id=\"4\" onClick=\"nav_item_selected(4)\">Login</a></p>";
            }
        }
        else
        {
            echo "<p>You are not logged in.</p>";
            echo "<p><a href=\"login.php\" id=\"4\"
			onClick=\"nav_item_selected(4)\">Login</a></p>";
        }
        ?>
      </div>
 <?php include("include/footer.inc") ?>
</body>
</html>
