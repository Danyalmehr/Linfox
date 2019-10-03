<?php


 require 'database.php';
session_start();
//echo "successful";?>



<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>


        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <title>Dashboard</title>

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
      width: 200px;
      height: 200px;
      margin-top: 4px;
    }

    .image:hover {
      display: inline-block;
      width: 200px;
      height: 200px;
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
      font-size: 13px;
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

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>



    	<div class="row containermember">
        <div class="col-md-12 col-md-9">
        <div class="user-admin-menu">
          <div class="member">
					                 <h2 style="margin: 1em"> Create Course</h2><br>
                           <br>



              <form class="form-horizontal" action="course-process.php" method="post" enctype="multipart/form-data">

                <!--  <div class="profileback">
                </div>-->


                <div class="container-menu">


                  <?php $sql= "select course_image_name from courses";
                  $records = mysqli_query($con,$sql);

                     while($row = mysqli_fetch_array($records)):
                       {
                       $image_name =  $row['course_image_name'];
                       ?>
                     <?php    }

                              endwhile;?>
                  <?php echo " <img class='image' id='btnfile' src='images/".$image_name."''>";?>
                  <div class="overlay">
                    <div class="text">Please select course image</div>
                  </div>

                </div>



                <div class="col-md-12">
                    <div class='image_select_div' style='display:none'>
                           <input type=file id=imagename name=imagename />
                      </div>
                        </div>

                        <br>
                        <br>



                  <div class="form-group">

                    <br>
                      <br>
                        <br>
                    <label class="control-label col-sm-2" for="name">Course name:</label>
                    <div class="col-sm-10">
                      <input type="text" name="course_name"  class="form-control" id="course_name"  placeholder="Enter course name" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Course description:</label>
                    <div class="col-sm-10">
                      <input type="text" name="course_desc" class="form-control" id="course_desc" placeholder="Enter course description">
                    </div>
                  </div>
                  <center class="table_heading">
                  <div class="form-group">
                    <br>
                    <br>
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="submit" onclick='return ask5()' class="button_signup_member">Submit</button>
                    </div>
                  </div>
                </center>
                </form>

                            </div>

                            </div>
						</div>
					</div>
        </div>


	<?php include("include/footer.inc") ?>
  <script type="text/javascript" src="js/confirmation.js"></script>


  <script type="text/javascript">
  $("#btnfile").click(function () {
      $("#imagename").click();
  });
  </script>

</body>
</html>
