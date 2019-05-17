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

              require 'database.php';
                          $fetchqry = "SELECT * FROM `question`";
                          $result=mysqli_query($con,$fetchqry);
                          $num=mysqli_num_rows($result);
                          while ($row = mysqli_fetch_assoc($result))
                            {

                              $que_id = $row['que_id'];
                              $question = array($row['que_id'], $row['que'], $row['option 1'], $row['option 2'], $row['option 3'], $row['option 4']);
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

                            <?php
                            function resultdisplay()
                            {
                              while(isset($_POST["userans$que_id"])){
                                $userselected = $_POST["userans$que_id"];
                                print_r($userselected);
                            }
}
                                  //$fetchqry2 = "UPDATE `quiz` SET `userans`='$userselected' WHERE `id`=$c-1";
                                  //$result2 = mysqli_query($con,$fetchqry2);


                              ?>

                            <?php
                              $fetchqry1 = "SELECT `ans` FROM `question`";
                              $result1=mysqli_query($con,$fetchqry1);
                              while ($row1 = mysqli_fetch_assoc($result1))
                                { $correct_answer = array($row1['ans']); ?>
                                <?php
                              }
                              ?>




c

	<?php include("include/footer.inc") ?>
  </body>
</html>
