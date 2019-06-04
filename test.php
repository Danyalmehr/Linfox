<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link type="text/css" href="css/theme.css" rel="stylesheet">

    <title> ABOUT US </title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
    	<div class="row">
        	<div class="col">
                <br>
                <h3> THIS IS TEST PAGE </h3>

                <?php
                  $fetchqry = "SELECT * FROM test";
                  $result = mysqli_query($conn, $fetchqry);
                  $num=mysqli_num_rows($result);
                  while ($row = mysqli_fetch_array($result)){
                  $testName = $row['test_name'];
                  $testID = $row['test_id'];

                 ?>

                 <form class="" action="test.php" method="post">

              <a href="view.php?id='.$testID.'"><button class="button" id="<?=$test_id?>" name="submit" style="vertical-align:middle"> <span> <?php echo $testName ?></span></button></a>


                </form>
              <?php };
              if(isset($_POST['submit'])){
                $array1 = $_POST['submit'], $row['test_id'];
                foreach ($_POST['submit'] as $Test) {
                  array_push($array1, $Test);
                }
                $fetchqry2 = "INSERT INTO question(`test_id`) values ('$testID')";
                $result2 = mysqli_query($conn, $fetchqry2);
              }
               ?>



                    </div>
                    </div>
                    </div>


	<?php include("include/footer.inc") ?>
  </body>
</html>
