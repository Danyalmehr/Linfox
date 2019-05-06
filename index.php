
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

					<tr><td><?php echo "<span><input type='radio'name='selectedanswer'>".$option1.""?></span></td>
					<tr><td><?php echo "<span><input type='radio'name='selectedanswer'>".$option2.""?></span></td>
					<tr><td><?php echo "<span><input type='radio'name='selectedanswer'>".$option3.""?></span></td>
					<tr><td><?php echo "<span><input type='radio'name='selectedanswer'>".$option4.""?></span></td>

					</table>
					<tr>
						<button type="button" name="submit" onclick="result()">Submit</button>
					</tr>
			<?php endwhile;?>

</body>
</html>


<script>
			function result()
			{	counter = 0
				correct_answer = '<?php echo $correct_answer;?>';
				choice = document.getElementsByName('selectedanswer').innerHTML;
				if (choice == correct_answer){
					counter++;
				}
				alert (counter + "result function");
		}
</script>
