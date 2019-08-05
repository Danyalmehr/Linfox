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

    <title>Previous Results</title>
</head>
<style>
.table_heading {font-size: 30px;padding: 3%;}
.result_banner{width: 100%;background-color: #E8E1E1;font-size: 1.2em; font-weight: 500;padding: 3%;border-radius: 3%;margin-top:4%;}
</style>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("user-side-dash.html") ?>
    	<div class="row">


    <div class="col-md-9">

<?php
        $fetchqry = "SELECT final_score, test_name, fname, lname, course_name, att_date
        FROM attempt
        INNER JOIN test ON test.test_id = attempt.test_id
        INNER JOIN user ON user.user_id = attempt.user_id
        INNER JOIN courses ON courses.course_id = test.course_id
        WHERE email = '$email'
        ";
        $result=mysqli_query($con,$fetchqry);
        while ($row = mysqli_fetch_array($result)) {

        $final_score = $row['final_score'];
        $testName = $row['test_name'];
        $courseName = $row['course_name'];
        $attemptDate = $row['att_date'];
    ?>
    <div class="search_results" id="search_results">
            <table id="search_table">
              <tr><center class="table_heading">Test results for  <?php echo" $fname "?> are as following<Center></tr>
               <tr>
                    <th>Final score</th>
                    <th>Course name</th>
                    <th>Test name</th>
                    <th>Date</th>
              </tr>
      <!-- populate table from mysql database -->

                	<tr>
                    <td><?= $final_score ?><?php echo " % "?></td>
                    <td><?= $courseName ?></td>
                    <td><?= $testName ?></td>
                    <td><?= $attemptDate ?></td>
               		</tr>

            </table>
     </div>


    <?php } ?>
    </div>
    </div>
  </div>
	<?php include("include/footer.inc") ?>
</body>
</html>
