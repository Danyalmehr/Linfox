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


        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <title>Dashboard</title>

</head>

<style>
.user_image{ border: 1px solid black;
  border-radius: 50px;
height: 40px;}
</style>

<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
    	<div class="row">

                    <div class="col-md-12 col-md-9">
                          <h1>Edit User Details</h1>

                      			<?php $sql= "select * from user";
                      			$records = mysqli_query($con,$sql);
                      			 ?>
                             <div class="search_results" id="search_results">

                          	<table class="search_table" id="search_table" >
                      			<?php
                            echo "<tr>
                                      <th> Image </th>
                                      <th> First name </th>
                                      <th> Last name</th>
                                      <th> Email </th>
                                      <th> Password </th>
                                      <th> User type</th>
                                      <th> Update </th>
                                      <th> Delete </th>
                                  </tr>";
                    			    while($row = mysqli_fetch_array($records)):
                      				{
                      				echo "<tr><form action=user-process.php method=post>";
                              echo "<input type=hidden name=user_id value='".$row['user_id']."'>"; // This is hidden field
                              echo "<tr>
                                        <td>
                                        <img id='btnfile' class='user_image' id='btnfile' src='images/".$row['image_name']."' width='70px;'></td>

                                        <div class='image_select_div' style='display:none'>
                                               <input type=file id=imagename name=imagename />
                                          </div>

                                        <td><input class='inputwidthforemailandotherinputintable' type=text name=fname value='".$row['fname']."' </td>
                                        <td><input class='inputwidthforemailandotherinputintable' type=text name=lname value='".$row['lname']."'</td>
                                        <td><input class='inputwidthforemailandotherinputintable' type=email name=email value='".$row['email']."'</td>
                                        <td><input class='inputwidthforemailandotherinputintable'type=text name=password value='".$row['password']."'</td>
                                        <td><input class='inputwidthforemailandotherinputintable'type=text name=user_type value='".$row['user_type']."'</td>
                                        <td><button class='delete' type=submit name=update onclick='return ask2()'><span class='glyphicon glyphicon-wrench logo-small'></span></button></td>
                                        <td><button class='delete'type=submit name=delete onclick='return ask()'><span class='glyphicon glyphicon-trash logo-small'></span></button></td>
                                   </tr>";
                        				echo "</form></tr>";
                      				}
                                      ?>
                                      <?php endwhile;?>
                      </table>
                         </div>
                          </div>

						</div>
					</div>
          </div>
        </div>
	<?php include("include/footer.inc") ?>

  <script type="text/javascript">
  $("#btnfile").click(function () {
      $("#imagename").click();
  });
  </script>

</body>
</html>
