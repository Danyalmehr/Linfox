<?php

//must appear BEFORE the <html> tag
session_start();
include_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

      <link type="text/css" href="css/theme.css" rel="stylesheet">
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>

        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>



    <link type="text/css" href="css/theme.css" rel="stylesheet">

    <title> Take test </title>

	<style>

  ul.unstyled, ol.unstyled {
     margin-left: 0;
     list-style: none;
}
		.span3 {

			margin-right: 4em;
		}
    .widget-menu {
    background: #fff;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
     border-radius: 3px;
    overflow: hidden;
}

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
      <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <?php

            $courses = "SELECT *
                      FROM courses
                      ";
            					$result = mysqli_query($con,$courses);
                      ?>
                      <h1 style="float: auto;"> To create questions you need to choose your course first</h1>
                      <h3>STEP 1: Choose your COURSE</h3>
                      <h4>If you have not created your desired course yet, you MUST create your course first at <a href="create-course.php"> <button class="btn btn-danger btn-md" style="float: auto; .btn"> <span>  course </span> </button></a></h4>


 </h4>


                      <?php
            					while ($row=mysqli_fetch_array($result))
                          {
                            $_SESSION["coursename"] = $row['course_name'];
                            $course_name=$row['course_name'];
                            $course_id=$row['course_id'];
                            $course_desc=$row['course_desc'];?>

            <form class="" action="test.php" method="post">
              <input type="hidden" name="course_id" value="<?=$course_id?>"><label for=""><?php $course_id?></label>
              <input type="hidden" name="course_name" value="<?=$course_name?>"><label for=""><?php $course_name?></label>
              <button class="btn btn-secondary btn-lg span5 btn-course" name="selectedcourse" style="float: auto;"> <span> <?= $course_name ?> </span> </button>

            </form>

              <?php } ?>
   </div>
 </div>
</div>





	<?php include("include/footer.inc") ?>


  </body>
</html>
