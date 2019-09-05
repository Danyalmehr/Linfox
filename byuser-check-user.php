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
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>

    <?php include("include/nav.inc") ?>
    <?php

        $fetchqry = "SELECT *
        FROM user
        ";
        $result=mysqli_query($con,$fetchqry);


     ?>

        <div class="container-fluid">
          <?php include("admin-side-dash.html") ?>


          <div class="row">
            <div class="col-md-1">

            </div>
              <div class="col-md-8">
                <center class="table_heading">

                  <h1>Choose user</h1>
                  <?php  while ($row=mysqli_fetch_array($result))
                      {
                        $user_id = $row['user_id'];
                        $first_name = $row['fname'];
                        $last_name = $row['lname'];
                        $name = "{$first_name} {$last_name}"
                        ?>

      <a href="byuser-check-user-course.php?id=<?=$user_id?>"><button class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> <?= $name  ?></button></a>
      </center>
                        <?php
                      }

                  ?>

                </center>
                             </div>
                           </div>



     </div>


	<?php include("include/footer.inc") ?>
<script type="text/javascript" src="js/confirmation.js"></script>

<script type="text/javascript">
/*$(document).ready(function(){

    $("#mcq").click(function(e) {
        $("#mcqform").show();

        e.preventDefault();

    });
});*/

var mcqform = document.getElementById("mcqform");
var shortanswerform = document.getElementById("shortanswerform");


function showmcqform(){
    mcqform.style.display = "block";
    shortanswerform.style.display = "none";


}

function hidemcqform() {
      shortanswerform.style.display = "block";
      mcqform.style.display = "none";

}

</script>

  </body>
</html>
