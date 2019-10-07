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
  .user-admin-menu{align-items: center;text-align: center;background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.1); /* Black background with 0.5 opacity */
  color: ##ff7733;
  padding: 3%;
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
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
      <div class="row">
        <div class="col-md-12">
          <div class="user-admin-menu">
            <h2 style="font-size:; margin-bottom: 1em; margin: auto"> Creating Questions</h2>

            <?php

            $courses = "SELECT *
                      FROM courses
                      ";
            					$result = mysqli_query($con,$courses);
                      ?>
                      <h2 style="float: auto;"> To create questions you need to choose your course first</h2>
                      <h3 >STEP 1: Choose your COURSE</h3>
                      <h4>If you have not created your desired course yet, you MUST create your <a href="create-course.php"> <button class="btn btn-danger btn-md" style="float: auto; .btn"> <span>  course </span> </button></a> first</h4>


 </h4>


                      <?php
            					while ($row=mysqli_fetch_array($result))
                          {
                            $course_name=$row['course_name'];
                            $course_id=$row['course_id'];
                            $course_desc=$row['course_desc'];
                            $course_image_name=$row['course_image_name'];
?>

            <!--  <a href="question-test.php?id=<?=$course_id?>&name= <?= htmlentities($course_name) ?>">

                <button class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> <?= $course_name  ?>
                </button>

              </a> -->



                            <div class="container-menu">
                              <a href="question-test.php?id=<?=$course_id?>&name= <?= htmlentities($course_name) ?>">
                                <?php echo " <img class='image' id='btnfile' src='images/".  $course_image_name."''>";?>
                              <div class="overlay">
                                <div class="text"><?= $course_name ?></div>
                              </div>
                              </a>
                            </div>


              <?php } ?>
   </div>
 </div>
 </div>
</div>





	<?php include("include/footer.inc") ?>


  </body>
</html>
