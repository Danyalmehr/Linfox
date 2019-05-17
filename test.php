<!DOCTYPE html>

<?php require 'database.php';
session_start();
//echo "successful";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>About us</title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
    	<div class="row">
        	<div class="col">

            		<h2> THIS IS TEST PAGE</h2>










        <?php
              function getQuestion()
              {     require 'database.php';
                          $fetchqry = "SELECT * FROM `question`";
                          $result=mysqli_query($con,$fetchqry);
                          $num=mysqli_num_rows($result);
                          while ($row = mysqli_fetch_assoc($result))
                            { $que_id = $row['que_id'];



                              $question = array($row['que_id'], $row['que'], $row['option 1'], $row['option 2'], $row['option 3'], $row['option 4']);
                              $correct_answer = array($row['ans']);
                              $ans_array = array($row['option 1'], $row['option 2'], $row['option 3'], $row['option 4']);
                                shuffle($ans_array);
                                ?>

                            <form method="post" action="">
                              <table align="center">

                                    <p> <?php echo $row['que_id'];?>.<?php echo $row['que']; ?></p>

                                    <tr><td><input required class="userans" type="radio" name="userans<?=$que_id?>" value="<?=$ans_array[0]?>" required> &nbsp;<?=$ans_array[0]?><br></tr>
                                    <tr><td><input required class="userans" type="radio" name="userans<?=$que_id?>" value="<?=$ans_array[1]?>">&nbsp;<?=$ans_array[1]?></td></tr>
                                    <tr><td><input required class="userans" type="radio" name="userans<?=$que_id?>" value="<?=$ans_array[2]?>">&nbsp;<?=$ans_array[2]?></td></tr>
                                    <tr><td><input required class="userans" type="radio" name="userans<?=$que_id?>" value="<?=$ans_array[3]?>">&nbsp;<?=$ans_array[3]?><br><br><br></td></tr>

                          <?php };?>
                            <a href="result.php"><p> <button class="button3" name="submit" onclick="resultdisplay()"> submit</button></p></a>

                              </table>
                            </form>






                <script>
                      function resultdisplay()
                              {
                              $(document).ready(function(){
                              var radio_arr = [];
                              $('tr').each(function(){
                                radio_arr.push($(this).find('input[type=radio]:checked').val());
                              });
                              console.log(radio_arr);
                              alert(radio_arr);
                            });






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


</script>
	<?php include("include/footer.inc") ?>
  </body>
</html>
