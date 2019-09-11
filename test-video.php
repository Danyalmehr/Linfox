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


	<style>
		.test .btn {

				width: 100%;
			}

		.videos {
			margin-left: 2em;
			margin-bottom: 2em;
		}
		.test {
			margin-left: 20%;
		}


		@media only screen and (max-width: 768px) and (min-width: 428px) {

			.test {
			margin-left: 1%;
		}


	.videos {

		margin-left: 0em;

	}


			.test h1, .videos h2{
				font-size: 18px;
			}

			.test .test_name{

				font-size: 14px;
			}

			.test, button {

				width: 100%;
			}

}

		@media only screen and (max-width: 428px) {
			.videos {

		margin-left: 0em;

	}

			.test h1, .videos h2{
				font-size: 16px;
			}

			.test .test_name{

				font-size: 12px;
			}
			.test, button {

				width: 100%;
			}

			.test {
				margin-left: 1%;
			}

		}




	</style>


</head>
<body onLoad="run_first()">

	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("user-side-dash.html") ?>


    	<div class="row">
        <div class="col-md-10 videos">
            <div class="content">
                <div class="btn-controls">
                    <div class="btn-box-row row-fluid course">

            <?php
                $test_id = $_GET['test_id'];
                $test_name = $_GET['name'];

                $course_name = $_SESSION["coursename"];

                $test = "SELECT *
                          FROM test
                          WHERE test_id = $test_id
                          ";
                          $result = mysqli_query($con,$test);
                          $num=mysqli_num_rows($result);

                          while ($row=mysqli_fetch_array($result))
                              {
                               $test_video = $row['test_video'];
                               $_SESSION['testname'] = $row['test_name'];
                               $test_name = $_SESSION['testname'];

                          ?>
                          <center>

                  <h1>course: <?=  $course_name  ?></h1>
                  	<h2> Training Videos for test: <?= $test_name  ?>  </h2>
					<?php

                echo "<iframe class=\"iframe\" width=\"90%\" height=\"415\" src=\"https://www.youtube.com/embed/$test_video\ frameborder=\"0\" allow=\"accelerometer\"; \"autoplay\"; \"encrypted-media\"; \"gyroscope\"; \"allowfullscreen\"></iframe>";

                }
              ?>


              <form class="test" action="stest.php" method="post">
                <input type="hidden" name="test_id" value="<?=$test_id?>"><label for=""><?php $test_id?></label>

                <button type="submit" name="selectedtest" class="btn btn-outline-dark btn-lg span5 btn-course test" style="margin-left:0.5em"><span class="course_name"> Take the test </span></button>
              </form>

                  <div class="row row">
                    <a href="user-test.php">  <button class="btn btn-danger btn-lg" style="float: auto;"> <span> < Back to previous page </span> </button></a>
                    <a href="dashboard.php"> <button class="btn btn-danger btn-lg" style="float: auto;"> <span> << Back to home page </span> </button></a>
                  </div>

                        </center>




                       </div>
                       </div>
                     </div>
                   </div>
                 </div>
              	</div>

<?php include("include/footer.inc") ?>
  <script type="text/javascript" src="js/confirmation.js"></script>

</body>
</html>
