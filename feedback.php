
<?php
	
	include_once 'dbh.inc.php';

	$email = $_POST['email'];
	$query = $_POST['feedback'];

	$sql = "INSERT INTO feedback (email, feedback) VALUES ('$email','$feedback');";
	mysqli_query($conn, $sql);

	header("Location: student.html?success");