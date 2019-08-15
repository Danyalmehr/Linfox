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
            <div class="col-md-1">

            </div>
              <div class="col-md-8">
                <center class="table_heading">

                  <h3>Course name: <?= $course_name ?> </h3>
                  <h3>Test name: <?= $test_name?> </h3>
                  <h1> Create Question</h1>

                </center>



                    <form class="form-horizontal" action="question-process.php" method="post">
                      <div class="form-group">
                        <div class="col-xs-8">
                          <label for="ex3">Question:</label>
                          <input type="text" class="form-control" id="q" name="question" placeholder="Enter your question here" Required>
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
                      <center class="table_heading">
                        <div class="btn-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <center class="table_heading">

                              <button type="submit" name="submit" onclick='return ask3()' class="button_signup_member">Submit</button>

                          </div>

                      </form>
                        <form class="" action="test.php" method="post">
                            <div class="col-sm-offset-2 col-sm-10">
                            <input type="hidden" name="course_id" value="<?=$course_id?>"><label for=""><?php $course_id?></label>
                            <input type="hidden" name="course_name" value="<?=$course_name?>"><label for=""><?php $course_name?></label>
                            <button type="submit" name="selectedcourse" class="btn-danger button_signup_member">Back to test page</button>
                          </div>
                          </div>
                          </center>

                          </form>

                    </div>
                  </div>

                           <div class="row">
                             <div class="col-md-2">
                             </div>

                             <div class="col-md-10 col-md-7">

                                <center class="table_heading">
                               <h3>Edit question for:</h3>
                               <h2> <?= $test_name ?></h2>
                             </center>
                             <div class="search_results" id="search_results">

                           <table class="search_table" id="search_table" >
                               <?php
                               echo "<tr>
                                         <th>Question</th>
                                         <th>Correct Answer</th>
                                         <th>Wrong Answer 1</th>
                                         <th>Wrong Answer 2</th>
                                         <th>Wrong Answer 3</th>
                                         <th>Update records</th>
                                         <th>Delete records</th>
                                     </tr>";
                                 while($row= mysqli_fetch_array($result)):
                                 {
                                $question = $row['que'];

                                 echo "<tr><form action=question-process.php method=post>";
                                 echo "<input type=hidden name=que_id value='".$row['que_id']."'";
                                 echo "<tr>
                                           <td><input class='inputwidthforemailandotherinputintable' type=text name=question id=q value='".htmlspecialchars($question, ENT_QUOTES)."'</td>
                                           <td><input class='inputwidthforemailandotherinputintable' type=text name=correct_answer value='".htmlspecialchars($row['ans'], ENT_QUOTES)."'</td>
                                           <td><input class='inputwidthforemailandotherinputintable' type=text name=wrong_answer1 value='".htmlspecialchars($row['option 1'], ENT_QUOTES)."'</td>
                                           <td><input class='inputwidthforemailandotherinputintable' type=text name=wrong_answer2 value='".htmlspecialchars($row['option 2'], ENT_QUOTES)."'</td>
                                           <td><input class='inputwidthforemailandotherinputintable' type=text name=wrong_answer3 value='".htmlspecialchars($row['option 3'], ENT_QUOTES)."'</td>
                                           <td><button class='delete' type=submit name=update onclick='return ask2()' ><span class='glyphicon glyphicon-wrench logo-small'></span></button></td>
                                           <td><button class='delete' type=submit name=delete onclick='return ask()' ><span class='glyphicon glyphicon-trash logo-small'></span></button></td>
                                      </tr>";
                                   echo "</form></tr>";
                                 }
                                         ?>
                                         <?php endwhile;?>
                         </table>
                          </div>
                       <?php } ?>
                             </div>
                           </div>



     </div>


	<?php include("include/footer.inc") ?>
<script type="text/javascript" src="js/confirmation.js"></script>



  </body>
</html>
