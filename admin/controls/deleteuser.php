
<?php
if($_SERVER['REQUEST_METHOD']==="POST")
{
	include('../../controls/connection.php');	
	$id=$_POST['id'];
	if(is_numeric($id))
	{
		$exqry=mysqli_query($con,"DELETE from useraccount WHERE id='$id'");
	}
	else
	{
			die('Something went wrong');
	}	
	if($exqry==1)
		{echo 1;}
}
?>
