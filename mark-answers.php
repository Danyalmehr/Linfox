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

    <div class="container-fluid">

      <?php include("admin-side-dash.html") ?>
      <div class="row">
      <div class="col-md-12">
        <div class="user-admin-menu">
		  <h2 style="font-size: 30Px;"> Marking Answers</h2>
            <?php

            $que = $_GET['que'];
            $que_id = $_GET['que_id'];

            $courses = "SELECT MAX(ans_id) as ans_id, userans, que
                      FROM useranswer
                      INNER JOIN question ON useranswer.que_id = question.que_id
                      INNER JOIN user ON user.user_id = useranswer.user_id
                      INNER JOIN test ON test.test_id = useranswer.test_id
                      where que_type = 'shortans' AND course_id = ".$_SESSION["course_id"]." AND useranswer.test_id = ".$_SESSION['test_id']." AND useranswer.user_id = ".$_SESSION["user_id"]." AND useranswer.que_id = $que_id
                      group by userans
                      limit 1
                      ";
            					$result = mysqli_query($con,$courses) or mysql_error($con,$courses);
                      //where que_type = 'shortans' AND course_id = ".$_SESSION["course_id"]." AND useranswer.test_id = $test_id AND useranswer.user_id = ".$_SESSION["user_id"]."
                      //INNER JOIN question ON question.que_id = useranswer.que_id
                      //INNER JOIN user ON user.user_id = useranswer.user_id
                    //  INNER JOIN test ON test.test_id = useranswer.test_id
                      //ORDER BY userans DES

                      $user_id = $_SESSION["user_id"];
                      $test_id = $_SESSION['test_id'];
                      ?>
                      <center>
                        <h3>Course name: <?= $_SESSION['course_name'] ?></h3>
                        <h3>Test name: <?= $_SESSION['test_name'] ?></h3>
                        <h3>User name: <?= $_SESSION['name'] ?></h3>
                      </center>
                      <h3>Choose the question you want to mark <?= $_SESSION['name'] ?> answer:</h3>


                      <?php
            					while ($row=mysqli_fetch_array($result))
                          {

                            $que = $row['que'];
                            $user_ans = $row['userans'];
                            $ans_id = $row['ans_id'];


                            ?>
                            <p style="color:black;"> <?= $que ?> </p>
                            <p style="color:black;"> <?= $user_ans ?> </p>


                            <form id="frmbox" action="mark-process.php" method="post" onsubmit="return formSubmit();">
                            <center>
                              <input type="hidden" name="que_id" value="<?= $que_id ?>">
                              <input type="hidden" name="user_id" value="<?=  $user_id?>">
                              <input type="hidden" name="test_id" value="<?=  $test_id?>">
                              <input type="hidden" name="ans_id" value="<?=  $ans_id?>">



                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                              <label class="btn btn-secondary active">
                                <input type="radio" name="options" id="option1" autocomplete="off" value="Excellent" checked> Excellent
                              </label>
                              <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option2" autocomplete="off" value="Average"> Average
                              </label>
                              <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option3" autocomplete="off" value="Bad"> Bad
                              </label>
                            </div><br><br>
                            <h3 id="success"></h3>
                          </center>


              <?php } ?>
              <button type="submit" class="btn btn-success" style="width: 10%">Next</button>
            </form>

             </div>
           </div>
          </div>
            </div>

	<?php include("include/footer.inc") ?>

<script type="text/javascript" src="formjs.js">

</script>

  </body>
</html>
