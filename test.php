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
            {
              

              $question = array($row['que_id'], $row['que'], $row['option 1'], $row['option 2'], $row['option 3'], $row['option 4'], $row['ans']);
              $ans_array = array($row['option 1'], $row['option 2'], $row['option 3'], $row['option 4']);
                shuffle($ans_array);
                ?>

            <form class="" method="post">
              <table align="center">

                    <tr><td><?php echo $row['que_id'];?>.<?php echo $row['que']; ?></tr>

                    <tr><td><input required type="radio" name="userans<?=$row['que_id']?>" value="<?=$ans_array[0]?>" required> &nbsp;<?=$ans_array[0]?><br>
                    <tr><td><input required type="radio" name="userans<?=$row['que_id']?>" value="<?=$ans_array[1]?>">&nbsp;<?=$ans_array[1]?></td></tr>
                    <tr><td><input required type="radio" name="userans<?=$row['que_id']?>" value="<?=$ans_array[2]?>">&nbsp;<?=$ans_array[2]?></td></tr>
                    <tr><td><input required type="radio" name="userans<?=$row['que_id']?>" value="<?=$ans_array[3]?>">&nbsp;<?=$ans_array[3]?><br><br><br></td></tr>

          <?php };?>
          <tr><td><button class="button3" name="click" onclick="result()">submit</button></td></tr>
                </tr>
              </table>
            </form>

        	
            </div>
        </div>
    </div>


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
	<?php include("include/footer.inc") ?>
  </body>
</html>