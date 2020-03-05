
<?php
	
	include_once 'dbh.inc.php';

	$email = $_POST['email'];
	$query = $_POST['query'];

	$sql = "INSERT INTO doubts (email, question) VALUES ('$email','$query');";
	mysqli_query($conn, $sql);

	header("Location: student.html?success");