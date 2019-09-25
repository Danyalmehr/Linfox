<?php
session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}
elseif ($_SESSION['usertype'] == '') {
    // code...
    header('location: index.php');
    exit;
  }

require 'database.php';

//echo "successful";


?>



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

	<style>
		.btn-course {
			height: 100px;
			vertical-align: middle;
		}
		.course-btn:hover{

			color: #3E4FD7;
		}
		.course-txt{
			vertical-align:middle;
		}

		.btn-lg{
			height: 10em;
		}

		.btn-course{
			margin-top: 2em;
			margin-left: 1em;
		}

		.course .btn-course:hover {background-color: #4E4E4E;
		box-shadow: 0 5px #666;
			transform: translateY(4px);
			cursor: pointer;
			opacity: 2;
			transition: 0.3s;
			padding-right: 100px;

		}

.course .btn-course:active {
  background-color: #3e8e41;

}

		.course{
			margin-left: 1em;
		}
    a
    {
      text-decoration: none;
      color: White;
    }
    a:hover{text-decoration: none;
    color: White;}


			@media only screen and (max-width: 768px) and (min-width: 428px) {


			.course h1{
				font-size: 18px;
			}


}

		@media only screen and (max-width: 428px) {
			.videos {

		margin-left: 0em;

	}

			. h1, .videos h2{
				font-size: 16px;
			}

			.test .test_name{

				font-size: 12px;
			}
			.test .btn {

				width: 100%;
			}

		}

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

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
      <?php
      $fetchqry1 = "SELECT count(ans_id) AS countOfAnsId
                   FROM useranswer
                   INNER JOIN question ON question.que_id = useranswer.que_id
                   WHERE ans_status IS NULL and que_type= 'shortans'
                    ";
      $result1=mysqli_query($con,$fetchqry1);
      $row1=mysqli_fetch_array($result1);

      $fetchqry = "SELECT count(Distinct test_id) AS countOfTestId, count(Distinct user_id) AS countOfUserId
                   FROM useranswer
                   WHERE ans_status IS NULL
                    ";
      $result=mysqli_query($con,$fetchqry);

      $count_ans = $row1['countOfAnsId'];
      $count_test = $row['countOfTestId'];
      $count_user = $row['countOfUserId'];


       ?>

    	<div class="row">

                    <div class="col-md-12">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid course">
					<h1 style="margin: 1em"> Admin Dashboard</h1>

          <div class="col-sm-2 colum2-user-process">
            <div class=" user-process">
            <?= $count_ans ?>
            </div>
              Total number of unmarked ANSWERS
          </div>

          <div class="col-sm-2 colum2-user-process">
            <div class=" user-process">
            <?= $count_test ?>
            </div>
              Total number of unmarked TESTS
          </div>

          <div class="col-sm-2 colum2-user-process">
            <div class=" user-process">
            <?= $count_user ?>
            </div>
              Total number of unmarked USERS
          </div>





                                </div>

                            </div>
						</div>
					</div>
          </div>



          <div class="row">

                        <div class="col-md-12">
                            <div class="content">
                                <div class="btn-controls">
                                    <div class="btn-box-row row-fluid course">
              <h1 style="margin: 1em"> Shortcuts</h1>

    <a href="check-on-user.php"><button class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> User Progress</button></a>
    <a href="question-course.php"><button class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> Create Question</button></a>
    <a href="create-course.php"><button class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> Create Course</button></a>
    <a href="check-on-user.php"><button class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> Create Test</button></a>
  </div>
</div>

</div>
</div>
</div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart()
    {
         var data = google.visualization.arrayToDataTable([
                   ['test_id', 'user_id'],
                   <?php
                   while($row = mysqli_fetch_array($result))
                   {
                        echo "['".$row["countOfTestId"]."', '".$row["countOfUserId"]."'],";
                   }
                   ?>
              ]);
         var options = {
               title: 'Percentage of Male and Female Employee',
               //is3D:true,
               pieHole: 0.4
              };
         var chart = new google.visualization.PieChart(document.getElementById('piechart'));
         chart.draw(data, options);
    }
    </script>

    <div class="row">

      <br /><br />
    <div style="width:900px;">
         <h3 align="center">Make Simple Pie Chart by Google Chart API with PHP Mysql</h3>
         <br />
         <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>
  </div>







        </div>
	<?php  include("include/footer.inc") ?>

</body>
</html>
