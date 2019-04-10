<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><?php
if($_SERVER['REQUEST_METHOD']==="POST")
{ include("connection.php");
	if(isset($_POST['submit']))
	{
		$email=mysqli_real_escape_string($con,$_POST['email1']);
		$pass=md5($_POST['password1']);
		  
		  
		  $qry="SELECT * FROM useraccount WHERE email='$email' AND password='$pass'";
		  $exe=mysqli_query($con,$qry) or die("error in query");
		  $x=mysqli_fetch_array($exe);
	if($x['password']==$pass)  // important line please note
	{
	if(mysqli_num_rows($exe)>0)
	{
	
	
	$_SESSION['user1']=' ';
	$_SESSION['user1']=$x;
	$iddd=$x['id'];
	?>
   
    <script>
	window.location.href="../index.php";
	</script><?php
		  
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


?></body>
</html>
