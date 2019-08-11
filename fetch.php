
<?php
include_once('database.php');


$nm = $_GET["nm"];


  $sql = "SELECT * FROM courses WHERE course_name like ('%$nm%')";
  $result = mysqli_query($con, $sql);
  $num = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);

  if ($num>0) {

          echo $row['course_name'];

    }
    elseif ($num=0) {
      echo "";
    }

?>
