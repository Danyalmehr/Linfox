<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
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

    <title>Previous Results</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
    	<div class="row">
        	<div class="col">
				
				
				<div class="span3">
                        <div class="sidebar" style="display: inline">
                            <ul class="widget widget-menu unstyled">
                                <li class="left_icon"><a href="dashboard1.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <!--<li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>-->

                                <li class="left_icon"><a href="Stest.php"><i class="menu-icon icon-inbox"></i>Test <!--<b class="label green pull-right">
                                    11</b>--> </a></li>

                                <!--<li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>-->

                            <!--/.widget-nav-->



                                <li class="left_icon"><a href="previousresults.php"><i class="menu-icon icon-file"></i>Results </a></li>
								                        <li class="active left_icon"><a href="certificates.php"><i class="menu-icon icon-certificate"></i>Certificates </a></li>
								                                <li class="left_icon"><a href="index.php"><i class="menu-icon icon-signou"></i>Logout </a></li>
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

            		<h2> THIS IS certificates PAGE</h2>



            </div>
        </div>
    </div>
	</div>
	<?php include("include/footer.inc") ?>
</body>
</html>
