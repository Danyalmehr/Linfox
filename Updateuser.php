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
    	<div class="row">
            <!-- /navbar -->



                    <div class="span3">
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
                    <div class="span8">
                        <div class="content">
                          <?php
                              //create an insert query
                              $sql = "UPDATE user SET fname='$_POST[fname]', lname='$_POST[lname]', email='$_POST[email]', password='$_POST[password]', user_type='$_POST[user_type]'
                          			WHERE user_id ='$_POST[user_id]'";
                              //execute the query
                              if(mysqli_query($conn,$sql))
                          	{
                          		echo "your new details have been successfully updated!!";
                          		//header("location: successChange.php");
                          	}

                          	else
                          	{
                          		echo "something is wrong";
                          	}
                          ?>

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
