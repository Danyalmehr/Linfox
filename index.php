
<?php
//must appear BEFORE the <html> tag
	session_start();

  include 'database.php';
  $conn = OpenCon();
  echo "Connected Successfully";

?>
<?php



$query = "SELECT * from test";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)):
?>


<html>
<title>QUIZ</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<head>
<body>


					<div>
					<form method='post' action ='index.php'>
					<table>

					<tr>
					<td><?php echo $row['id'];?></td>

					<td><?php echo $row['question'];?></td></tr>
					<?php $option1= $row['option1'];?>
					<?php $option2= $row['option2'];?>
					<?php $option3= $row['option3'];?>
					<?php $option4= $row['option4'];?>
					<?php $correct_answer= $row['answer'];?>

					<tr><td><?php echo "<input type='radio' name='choice' value='$option1' checked>".$option1.""?></td>
					<tr><td><?php echo "<input type='radio' name='choice' value='$option2'>".$option2.""?></td>
					<tr><td><?php echo "<input type='radio' name='choice' value='$option3'>".$option3.""?></td>
					<tr><td><?php echo "<input type='radio' name='choice' value='$option4'>".$option4.""?></td>

					<tr>
						<button type="button" name="submit" onclick="result()">Submit</button>
					</tr>
						</table>
			<?php endwhile;?>

</body>
</html>


<script>
			function result()
			{	counter = 0
				correct_answer = '<?php echo $correct_answer;?>';
				var choice = $("input[name='choice']:checked").val();
				if (choice == correct_answer) {
					counter++;
					alert(counter)
					return counter;
				}
				else {
					alert(counter + "wrong answer")
				}



		}
</script>
