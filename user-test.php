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
    
        <link rel="stylesheet" href="css/test.css">
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
			
			body .admin-side{
			width: 100%;
			display: inline;
		}
		
		.sidebar {
    width: 10%;
    height: 90%;
    position: relative;
			display: inline;
			
			
  }
 li a {float:left;
	height: 1%;
	 border-width: 0;
		
	  margin-left: 0.15em;
	 font-size: 9px;
		}
		
		i {
			float:left;
			
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
			
			
			body .admin-side{
			width: 100%;
			display: inline;
		}
			
		.sidebar {
    width: 10%;
    height: 90%;
    position: relative;
			display: inline;
			
			
  }
 li a {float:left;
	height: 1%;
	 border-width: 0;
		
	  margin-left: 0.05em;
	 font-size: 7px;
		}
		
		i {
			float:left;
			
		}	

		}




	</style>


</head>
<body onLoad="run_first()">

	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
     <div class="sticky-top">
                      <div class="span3">
                          <div class="sidebar" style="display: inline">
                              <ul class="widget widget-menu unstyled">
                                  <li class="left_icon"><a href="dashboard.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                  </a></li>
                                  <!--<li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                  </li>-->

                                  <li class="active"><a href="Stest.php"><i class="menu-icon icon-inbox"></i>Test <!--<b class="label green pull-right">
                                      11</b>--> </a></li>


                                  <li><a href="previousresults.php"><i class="menu-icon icon-file"></i>Results </a></li>
                                          <li><a href="certificates.php"><i class="menu-icon icon-certificate"></i>Certificates </a></li>
                                                  <li><a href="index.php"><i class="menu-icon icon-signou"></i>Logout </a></li>

                </ul>

                          </div>
                          <!--/.sidebar-->
                      </div>
	
	</div>


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
