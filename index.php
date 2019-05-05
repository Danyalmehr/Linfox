
<?php
//must appear BEFORE the <html> tag
session_start();
?>
<?php
$conn = mysqli_connect("localhost","root","","quiz");
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
					

					<tr><td></td>
					</tr>
					
					</table>
					
					
                    </div>
			<?php endwhile;?>
<tr><td><?php echo "<span><input type='submit'name='submit' onClick=='result()'>"?></span></td></form>
</body>
</html>
	
	
<script>
function result()
{
$Counter = 0;
$correct_answer= $row['answer'];
$selectedanswer = "";
if(isset($_POST["selectedanswer"]));
{}

$selectedanswer = $_POST["selectedanswer"];
if($selectedanswer == $correct_answer)
{

}
else {
echo"counter is not".$counter."";
	
}

}
</script>