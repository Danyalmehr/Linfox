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

</head>

<style>
.user_image1{ border: 1px solid black;
  border-radius: 50%;
height:140px;}

.user-process{
border: 1.2px solid black;
border-radius: 50%;
height:80px;
width: 80px;
font-size: 25px;
font-weight: bolder;
font-family: sans-serif;
text-align: center;
margin-bottom: 6px;
left: 50px;
vertical-align: middle;
line-height: 70px;
margin: 19px 15px;
}

.user-process-green
{
  border: 1.2px solid black;
  background-color: #ADFFB4;
  border-radius: 50%;
  height:80px;
  width: 80px;
  font-size: 25px;
  font-weight: bolder;
  font-family: sans-serif;
  text-align: center;
  margin-bottom: 6px;
  left: 50px;
  vertical-align: middle;
  line-height: 70px;
  margin: 19px 15px;
  color: green;
}



.user-process-red
{
  border: 1.2px solid black;
  background-color: #ff9C9E;
  border-radius: 50%;
  height:80px;
  width: 80px;
  font-size: 25px;
  font-weight: bolder;
  font-family: sans-serif;
  text-align: center;
  margin-bottom: 6px;
  left: 50px;
  vertical-align: middle;
  line-height: 70px;
  margin: 19px 15px;
  color: red;
}

.user-process-1{
font-size: 25px;
font-weight: bolder;
font-family: sans-serif;
}

.user-process-12
{
  margin-top: 2%;
  font-size: 18px;
  font-weight: bolder;
  font-family: sans-serif;
}

.colum2-user-process
{
  padding: 6px;
}

.colum2-user-process-green
{
    padding: 6px;
    color: green;

}

.colum2-user-process-red
{
    padding: 6px;
    color: red;

}
</style>

<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>

    <?php include("include/nav.inc") ?>
    <?php
      if(!empty($_GET['course_id']))
      {
        $user_id = $_GET['user_id'];
        $course_id = $_GET['course_id'];


        $fetchqry = "SELECT DISTINCT att_status, att_number, time_taken, att_date, final_score, test_name
                     FROM courses
                     INNER JOIN test ON courses.course_id = test.course_id
                     INNER JOIN attempt ON attempt.test_id = test.test_id
                     WHERE user_id = $user_id AND courses.course_id = $course_id
                      ";
        $result=mysqli_query($con,$fetchqry);
        $num=array(mysqli_num_rows($result));

        $fetchqry3 = "SELECT DISTINCT attempt.test_id
                     FROM courses
                     INNER JOIN test ON courses.course_id = test.course_id
                     INNER JOIN attempt ON attempt.test_id = test.test_id
                     WHERE user_id = $user_id AND att_status = 'Completed' AND courses.course_id = $course_id
                      ";
        $result3=mysqli_query($con,$fetchqry3);
        $num3=mysqli_num_rows($result3);

        $fetchqry1 = "SELECT count(test_id) AS countOfTestId
                     FROM test
                     WHERE course_id = $course_id
                      ";
        $result1=mysqli_query($con,$fetchqry1);
        $row1=mysqli_fetch_array($result1);

        $fetchqry2 = "SELECT fname, lname, course_name ,image_name
                     FROM user, courses
                     WHERE course_id = $course_id AND user_id = $user_id
                      ";
        $result2=mysqli_query($con,$fetchqry2);
        $row2=mysqli_fetch_array($result2);
        $fname = $row2['fname'];
        $image_name = $row2['image_name'];
        $lname = $row2['lname'];
        $course_name = $row2['course_name'];
        $name = "{$fname} {$lname}";


        $count_test = $row1['countOfTestId'];

        $completed = $num3/$count_test;
        $percentage_completed = $completed*100;

        if ($num < 1) {
          echo "The test has not been completed!";
        }
        else {
               ?>

        <div class="container-fluid">
          <?php include("admin-side-dash.html") ?>

          <div class="row">
            <div class="col-md-12 col-md-8">

<center>
            <center><div class="col-md-12 heading1">
            <?php echo " <img class='user_image1' src='images/".  $image_name."' width ='140'>";?>
            <br> <br>
            <div class="user-process-1">
              <?= $name ?>
            </div>
            <div class="user-process-12">
              Course name : <?= $course_name ?>
            </div>
           <br> <br>
            </div>


            <div class="row">
            <div class="col-sm-2 colum2-user-process">
                <div class=" user-process">
                  <?php $percentage_to_be_completed = round((100 - $percentage_completed),0); ?>
                  <?= "$percentage_to_be_completed%"?>
                </div>
                  Percentage of course to be completed
              </div>

              <div class="col-sm-2 colum2-user-process">
                <div class=" user-process">
                  <?php $percentage_completed_1  = round($percentage_completed,0); ?>
                  <?= "$percentage_completed_1%" ?>
                </div>
                  Percentage of course completed
              </div>

              <div class="col-sm-2 colum2-user-process">
                <div class=" user-process">
                <?= $count_test ?>
                </div>
                  Total number of tests
              </div>

              <div class="col-sm-2 colum2-user-process-green">
                <div class=" user-process-green">
                  <?= $num3 ?>
                </div>
                  Tests completed
              </div>
              <div class="col-sm-2 colum2-user-process-red">
                <div class="user-process-red">
                  <?= $count_test - $num3 ?>
                </div>
                  Incompleted tests
              </div>

              <div class="col-sm-2 colum2-user-process">
                <div class="user-process">
                  <?= implode($num) ?>
                </div>
                  Total number of attempts
              </div>
          </div>
        </Center></tr><br><br>
                    <div class = "search_results" id="search_results">
                  <table class="search_table" id="search_table" >
            <?php
            echo "<tr>
                    <th>Test name</th>
                    <th>Attempt number</th>
                    <th>Time Taken</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Score</th>
                  </tr>";

              while ($row=mysqli_fetch_array($result))
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
              }
            }
              ?>
      </table></Center>
         </div>
           </div>
          </div>

</div>


	<?php include("include/footer.inc") ?>

  </body>
</html>
