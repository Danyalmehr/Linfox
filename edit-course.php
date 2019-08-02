
<?php
//must appear BEFORE the <html> tag
session_start();
include_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

      <link type="text/css" href="css/theme.css" rel="stylesheet">
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>

        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>



    <link type="text/css" href="css/theme.css" rel="stylesheet">

    <title> Take test </title>

	<style>

  ul.unstyled, ol.unstyled {
     margin-left: 0;
     list-style: none;
}
		.span3 {

			margin-right: 4em;
		}
    .widget-menu {
    background: #fff;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
     border-radius: 3px;
    overflow: hidden;
}

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>


	<div class="col-md-3">
	 <div class="span3">
                        <div class="sidebar" style="display: inline">
                            <ul class="widget widget-menu unstyled">
                                <li class="left_icon"><a href="dashboard1.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>


                                <li class="active left_icon"><a href="Stest.php"><i class="menu-icon icon-inbox"></i>Test</a></li>



                                <li class="left_icon"><a href="previousresults.php"><i class="menu-icon icon-file"></i>Results </a></li>
								                        <li class="left_icon"><a href="certificates.php"><i class="menu-icon icon-certificate"></i>Certificates </a></li>
								                                <li class="left_icon"><a href="index.php"><i class="menu-icon icon-signou"></i>Logout </a></li>

							</ul>

                        </div>

                    </div>
	</div>
<?php
    if (isset($_GET['id']))
  {
      $id = $_GET['id'];
      $fetchqry = "SELECT * FROM courses where course_id = $id";
      $result=mysqli_query($con,$fetchqry);
      $row = mysqli_fetch_array($result);
  }
 ?>
 <table class="member_table" >
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <table class="member_table" >
            <?php
            echo "<tr>
                      <th>question</th>
                      <th>option1</th>
                      <th>option2</th>
                      <th>option3</th>
                      <th>ans</th>
                      <th>Update records</th>
                  </tr>";

              echo "<tr><form action=course-edit-proccess.php method=post>";
              echo "<td><input type=hidden name=course_id value='".$row['course_id']."'</td>"; // This is hidden field
              echo "<tr>
                        <td><input type=text name=course_name value='".$row['course_name']."'</td>
                        <td><input type=text name=course_desc value='".$row['course_desc']."'</td>
                        <td><input type=submit name=update value=Update> </td>
                   </tr>";
                echo "</form></tr>";
               ?>
            </table>
           </div>
         </div>
       </div>






	<?php include("include/footer.inc") ?>


  </body>
</html>
