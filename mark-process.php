<?php

session_start();
include_once('database.php');

       $selected = $_POST['options'];
       echo "$selected";
       $ans_id = mysqli_real_escape_string($con, $_POST['ans_id']);
           $updateqry = "UPDATE useranswer SET ans_status='$selected'
           WHERE ans_id = $ans_id
           ";
           if(mysqli_query($con,$updateqry))
           {
             echo "the question for the user was succesfully marked as $selected!!". mysqli_error($con);
           }
           else
           {
             echo "something is wrong". mysqli_error($con);;
           }


       ?>
