<?php
include_once('database.php');

 if(isset($_POST['submit'])){

     $que = $_POST['question'];
     $ans = $_POST['correct_answer'];
     $wans1 = $_POST['wrong_answer1'];
     $wans2 = $_POST['wrong_answer2'];
     $wans3 = $_POST['wrong_answer3'];
     $qry = "INSERT INTO `question`(`que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`) VALUES ('$que','$ans','$wans1','$wans2','$wans3','$ans')";
     $result=mysqli_query($con,$qry);

     ?>


                   <td><a href="createquestion3.php?delete=' <? echo $id; ?>'" onclick="return confirm('Are you sure?');">Delete</a></td>
               </tr>
         </table>

         <?php
         if (isset($_GET['delete'])) {
           $delete_id = $_GET['delete'];
           $deleteqry = "DELETE FROM question WHERE que_id = $delete_id";
           if(mysqli_query($con,$deleteqry))
           {
             echo "your question has been successfully deleted!!";
           }
           else
           {
             echo "something is wrong";
           }
         }

       }


  ?>
