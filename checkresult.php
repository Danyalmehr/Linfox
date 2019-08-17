<?php
session_start();
require 'database.php';
//echo " successful";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <title> Take test </title>


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


	<style>


		.results{
			margin-left: 25em;
		}

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
      <?php include("date.php") ?>


    <div class="container-fluid">
      <?php include("user-side-dash.html") ?>
      <div class="row">
        <div class="col-md-2"></div>
          <div class="col-md-8">

    <div class="options">
          <center class="result_display">
              <?php
                echo "<h2>Course name: ".  $_SESSION["coursename"] . "</h2><br>";
                echo " <h2>Test name: ".  $_SESSION['testname'] . "</h2><br>";
                echo "<h4>Submission date: ".  $date . "</h4>";

              ?>

                </center>



    <?php

      $userid = $_SESSION["userid"];
			if(isset($_POST['submit']))
			{
				if(!empty($_POST['userans']))
				{
          $test_id = $_POST['test_id'];
          $attemptNumber = $_POST['attemptNumber'];

          $count = count($_POST['userans']);
					//echo " <h3> There were ".$count." questions in this test </h3>";

					 $score = 0;
					 $selected = $_POST['userans'];

				//	print_r($selected); //check to see weather it is retriving the value that user have selected
					$fetchqry = "SELECT * FROM question where test_id='$test_id'";
					$result = mysqli_query($con,$fetchqry);
          $num=mysqli_num_rows($result);
				  $row = mysqli_fetch_array($result);
          $que_id = $row['que_id'];


          foreach ($selected as $key => $value) {
           //$fetchqry2= "INSERT INTO useranswer (`userans`, `que_id`) VALUES
            //( '$value', (SELECT `que_id` from `question`) )";
            $fetchqry2 = "INSERT INTO useranswer(`userans`, `que_id`, `user_id`, `test_id`) values ('$value','$que_id', '$userid', '$test_id')";
            $result2 = mysqli_query($con,$fetchqry2);

          }
          if ($result2) {
          //   echo " Your answers have been submitted!";
          } else {
             echo "Error: " . $fetchqry2 . "" . mysqli_error($con);
          }
				}
				// If unable to fetch the value
				else
				{
					echo("Failed to retrive the data");
				}
			}
      $array1 = array();
      $array2 = array();
      $array3 = array();
      $array4 = array();
      foreach ($selected as $checkans) {
        array_push($array1, $checkans);
      }
      foreach ($result as $res) {
          array_push($array2, $res['ans']);
          array_push($array3, $res['que_id']);
          array_push($array4, $res['que']);
      }
      $i = 1;
      for ($x=0; $x < $count ; $x++) {?>
        <form class="test-display" action="" method="post">
        <div class="options">


            <p><?php echo $i ?>.&nbsp;<?=$array4[$x]?></p>
            <?php if ($array2[$x] != $array1[$x]) {?>
              <p> <span style="background-color: #ff9C9E"><?= $array1[$x]; ?></span> </p>
              <p> <span style="background-color: #ADFFB4"><?= $array2[$x] ?></span> </p>

          <?php   } else {?>

            <p> <span style="background-color: #ADFFB4"><?= $array1[$x] ?></span> </p>
            <?php $score = $score + 1; ?>

            <?php  }?>

        </div>
      <?php $i = $i + 1;}
        $scorePercentage = ($score/$count)*100;
        if ($scorePercentage>49) {
          $att_status = "PASS";
        }
        else {
          $att_status = "FAIL";
        }
        $fetchqry3 = "UPDATE attempt SET final_score=$scorePercentage, att_date='$date', att_status='$att_status' WHERE user_id =$userid AND test_id=$test_id AND att_number=$attemptNumber";

        $result3 = mysqli_query($con,$fetchqry3)or die(mysql_error());
?>

            <center class="result_display">
          <?php echo " Number of questions : ".$count."  <br>";
          echo " Number of correct questions : ".$score." <br>";
          echo (" Your score : ".$scorePercentage."% <br>");
          echo (" Status : ".$att_status."");
          ?>
        </center>

        <?php  mysqli_free_result($result);?>

          <form>
            <!--<input type="button" class="button" name="back" style="vertical-align:middle" value="Take the test again" onclick="history.go(-1)">-->
            <a href="dashboard1.php"><input type="button" class="button" name="back" style="vertical-align:middle" value="back to Dashboard" onclick="history.go(-1)"></a>
          </form>


			</div>
      	</div>
          <div class="col-md-2"></div>
    </div>  </div>




	<?php include("include/footer.inc") ?>


  </body>
</html>
