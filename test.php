<?php
include_once('database.php');

    if(isset($_POST['test']))
      			{
              $selectedTest = $_POST['test'];
              foreach ($selectedTest as $key => $value) {

              $fetchqry7 = "SELECT *
              FROM test
              INNER JOIN courses ON test.course_id = courses.course_id
              where test_name = '$key'
              ";
              $result7=mysqli_query($con,$fetchqry7);
              $row7 = mysqli_fetch_array($result7);
              $courseName = $row7['course_name'];
              $testName = $row7['test_name'];

              $fetchqry = "SELECT *
              FROM question
              INNER JOIN test ON question.test_id = test.test_id
              where test_name = '$key'
              ";
              $result=mysqli_query($con,$fetchqry);
            }
          }
       ?>
