<?php
session_start();
include_once('database.php');

    if(isset($_POST['submit'])){
     $test_id = $_POST['test_id'];
     $que = $_POST['question'];
     $ans = $_POST['correct_answer'];
     $wans1 = $_POST['wrong_answer1'];
     $wans2 = $_POST['wrong_answer2'];
     $wans3 = $_POST['wrong_answer3'];
     $insertqry = "INSERT INTO `question`(`que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `test_id`) VALUES ('$que','$wans3',
       '$wans1','$wans2','$ans','$ans','$test_id')";
     if(mysqli_query($con,$insertqry))
     {
       echo "your new details have been successfully INSERTED!!". mysqli_error($con);
       ?>
       <form class="" action="createquestion4.php" method="post">
         <input type="hidden" name="test_id" value="<?=$test_id?>"><label><?php $test_id?></label>
         <button type="submit" name="selectedtest" class="btn btn-default">Submit</button>

       </form>
       <?php

     }
     else
     {
       echo "something is wrong". mysqli_error($con);;
     }
   }


     if (isset($_POST['update']))
     {
           $updateqry = "UPDATE question SET que='$_POST[question]', `option 1`= '$_POST[option1]', `option 2`= '$_POST[option2]', `option 3`= '$_POST[option3]', `option 4`= '$_POST[ans]', `ans`= '$_POST[ans]'
           WHERE que_id ='$_POST[que_id]'";
           if(mysqli_query($con,$updateqry))
           {
             echo "your new details have been successfully UPDATED!!". mysqli_error($con);;
           }
           else
           {
             echo "something is wrong". mysqli_error($con);;
           }
       }
       ?>

         <?php
         if (isset($_POST['delete'])) {
           $deleteqry = "DELETE FROM question WHERE que_id ='$_POST[que_id]'";
           if(mysqli_query($con,$deleteqry))
           {
             echo "your question has been successfully DELETED!!". mysqli_error($con);;
           }
           else
           {
             echo "something is wrong". mysqli_error($con);;
           }
         }

         ?>

       <td><a href="createquestion3.php?delete=' <? echo $id; ?>'" onclick="return confirm('Are you sure?');">Delete</a></td>
   </tr>
</table>
