<?php
if($_SERVER['REQUEST_METHOD']===$_POST)
{
if(isset($_GET['view']))
{
	echo "view in registerView.php";
	include ('../../controls/connection.php');
	$reg_qry="SELECT * FROM details";
	$reg_qry_exec= mysqli_query($con,$reg_qry) or die('Register not working');	
	if(mysqli_num_rows($reg_qry_exec)>0)
	{
		echo "reg=1";
		header('location:../index.php?reg=1');
	}
	else
	{
		echo "reg=0";
		header('location:../index.php?reg=0');
	}
}
}

?>