<?php


 require 'database.php';
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>


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
					                 <h1 style="margin: 1em"> Create Course</h1>

                          <form class="form-horizontal" action="course-process.php" method="post">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Course name:</label>
                    <div class="col-sm-10">
                      <input type="text" name="course_name"  class="form-control" id="course_name"  placeholder="Enter course name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Course description:</label>
                    <div class="col-sm-10">
                      <input type="text" name="course_desc" class="form-control" id="course_desc" placeholder="Enter course description">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Course Video:</label>
                    <div class="col-sm-10">
                      <input type="text" name="course_video" class="form-control" id="course_video" placeholder="Copy the video code from youtube and paste here">
                    </div>
                  </div>
                  <center class="table_heading">
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="submit" onclick='return ask5()' class="button_signup_member">Submit</button>
                    </div>
                  </div>
                </center>
                </form>

                            </div>

                            </div>
						</div>
					</div>

	<?php include("include/footer.inc") ?>
  <script type="text/javascript" src="js/confirmation.js"></script>


</body>
</html>
