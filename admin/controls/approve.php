<?php
if($_SERVER['REQUEST_METHOD']==="POST")
{
	include('../../controls/connection.php');
	$id=$_POST['id'];
	$colname=$_POST['colname'];
	$value=$_POST['value'];

	$updatequery="UPDATE useraccount SET $colname='$value'  WHERE id='$id' ";
	

	$exquery=mysqli_query($con,$updatequery) or die("error");
	if($exquery==10)
	echo 10;
}


?>
