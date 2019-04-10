<?php
if($_SERVER['REQUEST_METHOD']==="POST")
{ include("../view/dbconfig.php");
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$pass=md5($_POST['password']);
		  
		  
		  $qry="SELECT * FROM details WHERE email='$email' AND password='$pass'";
		  $exe=mysqli_query($con,$qry) or die("error in query");
		  $x=mysqli_fetch_array($exe);
	if($x['password']==$pass)  // important line please note
	{
	if(mysqli_num_rows($exe)>0)
	{
	
	echo "welcome here ". $x['name'];
	
		  
	}
	
	else
	{
		?>
    <script>
	alert("you are not registered yet, kindly sign up")
	window.location.href="../index.php";
	</script><?php
		}}
		else
		{?>
			<script>
	alert("password did not match")
	window.location.href="../index.php";
	</script><?php
    }
	}
	}

?>