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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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


    .logo-small {
      color: #f4511e;
      font-size: 10px;
    }

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>


    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
    	<div class="row">

                    <div class="col-md-9 col-sm-12">
                        <div class="content">
                          <h1>Edit Test Details</h1>
                      			<?php $sql= "select * from test";
                      			$records = mysqli_query($con,$sql);
                            $num=mysqli_num_rows($records);

                            $sql1= "select * from courses";
                      			$records1 = mysqli_query($con,$sql1);


                      			 ?>
                      			<table class="table table-hover" >
                      			<?php
                            echo "<tr>
                                      <th>Test Name</th>
                                      <th>Course Name</th>
                                      <th>Update</th>
                                      <th>Delete</th>

                                  </tr>";
                              for ($i=0; $i < $num ; $i++) {
                    			    $row = mysqli_fetch_array($records);

                      				echo "<tr><form action='course-edit-process.php' method=post>";
                              echo "<td><input type=hidden name=test_id value='".$row['test_id']."'</td>"; // This is hidden field
                              echo "<tr>
                                        <td><input type=text name=course_name value='".$row['test_name']."'</td>";
                                        ?>
                                        <td><select class="" name="">
                                      <?php   while($row1 = mysqli_fetch_assoc($records1))
                                       {
                                         echo "<option value= $row1[course_name]>$row1[course_name]</option>";
                                       }?>
                                     </select></td>
                                       <?php
                                        "<td><button type=submit name=update ><span class='glyphicon glyphicon-wrench logo-small' style='font-size: 1.5em;'></span></button></td>
                                        <td><button type=submit name=delete ><span class='glyphicon glyphicon-trash logo-small' style='font-size: 1.5em;'></span></button></td>
                                   </tr>";
                        				echo "</form></tr>";

                              }
                              ;

                ?>
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
