<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}
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

.user-admin-menu>h2 {text-align: center;
/* Black background with 0.5 opacity */
color: Black;}

.user-admin-menu
{
  align-items: center;text-align: center;
  background: rgb(0,0,0,0.1); /* Fallback color */
  background: rgba(0, 0, 0, 0.1); /* Black background with 0.5 opacity */
  color: #ff7733;
  padding:3%;
}
  .container-menu {
  position: relative;
  width: auto;
  display: inline-block;

}



	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">


      <?php include("admin-side-dash.html") ?>
      <div class="row">
        <div class="col-md-12">
          <div class="user-admin-menu">
		  <h2 style="font-size: 30Px;"> Marking Answers</h2>
            <?php

            $_SESSION['test_name'] = $_GET['test_name'];
            $_SESSION['test_id'] = $_GET['test_id'];

            $courses = "SELECT DISTINCT que, useranswer.que_id
                      FROM useranswer
                      INNER JOIN question ON useranswer.que_id = question.que_id
                      INNER JOIN user ON user.user_id = useranswer.user_id
                      INNER JOIN test ON test.test_id = useranswer.test_id
                      where que_type = 'shortans' AND course_id = ".$_SESSION["course_id"]." AND useranswer.test_id = ".$_SESSION['test_id']." AND useranswer.user_id = ".$_SESSION["user_id"]."
                      ";
            					$result = mysqli_query($con,$courses) or mysql_error($con,$courses);
                      //where que_type = 'shortans' AND course_id = ".$_SESSION["course_id"]." AND useranswer.test_id = $test_id AND useranswer.user_id = ".$_SESSION["user_id"]."
                      //INNER JOIN question ON question.que_id = useranswer.que_id
                      //INNER JOIN user ON user.user_id = useranswer.user_id
                    //  INNER JOIN test ON test.test_id = useranswer.test_id
                      //ORDER BY userans DES


                      ?>
                    <center>
                      <h3>Course name: <?= $_SESSION['course_name'] ?></h3>
                      <h3>Test name: <?= $_SESSION['test_name'] ?></h1>
                      <h3>User name: <?= $_SESSION['name'] ?></h3>
                    </center>
                    <h3>Choose the question you want to mark <?= $_SESSION['name'] ?> answer:</h3>



                      <?php
            					while ($row=mysqli_fetch_array($result))
                          {

                            $que = $row['que'];
                            $que_id = $row['que_id'];

                            ?>
        <a href="mark-answers.php?que_id=<?=$que_id?>&que=<?=htmlentities($que)?>" style="text-decoration: none"><button class="button_login" style="vertical-align:middle; display: block; width: 50%; height: 15%; font-size: 20px"><?=$que?> </button></a>


              <?php } ?>
             </div>
           </div>
          </div>
            </div>





	<?php include("include/footer.inc") ?>


  </body>
</html>
