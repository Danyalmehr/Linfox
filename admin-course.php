<?php require 'database.php';
session_start();
//echo "successful";?>



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


  <body>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
    	<div class="row">



                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">



                    <div class="span9">

                      <!-- Container (Services Section) -->
                      <div id="services" class="container-fluid text-center">
                        <h1>Courses</h1>
                        <br>
                        <div class="row slideanim">
                          <div class="col-md-6 center">
                          <a href="create-course.php">  <span class="glyphicon glyphicon-edit logo-small"></span>
                            <h2>Create Course</h2>
                            <p>Lorem ipsum dolor sit amet..</p></a>
                          </div>
                          <div class="col-md-6">
                          <a href="edit-course.php">  <span class="glyphicon glyphicon-wrench logo-small"></span>
                            <h2>Edit Course</h2>
                            <p>Lorem ipsum dolor sit amet..</p></a>
                          </div>
                        </div>
                      </div>
					</div>
          </div>
        </div>

	<?php include("include/footer.inc") ?>

</body>
</html>
