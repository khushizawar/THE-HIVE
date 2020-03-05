
<?php
	
	include_once 'dbh.inc.php';

	$choice = $_POST['choice'];

	$sql = "INSERT INTO mcq (choice) VALUES ('$choice');";
	mysqli_query($conn, $sql);

	header("Location: piechart.php");