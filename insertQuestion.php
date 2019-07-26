<?php
include_once('database.php');

 if(isset($_POST['submit'])){

     @$id = $num + 1;
     @$que = $_POST['question'];
     @$ans = $_POST['correct_answer'];
     @$wans1 = $_POST['wrong_answer1'];
     @$wans2 = $_POST['wrong_answer2'];
     @$wans3 = $_POST['wrong_answer3'];
     $qry = "INSERT INTO `question`(`que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`) VALUES ('$que','$ans','$wans1','$wans2','$wans3','$ans')";

     $fetchqry = "SELECT * FROM question
     where test_id=2";
     $result=mysqli_query($con,$fetchqry);
     $num=mysqli_num_rows($result);


     while ($row = mysqli_fetch_array($result)){
       $question = $row['que'];
       $option2 = $row['option 2'];
       $option3 = $row['option 3'];
       $option4 = $row['option 4'];
       $correctAnswer = $row['ans'];
?>

           <table id="table" border="1">

               <tr>
                   <th>Question</th>
                   <th>option1</th>
                   <th>option2</th>
                   <th>option3</th>
                   <th>Answer</th>
               </tr>
               <tr>
                   <td> <?=$question?> </td>
                   <td> <?=$option2?> </td>
                   <td> <?=$option3?> </td>
                   <td> <?=$option4?> </td>
                   <td> <?=$correctAnswer?> </td>
               </tr>
         </table>



         <?php

       }
     }

  ?>
