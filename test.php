<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/database.php');
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  </head>
  <body>



<?php
    function getQuestion()
    {     require 'include/database.php';
          $fetchqry = "SELECT * FROM `question`";
          $result=mysqli_query($con,$fetchqry);
          $num=mysqli_num_rows($result);
          while ($row = mysqli_fetch_assoc($result))
            {
          $question = array($row['que_id'], $row['que'], $row['option 1'], $row['option 2'], $row['option 3'], $row['option 4'], $row['ans']);
          $ans_array = array($row['option 1'], $row['option 2'], $row['option 3'], $row['option 4']);
            shuffle($ans_array);
            ?>

            <form class="" method="post">
              <table align="center">

                    <tr><td><?php echo $row['que_id'];?>.<?php echo $row['que']; ?></tr>

                    <tr><td><input required type="radio" name="userans" value="<?=$ans_array[0]?>" required> &nbsp;<?=$ans_array[0]?><br>
                    <tr><td><input required type="radio" name="userans<?=$row['que_id']?>" value="<?=$ans_array[1]?>">&nbsp;<?=$ans_array[1]?></td></tr>
                    <tr><td><input required type="radio" name="userans<?=$row['que_id']?>" value="<?=$ans_array[2]?>">&nbsp;<?=$ans_array[2]?></td></tr>
                    <tr><td><input required type="radio" name="userans<?=$row['que_id']?>" value="<?=$ans_array[3]?>">&nbsp;<?=$ans_array[3]?><br><br><br></td></tr>

          <?php };?>
          <tr><td><button class="button3" name="click" onclick="result()">submit</button></td></tr>
                </tr>
              </table>
            </form>



<script>
      function result()
              {
                <?php
                $fetchqry = "SELECT * FROM `question`";
                $result=mysqli_query($con,$fetchqry);
                $num=mysqli_num_rows($result);
                $row = mysqli_fetch_assoc($result) ?>
              counter = 0
              correct_answer = '<?php echo $row['ans'];?>';

              var choice = $("input[name='userans<?=$row['que_id']?>']:checked").val();
              if (choice == correct_answer) {
                counter++;
                alert(counter)
                return counter;
              }
              else {
                alert(counter + "wrong answer")
              }
              }

              <?php }
              getQuestion();
              ?>

</script>

  </body>
</html>
