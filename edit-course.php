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
    	<div class="row">
            <!-- /navbar -->
                    <div class="col-md-3 col-sm-">
                        <div class="sidebar" style="display: inline">
                            <ul class="widget widget-menu unstyled">
                                <li class="active left_icon"><a href="admindashboard.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <!--<li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>-->


                                    <li><a href="edituser.php"><i class="menu-icon icon-inbox"></i>Edit User<!--<b class="label green pull-right">
                                        11</b>--> </a></li>

                                        <li><a href="editcourse.php"><i class="menu-icon icon-inbox"></i>Edit Course <!--<b class="label green pull-right">
                                            11</b>--> </a></li>

                                            <li><a href="edittest.php"><i class="menu-icon icon-inbox"></i>Edit test <!--<b class="label green pull-right">
                                                11</b>--> </a></li>

                                <!--<li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>-->

                            <!--/.widget-nav-->
                                              <li><a href="index.php"><i class="menu-icon icon-signou"></i>Logout </a></li>
                                <!--<li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>-->
							</ul>
                            <!--/.widget-nav-->
                            <!--<ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="ot her-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>-->
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="col-md-9 col-sm-12">
                        <div class="content">
                          <h1>Edit User Details</h1>
                      			<?php $sql= "select * from courses";
                      			$records = mysqli_query($con,$sql);
                      			 ?>
                      			<table class="table table-hover" >
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
                      				echo "<tr><form action=course-edit-proccess.php method=post>";
                              echo "<td><input type=hidden name=course_id value='".$row['course_id']."'</td>"; // This is hidden field
                              echo "<tr>
                                        <td><input type=text name=course_name value='".$row['course_name']."'</td>
                                        <td><input type=text name=course_desc value='".$row['course_desc']."'</td>
                                        <td><input type=email name=course_video value='".$row['course_video']."'</td>
                                        <td><input type=submit value=><span class='glyphicon glyphicon-wrench logo-small' style='font-size: 1em;'></span> </td>
                                        <td><input type=submit value=><span class='glyphicon glyphicon-trash logo-small' style='font-size: 1em;'></span> </td>

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
