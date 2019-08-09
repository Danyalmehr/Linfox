
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
    <?php
      if(isset($_POST['selectedtest']))
      {
        $_SESSION["test_id"]=$_POST['test_id'];
        $fetchqry = "SELECT *
        FROM question
        where test_id = '$_SESSION[test_id]'
        ";
        $result=mysqli_query($con,$fetchqry);

        $courseTestQry = "SELECT courses.course_id, test_name, course_name
        FROM test
        INNER JOIN courses ON courses.course_id = test.course_id
        WHERE test_id = '$_SESSION[test_id]'
        ";
        $result1=mysqli_query($con,$courseTestQry);
        $row1= mysqli_fetch_array($result1);
        $test_name = $row1['test_name'];
        $course_name = $row1['course_name'];
        $course_id = $row1['course_id'];



     ?>

        <div class="container-fluid">
          <?php include("admin-side-dash.html") ?>


          <div class="row">
              <div class="col-md-8">
                <h1 style="margin-left: 0.5em"> Create Question</h1>

                    <form class="form-horizontal" action="question-process.php" method="post">
                      <div class="form-group">
                        <div class="col-xs-8">
                          <label for="ex3">Question:</label>
                          <input type="text" class="form-control" id="question" name="question" placeholder="Enter your question here" Required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-8">
                          <label for="ex3">Correct answer</label>
                          <input type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="Enter the correct answer here" Required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-8">
                          <label for="ex3">Wrong Answers:</label>
                          <input type="text" class="form-control" id="wrong_answer1" name="wrong_answer1" placeholder="Wrong answer 1" Required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-8">
                          <label for="ex3">Wrong Answer 2:</label>
                          <input type="text" class="form-control" id="wrong_answer2" name="wrong_answer2" placeholder="Wrong answer 2" Required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-8">
                          <label for="ex3">Wrong Answer 3:</label>
                          <input type="text" class="form-control" id="wrong_answer3" name="wrong_answer3" placeholder="Wrong answer 3" Required>
                        </div>
                      </div>
                        <div class="btn-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                          </div>
                      </form>
                        <form class="" action="test.php" method="post">
                            <div class="col-sm-offset-2 col-sm-10">
                            <input type="hidden" name="course_id" value="<?=$course_id?>"><label for=""><?php $course_id?></label>
                            <input type="hidden" name="course_name" value="<?=$course_name?>"><label for=""><?php $course_name?></label>
                            <button type="submit" name="selectedcourse" class="btn btn-danger">Back to test page</button>
                          </div>
                          </div>

                          </form>

                    </div>
                  </div>

                           <div class="row">
                             <div class="col-md-2">
                               </div>
                             <div class="col-md-8 table-responsive">
                               <div class="content">
                               <h1>Test: <?= $test_name?> </h1>
                               <h1>From course <?= $course_name ?> </h1>
                               <h4>Choose the test you wanna create your question for:</h4>
                               <table class="table table-hover" >
                               <?php
                               echo "<tr>
                                         <th>Question</th>
                                         <th>Wrong Answer 1</th>
                                         <th>Wrong Answer 2</th>
                                         <th>Wrong Answer 3</th>
                                         <th>Correct Answer</th>
                                         <th>Update records</th>
                                         <th>Delete records</th>
                                     </tr>";
                                 while($row= mysqli_fetch_array($result)):
                                 {
                                 echo "<tr><form action=question-process.php method=post>";
                                 echo "<input type=hidden name=que_id value='".$row['que_id']."'";
                                 echo "<tr>
                                           <td><input type=text name=que value='".$row['que']."'</td>
                                           <td><input type=text name=option1 value='".$row['option 1']."'</td>
                                           <td><input type=text name=option2 value='".$row['option 2']."'</td>
                                           <td><input type=text name=option3 value='".$row['option 3']."'</td>
                                           <td><input type=text name=ans value='".$row['ans']."'</td>
                                           <td><button type=submit name=update ><span class='glyphicon glyphicon-wrench logo-small' style='font-size: 1.5em;'></span></button></td>
                                           <td><button type=submit name=delete ><span class='glyphicon glyphicon-trash logo-small' style='font-size: 1.5em;'></span></button></td>
                                      </tr>";
                                   echo "</form></tr>";
                                 }
                                         ?>
                                         <?php endwhile;?>
                         </table>
                       <?php } ?>
                             </div>
                           </div>
                         </div>


     </div>


	<?php include("include/footer.inc") ?>


  </body>
</html>
