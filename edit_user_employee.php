<?php


require 'database.php';
session_start();
//echo "successful i";?>



<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>


    <script src="croppie.js"></script>
    <link rel="stylesheet" href="croppie.css" />


        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <title>Dashboard</title>

</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">

      <?php    include("user-side-dash.html");?>



    	<div class="row">

                    <div class="col-md-12 col-md-9">


                             <div class="row containermember">

                                  <div class="col-md-9">
                                    <div class="member">
                                      <?php $sql= "select * from user WHERE email = '$email'";
                                			$records = mysqli_query($con,$sql);
                                			 ?>
                                       <?php
                                     while($row = mysqli_fetch_array($records)):
                                         {
                                           $user_type =  $row['user_type'];
                                           $_SESSION['user_type'] = "$user_type";
                                           ?>
                                           <h1>Edit User Details</h1>
                                    <div class="row">

                                      <form action="user-process.php" method="post" enctype="multipart/form-data">
                                  <div class="col-md-4"></div>
                                  <div class="col-md-4">
                                  <?php echo " <img id='btnfile' src='images/".$row['image_name']."' width='auto;' height='auto;'>";?></center>
                                    </div>
                                    <div class="col-md-4"></div>

                                        <div class='image_select_div' style='display:none'>
                                               <input type=file id=imagename name=imagename />
                                          </div>


                                      </div>

                                        <?php echo "<input type=hidden name=user_id value='".$row['user_id']."'>"; // This is hidden field ?>
                                        <?php echo "<input class='inputwidthforvreateuser' type=hidden name=user_type value='".$row['user_type']."'>"; // This is hidden field?>


                                        <br>
                                        <br>
                                            <div class="row">
                                              <br>
                                              <div class="col">
                                                  <label for="fname">FIRST NAME</label>
                                                  <?php echo "<input class='inputwidthforvreateuser' type=text name=fname value='".$row['fname']."'>"; ?>
                                                </div>
                                            </div>

                                            <div class="row">
                                              <div class="col">
                                                  <label for="lname">LAST NAME</label>
                                                  <?php echo "<input class='inputwidthforvreateuser' type=text name=lname value='".$row['lname']."'>"; ?>
                                                </div>
                                            </div>

                                            <div class="row">
                                              <div class="col">
                                                  <label for="email">EMAIL</label>
                                                  <?php echo "<input class='inputwidthforvreateuser' type=text name=email value='".$row['email']."'>"; ?>
                                                </div>
                                            </div>


                                                      <div class="row">
                                              <div class="col">
                                                  <label for="password">PASSWORD</label>
                                                    <?php echo "<input class='inputwidthforvreateuser' type=text name=password value='".$row['password']."'>"; ?>
                                                    <span id="pwd_msg" class="error_msg"></span>
                                                    <span id="password_check" class="error_msg" style="color: red"></span>
                                                </div>
                                            </div>

                        <br>
                        <br>
                                            <div class="row">
                                              <div class="col">
                                                  <label>&nbsp;</label>
                                                    <button type=submit class="button_signup_member" onclick='return ask2()' name="update"><span> Update </span></button></a>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                        </div>
                                  </div>

                              <?php    }

                                       endwhile;?>



                          </div>

						</div>
					</div>
        



	<?php include("include/footer.inc") ?>

<script type="text/javascript">
$("#btnfile").click(function () {
    $("#imagename").click();
});
</script>
<!--!	<script>
		function(popup){
			var btn=document.getElementsByClassName("btn-course")
			var
		}
	</script>-->


  ?>
</body>
</html>
