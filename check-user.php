<?php
//must appear BEFORE the <html> tag
session_start();
include_once('database.php');

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>jQuery Circlos: Circular Progress/Loading Bar Examples</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>

   .container { margin: 150px auto; }
   .mb20{
       margin: 7px 20px;
   }

   .cdev {
  position: relative;
  height: 100px;
  width: 100px;
  margin:0 auto;
}

.cdev div {
  position: absolute;
  height: 100px;
  width: 100px;
  border-radius: 50%;
}

.cdev div span {
  position: absolute;
  font-family: Arial;
  font-size: 25px;
  line-height: 75px;
  height: 75px;
  width: 75px;
  left: 12.5px;
  top: 12.5px;
  text-align: center;
  border-radius: 50%;
  background-color: white;
}

.cdev .background { background-color: #b3cef6; }

.cdev .rotate {
  clip: rect(0 50px 100px 0);
  background-color: #4b86db;
}

.cdev .left {
  clip: rect(0 50px 100px 0);
  opacity: 1;
  background-color: #b3cef6;
}

.cdev .right {
  clip: rect(0 50px 100px 0);
  transform: rotate(180deg);
  opacity: 0;
  background-color: #4b86db;
}
 </style>
</head>
<body>
  <?php include("include/banner.inc") ?>

    <?php include("include/nav.inc") ?>


    <?php
      if(!empty($_GET['id'] && $_GET['name']))
      {
        $id=$_GET['id'];


        $fetchqry = "SELECT attempt.user_id, count(distinct attempt.test_id) as countOfTestId, fname, lname
                     FROM courses
                     INNER JOIN test ON courses.course_id = test.course_id
                     INNER JOIN attempt ON attempt.test_id = test.test_id
                     INNER JOIN user ON attempt.user_id = user.user_id
                     WHERE att_status = 'Completed' AND courses.course_id = $id
                     GROUP BY user_id;
                      ";
        $result=mysqli_query($con,$fetchqry);
        $num=mysqli_num_rows($result);


        $fetchqry1 = "SELECT count(test_id) AS totalTest
                     FROM test
                     WHERE course_id = $id
                      ";
        $result1=mysqli_query($con,$fetchqry1);
        $row1=mysqli_fetch_array($result1);

        $total_test = $row1['totalTest'];
          }
          ?>


  <div class="container-fluid">
    <?php include("admin-side-dash.html") ?>

    <?php
    if ($num == '0') { ?>
      <h1>No tests of any course has been taken by <?=$name ?></h1>
  <?php  }
    else {?>
      <div class="row">

      </div>
    <h1> Courses taken by <?=$name ?></h1>
      <?php
    while ($row=mysqli_fetch_array($result)) {
    $countOfTestId = $row['countOfTestId'];
    $user_id = $row['user_id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $name = "{$fname} {$lname}";


    $completed = $countOfTestId/$total_test;
    $percentage_completed = round($completed*100);


    ?>


  <div class="row">
    <div class="col-md-1 mb20">
      <div class="cdev" data-percent="<?= $percentage_completed ?>" data-duration="2000" data-color=",orange"></div>
      <div class="col-md-1 mb20"> <a href="user-static.php?user_id=<?=$user_id?>&course_id=<?=$id?>"><button class="btn btn-secondary btn-md span1 btn-course" name="selectedtest" style="float: auto;"> <?= $name  ?></button></a>  </div>
    </div>

  </div>

<?php   } ?>
<?php   } ?>
</div>

       

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="circlos.js"></script>
    <script>
     $(document).ready(function(){
      // init
         $(".cdev").circlos();


     });
    </script>

</body>
</html>
