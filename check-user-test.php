
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

     border-radius: 3px;
    overflow: hidden;
}

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
      <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <?php
            if(!empty($_GET['id'] && $_GET['name'])){
              $id = $_GET['id'];
              $course_name = $_GET['name'];

              $test = "SELECT *
                        FROM test
                        WHERE course_id = $id
                        ";
                        $result = mysqli_query($con,$test);
                        $num=mysqli_num_rows($result);

                        ?>

                        <h1>Tests for <?=$course_name ?> </h1>
                        <h4>Choose the test you wanna know the users who attempted it:</h4>


                        <?php

                        if ($num < 1) {
                          echo "No test available!";
                          ?>
                          <a href="create-test.php"> <button class="btn btn-danger btn-lg" style="float: auto;"> <span> create test </span> </button></a>


                          <?php
                        }
                        else {


                        while ($row=mysqli_fetch_array($result))
                            {
                              $test_id=$row['test_id'];
                              $test_name = $row['test_name'];
                               ?>
                <a href="check-user.php?id=<?=$test_id?>&name= <?= htmlentities($test_name) ?>"><button class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> <?= $test_name  ?></button></a>
            <?php }
          }
            } ?>
            <a href="courses.php"> <button class="btn btn-danger btn-lg" style="float: auto;"> <span> Back to course page </span> </button></a>




   </div>
 </div>
</div>





	<?php include("include/footer.inc") ?>


  </body>
</html>
