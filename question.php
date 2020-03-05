
<?php
	
	include_once 'dbh.inc.php';

	$question = $_POST['question'];
	$option1 = $_POST['option1'];
	$option2 = $_POST['option2'];
	$option3 = $_POST['option3'];
	$option4 = $_POST['option4'];
	$sql = "INSERT INTO questions (question,option1,option2,option3,option4) VALUES ('$question','$option1','$option2','$option3','$option4');";
	mysqli_query($conn, $sql);

	header("Location: teacher.html?question_submitted");