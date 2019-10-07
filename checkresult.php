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

  	.span3 {
  			margin-right: 4em;
          color: Black;
  		}

      .user-admin-menu>h2 {text-align: center;
      /* Black background with 0.5 opacity */
      color: Black;}

      .user-admin-menu
      {
        align-items: center;text-align: center;
        background: rgb(0,0,0,0.1); /* Fallback color */
        background: rgba(0, 0, 0, 0.4); /* Black background with 0.5 opacity */
        padding:3%;
        color: White;
      }
        .container-menu {
        position: relative;
        width: auto;
        display: inline-block;

      }
      .text1
      {
        width: 100%;
        font-size: 15px;
        color: black;
      }
      .options{font-size: 20px;padding-top: 10px;}
	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
      <?php include("date.php") ?>


    <div class="container-fluid">
      <?php include("user-side-dash.html") ?>
      <div class="row">
          <div class="col-md-12" style="margin-top: 2%">
            <div class="user-admin-menu">


    <div class="options">
          <center class="result_display">
              <?php
                $date_after = "";
                $date_after = strtotime(getcurrentdate($date_after));
                $date_bebore = $_SESSION["datebefore"];
                $date_bebore1 = strtotime($_SESSION["datebefore"]);
                $time_taken = $date_after-$date_bebore1;
                $_SESSION["time_taken"] = $time_taken;?>
                <h2 style="color:white;"> Test result</h2> <br><?php
                echo "<h3 style='color:white;'>Course name: ".  $_SESSION["coursename"] . "</h3>";
                echo " <h3 style='color:white;'>Test name: ".  $_SESSION['testname'] . "</h3>";
              //  echo "<h4>Submission date: ". $time_taken. "</h4>";
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
          $id = $_POST['que_id'];
          $count = count($_POST['userans']);
					//echo " <h3> There were ".$count." questions in this test </h3>";
					 $score = 0;
					 $selected = $_POST['userans'];
				//	print_r($selected); //check to see weather it is retriving the value that user have selected
					$fetchqry = "SELECT * FROM question where test_id='$test_id'";
					$result = mysqli_query($con,$fetchqry);
          $num=mysqli_num_rows($result);
				  $row = mysqli_fetch_array($result);
          $array1 = array();
          $array2 = array();
          $array3 = array();
          $array4 = array();
          foreach ($result as $res) {
              array_push($array2, $res['ans']);
              array_push($array3, $res['que_id']);
              array_push($array4, $res['que']);
          }
          foreach ($selected as $checkans) {
            array_push($array1, mysqli_real_escape_string($con, $checkans));
          }
          for ($i=0; $i < $count ; $i++){
            $fetchqry2 = "INSERT INTO useranswer(`userans`, `que_id`, `user_id`, `test_id`) values ('$array1[$i]','$array3[$i]', '$userid', '$test_id')";
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
      $i = 1;
      for ($x=0; $x < $count ; $x++) {?>
        <form class="test-display" action="" method="post">
        <div class="options">


            <p><?php echo $i ?>.&nbsp;<?=$array4[$x]?></p>
            <?php if ($array2[$x] != $array1[$x]) {?>
              <p> <span style="background-color: #ff9C9E; color:black;"><?= $array1[$x]; ?></span> </p>
              <p> <span style="background-color: #ADFFB4;color:black;"><?= $array2[$x] ?></span> </p>

          <?php   } else {?>

            <p> <span style="background-color: #ADFFB4;color:black;"><?= $array1[$x] ?></span> </p>
            <?php $score = $score + 1; ?>

            <?php  }?>

        </div>
      <?php $i = $i + 1;}
        $scorePercentage = ($score/$count)*100;
        $att_status = "Completed";
        $fetchqry3 = "UPDATE attempt SET final_score=$scorePercentage, att_date='$date_bebore', att_status='$att_status', time_taken='$time_taken' WHERE user_id =$userid AND test_id=$test_id AND att_number=$attemptNumber";
        $result3 = mysqli_query($con,$fetchqry3)or die(mysql_error());
?>


            <div class="result_display">

            <h2 style="text-align: center;color:white;">Your 'short answer' questions will be marked and seen by your supervisor!!</h2>
            <h3 style="text-align: center;color:white;"> Number of questions :<?= $count ?> </h3>
            <h3 style="text-align: center;color:white;"> Number of correct MCQ answers : <?=$score ?> </h3>
            <h3 style="text-align: center;color:white;">Status : <?= $att_status ?> </h3>

        </div>

        <?php  mysqli_free_result($result);?>

            <!--<input type="button" class="button" name="back" style="vertical-align:middle" value="Take the test again" onclick="history.go(-1)">-->
          <!--  <a href="dashboard.php"><button type="button" class="btn btn-danger"   style=" text-decoration: underline;  display: block; max-width: 300px; margin: auto;"> back to Dashboard </button> </a> -->



			</div>
      	</div>
          <div class="col-md-2"></div>
    </div>






  </div>
  </div>


  </div>




	<?php include("include/footer.inc") ?>


  </html>
  </body>
