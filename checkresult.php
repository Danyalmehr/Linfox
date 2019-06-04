<?php
require 'database.php';
session_start();
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
	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    

          	<div class="col-md-3">

              
                <div class="span3">
                                     <div class="sidebar" style="display: inline">
                                         <ul class="widget widget-menu unstyled">
                                             <li class="left_icon"><a href="dashboard1.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                             </a></li>
                                             <!--<li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                             </li>-->

                                             <li class="active left_icon"><a href="Stest.php"><i class="menu-icon icon-inbox"></i>Test <!--<b class="label green pull-right">
                                                 11</b>--> </a></li>

                                             <!--<li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                                 19</b> </a></li>-->

                                         <!--/.widget-nav-->



                                             <li class="left_icon"><a href="previousresults.php"><i class="menu-icon icon-file"></i>Results </a></li>
             								                        <li class="left_icon"><a href="certificates.php"><i class="menu-icon icon-certificate"></i>Certificates </a></li>
             								                                <li class="left_icon"><a href="index.php"><i class="menu-icon icon-signou"></i>Logout </a></li>
                                             <!--<li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                             <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                             <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                             <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>-->
             							</ul>
                                         <!--/.widget-nav-->
                                         <!--<ul class="widget widget-menu unstyled">
                                             <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                             </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                             </i>More Pages </a>
                                                 <ul id="togglePages" class="collapse unstyled">
                                                     <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                                     <li><a href="ot her-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                                     <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                                 </ul>
                                             </li>
                                             <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                                         </ul>-->
                                     </div>
                                     <!--/.sidebar-->
                                 </div>
              
		</div>
	
	<div class="container-fluid">
			<div class="row">

              
                
              	<div class="col-md-8">
    <div class="options">
    <?php
			if(isset($_POST['submit'] , $_POST['myVariable']))
			{
				if(!empty($_POST['userans']))
				{
					$count = count($_POST['userans']);
					//echo " <h3> There were ".$count." questions in this test </h3>";
					$i = 1;
					 $score = 0;
					 $selected = $_POST['userans'];
           $test_id= $_POST['myVariable']; // Getting test_id from Stest
				//	print_r($selected); //check to see weather it is retriving the value that user have selected
					$fetchqry = "SELECT * FROM question where test_id='$test_id'";
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
      for ($x=0; $x < $count ; $x++) {?>
        <form class="test-display" action="" method="post">
        <div class="options">


            <p><?= $i?>.&nbsp;<?=$array4[$x]?></p>
            <?php if ($array2[$x] != $array1[$x]) {?>
              <p> <span style="background-color: #ff9C9E"><?= $array1[$x]; ?></span> </p>
              <p> <span style="background-color: #ADFFB4"><?= $array2[$x] ?></span> </p>

          <?php $i += 1;  } else {?>

            <p> <span style="background-color: #ADFFB4"><?= $array1[$x] ?></span> </p>
            <?php $score = $score + 1; ?>

            <?php  }?>

        </div>
      <?php } ?>
<?php
          $fetchqry3 = "INSERT INTO attempt (`final_score`, `test_id`) values ('$score', '$test_id')";
          $result3 = mysqli_query($con,$fetchqry3);
          $scorePercentage = ($score/$count)*100; ?>

            <center class="result_display">
          <?php echo " Number of questions : ".$count."  <br>";
          echo " Number of correct questions : ".$score." <br>";
          echo (" Your score : ".$scorePercentage."% ");?>
        </center>

        <?php  mysqli_free_result($result);?>

          <form>
            <!--<input type="button" class="button" name="back" style="vertical-align:middle" value="Take the test again" onclick="history.go(-1)">-->
            <a href="dashboard1.php"><input type="button" class="button" name="back" style="vertical-align:middle" value="Back to dashboard" onclick="history.go(-1)"></a>
          </form>


			</div>
      	</div>

    </div>  </div>
		



	<?php include("include/footer.inc") ?>


  </body>
</html>
