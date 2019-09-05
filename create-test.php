<?php


require 'database.php';
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
      <?php include("admin-side-dash.html");

      $fetchqry = "SELECT course_id, course_name FROM courses";
      $result =  mysqli_query($con,$fetchqry);
      ?>
    	<div class="row containermember">

        <div class="col-md-9">
        <div class="member">
					<h1> Create Test</h1>

            <form action="test-process.php" method="post">
            <div class="row">
              <div class="col">
                    <label class="control-label col-sm-2" for="name">Test name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="inputwidthforvreateuser" name="test_name" id="test_name"  class="form-control"  placeholder="Enter test name" required>
                    </div>
                  </div>
                    </div>


                    <div class="row">
                      <div class="col">
                    <label class="control-label col-sm-2" for="name">Related Course:</label>
                    <div class="col-sm-10">
                      <select class="inputwidthforvreateuser" name="course_id">
                        <?php while ($row=mysqli_fetch_array($result)) {
                          $id = $row['course_id'];
                          $course_name = $row['course_name'];
                         ?>
                      <option type="text" class="form-control"  value= <?= $id?>><?php echo "$course_name"?></option>
                    </div>
                  </div>
                </div>

                  <?php   } ?>
                </select>

                <div class="row">
                  <div class="col">
                        <label class="control-label col-sm-2" for="name">Test video:</label>
                        <div class="col-sm-10">
                          <input type="text" class="inputwidthforvreateuser" name="test_video" id="test_name"  class="form-control"  placeholder="Enter test video" required>
                        </div>
                      </div>
                        </div>

                <br>
                <br>
                <center class="table_heading">


                  <div class="row">
                    <div class="col">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="submit" onclick='return ask4()' class="button_signup_member">Submit</button>
                    </div>
                  </div>
                      </div>
                </center>
            </form>

          </div>
        </div>
      </div>
    </div>		</div>
      </div>		</div>
        </div>






<?php include("include/footer.inc") ?>

</body>
</html>



<script type="text/javascript" src="js/confirmation.js"></script>
