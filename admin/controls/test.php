<?php
if ($_SERVER['REQUEST_METHOD']==='POST')
{ 
	if(isset($_POST['request']))
	{
		$req=$_POST['request'];
		if($req==5)
			{
				header("location:../index.php?success=10");
				echo "Working";
			}
		else
			{
				header("location:../index.php?success=20");
				echo " not Working";
			}
	}
}