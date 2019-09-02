<?php


require 'database.php';
session_start();
//echo "successful i";?>



<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <title>Dashboard</title>

</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
    	<div class="row">

                    <div class="col-md-12 col-md-9">
                          <center> <h1>Edit User Details</h1></center>

                      			<?php $fetchqry = "SELECT final_score, test_name, fname, lname, course_name, att_date, att_status, att_number,time_taken
                              FROM attempt
                              INNER JOIN test ON test.test_id = attempt.test_id
                              INNER JOIN user ON user.user_id = attempt.user_id
                              INNER JOIN courses ON courses.course_id = test.course_id
                              WHERE email = '$email'";
                                $result=mysqli_query($con,$fetchqry);
                                $num=array(mysqli_num_rows($result));



                      			 ?>


                             <div class="search_results" id="search_results">


                          	<table class="search_table" id="search_table" >
                              <tr><center class="table_heading">Test results for  <?php echo" $fname "?> are as following<Center></tr><br><br>

                      			<?php


                            echo "<tr>

                                    <th>Course name</th>
                                    <th>Test name</th>
                                    <th>Attempt number</th>
                                    <th>Time Taken</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Score</th>
                                  </tr>";
                    			    while($row = mysqli_fetch_array($result)):
                      				{
                                $att_status =array($row['att_status']);
                                $time_taken =  $row['time_taken'];
                                $days = floor($time_taken / 86400);
                                $hour = floor($time_taken / 3600);
                                $min =floor($time_taken / 60);
                                $secs = ($time_taken - ($min * 60));

                                $array1 = array();

                                foreach ($att_status as $Status) {
                                  array_push($array1, $Status);
                             }

                                //checkstatus($att_status,$num);

                                for ($x=0; $x < sizeof($num); $x++) {
                                        if ($array1[$x] != 'Completed') {?>
                                          <?php
                                              echo "<tr>
                                              <td><lable>".$row['course_name']."</label></td>
                                              <td><lable>".$row['test_name']."</label></td>
                                              <td> <label>".$row['att_number']." </label> </td>
                                              <td> <label>$min:$secs </label> </td>" ?>

                                              <td style="background-color: #ff9C9E"><lable> <?= $array1[$x];?> </label> </td>

                                              <?php echo "
                                              <td><lable>".$row['att_date']."</label></td>
                                              <td><lable>".$row['final_score']."</label></td>
                                              </tr>";
                                              echo "</form></tr>"; ?>
                                          <?php   } else {?>
                                              <?php
                                            echo "<tr>
                                              <td><lable>".$row['course_name']."</label></td>
                                              <td><lable>".$row['test_name']."</label></td>
                                              <td> <label>".$row['att_number']." </label> </td>
                                              <td> <label>$min:$secs </label> </td>" ?>

                                              <td style="background-color: #ADFFB4"><lable> <?= $array1[$x];?> </label> </td>
                                            <?php echo "
                                              <td><lable>".$row['att_date']."</label></td>
                                              <td><lable>".$row['final_score']."</label></td>
                                              </tr>";
                                              echo "</tr>"; ?>


                                      <?php  }
                                    }
                                  }

                                      endwhile;?>
                      </table>
                         </div>
                          </div>

						</div>
					</div>


	<?php include("include/footer.inc") ?>
  <script type="text/javascript" src="js/confirmation.js"></script>

<!--!	<script>
		function(popup){
			var btn=document.getElementsByClassName("btn-course")
			var
		}
	</script>-->


</body>
</html>
