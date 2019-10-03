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

<style>

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


    .image {
      display: inline-block;

      display: inline-block;
      width: 300px;
      height: 300px;
      margin: 8px;
    }

    .image:hover {
      display: inline-block;
      width: 300px;
      height: 300px;
      margin-top: 4px;
      opacity: 0.9;
      transition: .5s ease;
      padding: 1%;
      border: 3px solid black;

    }


    .overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgb(0, 0, 0); /* Fallback color */
     background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
     color: #f1f1f1;
      width: inherit;
      height: 30%;
      -webkit-transition: .3s ease;
      transition: .3s ease
      border: 1px dotted black;
      padding: 1%;
        display: inline-block;
        margin: 8px;

    }

.overlay:hover {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgb(0, 0, 0); /* Fallback color */
 background: rgba(0, 0, 0, 0.9); /* Black background with 0.5 opacity */
 color: #f1f1f1;
  width: inherit;
  height: 30%;
  -webkit-transition: .3s ease;
  transition: .3s ease
  border: 1px dotted black;
  padding: 1%;
    display: inline-block;
}



.container-menu:hover .overlay {

  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  border: 1px dotted black;
  padding: 1%;
  display: inline-block;
}

.text {
  color: Orange;
  font-size: 22px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
    display: inline-block;
}


</style>
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
            <div class="user-admin-menu">

            <div class="col-md-12">
                  <h1>Choose user</h1>
                  <br><br><br>

                  <?php  while ($row=mysqli_fetch_array($result))
                      {
                        $user_id = $row['user_id'];
                        $first_name = $row['fname'];
                        $last_name = $row['lname'];
                        $img_profile_ =  $row['image_name'];
                        $name = "{$first_name} {$last_name}"
                        ?>



                  <div class="container-menu">
                    <a href="byuser-check-user-course.php?id=<?=$user_id?>&name=<?= htmlentities($name) ?>">
                      <?php echo " <img class='image' id='btnfile' src='images/".$img_profile_."''>";?>
                    <div class="overlay">
                      <div class="text"><?= $name  ?></div>
                    </div>
                    </a>
                  </div>



                  <?php
                      }

                  ?>

                </center>

                           </div>
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
