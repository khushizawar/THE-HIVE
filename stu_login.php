
<?php
	
	include_once 'dbh.inc.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sql = "INSERT INTO student_login (fname,lname,email,pwd) VALUES ('$fname','$lname','$email','$pwd');";
	mysqli_query($conn, $sql);

	header("Location: student.html?signin=success");