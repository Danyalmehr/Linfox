<?php
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
    /*
       Up to you which header to send, some prefer 404 even if
       the files does exist for security
    */
    header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

    /* choose the appropriate page to redirect users */
    die( header( 'location: /error.php' ) );

}

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

</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>


    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
    	<div class="row">

                    <div class="col-md-11 col-md-7">
                          <h1>Edit Course Details</h1>
                      			<?php $sql= "select * from courses";
                      			$records = mysqli_query($con,$sql);



                      			 ?>
                            <div class="search_results" id="search_results">
                      			<table class="search_table" id="search_table" >
                      			<?php
                            echo "<tr>
                                      <th>Course Name</th>
                                      <th>Course Description</th>
                                      <th>Course Video</th>
                                      <th>Update</th>
                                      <th>Delete</th>
                                  </tr>";
                    			    while($row = mysqli_fetch_array($records)):
                      				{
                      				echo "<tr><form action='course-process.php' method=post>";
                              echo "<input type=hidden name=course_id value='".$row['course_id']."'>"; // This is hidden field
                              echo "<tr>
                                        <td><input class='inputwidthforemailandotherinputintable' type=text name=course_name value='".htmlspecialchars($row['course_name'], ENT_QUOTES)."'</td>
                                        <td><input class='inputwidthforemailandotherinputintable' type=text name=course_desc value='".htmlspecialchars($row['course_desc'], ENT_QUOTES)."'</td>
                                        <td><input class='inputwidthforemailandotherinputintable' type=text name=course_video value='".htmlspecialchars($row['course_video'], ENT_QUOTES)."'</td>
                                        <td><button class='delete' type=submit name=update onclick='return ask2()' ><span class='glyphicon glyphicon-wrench logo-small' ></span></button></td>
                                        <td><button class='delete' type=submit name=delete onclick='return ask()' ><span class='glyphicon glyphicon-trash logo-small'></span></button></td>
                                   </tr>";
                        				echo "</form></tr>";
                      				}
                                      ?>
          <?php endwhile;


                ?>



                      </table>

		                  </div>
						</div>
					</div>
          </div>
        </div>
	<?php include("include/footer.inc") ?>
  <script type="text/javascript" src="js/confirmation.js"></script>

<!--!	<script>
		function(popup){
			var btn=document.getElementsByClassName("btn-course")
			var
		}
	</script>-->
</body>
</html>
