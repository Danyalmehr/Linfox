<?php
//must appear BEFORE the <html> tag
session_start();
include_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/test.css">
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

    <title>Training Videos</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("user-side-dash.html") ?>


    	<div class="row">


                <div class="col-md-8">
                  	<h2> Training Videos</h2>
					<?php

                echo "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/$course_video\ frameborder=\"0\" allow=\"accelerometer\"; \"autoplay\"; \"encrypted-media\"; \"gyroscope\"; \"picture-in-picture\" \"allowfullscreen\"></iframe>";




	?>

        </div>
    </div>

    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">

    <?php   if(isset($_POST['selectedcourse'])){
        $course_id = $_POST['course_id'];
        $_SESSION["coursename"] = $_POST['course_name'];
        $test = "SELECT *
                  FROM test
                  WHERE course_id = $course_id
                  ";
                  $result = mysqli_query($con,$test);
                  $num=mysqli_num_rows($result);

                  ?>

                  <h1>Tests for <?= $_SESSION["coursename"] ?> </h1>

                  <?php

                  if ($num < 1) {
                    echo "No test available!";
                    ?>
                    <a href="dashboard3.php"> <button class="btn btn-danger btn-lg" style="float: auto;"> <span> Back to home page </span> </button></a>


                    <?php
                  }
                  else {


                  while ($row=mysqli_fetch_array($result))
                      {
                        $test_id=$row['test_id'];
                        $test_name = $row['test_name'];
                        ?>
                        <form class="" action="stest.php" method="post">
                          <input type="hidden" name="testid" value="<?=$test_id?>"><label><?php $test_id?></label>
                          <input type="hidden" name="test_name" value="<?=$test_name?>"><label><?php $test_name?></label>

                          <button type="submit" class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> <span> <?= $test_name ?> </span> </button>
                        </form>
                        <a href="dashboard3.php"> <button class="btn btn-danger btn-lg" style="float: auto;"> <span> Back to HOME page </span> </button></a>


                        <?php
                      }
                      }
                    }
                         ?>

                       </div>
                       </div>

	</div>
	<?php include("include/footer.inc") ?>
</body>
</html>
