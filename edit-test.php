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


</head>


<style>
.user-process{
border: 1.2px solid black;
border-radius: 50%;
height:80px;
width: 80px;
font-size: 25px;
font-weight: bolder;
font-family: sans-serif;
text-align: center;
margin-bottom: 6px;
left: 50px;
vertical-align: middle;
line-height: 70px;
margin: 19px 15px;
}


.user-admin-menu>h2 {text-align: center;
/* Black background with 0.5 opacity */
color: Black;}

.user-admin-menu
{
  align-items: center;text-align: center;
  background: rgb(0,0,0,0.1); /* Fallback color */
  background: rgba(0, 0, 0, 0.1); /* Black background with 0.5 opacity */
  color: #ff7733;
  padding:3%;
}
  .container-menu {
  position: relative;
  width: auto;
  display: inline-block;

}

    .image {
      display: inline-block;

      display: inline-block;
      width: 300px;
      height: 300px;
      margin: 8px;
    }

    .image:hover {
      display: inline-block;
      width: 300px;
      height: 300px;
      margin-top: 4px;
      opacity: 0.9;
      transition: .5s ease;
      padding: 1%;
      border: 3px solid black;

    }


    .overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgb(0, 0, 0); /* Fallback color */
     background: rgba(0, 0, 0, 0.7); /* Black background with 0.5 opacity */
     color: #f1f1f1;
      width: inherit;
      height: 30%;
      -webkit-transition: .3s ease;
      transition: .3s ease
      border: 1px dotted black;
      padding: 1%;
        display: inline-block;
        margin: 8px;

    }




.container-menu:hover .overlay {

  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  border: 1px dotted black;
  padding: 1%;
  display: inline-block;
}

.text {
  color: Orange;
  font-size: 22px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
    display: inline-block;
}

</style>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>


    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
    	<div class="row">
          <div class="col-md-12">
            <div class="user-admin-menu">

                          <h1>Edit Test Details</h1>
                        <?php
                            $id = $_GET['course_id'];
                            $coursename = $_GET['course_name'];
                            $test = "SELECT *
                                      FROM test
                                      WHERE course_id = $id
                                      ";
                                      $result = mysqli_query($con,$test);
                                      $num=mysqli_num_rows($result);



                                      ?>

          <h1>Edit Tests for <?= $coursename ?> </h1>
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
                                             <center>
                                             <div class="search_results" id="search_results">

                                            <table class="search_table" id="search_table" >
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
                      				echo "<form action='test-process.php' method=post>";
                              echo "<input type=hidden name=test_id value='".$row['test_id']."'</td>"; // This is hidden field
                              echo "<input type=hidden name=course_id value='".$id."'</td>"; // This is hidden field

                              echo "<tr>
                                        <td><input class='inputwidthforemailandotherinputintable' type=text name=test_name value='".htmlspecialchars($row['test_name'], ENT_QUOTES)."'</td>

                                        <td>  <a href='edit-course.php'><label> $coursename </label></td></a>

                                        <td><input class='inputwidthforemailandotherinputintable' type=text name=test_video value='".htmlspecialchars($row['test_video'], ENT_QUOTES)."'</td>


                                        <td><button type=submit class='delete name=update onclick='return ask2()'><span class='glyphicon glyphicon-wrench logo-small' style='font-size: 1.5em;'></span></button></td>
                                        <td><button type=submit class='delete name=delete onclick='return ask()'><span class='glyphicon glyphicon-trash logo-small' style='font-size: 1.5em;'></span></button></td>
                                   </tr>";
                        				echo "</form></tr>";
                              }
                            }
                        ;
                ?>
                      </table>
                        </div>
                      </center>
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
