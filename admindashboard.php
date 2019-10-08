<?php
session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}
elseif ($_SESSION['usertype'] == '') {
    // code...
    header('location: index.php');
    exit;
  }

require 'database.php';

//echo "successful";


?>



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

		.course .btn-course:hover {background-color: #4E4E4E;
		box-shadow: 0 5px #666;
			transform: translateY(4px);
			cursor: pointer;
			opacity: 2;
			transition: 0.3s;
			padding-right: 100px;

		}

.course .btn-course:active {
  background-color: #3e8e41;

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


			@media only screen and (max-width: 768px) and (min-width: 428px) {


			.course h1{
				font-size: 18px;
			}


}

		@media only screen and (max-width: 428px) {
			.videos {

		margin-left: 0em;

	}

			. h1, .videos h2{
				font-size: 16px;
			}

			.test .test_name{

				font-size: 12px;
			}
			.test .btn {

				width: 100%;
			}

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

    .overlay:hover {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgb(0, 0, 0); /* Fallback color */
     background: rgba(0, 0, 0, 0.9); /* Black background with 0.5 opacity */
     color: #f1f1f1;
      width: inherit;
      height: 30%;
      -webkit-transition: .3s ease;
      transition: .3s ease
      border: 1px dotted black;
      padding: 1%;
        display: inline-block;
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

    .user_image1{ border: 1px solid black;
      border-radius: 50%;
    height:140px;}

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
    color: black;
    }


    .user-process-1{
    font-size: 25px;
    @ -104,32 +65,9 @@ font-weight: bolder;
    font-family: sans-serif;
    }

    .user-process-12
    {
      margin-top: 2%;
      font-size: 18px;
      font-weight: bolder;
      font-family: sans-serif;
    }

    .colum2-user-process
    {
      padding: 6px;
    }

    .colum2-user-process-green
    {
        padding: 6px;
        color: green;

    }

    .colum2-user-process-red
    {
        padding: 6px;
        color: red;

    }
    .user-process-1{
    font-size: 25px;
    font-weight: bolder;
    font-family: sans-serif;
    }

    .text1
    {
      width: 100%;
      font-size: 15px;
      color: black;
    }

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>
      <?php
      $fetchqry1 = "SELECT count(distinct useranswer.que_id) AS countOfAnsId
                   FROM useranswer
                   INNER JOIN question ON question.que_id = useranswer.que_id
                   WHERE ans_status IS NULL and que_type= 'shortans'
                    ";
      $result1=mysqli_query($con,$fetchqry1);
      $row1=mysqli_fetch_array($result1);

      $fetchqry2 = "SELECT count(Distinct test_id) AS countOfTestId, count(Distinct user_id) AS countOfUserId
                   FROM useranswer
                   WHERE ans_status IS NULL
                    ";
      $result2=mysqli_query($con,$fetchqry2);
      $row2=mysqli_fetch_array($result2);


      $fetchqry3 = "SELECT count(ans_status) AS countOfansstatus, count(Distinct user_id) AS countOfUsersMarked
                   FROM useranswer
                   WHERE ans_status IS NOT NULL
                    ";
      $result3=mysqli_query($con,$fetchqry3);
      $row3=mysqli_fetch_array($result3);

      $count_ans = $row1['countOfAnsId'];
      $count_test = $row2['countOfTestId'];
      $count_user = $row2['countOfUserId'];

      $count_Of_users_marked = $row3['countOfUsersMarked'];
        $count_Of_ans_status = $row3['countOfansstatus'];
        $unmarked_users = $count_user - $count_Of_users_marked;
       ?>

       <div class="row">
         <div class="user-admin-menu">
           <h2 style="margin: 1em"> Admin Dashboard</h2>


         <div class="col-md-12">

<center>
          <div class="col-sm-3 colum2-user-process">
            <div class=" user-process">
            <?= $count_ans ?>
            </div>
            <p class="text1">  Number of unmarked ANSWERS</p>
          </div>

          <div class="col-sm-3 colum2-user-process">
            <div class=" user-process">
            <?= $count_test ?>
            </div>
              <p class="text1">  Number of unmarked TESTS  </p>
          </div>

          <div class="col-sm-3 colum2-user-process">
            <div class=" user-process">
            <?= $unmarked_users ?>
            </div>
              <p class="text1">  Number of unmarked USERS  </p>
          </div>

          <div class="col-sm-3 colum2-user-process">
            <div class=" user-process">
            <?= $count_Of_ans_status ?>
            </div>
            <p class="text1">  Number of marked ANSWERS</p>
          </div>
</center>
        </div>



          <div class="row">
            <div class="col-md-12">
              <h2 style="margin: 1em"> Shortcuts</h2>

              <div class="container-menu">
                <a href="check-on-user.php">
                <img src="images/w2.jpg" class="image">
                <div class="overlay">
                  <div class="text">User Progress</div>
                </div>
                </a>
              </div>

              <div class="container-menu">
                <a href="question-courses.php">
                <img src="images/w3.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Create Question</div>
                </div>
                </a>
              </div>

              <div class="container-menu">
                <a href="create-course.php">
                <img src="images/w4.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Create Course</div>
                </div>
                </a>
              </div>

              <div class="container-menu">
                <a href="check-on-user.php">
                <img src="images/w6.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Create Test</div>
                </div>
                </a>
              </div>

            </div>
<!--
    <a href="check-on-user.php"><button class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> User Progress</button></a>
    <a href="question-course.php"><button class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> Create Question</button></a>
    <a href="create-course.php"><button class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> Create Course</button></a>
    <a href="check-on-user.php"><button class="btn btn-secondary btn-lg span5 btn-course" name="selectedtest" style="float: auto;"> Create Test</button></a>
-->




              </div>
              </div>
        </div>
      </div>


	<?php  include("include/footer.inc") ?>

</body>
</html>
