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


				@media only screen and (max-width: 768px) and (min-width: 428px) {


			center h2{
				font-size: 18px;
			}

			center h4{

				font-size: 16px;
			}

					.options p {
						font-size: 14px;
					}
					.options label{
						font-size: 12px;
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
			center h2{
				font-size: 16px;
			}

			center h4{

				font-size: 14px;
			}

					.options p {
						font-size: 12px;
					}
					.options label{
						font-size: 10px;
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
    <?php include("date.php") ?>

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


          	<div class="row">



              	<div class="col-md-12">

  <?php
    $user = $_SESSION["userid"];
    if(isset($_POST['selectedtest']))
      			{
              $test_id = $_POST['testid'];
              $test_name = $_POST['test_name'];
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
              $_SESSION["testName"] = $test_name;
              ?>
              <center class="result_display">
            <?php  echo "<h2>Course name:".  $_SESSION["coursename"] . "</h2><br>";
              echo " <h2>Test name:".  $_SESSION["testName"] . "</h2>";
              echo " <h4>This is your attempt number:".  $attemptNumber . "</h4>";
              ?>

              </center>
            <?php  echo " <br> ";?>
<?php
              $fetchqry = "SELECT *
              FROM question
              where test_id = '$test_id'
              ";
              $result=mysqli_query($con,$fetchqry);
              if ($attemptNumber <= 10) {
              $fetchqry3 = "INSERT INTO attempt (`final_score`, `test_id`, `user_id`, `att_number`, `att_date`, `att_status`) values (0, '$test_id', '$user' , '$attemptNumber', '$date', 'FAIL')";
              $result3 = mysqli_query($con,$fetchqry3);
              $questionNum = 1;
              while ($row = mysqli_fetch_array($result))
                {
                  $que_id = $row['que_id'];
                  $question = array($row['que_id'], $row['que'], $row['option 1'], $row['option 2'], $row['option 3'], $row['option 4'], $row['ans'],$row['test_id']);
                  $ans_array = array($row['option 1'], $row['option 2'], $row['option 3'], $row['option 4']);
                  shuffle($ans_array);
                  ?>


                  <form class="test-display" action="checkresult.php" method="post">
                  <div class="options">


                      <p><?= $questionNum ?>.&nbsp;<?php echo $row['que']; ?></p>
                      <?php $test_id = $row['test_id'];
                      echo '<input type="hidden" name="test_id" value="'.htmlentities($test_id).'">'; ?>
                      <input type="hidden" name="attemptNumber" value="<?=$attemptNumber?>">


                      <input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[0]?>">&nbsp;<label><?=$ans_array[0]?></label><br>
                      <input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[1]?>">&nbsp;<label><?=$ans_array[1]?></label><br>
                      <input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[2]?>">&nbsp;<label><?=$ans_array[2]?></label><br>
                      <input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[3]?>">&nbsp;<label><?=$ans_array[3]?></label><br>
                  </div>
                      <div style="border-bottom: 1px dotted black; margin: 1em; background-color: black;"></div>

                    <?php $questionNum += 1;
                           }  ?>


                      <button class="button" name="submit" style="vertical-align:middle"> <span> SUBMIT </span> </button>

                   </form>

                <?php   } else {
                  echo "you have already attempted 3 times";
                }?>

                <?php
              }?>



                 </div>

                   </div>
               </div>

	<?php include("include/footer.inc") ?>





  </body>
</html>
