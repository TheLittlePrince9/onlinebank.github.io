<?php

if($_SERVER['REQUEST_METHOD'] === "POST") {
	$id = $_POST['id'];
	$colname = $_POST['col'];
	$value = $_POST['val'];
	
	$updateStr = "UPDATE useraccount SET `$colname` = '$value' WHERE id = '$id'";
	include ('connection.php');
	$exec = mysqli_query($con,$updateStr) or die(mysqli_error($con));
	if($exec == 1){
		echo 1;//response comes from here that the query is executed	
	}
	
}

?>