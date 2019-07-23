<?php
session_start();
include_once('database.php');

  if(!empty($_POST['data']))
        {
          $data = $_POST['data'];

          print_r($data);// this displays all the input but i donno how to separate them

          for ($i=0; $i < 6 ; $i++) {
            $insertqry = "INSERT INTO question (`que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`) values ('$data','$op1', '$op2', '$op3', '$op4', '$answer')";
            $result = mysqli_query($con,$insertqry);
          }


          echo " ";
        }

        else {
          echo "something is empty";
        }


        ?>
