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
    <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/test.css">
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

    <title>Test options</title>





</head>
<body onLoad="run_first()">

	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("user-side-dash.html") ?>

      <?php

      $_SESSION['coursename'] = $_GET['name'];
      $course_id = $_GET['id'];

          $test = "SELECT *
                    FROM test
                    WHERE course_id = $course_id
                    ";
                    $result = mysqli_query($con,$test);
                    $num=mysqli_num_rows($result);

                    ?>

    	<div class="row">
      <div class="col-md-12">
          <div class="content">
              <div class="btn-controls">
                  <div class="btn-box-row row-fluid course">


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
                        <a href="test-video.php?test_id=<?=$test_id?>&name= <?= htmlentities($test_name) ?>" style="text-decoration: none"><button class="button_login" style="vertical-align:middle; display: block; width: 50%; height: 15%; font-size: 20px"><?=$test_name?> </button></a>

                        <?php
                      }
                      ?>
                      <div class="back" style="margin:3% 50%;"><a href="dashboard.php"> <button class="btn btn-danger btn-lg" style="margin: auto"> <span> Back to course page </span> </button></a></div>


                      <?php
                      }

                         ?>

                       </div>
                       </div>
                     </div>
                   </div>
                 </div>
              	</div>

<?php include("include/footer.inc") ?>
  <script type="text/javascript" src="js/confirmation.js"></script>

</body>
</html>
