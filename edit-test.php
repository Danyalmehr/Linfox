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
                        <?php   if(isset($_POST['selectedcourse'])){
                            $id = $_POST['course_id'];
                            $coursename = $_POST['course_name'];
                            $test = "SELECT *
                                      FROM test
                                      WHERE course_id = $id
                                      ";
                                      $result = mysqli_query($con,$test);
                                      $num=mysqli_num_rows($result);



                                      ?>

          <h1>Edit Tests for <?= $_POST['course_name'] ?> </h1>
          <h4 style="float: auto;">If your desired TEST is not here you MUST create your TEST first at <a href="create-test.php"> <button class="btn btn-danger btn-md" style="float: auto; .btn"> <span>  TEST </span> </button></a></h4>



                                      <?php

                                      if ($num < 1) {
                                        echo "No test available!";
                                        ?>
                                        <a href="create-test.php"> <button class="btn btn-danger btn-lg" style="float: auto;"> <span> create test </span> </button></a>


                                        <?php
                                      }
                                      else {
                                             ?>
                      			<table class="table table-hover" >
                      			<?php
                            echo "<tr>
                                      <th>Test Name</th>
                                      <th>Course Name</th>
                                      <th>Video</th>
                                      <th>Update</th>
                                      <th>Delete</th>

                                  </tr>";

                              while ($row=mysqli_fetch_array($result))
                              {
                      				echo "<tr><form action='test-process.php' method=post>";
                              echo "<td><input type=hidden name=test_id value='".$row['test_id']."'</td>"; // This is hidden field
                              echo "<td><input type=hidden name=course_id value='".$id."'</td>"; // This is hidden field

                              echo "<tr>
                                        <td><input type=text name=test_name value='".htmlspecialchars($row['test_name'], ENT_QUOTES)."'</td>

                                        <td>  <a href='edit-course.php'><label> $coursename </label></td></a>

                                        <td><input type=text name=test_video value='".htmlspecialchars($row['test_video'], ENT_QUOTES)."'</td>


                                        <td><button type=submit name=update onclick='return ask2()'><span class='glyphicon glyphicon-wrench logo-small' style='font-size: 1.5em;'></span></button></td>
                                        <td><button type=submit name=delete onclick='return ask()'><span class='glyphicon glyphicon-trash logo-small' style='font-size: 1.5em;'></span></button></td>
                                   </tr>";
                        				echo "</form></tr>";
                              }
                            }
                        };
                ?>
                      </table>
                        </div>

						</div>
					</div>
          </div>
        </div>
	<?php include("include/footer.inc") ?>
  <script type="text/javascript" src="js/confirmation.js"></script>


<!––  <script type="text/javascript">

  <!–– <input type=text name=coursename id=t1 onkeyup='aa();' value='".htmlspecialchars($coursename, ENT_QUOTES)."'>
    function aa(){
      xmlhttp =new XMLHttpRequest();
      xmlhttp.open("GET","fetch.php?nm="+document.getElementById("t1").value,false);
      xmlhttp.send(null);

      document.getElementById("t1").value=xmlhttp.responseText;
    }

  <!–– </script> ––>

</body>
</html>
