<?php
require 'database.php';
session_start();
//echo "successful";?>

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
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
    <div class="options">
    <?php

			if(isset($_POST['submit']))
			{

				if(!empty($_POST['userans']))
				{
					$count = count($_POST['userans']);

					echo " <h3> Out of All questions you have answred " .$count." options </h3>";


					$i = 1;

					 $score = 0;
					 $selected = $_POST['userans'];
					//print_r($selected); check to see weather it is retriving the value that user have selected

					$fetchqry = "SELECT * FROM question";
					$result = mysqli_query($con,$fetchqry);
          $num=mysqli_num_rows($result);
				  $row = mysqli_fetch_array($result);

          $que_id = 1;

          foreach ($selected as $key => $value) {

           //$fetchqry2= "INSERT INTO useranswer (`userans`, `que_id`) VALUES
            //( '$value', (SELECT `que_id` from `question`) )";

            $fetchqry2 = "INSERT INTO useranswer(`userans`, `que_id`) values ('$value','$que_id')";
            $result2 = mysqli_query($con,$fetchqry2);
            $que_id += 1;
          }
          if ($result2) {
             echo "Your result is submitted!";
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

      for ($x=0; $x < $num ; $x++) {?>
        <form class="test-display" action="" method="post">
        <div class="options">


            <p><?= $array3[$x]?>.&nbsp;<?=$array4[$x]?></p>
            <?php if ($array2[$x] != $array1[$x]) {?>
              <p> <span style="background-color: #ff9C9E"><?= $array1[$x]; ?></span> </p>
              <p> <span style="background-color: #ADFFB4"><?= $array2[$x] ?></span> </p>

          <?php  } else {?>

            <p> <span style="background-color: #ADFFB4"><?= $array1[$x] ?></span> </p>
            <?php $score = $score + 1;
            echo (" Your total score is ".$score." out of ".$count.""); ?>

            <?php  }

            ?>

        </div>
      <?php }

          $fetchqry3 = "INSERT INTO attempt (`final_score`) values ('$score')";
          $result3 = mysqli_query($con,$fetchqry3);



          mysqli_free_result($result);?>

          <form>
            <input type="button" class="button" name="back" style="vertical-align:middle" value="Take the test again" onclick="history.go(-1)">
            <a href="dashboard1.php"><input type="button" class="button" name="back" style="vertical-align:middle" value="back to Dashboard" onclick="history.go(-1)"></a>
          </form>


			</div>
    </div>



	<?php include("include/footer.inc") ?>


  </body>
</html>
