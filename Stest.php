<?php
//must appear BEFORE the <html> tag
session_start();
include_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <title> Take test </title>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
    	<div class="row">
       	<div class="col-md-2"></div>
        	<div class="col-md-8">

<?php

          $fetchqry = "SELECT * FROM `question`";
          $result=mysqli_query($con,$fetchqry);
          $num=mysqli_num_rows($result);
          while ($row = mysqli_fetch_array($result))
            {

			    $que_id = $row['que_id'];
              $question = array($row['que_id'], $row['que'], $row['option 1'], $row['option 2'], $row['option 3'], $row['option 4'], $row['ans']);
              $ans_array = array($row['option 1'], $row['option 2'], $row['option 3'], $row['option 4']);
              shuffle($ans_array);
 ?>

       <form class="test-display" action="checkresult.php" method="post">
		   <div class="options">


           <p><?php echo $row['que_id'];?>.&nbsp;<?php echo $row['que']; ?></p>
           <input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[0]?>">&nbsp;<label><?=$ans_array[0]?></label><br>
           <input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[1]?>">&nbsp;<label><?=$ans_array[1]?></label><br>
           <input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[2]?>">&nbsp;<label><?=$ans_array[2]?></label><br>
           <input required type="radio" name="userans[<?=$que_id?>]" value="<?=$ans_array[3]?>">&nbsp;<label><?=$ans_array[3]?></label><br>
		   </div>
       		 <div style="border-bottom: 1px dotted black; margin: 1em; background-color: aqua;"></div>
         <?php } ?>


           <button class="button" name="submit" style="vertical-align:middle"> <span>Submit </span> </button>

				</form></div>
            <div class="col-md-2"></div>
        </div>
    </div>




	<?php include("include/footer.inc") ?>


  </body>
</html>
