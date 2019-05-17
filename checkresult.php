<!DOCTYPE html>

<?php require 'database.php';
session_start();
//echo "successful";?>

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
    <div class="options">
    <?php 

			if(isset($_POST['submit']))
			{
					
    			
					
				if(!empty($_POST['userans']))
				{
					$count = count($_POST['userans']);
				
					echo " <h3> Out of All questions you have answred " .$count." options </h3>";
					
					
					$i = 1;
					
					 $score = 0;
					 $selected = $_POST['userans'];
					//print_r($selected); check to see weather it is retriving the value that user have selected
					
					$fetchqry = "select * FROM question";
					$result = mysqli_query($con,$fetchqry);
					
				  
				  while ($row = mysqli_fetch_array($result) )
				  {
					 // print_r($row['ans']); check to see weather it is retriving the value from the database
					  
					  $checked = strval($row['ans']) == $selected[$i];
					
					  
					   if($checked)
					   {
						   $score = $score + 1;
					   }
					  $i++;
				  }
					
					echo (" Your total score is ".$score." out of ".$count."");
				}
				
				// If unable to fetch the value 
				else
				{
					echo("Failed to retrive the data");
				}
			}
	
					
			?>
			</div>
    </div>
		
		



	<?php include("include/footer.inc") ?>


  </body>
</html>
