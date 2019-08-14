<?php
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    /*
       Up to you which header to send, some prefer 404 even if
       the files does exist for security
    */
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

    /* choose the appropriate page to redirect users */
    die( header( 'location: /error.php' ) );

}

 require 'database.php';
session_start();
//echo "successful i";?>



<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <script src="js/member.js"></script>


        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <title>Dashboard</title>

</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
    	<div class="row containermember">

          <div class="col-md-9">
            <div class="member">
              <form action="user-process.php" method="post">
                  <br>
                  <h1>Create New User </h1>

                  <br>
                  <br>
                    <div class="row">
                      <div class="col">
                          <label for="fname">FIRST NAME</label>
                            <input type="text" class="inputwidthforvreateuser" id="fname" name="fname" size="30" maxlength="50" placeholder=" John " required />
                        </div>
                    </div>

                    <div class="row">
                      <div class="col">
                          <label for="lname">LAST NAME</label>
                            <input type="text" id="lname" class="inputwidthforvreateuser" name="lname" size="30" maxlength="50" placeholder=" Cena " required />
                        </div>
                    </div>

                    <div class="row">
                      <div class="col">
                          <label for="email">EMAIL</label>
                          <input type="email" id="email" class="inputwidthforvreateuser" name="email" size="30" maxlength="50" placeholder=" abc@abc.com " required />
                        </div>
                    </div>


                              <div class="row">
                      <div class="col">
                          <label for="password">PASSWORD</label>
                            <input type="password" id="password" class="inputwidthforvreateuser" class="password" name="password" size="30" maxlength="20" required  onChange="passwordCheck(document)"/>
                            <span id="pwd_msg" class="error_msg"></span>
                            <span id="password_check" class="error_msg" style="color: red"></span>

                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                          <label for="rePassword">RE-TRY:</label>
                            <input type="password" id="rePassword" class="inputwidthforvreateuser" size="30" maxlength="20"
                                       onChange="checkRePassword(document)" />

                        </div>
                    </div>
                    <div class="row">
                      <div class="col">
                          <label for="User type">USER TYPE </label>
                          <select name="user_type" class="inputwidthforvreateuser">
                           <option value="employee">Employee</option>
                           <option value="admin">Admin</option>
                            </select>
                        </div>
                    </div>
<br>
<br>
                    <div class="row">
                      <div class="col">
                          <label>&nbsp;</label>
                            <button class="button_signup_member" name="submit" value="Create"><span> Create User </span></button></a>
                        </div>
                    </div>

                </form>
            </div>
</div>
          </div>
        </div>
	<?php include("include/footer.inc") ?>

</body>
</html>
