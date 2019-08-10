
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

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>



<?php

            if(isset($_POST['submit'])){

                $test_name = $_POST['test_name'];
                echo "$test_name";
                $course_id = $_POST['course_id'];
                echo "$course_id";

                $qry = "INSERT INTO `test`(`test_name`, `course_id`) VALUES ('$test_name','$course_id')";
                if($result=mysqli_query($con,$qry))
                {
                  echo "your new details have been successfully INSERTED!! ". mysqli_error($con);
                  echo "<br>redirecting...";

                  header("refresh:5;  URL=create-course.php");
                }
                else
                {
                  echo "something is wrong with INSERTION". mysqli_error($con);
                }

              }
            if (isset($_POST['delete']))
              {
                      $fetchqry1 = "DELETE FROM test
                      WHERE test_id='$_POST[test_id]'";
                        if(mysqli_query($con,$fetchqry1))
                        {
                            echo "your TEST is successfully DELETED!!". mysqli_error($con);
                          echo "<br>redirecting...";

                          header("refresh:5;  URL=edit-test.php");
                        }
                        else
                        {
                          echo "something is wrong with delete". mysqli_error($con);
                        }
                }

          if (isset($_POST['update']))
              {
                    $fetchqry = "UPDATE test SET `test_name`= '$_POST[test_name]'
                    WHERE test_id ='$_POST[test_id]'";
                      if(mysqli_query($con,$fetchqry))
                      {
                        echo "your new details have been successfully UPDATED!!". mysqli_error($con);
                        echo "<br>redirecting...";

                        header("refresh:5;  URL=edit-test.php");
                      }
                      else
                      {
                        echo "something is wrong with Update". mysqli_error($con);
                      }
                }
 ?>

	<?php include("include/footer.inc") ?>


  </body>
</html>
