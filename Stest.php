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
	.span3 {
			margin-right: 4em;
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
                <div class="col-md-12">

  <?php
    $user = $_SESSION["userid"];
    if(isset($_POST['selectedtest']))
      			{
              $test_id = $_POST['test_id'];

                $fetchqry1 = "SELECT user_id, max(att_number)
                FROM attempt
                WHERE user_id = $user AND test_id = $test_id
                ";
                $result1=mysqli_query($con,$fetchqry1);
                $num=mysqli_num_rows($result);
                if ($num = 0) {
                  $attemptNumber = 1;
                }
                else {
                 while ($row1=mysqli_fetch_array($result1)) {
                  $attemptNumber =  $row1['max(att_number)'];
                  $attemptNumber += 1;
              }
            }
              $fetchqry7 = "SELECT *
              FROM test
              INNER JOIN courses ON test.course_id = courses.course_id
              where test_id = '$test_id'
              ";
              $result7=mysqli_query($con,$fetchqry7);
              $row7 = mysqli_fetch_array($result7);
              $_SESSION["coursename"] = $row7['course_name'];

              ?>
              <center class="result_display">
            <?php
              $date_bebore = " ";
              $date_bebore = getcurrentdate($date_bebore);
              $_SESSION["datebefore"] = $date_bebore;


              echo " <h2>Course name: ".  $_SESSION["coursename"] . "</h2><br>";
              echo " <h2>Test name: ".  $_SESSION['testname'] . "</h2>";
              echo " <h4>This is your attempt number:".  $attemptNumber . "</h4>";
              //echo " <h4>This is date before :".   $_SESSION["datebefore"] . "</h4>";


              ?>

              </center>
            <?php  echo " <br> ";?>
<?php

              $fetchqry = "SELECT *
              FROM question
              where test_id = '$test_id'
              ";
              $result=mysqli_query($con,$fetchqry);
              if ($attemptNumber <= 1000) {
              $fetchqry3 = "INSERT INTO attempt (`final_score`, `test_id`, `user_id`, `att_number`, `att_date`, `att_status` ,`time_taken`) values (0, '$test_id', '$user' , '$attemptNumber', '$date_bebore', 'Not completed', '0')";
              $result3 = mysqli_query($con,$fetchqry3);
              $questionNum = 1;
              while ($row = mysqli_fetch_array($result))
                {
                  $que_id = $row['que_id'];
                  $que_type = $row['que_type'];



                  $question = array($row['que_id'], $row['que'], $row['option 1'], $row['option 2'], $row['option 3'], $row['option 4'], $row['ans'],$row['test_id']);
                  $ans_array = array($row['option 1'], $row['option 2'], $row['option 3'], $row['option 4']);
                  shuffle($ans_array);
                  ?>


                  <form class="test-display" action="checkresult.php" method="post">
                    <div class="options">
                      <?php $test_id = $row['test_id'];
                      echo '<input type="hidden" name="test_id" value="'.htmlentities($test_id).'">'; ?>
                      <input type="hidden" name="attemptNumber" value="<?=$attemptNumber?>">
                      <input type="hidden" name="que_id[<?=$que_id?>]" value="<?=$que_id?>">
                      <?php
                      if ($que_type == "mcq") {
                       ?>
                      <p><?= $questionNum ?>.&nbsp;<?php echo $row['que']; ?></p>


                      <p><input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[0]?>">&nbsp;<?=$ans_array[0]?></p>
                      <p><input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[1]?>">&nbsp;<?=$ans_array[1]?></p>
                      <p><input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[2]?>">&nbsp;<?=$ans_array[2]?></p>
                      <p><input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[3]?>">&nbsp;<?=$ans_array[3]?></p>
                  </div>


                      <div style="border-bottom: 1px dotted black; margin: 1em; background-color: black;"></div>

                    <?php }
                    else{?>
                      <div class="">
                        <p><?= $questionNum ?>.&nbsp;<?php echo $row['que']; ?></p>
                      <textarea class="form-control" name="userans[<?=$que_id?>]" rows="5" id="comment"></textarea>
                    </div>



                      <?php

                    }$questionNum += 1;

                         }  ?>


                      <button class="button" name="submit" style="vertical-align:middle" onclick="get_date();"> <span> SUBMIT </span> </button>

                   </form>

                <?php   } else {
                  echo "you have already attempted 1000 times";
                }?>

                <?php
              }?>



                 </div>

                   </div>
               </div>
                </div> </div>

	<?php include("include/footer.inc") ?>


<?php
function get_date()
{
     date_default_timezone_set("Australia/Brisbane");
     $date_after_submit = date("Y-m-d h:i:sa");
     echo "$date_after_submit";
   }

 ?>


  </body>
</html>
