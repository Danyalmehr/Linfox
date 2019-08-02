
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

    <div class="container-fluid">
      <div class="row">
          <div class="col-md-offset-2 col-md-8">
              <h1>Add Quiz</h1>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <div class="form-group">
                      <label for="question">Ask Question</label>
                      <input type="text" class="form-control" id="question" name="question" placeholder="Enter your question here" Required>
                  </div>
                  <div class="form-group">
                      <label for="correct_answer">Correct answer</label>
                      <input type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="Enter the correct answer here" Required>
                  </div>
                  <div class="form-group">
                      <label for="wrong_answer1">Wrong Answers</label>
                      <input type="text" class="form-control" id="wrong_answer1" name="wrong_answer1" placeholder="Wrong answer 1" Required>
                  </div>
                  <div class="form-group">
                      <label class="sr-only" for="wrong_answer2">Wrong Answers 2</label>
                      <input type="text" class="form-control" id="wrong_answer2" name="wrong_answer2" placeholder="Wrong answer 2" Required>
                  </div>
                  <div class="form-group">
                      <label class="sr-only" for="wrong_answer3">Wrong Answers 2</label>
                      <input type="text" class="form-control" id="wrong_answer3" name="wrong_answer3" placeholder="Wrong answer 3" Required>
                  </div>
                  <button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">+ Add Question</button>

              </form>
          </div>
           </div>
           <?php include("insertQuestion.php");

           $fetchqry = "SELECT * FROM question
           where test_id=2";
           $result=mysqli_query($con,$fetchqry);
           $num=mysqli_num_rows($result);


           while ($row = mysqli_fetch_array($result)){
             $id = $row['que_id'];
             $question = $row['que'];
             $option2 = $row['option 2'];
             $option3 = $row['option 3'];
             $option4 = $row['option 4'];
             $correctAnswer = $row['ans'];
      ?>

                 <table id="table" border="1">

                     <tr>
                         <th>Id</th>
                         <th>Question</th>
                         <th>option1</th>
                         <th>option2</th>
                         <th>option3</th>
                         <th>Answer</th>
                     </tr>
                     <tr>
                         <td> <?=$id?> </td>
                         <td> <?=$question?> </td>
                         <td> <?=$option2?> </td>
                         <td> <?=$option3?> </td>
                         <td> <?=$option4?> </td>
                         <td> <?=$correctAnswer?> </td>
                         <?php
                         echo '<td><a href="edit-question.php?id=' . $id . '">Edit</a></td>'; }?>
                                                
                         </table>

         </div>




	<?php include("include/footer.inc") ?>


  </body>
</html>
