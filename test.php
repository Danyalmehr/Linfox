<?php
include_once('database.php');

              $fetchqry7 = "SELECT *
              FROM test
              INNER JOIN courses ON test.course_id = courses.course_id
              
              ";
              $result7=mysqli_query($con,$fetchqry7);
              $row7 = mysqli_fetch_array($result7);
              $courseName = $row7['course_name'];
              $testName = $row7['test_name'];
       ?>
