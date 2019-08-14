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
			margin-left: 5%;
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

			.test .btn {

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
			.test .btn {

				width: 90%;
			}

		}




	</style>


</head>
<body onLoad="run_first()">
  <?php   if ($_SESSION['usertype'] != 'admin') {
      echo "You are not allowed";
      die();
    }
       ?>
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("user-side-dash.html") ?>


    	<div class="row video">

            <?php   if(isset($_POST['selectedcourse'])){
                $course_id = $_POST['course_id'];
                $course_video = $_POST['course_video'];
                $_SESSION["coursename"] = $_POST['course_name'];
                $test = "SELECT *
                          FROM test
                          WHERE course_id = $course_id
                          ";
                          $result = mysqli_query($con,$test);
                          $num=mysqli_num_rows($result);

                          ?>


                <div class="col-md-8 videos">
                  	<h2> Training Videos</h2>
					<?php

                echo "<iframe class=\"iframe\" width=\"90%\" height=\"415\" src=\"https://www.youtube.com/embed/$course_video\ frameborder=\"0\" allow=\"accelerometer\"; \"autoplay\"; \"encrypted-media\"; \"gyroscope\"; \"allowfullscreen\"></iframe>";





	?>

        </div>
    </div>

    <div class="row">
      <div class="col-md-2">

      </div>
      <div class=test>


                  <h1>Tests for <?= $_SESSION["coursename"] ?> </h1>

                  <?php

                  if ($num < 1) {
                    echo "No test available!";
                    ?>
                    <a href="dashboard.php"> <button class="btn btn-danger btn-lg" style="float: auto;"> <span> Back to home page </span> </button></a>


                    <?php
                  }
                  else {


                  while ($row=mysqli_fetch_array($result))
                      {
                        $test_id=$row['test_id'];
                        $test_name = $row['test_name'];
                        ?>
                        <form class="test_name" action="stest.php" method="post">
                          <input type="hidden" name="testid" value="<?=$test_id?>"><label><?php $test_id?></label>
                          <input type="hidden"  name="test_name" value="<?=$test_name?>"><label><?php $test_name?></label>

                          <button onclick='return ask6()' id="test_name" type="submit" class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto; margin-left: -2px;"> <span class="test_name"> <?= $test_name ?> </span> </button>
                        </form>


                        <?php
                      }
                      ?>
                      <a href="dashboard.php"> <button class="btn btn-danger btn-lg" style="float: auto;"> <span class="test_name"> Back to HOME page </span> </button></a>


                      <?php
                      }
                    }
                         ?>

                       </div>
                       </div>

	</div>

<?php include("include/footer.inc") ?>
  <script type="text/javascript" src="js/confirmation.js"></script>

</body>
</html>
