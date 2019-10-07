<?php

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


        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <title>Dashboard</title>

	<style>


.user-admin-menu>h2 {text-align: center;
/* Black background with 0.5 opacity */
color: Black;}
.user-admin-menu{align-items: center;text-align: center;background: rgb(0, 0, 0); /* Fallback color */
background: rgba(0, 0, 0, 0.1); /* Black background with 0.5 opacity */
color: ##ff7733;
padding: 3%;
}

  .container-menu {
  position: relative;
  width: auto;
  display: inline-block;

}

.image {
  display: inline-block;

  height: auto;
  border: 1px dotted black;
  padding: 1%;
  display: inline-block;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgb(0, 0, 0); /* Fallback color */
 background: rgba(0, 0, 0, 0.9); /* Black background with 0.5 opacity */
 color: #f1f1f1;
  overflow: hidden;
  width: inherit;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease
  border: 1px dotted black;
  padding: 1%;
    display: inline-block;
}

.container-menu:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  border: 1px dotted black;
  padding: 1%;
    display: inline-block;
}

.text {
  color: Orange;
  font-size: 22px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
    display: inline-block;
}
	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
          <div class="col-md-9">
            <div class="user-admin-menu">


            <h2>Check progress</h2>
            <div class="container-menu">
              <a href="check-user-course.php">
              <img src="images/course1.png" style="background-color:white;"width="192px;" alt="Avatar" class="image23">
              <div class="overlay">
                <div class="text">By Course/Test</div>
              </div>
              </a>
            </div>

            <div class="container-menu">
              <a href="byuser-check-user.php">
              <img src="images/user1.png" alt="Avatar"style="background-color:white;" width="192px;"class="image23">
              <div class="overlay">
                <div class="text">By User</div>
              </div>
              </a>
            </div>

          </div>

            </div>
        </div>
	<?php include("include/footer.inc") ?>
<!--!	<script>
		function(popup){
			var btn=document.getElementsByClassName("btn-course")
			var
		}
	</script>-->
</body>
</html>
