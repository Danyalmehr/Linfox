<?php require 'database.php';
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
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>


        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <title>Dashboard</title>

	<style>
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
      <?php include("user-side-dash.html") ?>

    	<div class="row">

                    <div class="span8">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid course">
					<h1 style="margin: 1em"> Available Courses</h1>


	<?php

					$courses = "SELECT test.test_name, test.test_id, courses.course_id, courses.course_name, courses.course_desc
          FROM courses
          INNER JOIN test ON test.course_id = courses.course_id
          ";
					$result = mysqli_query($con,$courses);



					while ($row=mysqli_fetch_array($result))
              {
                $testid = $row['test_id'];
                $test_name=$row['test_name'];
                $course_name1=$row['course_name'];
                $course_id=$row['course_id'];
                $course_desc=$row['course_desc'];





$course_name = str_replace(' ','_', $course_name1);




              echo "<button type=\"button\" class=\"btn btn-secondary btn-lg span5 btn-course\" data-toggle=\"modal\" data-target=\"#$course_name\" style=\"margin-left: 1em\"><span style=\"font-size:25px\">$course_name</span></button>";



        /*<!-- The Modal -->*/
          echo"<div class=\"modal\" id=\"$course_name\">
            <div class=\"modal-dialog\">
              <div class=\"modal-content\">


                <div class=\"modal-header\">
                  <h4 class=\"modal-title\">$course_name</h4>
                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                </div>


                <div class=\"modal-body\">
        			<p> $course_desc </p>

        			  <button type=\"button\" class=\"btn btn-info btn-block\"><i class=\"menu-icon icon-file\"></i><a href='previousresults.php'>See Results</a></button>

                <form class=\"test-display\" action=\"videos.php\" method=\"post\">
                <td><input type=hidden name=course_id[$course_id] value=\"$course_id\"</td>
                <button type=\"submit\" name=\"courseid\" class=\"btn btn-danger btn-block\" ><i class=\"menu-icon icon-download\"></i><a href='videos.php'>See Video Materials</a></button>

                </form>

 <form class=\"test-display\" action=\"Stest.php\" method=\"post\">
                <input type=\"hidden\" name=\"testid[$testid]\" value=\"$testid\">

                <button name=\"test[$test_name]\" type=\"submit\" class=\"btn btn-primary btn-block\" ><i class=\"menu-icon icon-check\"></i>Take test</button>
                </div>
                </form>


                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-dark\" data-dismiss=\"modal\">Close</button>
                </div>

              </div>
            </div>
          </div>";
    }
?>
                                </div>

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
