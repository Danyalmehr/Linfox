
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
        <link type="text/css" href="css/theme.css" rel="stylesheet">

    <title> DASHBOARD </title>

	<style>

    .span3{margin: 2em;}
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

      color: White;
      font-size: 18px;

    a:hover{
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
                                <li class="active"><a href="dashboard1.php"><i class="menu-icon icon-dashboard"></i><small> DASHBOARD </small>
                                </a></li>
                                <!--<li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>-->

                                <li><a href="message.html"><i class="menu-icon icon-inbox"></i><small> INBOX </small> <!--<b class="label green pull-right">
                                    11</b>--> </a></li>

                                <!--<li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                                    19</b> </a></li>-->

                            <!--/.widget-nav-->



                                <li><a href="previousresults.php"><i class="menu-icon icon-file"></i><small> RESULTS </small></a></li>
								                        <li><a href="certificates.php"><i class="menu-icon icon-certificate"></i><small> CERTIFICATES </small></a></li>
								                                <li><a href="index.php"><i class="menu-icon icon-signou"></i><small> LOGOUT </small></a></li>
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
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid course">


	<?php

					$courses = "select course_id, course_name, course_desc FROM courses";
					$result = mysqli_query($con,$courses);
            $num=mysqli_num_rows($result);


					/*$i=0;*/
				  /*$row_num = mysqli_fetch_array($result,MYSQLI_NUM);
					$row=mysqli_fetch_assoc($result);
					$course_name=$row['course_name'];

	*/

					while ($row=mysqli_fetch_assoc($result))
              {

        $course_name=$row['course_name'];
        $course_id=$row['course_id'];
        $course_desc=$row['course_desc'];

        echo"<button type=\"button\" class=\"btn btn-info btn-lg span5 btn-course\" data-toggle=\"modal\" data-target=\"#$course_name\" style=\"margin-left: 1em\" > $course_name </button>";


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
         			  <button type=\"button\" class=\"btn btn-danger btn-block\" ><i class=\"menu-icon icon-download\"></i>See PDF Materials</button>
                <button type=\"button\" class=\"btn btn-primary btn-block\" ><i class=\"menu-icon icon-check\"></i><a href='Stest.php'>Take test</a></button>
                </div>


                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-dark\" data-dismiss=\"modal\">Close</button>
                </div>

              </div>
            </div>
          </div>";
        					/*$i=$i+1;*/
    }
?>
                                </div>
                                <!--<div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Clients</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Expenses</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Total Sales</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                                                    Rate</b> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="widget widget-usage unstyled span4">
                                        <li>
                                            <p>
                                                <strong>Windows 8</strong> <span class="pull-right small muted">78%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 78%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Mac</strong> <span class="pull-right small muted">56%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 56%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Linux</strong> <span class="pull-right small muted">44%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 44%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>iPhone</strong> <span class="pull-right small muted">67%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: 67%;">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>-->
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
