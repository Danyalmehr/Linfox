<?php require 'database.php';
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

	<style>
  .member_table {
    border-collapse: collapse;
  }
  th, td
   {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(odd) {background-color: #f2f2f2;}

		.btn-course {
			height: 100px;
			vertical-align: middle;
		}
		.course-btn:hover{

			color: #3E4FD7;
		}
		.course-txt{
			vertical-align:middle;
		}

		.btn-lg{
			height: 10em;
		}

		.btn-course{
			margin-top: 2em;
			margin-left: 1em;
		}
		.course{
			margin-left: 1em;
		}
    a
    {
      text-decoration: none;
      color: White;
    }
    a:hover{text-decoration: none;
    color: White;}

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
    	<div class="row">

                    <div class="span8">
                        <div class="content">
                          <h1>Edit User Details</h1>

                          <div class="edit_member">
                      			<?php $sql= "select * from user";
                      			$records = mysqli_query($con,$sql);
                      			 ?>
                      			<table class="member_table" >
                      			<?php
                            echo "<tr>
                                      <th>First name</th>
                                      <th>Last name</th>
                                      <th>Email</th>
                                      <th>Password</th>
                                      <th>User type</th>
                                      <th>Update records</th>
                                  </tr>";
                    			    while($row = mysqli_fetch_array($records)):
                      				{
                      				echo "<tr><form action=Updateuser.php method=post>";
                              echo "<td><input type=hidden name=user_id value='".$row['user_id']."'</td>"; // This is hidden field
                              echo "<tr>
                                        <td><input type=text name=fname value='".$row['fname']."'</td>
                                        <td><input type=text name=lname value='".$row['lname']."'</td>
                                        <td><input type=email name=email value='".$row['email']."'</td>
                                        <td><input type=text name=password value='".$row['password']."'</td>



                                        <td><input type=text name=user_type value='".$row['user_type']."'</td>
                                        <td><input type=submit value=Update> </td>
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
	<?php include("include/footer.inc") ?>
<!--!	<script>
		function(popup){
			var btn=document.getElementsByClassName("btn-course")
			var
		}
	</script>-->
</body>
</html>
