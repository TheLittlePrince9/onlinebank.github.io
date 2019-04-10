<?php
	if($_SERVER['REQUEST_METHOD']=== "POST")
	{
		$id=$_POST['id'];
		$value=$_POST['val'];
		$col=$_POST['col'];	
		$updateStr = "UPDATE useraccount SET `$col` = '$value' WHERE id = '$id'";
		include('../../controls/connection.php');
		$exqry= mysqli_query($con,$updateStr);
	}
?>
