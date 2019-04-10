<?php

if($_SERVER['REQUEST_METHOD']==="POST")
{
	include("connection.php");
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$num=$_POST['num'];
		$email=$_POST['email'];
		
		$pass=md5($_POST['password']);
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$adds=$_POST['address'];
		$occupation=$_POST['occupation'];
		$confirm=md5($_POST['conpass']);
		
		
		$qryStr = "SELECT email FROM details where email='$email'"; 
		$EXEC = mysqli_query($con,$qryStr);
		if($pass!=$confirm)
		{?>
			<script>
				alert('Password does not match');
            	window.location.href='../index.php';
            </script>
			<?php }
		else
		{
			if(mysqli_num_rows($EXEC)>0)
			{
		
				?><script> alert('You are already registered'); 
		
					window.location.href = '../index.php'; //Redirecting
				</script><?php	
			}
			else
			{
			
        	$qry="INSERT INTO details VALUES('0', '$name','$email', 		'$dob','$gender','$num','$adds','$occupation','$pass','','','')";
		$exe=mysqli_query($con,$qry);
		if($exe==1)
		header("location:../index.php?success=1");#redirecting through php
			}
}
}
}
?>