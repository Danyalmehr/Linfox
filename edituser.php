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

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
    	<div class="row">

        <div class="col-md-12">
          <div class="user-admin-menu">
                          <h2>Edit User Details</h2>

                      			<?php $sql= "select * from user";
                      			$records = mysqli_query($con,$sql);
                      			 ?>
                             <div class="search_results" id="search_results">

                          	<table class="search_table" id="search_table" >
                      			<?php
                            echo "<tr>

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
